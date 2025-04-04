<?php

require_once("modelo/Link.php");

echo '<link rel="stylesheet" href="styles/botao_imagem.css">';
echo '<link rel="stylesheet" href="styles/estilos.css">';

$bandas = array(
    new Link("https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Rammstein_wallpaper_logo.png/800px-Rammstein_wallpaper_logo.png?20131026234519", "Rammstein"),
    new Link("https://logos-world.net/wp-content/uploads/2023/09/Weezer-Symbol.png","Weezer"),
    new Link("https://images.fineartamerica.com/images/artworkimages/mediumlarge/3/2-best-seller-logo-music-soad-system-of-a-down-widodo-ganteng.jpg", "System of a Down")
);
    
$cartoons = array(
    new Link("https://br.web.img3.acsta.net/pictures/14/04/22/09/03/422873.jpg", "Hora de Aventura"),
    new Link ("https://m.media-amazon.com/images/S/pv-target-images/4467381f8ccbbc2d17e06f78f3961adedaedc40293abd78a7a2948daf4b52096.jpg", "Apenas um Show"),
    new Link("https://cartoonostalgia.wordpress.com/wp-content/uploads/2015/09/0000000001270.jpg", "Du, Dudu e Edu")
);

$jogos = array(
    new Link("https://play-lh.googleusercontent.com/ameFGPYH-qhOSxdsSA_fA54I4Ch-eO8y7Pj4x6W6ejQkvKbhVjCehKlPerBY9X2L8ek", "Wuthering Waves"),
    new Link("https://cdn2.steamgriddb.com/icon/e52da5a31de788599378924f0e639557.png", "Honkai: Star Rail"),
    new Link("https://images.icon-icons.com/2699/PNG/512/minecraft_logo_icon_168974.png", "Minecraft")
);

$livros = array(
    new Link("https://m.media-amazon.com/images/I/51gnxlBuwSL._AC_UF1000,1000_QL80_.jpg", "Querida"),
    new Link("https://http2.mlstatic.com/D_NQ_NP_633487-MLU69789325581_062023-O.webp", "O Cortiço"),
    new Link("https://m.media-amazon.com/images/I/8135XQngs8L._AC_UF1000,1000_QL80_.jpg", "Veronika Decide Morrer")
);

desenhaBotaoBetter($bandas, "Bandas");
desenhaBotaoBetter($cartoons, "Cartoons");
desenhaBotaoBetter($jogos, "Jogos");
desenhaBotaoBetter($livros, "Livros");


function desenhaBotaoBetter($array, $nome){
    echo'<div class="dropdown">
    <button class="dropbtn">'.$nome.'</button>
    
    <div class="dropText">';

    foreach ($array as $a) {
        echo'<span><img src="'.$a->getLinkimg().'" width="20" height="20">'.$a->getInfo().'</span>';
    }
    
echo '</div>
</div>';
}