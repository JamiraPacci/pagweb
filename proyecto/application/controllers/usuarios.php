<?php
// metodod de seguridad que no permite el acceso desde el navegador
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	//el metodo se llama index
	public function index()
	{
		//invocacion a una vista
        $this->load->view('vistas_usuarios/inc_usuario/head_us');
        $this->load->view('vistas_usuarios/inc_usuario/menu_us');
        $this->load->view('vistas_tienda_inc/formulario_inc');
        $this->load->view('vistas_usuarios/inc_usuario/footer_us');
        $this->load->view('vistas_usuarios/inc_usuario/pie_us');
	}

	public function planilla_usuarios()
	{
		
            $planilla_us=$this->usuarios_model->planillausuarios();
            //logeados esta en el foreach de la planilla_us
            $data['logeados']=$planilla_us;//invocacion a una vista
        	$this->load->view('vistas_usuarios/inc_usuario/head_us');
        	$this->load->view('vistas_usuarios/inc_usuario/menu_us');
        	$this->load->view('vistas_usuarios/planilla_us', $data);
        	$this->load->view('vistas_usuarios/inc_usuario/footer_us');
        	$this->load->view('vistas_usuarios/inc_usuario/pie_us');
		
	}

    public function validarusuario()
	{
		$login=$_POST['login'];
		$password=sha1($_POST['password']);

		echo $login;
		echo $password;

		$consulta=$this->usuarios_model->validar($login,$password);

		echo $consulta->num_rows();

		if($consulta->num_rows()>0)
		{
			echo 'inicio de sesion';
			//usuario valido
			foreach($consulta->result() as $row)
			{

				$this->session->set_userdata('idusuario',$row->id_usuarios);
				$this->session->set_userdata('login',$row->login);
				$this->session->set_userdata('tipo',$row->tipo);

				redirect('usuarios/panel','refresh');
			}
		}
		else
		{
			//acceso incorrecto - volvemos al login
			redirect('usuarios/index','refresh');
		}
	}

	public function panel()
	{
		if($this->session->userdata('login'))
		{
			redirect('tienda/personal','refresh');
		}
		else
		{
			redirect('usuarios/index','refresh');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('usuarios/index','refresh');
	}

	public function agregar_us()
    {
        $this->load->view('vistas_usuarios/inc_usuario/head_us');
        $this->load->view('vistas_usuarios/inc_usuario/menu_us');
        $this->load->view('vistas_usuarios/formulario_us');
        $this->load->view('vistas_usuarios/inc_usuario/footer_us');
        $this->load->view('vistas_usuarios/inc_usuario/pie_us');
    }
    
    public function agregarbd_us()
    {
        $data['login']=strtolower($_POST['login']);
		$data['password']=sha1($_POST['password']);
        
		$this->usuarios_model->agregarusuario($data);
		redirect('usuarios/index','refresh');
    }

    public function eliminarbd_us()
	{
		$idus=$_POST['idusuario'];
		$this->usuarios_model->eliminarusuario($idus);
		redirect('tienda/usuarios','refresh');
	}

    public function deshabilitarbd_us()
	{
		$idusuario=$_POST['idusuario'];
		$data['habilitado_us']='0';

		$this->usuarios_model->modificarusuario($idusuario,$data);
		redirect('tienda/usuarios','refresh');
	}

    public function deshabilitados_us()
    {
        $planilla=$this->usuarios_model->planilladeshabilitados();
        //usuarios esta en el foreach de la planilla
        $data['logeados']=$planilla;
        $this->load->view('vistas_personal/inc_personal/head_personal');
        $this->load->view('vistas_personal/inc_personal/menu_personal');
        $this->load->view('vistas_usuarios/planilla_deshabilitados_us', $data);
        $this->load->view('vistas_personal/inc_personal/footer_personal');
        $this->load->view('vistas_personal/inc_personal/pie_personal');
    }

    public function habilitarbd_us()
	{
		$idusuario=$_POST['idusuario'];
		$data['habilitado_us']='1';

		$this->usuarios_model->modificarusuario($idusuario,$data);
		redirect('usuarios/deshabilitados_us','refresh');
	}

	
}


