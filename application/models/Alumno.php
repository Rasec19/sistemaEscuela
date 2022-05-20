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
                $result = $this->db->query("DELETE FROM alumnos WHERE No_control_alumno = {$id}");

                if($result) {
                    return true;
                } else{
                    throw new Exception("Ha ocurrido un error en la base de datos la intentar eliminar.");
                }
            } catch(Exception $e){
                echo $e->getMessage();
            }
        }

        public function obtenerAlumno(int $id)
        {
            try{
                $result = $this->db->query("SELECT * FROM alumnos WHERE No_control_alumno = {$id}")->row();

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
                    $result = $this->db->query("UPDATE alumnos SET Nombre='{$data['Nombre']}',Apellido_P='{$data['Apellido_P']}',Apellido_M='{$data['Apellido_M']}',Correo='{$data['Correo']}',Telefono='{$data['Telefono']}' WHERE No_control_alumno={$data['No_control_alumno']}");
                    
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