<?php
require_once "../model/Reservation.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    session_start();

    $id_reservation = $_POST["id_reservation"];
    $checkindate = $_POST["checkindate"];
    $checkoutdate = $_POST["checkoutdate"];
    $adults = $_POST["adults"];
    $children = $_POST["children"];

    $startDate = new DateTime($checkindate);
    $endDate = new DateTime($checkoutdate);

    if (empty($checkindate) || empty($checkoutdate) || empty($adults)) {
        ValidationError("Obrigatório o preenchimento de Entrada, Saída e Adultos");
    } else if ($endDate < $startDate) {
        ValidationError("Data de Entrada não pode ser menor que a Data de Saída");
    } else {

        //Lógica para calcular os dias da reserva
        //Format("%a"): Total de número de dias da diferença de datas da função diff()
        $days = $endDate->diff($startDate)->format("%a");

        //Colocando valor nas propriedade dos modelo. Modelo->Propriedade = Valor. 
        $reservation = new Reservation();

        if (isset($id_reservation)) {
            $reservation->id = $id_reservation;
        }

        $reservation->checkInDate = $checkindate;
        $reservation->checkOutDate = $checkoutdate;
        $reservation->adultGuest = $adults;
        $reservation->childGuest = $children;
        $reservation->stayDays = $days;

        $_SESSION['reservation'] = $reservation;

        header('Location: ../room/room.php');
        exit();
    }
}

function ValidationError($message)
{
    $_SESSION['register_message'] = $message;
    header("Location: reservation.php");
}