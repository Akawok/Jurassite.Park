<main id="main_site">
    <h2>Sites de fouilles <?= $site; ?></h2>
    <!-- INFORMATIONS DU SITE -->
    <table id="table_site_info">
        <?php
            echo '<th colspan="2"><h3>Informations</h3></th>';
            foreach($infos as $key => $value){
                foreach($value as $key => $datas){
                    echo '<tr><td><b>'.$key.' : </b><td>'.$datas;
                }
            }
        ?>
    </table>
    <br>
    <!-- LISTE DES DINOSAURES -->
    <table id="table_list_dino">
        <?php
        echo '<th colspan="3"><h3>Les squelettes de dinosaures</h3></th>';
        foreach($dinos as $key => $value){
            echo '<tr><td><b>Espèce : </b><td>'.$dinos[$key]['name'].'<td><a href="../dinosaure/'.$dinos[$key]['name'].'/'.$dinos[$key]['id'].'">Consulter</a>';
        }
        ?>
    </table>
    <br>
    <!-- LISTE DES NOTES -->
    <table id="table_list_note">
        <?php
        echo '<th colspan="3"><h3>Les notes du site de fouilles</h3></th>';
        // echo '<th>Note</th><th>Date</th><th>Lien</th>';
        foreach($notes as $key => $value){
            echo '<tr><td>'.$notes[$key]['title'].' : <td>'.$notes[$key]['date'].'<td><a href="../note/'.$notes[$key]['date'].'">Lire la note</a>';
        }
        ?>
    </table>
    <br>
    <!-- REDIRECTION PAGE PRINCIPALE -->
    <a href="../home">Page d'accueil</a>
    </main>
<br>