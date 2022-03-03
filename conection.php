<?php
$servername = "host.docker.internal";
$username = "root";
$password = "";
$salt= "f";

try {
    $conn = new PDO("mysql:host=$servername;dbname=proyecto_pw", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
//    $sql = "INSERT INTO usuarios (nombre, contrasena, edad) VALUES ('John', MD5('".$salt."password'), 18)";
//    $conn->exec($sql);
$nombre_a_pasar="John";
    $stmt = $conn->prepare("SELECT * FROM usuarios where nombre=:name and contrasena = 'b44dedf74e7634e790316472e0e995f9'");
    $stmt->bindParam(":name",$nombre_a_pasar);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result=$stmt->fetchAll();

    var_dump($result);

    echo "Se agrego";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$conn = null;



