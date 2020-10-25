<?php
namespace App\Models;
use CodeIgniter\Model;

class SiteModel extends Model{
    public function getSiteInfos($n){
        $db = db_connect();
        $query = $db->query('SELECT `longitude`, `latitude`, `manager`, `phone` FROM `site` WHERE `name` = "'.$n.'"');
        $db->close();
        return $query->getResultArray();
    }
    public function getSiteDinos($n){
        $db = db_connect();
        $query = $db->query('SELECT `id` FROM site WHERE name = "'.$n.'"');
        $row = $query->getRow();
        $query2 = $db->query('SELECT id,`name` FROM `dino` WHERE `site_id` = "'.$row->id.'"');
        $db->close();
        return $query2->getResultArray();
    }
    public function getSiteNotes($n){
        $db = db_connect();
        $query = $db->query('SELECT `id` FROM site WHERE name = "'.$n.'"');
        $row = $query->getRow();
        $query2 = $db->query('SELECT `title`, `date` FROM `notes` WHERE `id` = "'.$row->id.'"');
        $db->close();
        return $query2->getResultArray();
    }    
}