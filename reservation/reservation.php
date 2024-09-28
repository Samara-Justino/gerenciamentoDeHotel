<?php
session_start();

include "../header.php";

// Seta id reservation para nulo por padrão para novas reservas, caso tenha valor no parâmetro que vem da URL, atribui a variável id_reservation
$id_reservation = null;
if (isset($_GET['id_reservation'])) {
    $id_reservation = $_GET['id_reservation'];
}

?>

<div class="container">
    <p>Obrigatório o preenchimento de todos os campos</p>
    <div class="formulario">
        <form action="register_reservation.php" method="post">
            <input class="form-control" type="hidden" name="id_reservation" value="<?php echo $id_reservation; ?>">
            <div class="row">
                <div class="col-4">
                    <label for="checkindate">Digite a Data de Entrada:</label>
                    <input class="form-control" type="date" name="checkindate" min="2023-01-01" max="2023-31-12">
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="checkoutdate">Digite a Data de Saída:</label>
                    <input class="form-control" type="date" name="checkoutdate" min="2023-01-01" max="2023-31-12">
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="num1">Informe o nº de adultos:</label>
                    <input type="number" name="adults" min="1" max="5">
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="num2">Informe o nº de crianças (0 aos 17 anos):</label>
                    <input type="number" name="children" min="0" max="4">
                </div>
            </div>
            <br>
            <button class="btn btn-yellow" type="submit">Buscar</button>
        </form>
        <?php
        if (isset($_SESSION['register_message'])) {

            $msg = $_SESSION['register_message'];
            echo "<div class='col-9'>" . $msg . "</div>";
            unset($_SESSION['register_message']);
        }
        ?>
    </div>
</div>


<?php include "../footer.php"; ?>