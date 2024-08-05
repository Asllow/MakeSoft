<?php

use chillerlan\QRCode\QRCode;

@$pagina = $_GET['a'];

$servername = "localhost";
$username = "u683874167_XGGN0";
$password = "^ejYM@;sB0|";
$dbname = "u683874167_VZXgk";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Falha na conexão " . $conn->connect_error);
}

$sql = "SELECT * FROM products where id_produto = $pagina";
$result = $conn->query($sql);
$conn->close();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $preco = $row['preco_produto'];
    $pix = $row['pix_produto'];
    $data = new QRCode();
    $data2 = $data->render($pix);
    echo "
    <div class='container'>
        <div class='pix-item'>
            <img src='$data2' alt='PIX'>
            <h5>R$$preco</h5>
            <p>$pix</p>
        </div>
    </div>";
}