<?php include "header.php";
$usuario = $_SESSION['user'];
if ($usuario['perfil'] == "admin") {
    header("Location: panel_admin.php");
} else {
    header("Location: panel_user.php");
}
?>