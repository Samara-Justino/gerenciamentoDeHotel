<?php
session_start();
?>

<?php include "../header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <h3>Minha conta</h3>
            <div class="formulario">
                <form action="login_user.php" method="post">
                    <div class="row">
                        <div class="col-9">
                            <label for="login_email">Digite seu e-mail:</label>
                            <input class="form-control" type="text" name="login_email" placeholder="Informe seu e-mail">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-9">
                            <label for="login_password">Digite sua senha:</label>
                            <input class="form-control" type="password" name="login_password"
                                placeholder="Informe sua senha">
                        </div>
                    </div>
                    <br>
                    <button class="btn btn btn-yellow btn-margin" type="submit">Acessar</button>
                </form>

                <?php
                if (isset($_SESSION['login_message'])) {

                    $msg = $_SESSION['login_message'];
                    echo "<div class='col-9'>" . $msg . "</div>";
                    unset($_SESSION['login_message']);
                }
                ?>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <h3>Cadastre-se</h3>
            <div class="formulario">
                <form action="register_user.php" method="post">
                    <div class="row">
                        <div class="col-9">
                            <label for="register_name">Digite seu nome:</label>
                            <input class="form-control" type="text" name="register_name" placeholder="Informe seu nome">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-9">
                            <label for="register_email">Digite seu e-mail:</label>
                            <input class="form-control" type="text" name="register_email"
                                placeholder="Informe seu e-mail">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-9">
                            <label for="register_password">Digite sua senha:</label>
                            <input class="form-control" type="password" name="register_password"
                                placeholder="Informe sua senha">
                        </div>
                    </div>
                    <br>
                    <button class="btn btn btn-yellow btn-margin" type="submit">Cadastrar</button>
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
    </div>
</div>


<?php include "../footer.php"; ?>