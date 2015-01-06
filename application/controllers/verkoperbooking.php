<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class verkoperbooking extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('verkoper_model','',TRUE);
		}

		function index()
		{
			
                        redirect('home', 'refresh');
		}

		function thank()
		{
			$data['title'] = 'Thanks';
			
			$this->load->view('thank_you', $data);
			
		}

		function sell()
		{
			$this->load->helper(array('form'));
			$this->load->view('verkoper_view');
		}

		function calc_age()
		{
			$now = new DateTime();
			$birthday = new DateTime($this->input->post('geboortedatum'));
			$age = $now->diff($birthday);
			return $age;
		}

		function calc_price()
		{

			$age = $this->calc_age();
			$price = "gratis";
			if ($age->y >= 12) {
				$price = 2.50;
			}
			if ($age->y >= 18) {
				$price = 4.00;
			}
			if ($age->y >= 60) {
				$price = 2.50;
			}
			return $price;
		}

		function payment()
		{
			$age = $this->calc_age();
			$price = $this->calc_price();
			//$data['user'] = $this->ticket_model->get_user($id);
			$this->load->library('form_validation');
			// field name, error message, validation rules
			$this->form_validation->set_rules('geboortedatum', 'Geboortedatum', 'required');
			

			if ($this->form_validation->run() == FALSE) {
				echo "Failed";
				$this->sell();
			} else {
				$data = array(
					'age' => $age,
					'geboortedatum' => $this->input->post('geboortedatum'),
					'price' => $price
				);
				$this->session->set_userdata("ticket_data", $data);
				
				$this->load->view('payment_view', $data);
				
			}

		}

		function get_pdf($geboortedatum)
		{
			$this->load->library('mpdf');
			//get data from the model
			$data['query'] = $this->verkoper_model->get_ticket_data();
                        $data['geboortedatum'] = $geboortedatum;
                       
			$mpdf = new mPDF('c', 'A4', '', '', 32, 25, 27, 25, 16, 13);
			$mpdf->SetDisplayMode('fullpage');
			//whether to indent the first level of a list
			$mpdf->list_indent_first_level = 0; // 1 or 0 -
			//load view for the pdf
			$html = $this->load->view('ticket2_view', $data, TRUE);
			$mpdf->WriteHTML($html);
			$mpdf->Output('ticket.pdf', 'D');
		}

		function add_ticket()
		{
		
			$this->verkoper_model->add_ticket();
                        $geboortedatum = $this->session->userdata["ticket_data"]["geboortedatum"];
			$this->get_pdf($geboortedatum);
                        
			if (isset($_SESSION['most_recent_activity']) &&
				(time() - $_SESSION['most_recent_activity'] > 600)
			) {

				//600 seconds = 10 minutes
				$this->session->unset_userdata('ticket_data');

			}
			$_SESSION['most_recent_activity'] = time(); // the start of the session.
		}
	}
?>