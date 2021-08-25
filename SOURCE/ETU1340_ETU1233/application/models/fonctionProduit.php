<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
class fonctionProduit extends CI_Model
{
    public function get_produits()
    {
    $query=$this->db->query('SELECT * from produit');
    $row=$query->result_array() ;
    return $row;
    }

    public function get_Categorie()
    {
    $query=$this->db->query('SELECT * from categorie');
    $row=$query->result_array() ;
    return $row;
    }

    public function get_ProduitVendue()
    {
    $query=$this->db->query('select produit.nom_produit,categorie.categorie from Vente join produit on produit.idProduits=Vente.idProduits join categorie on categorie.idcategorie=produit.idcategorie order by quantite desc');
    $row=$query->result_array() ;
    return $row;
    }
    public function get_CaisseVendue()
    {
    $query=$this->db->query(' select sum(montant)as valeurApporte,Caisse.caisse from listevente join caisse  on caisse.idCaisse=listevente.idcaisse group by caisse.idcaisse ASC');
    $row=$query->result_array() ;
    return $row;
    }

    public function get_recent()
    {
    $query=$this->db->query(' select produit.nom_produit,montant,datedeVente from listevente join produit on produit.idproduits=listevente.idproduits order by datedevente asc');
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


    public function updateproduit($prix,$idproduit)
    {
        $sql=$this->db->query("UPDATE produit SET prixUnitaire=".$prix." WHERE  idProduits=".$idproduit."");
     
    }

   
    function insertProduit($nom,$idcategorie,$prix)
	{
        $image="upload.jpg";
		$sql = "insert into Produit values (NULL,'%s','%s','%s','%s')";
		$sql=sprintf($sql,$idcategorie,$nom,$prix,$image);
		$this->db->query($sql);
        echo $this->db->affected_rows();
	
	}

    
    function insertCategorie($nom)
	{
        $image="upload.jpg";
		$sql = "insert into Categorie values (NULL,'%s')";
		$sql=sprintf($sql,$nom);
		$this->db->query($sql);
        echo $this->db->affected_rows();
	
	}

    
    function insertPanier($nom)
	{
		$sql = "insert into Panier values (NULL,'%s','%s','%s')";
		$sql=sprintf($sql,$nom);
		$this->db->query($sql);
        echo $this->db->affected_rows();
	
	}

    
    public function deleteproduit($idproduit)
    {
        $sql=$this->db->query("DELETE from produit where idProduits=".$idproduit."");
     
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
    
    