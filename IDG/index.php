<?php

include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>

<div class = "container">
    <h2 class="mt-5 text-center title" >Promoção</h2>
    <div class="mt-3 d-flex flex-wrap justify-content-around">
        
        <?php

for ($i = 12; $i <18 ; $i++) {
?>
        <div class = "card m-3" style = "width: 18rem;">
        <img src="./content/<?php echo $produtos[$i]['imagem'];?>" class= "card-img-top" alt = "...">
        <div class = "card-body">
        <h5 class = "card-title"><?php echo $produtos[$i]['nome'];?></h5>
        <p class = "card-text"><?php echo $produtos[$i]['descricao'];?></p>
        <a href = "produto-detalhe.php?id=<?php echo $i;?>" class = "btn btn-danger">Leia mais sobre ele</a>

    </div>
</div>

            

    <?php
    }
    ?>
</div>
</div>