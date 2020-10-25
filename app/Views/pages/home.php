<main id="main_home">
    <h3>Bienvenue !</h3>
    <p>Vous pouvez consulter la liste des découvertes faites sur nos sites archéologiques<br>
    Bonne visite !</p>
    <table id="table_home">
        <th>Sites de fouilles</th>
        <?php
            foreach($sites as $key => $value){
                echo '<tr>';
                foreach($value as $key => $datas){
                    echo '<td><a href="site/'.$datas.'">'.$datas;
                }
            }
        ?>
    </table>
</main>
<br>