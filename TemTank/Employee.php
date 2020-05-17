<?php
	session_start();

    //php code here

    //create variable
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "TemTank";
	$ID=$_POST['search'];
    //create connection
    $conn = new mysqli($servername,$username,$password,$dbname);

    //check db connection
    if($conn->connect_error){
        die("Can't connect to database");
    }
    // echo "Connected";
	$sql = "SELECT  ID,Name,Dname,Age,Address,StartWork,Getoffwork,Phone,Salary FROM 
	Employee 
	LEFT JOIN Department 
	ON Employee.Dessn = Department.Dssn && Employee.ID = Department.Essn
	ORDER BY Essn DESC";

	$sql2="SELECT  ID,Name,Dname,Age,Address,StartWork,Getoffwork,Phone,Salary FROM 
	Employee 
	LEFT JOIN Department 
	ON Employee.Dessn = Department.Dssn && Employee.ID = Department.Essn
	 WHERE ID ='$ID' ORDER BY Essn DESC";
	$result = $conn->query($sql);
    if(isset($_POST['search']))
    {
        if($_POST['search']=="")
        {
            $result = $conn->query($sql);
        }
        else
        {
        $result=$conn->query($sql2);
        }
    }
	
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Employee</title>
<style id="applicationStylesheet" type="text/css">
	
	

	#listemployee{
		width:1500px;
		height: 1300px;
		top:400px;
		left:500px;
		position: absolute;
		
		
		
	}
	table {
 	 
	  border: none;
    border-collapse: collapse;
    padding: 0;
    margin: 0;
	  width: 50%;
	  overflow-y: auto;
	  
	 
	}
	th,td{
		text-align: left;
		  
			  padding:0px;
			  padding-left: 15px;
			  padding-right: 32px;
			  padding-bottom: 15px;
			  font-family: Sukhumvit Set;
			font-style: normal;
			font-weight: lighter;
			font-size: 20px;
			text-align: center;
			white-space: pre;
	}
	th{
		font-size: 20px;
		font-weight: bold;
		overflow: visible;
	}
	tr:nth-child(even) {background-color: #f2f2f2;}
	#Employee {
		position: absolute;
		width: 1920px;
		height: 1886px;
		background-color: rgba(248,250,253,1);
		overflow: hidden;
		
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
	#Group_22 {
		position: absolute;
		width: 299px;
		height: 37px;
		left: 35px;
		top: 47px;
		overflow: visible;
	}
	#Group_3 {
		position: absolute;
		width: 189px;
		height: 37px;
		left: 0px;
		top: 0px;
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
	#database_ {
		position: absolute;
		width: 36px;
		height: 36px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_21 {
		position: absolute;
		width: 31px;
		height: 25px;
		left: 268px;
		top: 6px;
		overflow: visible;
	}
	.Rectangle_6 {
		position: absolute;
		overflow: visible;
		width: 31px;
		height: 5px;
		left: 0px;
		top: 0px;
	}
	.Rectangle_6_ {
		position: absolute;
		overflow: visible;
		width: 31px;
		height: 5px;
		left: 0px;
		top: 10px;
	}
	.Rectangle_6_ba {
		position: absolute;
		overflow: visible;
		width: 31px;
		height: 5px;
		left: 0px;
		top: 20px;
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
	.Rectangle_10 {
		position: absolute;
		overflow: visible;
		width: 1413px;
		height: 1694px;
		left: 437px;
		top: 144px;
	}
	#Group_18 {
		position: absolute;
		width: 161px;
		height: 853px;
		left: 35px;
		top: 174px;
		overflow: visible;
	}
	#MAIN_MENU {
		position: absolute;
		left: 0px;
		top: 0px;
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
		left: 0px;
		top: 74px;
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
		left: 0px;
		top: 163px;
		overflow: visible;
	}
	#Employee_bi {
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
	#home_run_bj {
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
		left: 0px;
		top: 254px;
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
	#home_run_bm {
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
		left: 0px;
		top: 341px;
		overflow: visible;
		cursor: pointer;
		--web-animation: ;
		--web-action-type: page;
		--web-action-target: Material.html;
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
	#home_run_bp {
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
		left: 0px;
		top: 432px;
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
	#home_run_bs {
		position: absolute;
		width: 31px;
		height: 31px;
		left: 0px;
		top: 3px;
		overflow: visible;
	}
	
	
	#home_run_bv {
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
		left: 4px;
		top: 521px;
		overflow: visible;
		--web-animation: fadein undefineds undefined;
		--web-action-type: page;
		--web-action-target: Login.html;
		cursor: pointer;
	}
	#Logout {
		position: absolute;
		left: 55px;
		top: 0px;
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
	#home_run_by {
		position: absolute;
		width: 30px;
		height: 30px;
		left: 0px;
		top: 3px;
		overflow: visible;
	}
	#Group_20 {
		position: absolute;
		width: 330px;
		height: 46px;
		left: 436px;
		top: 47px;
		overflow: visible;
	}
	.Rectangle_9 {
		position: absolute;
		overflow: visible;
		width: 330px;
		height: 46px;
		left: 0px;
		top: 0px;
	}
	#Search {
		position: absolute;
		left: 62px;
		top: 7px;
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
		left: 23px;
		top: 12px;
		overflow: visible;
	}
	#Path_1 {
		opacity: 0.17;
	}
	.Path_1 {
		overflow: visible;
		position: absolute;
		width: 1275.652px;
		height: 1px;
		left: 505.5px;
		top: 377.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_24 {
		position: absolute;
		width: 293px;
		height: 87px;
		left: 501px;
		top: 196px;
		overflow: visible;
	}
	#Employee_b {
		position: absolute;
		left: 51px;
		top: 0px;
		overflow: visible;
		width: 243px;
		white-space: nowrap;
		line-height: 107px;
		margin-top: -29.5px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: bold;
		font-size: 48px;
		color: rgba(39,39,39,1);
		letter-spacing: 0.2px;
	}
	.Ellipse_2 {
		position: absolute;
		overflow: visible;
		width: 18px;
		height: 18px;
		left: 0px;
		top: 34px;
	}
	.Path_2 {
		overflow: visible;
		position: absolute;
		width: 1px;
		height: 1px;
		left: 708.5px;
		top: 233.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_26 {
		position: absolute;
		width: 528px;
		height: 37.999px;
		left: 501px;
		top: 299px;
		overflow: visible;
	}
	#Group_23 {
		position: absolute;
		width: 187px;
		height: 37.999px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	.Rectangle_12 {
		position: absolute;
		overflow: visible;
		width: 187px;
		height: 36px;
		left: 0px;
		top: 0.5px;
	}
	#Sort_by___ID_ {
		position: absolute;
		left: 27px;
		top: 3.5px;
		overflow: visible;
		width: 97px;
		white-space: nowrap;
		line-height: 72px;
		margin-top: -28px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(139,139,139,1);
		letter-spacing: 0.2px;
	}
	#down_arrow {
		position: absolute;
		width: 13px;
		height: 12px;
		left: 159px;
		top: 13.5px;
		overflow: visible;
	}
	.Line_1 {
		overflow: visible;
		position: absolute;
		width: 0.5px;
		height: 37.999px;
		left: 144.224px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_25 {
		position: absolute;
		width: 310px;
		height: 36px;
		left: 60px;
		top: 1px;
		overflow: visible;
	}
	.Rectangle_12_cf {
		position: absolute;
		overflow: visible;
		width: 310px;
		height: 36px;
		left: 0px;
		top: 0px;
	}
	#search__1_ {
		position: absolute;
		width: 19px;
		height: 18px;
		left: 21px;
		top: 14px;
		overflow: visible;
	}
	#Enter_name_or_ID {
		position: absolute;
		left: 66px;
		top: 6px;
		overflow: visible;
		width: 131px;
		white-space: nowrap;
		line-height: 67px;
		margin-top: -25.5px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: lighter;
		font-size: 16px;
		color: rgba(193,193,193,1);
	}
	#Path_3 {
		opacity: 0.17;
	}
	.Path_3 {
		overflow: visible;
		position: absolute;
		width: 1275.652px;
		height: 1px;
		left: 505.5px;
		top: 421.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Name {
		position: absolute;
		left: 658px;
		top: 387px;
		overflow: visible;
		width: 45px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(139,139,139,1);
	}
	#ID {
		position: absolute;
		left: 533px;
		top: 387px;
		overflow: visible;
		width: 17px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(139,139,139,1);
	}
	#Age {
		position: absolute;
		left: 875px;
		top: 387px;
		overflow: visible;
		width: 31px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(139,139,139,1);
	}
	#Start_work {
		position: absolute;
		left: 1097px;
		top: 387px;
		overflow: visible;
		width: 81px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(139,139,139,1);
	}
	#Get_off_work {
		position: absolute;
		left: 1255px;
		top: 387px;
		overflow: visible;
		width: 97px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(139,139,139,1);
	}
	#Adress {
		position: absolute;
		left: 1432px;
		top: 387px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(139,139,139,1);
	}
	#Emergency_call {
		position: absolute;
		left: 1615px;
		top: 387px;
		overflow: visible;
		width: 119px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(139,139,139,1);
	}
	#Salary {
		position: absolute;
		left: 978px;
		top: 387px;
		overflow: visible;
		width: 49px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(139,139,139,1);
	}
	#Repeat_Grid_1 {
		position: absolute;
		width: 1275.652px;
		height: 1276px;
		left: 505.5px;
		top: 436px;
		overflow: hidden;
	}
	#Group_31 {
		position: absolute;
		width: 1275.652px;
		height: 165.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_30 {
		position: absolute;
		width: 1275.652px;
		height: 41.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_4 {
		opacity: 0.17;
	}
	.Path_4 {
		overflow: visible;
		position: absolute;
		width: 1275.652px;
		height: 1px;
		left: 0px;
		top: 41.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID00001 {
		position: absolute;
		left: 27.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#Kelsey_Holden {
		position: absolute;
		left: 152.5px;
		top: 0px;
		overflow: visible;
		width: 112px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID32 {
		position: absolute;
		left: 369.5px;
		top: 0px;
		overflow: visible;
		width: 21px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID40000 {
		position: absolute;
		left: 470.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID8_00_am {
		position: absolute;
		left: 599.5px;
		top: 0px;
		overflow: visible;
		width: 65px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID18_00_pm {
		position: absolute;
		left: 760.5px;
		top: 0px;
		overflow: visible;
		width: 75px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID757_Lyme_Ave_ {
		position: absolute;
		left: 926.5px;
		top: 0px;
		overflow: visible;
		width: 116px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#_66_842498761 {
		position: absolute;
		left: 1104.5px;
		top: 0px;
		overflow: visible;
		width: 129px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(74,84,190,1);
	}
	#Group_30_c {
		position: absolute;
		width: 1275.652px;
		height: 41.5px;
		left: 0px;
		top: 62px;
		overflow: visible;
	}
	#Path_4_c {
		opacity: 0.17;
	}
	.Path_4_c {
		overflow: visible;
		position: absolute;
		width: 1275.652px;
		height: 1px;
		left: 0px;
		top: 41.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID00002 {
		position: absolute;
		left: 27.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#Charlene_Clarkson {
		position: absolute;
		left: 152.5px;
		top: 0px;
		overflow: visible;
		width: 142px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID45 {
		position: absolute;
		left: 369.5px;
		top: 0px;
		overflow: visible;
		width: 21px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID52000 {
		position: absolute;
		left: 470.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID9_00_am {
		position: absolute;
		left: 599.5px;
		top: 0px;
		overflow: visible;
		width: 65px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID16_00_pm {
		position: absolute;
		left: 760.5px;
		top: 0px;
		overflow: visible;
		width: 75px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID1_Orange_Road {
		position: absolute;
		left: 926.5px;
		top: 0px;
		overflow: visible;
		width: 117px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	a:link{
		text-decoration: none;
		 color: rgba(255,255,255,1);
	}
	a:visited{
		text-decoration: none;
		color:  rgba(255,255,255,1);
	}
	#_66_142447821 {
		position: absolute;
		left: 1104.5px;
		top: 0px;
		overflow: visible;
		width: 129px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(74,84,190,1);
	}
	#Group_30_dd {
		position: absolute;
		width: 1275.652px;
		height: 41.5px;
		left: 0px;
		top: 124px;
		overflow: visible;
	}
	#Path_4_de {
		opacity: 0.17;
	}
	.Path_4_de {
		overflow: visible;
		position: absolute;
		width: 1275.652px;
		height: 1px;
		left: 0px;
		top: 41.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID00003 {
		position: absolute;
		left: 27.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#Szymon_Smith {
		position: absolute;
		left: 152.5px;
		top: 0px;
		overflow: visible;
		width: 112px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID26 {
		position: absolute;
		left: 369.5px;
		top: 0px;
		overflow: visible;
		width: 21px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID20000 {
		position: absolute;
		left: 470.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID8_00_am_dj {
		position: absolute;
		left: 599.5px;
		top: 0px;
		overflow: visible;
		width: 65px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID18_00_pm_dk {
		position: absolute;
		left: 760.5px;
		top: 0px;
		overflow: visible;
		width: 75px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID75_Roberts_Street {
		position: absolute;
		left: 926.5px;
		top: 0px;
		overflow: visible;
		width: 138px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#_66_657498730 {
		position: absolute;
		left: 1104.5px;
		top: 0px;
		overflow: visible;
		width: 129px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(74,84,190,1);
	}
	#Group_31_dn {
		position: absolute;
		width: 1275.652px;
		height: 165.5px;
		left: 0px;
		top: 186px;
		overflow: visible;
	}
	#Group_30_do {
		position: absolute;
		width: 1275.652px;
		height: 41.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_4_dp {
		opacity: 0.17;
	}
	.Path_4_dp {
		overflow: visible;
		position: absolute;
		width: 1275.652px;
		height: 1px;
		left: 0px;
		top: 41.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID00001_dq {
		position: absolute;
		left: 27.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#Kelsey_Holden_dr {
		position: absolute;
		left: 152.5px;
		top: 0px;
		overflow: visible;
		width: 112px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID32_ds {
		position: absolute;
		left: 369.5px;
		top: 0px;
		overflow: visible;
		width: 21px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID40000_dt {
		position: absolute;
		left: 470.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID8_00_am_du {
		position: absolute;
		left: 599.5px;
		top: 0px;
		overflow: visible;
		width: 65px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID18_00_pm_dv {
		position: absolute;
		left: 760.5px;
		top: 0px;
		overflow: visible;
		width: 75px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID757_Lyme_Ave__dw {
		position: absolute;
		left: 926.5px;
		top: 0px;
		overflow: visible;
		width: 116px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#_66_842498761_dx {
		position: absolute;
		left: 1104.5px;
		top: 0px;
		overflow: visible;
		width: 129px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(74,84,190,1);
	}
	#Group_30_dy {
		position: absolute;
		width: 1275.652px;
		height: 41.5px;
		left: 0px;
		top: 62px;
		overflow: visible;
	}
	#Path_4_dz {
		opacity: 0.17;
	}
	.Path_4_dz {
		overflow: visible;
		position: absolute;
		width: 1275.652px;
		height: 1px;
		left: 0px;
		top: 41.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID00002_d {
		position: absolute;
		left: 27.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#Charlene_Clarkson_d {
		position: absolute;
		left: 152.5px;
		top: 0px;
		overflow: visible;
		width: 142px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID45_d {
		position: absolute;
		left: 369.5px;
		top: 0px;
		overflow: visible;
		width: 21px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID52000_d {
		position: absolute;
		left: 470.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID9_00_am_d {
		position: absolute;
		left: 599.5px;
		top: 0px;
		overflow: visible;
		width: 65px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID16_00_pm_d {
		position: absolute;
		left: 760.5px;
		top: 0px;
		overflow: visible;
		width: 75px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID1_Orange_Road_d {
		position: absolute;
		left: 926.5px;
		top: 0px;
		overflow: visible;
		width: 117px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#_66_142447821_d {
		position: absolute;
		left: 1104.5px;
		top: 0px;
		overflow: visible;
		width: 129px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(74,84,190,1);
	}
	#Group_30_d {
		position: absolute;
		width: 1275.652px;
		height: 41.5px;
		left: 0px;
		top: 124px;
		overflow: visible;
	}
	#Path_4_d {
		opacity: 0.17;
	}
	.Path_4_d {
		overflow: visible;
		position: absolute;
		width: 1275.652px;
		height: 1px;
		left: 0px;
		top: 41.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID00003_ea {
		position: absolute;
		left: 27.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#Szymon_Smith_eb {
		position: absolute;
		left: 152.5px;
		top: 0px;
		overflow: visible;
		width: 112px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID26_ec {
		position: absolute;
		left: 369.5px;
		top: 0px;
		overflow: visible;
		width: 21px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID20000_ed {
		position: absolute;
		left: 470.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID8_00_am_ee {
		position: absolute;
		left: 599.5px;
		top: 0px;
		overflow: visible;
		width: 65px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID18_00_pm_ef {
		position: absolute;
		left: 760.5px;
		top: 0px;
		overflow: visible;
		width: 75px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID75_Roberts_Street_eg {
		position: absolute;
		left: 926.5px;
		top: 0px;
		overflow: visible;
		width: 138px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#_66_657498730_eh {
		position: absolute;
		left: 1104.5px;
		top: 0px;
		overflow: visible;
		width: 129px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(74,84,190,1);
	}
	#Group_31_ei {
		position: absolute;
		width: 1275.652px;
		height: 165.5px;
		left: 0px;
		top: 372px;
		overflow: visible;
	}
	#Group_30_ej {
		position: absolute;
		width: 1275.652px;
		height: 41.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_4_ek {
		opacity: 0.17;
	}
	.Path_4_ek {
		overflow: visible;
		position: absolute;
		width: 1275.652px;
		height: 1px;
		left: 0px;
		top: 41.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID00001_el {
		position: absolute;
		left: 27.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#Kelsey_Holden_em {
		position: absolute;
		left: 152.5px;
		top: 0px;
		overflow: visible;
		width: 112px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID32_en {
		position: absolute;
		left: 369.5px;
		top: 0px;
		overflow: visible;
		width: 21px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID40000_eo {
		position: absolute;
		left: 470.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID8_00_am_ep {
		position: absolute;
		left: 599.5px;
		top: 0px;
		overflow: visible;
		width: 65px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID18_00_pm_eq {
		position: absolute;
		left: 760.5px;
		top: 0px;
		overflow: visible;
		width: 75px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID757_Lyme_Ave__er {
		position: absolute;
		left: 926.5px;
		top: 0px;
		overflow: visible;
		width: 116px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#_66_842498761_es {
		position: absolute;
		left: 1104.5px;
		top: 0px;
		overflow: visible;
		width: 129px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(74,84,190,1);
	}
	#Group_30_et {
		position: absolute;
		width: 1275.652px;
		height: 41.5px;
		left: 0px;
		top: 62px;
		overflow: visible;
	}
	#Path_4_eu {
		opacity: 0.17;
	}
	.Path_4_eu {
		overflow: visible;
		position: absolute;
		width: 1275.652px;
		height: 1px;
		left: 0px;
		top: 41.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID00002_ev {
		position: absolute;
		left: 27.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#Charlene_Clarkson_ew {
		position: absolute;
		left: 152.5px;
		top: 0px;
		overflow: visible;
		width: 142px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID45_ex {
		position: absolute;
		left: 369.5px;
		top: 0px;
		overflow: visible;
		width: 21px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID52000_ey {
		position: absolute;
		left: 470.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID9_00_am_ez {
		position: absolute;
		left: 599.5px;
		top: 0px;
		overflow: visible;
		width: 65px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID16_00_pm_e {
		position: absolute;
		left: 760.5px;
		top: 0px;
		overflow: visible;
		width: 75px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID1_Orange_Road_e {
		position: absolute;
		left: 926.5px;
		top: 0px;
		overflow: visible;
		width: 117px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#_66_142447821_e {
		position: absolute;
		left: 1104.5px;
		top: 0px;
		overflow: visible;
		width: 129px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(74,84,190,1);
	}
	#Group_30_e {
		position: absolute;
		width: 1275.652px;
		height: 41.5px;
		left: 0px;
		top: 124px;
		overflow: visible;
	}
	#Path_4_e {
		opacity: 0.17;
	}
	.Path_4_e {
		overflow: visible;
		position: absolute;
		width: 1275.652px;
		height: 1px;
		left: 0px;
		top: 41.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID00003_e {
		position: absolute;
		left: 27.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#Szymon_Smith_e {
		position: absolute;
		left: 152.5px;
		top: 0px;
		overflow: visible;
		width: 112px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID26_e {
		position: absolute;
		left: 369.5px;
		top: 0px;
		overflow: visible;
		width: 21px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID20000_e {
		position: absolute;
		left: 470.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID8_00_am_e {
		position: absolute;
		left: 599.5px;
		top: 0px;
		overflow: visible;
		width: 65px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID18_00_pm_fa {
		position: absolute;
		left: 760.5px;
		top: 0px;
		overflow: visible;
		width: 75px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID75_Roberts_Street_fb {
		position: absolute;
		left: 926.5px;
		top: 0px;
		overflow: visible;
		width: 138px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#_66_657498730_fc {
		position: absolute;
		left: 1104.5px;
		top: 0px;
		overflow: visible;
		width: 129px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(74,84,190,1);
	}
	#Group_31_fd {
		position: absolute;
		width: 1275.652px;
		height: 165.5px;
		left: 0px;
		top: 558px;
		overflow: visible;
	}
	#Group_30_fe {
		position: absolute;
		width: 1275.652px;
		height: 41.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_4_ff {
		opacity: 0.17;
	}
	.Path_4_ff {
		overflow: visible;
		position: absolute;
		width: 1275.652px;
		height: 1px;
		left: 0px;
		top: 41.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID00001_fg {
		position: absolute;
		left: 27.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#Kelsey_Holden_fh {
		position: absolute;
		left: 152.5px;
		top: 0px;
		overflow: visible;
		width: 112px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID32_fi {
		position: absolute;
		left: 369.5px;
		top: 0px;
		overflow: visible;
		width: 21px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID40000_fj {
		position: absolute;
		left: 470.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID8_00_am_fk {
		position: absolute;
		left: 599.5px;
		top: 0px;
		overflow: visible;
		width: 65px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID18_00_pm_fl {
		position: absolute;
		left: 760.5px;
		top: 0px;
		overflow: visible;
		width: 75px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID757_Lyme_Ave__fm {
		position: absolute;
		left: 926.5px;
		top: 0px;
		overflow: visible;
		width: 116px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#_66_842498761_fn {
		position: absolute;
		left: 1104.5px;
		top: 0px;
		overflow: visible;
		width: 129px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(74,84,190,1);
	}
	#Group_30_fo {
		position: absolute;
		width: 1275.652px;
		height: 41.5px;
		left: 0px;
		top: 62px;
		overflow: visible;
	}
	#Path_4_fp {
		opacity: 0.17;
	}
	.Path_4_fp {
		overflow: visible;
		position: absolute;
		width: 1275.652px;
		height: 1px;
		left: 0px;
		top: 41.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID00002_fq {
		position: absolute;
		left: 27.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#Charlene_Clarkson_fr {
		position: absolute;
		left: 152.5px;
		top: 0px;
		overflow: visible;
		width: 142px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID45_fs {
		position: absolute;
		left: 369.5px;
		top: 0px;
		overflow: visible;
		width: 21px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID52000_ft {
		position: absolute;
		left: 470.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID9_00_am_fu {
		position: absolute;
		left: 599.5px;
		top: 0px;
		overflow: visible;
		width: 65px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID16_00_pm_fv {
		position: absolute;
		left: 760.5px;
		top: 0px;
		overflow: visible;
		width: 75px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID1_Orange_Road_fw {
		position: absolute;
		left: 926.5px;
		top: 0px;
		overflow: visible;
		width: 117px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#_66_142447821_fx {
		position: absolute;
		left: 1104.5px;
		top: 0px;
		overflow: visible;
		width: 129px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(74,84,190,1);
	}
	#Group_30_fy {
		position: absolute;
		width: 1275.652px;
		height: 41.5px;
		left: 0px;
		top: 124px;
		overflow: visible;
	}
	#Path_4_fz {
		opacity: 0.17;
	}
	.Path_4_fz {
		overflow: visible;
		position: absolute;
		width: 1275.652px;
		height: 1px;
		left: 0px;
		top: 41.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID00003_f {
		position: absolute;
		left: 27.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#Szymon_Smith_f {
		position: absolute;
		left: 152.5px;
		top: 0px;
		overflow: visible;
		width: 112px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID26_f {
		position: absolute;
		left: 369.5px;
		top: 0px;
		overflow: visible;
		width: 21px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID20000_f {
		position: absolute;
		left: 470.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID8_00_am_f {
		position: absolute;
		left: 599.5px;
		top: 0px;
		overflow: visible;
		width: 65px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID18_00_pm_f {
		position: absolute;
		left: 760.5px;
		top: 0px;
		overflow: visible;
		width: 75px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID75_Roberts_Street_f {
		position: absolute;
		left: 926.5px;
		top: 0px;
		overflow: visible;
		width: 138px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#_66_657498730_f {
		position: absolute;
		left: 1104.5px;
		top: 0px;
		overflow: visible;
		width: 129px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(74,84,190,1);
	}
	#Group_31_f {
		position: absolute;
		width: 1275.652px;
		height: 165.5px;
		left: 0px;
		top: 744px;
		overflow: visible;
	}
	#Group_30_f {
		position: absolute;
		width: 1275.652px;
		height: 41.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_4_ga {
		opacity: 0.17;
	}
	.Path_4_ga {
		overflow: visible;
		position: absolute;
		width: 1275.652px;
		height: 1px;
		left: 0px;
		top: 41.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID00001_gb {
		position: absolute;
		left: 27.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#Kelsey_Holden_gc {
		position: absolute;
		left: 152.5px;
		top: 0px;
		overflow: visible;
		width: 112px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID32_gd {
		position: absolute;
		left: 369.5px;
		top: 0px;
		overflow: visible;
		width: 21px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID40000_ge {
		position: absolute;
		left: 470.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID8_00_am_gf {
		position: absolute;
		left: 599.5px;
		top: 0px;
		overflow: visible;
		width: 65px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID18_00_pm_gg {
		position: absolute;
		left: 760.5px;
		top: 0px;
		overflow: visible;
		width: 75px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID757_Lyme_Ave__gh {
		position: absolute;
		left: 926.5px;
		top: 0px;
		overflow: visible;
		width: 116px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#_66_842498761_gi {
		position: absolute;
		left: 1104.5px;
		top: 0px;
		overflow: visible;
		width: 129px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(74,84,190,1);
	}
	#Group_30_gj {
		position: absolute;
		width: 1275.652px;
		height: 41.5px;
		left: 0px;
		top: 62px;
		overflow: visible;
	}
	#Path_4_gk {
		opacity: 0.17;
	}
	.Path_4_gk {
		overflow: visible;
		position: absolute;
		width: 1275.652px;
		height: 1px;
		left: 0px;
		top: 41.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID00002_gl {
		position: absolute;
		left: 27.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#Charlene_Clarkson_gm {
		position: absolute;
		left: 152.5px;
		top: 0px;
		overflow: visible;
		width: 142px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID45_gn {
		position: absolute;
		left: 369.5px;
		top: 0px;
		overflow: visible;
		width: 21px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID52000_go {
		position: absolute;
		left: 470.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID9_00_am_gp {
		position: absolute;
		left: 599.5px;
		top: 0px;
		overflow: visible;
		width: 65px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID16_00_pm_gq {
		position: absolute;
		left: 760.5px;
		top: 0px;
		overflow: visible;
		width: 75px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID1_Orange_Road_gr {
		position: absolute;
		left: 926.5px;
		top: 0px;
		overflow: visible;
		width: 117px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#_66_142447821_gs {
		position: absolute;
		left: 1104.5px;
		top: 0px;
		overflow: visible;
		width: 129px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(74,84,190,1);
	}
	#Group_30_gt {
		position: absolute;
		width: 1275.652px;
		height: 41.5px;
		left: 0px;
		top: 124px;
		overflow: visible;
	}
	#Path_4_gu {
		opacity: 0.17;
	}
	.Path_4_gu {
		overflow: visible;
		position: absolute;
		width: 1275.652px;
		height: 1px;
		left: 0px;
		top: 41.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID00003_gv {
		position: absolute;
		left: 27.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#Szymon_Smith_gw {
		position: absolute;
		left: 152.5px;
		top: 0px;
		overflow: visible;
		width: 112px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID26_gx {
		position: absolute;
		left: 369.5px;
		top: 0px;
		overflow: visible;
		width: 21px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID20000_gy {
		position: absolute;
		left: 470.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID8_00_am_gz {
		position: absolute;
		left: 599.5px;
		top: 0px;
		overflow: visible;
		width: 65px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID18_00_pm_g {
		position: absolute;
		left: 760.5px;
		top: 0px;
		overflow: visible;
		width: 75px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID75_Roberts_Street_g {
		position: absolute;
		left: 926.5px;
		top: 0px;
		overflow: visible;
		width: 138px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#_66_657498730_g {
		position: absolute;
		left: 1104.5px;
		top: 0px;
		overflow: visible;
		width: 129px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(74,84,190,1);
	}
	#Group_31_g {
		position: absolute;
		width: 1275.652px;
		height: 165.5px;
		left: 0px;
		top: 930px;
		overflow: visible;
	}
	#Group_30_g {
		position: absolute;
		width: 1275.652px;
		height: 41.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_4_g {
		opacity: 0.17;
	}
	.Path_4_g {
		overflow: visible;
		position: absolute;
		width: 1275.652px;
		height: 1px;
		left: 0px;
		top: 41.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID00001_g {
		position: absolute;
		left: 27.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#Kelsey_Holden_g {
		position: absolute;
		left: 152.5px;
		top: 0px;
		overflow: visible;
		width: 112px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID32_g {
		position: absolute;
		left: 369.5px;
		top: 0px;
		overflow: visible;
		width: 21px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID40000_g {
		position: absolute;
		left: 470.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID8_00_am_ha {
		position: absolute;
		left: 599.5px;
		top: 0px;
		overflow: visible;
		width: 65px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID18_00_pm_hb {
		position: absolute;
		left: 760.5px;
		top: 0px;
		overflow: visible;
		width: 75px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID757_Lyme_Ave__hc {
		position: absolute;
		left: 926.5px;
		top: 0px;
		overflow: visible;
		width: 116px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#_66_842498761_hd {
		position: absolute;
		left: 1104.5px;
		top: 0px;
		overflow: visible;
		width: 129px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(74,84,190,1);
	}
	#Group_30_he {
		position: absolute;
		width: 1275.652px;
		height: 41.5px;
		left: 0px;
		top: 62px;
		overflow: visible;
	}
	#Path_4_hf {
		opacity: 0.17;
	}
	.Path_4_hf {
		overflow: visible;
		position: absolute;
		width: 1275.652px;
		height: 1px;
		left: 0px;
		top: 41.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID00002_hg {
		position: absolute;
		left: 27.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#Charlene_Clarkson_hh {
		position: absolute;
		left: 152.5px;
		top: 0px;
		overflow: visible;
		width: 142px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID45_hi {
		position: absolute;
		left: 369.5px;
		top: 0px;
		overflow: visible;
		width: 21px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID52000_hj {
		position: absolute;
		left: 470.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID9_00_am_hk {
		position: absolute;
		left: 599.5px;
		top: 0px;
		overflow: visible;
		width: 65px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID16_00_pm_hl {
		position: absolute;
		left: 760.5px;
		top: 0px;
		overflow: visible;
		width: 75px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID1_Orange_Road_hm {
		position: absolute;
		left: 926.5px;
		top: 0px;
		overflow: visible;
		width: 117px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#_66_142447821_hn {
		position: absolute;
		left: 1104.5px;
		top: 0px;
		overflow: visible;
		width: 129px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(74,84,190,1);
	}
	#Group_30_ho {
		position: absolute;
		width: 1275.652px;
		height: 41.5px;
		left: 0px;
		top: 124px;
		overflow: visible;
	}
	#Path_4_hp {
		opacity: 0.17;
	}
	.Path_4_hp {
		overflow: visible;
		position: absolute;
		width: 1275.652px;
		height: 1px;
		left: 0px;
		top: 41.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID00003_hq {
		position: absolute;
		left: 27.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#Szymon_Smith_hr {
		position: absolute;
		left: 152.5px;
		top: 0px;
		overflow: visible;
		width: 112px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID26_hs {
		position: absolute;
		left: 369.5px;
		top: 0px;
		overflow: visible;
		width: 21px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID20000_ht {
		position: absolute;
		left: 470.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID8_00_am_hu {
		position: absolute;
		left: 599.5px;
		top: 0px;
		overflow: visible;
		width: 65px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID18_00_pm_hv {
		position: absolute;
		left: 760.5px;
		top: 0px;
		overflow: visible;
		width: 75px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID75_Roberts_Street_hw {
		position: absolute;
		left: 926.5px;
		top: 0px;
		overflow: visible;
		width: 138px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#_66_657498730_hx {
		position: absolute;
		left: 1104.5px;
		top: 0px;
		overflow: visible;
		width: 129px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(74,84,190,1);
	}
	#Group_31_hy {
		position: absolute;
		width: 1275.652px;
		height: 165.5px;
		left: 0px;
		top: 1116px;
		overflow: visible;
	}
	#Group_30_hz {
		position: absolute;
		width: 1275.652px;
		height: 41.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_4_h {
		opacity: 0.17;
	}
	.Path_4_h {
		overflow: visible;
		position: absolute;
		width: 1275.652px;
		height: 1px;
		left: 0px;
		top: 41.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID00001_h {
		position: absolute;
		left: 27.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#Kelsey_Holden_h {
		position: absolute;
		left: 152.5px;
		top: 0px;
		overflow: visible;
		width: 112px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID32_h {
		position: absolute;
		left: 369.5px;
		top: 0px;
		overflow: visible;
		width: 21px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID40000_h {
		position: absolute;
		left: 470.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID8_00_am_h {
		position: absolute;
		left: 599.5px;
		top: 0px;
		overflow: visible;
		width: 65px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID18_00_pm_h {
		position: absolute;
		left: 760.5px;
		top: 0px;
		overflow: visible;
		width: 75px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID757_Lyme_Ave__h {
		position: absolute;
		left: 926.5px;
		top: 0px;
		overflow: visible;
		width: 116px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#_66_842498761_h {
		position: absolute;
		left: 1104.5px;
		top: 0px;
		overflow: visible;
		width: 129px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(74,84,190,1);
	}
	#Group_30_h {
		position: absolute;
		width: 1275.652px;
		height: 41.5px;
		left: 0px;
		top: 62px;
		overflow: visible;
	}
	#Path_4_ia {
		opacity: 0.17;
	}
	.Path_4_ia {
		overflow: visible;
		position: absolute;
		width: 1275.652px;
		height: 1px;
		left: 0px;
		top: 41.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID00002_ib {
		position: absolute;
		left: 27.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#Charlene_Clarkson_ic {
		position: absolute;
		left: 152.5px;
		top: 0px;
		overflow: visible;
		width: 142px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID45_id {
		position: absolute;
		left: 369.5px;
		top: 0px;
		overflow: visible;
		width: 21px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID52000_ie {
		position: absolute;
		left: 470.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID9_00_am_if {
		position: absolute;
		left: 599.5px;
		top: 0px;
		overflow: visible;
		width: 65px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID16_00_pm_ig {
		position: absolute;
		left: 760.5px;
		top: 0px;
		overflow: visible;
		width: 75px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID1_Orange_Road_ih {
		position: absolute;
		left: 926.5px;
		top: 0px;
		overflow: visible;
		width: 117px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#_66_142447821_ii {
		position: absolute;
		left: 1104.5px;
		top: 0px;
		overflow: visible;
		width: 129px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(74,84,190,1);
	}
	#Group_30_ij {
		position: absolute;
		width: 1275.652px;
		height: 41.5px;
		left: 0px;
		top: 124px;
		overflow: visible;
	}
	#Path_4_ik {
		opacity: 0.17;
	}
	.Path_4_ik {
		overflow: visible;
		position: absolute;
		width: 1275.652px;
		height: 1px;
		left: 0px;
		top: 41.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID00003_il {
		position: absolute;
		left: 27.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#Szymon_Smith_im {
		position: absolute;
		left: 152.5px;
		top: 0px;
		overflow: visible;
		width: 112px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID26_in {
		position: absolute;
		left: 369.5px;
		top: 0px;
		overflow: visible;
		width: 21px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID20000_io {
		position: absolute;
		left: 470.5px;
		top: 0px;
		overflow: visible;
		width: 53px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#ID8_00_am_ip {
		position: absolute;
		left: 599.5px;
		top: 0px;
		overflow: visible;
		width: 65px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID18_00_pm_iq {
		position: absolute;
		left: 760.5px;
		top: 0px;
		overflow: visible;
		width: 75px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ID75_Roberts_Street_ir {
		position: absolute;
		left: 926.5px;
		top: 0px;
		overflow: visible;
		width: 138px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(39,39,39,1);
	}
	#_66_657498730_is {
		position: absolute;
		left: 1104.5px;
		top: 0px;
		overflow: visible;
		width: 129px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -17px;
		text-align: center;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(74,84,190,1);
	}
	#Group_29 {
		position: absolute;
		width: 60px;
		height: 60px;
		left: 1700px;
		top: 210px;
		overflow: visible;
		--web-animation: fadein undefineds undefined;
		--web-action-type: page;
		--web-action-target: Add_Employee.html;
		cursor: pointer;
	}
	.Ellipse_3 {
		filter: drop-shadow(0px 2px 5px rgba(0, 0, 0, 0.102));
		position: absolute;
		overflow: visible;
		width: 75px;
		height: 75px;
		left: 0px;
		top: 0px;
	}
	.Rectangle_13 {
		position: absolute;
		overflow: visible;
		width: 4px;
		height: 34px;
		left: 28px;
		top: 14px;
	}
	.Rectangle_14 {
		width: 4px;
		height: 34px;
		position: absolute;
		overflow: visible;
		transform: translate(-1786px, -1016px) matrix(1,0,0,1,1814,1030) rotate(-90deg);
		transform-origin: center;
	}
	#delete{
            margin-top:20px;
            background: rgba(220,0,0,1);
            width:100px;
            height: 40px;
            border-radius: 32px;
            color: white;
            font-family: Sukhumvit Set;
            font-size: 16px;
            top:20px;
			text-align: center;
            
        }
		#enter{
			position: absolute;
			width: 300px;
			left:-65px;
			top:20px;
			height: 40px;
			border:none;
			border-radius: 32px;
			text-align: center;
			font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: lighter;
		font-size: 16px;
		color:black;
		background-color: rgba(236,236,236,1);
		background-image: "search__1_.png";
	}
	
	#sub{
		position: absolute;
		top:26px;
		left:280px;
		width:80px;
		height: 30px;
		font-size: 16px;
		border-radius: 32px;
		font-family: Sukhumvit Set;
		border : 1px solid black;

	}
		
</style>

</head>
<body>
<div id="Employee">
	<div id="Group_10">
		<svg class="Rectangle_5">
			<rect fill="rgba(74,84,190,1)" id="Rectangle_5" rx="0" ry="0" x="0" y="0" width="368" height="1080">
			</rect>
		</svg>
	</div>
	<div id="Group_22">
		<div id="Group_3">
			<div id="database">
				<span>database</span>
			</div>
			<img id="database_" src="database_.png" srcset="database_.png 1x, database_@2x.png 2x">
		</div>
		<div id="Group_21">
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
		</div>
	</div>
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
		<rect fill="rgba(255,255,255,1)" id="Rectangle_10" rx="20" ry="20" x="0" y="0" width="1413" height="1694">
		</rect>
	</svg>
	<div id="Group_18">
		<div id="MAIN_MENU">
			<span>MAIN MENU</span>
		</div>
		<div  id="Group_16">
			<div id="Home">
				<a href="/Homepage.php">Home</a>
			</div>
			<img id="home_run" src="home_run.png" srcset="home_run.png 1x, home_run@2x.png 2x">
		</div>
		<div id="Group_17">
			<div id="Employee_bi">
			<a href="/Employee.php">Employee</a>
			</div>
			<img id="home_run_bj" src="home_run_bj.png" srcset="home_run_bj.png 1x, home_run_bj@2x.png 2x">
		</div>
		<div id="Group_11">
			<div id="Product">
			<a href="/Product.php">Product</a>
			</div>
			<img id="home_run_bm" src="home_run_bm.png" srcset="home_run_bm.png 1x, home_run_bm@2x.png 2x">
		</div>
		<div  id="Group_12">
			<div id="Material">
			<a href="/Material.php">Material</a>
			</div>
			<img id="home_run_bp" src="home_run_bp.png" srcset="home_run_bp.png 1x, home_run_bp@2x.png 2x">
		</div>
		<div  id="Group_13">
			<div id="Customer">
			<a href="/Customer.php">Customer</a>
			</div>
			<img id="home_run_bs" src="home_run_bs.png" srcset="home_run_bs.png 1x, home_run_bs@2x.png 2x">
		</div>
		
		<div  id="Group_15">
			<div id="Logout">
			<a href="/Login.php">Logout</a>
			</div>
			<img id="home_run_by" src="home_run_by.png" srcset="home_run_by.png 1x, home_run_by@2x.png 2x">
		</div>
	</div>
	<div id="Group_20">
		
		
	</div>
	<svg class="Path_1" viewBox="0 0 1275.652 1">
		<path fill="rgba(0,0,0,0)" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Path_1" d="M 0 0 L 67.27070617675781 0 L 1275.65185546875 0">
		</path>
	</svg>
	<div id="Group_24">
		<div id="Employee_b">
			<span>Employee</span>
		</div>
		<svg class="Ellipse_2">
			<ellipse fill="rgba(249,97,125,1)" id="Ellipse_2" rx="9" ry="9" cx="9" cy="9">
			</ellipse>
		</svg>
	</div>
	<svg class="Path_2" viewBox="0 22 0.5 0.5">
		<path fill="rgba(0,0,0,0)" stroke="rgba(255,255,255,1)" stroke-width="0.5px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Path_2" d="M 0 22">
		</path>
	</svg>
	<div id="Group_26">
		<div id="Group_23">
			
			<svg class="Line_1" viewBox="0 0 0.5 37.999">
				<path fill="transparent" stroke="rgba(255,255,255,1)" stroke-width="0.5px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_1" d="M 0 0 L 0 37.9990348815918">
				</path>
			</svg>
		</div>
		<div id="Group_25">
			
			<form action="Employee.php" method="POST">
			<div id="Enter_name_or_ID">
			<input type= "text" id = "enter" name= "search"placeholder="Enter ID">
			<input type = "submit" id="sub" value="Search">
			</div>
			<img id="search__1_" src="search__1_.png" srcset="search__1_.png 1x, search__1_@2x.png 2x">
			</form>
		</div>
	</div>
	</div>
	<a href="Add_Employee.php">
	<div id="Group_29">
		<svg class="Ellipse_3">
			<ellipse fill="rgba(74,84,190,1)" id="Ellipse_3" rx="30" ry="30" cx="30" cy="30">
			</ellipse>
		</svg>
		<svg class="Rectangle_13">
			<rect fill="rgba(255,255,255,1)" id="Rectangle_13" rx="0" ry="0" x="0" y="0" width="4" height="34">
			</rect>
		</svg>
		<svg class="Rectangle_14">
			<rect fill="rgba(255,255,255,1)" id="Rectangle_14" rx="0" ry="0" x="0" y="0" width="4" height="34">
			</rect>
		</svg>
	</div>
			
</a>
	<div id="listemployee">	
		<table>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Department</th>
				<th>Age</th>
				<th>StartWork</th>
				<th>Offwork</th>
				<th>Phone</th>
				<th>Salary</th>
			</tr>
			<?php
			 while($row = $result->fetch_assoc()){
			echo "<tr>";
					
					echo"<td>".$row['ID']."</td>"
					."<td>".$row['Name']."</td>".
					"<td>".$row['Dname']."</td>".
					"<td>".$row['Age']."</td>".
					"<td>".$row['StartWork']."</td>".
					"<td>".$row['Getoffwork']."</td>".
					"<td>".$row['Phone']."</td>".
					"<td>".$row['Salary']."</td>".
					"<td><a href='DeleteEm.php?id=".$row['ID']."'><input type ='button' value='Delete' id='delete'></a></td>";

			echo "</tr>";
			
			 }?>

		
		</table>
	


</div>
</body>
</html>