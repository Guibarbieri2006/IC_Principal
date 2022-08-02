<?php
include_once  './includes/_dados.php' ;
include_once  './includes/_head.php' ;
include_once  './includes/_header.php' ;




?>




<h2  style =" text-align: center; margin-top:50px; margin-bottom:40px; "class="text-white" >Envie sua mensagem</h2 >

   

<form action="./contato.php" method="post">
    <p>
        <label class="text-white">Nome Completo</label>
        <input id="txtNome" type="text" name="txtNome">
</p> 
<p> 
    <label class="text-white">Senha</label>
    <input id="txtSenha" type ="password" name="txtSenha">
</p> 
<p> 
        <label class="text-white">E-mail</label>
        <input id="txtEmail" type="text" name="txtEmail">
</p> 
<p> 
        <label class="text-white">Telefone</label>
        <input id="txtTelefone" type="text" name="txtTelefone">
</p>
    <input type="submit" class = "btn btn-danger">




    
    

</form>


<?php

if (isset ( $_POST [ 'txtNome' ]) ) {

    $nome = strtoupper( $_POST [ 'txtNome' ]);
    $nome = $_POST [ 'txtNome' ];
    $email = $_POST [ 'txtEmail' ];
    $telefone = $_POST [ 'txtTelefone' ];
    echo  '<h4 style="margin-bottom: 60px; color:#white; text-align: center; "> Parabéns!!! Obrigado pelo contato <strong>' . $nome . ' </strong></h4>' ;

}



include_once  './includes/_footer.php' ;

?>