<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class eendiep extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
                        $this->load->model('Darwin','',TRUE);
		}
		
		function index()
		{
			$data['links'] ="<li><a href='homepage'>home</a></li>";
                        $data['links'] .="<li><a href='museum'>museum</a></li>";
                        $data['links'] .= "<li><a href='contact'>contact</a></li>";
                         $data['table'] = $this->artefact_table();
			
			
			$this->load->view('eendiep_view', $data);
		}
                function artefact_table()
		{
			$result = $this->Darwin->all_artefacttwee();
			
			if($result)
			{
				$table = "";
				foreach($result as $row)
				{
					$table .= "<tr>
						<td>".$row->naam."</td>
						<td>".$row->omschrijfing."</td>
					        <td><img src='../assets/images/artefacten/".$row->afbeelding."' alt='edit'id='afbeelding' /></td>
					</tr>";
				}
				return $table;
			}
			else
			{
				return "table error please teport this in the faq as soon as posible";
			}
		}
	}
?>