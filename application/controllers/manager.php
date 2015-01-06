<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Manager extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('manager_model','',TRUE);
		}
		
		//first page for the manager to see upon login
		function index()
		{
			redirect('home', 'refresh');
		}
		
		function get_visitors()
		{
			//get reservation data
			$data['reservations'] = $this->manager_model->get_visitors_data();
			//get all the creation dates
			$data['created_at'] = $this->manager_model->get_reservation_dates();
			//load the view
			$this->load->view('visitor_view', $data);
		}
		
		function show_visitors() {
			//get date that was just selected
			$data['visitors'] = $this->manager_model->get_given_date_ticket($_POST);
			//load the view with all the visitors
			$this->load->view("visitor_per_day", $data);
		}
		
		function get_day_data()
		{
			$data['reservations'] = $this->manager_model->get_given_date($_POST);
			$this->load->view("reservation_per_day_view", $data);

		}
		
		function get_reservations()
		{
			$data['reservations'] = $this->manager_model->get_reservation_data();
			$data['created_at'] = $this->manager_model->get_reservation_dates_only();
			$this->load->view('reservation', $data);
		}
		
		function weekoverview()
		{
			$this->load->view('weekoverview');
		}
	}
?>