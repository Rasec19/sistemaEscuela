<?php

    class Materia extends CI_Model{

        public function agregar($data)
        {
            try{
                if(!empty($data)){
                    $this->db->insert("materias",$data);
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
                $result = $this->db->query("SELECT * FROM materias")->result();

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
                $result = $this->db->query("DELETE FROM materias WHERE id_materia = {$id}");

                if($result) {
                    return true;
                } else{
                    throw new Exception("Ha ocurrido un error en la base de datos la intentar eliminar.");
                }
            } catch(Exception $e){
                echo $e->getMessage();
            }
        }

        public function obtenerMateria(int $id)
        {
            try{
                $result = $this->db->query("SELECT * FROM materias WHERE id_materia = {$id}")->row();

                if($result) {
                    return $result;
                } else{
                    throw new Exception("Ha ocurrido un error en la base de datos la intentar obtener los datos del alumno.");
                }
            } catch(Exception $e){
                echo $e->getMessage();
            }
        }

        public function editar($data)
        {
            try{
                if(!empty($data)){
                    $result = $this->db->query("UPDATE materias SET Materia='{$data['Materia']}' WHERE id_materia={$data['id_materia']}");
                    
                    if($result){
                        return true;
                    } else{
                        throw new Exception("Ha ocurrido un error en la base de datos la intentar editar.");
                    }
                } else{
                    throw new Exception('Ha ocurrido un error en la base de datos');
                }

            } catch(Exception $e) {
                echo $e->getMessage();
            }
        }
    }

?>