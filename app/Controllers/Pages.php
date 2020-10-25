<?php
//CHARGEMENT DU NAMESPACE
namespace App\Controllers;

//CHARGEMENT DES MODELES
use App\Models\HomeModel;
use App\Models\SiteModel;
use App\Models\DinosaureModel;
use App\Models\NoteModel;
use App\Models\RemarkModel;

//CHARGEMENT DE LA CLASSE CONTROLLER
use CodeIgniter\Controller;

class Pages extends Controller{

    public function home(){
        if ( ! is_file(APPPATH.'/Views/pages/home.php')){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('home');
        }
        $sites = new HomeModel();
        $data = [
            'sites' => $sites->getSites()
        ];
        echo view('templates/header', $data); 
        echo view('pages/home', $data);
        echo view('templates/footer');  
    } // Fin de la méthode home


    public function site($n = NULL){
        if ( ! is_file(APPPATH.'/Views/pages/site.php')){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('site');
        }
        $site = new SiteModel();
        $data = [
            'title' => 'JurasSite Park',
            'site' => $n,
            'infos' => $site->getSiteInfos($n),
            'dinos' => $site->getSiteDinos($n),
            'notes' => $site->getSiteNotes($n)
        ];
        echo view('templates/header', $data); 
        echo view('pages/site', $data);
        echo view('templates/footer');  
    } // Fin de la méthode sites

    public function dinosaure($n = NULL, $i = NULL){
        if ( ! is_file(APPPATH.'/Views/pages/dinosaure.php')){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('dinosaure');
        }
        $dinosaure = new DinosaureModel();
        $data = [
            'title' => 'JurasSite Park',
            'name' => $n,
            'dino' => $dinosaure->getDinoInfo($n, $i),
            'remarks' => $dinosaure->getRemarks($i)
        ];
        echo view('templates/header', $data); 
        echo view('pages/dinosaure', $data);
        echo view('templates/footer'); 
    } // Fin de la méthode dinosaure

    public function note($d = NULL){
        if ( ! is_file(APPPATH.'/Views/pages/note.php')){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('note');
        }
        $note = new NoteModel();
        $data = [
            'title' => 'JurasSite Park',
            'notes' => $note->getNote($d)
        ];
        echo view('templates/header', $data); 
        echo view('pages/note', $data);
        echo view('templates/footer');
    } // Fin de la méthode note

    public function remarque($r = NULL){
        if ( ! is_file(APPPATH.'/Views/pages/remark.php')){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('remark');
        }
        $remark = new RemarkModel();
        $data = [
            'title' => 'JurasSite Park',
            'remark' => $remark->getRemark($r)
        ];
        echo view('templates/header', $data); 
        echo view('pages/remark', $data);
        echo view('templates/footer');
    } // Fin de la méthode remarque

} // Fin de classe