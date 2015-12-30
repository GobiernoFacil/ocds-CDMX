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

<h2>Proveedor</h2>
<p id="identifier-id"></p>
<p id="name"></p>
<p>
  <span id="address-streetAddress"></span>
  <span id="address-locality"></span>
  <span id="address-region"></span>
  CP.<span id="address-postalCode"></span>
</p>
<p id="total-awards-money"></p>
<p id="total-awards-num"></p>

<h3>Contratos con dependencias</h3>
<ul id="contracts-by-office"></ul>

<h3>Licitaciones más costosas adjudicadas</h3>
<ul id="most-expensive-awards"></ul>

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

<script data-main="/js/apps/proveedor/main" src="js/bower_components/requirejs/require.js"></script>
</body>
</html>