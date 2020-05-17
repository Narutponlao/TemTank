<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "TemTank";
$id= $_POST['idemp'];
$name = $_POST['name'];
$address=$_POST['Address'];
$phone = $_POST['Phone'];
$age = $_POST['age'];
$startw = $_POST['startwork'];
$offwork = $_POST['getoffwork'];
$salary = $_POST['Salary'];
$phone = $_POST['Phone'];
$dssn = $_POST['Dssn'];
$CTname = $_POST['CTname'];
$Relation = $_POST['Relation'];
$CTPhone = $_POST['CTPhone'];

$check=false;
$error =false;
$insert1= "INSERT INTO `Employee` VALUES ('$id','$name','$age','$salary','$startw','$offwork','$address','$phone','$dssn')";
$insert2 = "INSERT INTO `Contactperson` VALUES ('$id','$CTname','$Relation','$CTPhone')";
$con = new mysqli($servername,$username,$password,$dbname);

if($con->connect_error)
{
    die("Can't connect");

}
if(isset($id)&& $name &&$age &&$salary&&$startw&&$offwork&&$address&&$phone&&$dssn)
{
   if($con->query($insert1) && $con->query($insert2))
   {
       $check=true;
   }
   else{
       $error=true;
   }
}else{

}
   



?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Employee</title>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<style id="applicationStylesheet" type="text/css">
	.mediaViewInfo {
		--web-view-name: Add Employee;
		--web-view-id: Add_Employee;
		--web-scale-on-resize: true;
		--web-enable-deep-linking: true;
	}
	:root {
		--web-view-ids: Add_Employee;
	}
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		border: none;
	}
	#Add_Employee {
		position: absolute;
		width: 1920px;
		height: 2256px;
		background-color: rgba(248,250,253,1);
		overflow: hidden;
		--web-view-name: Add Employee;
		--web-view-id: Add_Employee;
		--web-scale-on-resize: true;
		--web-enable-deep-linking: true;
	}
	
	#Group_10 {
		position: absolute;
		width: 368px;
		height: 1080px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	.Rectangle_5 {
		position: absolute;
		overflow: visible;
		width: 368px;
		height: 1080px;
		left: 0px;
		top: 0px;
	}
	#Group_3 {
		position: absolute;
		width: 189px;
		height: 37px;
		left: 35px;
		top: 47px;
		overflow: visible;
	}
	#database {
		position: absolute;
		left: 49px;
		top: 2px;
		overflow: visible;
		width: 141px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -10.5px;
		text-align: center;
		font-family: Helvetica;
		font-style: normal;
		font-weight: bold;
		font-size: 29px;
		color: rgba(255,255,255,1);
		letter-spacing: 0.5px;
	}
	#database_z {
		position: absolute;
		width: 36px;
		height: 36px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	.Rectangle_6 {
		position: absolute;
		overflow: visible;
		width: 31px;
		height: 5px;
		left: 303px;
		top: 53px;
	}
	.Rectangle_6_ {
		position: absolute;
		overflow: visible;
		width: 31px;
		height: 5px;
		left: 303px;
		top: 63px;
	}
	.Rectangle_6_ba {
		position: absolute;
		overflow: visible;
		width: 31px;
		height: 5px;
		left: 303px;
		top: 73px;
	}
	#Group_8 {
		position: absolute;
		width: 188px;
		height: 50px;
		left: 1661px;
		top: 45px;
		overflow: visible;
	}
	#Group_7 {
		position: absolute;
		width: 129px;
		height: 50px;
		left: 59px;
		top: 0px;
		overflow: visible;
	}
	#Alisha_Bridges {
		position: absolute;
		left: 1px;
		top: 0px;
		overflow: visible;
		width: 129px;
		white-space: nowrap;
		line-height: 34px;
		margin-top: -8px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: bold;
		font-size: 18px;
		color: rgba(39,39,39,1);
	}
	#Manager {
		position: absolute;
		left: 0px;
		top: 26px;
		overflow: visible;
		width: 65px;
		white-space: nowrap;
		line-height: 45px;
		margin-top: -15px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: lighter;
		font-size: 15px;
		color: rgba(39,39,39,1);
	}
	#Ellipse_1 {
		position: absolute;
		width: 42px;
		height: 42px;
		left: 0px;
		top: 4px;
		overflow: visible;
	}
	#Rectangle_11 {
		opacity: 0.55;
	}
	.Rectangle_11 {
		position: absolute;
		overflow: visible;
		width: 368px;
		height: 72px;
		left: 0px;
		top: 320px;
	}
	.Rectangle_9 {
		position: absolute;
		overflow: visible;
		width: 330px;
		height: 46px;
		left: 436px;
		top: 47px;
	}
	.Rectangle_10 {
		position: absolute;
		overflow: visible;
		width: 1413px;
		height: 2035px;
		left: 436px;
		top: 142px;
	}
	#MAIN_MENU {
		position: absolute;
		left: 35px;
		top: 174px;
		overflow: visible;
		width: 97px;
		white-space: nowrap;
		line-height: 45px;
		margin-top: -15px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: bold;
		font-size: 15px;
		color: rgba(215,215,255,1);
		letter-spacing: 0.5px;
	}
	#Group_16 {
		position: absolute;
		width: 114px;
		height: 38px;
		left: 35px;
		top: 248px;
		overflow: visible;
		--web-animation: fadein undefineds undefined;
		--web-action-type: page;
		--web-action-target: Homepage.html;
		cursor: pointer;
	}
	#Home {
		position: absolute;
		left: 54px;
		top: 2px;
		overflow: visible;
		width: 61px;
		white-space: nowrap;
		line-height: 45px;
		margin-top: -12.5px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: bold;
		font-size: 20px;
		color: rgba(255,255,255,1);
		letter-spacing: 0.5px;
	}
	#home_run {
		position: absolute;
		width: 30px;
		height: 30px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_17 {
		position: absolute;
		width: 160px;
		height: 38px;
		left: 35px;
		top: 337px;
		overflow: visible;
		--web-animation: fadein undefineds undefined;
		--web-action-type: page;
		--web-action-target: Employee.html;
		cursor: pointer;
	}
	#Employee {
		position: absolute;
		left: 54px;
		top: 2px;
		overflow: visible;
		width: 107px;
		white-space: nowrap;
		line-height: 45px;
		margin-top: -12.5px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: bold;
		font-size: 20px;
		color: rgba(255,255,255,1);
		letter-spacing: 0.5px;
	}
	#home_run_bh {
		position: absolute;
		width: 33px;
		height: 33px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_11 {
		position: absolute;
		width: 144px;
		height: 36px;
		left: 35px;
		top: 428px;
		overflow: visible;
		--web-animation: fadein undefineds undefined;
		--web-action-type: page;
		--web-action-target: Product.html;
		cursor: pointer;
	}
	#Product {
		position: absolute;
		left: 59px;
		top: 0px;
		overflow: visible;
		width: 86px;
		white-space: nowrap;
		line-height: 45px;
		margin-top: -12.5px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: bold;
		font-size: 20px;
		color: rgba(255,255,255,1);
		letter-spacing: 0.5px;
	}
	#home_run_bk {
		position: absolute;
		width: 34px;
		height: 34px;
		left: 0px;
		top: 1px;
		overflow: visible;
	}
	#Group_12 {
		position: absolute;
		width: 147px;
		height: 38px;
		left: 35px;
		top: 515px;
		overflow: visible;
		--web-animation: fadein undefineds undefined;
		--web-action-type: page;
		--web-action-target: Product.html;
		cursor: pointer;
	}
	#Material {
		position: absolute;
		left: 59px;
		top: 2px;
		overflow: visible;
		width: 89px;
		white-space: nowrap;
		line-height: 45px;
		margin-top: -12.5px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: bold;
		font-size: 20px;
		color: rgba(255,255,255,1);
		letter-spacing: 0.5px;
	}
	#home_run_bn {
		position: absolute;
		width: 35px;
		height: 35px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_13 {
		position: absolute;
		width: 161px;
		height: 36px;
		left: 35px;
		top: 606px;
		overflow: visible;
		--web-animation: fadein 0.3s ease-out;
		--web-action-type: page;
		--web-action-target: Customer.html;
		cursor: pointer;
	}
	#Customer {
		position: absolute;
		left: 59px;
		top: 0px;
		overflow: visible;
		width: 103px;
		white-space: nowrap;
		line-height: 45px;
		margin-top: -12.5px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: bold;
		font-size: 20px;
		color: rgba(255,255,255,1);
		letter-spacing: 0.5px;
	}
	#home_run_bq {
		position: absolute;
		width: 31px;
		height: 31px;
		left: 0px;
		top: 3px;
		overflow: visible;
	}
	#Group_14 {
		position: absolute;
		width: 137px;
		height: 36px;
		left: 35px;
		top: 695px;
		overflow: visible;
	}
	
	#home_run_bt {
		position: absolute;
		width: 33px;
		height: 33px;
		left: 0px;
		top: 2px;
		overflow: visible;
	}
	#Group_15 {
		position: absolute;
		width: 131px;
		height: 36px;
		left: 39px;
		top: 991px;
		overflow: visible;
		--web-animation: fadein 0.3s ease-out;
		--web-action-type: page;
		--web-action-target: Login.html;
		cursor: pointer;
	}
	#Logout {
		position: absolute;
		left: 55px;
		top: -280px;
		overflow: visible;
		width: 77px;
		white-space: nowrap;
		line-height: 45px;
		margin-top: -12.5px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: bold;
		font-size: 20px;
		color: rgba(255,255,255,1);
		letter-spacing: 0.5px;
	}
	#home_run_bw {
		position: absolute;
		width: 30px;
		height: 30px;
		left: 0px;
		top: -277px;
		overflow: visible;
	}
	#Search {
		position: absolute;
		left: 498px;
		top: 54px;
		overflow: visible;
		width: 67px;
		white-space: nowrap;
		line-height: 45px;
		margin-top: -12.5px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: lighter;
		font-size: 20px;
		color: rgba(197,197,197,1);
		letter-spacing: 0.2px;
	}
	#search {
		position: absolute;
		width: 22px;
		height: 22px;
		left: 459px;
		top: 59px;
		overflow: visible;
	}
	#Group_59 {
		position: absolute;
		width: 1165px;
		height: 1856px;
		left: 560px;
		top: 220px;
		overflow: visible;
	}
	#Add_New_Employee {
		position: absolute;
		left: 0px;
		top: 0px;
		overflow: visible;
		width: 460px;
		white-space: nowrap;
		line-height: 77px;
		margin-top: -14.5px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: bold;
		font-size: 48px;
		color: rgba(74,84,190,1);
	}
	#Group_54 {
		position: absolute;
		width: 470.074px;
		height: 644.744px;
		left: 0.783px;
		top: 146px;
		overflow: visible;
	}
	#Group_32 {
		position: absolute;
		width: 468.507px;
		height: 89.804px;
		left: 0px;
		top: 88px;
		overflow: visible;
	}
	#Name {
		position: absolute;
		left: 0.217px;
		top: 0px;
		overflow: visible;
		width: 57px;
		white-space: nowrap;
		line-height: 72px;
		margin-top: -26px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(139,139,139,1);
	}
	#Line_2 {
		opacity: 0.37;
	}
	.Line_2 {
		overflow: visible;
		position: absolute;
		width: 468.507px;
		height: 0.5px;
		left: 0px;
		top: 89.803px;
		transform: matrix(1,0,0,1,0,0);
	}
	
	#Personal_information {
		position: absolute;
		left: 0.217px;
		top: 0px;
		overflow: visible;
		width: 326px;
		white-space: nowrap;
		line-height: 75px;
		margin-top: -22.5px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: bold;
		font-size: 30px;
		color: rgba(223,223,223,1);
		letter-spacing: 0.2px;
	}
	#Group_35 {
		position: absolute;
		width: 470.074px;
		height: 90.361px;
		left: 0px;
		top: 241px;
		overflow: visible;
	}
	#Surname {
		position: absolute;
		left: 0.217px;
		top: 0px;
		overflow: visible;
		width: 87px;
		white-space: nowrap;
		line-height: 72px;
		margin-top: -26px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(139,139,139,1);
	}
	#Line_2_b {
		opacity: 0.37;
	}
	.Line_2_b {
		overflow: visible;
		position: absolute;
		width: 470.074px;
		height: 0.5px;
		left: 0px;
		top: 90.361px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Daugherty {
		position: absolute;
		left: 0.217px;
		top: 40px;
		overflow: visible;
		width: 142px;
		white-space: nowrap;
		line-height: 76px;
		margin-top: -24.5px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 27px;
		color: rgba(39,39,39,1);
	}
	#Group_43 {
		position: absolute;
		width: 468.507px;
		height: 89.919px;
		left: 1.567px;
		top: 395px;
		overflow: visible;
	}
	#down_arrow {
		position: absolute;
		width: 15px;
		height: 15px;
		left: 98.649px;
		top: 53px;
		overflow: visible;
	}
	#Group_42 {
		position: absolute;
		width: 468.507px;
		height: 89.919px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_36 {
		position: absolute;
		width: 123.786px;
		height: 89.919px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Year {
		position: absolute;
		left: 0.649px;
		top: 0px;
		overflow: visible;
		width: 44px;
		white-space: nowrap;
		line-height: 72px;
		margin-top: -26px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(139,139,139,1);
	}
	#Line_2_cg {
		opacity: 0.37;
	}
	.Line_2_cg {
		overflow: visible;
		position: absolute;
		width: 123.786px;
		height: 0.5px;
		left: 0px;
		top: 89.918px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID1990 {
		position: absolute;
		left: 0.649px;
		top: 39px;
		overflow: visible;
		width: 71px;
		white-space: nowrap;
		line-height: 76px;
		margin-top: -24.5px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 27px;
		color: rgba(39,39,39,1);
	}
	#Group_39 {
		position: absolute;
		width: 137.888px;
		height: 89.919px;
		left: 169.227px;
		top: 0px;
		overflow: visible;
	}
	#Group_37 {
		position: absolute;
		width: 137.888px;
		height: 89.919px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Month {
		position: absolute;
		left: 0.423px;
		top: 0px;
		overflow: visible;
		width: 65px;
		white-space: nowrap;
		line-height: 72px;
		margin-top: -26px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(139,139,139,1);
	}
	#Line_2_cl {
		opacity: 0.37;
	}
	.Line_2_cl {
		overflow: visible;
		position: absolute;
		width: 137.888px;
		height: 0.5px;
		left: 0px;
		top: 89.918px;
		transform: matrix(1,0,0,1,0,0);
	}
	#May {
		position: absolute;
		left: 0.423px;
		top: 39px;
		overflow: visible;
		width: 57px;
		white-space: nowrap;
		line-height: 76px;
		margin-top: -24.5px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 27px;
		color: rgba(39,39,39,1);
	}
	#down_arrow_cn {
		position: absolute;
		width: 16px;
		height: 16px;
		left: 108.423px;
		top: 53px;
		overflow: visible;
	}
	#Group_38 {
		position: absolute;
		width: 115.952px;
		height: 89.919px;
		left: 352.556px;
		top: 0px;
		overflow: visible;
	}
	#Day {
		position: absolute;
		left: 1.094px;
		top: 0px;
		overflow: visible;
		width: 40px;
		white-space: nowrap;
		line-height: 72px;
		margin-top: -26px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(139,139,139,1);
	}
	#Line_2_cq {
		opacity: 0.37;
	}
	.Line_2_cq {
		overflow: visible;
		position: absolute;
		width: 115.952px;
		height: 0.5px;
		left: 0px;
		top: 89.918px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID11 {
		position: absolute;
		left: 1.094px;
		top: 39px;
		overflow: visible;
		width: 36px;
		white-space: nowrap;
		line-height: 76px;
		margin-top: -24.5px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 27px;
		color: rgba(39,39,39,1);
	}
	#down_arrow_cs {
		position: absolute;
		width: 16px;
		height: 15px;
		left: 439.649px;
		top: 53px;
		overflow: visible;
	}
	#Group_41 {
		position: absolute;
		width: 470.074px;
		height: 89.744px;
		left: 0px;
		top: 555px;
		overflow: visible;
	}
	#Address {
		position: absolute;
		left: 0.217px;
		top: 0px;
		overflow: visible;
		width: 79px;
		white-space: nowrap;
		line-height: 72px;
		margin-top: -26px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(139,139,139,1);
	}
	#Line_2_cv {
		opacity: 0.37;
	}
	.Line_2_cv {
		overflow: visible;
		position: absolute;
		width: 470.074px;
		height: 0.5px;
		left: 0px;
		top: 89.744px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID35_Hilltop_St___Livonia__MI_ {
		position: absolute;
		left: 0.217px;
		top: 39px;
		overflow: visible;
		width: 422px;
		white-space: nowrap;
		line-height: 76px;
		margin-top: -24.5px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 27px;
		color: rgba(39,39,39,1);
	}
	#Group_56 {
		position: absolute;
		width: 470.857px;
		height: 484.919px;
		left: 694.143px;
		top: 146px;
		overflow: visible;
	}
	#Employee_information {
		position: absolute;
		left: 0.857px;
		top: -149px;
		overflow: visible;
		width: 344px;
		white-space: nowrap;
		line-height: 75px;
		margin-top: -22.5px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: bold;
		font-size: 30px;
		color: rgba(223,223,223,1);
		letter-spacing: 0.2px;
	}
	#Group_44 {
		position: absolute;
		width: 468.507px;
		height: 90.098px;
		left: 0px;
		top: 87.706px;
		overflow: visible;
	}
	#Employee_ID {
		position: absolute;
		left: 0.784px;
		top: 0px;
		overflow: visible;
		width: 123px;
		white-space: nowrap;
		line-height: 72px;
		margin-top: -26px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(139,139,139,1);
	}
	#Line_2_c {
		opacity: 0.37;
	}
	.Line_2_c {
		overflow: visible;
		position: absolute;
		width: 468.507px;
		height: 0.5px;
		left: 0px;
		top: 90.097px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID00011 {
		position: absolute;
		left: 0.784px;
		top: 39.173px;
		overflow: visible;
		width: 88px;
		white-space: nowrap;
		line-height: 76px;
		margin-top: -24.5px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 27px;
		color: rgba(39,39,39,1);
	}
	#Group_45 {
		position: absolute;
		width: 211.533px;
		height: 90.098px;
		left: 0px;
		top: 241.264px;
		overflow: visible;
	}
	#down_arrow_c {
		position: absolute;
		width: 15.669px;
		height: 15.669px;
		left: 177.845px;
		top: 56.409px;
		overflow: visible;
	}
	#Start_work {
		position: absolute;
		left: 0.784px;
		top: 0px;
		overflow: visible;
		width: 102px;
		white-space: nowrap;
		line-height: 72px;
		margin-top: -26px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(139,139,139,1);
	}
	#Line_2_da {
		opacity: 0.37;
	}
	.Line_2_da {
		overflow: visible;
		position: absolute;
		width: 211.533px;
		height: 0.5px;
		left: 0px;
		top: 90.097px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID8_00_am {
		position: absolute;
		left: 0.784px;
		top: 39.173px;
		overflow: visible;
		width: 108px;
		white-space: nowrap;
		line-height: 76px;
		margin-top: -24.5px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 27px;
		color: rgba(39,39,39,1);
	}
	#Group_47 {
		position: absolute;
		width: 470.074px;
		height: 90.098px;
		left: 0px;
		top: 394.821px;
		overflow: visible;
	}
	#Salary {
		position: absolute;
		left: 0.784px;
		top: 0px;
		overflow: visible;
		width: 62px;
		white-space: nowrap;
		line-height: 72px;
		margin-top: -26px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(139,139,139,1);
	}
	#Line_2_db {
		opacity: 0.37;
	}
	.Line_2_db {
		overflow: visible;
		position: absolute;
		width: 470.074px;
		height: 0.5px;
		left: 0px;
		top: 90.097px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID30000 {
		position: absolute;
		left: 0.784px;
		top: 39.173px;
		overflow: visible;
		width: 88px;
		white-space: nowrap;
		line-height: 76px;
		margin-top: -24.5px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 27px;
		color: rgba(39,39,39,1);
	}
	#Group_46 {
		position: absolute;
		width: 211.533px;
		height: 90.361px;
		left: 259.324px;
		top: 241px;
		overflow: visible;
	}
	#down_arrow_dd {
		position: absolute;
		width: 15px;
		height: 16px;
		left: 178.533px;
		top: 56px;
		overflow: visible;
	}
	#Get_off_work {
		position: absolute;
		left: 0.533px;
		top: 0px;
		overflow: visible;
		width: 121px;
		white-space: nowrap;
		line-height: 72px;
		margin-top: -26px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(139,139,139,1);
	}
	#Line_2_df {
		opacity: 0.37;
	}
	.Line_2_df {
		overflow: visible;
		position: absolute;
		width: 211.533px;
		height: 0.5px;
		left: 0px;
		top: 90.361px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID18_00_pm {
		position: absolute;
		left: 0.533px;
		top: 40px;
		overflow: visible;
		width: 127px;
		white-space: nowrap;
		line-height: 76px;
		margin-top: -24.5px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 27px;
		color: rgba(39,39,39,1);
	}
	#Group_55 {
		position: absolute;
		width: 471.641px;
		height: 703.767px;
		left: 0px;
		top: 872px;
		overflow: visible;
	}
	#Emergency_contact {
		position: absolute;
		left: 0px;
		top: 0px;
		overflow: visible;
		width: 297px;
		white-space: nowrap;
		line-height: 75px;
		margin-top: -22.5px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: bold;
		font-size: 30px;
		color: rgba(223,223,223,1);
		letter-spacing: 0.2px;
	}
	#Group_52 {
		position: absolute;
		width: 470.641px;
		height: 627.767px;
		left: 1px;
		top: 76px;
		overflow: visible;
	}
	#ID1_ {
		position: absolute;
		left: 0px;
		top: 0px;
		overflow: visible;
		width: 30px;
		white-space: nowrap;
		line-height: 75px;
		margin-top: -22.5px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: bold;
		font-size: 30px;
		color: rgba(74,84,190,1);
		letter-spacing: 0.2px;
	}
	#Group_48 {
		position: absolute;
		width: 468.507px;
		height: 90.098px;
		left: 0.567px;
		top: 76.998px;
		overflow: visible;
	}
	#Name_dm {
		position: absolute;
		left: 0.784px;
		top: 0px;
		overflow: visible;
		width: 57px;
		white-space: nowrap;
		line-height: 72px;
		margin-top: -26px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(139,139,139,1);
	}
	#Line_2_dn {
		opacity: 0.37;
	}
	.Line_2_dn {
		overflow: visible;
		position: absolute;
		width: 468.507px;
		height: 0.5px;
		left: 0px;
		top: 90.097px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Nichola_ {
		position: absolute;
		left: 0.784px;
		top: 39.173px;
		overflow: visible;
		width: 107px;
		white-space: nowrap;
		line-height: 76px;
		margin-top: -24.5px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 27px;
		color: rgba(39,39,39,1);
	}
	#Group_49 {
		position: absolute;
		width: 470.074px;
		height: 90.098px;
		left: 0.567px;
		top: 230.555px;
		overflow: visible;
	}
	#Surname_dq {
		position: absolute;
		left: 0.784px;
		top: 0px;
		overflow: visible;
		width: 87px;
		white-space: nowrap;
		line-height: 72px;
		margin-top: -26px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(139,139,139,1);
	}
	#Line_2_dr {
		opacity: 0.37;
	}
	.Line_2_dr {
		overflow: visible;
		position: absolute;
		width: 470.074px;
		height: 0.5px;
		left: 0px;
		top: 90.097px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Daugherty_ds {
		position: absolute;
		left: 0.784px;
		top: 39.173px;
		overflow: visible;
		width: 142px;
		white-space: nowrap;
		line-height: 76px;
		margin-top: -24.5px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 27px;
		color: rgba(39,39,39,1);
	}
	#Group_50 {
		position: absolute;
		width: 470.074px;
		height: 90.098px;
		left: 0.567px;
		top: 384.113px;
		overflow: visible;
	}
	#Relation {
		position: absolute;
		left: 0.784px;
		top: 0px;
		overflow: visible;
		width: 81px;
		white-space: nowrap;
		line-height: 72px;
		margin-top: -26px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(139,139,139,1);
	}
	#Line_2_dv {
		opacity: 0.37;
	}
	.Line_2_dv {
		overflow: visible;
		position: absolute;
		width: 470.074px;
		height: 0.5px;
		left: 0px;
		top: 90.097px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Mother {
		position: absolute;
		left: 0.784px;
		top: 39.173px;
		overflow: visible;
		width: 96px;
		white-space: nowrap;
		line-height: 76px;
		margin-top: -24.5px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 27px;
		color: rgba(39,39,39,1);
	}
	#Group_51 {
		position: absolute;
		width: 470.074px;
		height: 90.098px;
		left: 0.567px;
		top: 537.67px;
		overflow: visible;
	}
	#Phone {
		position: absolute;
		left: 0.784px;
		top: 0px;
		overflow: visible;
		width: 63px;
		white-space: nowrap;
		line-height: 72px;
		margin-top: -26px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(139,139,139,1);
	}
	#Line_2_dz {
		opacity: 0.37;
	}
	.Line_2_dz {
		overflow: visible;
		position: absolute;
		width: 470.074px;
		height: 0.5px;
		left: 0px;
		top: 90.097px;
		transform: matrix(1,0,0,1,0,0);
	}
	#_66_804553267 {
		position: absolute;
		left: 0.784px;
		top: 39.173px;
		overflow: visible;
		width: 218px;
		white-space: nowrap;
		line-height: 76px;
		margin-top: -24.5px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 27px;
		color: rgba(39,39,39,1);
	}
	#Group_53 {
		position: absolute;
		width: 470.074px;
		height: 627.767px;
		left: 694.143px;
		top: 948px;
		overflow: visible;
	}
	#ID2_ {
		position: absolute;
		left: 0.857px;
		top: 0px;
		overflow: visible;
		width: 30px;
		white-space: nowrap;
		line-height: 75px;
		margin-top: -22.5px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: bold;
		font-size: 30px;
		color: rgba(74,84,190,1);
		letter-spacing: 0.2px;
	}
	#Group_48_d {
		position: absolute;
		width: 468.507px;
		height: 90.098px;
		left: 0px;
		top: 76.997px;
		overflow: visible;
	}
	#Name_d {
		position: absolute;
		left: 0.784px;
		top: 0px;
		overflow: visible;
		width: 57px;
		white-space: nowrap;
		line-height: 72px;
		margin-top: -26px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(139,139,139,1);
	}
	#Line_2_d {
		opacity: 0.37;
	}
	.Line_2_d {
		overflow: visible;
		position: absolute;
		width: 468.507px;
		height: 0.5px;
		left: 0px;
		top: 90.097px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_49_d {
		position: absolute;
		width: 470.074px;
		height: 90.098px;
		left: 0px;
		top: 230.555px;
		overflow: visible;
	}
	#Surname_d {
		position: absolute;
		left: 0.784px;
		top: 0px;
		overflow: visible;
		width: 87px;
		white-space: nowrap;
		line-height: 72px;
		margin-top: -26px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(139,139,139,1);
	}
	#Line_2_ea {
		opacity: 0.37;
	}
	.Line_2_ea {
		overflow: visible;
		position: absolute;
		width: 470.074px;
		height: 0.5px;
		left: 0px;
		top: 90.097px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_50_d {
		position: absolute;
		width: 470.074px;
		height: 90.098px;
		left: 0px;
		top: 384.112px;
		overflow: visible;
	}
	#Relation_ea {
		position: absolute;
		left: 0.784px;
		top: 0px;
		overflow: visible;
		width: 81px;
		white-space: nowrap;
		line-height: 72px;
		margin-top: -26px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(139,139,139,1);
	}
	#Line_2_eb {
		opacity: 0.37;
	}
	.Line_2_eb {
		overflow: visible;
		position: absolute;
		width: 470.074px;
		height: 0.5px;
		left: 0px;
		top: 90.097px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_51_ec {
		position: absolute;
		width: 470.074px;
		height: 90.098px;
		left: 0px;
		top: 537.67px;
		overflow: visible;
	}
	#Phone_ed {
		position: absolute;
		left: 0.784px;
		top: 0px;
		overflow: visible;
		width: 63px;
		white-space: nowrap;
		line-height: 72px;
		margin-top: -26px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(139,139,139,1);
	}
	#Line_2_ee {
		opacity: 0.37;
	}
	.Line_2_ee {
		overflow: visible;
		position: absolute;
		width: 470.074px;
		height: 0.5px;
		left: 0px;
		top: 90.097px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_29 {
		position: absolute;
		width: 36px;
		height: 36px;
		left: 0px;
		top: 1656px;
		overflow: visible;
	}
	.Ellipse_3 {
		filter: drop-shadow(0px 2px 5px rgba(0, 0, 0, 0.102));
		position: absolute;
		overflow: visible;
		width: 51px;
		height: 51px;
		left: 0px;
		top: 0px;
	}
	.Rectangle_13 {
		position: absolute;
		overflow: visible;
		width: 1px;
		height: 17px;
		left: 18px;
		top: 10px;
	}
	.Rectangle_14 {
		width: 2px;
		height: 16px;
		position: absolute;
		overflow: visible;
		transform: translate(0px, 0.433px) matrix(1,0,0,1,17,10.5674) rotate(-90deg);
		transform-origin: center;
	}
	#Add_more_Emergency_contact_ {
		position: absolute;
		left: 58px;
		top: 1659px;
		overflow: visible;
		width: 251px;
		white-space: nowrap;
		line-height: 71px;
		margin-top: -27px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		color: rgba(39,39,39,1);
	}
	#Group_57 {
		position: absolute;
		width: 218px;
		height: 60px;
		left: 947px;
		top: 1796px;
		overflow: visible;
		cursor: pointer;
		--web-animation: ;
		--web-action-type: page;
		--web-action-target: popup_add_employee.html;
	}
	.Rectangle_4 {
		position: absolute;
		overflow: visible;
		width: 218px;
		height: 60px;
		left: 0px;
		top: 0px;
	}
	#SAVE {
		position: absolute;
		left: 75px;
		top: 9px;
		overflow: visible;
		width: 69px;
		white-space: nowrap;
		line-height: 75px;
		margin-top: -25.5px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: bold;
		font-size: 24px;
		color: rgba(255,255,255,1);
		letter-spacing: 1px;
	}
	#Group_58 {
		position: absolute;
		width: 217px;
		height: 60px;
		left: 650px;
		top: 1796px;
		overflow: visible;
		--web-animation: fadein undefineds undefined;
		--web-action-type: page;
		--web-action-target: Employee.html;
		cursor: pointer;
	}
	.Rectangle_4_eo {
		position: absolute;
		overflow: visible;
		width: 217px;
		height: 60px;
		left: 0px;
		top: 0px;
	}
	#CANCEL {
		position: absolute;
		left: 55px;
		top: 9px;
		overflow: visible;
		width: 109px;
		white-space: nowrap;
		line-height: 75px;
		margin-top: -25.5px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: bold;
		font-size: 24px;
		color: rgba(74,84,190,1);
		letter-spacing: 1px;
	}
	.formemp{
		position: absolute;
		left: 570px;
		top: 450px;
	}
	label
	{
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(139,139,139,1);
	}

	.formemp #Employeeid{
		position: absolute;
		left: 690px;
		top:-10px;
		white-space: nowrap;
	}
	input[type=text]
	{
		width: 400px;
		height: 50px;
		border-bottom: 1px solid rgba(139,139,139,1);
		font-size: 27px;
		font-family: Sukhumvit Set;
		padding-left:16px;
	}
	 #idemp
	{
		position: absolute;
		left:690px;
		
		
	}
		#name
	{
		position: absolute;
		
	}
	#agetext{
		position: absolute;
		top:160px;

	}
	#startworktext{
		position: absolute;
		left:695px;
		top:160px;
		white-space: nowrap;
	}
	#getoffworktext{
		position: absolute;
		left:910px;
		top:160px;
		white-space: nowrap;
	}
	#startwork{
		width: 150px;
		position: absolute;
		left:695px;
		top:200px;
	
	}
	#getoffwork{
		width: 150px;
		position: absolute;
		left:910px;
		top:200px;
	}
	#age{
		position: absolute;
		top:200px;
	
	}
	#Addresstext{
		position: absolute;
		top:330px;
	}
	#Salarytext{
		position: absolute;
		top:330px;
		left:695px;
	}
	#Salary{
		position: absolute;
		top:390px;
		left:695px;
		width: 400px;
	}
	#Address{
		width: 400px;
		position: absolute;
		top:390px;
	}
	#Phonetext{
		position: absolute;
		top:490px;
	}
	#Dssntext{
		position: absolute;
		top:490px;
		left:695px;
	}
	#Phone{
		position: absolute;
		top:550px;
		width: 400px;
	}
	#Dssn{
		position: absolute;
		top:520px;
		left:695px;
		width: 400px;
	}
	#emg{
		position: absolute;
		top:640px;
		white-space: nowrap;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: bold;
		font-size: 30px;
		color: rgba(223,223,223,1);

	}
	#CTnametext{
		position: absolute;
		top:720px;
	}
	#CTname{
		position: absolute;
		top:760px;
	}
	#Relationtext{
		position: absolute;
		top:870px;
	}
	#Relation{
		position: absolute;
		top:940px;
		width:400px;
	}	
	#CTPhonetext{
		position: absolute;
		top:1020px;
	}
	#CTPhone{
		position: absolute;
		top:1060px;
	}
	#submit{
		position: absolute;
		top:1200px;
		left:900px;
		color:white;
            background-color: rgba(74, 84, 190, 1);
            border: 1px solid rgba(74, 84, 190, 1);
            width: 180px;
            height:60px;
            font-family: Sukhumvit Set;
            font-size: 26px;
            text-align: center;
            border-radius: 64px;
            position: absolute;
	}
	#cancel{
		position: absolute;
		top:1200px;
		left:670px;
		color:rgba(74, 84, 190, 1);
            background-color: white;
            border: 1px solid rgba(112,112,112,1);
            width: 180px;
            height:60px;
            font-family: Sukhumvit Set;
            font-size: 26px;
            text-align: center;
            border-radius: 64px;
            position: absolute;
	}
	a{
		text-decoration: none;
		color:white;
	}
	a:visited{
		color: white;
	}

