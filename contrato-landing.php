<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
</head>
<body>

<h1>Contrataciones abiertas</h1>
<form>
  <p>
    <input type="text" name="query" id="general-search">
  </p>
</form>

<aside>
  <h3>Licitación</h3>
  <h2 class="tender-title"></h2>
  <ul id="timeline"></ul>
</aside>
<section>
  <h3>Contrato</h3>
  <h2 class="tender-description"></h2>
</section>

<nav><a href="#">&lt; Dependencia</a></nav>
<ul class="timeline">
  <!-- 
  <li><a href="#" class="nav_stage current">[SVG:contratación]</a>
    <ul>
      <li class="active"><a href="#" data-title="Hace 5 meses" class="t_right"></a></li>
      <li><a href="#" data-title="Hace 5 meses" class="t_left"></a></li>
    </ul>
  </li>
  <li><a href="#" class="nav_stage" data-title="Adjudicación">[SVG:adjudicación]</a> 
    <ul>
      <li><a href="#" data-title="Hace 6 meses" class="t_right"></a></li>
      <li><a href="#" data-title="Hace 6 meses" class="t_left"></a></li>
    </ul>
  </li>
  -->
  <!-- <li><a id="tender-link" href="#" class="nav_stage" data-title="Licitación" data-date="">[SVG:licitación]</a></li> -->
  <li><a id="planning-link" href="#" class="nav_stage" data-title="Planeación" data-date="">[SVG:planeación]</a></li>
</ul>

<script data-main="/js/apps/contrato-landing/main" src="js/bower_components/requirejs/require.js"></script>
</body>
</html>