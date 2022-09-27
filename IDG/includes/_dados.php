<?php

$categorias = array(0=>'Década de 1940', 1=>'Década de 1950', 2=>'Década de 1960', 3=>'Década de 1970', 4=>'Década de 1980', 5=>'Década de 2000');

$produtos = array(
    0 => array('nome'=>'Alex', 'preco'=>'R$43.00','posicao'=>'Meia', 'tempo'=>'2004-2009/2013-2016', 'imagem'=>'alex1.jpg', 'categoria'=>5),
    1 => array('nome'=>'Benitez', 'preco'=>'R$8.00','posicao'=>'Goleiro', 'tempo'=>'1977/1978-1983', 'imagem'=>'benitez1.jpg', 'categoria'=>3),
    2 => array('nome'=>'Bolívar', 'preco'=>'R$40.00','posicao'=>'Zagueiro', 'tempo'=>'2003-2006/2009-2012', 'imagem'=>'bolivar1.jpg', 'categoria'=>5),
    3 => array('nome'=>'Carlitos', 'preco'=>'R$18.00','posicao'=>'Atacante', 'tempo'=>'1938-1951', 'imagem'=>'carlitos1.jpg', 'categoria'=>0),
    4 => array('nome'=>'Claudiomiro', 'preco'=>'R$14.00','posicao'=>'Atacante', 'tempo'=>'1967-1974', 'imagem'=>'claudiomiro1.jpg', 'categoria'=>2),
    5 => array('nome'=>'Clemer', 'preco'=>'R$43.00','posicao'=>'Goleiro', 'tempo'=>'2002-2010', 'imagem'=>'clemer1.jpg', 'categoria'=>5),
    6 => array('nome'=>'Dalessandro', 'preco'=>'R$33.00','posicao'=>'Meia', 'tempo'=>'2008-2022', 'imagem'=>'dalessandro1.jpg', 'categoria'=>5),
    7 => array('nome'=>'Elías Figueroa', 'preco'=>'R$30.00','posicao'=>'Zagueiro', 'tempo'=>'1971-1976', 'imagem'=>'elias-figueroa1.jpg', 'categoria'=>5),
    8 => array('nome'=>'Escurinho', 'preco'=>'R$30.00','posicao'=>'Atacante', 'tempo'=>'1971/1972-1977', 'imagem'=>'escurinho1.jpg', 'categoria'=>3),
    9 => array('nome'=>'Fabiano Eller', 'preco'=>'R$28.00','posicao'=>'Zagueiro', 'tempo'=>'2006-2007/2009-2010', 'imagem'=>'fabiano-eller2.jpg', 'categoria'=>5),
    10 => array('nome'=>'Fernandão', 'preco'=>'R$28.00','posicao'=>'Atacante', 'tempo'=>'2004-2008', 'imagem'=>'fernandao1.jpg', 'categoria'=>5),
    11 => array('nome'=>'Índio', 'preco'=>'R$59.00','posicao'=>'Zagueiro', 'tempo'=>'2005-2014', 'imagem'=>'indio1.jpg', 'categoria'=>5),
    12 => array('nome'=>'Jair', 'preco'=>'R$32.00','posicao'=>'Atacante', 'tempo'=>'1974-1981', 'imagem'=>'jair1.jpg', 'categoria'=>3),
    13 => array('nome'=>'Larry', 'preco'=>'R$2.00','posicao'=>'Atacante', 'tempo'=>'1954-1961', 'imagem'=>'larry1.jpg', 'categoria'=>1),
    14 => array('nome'=>'Leandro Damião', 'preco'=>'R$20.00','posicao'=>'Atacante', 'tempo'=>'2010-2013/2017-2018', 'imagem'=>'damiao2.jpg', 'categoria'=>5),
    15 => array('nome'=>'Lula', 'preco'=>'R$22.00','posicao'=>'Atacante', 'tempo'=>'1974-1977', 'imagem'=>'lula1.jpg',  'categoria'=>3),
    16 => array('nome'=>'Manga', 'preco'=>'R$22.00','posicao'=>'Goleiro', 'tempo'=>'1974-1976', 'imagem'=>'manga1.jpg', 'categoria'=>3),
    17 => array('nome'=>'Mauro Galvão', 'preco'=>'R$16.00','posicao'=>'Zagueiro', 'tempo'=>'1976-1986', 'imagem'=>'mauro-galvao1.jpg', 'categoria'=>3),
    18 => array('nome'=>'Nilmar', 'preco'=>'R$17.00','posicao'=>'Atacante', 'tempo'=>'2002-2004/2007-2009/2014-2015', 'imagem'=>'nilmar1.jpg', 'categoria'=>5),
    19 => array('nome'=>'Paulo César Carpegiani', 'preco'=>'R$30.00','posicao'=>'Meio campo', 'tempo'=>'1969-1977', 'imagem'=>'carpegiani1.jpg', 'categoria'=>3),
    20 => array('nome'=>'Paulo Roberto Falcão', 'preco'=>'R$34.00','posicao'=>'Volante', 'tempo'=>'1973-1980', 'imagem'=>'falcao1.jpg', 'categoria'=>3),
    21 => array('nome'=>'Pedro Iarley', 'preco'=>'R$26.00','posicao'=>'Meia', 'tempo'=>'2005-2008', 'imagem'=>'iarley1.jpg', 'categoria'=>5),
    22 => array('nome'=>'Rafael Sóbis', 'preco'=>'R$24.00','posicao'=>'Atacante', 'tempo'=>'2004-2006/2010-2011/2019', 'imagem'=>'rafael-sobis1.jpg', 'categoria'=>5),
    23 => array('nome'=>'Rubén Paz', 'preco'=>'R$8.00','posicao'=>'Meia', 'tempo'=>'1982-1986', 'imagem'=>'ruben1.jpeg', 'categoria'=>4),   
    24 => array('nome'=>'Taffarel', 'preco'=>'R$25.00','posicao'=>'Goleiro', 'tempo'=>'1985-1990', 'imagem'=>'taffarel1.jpg', 'categoria'=>4),
    25 => array('nome'=>'Taison', 'preco'=>'R$20.00','posicao'=>'Ponta direita', 'tempo'=>'2008-2010/2021-2023', 'imagem'=>'taison1.jpg', 'categoria'=>5),
    26 => array('nome'=>'Tesourinha', 'preco'=>'R$16.00','posicao'=>'Ponta direita', 'tempo'=>'1939-1949', 'imagem'=>'tesourinha1.jpg', 'categoria'=>0),
    27 => array('nome'=>'Tinga', 'preco'=>'R$29.00', 'posicao'=>'Volante', 'tempo'=>'2005-2006/2010-2012', 'imagem'=>'tinga1.jpg', 'categoria'=>5),
    28 => array('nome'=>'Vacaria', 'preco'=>'R$28.00','posicao'=>'Lateral Esquerdo', 'tempo'=>'1970-1977', 'imagem'=>'vacaria1.jpg', 'categoria'=>3),
    29 => array('nome'=>'Valdomiro', 'preco'=>'R$44.00','posicao'=>'Ponta direita', 'tempo'=>'1968-1980', 'imagem'=>'valdomiro1.jpg', 'categoria'=>3),  
);
//Mundial: 10R$ | Copa Libertadores: 9R$ | Campeonato Brasileiro: 8R$ | Copa Sul-Americana: 7R$ | Copa Do Brasil: 6R$ | Recopa Sul-Americana: 5R$ | Campeonato Gaúcho: 2R$ |
?>
