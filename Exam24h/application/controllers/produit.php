<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class produit extends CI_Controller {

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
		$data["get"]="connection.php";
		$this->load->view('index',$data);	
	}		

	

		
	public function redirection($page,$data)
	{
		$this->load->helper('assets_helper');
		$data["get"]=$page;
		$this->load->view('tempAdmin',$data);
		
	}

    public function redirectionModif($page,$idproduit)
	{
		$this->load->helper('assets_helper');
        $data = array();
        $data["idproduit"]=$idproduit;
		$this->redirection($page,$data);
		
	}

    
    public function redirectionliste($page)
	{
        $this->load->model('fonctionProduit');
		$this->load->helper('assets_helper');
        $data = array();
        $data['rowsProduit']=$this->fonctionProduit->get_produits();
		$this->redirection($page,$data);
		
	}

	
	
	public 	function modifeProduit($idproduit,$page)
	{
		$this->load->model('fonctionProduit');
		$data = array();
		$prix=$this->input->get("prix");
        echo $prix;
        echo $idproduit;
		$this->fonctionProduit->updateproduit($prix,$idproduit);
        $data['rowsProduit']=$this->fonctionProduit->get_produits();
		$this->redirection($page,$data);
		
	}

    public 	function deleteProduit($idproduit,$page)
	{
		$this->load->model('fonctionProduit');
		$data = array();
		$prix=$this->input->get("prix");
        echo $idproduit;
		$this->fonctionProduit->deleteproduit($idproduit);
        $data['rowsProduit']=$this->fonctionProduit->get_produits();
		$this->redirection($page,$data);
		
	}
    public function redirectionAjout($page)
	{
        $this->load->model('fonctionProduit');
		$this->load->helper('assets_helper');
        $data = array();
        $data['rowsCategorie']=$this->fonctionProduit->get_Categorie();
		$this->redirection($page,$data);
		
	}

    public function redirectionAjoutC($page)
	{
        $this->load->model('fonctionProduit');
		$this->load->helper('assets_helper');
        $data = array();
		$this->redirection($page,$data);
		
	}
	
    public function redirectionState($page)
	{
        $this->load->model('fonctionProduit');
		$this->load->helper('assets_helper');
        $data = array();
        $data['rowsProduitB']=$this->fonctionProduit->get_ProduitVendue();
        $data['rowsCaisseB']=$this->fonctionProduit->get_CaisseVendue();
        $data['rowsRecentB']=$this->fonctionProduit->get_recent();
		$this->redirection($page,$data);
		
	}

    public function AjoutProduit($page)
	{
        $this->load->model('fonctionProduit');
		$this->load->helper('assets_helper');
        $nom=$this->input->get("nom");
        $idcategorie=$this->input->get("categorie");
        $prix=$this->input->get("prix");
        $data = array();
        $this->fonctionProduit->insertProduit($nom,$idcategorie,$prix);
        $data['rowsProduit']=$this->fonctionProduit->get_produits();
		$this->redirection($page,$data);
		
	}

    
    public function AjoutCategorie($page)
	{
        $this->load->model('fonctionProduit');
		$this->load->helper('assets_helper');
        $nom=$this->input->get("nom");
        $data = array();
        $this->fonctionProduit->insertCategorie($nom);
        $data['rowsProduit']=$this->fonctionProduit->get_produits();
		$this->redirection($page,$data);
		
	}
	

}
