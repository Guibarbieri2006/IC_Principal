<?php
include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_dados.php';
?>

<h2  style =" text-align: center; margin-top:50px; margin-bottom:40px; "class="text-white" >Pagamento via Boleto</h2 >

<form action="./boleto.php" method="post">
    <ul style="margin: 2cm;">
        <label for="txtNome"class="text-white">Nome completo do comprador</label>
        <input type="text" name="txtNome" id="txtNome">
        <label for="txtEndereco"class="text-white">Endereço de E-mail</label>
        <input type="text" name="txtEndereco" id="txtEndereco">

        <br>
        <input type="submit" value="Efetuar Compra via Boleto" class="btn btn-danger">
    </ul>
</form>

<?php

if (isset ( $_POST['txtEndereco']) ) {;
    echo '<h5>Perfil salvo com sucesso! Em breve você receberá o boleto para a efetuação do pagamento através do seu e-mail.</h5>';
}
?>

<?php
include_once './includes/_footer.php';
?>