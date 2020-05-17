<?php
	session_start();

    //php code here

    //create variable
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "TemTank";
    $ID = $_POST['search'];
    $check=false;
    //create connection
    $conn = new mysqli($servername,$username,$password,$dbname);

    //check db connection
    if($conn->connect_error){
        die("Can't connect to database");
    }
    // echo "Connected";
    $result2 =  "SELECT Cssn,Cname,CLocation,CPhone FROM Customer WHERE Cssn='$ID'";
    $result = $conn->query("SELECT Cssn,Cname,CLocation,CPhone FROM Customer ORDER BY Cssn ");
    if(isset($_POST['search']))
    {
        if($_POST['search']=="")
        {
            $result = $conn->query("SELECT Cssn,Cname,CLocation,CPhone FROM Customer ORDER BY Cssn ");
        }
        else
        {
        echo isset($_POST['search']);
        $result=$conn->query($result2);
        }
    }
   
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
    <style id="applicationStylesheet" type="text/css">
        .mediaViewInfo {
            --web-view-name: Customer;
            --web-view-id: Customer;
            --web-scale-on-resize: true;
            --web-enable-deep-linking: true;
        }
        
        :root {
            --web-view-ids: Customer;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            border: none;
        }
        
        #Customer {
            position: absolute;
            width: 1920px;
            height: 2219px;
            background-color: rgba(248, 250, 253, 1);
            overflow: hidden;
            --web-view-name: Customer;
            --web-view-id: Customer;
            --web-scale-on-resize: true;
            --web-enable-deep-linking: true;
        }
        a:link{
            text-decoration: none;
		    color :rgba(255,255,255,1);
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
            color: rgba(255, 255, 255, 1);
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
            color: rgba(39, 39, 39, 1);
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
            color: rgba(39, 39, 39, 1);
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
            top: 589px;
        }
        
        .Rectangle_10 {
            position: absolute;
            overflow: visible;
            width: 1413px;
            height: 2022px;
            left: 437px;
            top: 140px;
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
            color: rgba(215, 215, 255, 1);
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
            color: rgba(255, 255, 255, 1);
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
            --web-animation: fadein 0.3s ease-out;
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
            color: rgba(255, 255, 255, 1);
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
            color: rgba(255, 255, 255, 1);
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
            color: rgba(255, 255, 255, 1);
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
        }
        
        #Customer_br {
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
            color: rgba(255, 255, 255, 1);
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
            color: rgba(255, 255, 255, 1);
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
            color: rgba(197, 197, 197, 1);
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
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #Group_24 {
            position: absolute;
            width: 290px;
            height: 87px;
            left: 501px;
            top: 196px;
            overflow: visible;
        }
        
        #Customer_b {
            position: absolute;
            left: 54px;
            top: 0px;
            overflow: visible;
            width: 237px;
            white-space: nowrap;
            line-height: 107px;
            margin-top: -29.5px;
            text-align: center;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: bold;
            font-size: 48px;
            color: rgba(39, 39, 39, 1);
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
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #Group_26 {
            position: absolute;
            width: 528px;
            height: 37.999px;
            left: 350px;
            top: 299px;
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
		height: 1200px;
		top:400px;
		left:500px;
		position: absolute;
		overflow-y: scroll;
		
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
            color: rgba(139, 139, 139, 1);
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
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #Group_25 {
            position: absolute;
            width: 310px;
            height: 36px;
            left: 218px;
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
            color: rgba(193, 193, 193, 1);
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
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #Name {
            position: absolute;
            left: 738px;
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
            color: rgba(139, 139, 139, 1);
        }
        
        #ID {
            position: absolute;
            left: 575px;
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
            color: rgba(139, 139, 139, 1);
        }
        
        #Adress {
            position: absolute;
            left: 1023px;
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
            color: rgba(139, 139, 139, 1);
        }
        
        #Phone {
            position: absolute;
            left: 1611px;
            top: 387px;
            overflow: visible;
            width: 51px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: center;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(139, 139, 139, 1);
        }
        
        #Repeat_Grid_2 {
            position: absolute;
            width: 1275.652px;
            height: 1711px;
            left: 505.5px;
            top: 436px;
            overflow: hidden;
        }
        
        #Repeat_Grid_2_0 {
            position: absolute;
            width: 1275.652px;
            height: 165.5px;
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
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #C0001 {
            position: absolute;
            left: 69.5px;
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
            color: rgba(39, 39, 39, 1);
        }
        
        #Hussein_Wagner {
            position: absolute;
            left: 232.5px;
            top: 0px;
            overflow: visible;
            width: 128px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #ID991_Spring_Ave__Tewksbury__M {
            position: absolute;
            left: 517.5px;
            top: 0px;
            overflow: visible;
            width: 304px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #_66_842498761 {
            position: absolute;
            left: 1066.5px;
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
            color: rgba(74, 84, 190, 1);
        }
        
        #Path_4_cu {
            opacity: 0.17;
        }
        
        .Path_4_cu {
            overflow: visible;
            position: absolute;
            width: 1275.652px;
            height: 1px;
            left: 0px;
            top: 103.5px;
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #C0002 {
            position: absolute;
            left: 69.5px;
            top: 62px;
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
            color: rgba(39, 39, 39, 1);
        }
        
        #Saim_Frazier {
            position: absolute;
            left: 232.5px;
            top: 62px;
            overflow: visible;
            width: 96px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #ID444_North_Tarkiln_Hill_Lane_ {
            position: absolute;
            left: 517.5px;
            top: 62px;
            overflow: visible;
            width: 410px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #_66_142447821 {
            position: absolute;
            left: 1066.5px;
            top: 62px;
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
            color: rgba(74, 84, 190, 1);
        }
        
        #Path_4_cz {
            opacity: 0.17;
        }
        
        .Path_4_cz {
            overflow: visible;
            position: absolute;
            width: 1275.652px;
            height: 1px;
            left: 0px;
            top: 165.5px;
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #C0003 {
            position: absolute;
            left: 69.5px;
            top: 124px;
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
            color: rgba(39, 39, 39, 1);
        }
        
        #Gracie_May_Easton {
            position: absolute;
            left: 232.5px;
            top: 124px;
            overflow: visible;
            width: 146px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #ID926_NW__Longbranch_Lane_Mank {
            position: absolute;
            left: 517.5px;
            top: 124px;
            overflow: visible;
            width: 373px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #_66_657498730 {
            position: absolute;
            left: 1066.5px;
            top: 124px;
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
            color: rgba(74, 84, 190, 1);
        }
        
        #Repeat_Grid_2_1 {
            position: absolute;
            width: 1275.652px;
            height: 165.5px;
            left: 0px;
            top: 186px;
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
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #C0001_c {
            position: absolute;
            left: 69.5px;
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
            color: rgba(39, 39, 39, 1);
        }
        
        #Hussein_Wagner_c {
            position: absolute;
            left: 232.5px;
            top: 0px;
            overflow: visible;
            width: 128px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #ID991_Spring_Ave__Tewksbury__M_c {
            position: absolute;
            left: 517.5px;
            top: 0px;
            overflow: visible;
            width: 304px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #_66_842498761_c {
            position: absolute;
            left: 1066.5px;
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
            color: rgba(74, 84, 190, 1);
        }
        
        #Path_4_da {
            opacity: 0.17;
        }
        
        .Path_4_da {
            overflow: visible;
            position: absolute;
            width: 1275.652px;
            height: 1px;
            left: 0px;
            top: 103.5px;
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #C0002_db {
            position: absolute;
            left: 69.5px;
            top: 62px;
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
            color: rgba(39, 39, 39, 1);
        }
        
        #Saim_Frazier_dc {
            position: absolute;
            left: 232.5px;
            top: 62px;
            overflow: visible;
            width: 96px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #ID444_North_Tarkiln_Hill_Lane__dd {
            position: absolute;
            left: 517.5px;
            top: 62px;
            overflow: visible;
            width: 410px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #_66_142447821_de {
            position: absolute;
            left: 1066.5px;
            top: 62px;
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
            color: rgba(74, 84, 190, 1);
        }
        
        #Path_4_df {
            opacity: 0.17;
        }
        
        .Path_4_df {
            overflow: visible;
            position: absolute;
            width: 1275.652px;
            height: 1px;
            left: 0px;
            top: 165.5px;
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #C0003_dg {
            position: absolute;
            left: 69.5px;
            top: 124px;
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
            color: rgba(39, 39, 39, 1);
        }
        
        #Gracie_May_Easton_dh {
            position: absolute;
            left: 232.5px;
            top: 124px;
            overflow: visible;
            width: 146px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #ID926_NW__Longbranch_Lane_Mank_di {
            position: absolute;
            left: 517.5px;
            top: 124px;
            overflow: visible;
            width: 373px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #_66_657498730_dj {
            position: absolute;
            left: 1066.5px;
            top: 124px;
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
            color: rgba(74, 84, 190, 1);
        }
        
        #Repeat_Grid_2_2 {
            position: absolute;
            width: 1275.652px;
            height: 165.5px;
            left: 0px;
            top: 372px;
            overflow: visible;
        }
        
        #Path_4_dl {
            opacity: 0.17;
        }
        
        .Path_4_dl {
            overflow: visible;
            position: absolute;
            width: 1275.652px;
            height: 1px;
            left: 0px;
            top: 41.5px;
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #C0001_dm {
            position: absolute;
            left: 69.5px;
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
            color: rgba(39, 39, 39, 1);
        }
        
        #Hussein_Wagner_dn {
            position: absolute;
            left: 232.5px;
            top: 0px;
            overflow: visible;
            width: 128px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #ID991_Spring_Ave__Tewksbury__M_do {
            position: absolute;
            left: 517.5px;
            top: 0px;
            overflow: visible;
            width: 304px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #_66_842498761_dp {
            position: absolute;
            left: 1066.5px;
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
            color: rgba(74, 84, 190, 1);
        }
        
        #Path_4_dq {
            opacity: 0.17;
        }
        
        .Path_4_dq {
            overflow: visible;
            position: absolute;
            width: 1275.652px;
            height: 1px;
            left: 0px;
            top: 103.5px;
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #C0002_dr {
            position: absolute;
            left: 69.5px;
            top: 62px;
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
            color: rgba(39, 39, 39, 1);
        }
        
        #Saim_Frazier_ds {
            position: absolute;
            left: 232.5px;
            top: 62px;
            overflow: visible;
            width: 96px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #ID444_North_Tarkiln_Hill_Lane__dt {
            position: absolute;
            left: 517.5px;
            top: 62px;
            overflow: visible;
            width: 410px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #_66_142447821_du {
            position: absolute;
            left: 1066.5px;
            top: 62px;
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
            color: rgba(74, 84, 190, 1);
        }
        
        #Path_4_dv {
            opacity: 0.17;
        }
        
        .Path_4_dv {
            overflow: visible;
            position: absolute;
            width: 1275.652px;
            height: 1px;
            left: 0px;
            top: 165.5px;
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #C0003_dw {
            position: absolute;
            left: 69.5px;
            top: 124px;
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
            color: rgba(39, 39, 39, 1);
        }
        
        #Gracie_May_Easton_dx {
            position: absolute;
            left: 232.5px;
            top: 124px;
            overflow: visible;
            width: 146px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #ID926_NW__Longbranch_Lane_Mank_dy {
            position: absolute;
            left: 517.5px;
            top: 124px;
            overflow: visible;
            width: 373px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #_66_657498730_dz {
            position: absolute;
            left: 1066.5px;
            top: 124px;
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
            color: rgba(74, 84, 190, 1);
        }
        
        #Repeat_Grid_2_3 {
            position: absolute;
            width: 1275.652px;
            height: 165.5px;
            left: 0px;
            top: 558px;
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
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #C0001_d {
            position: absolute;
            left: 69.5px;
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
            color: rgba(39, 39, 39, 1);
        }
        
        #Hussein_Wagner_d {
            position: absolute;
            left: 232.5px;
            top: 0px;
            overflow: visible;
            width: 128px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #ID991_Spring_Ave__Tewksbury__M_d {
            position: absolute;
            left: 517.5px;
            top: 0px;
            overflow: visible;
            width: 304px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #_66_842498761_d {
            position: absolute;
            left: 1066.5px;
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
            color: rgba(74, 84, 190, 1);
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
            top: 103.5px;
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #C0002_d {
            position: absolute;
            left: 69.5px;
            top: 62px;
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
            color: rgba(39, 39, 39, 1);
        }
        
        #Saim_Frazier_d {
            position: absolute;
            left: 232.5px;
            top: 62px;
            overflow: visible;
            width: 96px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #ID444_North_Tarkiln_Hill_Lane__d {
            position: absolute;
            left: 517.5px;
            top: 62px;
            overflow: visible;
            width: 410px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #_66_142447821_ea {
            position: absolute;
            left: 1066.5px;
            top: 62px;
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
            color: rgba(74, 84, 190, 1);
        }
        
        #Path_4_eb {
            opacity: 0.17;
        }
        
        .Path_4_eb {
            overflow: visible;
            position: absolute;
            width: 1275.652px;
            height: 1px;
            left: 0px;
            top: 165.5px;
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #C0003_ec {
            position: absolute;
            left: 69.5px;
            top: 124px;
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
            color: rgba(39, 39, 39, 1);
        }
        
        #Gracie_May_Easton_ed {
            position: absolute;
            left: 232.5px;
            top: 124px;
            overflow: visible;
            width: 146px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #ID926_NW__Longbranch_Lane_Mank_ee {
            position: absolute;
            left: 517.5px;
            top: 124px;
            overflow: visible;
            width: 373px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #_66_657498730_ef {
            position: absolute;
            left: 1066.5px;
            top: 124px;
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
            color: rgba(74, 84, 190, 1);
        }
        
        #Repeat_Grid_2_4 {
            position: absolute;
            width: 1275.652px;
            height: 165.5px;
            left: 0px;
            top: 744px;
            overflow: visible;
        }
        
        #Path_4_eh {
            opacity: 0.17;
        }
        
        .Path_4_eh {
            overflow: visible;
            position: absolute;
            width: 1275.652px;
            height: 1px;
            left: 0px;
            top: 41.5px;
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #C0001_ei {
            position: absolute;
            left: 69.5px;
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
            color: rgba(39, 39, 39, 1);
        }
        
        #Hussein_Wagner_ej {
            position: absolute;
            left: 232.5px;
            top: 0px;
            overflow: visible;
            width: 128px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #ID991_Spring_Ave__Tewksbury__M_ek {
            position: absolute;
            left: 517.5px;
            top: 0px;
            overflow: visible;
            width: 304px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #_66_842498761_el {
            position: absolute;
            left: 1066.5px;
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
            color: rgba(74, 84, 190, 1);
        }
        
        #Path_4_em {
            opacity: 0.17;
        }
        
        .Path_4_em {
            overflow: visible;
            position: absolute;
            width: 1275.652px;
            height: 1px;
            left: 0px;
            top: 103.5px;
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #C0002_en {
            position: absolute;
            left: 69.5px;
            top: 62px;
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
            color: rgba(39, 39, 39, 1);
        }
        
        #Saim_Frazier_eo {
            position: absolute;
            left: 232.5px;
            top: 62px;
            overflow: visible;
            width: 96px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #ID444_North_Tarkiln_Hill_Lane__ep {
            position: absolute;
            left: 517.5px;
            top: 62px;
            overflow: visible;
            width: 410px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #_66_142447821_eq {
            position: absolute;
            left: 1066.5px;
            top: 62px;
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
            color: rgba(74, 84, 190, 1);
        }
        
        #Path_4_er {
            opacity: 0.17;
        }
        
        .Path_4_er {
            overflow: visible;
            position: absolute;
            width: 1275.652px;
            height: 1px;
            left: 0px;
            top: 165.5px;
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #C0003_es {
            position: absolute;
            left: 69.5px;
            top: 124px;
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
            color: rgba(39, 39, 39, 1);
        }
        
        #Gracie_May_Easton_et {
            position: absolute;
            left: 232.5px;
            top: 124px;
            overflow: visible;
            width: 146px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #ID926_NW__Longbranch_Lane_Mank_eu {
            position: absolute;
            left: 517.5px;
            top: 124px;
            overflow: visible;
            width: 373px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #_66_657498730_ev {
            position: absolute;
            left: 1066.5px;
            top: 124px;
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
            color: rgba(74, 84, 190, 1);
        }
        
        #Repeat_Grid_2_5 {
            position: absolute;
            width: 1275.652px;
            height: 165.5px;
            left: 0px;
            top: 930px;
            overflow: visible;
        }
        
        #Path_4_ex {
            opacity: 0.17;
        }
        
        .Path_4_ex {
            overflow: visible;
            position: absolute;
            width: 1275.652px;
            height: 1px;
            left: 0px;
            top: 41.5px;
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #C0001_ey {
            position: absolute;
            left: 69.5px;
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
            color: rgba(39, 39, 39, 1);
        }
        
        #Hussein_Wagner_ez {
            position: absolute;
            left: 232.5px;
            top: 0px;
            overflow: visible;
            width: 128px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #ID991_Spring_Ave__Tewksbury__M_e {
            position: absolute;
            left: 517.5px;
            top: 0px;
            overflow: visible;
            width: 304px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #_66_842498761_e {
            position: absolute;
            left: 1066.5px;
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
            color: rgba(74, 84, 190, 1);
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
            top: 103.5px;
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #C0002_e {
            position: absolute;
            left: 69.5px;
            top: 62px;
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
            color: rgba(39, 39, 39, 1);
        }
        
        #Saim_Frazier_e {
            position: absolute;
            left: 232.5px;
            top: 62px;
            overflow: visible;
            width: 96px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #ID444_North_Tarkiln_Hill_Lane__e {
            position: absolute;
            left: 517.5px;
            top: 62px;
            overflow: visible;
            width: 410px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #_66_142447821_e {
            position: absolute;
            left: 1066.5px;
            top: 62px;
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
            color: rgba(74, 84, 190, 1);
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
            top: 165.5px;
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #C0003_e {
            position: absolute;
            left: 69.5px;
            top: 124px;
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
            color: rgba(39, 39, 39, 1);
        }
        
        #Gracie_May_Easton_e {
            position: absolute;
            left: 232.5px;
            top: 124px;
            overflow: visible;
            width: 146px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #ID926_NW__Longbranch_Lane_Mank_fa {
            position: absolute;
            left: 517.5px;
            top: 124px;
            overflow: visible;
            width: 373px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #_66_657498730_fb {
            position: absolute;
            left: 1066.5px;
            top: 124px;
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
            color: rgba(74, 84, 190, 1);
        }
        
        #Repeat_Grid_2_6 {
            position: absolute;
            width: 1275.652px;
            height: 165.5px;
            left: 0px;
            top: 1116px;
            overflow: visible;
        }
        
        #Path_4_fd {
            opacity: 0.17;
        }
        
        .Path_4_fd {
            overflow: visible;
            position: absolute;
            width: 1275.652px;
            height: 1px;
            left: 0px;
            top: 41.5px;
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #C0001_fe {
            position: absolute;
            left: 69.5px;
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
            color: rgba(39, 39, 39, 1);
        }
        
        #Hussein_Wagner_ff {
            position: absolute;
            left: 232.5px;
            top: 0px;
            overflow: visible;
            width: 128px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #ID991_Spring_Ave__Tewksbury__M_fg {
            position: absolute;
            left: 517.5px;
            top: 0px;
            overflow: visible;
            width: 304px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #_66_842498761_fh {
            position: absolute;
            left: 1066.5px;
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
            color: rgba(74, 84, 190, 1);
        }
        
        #Path_4_fi {
            opacity: 0.17;
        }
        
        .Path_4_fi {
            overflow: visible;
            position: absolute;
            width: 1275.652px;
            height: 1px;
            left: 0px;
            top: 103.5px;
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #C0002_fj {
            position: absolute;
            left: 69.5px;
            top: 62px;
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
            color: rgba(39, 39, 39, 1);
        }
        
        #Saim_Frazier_fk {
            position: absolute;
            left: 232.5px;
            top: 62px;
            overflow: visible;
            width: 96px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #ID444_North_Tarkiln_Hill_Lane__fl {
            position: absolute;
            left: 517.5px;
            top: 62px;
            overflow: visible;
            width: 410px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #_66_142447821_fm {
            position: absolute;
            left: 1066.5px;
            top: 62px;
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
            color: rgba(74, 84, 190, 1);
        }
        
        #Path_4_fn {
            opacity: 0.17;
        }
        
        .Path_4_fn {
            overflow: visible;
            position: absolute;
            width: 1275.652px;
            height: 1px;
            left: 0px;
            top: 165.5px;
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #C0003_fo {
            position: absolute;
            left: 69.5px;
            top: 124px;
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
            color: rgba(39, 39, 39, 1);
        }
        
        #Gracie_May_Easton_fp {
            position: absolute;
            left: 232.5px;
            top: 124px;
            overflow: visible;
            width: 146px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #ID926_NW__Longbranch_Lane_Mank_fq {
            position: absolute;
            left: 517.5px;
            top: 124px;
            overflow: visible;
            width: 373px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #_66_657498730_fr {
            position: absolute;
            left: 1066.5px;
            top: 124px;
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
            color: rgba(74, 84, 190, 1);
        }
        
        #Repeat_Grid_2_7 {
            position: absolute;
            width: 1275.652px;
            height: 165.5px;
            left: 0px;
            top: 1302px;
            overflow: visible;
        }
        
        #Path_4_ft {
            opacity: 0.17;
        }
        
        .Path_4_ft {
            overflow: visible;
            position: absolute;
            width: 1275.652px;
            height: 1px;
            left: 0px;
            top: 41.5px;
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #C0001_fu {
            position: absolute;
            left: 69.5px;
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
            color: rgba(39, 39, 39, 1);
        }
        
        #Hussein_Wagner_fv {
            position: absolute;
            left: 232.5px;
            top: 0px;
            overflow: visible;
            width: 128px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #ID991_Spring_Ave__Tewksbury__M_fw {
            position: absolute;
            left: 517.5px;
            top: 0px;
            overflow: visible;
            width: 304px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #_66_842498761_fx {
            position: absolute;
            left: 1066.5px;
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
            color: rgba(74, 84, 190, 1);
        }
        
        #Path_4_fy {
            opacity: 0.17;
        }
        
        .Path_4_fy {
            overflow: visible;
            position: absolute;
            width: 1275.652px;
            height: 1px;
            left: 0px;
            top: 103.5px;
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #C0002_fz {
            position: absolute;
            left: 69.5px;
            top: 62px;
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
            color: rgba(39, 39, 39, 1);
        }
        
        #Saim_Frazier_f {
            position: absolute;
            left: 232.5px;
            top: 62px;
            overflow: visible;
            width: 96px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #ID444_North_Tarkiln_Hill_Lane__f {
            position: absolute;
            left: 517.5px;
            top: 62px;
            overflow: visible;
            width: 410px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #_66_142447821_f {
            position: absolute;
            left: 1066.5px;
            top: 62px;
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
            color: rgba(74, 84, 190, 1);
        }
        
        #Path_4_f {
            opacity: 0.17;
        }
        
        .Path_4_f {
            overflow: visible;
            position: absolute;
            width: 1275.652px;
            height: 1px;
            left: 0px;
            top: 165.5px;
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #C0003_f {
            position: absolute;
            left: 69.5px;
            top: 124px;
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
            color: rgba(39, 39, 39, 1);
        }
        
        #Gracie_May_Easton_f {
            position: absolute;
            left: 232.5px;
            top: 124px;
            overflow: visible;
            width: 146px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #ID926_NW__Longbranch_Lane_Mank_f {
            position: absolute;
            left: 517.5px;
            top: 124px;
            overflow: visible;
            width: 373px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #_66_657498730_f {
            position: absolute;
            left: 1066.5px;
            top: 124px;
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
            color: rgba(74, 84, 190, 1);
        }
        
        #Repeat_Grid_2_8 {
            position: absolute;
            width: 1275.652px;
            height: 165.5px;
            left: 0px;
            top: 1488px;
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
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #C0001_ga {
            position: absolute;
            left: 69.5px;
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
            color: rgba(39, 39, 39, 1);
        }
        
        #Hussein_Wagner_gb {
            position: absolute;
            left: 232.5px;
            top: 0px;
            overflow: visible;
            width: 128px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #ID991_Spring_Ave__Tewksbury__M_gc {
            position: absolute;
            left: 517.5px;
            top: 0px;
            overflow: visible;
            width: 304px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #_66_842498761_gd {
            position: absolute;
            left: 1066.5px;
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
            color: rgba(74, 84, 190, 1);
        }
        
        #Path_4_ge {
            opacity: 0.17;
        }
        
        .Path_4_ge {
            overflow: visible;
            position: absolute;
            width: 1275.652px;
            height: 1px;
            left: 0px;
            top: 103.5px;
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #C0002_gf {
            position: absolute;
            left: 69.5px;
            top: 62px;
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
            color: rgba(39, 39, 39, 1);
        }
        
        #Saim_Frazier_gg {
            position: absolute;
            left: 232.5px;
            top: 62px;
            overflow: visible;
            width: 96px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #ID444_North_Tarkiln_Hill_Lane__gh {
            position: absolute;
            left: 517.5px;
            top: 62px;
            overflow: visible;
            width: 410px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #_66_142447821_gi {
            position: absolute;
            left: 1066.5px;
            top: 62px;
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
            color: rgba(74, 84, 190, 1);
        }
        
        #Path_4_gj {
            opacity: 0.17;
        }
        
        .Path_4_gj {
            overflow: visible;
            position: absolute;
            width: 1275.652px;
            height: 1px;
            left: 0px;
            top: 165.5px;
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #C0003_gk {
            position: absolute;
            left: 69.5px;
            top: 124px;
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
            color: rgba(39, 39, 39, 1);
        }
        
        #Gracie_May_Easton_gl {
            position: absolute;
            left: 232.5px;
            top: 124px;
            overflow: visible;
            width: 146px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #ID926_NW__Longbranch_Lane_Mank_gm {
            position: absolute;
            left: 517.5px;
            top: 124px;
            overflow: visible;
            width: 373px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #_66_657498730_gn {
            position: absolute;
            left: 1066.5px;
            top: 124px;
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
            color: rgba(74, 84, 190, 1);
        }
        
        #Repeat_Grid_2_9 {
            position: absolute;
            width: 1275.652px;
            height: 165.5px;
            left: 0px;
            top: 1674px;
            overflow: visible;
        }
        
        #Path_4_gp {
            opacity: 0.17;
        }
        
        .Path_4_gp {
            overflow: visible;
            position: absolute;
            width: 1275.652px;
            height: 1px;
            left: 0px;
            top: 41.5px;
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #C0001_gq {
            position: absolute;
            left: 69.5px;
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
            color: rgba(39, 39, 39, 1);
        }
        
        #Hussein_Wagner_gr {
            position: absolute;
            left: 232.5px;
            top: 0px;
            overflow: visible;
            width: 128px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #ID991_Spring_Ave__Tewksbury__M_gs {
            position: absolute;
            left: 517.5px;
            top: 0px;
            overflow: visible;
            width: 304px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #_66_842498761_gt {
            position: absolute;
            left: 1066.5px;
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
            color: rgba(74, 84, 190, 1);
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
            top: 103.5px;
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #C0002_gv {
            position: absolute;
            left: 69.5px;
            top: 62px;
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
            color: rgba(39, 39, 39, 1);
        }
        
        #Saim_Frazier_gw {
            position: absolute;
            left: 232.5px;
            top: 62px;
            overflow: visible;
            width: 96px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #ID444_North_Tarkiln_Hill_Lane__gx {
            position: absolute;
            left: 517.5px;
            top: 62px;
            overflow: visible;
            width: 410px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #_66_142447821_gy {
            position: absolute;
            left: 1066.5px;
            top: 62px;
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
            color: rgba(74, 84, 190, 1);
        }
        
        #Path_4_gz {
            opacity: 0.17;
        }
        
        .Path_4_gz {
            overflow: visible;
            position: absolute;
            width: 1275.652px;
            height: 1px;
            left: 0px;
            top: 165.5px;
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #C0003_g {
            position: absolute;
            left: 69.5px;
            top: 124px;
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
            color: rgba(39, 39, 39, 1);
        }
        
        #Gracie_May_Easton_g {
            position: absolute;
            left: 232.5px;
            top: 124px;
            overflow: visible;
            width: 146px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #ID926_NW__Longbranch_Lane_Mank_g {
            position: absolute;
            left: 517.5px;
            top: 124px;
            overflow: visible;
            width: 373px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -17px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            color: rgba(39, 39, 39, 1);
        }
        
        #_66_657498730_g {
            position: absolute;
            left: 1066.5px;
            top: 124px;
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
            color: rgba(74, 84, 190, 1);
        }
        
        #Group_29 {
            position: absolute;
            width: 60px;
            height: 60px;
            left: 1700px;
            top: 207px;
            overflow: visible;
            --web-animation: fadein undefineds undefined;
            --web-action-type: page;
            --web-action-target: Add_Customer.html;
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
            transform: translate(-1786px, -1016px) matrix(1, 0, 0, 1, 1814, 1030) rotate(-90deg);
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
    <div id="Customer">
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
		<rect fill="rgba(255,255,255,1)" id="Rectangle_10" rx="20" ry="20" x="0" y="0" width="1413" height="2022">
		</rect>
	</svg>
        <div id="Group_18">
            <div id="MAIN_MENU">
                <span>MAIN MENU</span>
            </div>
            <div  id="Group_16">
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
            <div onclick="application.showOverlay('Material',0,1, event)" id="Group_12">
                <div id="Material">
                <a href="Material.php">Material</a>
                </div>
                <img id="home_run_bp" src="home_run_bp.png" srcset="home_run_bp.png 1x, home_run_bp@2x.png 2x">
            </div>
            <div id="Group_13">
                <div id="Customer_br">
                <a href="Customer.php">Customer</a>
                </div>
                <img id="home_run_bs" src="home_run_bs.png" srcset="home_run_bs.png 1x, home_run_bs@2x.png 2x">
            </div>
            
            <div  id="Group_15">
                <div id="Logout">
                <a href="Login.php">Logout</a>
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
            <div id="Customer_b">
                <span>Customer</span>
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
			</svg>
            </div>
            <div id="Group_25">
            <form action="Customer.php" method="POST">
			<div id="Enter_name_or_ID">
			<input type= "text" id = "enter" name='search'placeholder="Enter ID">
			<input type = "submit" id="sub" value="Search">
			</div>
			<img id="search__1_" src="search__1_.png" srcset="search__1_.png 1x, search__1_@2x.png 2x">
			</form>
	</div>
	</div>
        </div>
        <div id="listcustomert">	
		<table>
			<tr>
                 <th>ID</th>
				<th>Name</th>
				<th>Address</th>
                <th>Phone</th>
                
			</tr>
			<?php
			 while($row = $result->fetch_assoc()){
			echo "<tr>";
					
					echo"<td>".$row['Cssn']."</td>"
					."<td>".$row['Cname']."</td>".
					"<td>".$row['CLocation']."</td>".
                    "<td>".$row['CPhone']."</td>".
                    "<td><a href='Deletecus.php?id=".$row['Cssn']."'><input type ='button' value='Delete' id='delete'></a></td>";
                   
			echo "</tr>";
			
			 }?>

		
		</table>
    </div>
    <a href="Add_Customer.php">
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
    </div>
            </a>
</body>

</html>