<?php
	/*
	* 
	* LOAD THE DATA 
	*/	

	date_default_timezone_set('America/Mexico_City');
	/* UGLY HACK */
	$d = array_diff(scandir("./js/data"), ['..', '.', '.DS_Store']);
	$contracts = [];
	foreach($d as $contract)
	{
		$f = file_get_contents("./js/data/" . $contract);
    	$j = json_decode($f);
		
    	$id = $j->releases[0]->ocid;
    	$contracts[str_replace("/", "-", $id)] = $j;       
  	}
 
  	$elcontrato = $contracts['OCDS-87SD3T-SEFIN-DRM-AD-CC-008-2015'];
  	
  	/*
  	*
	*/
	$body_class 	= "contract";
	$title 			= "Contrato";
	$description 	= "Contrato";
	$og_image		= "img/og/contrato-cdmx.png";
	$canonical		= $url;
	include "templates/header.php";?>
<div class="breadcrumb">
	<div class="container">
		<a href="#"><strong>&lt;</strong> SEFIN</a>
	</div>
</div>
<article>
	<div class="col-sm-3 sidebar">
		<div class="header">
			<?php if ($elcontrato->releases[0]->tender):?>
			<h3>LICITACIÓN</h3>
			<h2><?php echo $elcontrato->releases[0]->tender->title;?></h2>
			<?php else:?>
			<h3>PLANEACIÓN</h3>
			<h2><?php echo $elcontrato->releases[0]->planning->budget->project;?></h2>
			<?php endif;?>
		</div>
		<nav>
			<ul class="timeline">
				<?php if($elcontrato->releases[0]->contracts):?>
				<li><a href="#"  id="btn-contract-nav" class="nav_stage current" data-title="Contratación">
					<?php echo file_get_contents("img/nav_contratacion.svg"); ?></a>
					<ul id="nav_contract">
						<?php 
							$count_nav = 0;
							foreach($elcontrato->releases[0]->contracts as $contract):?>
						<?php 
							  $count_nav++;
							  $time_contract = strtotime($contract->dateSigned);
							  $time_contract = date('d/m/Y',$time_contract);?>
						<li class="active"><a id="btn-contract-<?php echo $count_nav;?>" href="#" data-title="<?php echo $time_contract;?>" class="t_right"></a></li>
						<?php endforeach;?>
					</ul>
				</li>
				<?php endif;?>
				<?php if($elcontrato->releases[0]->awards):?>
				<li><a href="#" id="btn-award-nav" class="nav_stage" data-title="Adjudicación"><?php echo file_get_contents("img/nav_adjudicacion.svg"); ?></a> 
					<ul id="nav_award">
						<?php $count_nav = 0;
							foreach($elcontrato->releases[0]->awards as $award):?>
						<?php 
							  $count_nav++;
							  $time_award = strtotime($award->date);
							  $time_award = date('d/m/Y',$time_award);?>
						<li><a id="btn-award-<?php echo $count_nav;?>" href="#" data-title="<?php echo $time_award;?>" class="t_right"></a></li>
						<?php endforeach;?>
					</ul>
				</li>
				<?php endif;?>
				<?php if($elcontrato->releases[0]->planning):?>
				<li><a href="#" id="btn-tender" class="nav_stage" data-title="Licitación"><?php echo file_get_contents("img/nav_licitacion.svg"); ?></a></li>
				<?php endif;?>
				<?php if($elcontrato->releases[0]->tender):?>
				<li><a href="#" id="btn-planning"class="nav_stage" data-title="Planeación"><?php echo file_get_contents("img/nav_planeacion.svg"); ?></a></li>
				<?php endif;?>
			</ul>
		</nav>
	</div>	
			
	<div class="col-sm-9 info">			
				<!-- tender-->
				<div id="tender">
					<div class="row divider">
						<div class="col-sm-12">
							<p class="title_section">Licitación</p>
							<h1><?php echo $elcontrato->releases[0]->tender->title;?></h1>
							<h2><?php echo $elcontrato->releases[0]->tender->id;?> 
							<span class="label <?php echo $elcontrato->releases[0]->tender->status;?>">
							<?php echo $elcontrato->releases[0]->tender->status == "complete" ? 'COMPLETO' : '';?></span>
							</h2>
							<p class="lead"><?php echo $elcontrato->releases[0]->tender->description;?></p>
						</div>
					</div>
					<div class="row divider">
						<div class="col-sm-4">
							<p class="title_section">PRESUPUESTO (MXN)</p>
							<?php $budget_amount = $elcontrato->releases[0]->tender->value->amount;?>
							<h2 class="amount"><b class="budget"></b><span>$</span><?php echo number_format($budget_amount,2, '.', ',');?></h2>
						</div>
						<div class="col-sm-4">
							<p class="title_section">Gastado (MXN)</p>
							<?php
								if($elcontrato->releases[0]->contracts[0]->value->amount)	{
									$amount_gastado =  $elcontrato->releases[0]->contracts[0]->value->amount;
								}
								else {
									$amount_gastado =  0;
								}	
							?>
							<h2 class="amount"><b class="spent"></b><span>$</span><?php echo number_format($amount_gastado,2, '.', ',');?></h2>
						</div>
						<div class="col-sm-4">
							<?php 
								$percent_tender = ($amount_gastado * 100)/$budget_amount;
								
								if ($percent_tender > 100) {
									$percent_budget = ($budget_amount * 100)/$amount_gastado . '%' ;
									$percent_spent  = '100%';
								}
								else {
									$percent_budget = '100%';
									$percent_spent = $percent_tender .'%';
								}
								
							?>
							
							<p class="title_section">% GASTADO</p>
							<div class="percent">
								<div class="budget" style="width: <?php echo $percent_budget;?>"></div>
								<div class="spent"  style="width: <?php echo $percent_spent;?>"></div>
							</div>
							<p class="title_section"><span>0</span> <span class="right"><?php echo $percent_tender > 100 ? number_format($percent_tender) : '100';?>%</span></p>
						</div>
					</div>
					<div class="row divider">
						<div class="col-sm-12">
							<p class="title_section">Línea de tiempo</p>
						</div>
					</div>
					<div class="row divider">
						<div class="col-sm-4">
							<p class="title_section">COMPRADOR</p>
							<p><a href="/dependencia.php"><?php echo $elcontrato->releases[0]->tender->procuringEntity->name;?></a></p>
						</div>
						<div class="col-sm-4">
							<p class="title_section">MÉTODO DE ADQUISICIONES</p>
							<?php switch ($elcontrato->releases[0]->tender->procurementMethod){
								case "selective":
									$procurementMethod = "Selectiva";
									break;
								case "open":
									$procurementMethod = "Abierta";
									break;
								case "limited":
									$procurementMethod = "Limitada";
									break;
							}?>
							<p><?php echo $procurementMethod;?> </p>
						</div>
						<div class="col-sm-4">
							<?php switch ($elcontrato->releases[0]->tender->awardCriteria){
								case "lowestCost":
									$awardCriteria = "Costo más bajo";
									break;
								case "bestProposal":
									$awardCriteria = "Mejor Propuesta";
									break;
								case "bestValueToGovernment":
									$awardCriteria = "Mejor oferta al Gobierno";
									break;
								case "bestValueToGovernment":
									$singleBidOnly = "Oferta";
									break;
							}?>
							<p class="title_section">CRITERIOS DE ADJUDICACIÓN</p>
							<p><?php echo $awardCriteria;?></p>
						</div>
					</div>
					
					<div class="row divider">
						<div class="col-sm-8">
							<p class="title_section">ARTÍCULOS</p>
							<ul>
								<?php foreach ($elcontrato->releases[0]->tender->items as $item):?>
								<li class="row">
									<span class="col-sm-9"><?php echo $item->description;?> </span>
									<span class="col-sm-3"><?php echo $item->quantity;?> <?php echo $item->unit->name;?> </span>
								</li>
								<?php endforeach;?>		
							</ul>
						</div>
						
						<div class="col-sm-4">
							<p class="title_section">DOCUMENTOS</p>
						</div> 
					</div>
					
					<div class="row">
						<div class="col-sm-4">
							<p class="title_section">LICITADORES que aplicaron</p>
							<h2 class="amount"><?php echo $elcontrato->releases[0]->tender->numberOfTenderers;?></h2>
							<ol>
								<?php foreach ($elcontrato->releases[0]->tender->tenderers as $tenderer):?>
								<li><a href="#"><?php echo $tenderer->name;?></a> - <?php echo $tenderer->address->region;?></li>
								<?php endforeach;?>	
							</ol>
						</div>
						<div class="col-sm-4">
							<p class="title_section">Adjudicaciones</p>
							<h2 class="amount"><?php echo count($elcontrato->releases[0]->awards);?></h2>
							<ol>
								<?php foreach ($elcontrato->releases[0]->awards[0]->suppliers as $supplier):?>
								<li><a href="#"><?php echo $supplier->name;?></a></li>
								<?php endforeach;?>	
							</ol>
						</div>
						<div class="col-sm-4">
							<p class="title_section">Contratos</p>
							<h2 class="amount"><?php echo count($elcontrato->releases[0]->contracts);?></h2>
							<ol>
								<?php foreach ($elcontrato->releases[0]->contracts as $contract):?>
								<li><a href="#"><?php echo $contract->title;?></a></li>
								<?php endforeach;?>	
							</ol>
						</div> 
					</div>
				</div>
				
				<!--awards-->
				<?php if($elcontrato->releases[0]->awards):?>
				
					<?php foreach($elcontrato->releases[0]->awards as $award):?>
					<div id="award-<?php echo $award->id;?>">
						<div class="row divider">
							<div class="col-sm-12">
								<p class="title_section">Adjudicación</p>
								<h1><?php echo $award->title;?></h1>
								<h2>ID: <?php echo $award->id;?> <span class="label <?php echo $award->status;?>"><?php echo $award->status == "active" ? "ACTIVO":"";?></span></h2>
							</div>
						</div>
						
						<div class="row divider">
							<div class="col-sm-6">
								<p class="title_section">Descripción</p>
								<p><?php echo $award->description;?></p>
							</div>
							<div class="col-sm-6">
								<h2 class="amount"><span>$</span> <?php echo number_format($award->value->amount,2,'.',',');?> <span><?php echo $award->value->currency;?></span></h2>
							</div>
						</div>
						
						<div class="row divider">
							<div class="col-sm-6">
								<p class="title_section">Proveedor</p>
								<p><a href="#"><?php echo $award->suppliers[0]->name;?></a></p>
							</div>
							<div class="col-sm-6">
								<p class="title_section">Fecha</p>
								<?php $time_award = strtotime($award->date);?>
								<p><?php echo date('d-m-Y',$time_award);?></p>
							</div>
						</div>
						
						<div class="row">
							<div class="col-sm-8">
								<p class="title_section">ARTÍCULOS</p>
								<ul>
									<?php foreach ($award->items as $item):?>
									<li class="row">
										<span class="col-sm-9"><?php echo $item->description;?></span>
										<span class="col-sm-3"><?php echo $item->quantity;?> <?php echo $item->unit->name;?></span>
									</li>
									<?php endforeach;?>							
								</ul>
							</div>
							
							<div class="col-sm-4">
								<p class="title_section">DOCUMENTOS</p>
							</div>
						</div>
					</div>
					<?php endforeach;?>
				
				<?php endif;?>
				
				<!-- contratos-->
				<?php if($elcontrato->releases[0]->contracts):?>
					<?php foreach($elcontrato->releases[0]->contracts as $contract):?>
					<div id="contract-<?php echo $contract->id;?>">
					<div class="row divider">
						<div class="col-sm-12">
							<p class="title_section">Contrato</p>
							<h1><?php echo $contract->description;?></h1>
							<h2><?php echo $contract->title;?> <span class="label <?php echo $contract->status;?>">
							<?php echo $contract->status == "active" ? "ACTIVO" : "";?></span></h2>
						</div>
					</div>
					<div class="row divider">
						<div class="col-sm-6">
							<p class="title_section">MONTO</p>
							<h2 class="amount"><span>$</span><?php echo number_format($contract->value->amount,2,'.',',');?><span><?php echo $contract->value->currency;?></span></h2>
						</div>
						<div class="col-sm-6">
							<p class="title_section">PROVEEDOR</p>
							<?php foreach($elcontrato->releases[0]->awards as $award):?>
								<?php if ($contract->awardID == $award->id):?>
									<p><a href=""><?php echo $award->suppliers[0]->name;?></a></p>
								<?php endif;?>
							<?php endforeach;?>
						</div> 
					</div>
					<div class="row divider">
						<div class="col-sm-5">
							<p class="title_section">COMPRADOR</p>
							<p><a href="/dependencia.php"><?php echo $elcontrato->releases[0]->tender->procuringEntity->name;?></a></p>
						</div>
						<div class="col-sm-3">
							<p class="title_section">FECHA DE FIRMA</p>
							<?php $time_contract = strtotime($contract->dateSigned);?>
							<p><?php echo date('d/m/Y',$time_contract);?></p>
						</div>
						<div class="col-sm-4">
							<p class="title_section">PERÍODO</p>
							<?php 
								$period_startDate = strtotime($contract->period->startDate);
								$period_endDate = strtotime($contract->period->endDate);
							?>
							<p><strong><?php echo date('d/m/Y',$period_startDate);?></strong> a <strong><?php echo date('d/m/Y',$period_endDate);?></strong></p>
							
						</div> 
					</div>
					
						<div class="row">
							<div class="col-sm-8">
								<p class="title_section">ARTÍCULOS</p>
								<ul>
									<?php foreach($contract->items as $item):?>
									<li class="row">
										<span class="col-sm-9"><?php echo $item->description;?></span>
										<span class="col-sm-3 right"><?php echo number_format($item->quantity);?> <?php echo $item->unit->name;?></span>
									</li>
									<?php endforeach;?>									
								</ul>
							</div>
							
							<div class="col-sm-4">
								<p class="title_section">DOCUMENTOS</p>
							</div> 
						</div>
					</div>
					<?php endforeach;?>

				<?php endif;?>
				
				
				<!-- planning-->
				<div id="planning">
					<div class="row divider">
						<div class="col-sm-12">
							<p class="title_section">Planeación</p>
							<h1><?php echo $elcontrato->releases[0]->planning->budget->project;?></h1>
							<h2><?php echo $elcontrato->releases[0]->tender->id;?></h2>
						</div>
					</div>
					<div class="row divider">
						<div class="col-sm-6">
							<p class="title_section">PRESUPUESTO (<?php echo $elcontrato->releases[0]->planning->budget->amount->currency;?>)</p>
							<h2 class="amount"><span>$</span><?php echo number_format($elcontrato->releases[0]->planning->budget->amount->amount,2,'.',',');?></h2>
						</div>
						<div class="col-sm-6">
							<p class="title_section">Fecha</p>
							<?php $time_planning = strtotime($elcontrato->releases[0]->date);?>
							<p><?php echo date('d/m/Y',$time_planning);?> </p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<p class="title_section">COMPRADOR</p>
							<p><a href="/dependencia.php"><?php echo $elcontrato->releases[0]->tender->procuringEntity->name;?></a></p>
						</div>
					</div>
				</div>
				
			</div>
			<div class="clearfix"></div>
