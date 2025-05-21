<?php
include("config.php");

//obter dados do formulrio
$message = $_POST["message"];

// echo $message;
$sql ="INSERT INTO sugestoes(sugestao) VALUES ('$message')";

// echo $sql;

// executar o comando sql
$conn->query($sql);

$conn->close();
?>

<!doctype html>
<html lang="pt-PT">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="images/ico/logo-2.ico" type="images/ico" >
        <title>Sancho Vieira</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link rel="stylesheet" href="css/typography.css">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="css/magnific-popup.css">

        <link href="css/aos.css" rel="stylesheet">

        <link href="css/templatemo-nomad-force.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

        <style>
            .bg-warning {
    background-color: #b82020!important;
}
        </style>

</head>
<body style="display:flex; align-items:center; justify-content:center">
<h4 class="m-5 animate__animated animate__zoomIn">Obrigado pela sua sugestão !</h4>
<meta http-equiv="refresh" content="2; URL='index.html'"/>
</body>
</html>

