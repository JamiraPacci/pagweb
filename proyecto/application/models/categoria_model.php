<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria_model extends CI_Model {

    
	public function listaCategorias()
	{
		$this->db->select('*'); // select *
		$this->db->from('categorias'); //tabla
		
		return $this->db->get(); //devolución del resultado de la consulta
	}
	public function planillacategoria()
	{
		$this->db->select('*'); // select *
		$this->db->from('categorias'); //tabla
		$this->db->where('habilitado_cat','1');
		return $this->db->get(); //devolución del resultado de la consulta
	}

	public function registrarDisfraz($id_categoria,$data)
	{
		$this->db->trans_start();
		$this->db->insert('disfraces',$data);
		$id_disfraz=$this->db->insert_id();

		$data2['id_categoria']=$id_categoria;
		$data2['id_disfraz']=$id_disfraz;
		$this->db->insert('catalogo',$data2);

		$this->db->trans_complete();

		if($this->db->trans_status()===FALSE)
		{
			return false;
		}
	}

	public function modificarcategoria($id_categoria,$data)
	{
		$this->db->where('id_categoria',$id_categoria);
		$this->db->update('categorias',$data);
	}

	public function planilladeshabilitados()
    {
        $this->db->select('*');
        $this->db->from('categorias');
		$this->db->where('habilitado_cat','0');
        return $this->db->get();
    }

	public function recuperarcategoria($id_categoria)
	{
		$this->db->select('*');//seleccionar todo
		$this->db->from('categorias');
		$this->db->where('id_categoria',$id_categoria);
		return $this->db->get(); //devuelve el resultado
	}

}

