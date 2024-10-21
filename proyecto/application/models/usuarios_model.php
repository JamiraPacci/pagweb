<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

	public function planillausuarios()
    {
        $this->db->select('*');
        $this->db->from('usuarios');
		$this->db->where('habilitado_us','1');
        return $this->db->get();
    }

    public function validar($login, $password)
	{
		$this->db->select('*');//seleccionar todo
		$this->db->from('usuarios');
		$this->db->where('login',$login);
        $this->db->where('password',$password);
		return $this->db->get(); //devuelve el resultado
	}


	public function agregarusuario($data)
	{
		$this->db->insert('usuarios',$data);
	}

    public function eliminarusuario($idusuario)
	{
		$this->db->where('id_usuarios',$idusuario);
        $this->db->delete('usuarios');
	}

    public function recuperarusuario($idusuario)
	{
		$this->db->select('*');//seleccionar todo
		$this->db->from('usuarios');
		$this->db->where('id_usuarios',$idusuario);
		return $this->db->get(); //devuelve el resultado
	}

    public function modificarusuario($idusuario,$data)
	{
		$this->db->where('id_usuarios',$idusuario);
		$this->db->update('usuarios',$data);
	}

	public function planilladeshabilitados()
    {
        $this->db->select('*');
        $this->db->from('usuarios');
		$this->db->where('habilitado_us','0');
        return $this->db->get();
    }

	

}


