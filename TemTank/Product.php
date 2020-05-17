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

	$result = $conn->query("SELECT DISTINCT Pssn,Pname,Amount,Pprice FROM Production ORDER BY Pssn ");
	$result2 = "SELECT DISTINCT Pssn,Pname,Amount,Pprice FROM Production WHERE Pssn='$ID 'ORDER BY Pssn";
    if(isset($_POST['search']))
    {
        if($_POST['search']=="")
        {
			$result = $conn->query("SELECT DISTINCT Pssn,Pname,Amount,Pprice FROM Production ORDER BY Pssn ");
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
<title>Product</title>
<style id="applicationStylesheet" type="text/css">
	
	#Product {
		position: absolute;
		width: 1920px;
		height: 1442px;
		background-color: rgba(248,250,253,1);
		overflow: hidden;
		cursor: pointer;
		
	}
	a:link{
		text-decoration: none;
		color: rgba(255,255,255,1);
	}
	a:visited{
		text-decoration: none;
		color:  rgba(255,255,255,1);
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
		top: 408px;
	}
	.Rectangle_10 {
		position: absolute;
		overflow: visible;
		width: 1413px;
		height: 1219px;
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
	}
	#Product_bl {
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
	
	#Setting {
		position: absolute;
		left: 59px;
		top: 0px;
		overflow: visible;
		width: 79px;
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
		width: 245px;
		height: 87px;
		left: 513px;
		top: 193px;
		overflow: visible;
	}
	#Product_b {
		position: absolute;
		left: 51px;
		top: 0px;
		overflow: visible;
		width: 195px;
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
	#Group_29 {
		position: absolute;
		width: 60px;
		height: 60px;
		left: 1712px;
		top: 207px;
		overflow: visible;
		
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
	#Group_63 {
		position: absolute;
		width: 280.056px;
		height: 392px;
		left: 1167px;
		top: 405px;
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
	#Duralast_Loaded_Strut_Assembly {
		position: absolute;
		left: 31px;
		top: 251px;
		overflow: visible;
		width: 208px;
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
	#Product_ID___PD001 {
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
	#Remainder___80_pieces {
		position: absolute;
		left: 31px;
		top: 306px;
		overflow: visible;
		width: 133px;
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
	#ID3310_Baht {
		position: absolute;
		left: 31px;
		top: 340px;
		overflow: visible;
		width: 80px;
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
	#Group_63_ct {
		position: absolute;
		width: 280.056px;
		height: 392px;
		left: 1494px;
		top: 405px;
		overflow: visible;
	}
	.Rectangle_16_cu {
		position: absolute;
		overflow: visible;
		width: 280px;
		height: 392px;
		left: 0px;
		top: 0px;
	}
	#Path_5_cv {
		position: absolute;
		width: 198.048px;
		height: 155.868px;
		left: 41px;
		top: 36.132px;
		overflow: visible;
	}
	.Path_6_cw {
		overflow: visible;
		position: absolute;
		width: 280.056px;
		height: 1px;
		left: 0px;
		top: 230.041px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Exedy_Clutch_Set {
		position: absolute;
		left: 31px;
		top: 251px;
		overflow: visible;
		width: 109px;
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
	#Product_ID___PD002 {
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
	#Remainder___54_pieces___ {
		position: absolute;
		left: 31px;
		top: 306px;
		overflow: visible;
		width: 145px;
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
	#ID6500_Baht {
		position: absolute;
		left: 31px;
		top: 340px;
		overflow: visible;
		width: 80px;
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
	#Group_63_c {
		position: absolute;
		width: 280.056px;
		height: 392px;
		left: 513px;
		top: 858px;
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
		top: 34.132px;
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
	#MOOG_Super_Strength_U_Joint {
		position: absolute;
		left: 31px;
		top: 251px;
		overflow: visible;
		width: 195px;
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
	#Remainder___20_pieces___ {
		position: absolute;
		left: 31px;
		top: 306px;
		overflow: visible;
		width: 145px;
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
	#ID850_Baht {
		position: absolute;
		left: 31px;
		top: 340px;
		overflow: visible;
		width: 70px;
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
	#Group_63_da {
		position: absolute;
		width: 280.056px;
		height: 392px;
		left: 840px;
		top: 858px;
		overflow: visible;
	}
	.Rectangle_16_da {
		position: absolute;
		overflow: visible;
		width: 280px;
		height: 392px;
		left: 0px;
		top: 0px;
	}
	#Path_5_db {
		position: absolute;
		width: 198.048px;
		height: 155.868px;
		left: 41px;
		top: 36.132px;
		overflow: visible;
	}
	.Path_6_dc {
		overflow: visible;
		position: absolute;
		width: 280.056px;
		height: 1px;
		left: 0px;
		top: 230.041px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Pioneer_Flywheel___Automatic__ {
		position: absolute;
		left: 31px;
		top: 250px;
		overflow: visible;
		width: 193px;
		white-space: nowrap;
		line-height: 18px;
		margin-top: -2.5px;
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
		top: 296px;
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
	#Remainder___out_of_stock___ {
		position: absolute;
		left: 31px;
		top: 313px;
		overflow: visible;
		width: 160px;
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
	#ID4600_Baht_dh {
		position: absolute;
		left: 31px;
		top: 340px;
		overflow: visible;
		width: 80px;
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
	#ID4600_Baht_dh {
		position: absolute;
		left: 31px;
		top: 340px;
		overflow: visible;
		width: 80px;
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
	#Group_63_di {
		position: absolute;
		width: 280.056px;
		height: 392px;
		left: 840px;
		top: 405px;
		overflow: visible;
	}
	.Rectangle_16_dj {
		position: absolute;
		overflow: visible;
		width: 280px;
		height: 392px;
		left: 0px;
		top: 0px;
	}
	#Path_5_dk {
		position: absolute;
		width: 198.048px;
		height: 155.868px;
		left: 41px;
		top: 36.132px;
		overflow: visible;
	}
	.Path_6_dl {
		overflow: visible;
		position: absolute;
		width: 280.056px;
		height: 1px;
		left: 0px;
		top: 230.041px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Duralast_Gold_New_Alternator {
		position: absolute;
		left: 31px;
		top: 251px;
		overflow: visible;
		width: 190px;
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
	#Product_ID___PD005 {
		position: absolute;
		left: 31px;
		top: 290px;
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
	#Remainder___110_pieces___ {
		position: absolute;
		left: 31px;
		top: 308px;
		overflow: visible;
		width: 128px;
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
	#ID4600_Baht_dp {
		position: absolute;
		left: 31px;
		top: 340px;
		overflow: visible;
		width: 80px;
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
	#Group_63_dq {
		position: absolute;
		width: 280.056px;
		height: 392px;
		left: 513px;
		top: 405px;
		overflow: visible;
	}
	.Rectangle_16_dr {
		position: absolute;
		overflow: visible;
		width: 280px;
		height: 392px;
		left: 0px;
		top: 0px;
	}
	#Path_5_ds {
		position: absolute;
		width: 198.048px;
		height: 155.868px;
		left: 41px;
		top: 36.132px;
		overflow: visible;
	}
	.Path_6_dt {
		overflow: visible;
		position: absolute;
		width: 280.056px;
		height: 1px;
		left: 0px;
		top: 230.041px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Dorman_Intercooler_Boot_Kit_ {
		position: absolute;
		left: 31px;
		top: 251px;
		overflow: visible;
		width: 186px;
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
	#Product_ID___PD006 {
		position: absolute;
		left: 31px;
		top: 290px;
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
	#Remainder___75_pieces___ {
		position: absolute;
		left: 31px;
		top: 308px;
		overflow: visible;
		width: 121px;
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
	#ID6880_Baht {
		position: absolute;
		left: 31px;
		top: 340px;
		overflow: visible;
		width: 80px;
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
	#Group_63_dy {
		position: absolute;
		width: 280.056px;
		height: 392px;
		left: 1167px;
		top: 858px;
		overflow: visible;
	}
	.Rectangle_16_dz {
		position: absolute;
		overflow: visible;
		width: 280px;
		height: 392px;
		left: 0px;
		top: 0px;
	}
	#Path_5_d {
		position: absolute;
		width: 198.048px;
		height: 155.868px;
		left: 41px;
		top: 36.132px;
		overflow: visible;
	}
	.Path_6_d {
		overflow: visible;
		position: absolute;
		width: 280.056px;
		height: 1px;
		left: 0px;
		top: 230.041px;
		transform: matrix(1,0,0,1,0,0);
	}
	#STP_Air_Filter {
		position: absolute;
		left: 31px;
		top: 251px;
		overflow: visible;
		width: 85px;
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
	#Product_ID___PD007 {
		position: absolute;
		left: 31px;
		top: 290px;
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
	#Remainder___13_pieces___ {
		position: absolute;
		left: 31px;
		top: 308px;
		overflow: visible;
		width: 121px;
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
	#ID480_Baht {
		position: absolute;
		left: 31px;
		top: 340px;
		overflow: visible;
		width: 70px;
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
	#Group_69 {
		position: absolute;
		width: 60px;
		height: 60px;
		left: 1631px;
		top: 207px;
		overflow: visible;
		--web-animation: fadein 0.3s ease-out;
		--web-action-type: page;
		--web-action-target: Calculate_price___1.html;
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
		height: 900px;
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
<div id="Product" >
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
		<rect fill="rgba(255,255,255,1)" id="Rectangle_10" rx="20" ry="20" x="0" y="0" width="1413" height="1219">
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
		<div  id="Group_17">
			<div id="Employee">
			<a href="/Employee.php">Employee</a>
			</div>
			<img id="home_run_bj" src="home_run_bj.png" srcset="home_run_bj.png 1x, home_run_bj@2x.png 2x">
		</div>
		<div id="Group_11">
			<div id="Product_bl">
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
	<div id="Group_24">
		<div id="Product_b">
			<span>Product</span>
		</div>
		<svg class="Ellipse_2">
			<ellipse fill="rgba(74,84,190,1)" id="Ellipse_2" rx="9" ry="9" cx="9" cy="9">
			</ellipse>
		</svg>
	</div>
	
	</svg>
	<div id="Group_26">
		<div id="Group_23">
			
		</div>
		<div id="Group_25">
		<form action="Product.php" method="POST">
			<div id="Enter_name_or_ID">
			<input type= "text" id = "enter" name="search"placeholder="Enter ID">
			<input type = "submit" id="sub" value="Search">
			</div>
			<img id="search__1_" src="search__1_.png" srcset="search__1_.png 1x, search__1_@2x.png 2x">
			</form>
	</div>
	</div>
	</div>
	<a href="Add_product.php">
	<div  id="Group_29">
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
				<th>Total</th>
                
			</tr>
			<?php
			 while($row = $result->fetch_assoc()){
			echo "<tr>";
					
					echo"<td>".$row['Pssn']."</td>"
					."<td>".$row['Pname']."</td>".
					"<td>".$row['Amount']."</td>".
					"<td>".$row['Pprice']."</td>".
					"<td>".$row['Pprice']*$row['Amount']."</td>".
                    "<td><a href='DeletePro.php?id=".$row['Pssn']."'><input Pssntype ='button' value='Delete' id='delete'></a></td>";
                   
			echo "</tr>";
			
			 }?>

</div>
</body>
</html>