<?php

include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>

<div class = "container">
    <h2 class="mt-5 text-center title" >Destaques</h2>
    <div class="mt-3 d-flex flex-wrap justify-content-around">
        
        <?php

for ($i = 6; $i <12 ; $i++) {
?>
        <div class = "card m-3" style = "width: 20rem;">
        <img src="./content/<?php echo $produtos[$i]['imagem'];?>" class= "card-img-top" alt = "...">
        <div class = "card-body">
        <h5 class = "card-title" style="text-align: center;"><?php echo $produtos[$i]['nome'];?></h5>
        <p class = "card-text" style="text-align: center;"><?php echo $produtos[$i]['posicao'];?></p>
        <p class = "card-text" style="text-align: center;"><?php echo $produtos[$i]['tempo'];?></p>
        <a href = "produto-detalhe.php?id=<?php echo $i;?>" class="btn btn-danger" style="width:278px">Leia mais sobre ele</a>

    </div>
</div>

            

    <?php
    }
    ?>
</div>
</div>
