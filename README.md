<mxfile host="app.diagrams.net" modified="2026-07-07T22:55:00.000Z" agent="Mozilla/5.0" version="21.6.9">
  <diagram id="arquitectura" name="Arquitectura Técnica Específica">
    <mxGraphModel dx="1200" dy="800" grid="1" gridSize="10" guides="1" tooltips="1" connect="1" arrows="1" fold="1" page="1" pageScale="1" pageWidth="1169" pageHeight="827" math="0" shadow="0">
      <root>
        <mxCell id="0" />
        <mxCell id="1" parent="0" />

        <!-- CAPA 1 -->
        <mxCell id="capa1" value="CAPA 1: ACTORES Y ACCESO" style="text;strokeColor:none;fillColor:none;fontSize:14;fontStyle=1" vertex="1" parent="1">
          <mxGeometry x="450" y="30" width="250" height="25" as="geometry" />
        </mxCell>
        <mxCell id="est" value="ESTUDIANTE&lt;br&gt;• Perfil VAK&lt;br&gt;• Contenidos" style="rounded=1;fillColor=#E3F2FD;strokeColor=#1976D2;align=center;verticalAlign=middle" vertex="1" parent="1">
          <mxGeometry x="100" y="70" width="180" height="80" as="geometry" />
        </mxCell>
        <mxCell id="doc" value="DOCENTE&lt;br&gt;• Seguimiento&lt;br&gt;• Reportes" style="rounded=1;fillColor=#E3F2FD;strokeColor=#1976D2;align=center;verticalAlign=middle" vertex="1" parent="1">
          <mxGeometry x="320" y="70" width="180" height="80" as="geometry" />
        </mxCell>
        <mxCell id="past" value="PASTORAL&lt;br&gt;• Validación&lt;br&gt;• Valores" style="rounded=1;fillColor=#E3F2FD;strokeColor=#1976D2;align=center;verticalAlign=middle" vertex="1" parent="1">
          <mxGeometry x="540" y="70" width="180" height="80" as="geometry" />
        </mxCell>
        <mxCell id="adm" value="ADMINISTRADOR&lt;br&gt;• Gestión de roles&lt;br&gt;• Configuración" style="rounded=1;fillColor=#E3F2FD;strokeColor=#1976D2;align=center;verticalAlign=middle" vertex="1" parent="1">
          <mxGeometry x="760" y="70" width="180" height="80" as="geometry" />
        </mxCell>

        <!-- CAPA 2 -->
        <mxCell id="capa2" value="CAPA 2: PRESENTACIÓN Y ORQUESTACIÓN" style="text;strokeColor:none;fillColor:none;fontSize:14;fontStyle=1" vertex="1" parent="1">
          <mxGeometry x="420" y="180" width="320" height="25" as="geometry" />
        </mxCell>
        <mxCell id="web" value="APLICACIÓN WEB&lt;br&gt;React 18&lt;br&gt;Interfaz responsiva" style="rounded=1;fillColor=#E8F5E9;strokeColor=#2E7D32;align=center;verticalAlign=middle" vertex="1" parent="1">
          <mxGeometry x="250" y="220" width="220" height="70" as="geometry" />
        </mxCell>
        <mxCell id="api" value="API GATEWAY / BACKEND&lt;br&gt;Laravel 11&lt;br&gt;JWT + RBAC, Seguridad" style="rounded=1;fillColor=#C8E6C9;strokeColor=#2E7D32;align=center;verticalAlign=middle" vertex="1" parent="1">
          <mxGeometry x="500" y="220" width="220" height="70" as="geometry" />
        </mxCell>

        <!-- CAPA 3 -->
        <mxCell id="capa3" value="CAPA 3: CONTEXTO MCP v2024-11" style="text;strokeColor:none;fillColor:none;fontSize:14;fontStyle=1" vertex="1" parent="1">
          <mxGeometry x="430" y="320" width="300" height="25" as="geometry" />
        </mxCell>
        <mxCell id="mcpbox" value="SERVIDORES DE CONTEXTO" style="rounded=1;fillColor=#F3E5F5;strokeColor=#7B1FA2;strokeWidth=2" vertex="1" parent="1">
          <mxGeometry x="200" y="360" width="720" height="100" as="geometry" />
        </mxCell>
        <mxCell id="mcp1" value="MCP 1&lt;br&gt;Perfil Cognitivo" style="rounded=1;fillColor=#FCE4EC;strokeColor=#7B1FA2;align=center;verticalAlign=middle" vertex="1" parent="1">
          <mxGeometry x="220" y="380" width="200" height="60" as="geometry" />
        </mxCell>
        <mxCell id="mcp2" value="MCP 2&lt;br&gt;Axiología Vicentina" style="rounded=1;fillColor=#FCE4EC;strokeColor=#7B1FA2;align=center;verticalAlign=middle" vertex="1" parent="1">
          <mxGeometry x="460" y="380" width="200" height="60" as="geometry" />
        </mxCell>
        <mxCell id="mcp3" value="MCP 3&lt;br&gt;Desempeño Académico" style="rounded=1;fillColor=#FCE4EC;strokeColor=#7B1FA2;align=center;verticalAlign=middle" vertex="1" parent="1">
          <mxGeometry x="700" y="380" width="200" height="60" as="geometry" />
        </mxCell>

        <!-- CAPA 4 -->
        <mxCell id="capa4" value="CAPA 4: MOTOR DE INTELIGENCIA ARTIFICIAL" style="text;strokeColor:none;fillColor:none;fontSize:14;fontStyle=1" vertex="1" parent="1">
          <mxGeometry x="410" y="480" width="340" height="25" as="geometry" />
        </mxCell>
        <mxCell id="ia" value="GPT-4 API v1&lt;br&gt;Generación de contenido adaptado" style="rounded=1;fillColor=#FFF3E0;strokeColor=#EF6C00;align=center;verticalAlign=middle" vertex="1" parent="1">
          <mxGeometry x="280" y="520" width="220" height="70" as="geometry" />
        </mxCell>
        <mxCell id="cache" value="CACHÉ&lt;br&gt;Redis 7&lt;br&gt;Optimización de rendimiento" style="rounded=1;fillColor=#FFE0B2;strokeColor=#EF6C00;align=center;verticalAlign=middle" vertex="1" parent="1">
          <mxGeometry x="560" y="520" width="220" height="70" as="geometry" />
        </mxCell>

        <!-- CAPA 5 -->
        <mxCell id="capa5" value="CAPA 5: ALMACENAMIENTO Y SEGURIDAD" style="text;strokeColor:none;fillColor:none;fontSize:14;fontStyle=1" vertex="1" parent="1">
          <mxGeometry x="425" y="620" width="310" height="25" as="geometry" />
        </mxCell>
        <mxCell id="bd" value="MYSQL 8.0&lt;br&gt;Cifrado AES-256&lt;br&gt;Ley N° 29733, ISO 27001" style="rounded=1;fillColor=#F5F5F5;strokeColor=#424242;align=center;verticalAlign=middle" vertex="1" parent="1">
          <mxGeometry x="320" y="660" width="380" height="80" as="geometry" />
        </mxCell>

        <!-- CAPA 6 -->
        <mxCell id="capa6" value="CAPA 6: INTEGRACIÓN Y DESPLIEGUE" style="text;strokeColor:none;fillColor:none;fontSize:14;fontStyle=1" vertex="1" parent="1">
          <mxGeometry x="430" y="770" width="300" height="25" as="geometry" />
        </mxCell>
        <mxCell id="lms" value="LMS Institucional&lt;br&gt;Moodle / Google Classroom&lt;br&gt;LTI 1.3" style="rounded=1;fillColor=#ECEFF1;strokeColor=#607D8B;align=center;verticalAlign=middle" vertex="1" parent="1">
          <mxGeometry x="200" y="810" width="220" height="70" as="geometry" />
        </mxCell>
        <mxCell id="tts" value="Servicios TTS&lt;br&gt;Accesibilidad" style="rounded=1;fillColor=#ECEFF1;strokeColor=#607D8B;align=center;verticalAlign=middle" vertex="1" parent="1">
          <mxGeometry x="470" y="810" width="220" height="70" as="geometry" />
        </mxCell>
        <mxCell id="nube" value="Infraestructura en Nube&lt;br&gt;Disponibilidad ≥99.5%" style="rounded=1;fillColor=#ECEFF1;strokeColor=#607D8B;align=center;verticalAlign=middle" vertex="1" parent="1">
          <mxGeometry x="720" y="810" width="220" height="70" as="geometry" />
        </mxCell>

        <!-- Flechas -->
        <mxCell id="f1" value="HTTPS / TLS 1.3" style="endArrow=block;strokeWidth=1;fontSize=10" edge="1" parent="1">
          <mxGeometry x="0" y="0" width="1" height="1" as="geometry">
            <mxPoint x="550" y="150" as="sourcePoint" />
            <mxPoint x="550" y="210" as="targetPoint" />
          </mxGeometry>
        </mxCell>
        <mxCell id="f2" value="API REST / JSON" style="endArrow=block;strokeWidth=1;fontSize=10" edge="1" parent="1">
          <mxGeometry x="0" y="0" width="1" height="1" as="geometry">
            <mxPoint x="550" y="300" as="sourcePoint" />
            <mxPoint x="550" y="350" as="targetPoint" />
          </mxGeometry>
        </mxCell>
        <mxCell id="f3" value="Contexto MCP" style="endArrow=block;strokeWidth=1;fontSize=10" edge="1" parent="1">
          <mxGeometry x="0" y="0" width="1" height="1" as="geometry">
            <mxPoint x="550" y="460" as="sourcePoint" />
            <mxPoint x="550" y="510" as="targetPoint" />
          </mxGeometry>
        </mxCell>
        <mxCell id="f4" value="Datos persistidos" style="endArrow=block;strokeWidth=1;fontSize=10" edge="1" parent="1">
          <mxGeometry x="0" y="0" width="1" height="1" as="geometry">
            <mxPoint x="550" y="600" as="sourcePoint" />
            <mxPoint x="550" y="650" as="targetPoint" />
          </mxGeometry>
        </mxCell>
      </root>
    </mxGraphModel>
  </diagram>
</mxfile>
