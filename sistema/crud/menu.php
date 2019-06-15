<?php
session_start();

if(!isset($_SESSION['usuario'])) {
    header("location: index.php");
}
?>


<!DOCTYPE html>
<html>

<head> 
    <?php
        require_once 'view/head.php';
    ?>
</head>

<body>
    <?php
        require_once 'view/nav.php';
    ?>

</body>

</html>