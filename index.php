<!DOCTYPE html>
<html lang="es-mx">
<head>
  <meta charset="UTF-8">
  <title>CiTIM Grupo XB</title>
  <link rel="stylesheet" href="css/problemaStem.css"/>
  <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
  <section class="wrapper">
    <header>
      <h1 class="logo">Uso de la Ciencia, Tecnología, Ingeniería y Matemáticas para resolver problemas</h1>
    </header>
    <section id="contenedor">

      <section class="problema">
        <h2>Problema: Dimensionamiento de baterías para autonomía energética</h2>
        <p><strong>Descripción:</strong></p>
        <p>
          En este caso se utilizarán baterías de 100 Ah con una profundidad de descarga del 80%. Estos datos vienen en la placa
          característica del dispositivo de almacenamiento, y se dimensionarán para que suministren energía eléctrica a 5 días de autonomía.
        </p>
      </section>

      <section class="esquemaProblema">
        <h2>Esquema</h2>
        <center>
          <img class="imgProblema" src="battery-icons-set-with-different-level-of-charge-shown-in-per-cents-charge-indicator-simple-cartoon-illustration-eco-friendly-concept-vector.jpg" alt="Esquema del sistema de baterías">
        </center>
      </section>

      <section class="formulas">
        <h2>Fórmulas</h2>
        <ul>
          <li>
            <strong>Capacidad Total (Ah)</strong> =
            <span>(Consumo Diario × Días de Autonomía) ÷ (Profundidad de descarga × Voltaje del Sistema)</span> × 1.15
          </li>
        </ul>
      </section>

      <section class="datos">
        <h2>Datos:</h2>
        <ul>
          <li>Consumo diario = 13073 Wh</li>
          <li>Autonomía = 5 días</li>
          <li>Profundidad de descarga = 0.80</li>
          <li>Voltaje del sistema = 24 V</li>
        </ul>
      </section>

      <section class="calculos">
        <h2>Solución</h2>
        <form method="post">
          <button type="submit" name="calcular">Presiona para calcular</button>
        </form>
      </section>

      <section class="resultado">
        <h2>Resultado:</h2>
        <div id="resultadoA">
          <?php
          if (isset($_POST['calcular'])) {
              $consumoDiario = 13073; // Wh
              $diasAutonomia = 5;
              $profundidadDescarga = 0.80;
              $voltajeSistema = 24;
              $factorCorreccion = 1.15;

              $capacidad = ($consumoDiario * $diasAutonomia) / ($profundidadDescarga * $voltajeSistema) * $factorCorreccion;

              echo "<strong>Capacidad total requerida:</strong> " . round($capacidad, 2) . " Ah";
          }
          ?>
        </div>
      </section>

    </section>
    <footer class="pie">
      Creative Commons versión 3.0 SciSoft 2024
    </footer>
  </section>
</body>
</html>
