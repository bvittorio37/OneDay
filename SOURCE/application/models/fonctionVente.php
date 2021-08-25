<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
class fonctionVente extends CI_Model
{
   



   
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
    
    