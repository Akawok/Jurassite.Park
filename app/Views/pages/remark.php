<?php
$id = $remark[0]['id'];
$race = $remark[0]['Espèce'];
?>
<main id="main_remark">
<!-- AFFICHAGES DES REMARQUES -->
    <h3>Remarques fossile <?= $race; ?></h3> 
    <?php
        foreach($remark as $key => $value){
            echo "<article>";
            foreach($value as $key => $datas){
                if($key == 'id' || $key == 'Espèce'){
                    continue;
                }
                elseif($key == 'Titre'){
                    echo '<h4>'.$datas.'</h4>';
                }
                else{
                    echo "<p><em>'".$datas."'</p></em>";
                }
            }
            echo "</article>";
        }
        ?>
    <br>
    <!-- REDIRECTION SITE DE FOUILLE -->
    <a href="../../dinosaure/<?=$race;?>/<?=$id;?>">Fiche fossile <?= $race; ?></a><br>
    <br>
    <!-- REDIRECTION PAGE PRINCIPALE -->
    <a href="../../home">Page d'accueil</a>
</main>
<br>