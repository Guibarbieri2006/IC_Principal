<?php
include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_dados.php';
?>

<form action="./pix.php" method="post">
    <ul style="margin: 2cm;">
        <label for="txNome"class="text-white">Nome do comprador</label>
        <input type="text" name="txtNome" id="txtNome">
        <label for="txtChave"class="text-white">Tipo de chave (CPF, CNPJ, E-mail, Nº de telefone)</label>
        <input type="text" name="txtChave" id="txtChave">
        <label for="txtCodigo"class="text-white">Código de Segurança</label>
        <input type="text" name="txtCodigo" id="txtCodigo">
        <br>
        <input type="submit" value="Efetuar Compra" class="btn btn-danger">
    </ul>
</form>

<?php

if (isset ( $_POST['txtNome']) ) {;
    echo '<h5>Pix recebido com sucesso! Em breve você receberá atualizações do seu pedido através do seu e-mail.</h5>';
}
?>

<?php
include_once './includes/_footer.php';
?>
