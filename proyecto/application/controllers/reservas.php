<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Reservas extends CI_Controller {


    public function vista() {

        $lista=$this->reserva_model->listareservas();
		$data['lisreservas']=$lista;

        $this->load->view('vistas_personal/inc_personal/head_personal');
        $this->load->view('vistas_personal/inc_personal/menu_personal');
		$this->load->view('vistas_reservas/lista_reservas',$data);
        $this->load->view('vistas_personal/inc_personal/footer_personal');
        $this->load->view('vistas_personal/inc_personal/pie_personal');
       
    }

   
    public function agregar_res()
    {
        $this->load->view('vistas_personal/inc_personal/head_personal');
        $this->load->view('vistas_personal/inc_personal/menu_personal');
        $this->load->view('vistas_personal/reservaform_us');
        $this->load->view('vistas_personal/inc_personal/footer_personal');
        $this->load->view('vistas_personal/inc_personal/pie_personal');
    }
    
    public function agregarbd_res()
    {
		$data['descripcion_reservas']=$_POST['descripcion'];
		$data['observaciones_reservas']=$_POST['observaciones'];
		$data['fecha_reserva']=$_POST['fecha'];


		$lista=$this->reserva_model->agregarReserva($data);
		redirect('reservas/vista','refresh');

    }

    public function eliminarbd_res() 
    {
        $id_reserva=$_POST['id_reserva'];
		$this->reserva_model->eliminarReserva($id_reserva);
		redirect('reservas/vista','refresh');

    }

    public function modificar()
	{
		$idres=$_POST['id_reserva'];
		$data['inforeserva']=$this->reserva_model->obtener_reserva($idres);

		$this->load->view('vistas_personal/inc_personal/head_personal');
        $this->load->view('vistas_personal/inc_personal/menu_personal');
		$this->load->view('vistas_personal/modificar_reserva',$data);
		$this->load->view('vistas_personal/inc_personal/footer_personal');
        $this->load->view('vistas_personal/inc_personal/pie_personal');

	}

    public function modificarbd_res()
	{
        if ($this->input->post()) {
            
            $idres=$_POST['id_reserva'];
            $data['id_usuarios']=strtoupper($_POST['id_usuarios1']);
            $data['id_disfraz']=strtoupper($_POST['id_disfraz']);

            $this->Reserva_model->actualizar_reserva($idres, $data);
            redirect('reservas','refresh');
	    }   

        
    }

    public function listapdf()
	{
		
			$lista=$this->reservas_model->listareserva();
			$lista=$lista->result();

			$this->pdf=new Pdf();
			$this->pdf->AddPage();
			$this->pdf->AliasNbPages();
			$this->pdf->SetTitle("Reservas De Disfraces");
			$this->pdf->SetLeftMargin(15);
			$this->pdf->SetRightMargin(15);
			$this->pdf->SetFillColor(210,210,210);
			$this->pdf->SetFont('Arial','B',11);
			$this->pdf->Cell(30);
			$this->pdf->Cell(120,10,'LISTA DE RESERVAS',0,0,'C',1);

			$this->pdf->Ln(10);
			$this->pdf->SetFont('Arial','',9);
			$num=1;
			foreach ($lista as $row) {
				$id_usuario=$row->id_usuario;
				$id_disfraz=$row->id_disfraz;
				$cantidad_reserva=$row->cantidad_reserva;
				$descripcion=$row->descripcion_reserva;
				$this->pdf->Cell(7,5,$num,'TBLR',0,'L',0);
				$this->pdf->Cell(50,5,$usuario,'TBLR',0,'L',0);
				$this->pdf->Cell(30,5,$id_disfraz,'TBLR',0,'L',0);
				$this->pdf->Cell(30,5,$cantidad_reserva,'TBLR',0,'L',0);
				$this->pdf->Cell(10,5,$nota,'TBLR',0,'L',0);
				$this->pdf->Ln(5);
				$num++;
			}

			$this->pdf->Output("listareservas.pdf","I");
		    redirect('reservas/vistal','refresh');
		
	}
}