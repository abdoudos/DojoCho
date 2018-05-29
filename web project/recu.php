<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dojo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$datetime = date("Y-m-d H:i:s");

if (isset($_POST['nom'])) {$_user_name = $_POST['nom']; }

$_prenom = $_POST['user_prenom']; 
 
$_dateNaissance = $_POST['date_naiss']; 
$_lieuNaissance = $_POST['Lieu_naiss']; 
$_addresse = $_POST['adresse'];
$_numeroTelefone = $_POST['Numero_Tel'];
$_email = $_POST['courriel'];
$_sexe = $_POST['sexe'];
 //$nom=$_POST["name"];
$sql = "INSERT INTO `perssones`(`id`, `user_name`, `user_prenom`, `dateNaissance`, `lieuNaissance`, `addresse`, `numeroTelefone`, `email`, `dateInscreption`, `created_at`, `updated_at`, `sexe`)
             VALUES (NULL,'$_user_name','$_prenom','$_dateNaissance ','$_lieuNaissance ','$_addresse ','$_numeroTelefone ','$_email ','$datetime',NULL,NULL,'$_sexe ')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

if (mysqli_query($conn, $sql)) {
    $ast_id = mysqli_insert_id($conn);
    $_perssone_id =$ast_id ;
	echo "New record created successfully. Last inserted ID is: " . $_perssone_id ;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


$_name = $_POST['SurNom']; 
if (isset($_POST['SurNom'])) {$_name = $_POST['SurNom']; }
$_email = $_POST['courriel'];
$_password = $_POST['code'];

$sql1 = "INSERT INTO `users`(`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `perssone_id`)
VALUES (NULL,'$_name' ,'$_email ','$_password ',NULL,NULL,NULL,'$_perssone_id')";


if ($conn->query($sql1) === TRUE) {
    echo " New record created successfully";
	header('Location: login.html');
} else {

    echo "///////////////////////////////////////////////////////////////////////////////////////Error: " . $sql . "<br>" . $conn->error;
    header('Location: formulaire.html');
	}

$conn->close();
?>



