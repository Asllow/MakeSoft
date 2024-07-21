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

<!-- Card 01 Dragão Articulado -->
<div class="col-lg-3 col-md-6 col-xs-3 top15px">
	<div class="card">
		<img src="public/img/dragaoSemSuporte.png" class="card-img-top" alt="...">
		<div class="card-body">
				<h5 class="card-title corTitulo">Dragão Articulado</h5>
				<p class="fs-6 fw-light"></p>
				<h5>R$ 28,00</h5>
			<?php
				echo $cores;
				echo "<a style=\"width:100%;\" href=\"index.php?a=pix28.php\" class=\"btn btn-outline-dark\"><i class=\"fa-solid fa-qrcode\"></i> QR code</a>";
			?>
		</div>
	</div>
</div>

<!-- Card 02 Suporte Para Dragão -->
<div class="col-lg-3 col-md-6 col-xs-3 top15px">
	<div class="card">
		<img src="public/img/suportedragao.png" class="card-img-top" alt="...">
		<div class="card-body">
				<h5 class="card-title corTitulo">Suporte Para Dragão</h5>
				<p class="fs-6 fw-light"></p>
				<h5>R$ 10,00</h5>
			<?php
				echo $cores;
				echo "<a style=\"width:100%;\" href=\"index.php?a=pix10.php\" class=\"btn btn-outline-dark\"><i class=\"fa-solid fa-qrcode\"></i> QR code</a>";
			?>
		</div>
	</div>
</div>

<!-- Card 03 - Dragão com Suporte -->
<div class="col-lg-3 col-md-6 col-xs-3 top15px">
	<div class="card">
		<img src="public/img/dragaocomsuporte.png" class="card-img-top" alt="...">
		<div class="card-body">
				<h5 class="card-title corTitulo">Dragão Com Suporte</h5>
				<p class="fs-6 fw-light"></p>
				<h5>R$ 35,00</h5>
			<?php
				echo $cores;
				echo "<a style=\"width:100%;\" href=\"index.php?a=pix35.php\" class=\"btn btn-outline-dark\"><i class=\"fa-solid fa-qrcode\"></i> QR code</a>";
			?>
		</div>
	</div>
</div>
