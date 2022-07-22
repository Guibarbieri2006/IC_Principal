<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

/**
 * $_REQUEST é a mesma coisa que $_GET e $_POST juntos
 *
 */

if (isset ( $_POST['txtNome']) ) {
    $nome = strtoupper( $_POST['txtNome']);
    $nome = $_POST['txtNome'];
    $email = $_POST['txtEmail'];
    $telefone = $_POST['txtTelefone'];
    $mensagem = $_POST['txtMensagem'];
    echo $nome. "<br>". $email."<br>". $telefone."<br>". $mensagem;
}
?>

<h1>Contato</h1>
<form action="./contato.php" method="post">
    <label for="txtNome">Nome Completo</label>
    <input type="text" name="txtNome" id="txtNome">
<br>
    <label for="txtEmail">E-mail</label>
    <input type="email" name="txtEmail" id="txtEmail">
<br>
    <label for="txtEmail">Telefone</label>
    <input type="tel" name="txtTelefone" id="txtTelefone">
<br>
    <label for="txtEmail">Mensagem</label>
    <input type="text" name="txtMensagem" id="txtMensagem">
<br>
<input type="submit" value="Cadastrar">
</form>

<?php
// include do footer
include_once './includes/_footer.php';
?>