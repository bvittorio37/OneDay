<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class traitement extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('assets_helper');
		$this->load->model('fonctionProduit');
		$data = array();
		$data["get"]="connection.php";
		$data['rows']=$this->fonctionProduit->get_Produits();
		$this->load->view('index',$data);	
	}		

	

		
	public function redirection($page,$data)
	{
		$this->load->helper('assets_helper');
		$data["get"]=$page;
		$this->load->view('tempAdmin',$data);
		
	}

	
	
	public 	function traitementLogin()
	{
		$this->load->model('fonction');
		$this->load->model('fonctionProduit');
		$data = array();
		$user=$this->input->get("user");
		$mdp=sha1($this->input->get("mdp"));
		$data['rows']=$this->fonction->testlog($user,$mdp);
		$page="listeproduit.php";
		
		if($data['rows']==1)
		{
			//$this->session->set_userdata('idAdmin',$data['rows']);
			$data['rowsProduit']=$this->fonctionProduit->get_produits();
			$this->redirection($page,$data);
			
		}
		else
		redirect(site_url());
		
	}
	public function Logout(){
	
		$this->index();
	}

}
