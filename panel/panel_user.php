<?php include "header.php";
$usuario = $_SESSION['user']; ?>

<div class="container">
    <h2>Hotel Golden</h2>
    <br>
    <br>
    <h5>Seja Bem-Vindo(a):
        <?php echo $usuario['nome']; ?>
        <br>
        <br>
    </h5>
    <div class="btn-container">
        <a href="form_update_cadastro_usuario.php?id_login=<?php echo $usuario['id_login']; ?>">
            <button type="button" class="btn btn-yellow">Editar Dados</button>
        </a>
        <section class="events">
            <a href="listar_evento.php">
                <button type="button" class="btn btn-yellow">Ver Reserva</button>
            </a>
        </section>
        <a href="logout.php">
            <button class="btn btn-yellow" type="submit">Sair</button>
        </a>
    </div>
</div>

<?php include "footer.php"; ?>