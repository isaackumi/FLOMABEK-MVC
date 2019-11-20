<?php
//Will have to include else statements to process the requests if the database cannot be connected to
//include the database class
require('../settings/db_class.php');


/**
 * @author Kwabena Aboagye-Otchere
 */
class personClass extends db_connection
{
	
	//properties
	public $userID = null;
	public $useremail = null;

	//method for register
	public function register($a, $b, $c, $d){
		//encrypt the password
		$c = md5(c);
		//write the query
		$sql = "INSERT INTO CUSTOMER(EMAIL, PHONE_NUMBER, USER_PASSWORD, ADDRESS) VALUES('$a', '$b', '$c', '$d')";

		//run the query
		return $this->db_query($sql);
	}

	//method for login
	public function login($a, $b){
		$b = md5($b);
		$sql = "SELECT * FROM CUSTOMER WHERE EMAIL = '$a' && USER_PASSWORD = '$b'";
		if($this->db_query($sql)){
			return $this->db_fetch();
		}

	}

	//method for select item. This is for when the person first picks an item based on just their label. General item selection
	public function selectItem($input){
		$sql = "SELECT * FROM TECH WHERE LABEL = '$input'";
		if($this->db_query($sql)){
			return $this->db_fetch();
		}
	}

	//method for selecting phones. This is for when person has specified the specs they want
	public function selectPhone($label, $color, $internalStorage, $dualsim){
		$sql = "SELECT COST, SERIALNO FROM TECH INNER JOIN PHONES WHERE LABEL = '$label' && COLOUR = '$color' && INTERNAL_STORAGE = '$internalStorage' && DUALSIM = '$dualsim'";
		if($this->db_query($sql)){
			return $this->db_fetch();
		}
	}

	//method for selecting laptops. This is for when person has specified the specs they want
	public function selectLaptop($label, $color, $internalStorage, $screenSize){
		$sql = "SELECT COST, SERIALNO FROM TECH INNER JOIN LAPTOPS WHERE LABEL = '$label' && COLOUR = '$color' && INTERNAL_STORAGE = '$internalStorage' && SCREEN_SIZE = '$screenSize' && AVAILABLE = TRUE";
		if($this->db_query($sql)){
			return $this->db_fetch();
		}
	}

	//method for selecting accessories. This is for when person has specified the specs they want
	public function selectAccessory($label, $color){
		$sql = "SELECT COST, SERIALNO FROM TECH WHERE LABEL = '$label' && COLOUR = '$color'&& AVAILABLE = TRUE";
		if($this->db_query($sql)){
			return $this->db_fetch();
		}
	}

	//Method to purchase item
	public function purchase($serial, $user){
		$sql = "UPDATE TECH SET AVAILABLE=FALSE WHERE SERIALNO = '$serial' && AVAILABLE = TRUE; INSERT INTO ORDERS(USERID, ITEM) VALUES ('$user', '$serial')";

		return $this->db_query($sql);

	}
}

?>