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

<script data-main="/js/apps/proveedor/main" src="js/bower_components/requirejs/require.js"></script>
</body>
</html>