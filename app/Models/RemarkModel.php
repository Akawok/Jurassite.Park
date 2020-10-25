<?php
namespace App\Models;
use CodeIgniter\Model;

class RemarkModel extends Model{
    public function getRemark($i){
        $db = db_connect();
        $query = $db->query('SELECT dino.id, dino.name AS `Espèce`, `title` AS `Titre`,`content` AS `Contenu` FROM remarks LEFT JOIN dino ON remarks.id = dino.id WHERE remarks.title = "'.$i.'"');
        $db->close();
        return $query->getResultArray();
    }
}