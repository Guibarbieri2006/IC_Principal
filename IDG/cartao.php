<?php
include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_dados.php';
?>
<?php
if (isset ( $_POST['txtNumero']) ) {;
    echo '<h5>Compra efetuada com sucesso! Em breve você receberá atualizações do seu pedido através do seu e-mail.</h5>';
}
?>
<form action="./cartao.php" method="post">
    <ul style="margin: 2cm;">
        <label for="txtNumero"class="text-white">Número do Cartão</label>
        <input type="text" name="txtNumero" id="txtNumero">
        <label for="txtVencimento"class="text-white">Vencimento</label>
        <input type="text" name="txtVencimento" id="txtVencimento">
        <label for="txtCodigo"class="text-white">Código de Segurança</label>
        <input type="text" name="txtCodigo" id="txtCodigo">
    
        <label for="txtNome"class="text-white">Nome do titular</label>
        <input type="text" name="txtNome" id="txtNome">
        <label for="txtVencimento"class="text-white">CPF do titular</label>
        <input type="text" name="txtCPF" id="txtCPF">
        <label for="txtVencimento"class="text-white">Data de nascimento</label>
        <input type="text" name="txtData" id="txtData">
        <br>
        <input type="submit" value="Efetuar Compra" class="btn btn-danger">
    </ul>
</form>
<?php
include_once './includes/_footer.php';
?>
