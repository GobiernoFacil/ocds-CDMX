	<?php
	date_default_timezone_set('America/Mexico_City');
	/* UGLY HACK */
	$d = array_diff(scandir("./js/data"), ['..', '.', '.DS_Store']);
  $contracts = [];
  foreach($d as $contract){
  	$f = file_get_contents("./js/data/" . $contract);
    $j = json_decode($f);

    $id = $j->releases[0]->ocid;
    $contracts[str_replace("/", "-", $id)] = $j;
  }
	?>



	<?php 	
	$body_class 	= "home2";
	$title 			= "Contrataciones Abiertas de la Ciudad de México";
	$description 	= "Contrataciones Abiertas de la Ciudad de México";
	$og_image		= "img/og/contrataciones-abiertas-cdmx.png";
	$canonical		= $url;
	include "templates/header.php";?>
	
<div class="breadcrumb">
	<div class="container">
		<nav class="row">
			<div class="col-sm-5">
			Contratos
			</div>
			<div class="col-sm-7 right">
				<a href="#" class="advanced_search">Advanced Search</a>
				<a href="#" id="dependencia-a" class="ladependencia empresa">Proveedores</a>
				<a href="#" id="dependencia-a" class="ladependencia live">Dependencia</a>
			</div>
		</nav>
	</div>
</div>




<div class="viz_home">
	<header>
		<div class="col-sm-4">
			<p><span>DEPENDENCIA</span>SEFIN</p>
		</div>
		<div class="col-sm-4 center">
			<p><span>CONTRATOS POR DEPENDENCIA</span> <strong>10</strong></p>
		</div>
		<div class="col-sm-4">
			<p><span>TOTAL (MXN)</span>$<strong>267</strong> millones </p>
		</div>
	</header>
	<p id="publisher-name"></p>
	<p id="contratos-total-num"></p>
	<p id="contratos-total-money"></p>
	
	<div id="treempap"></div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h3>Contratos</h3>
			<ul class="list">
	
				<?php
				  // aquí se capturan los datos para la lista  
				  foreach ($contracts as $key => $value): 
				  	$title  = $value->releases[0]->planning->budget->project;
				    $budget = $value->releases[0]->planning->budget->amount->amount;
				    $buyer  = $value->releases[0]->buyer;
				    $awards = $value->releases[0]->awards;
				    $contracts = $value->releases[0]->contracts;
				    $first_supplier = empty($awards) ? "sin proveedor" : $awards[0]->suppliers[0]->name;
				    $first_contract_items = empty($contracts) ? 0 : count($contracts[0]->items);
				    $first_contract_status = empty($contracts) ? null : $contracts[0]->status;
				    $first_contract_time = empty($contracts) ? null : strtotime($contracts[0]->period->startDate);
				?>
				<li class="row">
					<div class="col-sm-9 top">
						<h2><a href="contrato.php"><?php echo $title; ?> <!-- <span>CS-019/2015</span>--></a></h2>
					</div>
					<div class="col-sm-3 amount top">
						<p><span>$</span> <?php echo number_format($budget); ?> <span>MXN</span></p>
					</div>
					<div class="clearfix"></div>
					<div class="icons">
						<div class="col-sm-4">
							<p>Comprador: <a href="#"><?php echo ($buyer ? $buyer->name : "No está definido"); ?></a></p>
						</div>
						<div class="col-sm-4">
							<p>Proveedor: <a href="#"><?php echo $first_supplier; ?></a></p>
						</div>
						<div class="col-sm-4">
							<ul>
								<li>
									<?php
									if(empty($first_contract_status)){
										echo "no ha iniciado";
									} 
									elseif($first_contract_status == "active"){
										echo "Activo";
									}
									else{
										echo "Completado";
									}
									?>
								</li>
								<li class="contrato_num"><?php echo $first_contract_items; ?></li>
								<li class="time_num">
								  <?php
								  if(empty($first_contract_time)){
								   	echo "0 meses";
								  }
								  else{
								  	$from = new DateTime();
								  	$from->setTimestamp($first_contract_time);
								  	$to = new DateTime();
								  	$to->setTimestamp(time());

								  	$diff=date_diff($from,$to);
								  	if(!$diff->y && !$diff->m) {
								  		echo "0 meses"; // acaba de iniciar
								  	}
								  	elseif (!$diff->y && $diff->m == 1) {
								  		echo "1 mes";
								  	}
								  	elseif (!$diff->y && $diff->m > 1) {
								  		echo $diff->m . " meses";
								  	}
								  	else{
								  		echo "+1 año";
								  	}
								  }
								  ?>
								</li>
							</ul>
						</div>
						<!--
						<pre>
						  <?php var_dump($awards); ?>
						</pre>
						-->
						
						<div class="clearfix"></div>
					</div>

				</li>
			<?php endforeach; ?>


			</ul>
		</div>
	</div>
</div>



<ul id="contratos-list"></ul>

<script data-main="/js/apps/provider/main" src="js/bower_components/requirejs/require.js"></script>
	<?php include "templates/footer.php";?>