</style>

</head>
<body>
<div id="Add_Employee">
	<div id="Group_10">
		<svg class="Rectangle_5">
			<rect fill="rgba(74,84,190,1)" id="Rectangle_5" rx="0" ry="0" x="0" y="0" width="368" height="1080">
			</rect>
		</svg>
	</div>
	<div id="Group_3">
		<div id="database">
			<span>database</span>
		</div>
		<img id="database_z" src="database_z.png" srcset="database_z.png 1x, database_z@2x.png 2x">
	</div>
	<svg class="Rectangle_6">
		<rect fill="rgba(255,255,255,1)" id="Rectangle_6" rx="0" ry="0" x="0" y="0" width="31" height="5">
		</rect>
	</svg>
	<svg class="Rectangle_6_">
		<rect fill="rgba(255,255,255,1)" id="Rectangle_6_" rx="0" ry="0" x="0" y="0" width="31" height="5">
		</rect>
	</svg>
	<svg class="Rectangle_6_ba">
		<rect fill="rgba(255,255,255,1)" id="Rectangle_6_ba" rx="0" ry="0" x="0" y="0" width="31" height="5">
		</rect>
	</svg>
	<div id="Group_8">
		<div id="Group_7">
			<div id="Alisha_Bridges">
				<span>Alisha Bridges</span>
			</div>
			<div id="Manager">
				<span>Manager</span>
			</div>
		</div>
		<img id="Ellipse_1" src="Ellipse_1.png" srcset="Ellipse_1.png 1x, Ellipse_1@2x.png 2x">
	</div>
	<svg class="Rectangle_11">
		<rect fill="rgba(29,36,107,1)" id="Rectangle_11" rx="0" ry="0" x="0" y="0" width="368" height="72">
		</rect>
	</svg>
	
	<svg class="Rectangle_10">
		<rect fill="rgba(255,255,255,1)" id="Rectangle_10" rx="20" ry="20" x="0" y="0" width="1413" height="2035">
		</rect>
	</svg>
	<div id="MAIN_MENU">
		<span>MAIN MENU</span>
	</div>
	<div onclick="application.goToTargetView(event)" id="Group_16">
		<div id="Home">
			<a href="Homepage.php"><span>Home</span></a>
		</div>
		<img id="home_run" src="home_run.png" srcset="home_run.png 1x, home_run@2x.png 2x">
	</div>
	<div onclick="application.goToTargetView(event)" id="Group_17">
		<div id="Employee">
			<span>Employee</span>
		</div>
		<img id="home_run_bh" src="home_run_bh.png" srcset="home_run_bh.png 1x, home_run_bh@2x.png 2x">
	</div>
	<div onclick="application.goToTargetView(event)" id="Group_11">
		<div id="Product">
			<span>Product</span>
		</div>
		<img id="home_run_bk" src="home_run_bk.png" srcset="home_run_bk.png 1x, home_run_bk@2x.png 2x">
	</div>
	<div onclick="application.goToTargetView(event)" id="Group_12">
		<div id="Material">
			<span>Material</span>
		</div>
		<img id="home_run_bn" src="home_run_bn.png" srcset="home_run_bn.png 1x, home_run_bn@2x.png 2x">
	</div>
	<div  id="Group_13">
		<div id="Customer">
			<span>Customer</span>
		</div>
		<img id="home_run_bq" src="home_run_bq.png" srcset="home_run_bq.png 1x, home_run_bq@2x.png 2x">
	</div>
	<div id="Group_14">
		
	</div>
	<div  id="Group_15">
		<div id="Logout">
			<span>Logout</span>
		</div>
		<img id="home_run_bw" src="home_run_bw.png" srcset="home_run_bw.png 1x, home_run_bw@2x.png 2x">
	</div>
	
	<div id="Group_59">
		<div id="Add_New_Employee">
			<span>Add New Employee</span>
		</div>
		<div id="Group_54">
			<div id="Group_32">
				
			</div>
			<div id="Personal_information">
				<span>Personal information</span>
			</div>
		<div id="Group_56">
			<div id="Employee_information">
				<span>Employee information</span>
			</div>
			
			
			
		</div>
		
			
		</div>
	</div>
