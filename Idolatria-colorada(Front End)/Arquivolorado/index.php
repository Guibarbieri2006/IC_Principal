<?php
        // include do footer
        include_once './includes/_dados.php';
        include_once './includes/_head.php';
        include_once './includes/_header.php';
?>
        <link rel="stylesheet" href="style.css">
    <div class="container">
        <br>
        <h2>Produtos</h2>
    <div class="row mt-4">
    <?php
    foreach ($produtos as $key => $value) {
    ?>
        <div class="card m-3" style="width: 18rem;">
            <img src="./content/<?php echo $value['imagem'];?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $value['nome'];?></h5>
                <p class="card-text"><?php echo $value['descricao'];?></p>
                <a href="produto-detalhe.php?id=<?php echo $key;?>" class="btn btn-primary">comprar</a>
            </div>
        </div>
    <?php
    }
    ?>
    </div>
<?php
        // include do footer
        include_once './includes/_footer.php';
?>