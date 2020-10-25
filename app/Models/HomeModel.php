<?php
namespace App\Models;
use CodeIgniter\Model;

class HomeModel extends Model{
    public function getSites(){
        $db = db_connect();
        $query = $db->query('SELECT name FROM site');
        $db->close();
        return $query->getResultArray();
    }   
}