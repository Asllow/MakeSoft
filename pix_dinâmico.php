<?php
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
    print_r($result->fetch_assoc());
    echo "
    <div class='container'>
        <div class='pix-item'>
            <img src='public/img/150.png' alt='PIX'>
            <h5>R$ 1,50</h5>
            <p>00020126360014BR.GOV.BCB.PIX01145347140900015252040000530398654041.505802BR5918MAKESOFT SOLUTIONS6011DIVINOPOLIS62070503***6304690A</p>
        </div>
    </div>";
}