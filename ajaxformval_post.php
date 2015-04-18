<?php
/*
	I William Taylor-Holubeshen, 000305063 certify that this material is my original work. No other person's work has been used without due acknowledgement. I have not made my work available to anyone else.
*/
class ajaxForm {
	
	public $successFlag;//is a boolean that represents the successful validation of the form data.
	public $postVarErrorMsgs;//is an associative array of error messages for each input.
	public $postFailedIds;//is an array of the failed input's error message id values.
	public $hdrMessage;//is a string that is used in the main error header.
	public $post;//is a copy of the $_POST variables
	
	function __construct(){
		$this->init();
		$this->validate();
		$this->sanitize();
	}
	
	private function init(){
		$this->successFlag = true;
		$this->hdrMessage = "An error occurred. See the message below.";
		$this->postFailedIds = array();
		$this->postVarErrorMsgs = array(
			"#unameMsg"=>"Please enter your name.",
			"#emailMsg"=>"An email address is required.",
			"#fnameMsg"=>"We very much require your first name.",
			"#lnameMsg"=>"Your last name must be entered too.",
			"#petsMsg"=>"Please select atleast one option.",
			"#schoolsMsg"=>"Please select atleast one option."
		);
		$this->post = $_POST;
	}
	
	private function validate(){
		if(isset($_POST['uname']) === true && $_POST['uname'] == ""){$this->successFlag = false; $this->postFailedIds[] = "#unameMsg";}
		if(isset($_POST['email']) === true && $_POST['email'] == ""){$this->successFlag = false; $this->postFailedIds[] = "#emailMsg";}

		if($_POST['page'] == "1"){
			if(isset($_POST['fname']) === true && $_POST['fname'] == ""){$this->successFlag = false; $this->postFailedIds[] = "#fnameMsg";}
			if(isset($_POST['lname']) === true && $_POST['lname'] == ""){$this->successFlag = false; $this->postFailedIds[] = "#lnameMsg";}
		}
		else{
			$pets = 0;
			if(isset($_POST['dog']) === true && $_POST['dog'] == "on"){$pets++;}
			if(isset($_POST['cat']) === true && $_POST['cat'] == "on"){$pets++;}
			if(isset($_POST['bird']) === true && $_POST['bird'] == "on"){$pets++;}
			if($pets == 0){$this->successFlag = false; $this->postFailedIds[] = "#petsMsg";}
			if(isset($_POST['schools']) === true && $_POST['schools'] == ""){$this->successFlag = false; $this->postFailedIds[] = "#schoolsMsg";}
		}
		
		if($this->successFlag){$this->hdrMessage = "Thank you for your submission.";}
	}
	
	private function sanitize(){
		foreach($this->post as &$input){
			$input = htmlentities(strip_tags($input));
		}
	}
}

//institate the ajaxform object
$form = new ajaxForm();

//display the object as json
echo json_encode($form);
	
?>