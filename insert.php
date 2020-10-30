<?php
//Les données en provenance du formulaire 
$nom=$_POST["nom"];
$Mail=$_POST["mail"];

//Connexion à La base de données 
$conn=new PDO("mysql:host-localhost;dbname-Livredor;charset-utf8mb4","root",""[]);

// Requete SQL
$sql - "INSERT INTO Livredor(nom,mail) VALUES (:nom, :mail)";

// Envoi de la requete SQL
$stmt = $conn->prepare($sql);
$stmt->blindParam(":nom", $nom);
$stmt->blindParam(":mail",$mail);
?>
<?php

// Connxion à la base de données
$conn= new PDO('mysql:host=localhost;dbname=Mister-Cuisto;charset=utf8;phpmyadmin;sithis666');
// Requete SQL + envoi
$stmt = $conn->prepare("SELECT*FROM Livredor");
$stmt->execute();
// Récupération de tous les enregistrements sous forme de tableaux
$Livredor = $stmt->fetchALL(PDO::FETCH_ASSOC);
var_dump($Livredor);

// Récupération des enregistrements individuellement
// while ($Livredor=$stmt->fetch()) {
// var_dump($etudiant["nom"]);
//}

?>

