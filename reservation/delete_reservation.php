<?php
require_once "../model/Reservation.php";
include "../database/reservation_db.php";

$id_reservation = $_GET['id_reservation'];

$reservationDb = new ReservationDb();

$reservationDb->delete($id_reservation);

header("Location: reservation.php");