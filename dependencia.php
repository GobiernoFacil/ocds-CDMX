<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<h1>Contrataciones abiertas</h1>
<form>
  <p>
    <input type="text" name="query" id="general-search">
  </p>
</form>

<h2>Dependencia</h2>
<p id="publisher-name"></p>
<p id="releases-buyer-name"></p>
<p>
  <span id="address-streetAddress"></span>
  <span id="address-locality"></span>
  <span id="address-region"></span>
  CP.<span id="address-postalCode"></span>
</p>

<p id="contrataciones-total-money"></p>
<p id="licitaciones-total-num"></p>
<p id="adjudicaciones-total-num"></p>
<p id="gasto-promedio-money"></p>

<div id="treemap">
  <h3>Total por contrato</h3>
  <p>información recopilada desde <span id="tremmap-data-from"></span></p>
</div>

<h3>Proveedores más beneficiados</h3>
<ul id="lucky-providers"></ul>

<h3>Licitaciones más costosas</h3>
<ul id="licitaciones-costosas"></ul>

<p>Todas las licitaciones: <span id="award-counter-filter"></span></p>
<form>
  <p>
    <select name="filter" id="award-filter-select">
      <option>Todas</option>
      <option>A</option>
      <option>B</option>
    </select>
  </p>
</form>
<ul id="awards-by-filter">
  
</ul>

<script data-main="/js/apps/provider/main" src="js/bower_components/requirejs/require.js"></script>
</body>
</html>