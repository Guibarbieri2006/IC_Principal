<?php

include_once './includes/_dados-categorias.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>

<div class = "container">
    <h2 class="mt-5 text-center title" >Categorias</h2>
    <div class="mt-3 d-flex flex-wrap justify-content-around">
        
        <?php

for ($i = 0; $i <6 ; $i++) {
?>
        <div class= "card m-3" style = "width: 20rem;">
        <img src="./content-categorias/<?php echo $categorias[$i]['imagem'];?>" class= "card-img-top" alt = "...">
        <div class= "card-body">
        <h5 class= "card-title" style="text-align: center;"><?php echo $categorias[$i]['categoria'];?></h5>
        <a style="width: 278px;" href= "1940.php?id=<?php echo $i;?>"&cat=<?php echo $categorias[$i]['categoria'];?>" class="btn btn-danger">Ver Jogadores do Período</a>

    </div>
</div>
            

    <?php
    }
    ?>
</div>
</div>