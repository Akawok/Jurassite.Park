<?php
namespace App\Models;
use CodeIgniter\Model;

class NoteModel extends Model{
    public function getNote($d){
        $db = db_connect();
        $query = $db->query('SELECT site.name As `Site`, `title` AS `Titre`, `content` AS `Contenu`, `date` AS `Date` FROM notes LEFT JOIN site ON notes.id = site.id WHERE notes.date = "'.$d.'"');
        $db->close();
        return $query->getResultArray();
    }   
}