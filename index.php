<?php
function calcularFuerza() {
    $masa = 1500; // en kg
    $aceleracion = 0.5; // en m/s²
    $fuerzaSI = $masa * $aceleracion;
    $fuerzaCGS = $fuerzaSI * 1e5;

    return [
        'fuerzaSI' => $fuerzaSI,
        'fuerzaCGS' => $fuerzaCGS
    ];
}

$resultado = calcularFuerza();
?>
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
        <h2>Problema: Aplicación de la Segunda Ley de Newton</h2>
        <p>Descripción:</p>
        <p>
          Según la segunda ley de Newton, cuando sobre un cuerpo de masa <strong>m</strong> actúa una fuerza <strong>F</strong>,
          este adquiere una aceleración <strong>a</strong>, cumpliéndose la relación: <strong>F = m × a</strong>.<br><br>
          Si un cuerpo tiene una masa de <strong>1.5 toneladas</strong> y adquiere una aceleración de <strong>50 cm/s²</strong>,
          determina:<br>
          a) El valor de la fuerza expresada en <strong>Newtons</strong> (Sistema Internacional).<br>
          b) El valor de la fuerza expresada en <strong>dinas</strong> (Sistema C.G.S).
        </p>
      </section>

      <section class="esquemaProblema">
        <h2>Esquema</h2>
        <center>
          <img class="imgProblema" src="segunda-ley-de-newton-aceleracion-fuerza-velocidad-masa-formula-e1565542958443.jpg" alt="Esquema del problema">
        </center>
      </section>

      <section class="formulas">
        <h2>Fórmulas</h2>
        <ul>
          <li><strong>Sistema Internacional (SI):</strong> F = m × a</li>
          <li><strong>Conversión a dinas:</strong> 1 N = 10⁵ dinas</li>
          <li><strong>F (dinas) = F (N) × 10⁵</strong></li>
        </ul>
      </section>

      <section class="datos">
        <h2>Datos:</h2>
        <ul>
          <li>m = 1.5 toneladas = 1500 kg</li>
          <li>a = 50 cm/s² = 0.5 m/s²</li>
        </ul>
      </section>

      <section class="calculos">
        <h2>Solución</h2>
        <p>Los cálculos se han realizado automáticamente al cargar la página.</p>
      </section>

      <section class="resultado">
        <h2>Resultado:</h2>
        <div id="resultadoA">
          <strong>Fuerza en el Sistema Internacional:</strong> <?= number_format($resultado['fuerzaSI'], 2) ?> N<br>
          <strong>Fuerza en el Sistema C.G.S:</strong> <?= number_format($resultado['fuerzaCGS'], 2, '.', '') ?> dinas
        </div>
      </section>

    </section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2024
    </footer>
  </section>
</body>
</html>