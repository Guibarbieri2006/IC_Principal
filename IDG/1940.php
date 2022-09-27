<?php

include_once './includes/_dados-1940.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>

<div class = "container">
    <h2 class="mt-5 text-center title" style="font-family:times-new-roman;">Década de 1940</h2>
    <div class="mt-3 d-flex flex-wrap justify-content-around">
        
        <?php

for ($i = 0; $i <2 ; $i++) {
?>
        <div class="card m-3" style="width: 22rem;">
        <img src="./content/<?php echo $produtos[$i]['imagem'];?>" class= "card-img-top" alt = "...">
        <div class="card-body">
        <h5 class="card-title" style="text-align: center;"><?php echo $produtos[$i]['nome'];?></h5>
        <p class="card-text" style="text-align: center;"><?php echo $produtos[$i]['tempo'];?></p>
        <a style="width: 309px;" href="produto-detalhe.php?id=<?php echo $i;?>&decada=1940" class="btn btn-danger">Leia mais sobre ele</a>
    </div>
</div>

            

    <?php
    }
    ?>
</div>
</div> 
<?php
// include do footer
include_once './includes/_footer.php';
?>