</div>
<div class=formemp>
	<form action="Add_Employee.php" method="POST">
		<label id="nametext" >Name</label>
		<label id="Employeeid">Employee ID</label><br>
		<input type="text" id="name" name="name" >
		<input type="text" id="idemp" name="idemp" ><br><br>
		<label id="agetext" >Age</label>
		<label id="startworktext" >Start work</label>
		<label id="getoffworktext" >Get off work</label><br>
		<input type="text" id="age" name="age" >
		<input type="text" id="startwork" name="startwork" >
		<input type="text" id="getoffwork" name="getoffwork" ><br><br>
		<label id="Addresstext" >Address</label>
		<label id="Salarytext" >Salary</label><br>
		<input type="text" id="Address" name="Address" >
		<input type="text" id="Salary" name="Salary" ><br><br>
		<label id="Phonetext" >Phone</label>
		<label id="Dssntext" >DepartmentID</label><br>
		<input type="text" id="Phone" name="Phone" >
		<input type="text" id="Dssn" name="Dssn"><br><br>
		<label id="emg">Emergency contact</label>
		<label id="CTnametext">Name</label><br>
		<input type="text" id="CTname" name="CTname" ><br>
		<label id="Relationtext">Relation</label><br>
		<input type="text" id="Relation" name="Relation" ><br>
		<label id="CTPhonetext">Phone</label><br>
		<input type="text" id="CTPhone" name="CTPhone" ><br>
		
		<input type="submit" id="cancel" value="CANCEL">
		<input type="submit" id="submit" value="SAVE">
		</form>
</div>

<?php
        if($check==true)
        {
    ?>
    <script>
     setTimeout(function() {
        swal({
            title: "Complete!",
            text: "Employee was added",
            type: "success"
        }, function() {
            window.location = "Employee.php"; 
        });
    }, 1000);
    </script>
    <?php
        }if($error==true){
    ?>

    <script>
     setTimeout(function() {
        swal({
            title: "Fail!",
            text: "Data incorrect",
            type: "error"
        }, function() {
            window.location = "Employee.php"; 
        });
    }, 1000);
    </script>
    <?php
            }?>



</body>
</html>