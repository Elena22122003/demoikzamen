<?php
	include "check_admin.php";
	include "../connect.php";

	$connect->query("DELETE FROM `categories` WHERE `category`=".$_POST["category"]);

	return header("Location:../admin?message=Категория удалена");

	//<?php
	//include "check_admin.php";
	//include "../connect.php";
	//$category=$_POST["category"];
	//$connect->query("DELETE FROM `categories` WHERE `category`= '$category'");

	//return header("Location:../admin.php?message=Категория удалена");