<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
class fonctionAchat extends CI_Model
{
    


    
    public function get_Achat_Caisse($caisse)
    {
    $sql="SELECT * from listeAchat where idCaisse=".$caisse." ";
    $query=$this->db->query($sql);
    $row=$query->result_array() ;
    return $row;
    }

  
}
    
    