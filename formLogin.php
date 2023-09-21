<?php
require_once ("header.php");
?>

<main>
    <div class="container mt-3">
        <h1>Login de Usuários</h1>
        <form action="loginUsuario.php" method="post">
            <div class="mb-3 mt-3">
                <label for="nomeProduto" class="form-label">Usuario:</label>
                <input type="text" name="loginUsuario" id="loginUsuario" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="descricaoProduto" class="form-label">Senha:</label>
                <input type="password" name="senhaUsuario" id="senhaUsuario" class="form-control" required>
            </div>   
            <input type="submit" name="action" value="Login" class="btn btn-primary">
            <input type="submit" name="action" value="Cadastrar" class="btn btn-primary">
        </form>
    </div>
</main>

<?php
require_once ("footer.php");
?>