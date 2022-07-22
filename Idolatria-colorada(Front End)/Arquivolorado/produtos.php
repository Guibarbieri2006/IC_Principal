<?php
    // include do footer
    include_once './includes/_head.php';
    include_once './includes/_header.php';
?>

<div class="container">
    <br>
    <h2>Produtos</h2>
    <div class="row mt-4">
    <div class="card m-4" style="width: 18rem;">
    <img src="./content/<?php echo $value['imagem'];?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?php echo $value['nome'];?></h5>
        <p class="card-text"><?php echo $value['descricao'];?></p>
        <a href="produto-detalhe.php?id=<?php echo $i?>" class="btn btn-primary">Comprar</a>
    </div>
    </div>
    </div>
    </div>

<?php
    // include do footer
    include_once './includes/_footer.php';
?>