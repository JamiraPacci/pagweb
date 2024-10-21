<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tienda_model extends CI_Model {

    public function planillatienda()
    {
        $this->db->select('*');
        $this->db->from('personal');
		$this->db->where('habilitado','1');
        return $this->db->get();
    }

    public function agregarpersonal($data)
	{
		$this->db->insert('personal',$data);
	}

    public function eliminarpersonal($idpersonal)
	{
		$this->db->where('id_personal',$idpersonal);
        $this->db->delete('personal');
	}

    public function recuperarpersonal($idpersonal)
	{
		$this->db->select('*');//seleccionar todo
		$this->db->from('personal');
		$this->db->where('id_personal',$idpersonal);
		return $this->db->get(); //devuelve el resultado
	}

    public function modificarpersonal($idpersonal,$data)
	{
		$this->db->where('id_personal',$idpersonal);
		$this->db->update('personal',$data);
	}

	public function planilladeshabilitados()
    {
        $this->db->select('*');
        $this->db->from('personal');
		$this->db->where('habilitado','0');
        return $this->db->get();
    }

	//SECTOR DISFRAZ//

	public function listadisfraz()

    {
        $this->db->select('*');
        $this->db->from('disfraces');
        $this->db->where('habilitado_dis','1');
        return $this->db->get();
    
    }

    public function eliminardisfraz($id_disfraz)
	{
		$this->db->where('id_disfraz', $id_disfraz);
        $this->db->delete('disfraces');
	}

    public function recuperardisfraz($id_disfraz)
	{
		$this->db->select('*');//seleccionar todo
		$this->db->from('disfraces');
		$this->db->where('id_disfraz',$id_disfraz);
		return $this->db->get(); //devuelve el resultado
	}

    public function modificardisfraz($id_disfraz,$data)
	{
		$this->db->where('id_disfraz',$id_disfraz);
		$this->db->update('disfraces',$data);
	}

	public function listadeshabilitados()
    {
        $this->db->select('*');
        $this->db->from('disfraces');
		$this->db->where('habilitado_dis','0');
        return $this->db->get();
    }


}
