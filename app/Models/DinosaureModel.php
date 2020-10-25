<?php
namespace App\Models;
use CodeIgniter\Model;

class DinosaureModel extends Model{
    public function getDinoInfo($n, $i){
        $db = db_connect();
        $query = $db->query('SELECT site.name AS `Site`, dino.name As `Espèce`, `family` AS `Famille`,`type` AS `Type`, `x` AS `Position X`, `y` AS `Position Y`, `z` AS `Profondeur`, `picture` AS `Image`, `conservation` AS `Conservation` FROM dino LEFT JOIN site ON dino.site_id = site.id WHERE dino.name = "'.$n.'" AND dino.id = "'.$i.'"');
        $db->close();
        return $query->getResultArray();
    }
    public function getRemarks($i){
        $db = db_connect();
        $query = $db->query('SELECT `title` AS `Titre`,`content` AS `Contenu` FROM remarks WHERE id = "'.$i.'"');
        $db->close();
        return $query->getResultArray();
    }

}