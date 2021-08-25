<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
class fonctionProduit extends CI_Model
{
    public function get_produits()
    {
    $query=$this->db->query('SELECT * from produit');
    $row=$query->result_array() ;
    return $row;
    }

    public function get_produits_categorie($idcategorie)
    {
        $query=$this->db->query("SELECT * from produit where idCategorie=".$idcategorie."  ");
        $query=sprintf($query,$idcategorie);
        $row=$query->result_array() ;
        return $row;
    }

    public function get_Caisse()
    {
    $query=$this->db->query('SELECT * from caisse');
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

    function insertVente($idCaisse,$idProduit,$Quantiter)
	{
		$sql = "insert into Vente values (NULL,'%s','%s','%s','%s',NOW())";
		$sql=sprintf($sql,$idProduit,$idCaisse,$Quantiter);
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
    
    