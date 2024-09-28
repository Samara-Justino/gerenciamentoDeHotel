<?php

require_once "conn.php";
require_once "../model/Reservation.php";

class ReservationDb
{
    private $connection;

    public function __construct()
    {
        $this->connection = new Conexao();
    }

    //fetchAll: Busca todos os registros e retorna um array (se tiver registro) ou false 
    // Consultando todos os registros
    public function getAllByLogin($data)
    {
        $sql = "SELECT * FROM samara_hotel_reservation WHERE fk_id_login = :fk_id_login";
        $stmt = $this->connection->executarQuery($sql, $data);
        $reservationsDb = $stmt->fetchAll();

        $reservations = [];

        // Acessando cada reserva vindo do banco de dados
        foreach ($reservationsDb as $reservationDb) {

            $reservation = new Reservation();
            // A classe acessa a propriedade e atribui o valor vindo do banco a ela
            $reservation->id = $reservationDb['id_reservation'];
            $reservation->checkInDate = $reservationDb['checkindate'];
            $reservation->checkOutDate = $reservationDb['checkoutdate'];
            $reservation->stayValue = $reservationDb['stayvalue'];
            $reservation->idLogin = $reservationDb['fk_id_login'];
            $reservation->idRoom = $reservationDb['fk_id_room'];
            $reservation->childGuest = $reservationDb['child_guest'];
            $reservation->adultGuest = $reservationDb['adult_guest'];

            // Inserindo o objeto do modelo criado no array de reservations - array/modelo
            array_push($reservations, $reservation);
        }

        return $reservations;
    }

    public function register($data)
    {
        $sql = "INSERT INTO samara_hotel_reservation (checkindate, checkoutdate, child_guest, adult_guest, fk_id_room, stayvalue, fk_id_login) VALUES (:checkindate, :checkoutdate, :child_guest, :adult_guest, :fk_id_room, :stayvalue, :fk_id_login)";
        return $this->connection->cadastrarRegistro($sql, $data);
    }

    public function update($id, $data)
    {
        $sql = "UPDATE samara_hotel_reservation SET checkindate = :checkindate, checkoutdate = :checkoutdate,
        child_guest = :child_guest, adult_guest = :adult_guest, fk_id_room = :fk_id_room, stayvalue = :stayvalue, fk_id_login = :fk_id_login WHERE samara_hotel_reservation.id_reservation = :id";
        $this->connection->editarRegistro($sql, $id, $data);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM samara_hotel_reservation WHERE id_reservation = :id";
        $this->connection->excluirRegistro($sql, $id);
    }
}