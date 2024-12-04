<?php


use Controller\UsuarioController;
require './vendor/autoload.php';

$user = new UsuarioController;
require_once './shared/header.php';
?>

<div class="container">
    <div class="row justify-content-center m-5">
        <!-- Login Section -->
        <div class="col-md-5">
            <div class="border border-5 border-success rounded-3 p-4">
                <h2 class="text-center mb-4">Login</h2>
                <form method="post" action="<?php $user->login();?>">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Insira seu email" required>
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha:</label>
                        <input type="password" id="senha" name="senha" class="form-control" placeholder="Insira sua senha" required>
                    </div>
                    <input type="submit" class="btn btn-success w-100" value="Logar">
                </form>

                <?php
                @$cod = $_REQUEST['cod'];
                if (isset($cod)) {
                    if ($cod == 'logSuccess') {
                        echo '<div class="alert alert-success mt-3" role="alert">Login realizado com sucesso!</div>';
                    }
                    if ($cod == 'logError') {
                        echo '<div class="alert alert-danger mt-3" role="alert">Ocorreu um erro!</div>';
                    }
                }
                ?>
            </div>
        </div>

        <!-- Cadastro Section -->
        <div class="col-md-5">
            <div class="border border-5 border-success rounded-3 p-4">
                <h2 class="text-center mb-4">Cadastro</h2>
                <form method="post" action="src/controller/cadastroController.php">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome completo:</label>
                        <input type="text" id="nome" name="nome" class="form-control" placeholder="Insira seu nome completo" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Insira seu email" required>
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha:</label>
                        <input type="password" id="senha" name="senha" class="form-control" placeholder="Insira sua senha" required>
                    </div>
                    <div class="mb-3">
                        <label for="senhaConfirm" class="form-label">Confirmar senha:</label>
                        <input type="password" id="senhaConfirm" name="senhaConfirm" class="form-control" placeholder="Repita a senha inserida acima" required>
                    </div>
                    <input type="submit" class="btn btn-success w-100" value="Cadastrar">
                </form>

                <?php
                if (isset($cod)) {
                    if ($cod == "success") {
                        echo '<div class="alert alert-success mt-3" role="alert">Cadastro realizado com sucesso!</div>';
                    }
                    if ($cod == "error") {
                        echo '<div class="alert alert-danger mt-3" role="alert">Ocorreu um erro, cadastro não realizado.</div>';
                    }
                    if ($cod == "errorSenha") {
                        echo '<div class="alert alert-danger mt-3" role="alert">Senhas diferentes.</div>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

</body>
</html>
