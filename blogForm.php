<?php

$errCheck=0;
$nameerr=$texterr=$titleerr='';

if($_SERVER['REQUEST_METHOD']=='POST'){

	$username = sanitize($_POST['user']);
	$title = sanitize($_POST['title']);
	$text = sanitize($_POST['texts']);

	if(empty($username)){
		$errCheck=1;
		$nameerr="Introduceti numele!";
	}
	if(strlen($username)<5 || strlen($username)>40){
		$errCheck=1;
		$nameerr="Numele trebuie sa contina intre 5 si 40 de caractere!";
	}
	if(userExist($username,$conn)){
		$errCheck=1;
		$nameerr="Numele este deja folosit!";
	}
	if(!preg_match("/^[a-zA-Z0-9 ]+$/", $username)){
		$errCheck=1;
		$nameerr="Numele trebuie sa contina doar litere si numere!";
	}

	if(empty($title)){
		$errCheck=1;
		$nameerr="Introduceti titlul!";
	}
	if(strlen($title)<10 || strlen($title)>40){
		$errCheck=1;
		$titleerr="Titlul trebuie sa contina intre 10 si 40 de caractere!";
	}
	if(!preg_match("/^[a-zA-Z0-9 ]+$/", $title)){
		$errCheck=1;
		$titleerr="Numele trebuie sa contina doar litere si numere!";
	}

	if(empty($text)){
		$errCheck=1;
		$texterr="Introduceti textul!";
	}
	if(strlen($text)<15 || strlen($text)>1001){
		$errCheck=1;
		$texterr="Textu trebuie sa aiba intre 15 si 1001 de caractere!";
	}

	if($errCheck==0){
		$query="INSERT INTO socio (user,title,texts) VALUES ('$username','$title','$text')";
		$conn->query($query);
	}

}

function sanitize($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function userExist($name,$conn) {

    $query="SELECT * FROM socio WHERE user='$name'";

    $result=$conn->query($query);

    if($result->num_rows==0)return 0;
    else return 1;
}

?>