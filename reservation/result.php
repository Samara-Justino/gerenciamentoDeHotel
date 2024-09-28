<?php include "../model/Reservation.php";

session_start();

include "../header.php";

$reservation = $_SESSION['reservation'];
?>

<div class="container reservation-result">
    <h5>Sua reserva no valor de R$
        <?php echo $reservation->stayValue
            ?> foi confirmada.
        <br>
        <br>
    </h5>
    <div class="btn-container">
         <!-- O que vem depois da ? é parâmentro -->
        <a href="reservation.php?id_reservation=<?php echo $reservation->id; ?>">
            <button type="button" class="btn btn-yellow reservation-result btn-width">Editar Reserva</button>
        </a>
        <section class="events">
            <a href="delete_reservation.php?id_reservation=<?php echo $reservation->id; ?>">
                <button type="button" class="btn btn-yellow reservation-result btn-width">Excluir Reserva</button>
            </a>
        </section>
        <a href="../login/logout.php">
            <button class="btn btn-yellow reservation-result" type="submit">Sair</button>
        </a>
    </div>
</div>

<?php include "../footer.php"; ?>