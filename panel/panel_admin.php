<?php include "header.php";
$usuario = $_SESSION['user']; ?>

<div class="container">
    <section class="welcome">
        <h2>Golden Hotel</h2>
        <h4>Painel Administrativo</h4>
        <br>
        <h5>Seja Bem-Vindo(a):
            <?php echo $usuario['nome']; ?>
        </h5>
        <br>
    </section>
    <div class="btn-container">
        <section class="management">
            <a href="#">
                <button type="button" class="btn btn-yellow">Listar Reservas</button>
            </a>
        </section>
        <section class="events">
            <div class="col">
                <a href="#"><button class="btn btn-yellow">Quartos Disponíveis</button></a>
            </div>
        </section>
        <a href="logout.php">
            <button class="btn btn-yellow" type="submit">Sair</button></a>
    </div>
</div>

<?php include "footer.php";