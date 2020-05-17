<?php
	session_start();

    //php code here

    //create variable
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "TemTank";
	$ID = $_POST['search'];
    //create connection
    $conn = new mysqli($servername,$username,$password,$dbname);

    //check db connection
    if($conn->connect_error){
        die("Can't connect to database");
    }
    // echo "Connected";

	$result = $conn->query("SELECT DISTINCT Mssn,Amount,Mname,Mprice FROM Material ORDER BY Mssn ");
	$result2="SELECT DISTINCT Mssn,Amount,Mname,Mprice FROM Material WHERE Mssn='$ID' ORDER BY Mssn";

	if(isset($_POST['search']))
    {
        if($_POST['search']=="")
        {
			$result = $conn->query("SELECT DISTINCT Mssn,Amount,Mname,Mprice FROM Material ORDER BY Mssn ");
        }
        else
        {
        $result=$conn->query($result2);
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Material</title>
<style id="applicationStylesheet" type="text/css">
	.mediaViewInfo {
		--web-view-name: Material;
		--web-view-id: Material;
		--web-scale-on-resize: true;
		--web-enable-deep-linking: true;
		--web-is-overlay: true;
	}
	:root {
		--web-view-ids: Material;
	}
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		border: none;
	}
	#Material {
		position: absolute;
		width: 1920px;
		height: 1548px;
		background-color: rgba(248,250,253,1);
		overflow: hidden;
		cursor: pointer;
		--web-view-name: Material;
		--web-view-id: Material;
		--web-scale-on-resize: true;
		--web-enable-deep-linking: true;
		--web-is-overlay: true;
	}
	a:link{
		text-decoration: none;
		color:  rgba(255,255,255,1);
	}
	a:visited{
		text-decoration: none;
		color: rgba(255,255,255,1);
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
		top: 499px;
	}
	.Rectangle_10 {
		position: absolute;
		overflow: visible;
		width: 1413px;
		height: 1336px;
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
		--web-animation: fadein 0.3s ease-out;
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
	}
	#Material_bo {
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
	#Group_24 {
		position: absolute;
		width: 254px;
		height: 87px;
		left: 513px;
		top: 193px;
		overflow: visible;
	}
	#Material_b {
		position: absolute;
		left: 51px;
		top: 0px;
		overflow: visible;
		width: 204px;
		white-space: nowrap;
		line-height: 107px;
		margin-top: -29.5px;
		text-align: left;
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
		left: 720.5px;
		top: 230.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_26 {
		position: absolute;
		width: 559px;
		height: 37.999px;
		left: 513px;
		top: 296px;
		overflow: visible;
	}
	#Group_23 {
		position: absolute;
		width: 205px;
		height: 37.999px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	.Rectangle_12 {
		position: absolute;
		overflow: visible;
		width: 205px;
		height: 36px;
		left: 0px;
		top: 0.5px;
	}
	#Sort_by___Name_ {
		position: absolute;
		left: 22px;
		top: 3.5px;
		overflow: visible;
		width: 127px;
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
		left: 178px;
		top: 13.5px;
		overflow: visible;
	}
	.Line_1 {
		overflow: visible;
		position: absolute;
		width: 0.5px;
		height: 37.999px;
		left: 163.224px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_25 {
		position: absolute;
		width: 310px;
		height: 36px;
		left: 30px;
		top: 0px;
		overflow: visible;
	}
	.Rectangle_12_ce {
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
		top: 10px;
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
	#Group_68 {
		position: absolute;
		width: 60px;
		height: 60px;
		left: 1712px;
		top: 207px;
		overflow: visible;
		--web-animation: fadein 0.3s ease-out;
		--web-action-type: page;
		--web-action-target: Add_material.html;
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
		transform: translate(-1712px, -207px) matrix(1,0,0,1,1740,221) rotate(-90deg);
		transform-origin: center;
	}
	#Group_98 {
		position: absolute;
		width: 1261.056px;
		height: 392px;
		left: 513px;
		top: 405px;
		overflow: visible;
	}
	#Group_63 {
		position: absolute;
		width: 280.056px;
		height: 392px;
		left: 327px;
		top: 0px;
		overflow: visible;
	}
	.Rectangle_16 {
		position: absolute;
		overflow: visible;
		width: 280px;
		height: 392px;
		left: 0px;
		top: 0px;
	}
	#Path_5 {
		position: absolute;
		width: 198.048px;
		height: 155.868px;
		left: 41px;
		top: 36.132px;
		overflow: visible;
	}
	.Path_6 {
		overflow: visible;
		position: absolute;
		width: 280.056px;
		height: 1px;
		left: 0px;
		top: 230.041px;
		transform: matrix(1,0,0,1,0,0);
	}
	#COPPER_WIRE_SCRAP_ {
		position: absolute;
		left: 31px;
		top: 251px;
		overflow: visible;
		width: 124px;
		white-space: nowrap;
		line-height: 20px;
		margin-top: -3.5px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: bold;
		font-size: 13px;
		color: rgba(39,39,39,1);
	}
	#Product_ID___PD004 {
		position: absolute;
		left: 31px;
		top: 288px;
		overflow: visible;
		width: 117px;
		white-space: nowrap;
		line-height: 20px;
		margin-top: -4px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 12px;
		color: rgba(39,39,39,1);
		letter-spacing: 0.2px;
	}
	#Remainder___500_Kg_ {
		position: absolute;
		left: 31px;
		top: 306px;
		overflow: visible;
		width: 124px;
		white-space: nowrap;
		line-height: 20px;
		margin-top: -4px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 12px;
		color: rgba(39,39,39,1);
		letter-spacing: 0.2px;
	}
	#ID123_Baht___Kg_ {
		position: absolute;
		left: 31px;
		top: 340px;
		overflow: visible;
		width: 109px;
		white-space: nowrap;
		line-height: 20px;
		margin-top: -2.5px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: bold;
		font-size: 15px;
		color: rgba(74,84,190,1);
	}
	#Group_63_cu {
		position: absolute;
		width: 280.056px;
		height: 392px;
		left: 655px;
		top: 0px;
		overflow: visible;
	}
	.Rectangle_16_cv {
		position: absolute;
		overflow: visible;
		width: 280px;
		height: 392px;
		left: 0px;
		top: 0px;
	}
	#Path_5_cw {
		position: absolute;
		width: 198.048px;
		height: 155.868px;
		left: 41px;
		top: 36.132px;
		overflow: visible;
	}
	.Path_6_cx {
		overflow: visible;
		position: absolute;
		width: 280.056px;
		height: 1px;
		left: 0px;
		top: 230.041px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Si_Metal_Slag_40_Silicon_Slag_ {
		position: absolute;
		left: 21px;
		top: 251px;
		overflow: visible;
		width: 239px;
		white-space: nowrap;
		line-height: 15px;
		margin-top: -1px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: bold;
		font-size: 13px;
		color: rgba(39,39,39,1);
	}
	#Product_ID___PD002 {
		position: absolute;
		left: 21px;
		top: 294px;
		overflow: visible;
		width: 98px;
		white-space: nowrap;
		line-height: 20px;
		margin-top: -5px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 10px;
		color: rgba(39,39,39,1);
		letter-spacing: 0.2px;
	}
	#Remainder___1_Ton___ {
		position: absolute;
		left: 21px;
		top: 312px;
		overflow: visible;
		width: 101px;
		white-space: nowrap;
		line-height: 20px;
		margin-top: -5px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 10px;
		color: rgba(39,39,39,1);
		letter-spacing: 0.2px;
	}
	#ID180_Baht___1_Kg_ {
		position: absolute;
		left: 21px;
		top: 340px;
		overflow: visible;
		width: 123px;
		white-space: nowrap;
		line-height: 20px;
		margin-top: -2.5px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: bold;
		font-size: 15px;
		color: rgba(74,84,190,1);
	}
	#Group_66 {
		position: absolute;
		width: 280.056px;
		height: 392px;
		left: 981px;
		top: 0px;
		overflow: visible;
	}
	.Rectangle_16_c {
		position: absolute;
		overflow: visible;
		width: 280px;
		height: 392px;
		left: 0px;
		top: 0px;
	}
	#Path_5_c {
		position: absolute;
		width: 198.048px;
		height: 155.868px;
		left: 41px;
		top: 36.132px;
		overflow: visible;
	}
	.Path_6_c {
		overflow: visible;
		position: absolute;
		width: 280.056px;
		height: 1px;
		left: 0px;
		top: 230.041px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Steel_plate__sheet_in_coil__st {
		position: absolute;
		left: 31px;
		top: 251px;
		overflow: visible;
		width: 224px;
		white-space: nowrap;
		line-height: 20px;
		margin-top: -3.5px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: bold;
		font-size: 13px;
		color: rgba(39,39,39,1);
	}
	#Product_ID___RM001 {
		position: absolute;
		left: 31px;
		top: 290px;
		overflow: visible;
		width: 99px;
		white-space: nowrap;
		line-height: 20px;
		margin-top: -5px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 10px;
		color: rgba(39,39,39,1);
		letter-spacing: 0.2px;
	}
	#Remainder___1_Ton____c {
		position: absolute;
		left: 31px;
		top: 308px;
		overflow: visible;
		width: 101px;
		white-space: nowrap;
		line-height: 20px;
		margin-top: -5px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 10px;
		color: rgba(39,39,39,1);
		letter-spacing: 0.2px;
	}
	#ID165_Baht___Kg_ {
		position: absolute;
		left: 31px;
		top: 340px;
		overflow: visible;
		width: 109px;
		white-space: nowrap;
		line-height: 20px;
		margin-top: -2.5px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: bold;
		font-size: 15px;
		color: rgba(74,84,190,1);
	}
	#Group_67 {
		position: absolute;
		width: 280.056px;
		height: 392px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	.Rectangle_16_db {
		position: absolute;
		overflow: visible;
		width: 280px;
		height: 392px;
		left: 0px;
		top: 0px;
	}
	#Path_5_dc {
		position: absolute;
		width: 198.048px;
		height: 155.868px;
		left: 41px;
		top: 36.132px;
		overflow: visible;
	}
	.Path_6_dd {
		overflow: visible;
		position: absolute;
		width: 280.056px;
		height: 1px;
		left: 0px;
		top: 230.041px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Aluminum_Wire_Scrap {
		position: absolute;
		left: 31px;
		top: 251px;
		overflow: visible;
		width: 140px;
		white-space: nowrap;
		line-height: 20px;
		margin-top: -3.5px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: bold;
		font-size: 13px;
		color: rgba(39,39,39,1);
	}
	#Remainder___850_Kg____ {
		position: absolute;
		left: 31px;
		top: 306px;
		overflow: visible;
		width: 134px;
		white-space: nowrap;
		line-height: 20px;
		margin-top: -4px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 12px;
		color: rgba(39,39,39,1);
		letter-spacing: 0.2px;
	}
	#ID130_Baht___Kg_ {
		position: absolute;
		left: 31px;
		top: 340px;
		overflow: visible;
		width: 109px;
		white-space: nowrap;
		line-height: 20px;
		margin-top: -2.5px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: bold;
		font-size: 15px;
		color: rgba(74,84,190,1);
	}
	#Product_ID___PD003 {
		position: absolute;
		left: 31px;
		top: 288px;
		overflow: visible;
		width: 117px;
		white-space: nowrap;
		line-height: 20px;
		margin-top: -4px;
		text-align: left;
		font-family: Sukhumvit Set;
		font-style: normal;
		font-weight: normal;
		font-size: 12px;
		color: rgba(39,39,39,1);
		letter-spacing: 0.2px;
	}
	#Group_69 {
		position: absolute;
		width: 60px;
		height: 60px;
		left: 1617px;
		top: 207px;
		overflow: visible;
		--web-animation: fadein 0.3s ease-out;
		--web-action-type: page;
		--web-action-target: Calculate_price.html;
		cursor: pointer;
	}
	.Ellipse_5 {
		filter: drop-shadow(0px 2px 5px rgba(0, 0, 0, 0.102));
		position: absolute;
		overflow: visible;
		width: 75px;
		height: 75px;
		left: 0px;
		top: 0px;
	}
	#tag {
		position: absolute;
		width: 31px;
		height: 31px;
		left: 13px;
		top: 16px;
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
		top: 868.5px;
		transform: matrix(1,0,0,1,0,0);
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
		top: 912.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Name {
		position: absolute;
		left: 684px;
		top: 878px;
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
		left: 535px;
		top: 878px;
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
	#Aluminum {
		position: absolute;
		left: 1077px;
		top: 878px;
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
	#_Metal_Slag {
		position: absolute;
		left: 1427px;
		top: 878px;
		overflow: visible;
		width: 87px;
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
	#Path_4 {
		opacity: 0.17;
	}
	.Path_4 {
		overflow: visible;
		position: absolute;
		width: 1275.652px;
		height: 1px;
		left: 505.5px;
		top: 968.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#C0001 {
		position: absolute;
		left: 535px;
		top: 927px;
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
	#Dorman_Intercooler_Boot_Kit_ {
		position: absolute;
		left: 684px;
		top: 927px;
		overflow: visible;
		width: 224px;
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
	#Path_4_du {
		opacity: 0.17;
	}
	.Path_4_du {
		overflow: visible;
		position: absolute;
		width: 1275.652px;
		height: 1px;
		left: 505.5px;
		top: 1030.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#C0002 {
		position: absolute;
		left: 535px;
		top: 989px;
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
	#Duralast_Gold_New_Alternator {
		position: absolute;
		left: 684px;
		top: 989px;
		overflow: visible;
		width: 229px;
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
	#Copper_ {
		position: absolute;
		left: 1262px;
		top: 878px;
		overflow: visible;
		width: 61px;
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
	#Steel_plate {
		position: absolute;
		left: 1620px;
		top: 878px;
		overflow: visible;
		width: 83px;
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
	#ID1 {
		position: absolute;
		left: 1110px;
		top: 927px;
		overflow: visible;
		width: 11px;
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
	#_ {
		position: absolute;
		left: 1112px;
		top: 987px;
		overflow: visible;
		width: 7px;
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
	#__d {
		position: absolute;
		left: 1289px;
		top: 927px;
		overflow: visible;
		width: 7px;
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
	#ID2 {
		position: absolute;
		left: 1287px;
		top: 987px;
		overflow: visible;
		width: 11px;
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
	#ID1_d {
		position: absolute;
		left: 1470px;
		top: 927px;
		overflow: visible;
		width: 11px;
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
	#__ea {
		position: absolute;
		left: 1472px;
		top: 987px;
		overflow: visible;
		width: 7px;
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
	#ID1_ea {
		position: absolute;
		left: 1656px;
		top: 927px;
		overflow: visible;
		width: 11px;
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
	#ID3 {
		position: absolute;
		left: 1656px;
		top: 987px;
		overflow: visible;
		width: 11px;
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
	#Repeat_Grid_3 {
		position: absolute;
		width: 1275.652px;
		height: 320px;
		left: 505.5px;
		top: 1047px;
		overflow: hidden;
	}
	#Repeat_Grid_3_0 {
		position: absolute;
		width: 1275.652px;
		height: 45.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_87 {
		position: absolute;
		width: 1275.652px;
		height: 41.5px;
		left: 0px;
		top: 4px;
		overflow: visible;
	}
	#Path_4_ea {
		opacity: 0.17;
	}
	.Path_4_ea {
		overflow: visible;
		position: absolute;
		width: 1275.652px;
		height: 1px;
		left: 0px;
		top: 41.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#C0003 {
		position: absolute;
		left: 29.5px;
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
	#Duralast_Loaded_Strut_Assembly {
		position: absolute;
		left: 178.5px;
		top: 4px;
		overflow: visible;
		width: 251px;
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
	#__ed {
		position: absolute;
		left: 606.5px;
		top: 0px;
		overflow: visible;
		width: 7px;
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
	#__ee {
		position: absolute;
		left: 783.5px;
		top: 0px;
		overflow: visible;
		width: 7px;
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
	#ID2_ef {
		position: absolute;
		left: 964.5px;
		top: 0px;
		overflow: visible;
		width: 11px;
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
	#ID3_eg {
		position: absolute;
		left: 1150.5px;
		top: 0px;
		overflow: visible;
		width: 11px;
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
	#Repeat_Grid_3_1 {
		position: absolute;
		width: 1275.652px;
		height: 45.5px;
		left: 0px;
		top: 66px;
		overflow: visible;
	}
	#Group_87_ei {
		position: absolute;
		width: 1275.652px;
		height: 41.5px;
		left: 0px;
		top: 4px;
		overflow: visible;
	}
	#Path_4_ej {
		opacity: 0.17;
	}
	.Path_4_ej {
		overflow: visible;
		position: absolute;
		width: 1275.652px;
		height: 1px;
		left: 0px;
		top: 41.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#C0003_ek {
		position: absolute;
		left: 29.5px;
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
	#Exedy_Clutch_Set {
		position: absolute;
		left: 178.5px;
		top: 4px;
		overflow: visible;
		width: 132px;
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
	#ID3_em {
		position: absolute;
		left: 604.5px;
		top: 0px;
		overflow: visible;
		width: 11px;
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
	#ID1_en {
		position: absolute;
		left: 781.5px;
		top: 0px;
		overflow: visible;
		width: 11px;
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
	#ID1_eo {
		position: absolute;
		left: 964.5px;
		top: 0px;
		overflow: visible;
		width: 11px;
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
	#ID2_ep {
		position: absolute;
		left: 1150.5px;
		top: 0px;
		overflow: visible;
		width: 11px;
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
	#Repeat_Grid_3_2 {
		position: absolute;
		width: 1275.652px;
		height: 45.5px;
		left: 0px;
		top: 132px;
		overflow: visible;
	}
	#Group_87_er {
		position: absolute;
		width: 1275.652px;
		height: 41.5px;
		left: 0px;
		top: 4px;
		overflow: visible;
	}
	#Path_4_es {
		opacity: 0.17;
	}
	.Path_4_es {
		overflow: visible;
		position: absolute;
		width: 1275.652px;
		height: 1px;
		left: 0px;
		top: 41.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#C0003_et {
		position: absolute;
		left: 29.5px;
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
	#MOOG_Super_Strength_U_Joint {
		position: absolute;
		left: 178.5px;
		top: 4px;
		overflow: visible;
		width: 235px;
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
	#ID3_ev {
		position: absolute;
		left: 604.5px;
		top: 0px;
		overflow: visible;
		width: 11px;
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
	#__ew {
		position: absolute;
		left: 783.5px;
		top: 0px;
		overflow: visible;
		width: 7px;
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
	#ID3_ex {
		position: absolute;
		left: 964.5px;
		top: 0px;
		overflow: visible;
		width: 11px;
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
	#__ey {
		position: absolute;
		left: 1152.5px;
		top: 0px;
		overflow: visible;
		width: 7px;
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
	#Repeat_Grid_3_3 {
		position: absolute;
		width: 1275.652px;
		height: 45.5px;
		left: 0px;
		top: 198px;
		overflow: visible;
	}
	#Group_87_e {
		position: absolute;
		width: 1275.652px;
		height: 41.5px;
		left: 0px;
		top: 4px;
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
	#C0003_e {
		position: absolute;
		left: 29.5px;
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
	#Pioneer_Flywheel___Automatic_T {
		position: absolute;
		left: 178.5px;
		top: 4px;
		overflow: visible;
		width: 334px;
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
	#ID1_e {
		position: absolute;
		left: 604.5px;
		top: 0px;
		overflow: visible;
		width: 11px;
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
	#__e {
		position: absolute;
		left: 783.5px;
		top: 0px;
		overflow: visible;
		width: 7px;
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
	#ID1_fa {
		position: absolute;
		left: 964.5px;
		top: 0px;
		overflow: visible;
		width: 11px;
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
	#ID1_fb {
		position: absolute;
		left: 1150.5px;
		top: 0px;
		overflow: visible;
		width: 11px;
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
	#Repeat_Grid_3_4 {
		position: absolute;
		width: 1275.652px;
		height: 45.5px;
		left: 0px;
		top: 264px;
		overflow: visible;
	}
	#Group_87_fa {
		position: absolute;
		width: 1275.652px;
		height: 41.5px;
		left: 0px;
		top: 4px;
		overflow: visible;
	}
	#Path_4_fa {
		opacity: 0.17;
	}
	.Path_4_fa {
		overflow: visible;
		position: absolute;
		width: 1275.652px;
		height: 1px;
		left: 0px;
		top: 41.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#C0003_fb {
		position: absolute;
		left: 29.5px;
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
	#STP_Air_Filter {
		position: absolute;
		left: 178.5px;
		top: 4px;
		overflow: visible;
		width: 102px;
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
	#__fd {
		position: absolute;
		left: 606.5px;
		top: 0px;
		overflow: visible;
		width: 7px;
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
	#__fe {
		position: absolute;
		left: 783.5px;
		top: 0px;
		overflow: visible;
		width: 7px;
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
	#__ff {
		position: absolute;
		left: 966.5px;
		top: 0px;
		overflow: visible;
		width: 7px;
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
	#ID2_fg {
		position: absolute;
		left: 1150.5px;
		top: 0px;
		overflow: visible;
		width: 11px;
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
	table {
 	 
	  border: none;
    border-collapse: collapse;
    padding: 0;
    margin: 0;
	  width: 100%;
	 
	}
	th,td{
		text-align: left;
		  
			  padding:0px;
			  padding-left: 40px;
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
        
	}
	tr:nth-child(even) {background-color: #f2f2f2;}
    #listcustomert{
		width:1280px;
		height: 1100px;
		top:400px;
		left:500px;
		position: absolute;
		overflow-y: auto;
		
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
<div id="Material" >
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
		<rect fill="rgba(255,255,255,1)" id="Rectangle_10" rx="20" ry="20" x="0" y="0" width="1413" height="1336">
		</rect>
	</svg>
	<div id="Group_18">
		<div id="MAIN_MENU">
			<span>MAIN MENU</span>
		</div>
		<div id="Group_16">
			<div id="Home">
				<a href="Homepage.php">Home</a>
			</div>
			<img id="home_run" src="home_run.png" srcset="home_run.png 1x, home_run@2x.png 2x">
		</div>
		<div  id="Group_17">
			<div id="Employee">
			<a href="Employee.php">Employee</a>
			</div>
			<img id="home_run_bj" src="home_run_bj.png" srcset="home_run_bj.png 1x, home_run_bj@2x.png 2x">
		</div>
		<div  id="Group_11">
			<div id="Product">
			<a href="Product.php">Product</a>
			</div>
			<img id="home_run_bm" src="home_run_bm.png" srcset="home_run_bm.png 1x, home_run_bm@2x.png 2x">
		</div>
		<div id="Group_12">
			<div id="Material_bo">
			<a href="Material.php">Material</a>
			</div>
			<img id="home_run_bp" src="home_run_bp.png" srcset="home_run_bp.png 1x, home_run_bp@2x.png 2x">
		</div>
		<div  id="Group_13">
			<div id="Customer">
			<a href="Customer.php">Customer</a>
			</div>
			<img id="home_run_bs" src="home_run_bs.png" srcset="home_run_bs.png 1x, home_run_bs@2x.png 2x">
		</div>
		
		<div id="Group_15">
			<div id="Logout">
			<a href="Login.php">Logout</a>
			</div>
			<img id="home_run_by" src="home_run_by.png" srcset="home_run_by.png 1x, home_run_by@2x.png 2x">
		</div>
	</div>
	<div id="Group_20">
		
	</div>
	<div id="Group_24">
		<div id="Material_b">
			<span>Material</span>
		</div>
		<svg class="Ellipse_2">
			<ellipse fill="rgba(74,84,190,1)" id="Ellipse_2" rx="9" ry="9" cx="9" cy="9">
			</ellipse>
		</svg>
	</div>
	
	</svg>
	<div id="Group_26">
		<div id="Group_23">
			
			<img id="down_arrow" src="down_arrow.png" srcset="down_arrow.png 1x, down_arrow@2x.png 2x">
			<svg class="Line_1" viewBox="0 0 0.5 37.999">
				<path fill="transparent" stroke="rgba(255,255,255,1)" stroke-width="0.5px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_1" d="M 0 0 L 0 37.9990348815918">
				</path>
			</svg>
		</div>
		<div id="Group_25">
		<form action="Material.php" method="POST">
			<div id="Enter_name_or_ID">
			<input type= "text" id = "enter"name= "search"placeholder="Enter ID">
			<input type = "submit" id="sub" value="Search">
			</div>
			<img id="search__1_" src="search__1_.png" srcset="search__1_.png 1x, search__1_@2x.png 2x">
			</form>
	</div>
	</div>
	</div>
	<a href="Add_material.php">
	<div  id="Group_68">
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
<div id="listcustomert">
<table>
			<tr>
                 <th>ID</th>
				<th>Name</th>
				<th>Amount</th>
				<th>Price</th>
				<th>total</th>
                
			</tr>
			<?php
			 while($row = $result->fetch_assoc()){
			echo "<tr>";
					
					echo"<td>".$row['Mssn']."</td>"
					."<td>".$row['Mname']."</td>".
					"<td>".$row['Amount']."</td>".
					"<td>".$row['Mprice']."</td>".
					"<td>".$row['Mprice']*$row['Amount']."</td>".
                    "<td><a href='DeleteMat.php?id=".$row['Mssn']."'><input type ='button' value='Delete' id='delete'></a></td>";
                   
			echo "</tr>";
			
			 }?>

		
		</table>
			</div>
	</div>
</div>
</body>
</html>