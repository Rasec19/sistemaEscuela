<?php

    class Alumno extends CI_Model{

        public function agregar($data)
        {
            try{
                if(!empty($data)){
                    $this->db->insert("alumnos",$data);
                    return true;
                } else{
                    throw new Exception('Ha ocurrido un error en la base de datos');
                }
                
            } catch(Exception $e) {
                echo $e->getMessage();
            }
        }

        public function obtener()
        {
            try{
                $result = $this->db->query("SELECT * FROM alumnos")->result();

                if($result){
                    return $result;
                } else {
                    throw new Exception('Ha ocurrido un error en la base de datos la intentar obtener los datos.');
                }
            } catch(Exception $e) {
                echo $e->getMessage();
            }
        }

        public function eliminar(int $id)
        {
            try{
                $result = $this->db->query("DELETE FROM alumnos WHERE No_control_alumno = {$id}")->result();

                if($result) {
                    return true;
                } else{
                    throw new Exception("Ha ocurrido un error en la base de datos la intentar eliminar.");
                }
            } catch(Exception $e){
                echo $e->getMessage();
            }
        }

    }

?>