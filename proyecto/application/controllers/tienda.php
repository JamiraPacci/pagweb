
<?php
// metodod de seguridad que no permite el acceso desde el navegador
defined('BASEPATH') OR exit('No direct script access allowed');
//EL NOMBRE DE LA CLASE ES WELCOME Y EL ARCHIVO COINCIDEN
class Tienda extends CI_Controller {

	//el meetodo se llama index
	public function index()
	{
		//invocacion a una vista
        $this->load->view('vistas_tienda_inc/inc_tienda/head_ti');
        $this->load->view('vistas_tienda_inc/inc_tienda/menu_ti');
		$this->load->view('vistas_tienda_inc/tienda_inicio');
        $this->load->view('vistas_tienda_inc/inc_tienda/footer_ti');
        $this->load->view('vistas_tienda_inc/inc_tienda/pie_ti');
	}

    public function categoria()
	{   
        $this->load->view('vistas_tienda_inc/inc_tienda/head_ti');
        $this->load->view('vistas_tienda_inc/inc_tienda/menu_ti');
		$this->load->view('vistas_tienda_inc/categorias');
        $this->load->view('vistas_tienda_inc/inc_tienda/footer_ti');
        $this->load->view('vistas_tienda_inc/inc_tienda/pie_ti');
	}

    public function contactos()
	{
        $this->load->view('vistas_tienda_inc/inc_tienda/head_ti');
        $this->load->view('vistas_tienda_inc/inc_tienda/menu_ti');
		$this->load->view('vistas_tienda_inc/contactos');
        $this->load->view('vistas_tienda_inc/inc_tienda/footer_ti');
        $this->load->view('vistas_tienda_inc/inc_tienda/pie_ti');
	}

    public function servicios()
	{
        $this->load->view('vistas_tienda_inc/inc_tienda/head_ti');
        $this->load->view('vistas_tienda_inc/inc_tienda/menu_ti');
		$this->load->view('vistas_tienda_inc/servicios');
        $this->load->view('vistas_tienda_inc/inc_tienda/footer_ti');
        $this->load->view('vistas_tienda_inc/inc_tienda/pie_ti');
        
	}


    public function personal()
    {

        if($this->session->userdata('login'))
		{
            $planilla=$this->tienda_model->planillatienda();
            //empleados esta en el foreach de la planilla
            $data['empleados']=$planilla;
            $this->load->view('vistas_personal/inc_personal/head_personal');
            $this->load->view('vistas_personal/inc_personal/menu_personal');
            $this->load->view('vistas_personal/planilla_personal', $data);
            $this->load->view('vistas_personal/inc_personal/footer_personal');
            $this->load->view('vistas_personal/inc_personal/pie_personal');
    
		}
		else
		{
			redirect('usuarios/index','refresh');
		}
       
    }

    public function usuarios()
    {

        if($this->session->userdata('login'))
		{
            $planilla_us=$this->usuarios_model->planillausuarios();
            //empleados esta en el foreach de la planilla
            $data['logeados']=$planilla_us;
            $this->load->view('vistas_personal/inc_personal/head_personal');
            $this->load->view('vistas_personal/inc_personal/menu_personal');
            $this->load->view('vistas_usuarios/planilla_us', $data);
            $this->load->view('vistas_personal/inc_personal/footer_personal');
            $this->load->view('vistas_personal/inc_personal/pie_personal');
    
		}
		else
		{
			redirect('usuarios/index','refresh');
		}
       
    }

    public function agregar()
    {
        $this->load->view('vistas_personal/inc_personal/head_personal');
        $this->load->view('vistas_personal/inc_personal/menu_personal');
        $this->load->view('vistas_personal/formulario_personal');
        $this->load->view('vistas_personal/inc_personal/footer_personal');
        $this->load->view('vistas_personal/inc_personal/pie_personal');
    }
    
    public function agregarbd()
    {
        $data['nombre_personal']=strtoupper($_POST['nombre']);
		$data['apellido1_personal']=strtoupper($_POST['apellido1']);
		$data['apellido2_personal']=strtoupper($_POST['apellido2']);
        $data['ci_personal']=strtoupper($_POST['ci']);
		$data['telefono_personal']=$_POST['telefono'];
        $data['adicional_personal']=strtoupper($_POST['adicional']);

		$this->tienda_model->agregarpersonal($data);
		redirect('tienda/personal','refresh');

    }

