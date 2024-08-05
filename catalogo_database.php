<?php
$servername = "localhost";
$username = "u683874167_XGGN0";
$password = "^ejYM@;sB0|";
$dbname = "u683874167_VZXgk";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Falha na conexão " . $conn->connect_error);
}

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
$conn->close();

$setting = "<div class=\"col-lg-12\" style=\"margin-top:10px;\">
            <h1>Impressões 3D</h1>
            </div>";
echo $setting;

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $id = $row["id_produto"];
        $link_image = $row["img_produto"];
        $nome_product = $row["nome_produto"];
        $dimensao = $row["dimensao_produto"];
        $preco = $row["preco_produto"];

        echo"
            <div class='col-lg-3 col-md-6 col-xs-3 top15px'>
                <div class='card'>
                    <img src='$link_image' class='card-img-top\' alt='...'>
                    <div class='card-body'>
                            <h5 class='card-title corTitulo'>$nome_product</h5>
                            <p class='fs-6 fw-light'>$dimensao</p>
                            <h5>$preco</h5>
                            <i class='fa-solid fa-droplet colorWhite'></i>
                            <i class='fa-solid fa-droplet colorBlack'></i>
                            <i class='fa-solid fa-droplet colorGray'></i>
                            <i class='fa-solid fa-droplet colorBrown'></i>
                            <i class='fa-solid fa-droplet colorRed'></i>
                            <i class='fa-solid fa-droplet colorOrange'></i>
                            <i class='fa-solid fa-droplet colorYellow'></i>
                            <i class='fa-solid fa-droplet colorGreen'></i>
                            <i class='fa-solid fa-droplet colorBluyTiffany'></i>
                            <i class='fa-solid fa-droplet colorBlue'></i>
                            <i class='fa-solid fa-droplet colorPurple'></i>
                            <i class='fa-solid fa-droplet colorPink'></i>
                            <hr>
                            <a style='width:100%;' href='?a=$id' class='btn btn-outline-dark'><i class='fa-solid fa-qrcode'></i> QR code</a>
                    </div>
                </div>
            </div>";
    }
}