</article>

<script type="text/javascript" src="js/bower_components/jquery/dist/jquery.min.js"></script>
<script>
$( document ).ready(function() {
	
	var tender 	  	= $("#tender"),
		planning	= $("#planning"),
		contract1 	= $("#contract-1"),
		contract2 	= $("#contract-2"),
		award1 		= $("#award-1"),
		award2 		= $("#award-2"),
		timeline	= $(".timeline li"),
		//subnav
		nav_contract = $("#nav_contract"),
		nav_award 	 = $("#nav_award"),
		///btn
		btn_contract_nav = $("#btn-contract-nav"),
		btn_contract1 	 = $("#btn-contract-1"),
		btn_contract2 	 = $("#btn-contract-2"),
		btn_award_nav	 = $("#btn-award-nav"),
		btn_award1 	 	 = $("#btn-award-1"),
		btn_award2 	 	 = $("#btn-award-2"),
		btn_planning	 = $("#btn-planning"),
		btn_tender	  	 = $("#btn-tender");
	
	///hide
	tender.hide();
	planning.hide();
	award1.hide();
	award2.hide();
	contract2.hide();
	nav_award.hide();
	
	
	function changeClass(element) {
		timeline.removeClass("active");
		timeline.children("a").removeClass("current");
		$(element).parent("li").addClass("active");
		$(element).addClass("current");
	};
	
	//// btns
	btn_contract_nav.on("click", function (){
		event.preventDefault();
		timeline.removeClass("active");
		timeline.children("a").removeClass("current");
		$(this).addClass("current");		
		nav_contract.children("li:first-child").addClass("active");
		//hide
		tender.hide();
		planning.hide();
		award1.hide();
		award2.hide();
		nav_award.hide();
		contract2.hide();
		//show
		nav_contract.show();
		contract1.show();
	});
	btn_contract1.on("click", function (){
		event.preventDefault();
		changeClass(this);
		$(this).addClass("active");
		btn_contract_nav.addClass("current")
		//hide
		tender.hide();
		planning.hide();
		award1.hide();
		award2.hide();
		contract2.hide();
		nav_award.hide();
		//show
		nav_contract.show();
		contract1.show();
	});
	btn_contract2.on("click", function (){
		event.preventDefault();
		changeClass(this);
		$(this).addClass("active");
		btn_contract_nav.addClass("current")
		//hide
		tender.hide();
		planning.hide();
		award1.hide();
		award2.hide();
		contract1.hide();
		nav_award.hide();
		//show
		nav_contract.show();
		contract2.show();
	});
	
	///btn awards
	btn_award_nav.on("click", function (){
		event.preventDefault();
		timeline.removeClass("active");
		timeline.children("a").removeClass("current");
		$(this).addClass("current");		
		nav_award.children("li:first-child").addClass("active");
		//hide
		tender.hide();
		planning.hide();
		award2.hide();
		contract1.hide();
		contract2.hide();
		nav_contract.hide();
		//show
		nav_award.show();
		award1.show();
	});
	btn_award1.on("click", function (){
		event.preventDefault();
		changeClass(this);
		$(this).addClass("active");
		btn_award_nav.addClass("current")
		//hide
		tender.hide();
		planning.hide();
		award2.hide();
		contract1.hide();
		contract2.hide();
		nav_contract.hide();
		//show
		nav_award.show();
		award1.show();
	});
	btn_award2.on("click", function (){
		event.preventDefault();
		changeClass(this);
		$(this).addClass("active");
		btn_award_nav.addClass("current")
		//hide
		tender.hide();
		planning.hide();
		award1.hide();
		contract1.hide();
		contract2.hide();
		nav_contract.hide();
		//show
		nav_award.show();
		award2.show();
	});
	
	///btn tender
	btn_tender.on("click", function (){
		event.preventDefault();
		changeClass(this);
		//hide
		contract1.hide();
		planning.hide();
		contract2.hide();
		nav_contract.hide();
		award1.hide();
		award2.hide();
		nav_award.hide();
		//show
		tender.show();
	});
	
	///btn planning
	btn_planning.on("click", function (){
		event.preventDefault();
		changeClass(this);
		//hide
		tender.hide();
		contract1.hide();
		contract2.hide();
		nav_contract.hide();
		award1.hide();
		award2.hide();
		nav_award.hide();
		//show
		planning.show();
	});
    
});
</script>
	
<?php include "templates/footer.php";?>