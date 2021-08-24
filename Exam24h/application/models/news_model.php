<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
class news_model extends CI_Model
{
    public function get_produits()
    {
    $query=$this->db->query('SELECT * from produit');
    $row=$query->result_array() ;
    return $row;
    }

    public function get_Caisse()
    {
    $query=$this->db->query('SELECT * from caisse');
    $row=$query->result_array() ;
    return $row;
    }

    public function get_Achat()
    {
    $query=$this->db->query('SELECT * from listeAchat');
    $row=$query->result_array() ;
    return $row;
    }

    
    public function get_Achat_Caisse($caisse)
    {
    $sql="SELECT * from listeAchat where idCaisse=".$caisse." ";
    $query=$this->db->query($sql);
    $row=$query->result_array() ;
    return $row;
    }

    function insertAchat($idCaisse,$idProduit,$Quantiter,$Montant)
	{
		$sql = "insert into Achat values (NULL,'%s','%s','%s','%s')";
		$sql=sprintf($sql,$idCaisse,$idProduit,$Quantiter,$Montant);
		$this->db->query($sql);
        echo $this->db->affected_rows();
	
	}

 


    public function get_Montant($idProduit,$Quantiter)
    {
    $sql="SELECT prixUnitaire from Produit where idProduits='%s' ";
    $sql=sprintf($sql,$idProduit);
    $query=$this->db->query($sql);
    $row=$query->row_array() ;
    return $row['prixUnitaire']*$Quantiter;
    }
    
    

    
}