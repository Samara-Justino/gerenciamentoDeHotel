<?php

require_once "../model/Reservation.php";

//Um espaço da aplicação reservado para armazenar qualquer coisa
session_start();

include "../header.php";
include "../database/room_db.php";

$connection = new RoomDb();
$rooms = $connection->getAll();

$reservation = $_SESSION['reservation'];
?>

<div class="container">
    <div class="row">
        <h3 class="title">Quartos</h3>

        <?php foreach ($rooms as $room) { ?>
            <div class="col-4">
                <form action="register_room.php" method="post">
                    <input class="form-control" type="hidden" name="register_id_room" value="<?php echo $room->id; ?>">
                    <input class="form-control" type="hidden" name="register_price" value="<?php echo $room->price; ?>">
                    <div class="card-room">
                        <!-- Utilizando valor dinâmico vindo do BD para colocar a imagem -->
                        <img class="card-img-top" src=<?php echo $room->imageSrc; ?> alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">
                                <!-- Accessando a propriedade do objeto -->
                                <!-- Get: pegando o valor da propriedade -->
                                <?php echo $room->model; ?>
                            </h5>
                            <p class="card-text">
                                <?php echo utf8_encode($room->description); ?>
                            </p>
                            <h5>Valor da Diária:
                                <?php echo $room->price; ?>
                            </h5>
                            <h5>Valor Total:
                                <?php echo $room->price * $reservation->stayDays; ?>
                            </h5>
                            <button class="btn btn btn-yellow btn-margin" type="submit">Reservar</button>
                        </div>
                    </div>
                </form>
            </div>
        <?php } ?>
    </div>
</div>


<?php include "../footer.php"; ?>