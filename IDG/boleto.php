<?php
include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_dados.php';
?>

<form action="./cartao.php" method="post">
    <ul style="margin: 2cm;">
        <label for="txtNome"class="text-white">Nome do Comprador</label>
        <input type="text" name="txtNome" id="txtNome">
        <label for="txtEndereco"class="text-white">Endereço de E-mail</label>
        <input type="text" name="txtEndereco" id="txtEndereco">

        
        
        
        
        
        
        <br>
        <input type="submit" value="Efetuar Compra">
    </ul>
</form>

<?php

if (isset ( $_POST['txtEndereco']) ) {;
    echo '<h5>E-mail cadastrado com sucesso! Em breve você receberá o boleto para a efetuação do pagamento através do seu e-mail.</h5>';
}
?>

<?php
include_once './includes/_footer.php';
?>