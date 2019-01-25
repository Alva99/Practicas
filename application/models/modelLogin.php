<?php


class modelLogin extends CI_Model{

   function ValidarUsuario($name,$password){         //   Consulta Mysql para buscar en la tabla Usuario aquellos usuarios que coincidan con el nombre de usuario y password ingresados en pantalla de login
      $query = $this->db->select('TipoUser');   //   La consulta se efectúa mediante Active Record. Una manera alternativa, y en lenguaje más sencillo, de generar las consultas Sql.
      $query = $this->db->from('Usuarios');   //   La consulta se efectúa mediante Active Record. Una manera alternativa, y en lenguaje más sencillo, de generar las consultas Sql.
      $query = $this->db->where('NameUser',$name);
      $query = $this->db->where('Password',$password);
      $query = $this->db->get();
      if($query->num_rows() > 0 )
        {
            return $query->row();    //   Devolvemos al controlador la fila que coincide con la búsqueda. (FALSE en caso que no existir coincidencias)
        }
   }
}


?>