<?php
require_once './shared/header.php';
?>
</div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <h1>Login</h1>
        <form action="" method="post">
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Insira seu email" name="email">
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha:</label>
                <input type="password" class="form-control" id="senha" placeholder="Insira sua senha" name="senha">
            </div>
            <button type="submit" class="btn btn-success">Logar</button>
        </form>
        <a href="cadastro.php">Não tem login? Cadastre-se aqui!</a>
    </div>
    <div class="col-md-4"></div>
</div>





</body>

</html>