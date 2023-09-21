<?php
require_once("header.php");
include_once("database.php");

//Checando o valor do botão para saber se deve redirecionar para página de cadastros de usuários
if(isset($_POST["action"]) && $_POST["action"] == "Cadastrar"){
    header("Location: cadastrarUsuario.php");
    exit;
}

$loginUsuario = $_POST["loginUsuario"];
$senhaUsuario = $_POST["senhaUsuario"];
$selectSql = "SELECT * FROM sole_haven_usuario WHERE login_usuario = '$loginUsuario'";
$selectConnect = mysqli_query($conexao, $selectSql);
$dados = mysqli_fetch_array($selectConnect);

//Verifica se existe usuario no banco de dados
if($dados && $dados['login_usuario'] != NULL){
    //Verifica se a senha enviada é a mesma no banco
    if($senhaUsuario == $dados['senha_usuario']){
        echo "Você conectou";
         header("Location: index.php");
    } else{
        echo "Senha errada";
         header("Location: formLogin.php");
    }
} else{
    echo "Usuario não encontrado";
    header("Location: formLogin.php");
}

?>
<?php
require_once("footer.php");
?>