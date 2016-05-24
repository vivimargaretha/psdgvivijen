<?
Class Loginview extends CI_Model
{

	public function login($username, $password)
	{
		 $sql = "select * from login where username = '" . $username . "' and password = '" .$password . "';
          $query = $this->db->query($sql);
          return $query->num_rows();

	}
	public function tambahoperator(){

	}
	public function deleteoperator(){

	}
	public function viewoperator(){

	}
	public function editoperator(){
		
	}
}

?>