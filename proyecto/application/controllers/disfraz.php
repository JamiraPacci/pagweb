<?php
// metodod de seguridad que no permite el acceso desde el navegador
defined('BASEPATH') OR exit('No direct script access allowed');
//EL NOMBRE DE LA CLASE ES WELCOME Y EL ARCHIVO COINCIDEN
class Disfraz extends CI_Controller {

	//el meetodo se llama index

    public function catalogo()
	{   
        $lista=$this->disfraz_model->listadisfraces();
        //disfraces esta en el foreach de la lista
        $data['disfraz']=$lista;
        $this->load->view('vistas_tienda_inc/inc_tienda/head_ti');
        $this->load->view('vistas_tienda_inc/inc_tienda/menu_ti');
		$this->load->view('vistas_catalogo/catalogo_disfraces');
        $this->load->view('vistas_tienda_inc/inc_tienda/footer_ti');
        $this->load->view('vistas_tienda_inc/inc_tienda/pie_ti');
	}

    //CATEGORIAS VISTA ADMINISTRADOR//

    
    public function categoria_adm()
    {
  
        $lista=$this->categoria_model->planillacategoria();
            //disfraces esta en el foreach de la lista
        $data['categoria']=$lista;
        $this->load->view('vistas_personal/inc_personal/head_personal');
        $this->load->view('vistas_personal/inc_personal/menu_personal');
        $this->load->view('vistas_categoria/planilla_categorias', $data);
        $this->load->view('vistas_personal/inc_personal/footer_personal');
        $this->load->view('vistas_personal/inc_personal/pie_personal');
       
    }

    public function deshabilitados_categoria()
    {
        $planilla=$this->categoria_model->planilladeshabilitados();
        //usuarios esta en el foreach de la planilla
        $data['categoria']=$planilla;
        $this->load->view('vistas_personal/inc_personal/head_personal');
        $this->load->view('vistas_personal/inc_personal/menu_personal');
        $this->load->view('vistas_categoria/categorias_deshabilitados', $data);
        $this->load->view('vistas_personal/inc_personal/footer_personal');
        $this->load->view('vistas_personal/inc_personal/pie_personal');


    }

    public function deshabilitarbd_categoria()
	{
		$id_categoria=$_POST['id_categoria'];
		$data['habilitado_cat']='0';

		$this->categoria_model->modificarcategoria($id_categoria,$data);
		redirect('disfraz/categoria_adm','refresh');
	}

    public function habilitarbd_categoria()
	{
		$id_categoria=$_POST['id_categoria'];
		$data['habilitado_cat']='1';

		$this->categoria_model->modificarcategoria($id_categoria,$data);
		redirect('disfraz/deshabilitados_categoria','refresh');
	}

    public function subir_img_cat()
	{
		$data['id_categoria']=$_POST['id_categoria'];
		$this->load->view('vistas_personal/inc_personal/head_personal');
        $this->load->view('vistas_personal/inc_personal/menu_personal');
        $this->load->view('vistas_categoria/subirform_categoria', $data);
        $this->load->view('vistas_personal/inc_personal/footer_personal');
        $this->load->view('vistas_personal/inc_personal/pie_personal');
		
	}

    public function subir_img_categoria()
    {
        //recepcion
        $id_categoria=$_POST['id_categoria'];
        $nombrearchivo=$id_categoria.".jpg";

        //ruta donde se grada los archivos
        $config['upload_path']='./uploads/categoria/';

        //nombre del archivo

        $config['file_name']=$nombrearchivo;
        //direccion del grardado
        $direccion="./uploads/categoria/".$nombrearchivo;

        if (file_exists($direccion))
        {
            unlink($direccion);
        }
        //tipos de archivos permitidos
        $config['allowed_types']='jpg|png';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload())
        {
            $data['error']=$this->upload->display_errors();

        }
        else
        {
            //alistar la foto que subio el usuario es como un actualizar
            $data['img_categoria']=$nombrearchivo;

        }
        $this->categoria_model->modificarcategoria($id_categoria, $data);
        $this->upload->data();
        //redieccion a la vista del administrador
        redirect('disfraz/categoria_adm', 'refresh');

    }

    public function modificar_categoria()
	{
		$idcat=$_POST['id_categoria'];
		$data['infocategoria']=$this->categoria_model->recuperarcategoria($idcat);

		$this->load->view('vistas_personal/inc_personal/head_personal');
        $this->load->view('vistas_personal/inc_personal/menu_personal');
		$this->load->view('vistas_categoria/modificar_categoria',$data);
		$this->load->view('vistas_personal/inc_personal/footer_personal');
        $this->load->view('vistas_personal/inc_personal/pie_personal');

	}

    public function modificarbd_categoria()
	{
		$idcat=$_POST['id_categoria'];
		$data['categoria']=strtoupper($_POST['categoria']);
		$data['img_categoria']=strtoupper($_POST['img']);
		
		$this->categoria_model->modificarcategoria($idcat,$data);
		redirect('disfraz/categoria_adm','refresh');
	}

    

}