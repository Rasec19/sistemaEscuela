<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materias extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Materia');
    }

    public function index()
    {
        $this->load->view('materias/altaMateria');
    }

    public function agregar()
    {
        try{
            $materia = $this->input->post('materia');
    
            if(!empty($materia)){
                $data = array(
                    "Materia" =>$materia
                );
        
                $exito = $this->Materia->agregar($data);

                if($exito){
                    header('Location: '.base_url().'materias');
                }
            } else {
                throw new Exception("Campo ingresado incorrectamente");
            }
        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }

    public function obtener()
    {
        try{
            $data = $this->Materia->obtener();
            if($data){
                $this->load->view('materias/obtenerMaterias',compact("data"));
            } else{
                throw new Exception("Ha ocudrriod un error.");
            }
        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }

    public function eliminar(int $id)
    {
        try{
            $data = $this->Materia->eliminar($id);

            if($data) {
                $this->obtener();
            } else{
                throw new Exception("Ha ocurrido un error.");
            }
        } catch(Exception $e){
            echo $e->getMessage();
        }
    }

    public function obtenerMateria(int $id)
    {
        try{
            $data = $this->Materia->obtenerMateria($id);

            if($data) {
                $this->load->view('materias/editarMateria',compact("data"));
            } else{
                throw new Exception("Ha ocurrido un error.");
            }
        } catch(Exception $e){
            echo $e->getMessage();
        }
    }

    public function editar()
    {
        try{
            $idMateria = $this->input->post('idMateria');
            $materia = $this->input->post('materia');

            if(!empty($materia)){
                $data = array(
                    "id_materia" => $idMateria,
                    "Materia" =>$materia
                );
        
                $exito = $this->Materia->editar($data);

                if($exito){
                    header('Location: '.base_url().'materias');
                }
            } else {
                throw new Exception("Campo ingresado incorrectamente");
            }
        } catch(Exception $e){
            echo $e->getMessage();
        }
    }
}


?>