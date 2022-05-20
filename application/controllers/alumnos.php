<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumnos extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Alumno');
    }

    public function index()
    {
        $this->load->view('alumnos/altaAlumno');
    }

    public function agregar()
    {
        try{
            $nombre = $this->input->post('nombre');
            $apellidoP = $this->input->post('apellidoP');
            $apellidoM = $this->input->post('apellidoM');
            $correo = $this->input->post('correo');
            $telefono = $this->input->post('telefono');
    
            if(!empty($nombre) && !empty($apellidoP) && !empty($apellidoM) && !empty($correo) && !empty($telefono)){
                $data = array(
                    "Nombre" =>$nombre,
                    "Apellido_P" =>$apellidoP,
                    "Apellido_M" =>$apellidoM,
                    "Correo" =>$correo,
                    "Telefono" =>$telefono
                );
        
                $exito = $this->Alumno->agregar($data);

                if($exito){
                    header('Location: '.base_url().'alumnos');
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
            $data = $this->Alumno->obtener();
            if($data){
                $this->load->view('alumnos/obtenerAlumnos',compact("data"));
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
            $data = $this->Alumno->eliminar($id);

            if($data) {
                $this->obtener();
            } else{
                throw new Exception("Ha ocurrido un error.");
            }
        } catch(Exception $e){
            echo $e->getMessage();
        }
    }

    public function obtenerAlumno(int $id)
    {
        try{
            $data = $this->Alumno->obtenerAlumno($id);

            if($data) {
                $this->load->view('alumnos/editarAlumno',compact("data"));
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
            $idAlumno = $this->input->post('idAlumno');
            $nombre = $this->input->post('nombre');
            $apellidoP = $this->input->post('apellidoP');
            $apellidoM = $this->input->post('apellidoM');
            $correo = $this->input->post('correo');
            $telefono = $this->input->post('telefono');

            if(!empty($nombre) && !empty($apellidoP) && !empty($apellidoM) && !empty($correo) && !empty($telefono)){
                $data = array(
                    "No_control_alumno" => $idAlumno,
                    "Nombre" =>$nombre,
                    "Apellido_P" =>$apellidoP,
                    "Apellido_M" =>$apellidoM,
                    "Correo" =>$correo,
                    "Telefono" =>$telefono
                );
        
                $exito = $this->Alumno->editar($data);

                if($exito){
                    header('Location: '.base_url().'alumnos');
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