    public function eliminarbd()
	{
		$idus=$_POST['idpersonal'];
		$this->tienda_model->eliminarpersonal($idus);
		redirect('tienda/personal','refresh');
	}

    public function modificar()
	{
		$idper=$_POST['idpersonal'];
		$data['infopersonal']=$this->tienda_model->recuperarpersonal($idper);

		$this->load->view('vistas_personal/inc_personal/head_personal');
        $this->load->view('vistas_personal/inc_personal/menu_personal');
		$this->load->view('vistas_personal/modificar_personal',$data);
		$this->load->view('vistas_personal/inc_personal/footer_personal');
        $this->load->view('vistas_personal/inc_personal/pie_personal');

	}

    public function modificarbd()
	{
		$idper=$_POST['idpersonal'];
		$data['nombre_personal']=strtoupper($_POST['nombre']);
		$data['apellido1_personal']=strtoupper($_POST['apellido1']);
		$data['apellido2_personal']=strtoupper($_POST['apellido2']);
        $data['ci_personal']=strtoupper($_POST['ci']);
		$data['telefono_personal']=$_POST['telefono'];
        $data['adicional_personal']=strtoupper($_POST['adicional']);

		$this->tienda_model->modificarpersonal($idper,$data);
		redirect('tienda/personal','refresh');
	}

    public function deshabilitarbd()
	{
		$idpersonal=$_POST['idpersonal'];
		$data['habilitado']='0';

		$this->tienda_model->modificarpersonal($idpersonal,$data);
		redirect('tienda/personal','refresh');
	}

    public function deshabilitados()
    {
        $planilla=$this->tienda_model->planilladeshabilitados();
        //usuarios esta en el foreach de la planilla
        $data['empleados']=$planilla;
        $this->load->view('vistas_personal/inc_personal/head_personal');
        $this->load->view('vistas_personal/inc_personal/menu_personal');
        $this->load->view('vistas_personal/personal_deshabilitados', $data);
        $this->load->view('vistas_personal/inc_personal/footer_personal');
        $this->load->view('vistas_personal/inc_personal/pie_personal');


    }

    public function habilitarbd()
	{
		$idpersonal=$_POST['idpersonal'];
		$data['habilitado']='1';

		$this->tienda_model->modificarpersonal($idpersonal,$data);
		redirect('tienda/deshabilitados','refresh');
	}

    //SECCION DISFRAZ//

    public function disfraces()
    {

        
        $lista=$this->tienda_model->listadisfraz();
            //disfraces esta en el foreach de la lista
        $data['disfraz']=$lista;
        $this->load->view('vistas_personal/inc_personal/head_personal');
        $this->load->view('vistas_personal/inc_personal/menu_personal');
        $this->load->view('vistas_disfraz/lista_disfraz', $data);
        $this->load->view('vistas_personal/inc_personal/footer_personal');
        $this->load->view('vistas_personal/inc_personal/pie_personal');
       
    }

    public function listadisfraces()
    {

        
        $lista=$this->tienda_model->listadisfraz();
            //disfraces esta en el foreach de la lista
        $data['disfraz']=$lista;
        $this->load->view('vistas_personal/inc_personal/head_personal');
        $this->load->view('vistas_personal/inc_personal/menu_personal');
        $this->load->view('vistas_disfraz/lista_disfraz', $data);
        $this->load->view('vistas_personal/inc_personal/footer_personal');
        $this->load->view('vistas_personal/inc_personal/pie_personal');
       
    }

    public function subir_img()
	{
		$data['id_disfraz']=$_POST['id_disfraz'];
		$this->load->view('vistas_personal/inc_personal/head_personal');
        $this->load->view('vistas_personal/inc_personal/menu_personal');
        $this->load->view('vistas_disfraz/subirform', $data);
        $this->load->view('vistas_personal/inc_personal/footer_personal');
        $this->load->view('vistas_personal/inc_personal/pie_personal');
		
	}

