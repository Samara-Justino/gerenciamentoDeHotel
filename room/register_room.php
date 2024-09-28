<?php

require_once "../model/User.php";
require_once "../database/reservation_db.php";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $reservationDb = new ReservationDb();
    session_start();

    $id = $_POST["register_id_room"];
    $price = $_POST["register_price"];

    $reservation = $_SESSION['reservation'];
    $user = $_SESSION['user'];
    $stayValue = $price * $reservation->stayDays;
    $reservation->stayValue = $stayValue;
    $reservation->idRoom = $id;

    $data = array(':checkindate' => $reservation->checkInDate, ':checkoutdate' => $reservation->checkOutDate, ':child_guest' => $reservation->childGuest, ':adult_guest' => $reservation->adultGuest, 'fk_id_room' => $id, 'stayvalue' => $stayValue, 'fk_id_login' => $user->id);

    if (empty($reservation->id)) {
        //Registro da reserva
        //O register retorna o último id do registro inserido
        $idReservation = $reservationDb->register($data);
        $reservation->id = $idReservation;
    } else {
        //Atualização da reserva
        $reservationDb->update($reservation->id, $data);
    }

    header('Location: ../reservation/result.php');
    exit();
}