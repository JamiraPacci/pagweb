<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reserva_model extends CI_Model {

    public function listareservas()
	{
		$this->db->select('*'); // slecet *
		$this->db->from('reservas'); //tabla
		return $this->db->get(); //devolución del resultado de la consulta
	}
    public function obtener_reservas($id_reserva) 
    {

        $this->db->select('*'); // slecet *
		$this->db->from('reservas'); //tabla
		$this->db->where('id_reserva',$id_reserva);
		return $this->db->get(); //devolución del resultado de la consulta
    }

    
    public function crear_reserva($data) {
        return $this->db->insert('reservas', $data);
    }

   
    public function eliminar_reserva($id_reserva) {
        $this->db->where('id_reserva',$id_reserva);
        return $this->db->delete('reservas');
    }

   
    public function actualizar_reserva($id_reserva, $data) {
        $this->db->where('id_reserva', $id_reserva);
        return $this->db->update('reservas', $data);
    }
}
