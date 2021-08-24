<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Caisse extends CI_Controller {

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
		$this->load->model('news_model');
		$data = array();
		$data['rows']=$this->news_model->get_Caisse();
		$data["get"]="choix.php";
		$this->load->view('index',$data);	
	}		

	

		
	public function redirection($page,$data)
	{
		$this->load->helper('assets_helper');
		$data["get"]=$page;
		$this->load->view('index',$data);
		
	}
	public 	function saisieAchat($page)
	{
		$idCaisse=1;
		$this->load->model('news_model');
		$data = array();
		$data['rows']=$this->news_model->get_produits();
		$data['rowsAchat']=$this->news_model->get_Achat_Caisse($idCaisse);
		$this->redirection($page,$data);
	}

	public 	function Achat($page)
	{
		$this->load->model('news_model');
		$data = array();
		$idCaisse=1;
		$idProduit=$this->input->get("produit");
		$Quantiter=$this->input->get("quantite");
		$data['rows']=$this->news_model->get_produits();
		$data['rowsAchat']=$this->news_model->get_Achat_Caisse($idCaisse);
		$Montant=$this->news_model->get_Montant($idProduit,$Quantiter);
		$this->news_model->insertAchat($idCaisse,$idProduit,$Quantiter,$Montant);
		$this->redirection($page,$data);
	}


}
