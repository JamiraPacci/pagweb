<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Disfraz_model extends CI_Model {

    public function listadisfraces()

    {
        $this->db->select('*');
        $this->db->from('disfraces');
        return $this->db->get();
    
    }
	

}

