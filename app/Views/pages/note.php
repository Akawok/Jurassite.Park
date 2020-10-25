<?php
$site = $notes[0]['Site'];
?>
<main id="main_note">
    <h3>Note du site de fouilles <?= $site; ?></h3>
    <?php
    foreach($notes as $key => $value){
        echo '<article>';
        foreach($value as $key => $datas){
            if($key == 'Site'){
                continue;
            }
            elseif($key == 'Titre'){
                echo '<h4>'.$datas.'</h4>';
                continue;
            }
            echo '<p><em>'.$datas.'</em></p>';
        }
        echo '</article>';
    }
    ?>
    <!-- REDIRECTION SITE DE FOUILLE -->
    <a href="../../site/<?=$site;?>">Retour site de fouilles</a>
    <br><br>
    <!-- REDIRECTION PAGE PRINCIPALE -->
    <a href="../../home">Page d'accueil</a>
</main>
<br>