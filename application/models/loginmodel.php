<?php 

class LoginModel extends CI_Model{
	
	public function login_valid($username, $password)
	{
		//$password = md5($password);
		$q = $this->db->where(['uname'=>$username,'pword'=>$password])
						->get('users');

		if($q->num_rows())
		{
			return $q->row()->id;
		}else{
			return FALSE;
		}
		
	}

}


?>