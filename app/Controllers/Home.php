<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {        
        return view($this->plantilla_actual()."index");
    }
    private function plantilla_actual(){
        $session= \Config\Services::session();
        $nro_plantilla=1;
        if($session->get('nro_plantilla')!=null)
            $nro_plantilla=$session->get('nro_plantilla');
        $vista=null;
        switch ($nro_plantilla) {
            case  1:
                $vista='web\plantilla1\\';
                break;            
            case  2:
                $vista='web\plantilla2\\';
                break; 
            case  3:
                $vista='web\plantilla3\\';
                break; 
            case  4:
                $vista='web\plantilla4\\';
                break; 
            case  5:
                $vista='web\plantilla5\\';
                break; 
            case  6:
                $vista='web\plantilla6\\';
                break; 
            case  7:
                $vista='web\plantilla7\\';
                break; 
            case  8:
                $vista='web\plantilla8\\';
                break;                             
            default:
                $vista='web\plantilla1\\';
                break;
        }
        return $vista;

    }
    public function about(){

        return view($this->plantilla_actual()."about");

    }
    public function products(){

        return view($this->plantilla_actual()."products");

    }
    public function services(){

        return view($this->plantilla_actual()."services");

    }
    public function faq(){

        return view($this->plantilla_actual()."faq");

    }
    public function contact(){

        return view($this->plantilla_actual()."contact");

    }
    
    public function plantilla(){
        $session= \Config\Services::session();
        $nro_plantilla=0;
        if($session->get('nro_plantilla')!=null)
            $nro_plantilla=$session->get('nro_plantilla');
        else 
            $nro_plantilla++;
        $nro_plantilla++;
        if($nro_plantilla>8)
        $nro_plantilla=1;
        $session->set('nro_plantilla', $nro_plantilla);
        return redirect()->to("Inicio");    

    }
}
