<?php

require_once "conn.php";
require_once "../model/Room.php";

class RoomDb
{
    private $connection;

    public function __construct()
    {
        $this->connection = new Conexao();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM samara_hotel_rooms";
        $roomsDb = $this->connection->listarRegistros($sql);

        $rooms = [];

        // Acessando cada reserva vindo do banco de dados
        foreach ($roomsDb as $roomDb) {

            $room = new Room();
            // A classe acessa a propriedade e atribui o valor vindo do banco a ela
            //Set: Colocando valor na propriedade
            $room->id = $roomDb['id_room'];
            $room->model = $roomDb['model'];
            $room->price = $roomDb['price'];
            $room->description = $roomDb['description'];
            $room->imageSrc = $roomDb['image_src'];

            // Inserindo o objeto de model criado no array de rooms - array/modelo
            array_push($rooms, $room);
        }

        return $rooms;
    }
}
