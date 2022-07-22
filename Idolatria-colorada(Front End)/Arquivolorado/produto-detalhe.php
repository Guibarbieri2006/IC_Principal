<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

// captura os dados via get
$id = $_GET['id'];

?>
<div class="container mt-5">
    <div class="row">
        <div class="col">

        <h1><?php echo $produtos[$id]['nome'];?></h1>
        <p><?php echo $produtos[$id]['descricao']?></p>
        <img src="./content/<?php echo $produtos[$id]['imagem']?>">
        <h4>R$ <?php echo $produtos[$id]['preco']?></h4>

        </div>
    </div>

    <div class="row">
        <a href="index.php"><div class="col">Voltar</div></a>
        <a href=""><div class="col">Comprar</div></a>
    </div>
</div>
<?php
// include do footer
include_once './includes/_footer.php';
?>