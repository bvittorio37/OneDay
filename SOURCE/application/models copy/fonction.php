<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
class fonction extends CI_Model
{
    public function testlog($user,$mdp)
    {
    $query=$this->db->query('SELECT * from Admins');
    $row=$query->row_array() ;
    if($row['user']==$user && $row['mdp']==$mdp)
    {
        return $row['idAdmins'];
    }
    return 0;
    }

 

 


    
    

    
}