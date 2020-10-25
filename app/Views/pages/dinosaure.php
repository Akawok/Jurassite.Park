<?php
$site = $dino[0]['Site'];
$race = $dino[0]['Espèce'];
$image = $dino[0]['Image'];
?>
<main id="main_dino">
    <h2>Sites de fouilles <?= $site; ?></h2>
    <!-- INFORMATION DU DINOSAURE -->
    <table id="table_dino">
        <th colspan="2"><h3>Fiche <?= $race; ?></h3></th>
        <?php
            foreach($dino as $key => $value){
                foreach($value as $key => $datas){
                    if($key == 'Site' || $key == 'Espèce' || $key == 'Image'){
                        continue;
                    }
                    echo '<tr><td><b>'.$key.' : </b><td>'.$datas;
                }
            }
        ?>
    </table>
    <br>
    <?php
        echo $image;
    ?>
    <!-- AFFICHAGES DES REMARQUES -->
    <table id="table_remark">
    <th colspan="2">Remarques fossile <?= $race; ?></h3></th>
        <?php
            foreach($remarks as $key => $value){
                foreach($value as $key => $datas){
                    if($key != 'Titre'){
                        continue;
                    }
                    echo '<tr><td><b>Remarque : </b><td><a href="../../remarque/'.$datas.'">'.$datas.'<a>';
                }
            }
        ?>
    </table>
    <br>
    <!-- REDIRECTION SITE DE FOUILLE -->
    <a href="../../site/<?=$site;?>">Retour site de fouilles</a><br>
    <br>
    <!-- REDIRECTION PAGE PRINCIPALE -->
    <a href="../../home">Page d'accueil</a>
</main>
<br>