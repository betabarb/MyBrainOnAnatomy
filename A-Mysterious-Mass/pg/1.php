<?php

require_once("../../templates/config.php");

include(ROOT_PATH . "/A-Mysterious-Mass/index.php"); 

?>

	<p>A 33-year-old male presents with ptosis (drooping eyelid), trouble masticating and swallowing, and notices he feels fatigued quickly. An anterior mediastinal mass, 3.5cm in diameter, was found after a CT scan. Histological analysis after biopsy resulted in the slide below.</p>
	<img src="<?php echo BASE_URL; ?>assets/img/mm-pg1.png" class="img-responsive" alt="Responsive image">
	<p>You conclude the mass originated from:</p>
	<div class="answers clearfix">
		<div class="threecol first">
			<a href="<?php echo BASE_URL; ?>A-Mysterious-Mass/ans/thyroid.php" class="btn btn-default">Thyroid</a>
		</div>
		<div class="threecol">
			<a href="<?php echo BASE_URL; ?>A-Mysterious-Mass/ans/lymph_node.php" class="btn btn-default">Lymph node</a>
		</div>
		<div class="threecol">
			<a href="<?php echo BASE_URL; ?>A-Mysterious-Mass/ans/thymus.php" class="btn btn-default">Thymus</a>
		</div>
		<div class="threecol last">
			<a href="<?php echo BASE_URL; ?>A-Mysterious-Mass/ans/parathyroid.php" class="btn btn-default">Parathyroid</a>
		</div>
	</div>
</div>


<?php include(ROOT_PATH . "/templates/footer.php"); ?>