<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

$id = $_GET['id'];

?>
<div class = "container">
<div class = "col d-flex justify-content-around mt-5">
<div class="w-50">
             <h1 class ="text-white"><?php echo $produtos[$id]['nome'];?></h1>
             <h2 class ="text-white"><?php echo $produtos [$id]['posicao'];?></h2>
             <h3 class ="text-white"><?php echo $produtos [$id]['preco'];?></h3>
             <p class="text-white"><b>Categoria: </b><?php echo $categorias[ $produtos[$id]['categoria'] ];?></p>
             <h1><b></b></h1>
                <p><img class="payment__img" src="./content/pix1.png"><a href="pix.php" class=text-white> Comprar via Pix</a></p> 
                <p><img class="payment__img" src="./content/cartao1.png"><a href="cartao.php" class=text-white> Comprar via Cartão</a></p>
                <p><img class="payment__img" src="./content/boleto1.png"><a href="boleto.php" class=text-white> Comprar via Boleto Bancário</a></p>
             <a href="index.php" class=text-white style= "font-size:30px;">Voltar</a>

            </div>
<div class="w-50">
             <img src ="./content/<?php echo $produtos[$id]['imagem']?>">
   </div>
   </div> 

</div>
<?php
// include do footer
include_once './includes/_footer.php';
?>