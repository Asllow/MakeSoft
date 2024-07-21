<?php
	$cores = "	<i class=\"fa-solid fa-droplet colorWhite\"></i>
				<i class=\"fa-solid fa-droplet colorBlack\"></i>
				<i class=\"fa-solid fa-droplet colorGray\"></i>
				<i class=\"fa-solid fa-droplet colorBrown\"></i>
				<i class=\"fa-solid fa-droplet colorRed\"></i>
				<i class=\"fa-solid fa-droplet colorOrange\"></i>
				<i class=\"fa-solid fa-droplet colorYellow\"></i>
				<i class=\"fa-solid fa-droplet colorGreen\"></i>
				<i class=\"fa-solid fa-droplet colorBluyTiffany\"></i>
				<i class=\"fa-solid fa-droplet colorBlue\"></i>
				<i class=\"fa-solid fa-droplet colorPurple\"></i>
				<i class=\"fa-solid fa-droplet colorPink\"></i>
				<hr>";
?>

<div class="col-lg-12" style="margin-top:10px;">
	<h1>Impressões 3D</h1>
</div>

<!-- Card 01 dragão com suporte -->
<div class="col-lg-3 col-md-6 col-xs-3 top15px">
	<div class="card">
		<img src="public/img/vasoBubassauro.png" class="card-img-top" alt="...">
		<div class="card-body">
			<h5 class="card-title corTitulo">Vaso Bubassauro</h5>
				<p class="fs-6 fw-light">C: 11cm x L: 6cm x A: 7cm</p>
				<h5>R$ 15,00</h5>
			<?php
				echo $cores;
				echo "<a style=\"width:100%;\" href=\"index.php?a=pix15.php\" class=\"btn btn-outline-dark\"><i class=\"fa-solid fa-qrcode\"></i> QR code</a>";
			?>
		</div>
	</div>
</div>

<!-- Card 02 dragão flexível -->
<div class="col-lg-3 col-md-6 col-xs-3 top15px">
	<div class="card">
		<img src="public/img/vasoOddish.png" class="card-img-top" alt="...">
		<div class="card-body">
			<h5 class="card-title corTitulo">Vaso Oddish</h5>
				<p class="fs-6 fw-light">C: 9cm x L: 8cm x A: 6cm</p>
				<h5>R$ 15,00</h5>
			<?php
				echo $cores;
				echo "<a style=\"width:100%;\" href=\"index.php?a=pix15.php\" class=\"btn btn-outline-dark\"><i class=\"fa-solid fa-qrcode\"></i> QR code</a>";
			?>
		</div>
	</div>
</div>
