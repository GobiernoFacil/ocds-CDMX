<?php
  date_default_timezone_set('America/Mexico_City');
  /* UGLY HACK */
  /*
  $d = array_diff(scandir("./js/data"), ['..', '.', '.DS_Store']);
  $contracts = [];
  foreach($d as $contract){
    $f = file_get_contents("./js/data/" . $contract);
    $j = json_decode($f);

    if($j){
      $id = $j->releases[0]->ocid;
      $contracts[str_replace("/", "-", $id)] = $j;
    }
  }

  $contract_data = [];
  foreach ($contracts as $key => $value) {
    $contract_data[] = [
    "title"                 => $value->releases[0]->planning->budget->project,
    "budget"                => $value->releases[0]->planning->budget->amount->amount,
    "buyer"                 => $value->releases[0]->buyer,
    "awards"                => $value->releases[0]->awards,
    "contracts"             => $value->releases[0]->contracts
    ];
  }

  $total_money = array_reduce($contract_data,function($v1, $v2){
    return $v1 + (float)$v2["budget"];
  },0);
  */

/*
$url = 'http://187.141.34.209:9009/ocpcdmx/listarcontratos';
$data = array('dependencia' => '901', 'ejercicio' => '2015');

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
*/

    $f = file_get_contents("newfile.json");
    $j = json_decode($f);
  ?>

  <?php
/*  
$myfile = fopen("newfile.json", "w") or die("Unable to open file!");
$txt = $result;
fwrite($myfile, $txt);
fclose($myfile);
*/
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <pre>
  <?php
    foreach($j as $contract){
      $url  = 'http://187.141.34.209:9009/ocpcdmx/contratos';
      $data = array('dependencia' => '901', 'contrato' => $contract->ocdsID);

      $options = array(
        'http'    => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
      ));
      $context = stream_context_create($options);
      $result  = file_get_contents($url, false, $context);

      echo $contract->ocdsID . " : " . $result . "<br>";

      $myfile = fopen(str_replace("/", "-", $contract->ocdsID) .".json", "w") or die("Unable to open file!");
      $txt = $result;
      fwrite($myfile, $txt);
      fclose($myfile);
      echo $contract->ocdsID;
    }
  ?>
  </pre>
</body>
</html>