<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// API Key obtenida de Google AI Studio
$gemini_api_key = "AQ.Ab8RN6Lnh8YQfytgz-zQucqK4dLHEw3pEI96Vr0wPSrWWn9_wg";

// Conexión a MySQL
$host = "localhost";
$user = "root";
$pass = "";
$db   = "tesis_manuel_pardo";

$conn = @new mysqli($host,$user, $pass,$db);

if ($conn->connect_error) {
    echo json_encode(array("respuesta" => "Error al conectar con MySQL: " . $conn->connect_error));
    exit();
}

$id_usuario = isset($_POST['id_usuario']) ? intval($_POST['id_usuario']) : 1;
$estilo_vak = isset($_POST['estilo_vak']) ? trim($_POST['estilo_vak']) : 'Visual';$materia    = isset($_POST['materia']) ? trim($_POST['materia']) : 'General';
$tema       = isset($_POST['tema']) ? trim($_POST['tema']) : 'General';$pregunta   = isset($_POST['pregunta']) ? trim($_POST['pregunta']) : '';

if (!empty($pregunta)) {

    $system_instructions = "Eres un tutor virtual adaptativo para educación primaria de la I.E.P. Manuel Pardo. "
                         . "Responde con claridad y dinamismo. Adapta la explicación al estilo VAK ($estilo_vak). "
                         . "Devuelve código HTML directo (usando <b>, <i>, <br>, <ul>, <li>) sin etiquetas markdown ```html.";

    $user_prompt = "Materia: $materia\nTema: $tema\nPregunta: $pregunta";

    // Endpoint directo a Gemini 1.5 Flash pasando la API key por parámetro URL
    $url = "[https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=](https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=)" . trim($gemini_api_key);

    $payload = array(
        "system_instruction" => array(
            "parts" => array(array("text" => $system_instructions))
        ),
        "contents" => array(
            array("parts" => array(array("text" => $user_prompt)))
        )
    );

    $json_payload = json_encode($payload);

    // Intento 1: Usando cURL con soporte IPv4 estricto
    $response = false;
    $http_code = 0;
    $curl_err = "";

    if (function_exists('curl_init')) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json_payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
        
        // Ajustes para evitar timeouts y fallos DNS en XAMPP / Windows
        curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);

        $response = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $curl_err = curl_error($ch);
        curl_close($ch);
    }

    // Intento 2: Fallback con stream_context_create si cURL falla
    if ($response === false || empty($response)) {
        $opts = array(
            'http' => array(
                'method'  => 'POST',
                'header'  => "Content-Type: application/json\r\n",
                'content' => $json_payload,
                'timeout' => 30
            ),
            'ssl' => array(
                'verify_peer'      => false,
                'verify_peer_name' => false
            )
        );
        $context = stream_context_create($opts);
        $response = @file_get_contents($url, false, $context);
        if ($response !== false) {
            $http_code = 200;
        }
    }

    $respuesta_ia = "";

    if ($response !== false && !empty($response)) {
        $result = json_decode($response, true);
        if (isset($result['candidates'][0]['content']['parts'][0]['text'])) {
            $respuesta_ia = $result['candidates'][0]['content']['parts'][0]['text'];
        } else if (isset($result['error']['message'])) {
            $respuesta_ia = "⚠️ <b>Error de la API Gemini:</b> " . $result['error']['message'];
        } else {
            $respuesta_ia = "⚠️ Respuesta recibida sin la estructura esperada.";
        }
    } else {
        $respuesta_ia = "⚠️ <b>Error de conexión local:</b> Apache/PHP no puede conectar con la API externa. Verifique la conexión a internet de la PC o el Firewall de Windows.";
    }

    // Guardar historial en la base de datos MySQL
    $conn->query("SET FOREIGN_KEY_CHECKS = 0;");
    $p_db = $conn->real_escape_string($pregunta);
    $r_db = $conn->real_escape_string($respuesta_ia);
    $v_db = $conn->real_escape_string($estilo_vak);
    $m_db = $conn->real_escape_string($materia);
    $t_db = $conn->real_escape_string($tema);

    $sql = "INSERT INTO historial_respuestas (id_usuario, estilo_vak, materia, tema, pregunta, respuesta_generada) 
            VALUES ($id_usuario, '$v_db', '$m_db', '$t_db', '$p_db', '$r_db')";

    $conn->query($sql);
    $conn->query("SET FOREIGN_KEY_CHECKS = 1;");

    echo json_encode(array("respuesta" => $respuesta_ia));

} else {
    echo json_encode(array("respuesta" => "Escribe una pregunta para consultar."));
}

$conn->close();
?>