    public function agregar_dis()
    {  
	    $data['infocategorias']=$this->categoria_model->listaCategorias();
			
		$this->load->view('vistas_personal/inc_personal/head_personal');
        $this->load->view('vistas_personal/inc_personal/menu_personal');
        $this->load->view('vistas_disfraz/formulario_disfraz',$data);
        $this->load->view('vistas_personal/inc_personal/footer_personal');
        $this->load->view('vistas_personal/inc_personal/pie_personal');
	}

    
    public function agregarbd_dis()
    {

        $data['nombre_disfraz']=strtoupper($_POST['nombre_disfraz']);
        $data['color']=($_POST['color']);
		$data['talla']=$_POST['talla'];
        $data['precio']=$_POST['precio'];
        $data['cantidad']=$_POST['cantidad'];
        $data['estado']=($_POST['estado']);
        $data['descripcion']=($_POST['descripcion']);
        $id_categoria=$_POST['id_categoria'];

		$this->categoria_model->registrarDisfraz($id_categoria, $data);
		redirect('tienda/disfraces','refresh');

    }

    public function eliminarbd_dis()
	{
		$id_dis=$_POST['id_disfraz'];
		$this->tienda_model->eliminardisfraz($id_dis);
		redirect('tienda/disfraces','refresh');
	}

    public function modificar_dis()
	{
		$id_disfraz=$_POST['id_disfraz'];
		$data['infodisfraz']=$this->tienda_model->recuperardisfraz($id_disfraz);

        $this->load->view('vistas_personal/inc_personal/head_personal');
        $this->load->view('vistas_personal/inc_personal/menu_personal');
        $this->load->view('vistas_disfraz/modificar_disfraces', $data);
        $this->load->view('vistas_personal/inc_personal/footer_personal');
        $this->load->view('vistas_personal/inc_personal/pie_personal');

	}

    public function modificarbd_dis()
	{
		$id_disfraz=$_POST['id_disfraz'];
		$data['nombre_disfraz']=($_POST['nombre_disfraz']);
        $data['color']=($_POST['color']);
		$data['talla']=$_POST['talla'];
        $data['precio']=$_POST['precio'];
        $data['cantidad']=$_POST['cantidad'];
        $data['estado']=($_POST['estado']);
        $data['descripcion']=($_POST['descripcion']);
        $nombrearchivo=$id_disfraz.".jpg";

		//ruta donde se grada los archivos
        $config['upload_path']='./uploads/disfraz/';

        //nombre del archivo

        $config['file_name']=$nombrearchivo;
        //direccion del grardado
        $direccion="./uploads/disfraz/".$nombrearchivo;

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
            $data['img_disfraz']=$nombrearchivo;

        }
        $this->tienda_model->modificardisfraz($id_disfraz, $data);
        $this->upload->data();
        //redieccion a la vista del administrador
        redirect('tienda/listadisfraces', 'refresh');
	}

    public function deshabilitarbd_dis()
	{
		$id_disfraz=$_POST['id_disfraz'];
		$data['habilitado_dis']='0';

		$this->tienda_model->modificardisfraz($id_disfraz,$data);
		redirect('tienda/disfraces','refresh');
	}

    public function deshabilitados_dis()
    {
        $planilla=$this->tienda_model->listadeshabilitados();
        //usuarios esta en el foreach de la planilla
        $data['disfraces']=$planilla;
        $this->load->view('vistas_personal/inc_personal/head_personal');
        $this->load->view('vistas_personal/inc_personal/menu_personal');
        $this->load->view('vistas_disfraz/disfraces_deshabilitados', $data);
        $this->load->view('vistas_personal/inc_personal/footer_personal');
        $this->load->view('vistas_personal/inc_personal/pie_personal');
       
    }

    public function habilitarbd_dis()
	{
		$id_disfraz=$_POST['id_disfraz'];
		$data['habilitado_dis']='1';

		$this->tienda_model->modificardisfraz($id_disfraz,$data);
		redirect('tienda/deshabilitados_dis','refresh');
	}

    public function subir_img_dis()
    {
        //recepcion
        $id_disfraz=$_POST['id_disfraz'];
        $nombrearchivo=$id_disfraz.".jpg";

        //ruta donde se grada los archivos
        $config['upload_path']='./uploads/disfraz/';

        //nombre del archivo

        $config['file_name']=$nombrearchivo;
        //direccion del grardado
        $direccion="./uploads/disfraz/".$nombrearchivo;

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
            $data['img_disfraz']=$nombrearchivo;

        }
        $this->tienda_model->modificardisfraz($id_disfraz, $data);
        $this->upload->data();
        //redieccion a la vista del administrador
        redirect('tienda/listadisfraces', 'refresh');

    }



}
