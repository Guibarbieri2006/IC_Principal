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
             <h2 class ="text-white" style="font-size: 25px"><b>Nome completo: </b><?php echo $produtos [$id]['nome-completo'];?></h2>
             <h3 class ="text-white" style="font-size: 25px"><b>Data de nascimento: </b><?php echo $produtos [$id]['data-de-nascimento'];?></h3>
             <h4 class ="text-white" style="font-size: 25px"><b>Local de nascimento: </b><?php echo $produtos [$id]['local-de-nascimento'];?></h4>
             <h5 class ="text-white" style="font-size: 25px"><b>Posição: </b><?php echo $produtos [$id]['posicao'];?></h5>
             <h6 class ="text-white" style="font-size: 25px"><b>Período no clube: </b><?php echo $produtos [$id]['tempo'];?></h6>
             <h7 class ="text-white" style="font-size: 25px"><b>Jogos pelo clube: </b><?php echo $produtos [$id]['jogos'];?></h7>
             <h8 class ="text-white" style="font-size: 25px"><b>Gols pelo clube: </b><?php echo $produtos [$id]['gols'];?></h8>
             <h9 class ="text-white" style="font-size: 25px"><b>Descrição: </b><?php echo $produtos [$id]['descricao'];?></h9>
             <a href="categorias-detalhe.php" class="text-white" style="font-size: 25px"><b>Categoria: </b><?php echo $categorias[ $produtos[$id]['categoria'] ];?></a>
             
             
             <h1><b></b></h1>
             <a href="index.php" class=text-white style="font-size:30px;">Voltar</a>

            </div>
<div class="w-60">
             <img src ="./content/<?php echo $produtos[$id]['imagem']?>">
   </div>
   </div> 

</div>
<?php
// include do footer
include_once './includes/_footer.php';
?>