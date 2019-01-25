<?php


class modelLogin extends CI_Model{

   function agregarTarea(){         //   Consulta Mysql para buscar en la tabla Usuario aquellos usuarios que coincidan con el nombre de usuario y password ingresados en pantalla de login
    $data = array(
        'Titulo'=>$this->input->post('titulo'),
        'Link'=>$this->input->post('link'),
        'Descripcion'=>$this->textarea->post('descripcion')
         );
       return $this->db->insert('tareas',$data);
        
   }
}


?>