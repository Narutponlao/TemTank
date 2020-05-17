<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "TemTank";
$id= $_POST['ID'];
$name = $_POST['name'];
$address=$_POST['Address'];
$phone = $_POST['Phone'];
$check=false;
$error =false;
$insert= "INSERT INTO `Customer` VALUES ('$id','$name','$address','$phone')";
$con = new mysqli($servername,$username,$password,$dbname);

if($con->connect_error)
{
    die("Can't connect");

}
if(isset($_POST['ID'])&& $_POST['Address']&&$_POST['name']&&$_POST['Phone'])
{
   if($con->query($insert))
   {
       $check=true;
   }
   else{
       $error=true;
   }
}
else{

}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Add Customer</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <style id="applicationStylesheet" type="text/css">
        .mediaViewInfo {
            --web-view-name: Add Customer;
            --web-view-id: Add_Customer;
            --web-scale-on-resize: true;
            --web-enable-deep-linking: true;
        }
        
         :root {
            --web-view-ids: Add_Customer;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            border: none;
        }
        
        #Add_Customer {
            position: absolute;
            width: 1920px;
            height: 1075px;
            background-color: rgba(248, 250, 253, 1);
            overflow: hidden;
            --web-view-name: Add Customer;
            --web-view-id: Add_Customer;
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
            color: rgba(255, 255, 255, 1);
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
            top: 588px;
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
            height: 849px;
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
            color: rgba(215, 215, 255, 1);
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
            left: 35px;
            top: 337px;
            overflow: visible;
            --web-animation: fadein undefineds undefined;
            --web-action-type: page;
            --web-action-target: Customer.html;
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
            color: rgba(255, 255, 255, 1);
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
            color: rgba(255, 255, 255, 1);
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
            color: rgba(255, 255, 255, 1);
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
            top: 721px;
            overflow: visible;
            --web-animation: fadein 0.3s ease-out;
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
            color: rgba(255, 255, 255, 1);
            letter-spacing: 0.5px;
        }
        
        #home_run_bw {
            position: absolute;
            width: 30px;
            height: 30px;
            left: 0px;
            top: 3px;
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
            color: rgba(197, 197, 197, 1);
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
        
        #Add_New_Customer {
            position: absolute;
            left: 560px;
            top: 220px;
            overflow: visible;
            width: 453px;
            white-space: nowrap;
            line-height: 77px;
            margin-top: -14.5px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: bold;
            font-size: 48px;
            color: rgba(74, 84, 190, 1);
        }
        
        #Group_32 {
            position: absolute;
            width: 468.507px;
            height: 89.804px;
            left: 560.783px;
            top: 454px;
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
            color: rgba(139, 139, 139, 1);
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
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #Keisha_ {
            position: absolute;
            left: 0.217px;
            top: 38px;
            overflow: visible;
            width: 95px;
            white-space: nowrap;
            line-height: 76px;
            margin-top: -24.5px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 27px;
            color: rgba(39, 39, 39, 1);
        }
        
        #Personal_information {
            position: absolute;
            left: 561px;
            top: 366px;
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
            color: rgba(223, 223, 223, 1);
            letter-spacing: 0.2px;
        }
        
        #Group_35 {
            position: absolute;
            width: 470.074px;
            height: 90.361px;
            left: 561px;
            top: 607px;
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
            color: rgba(139, 139, 139, 1);
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
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #Pritchard {
            position: absolute;
            left: 0.217px;
            top: 40px;
            overflow: visible;
            width: 122px;
            white-space: nowrap;
            line-height: 76px;
            margin-top: -24.5px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 27px;
            color: rgba(39, 39, 39, 1);
        }
        
        #Group_41 {
            position: absolute;
            width: 470.074px;
            height: 89.744px;
            left: 1244px;
            top: 454px;
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
            color: rgba(139, 139, 139, 1);
        }
        
        #Line_2_cb {
            opacity: 0.37;
        }
        
        .Line_2_cb {
            overflow: visible;
            position: absolute;
            width: 470.074px;
            height: 0.5px;
            left: 0px;
            top: 89.744px;
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #ID9343_Harrison_Street_Oak_Law {
            position: absolute;
            left: 0.217px;
            top: 39px;
            overflow: visible;
            width: 414px;
            white-space: nowrap;
            line-height: 76px;
            margin-top: -24.5px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 27px;
            color: rgba(39, 39, 39, 1);
        }
        
        #Group_57 {
            position: absolute;
            width: 218px;
            height: 60px;
            left: 1507px;
            top: 841px;
            overflow: visible;
            cursor: pointer;
            --web-animation: ;
            --web-action-type: page;
            --web-action-target: popup_add_Customer.html;
        }
        
        .Rectangle_4 {
            position: absolute;
            overflow: visible;
            width: 218px;
            height: 60px;
            left: 0px;
            top: 0px;
        }
        
       
        
        #Group_58 {
            position: absolute;
            width: 217px;
            height: 60px;
            left: 1210px;
            top: 841px;
            overflow: visible;
            --web-animation: fadein undefineds undefined;
            --web-action-type: page;
            --web-action-target: Customer.html;
            cursor: pointer;
        }
        
        .Rectangle_4_ch {
            position: absolute;
            overflow: visible;
            width: 217px;
            height: 60px;
            left: 0px;
            top: 0px;
        }
        
       
        
        #Group_100 {
            position: absolute;
            width: 470.074px;
            height: 89.744px;
            left: 1244px;
            top: 608px;
            overflow: visible;
        }
        
        #Phone {
            position: absolute;
            left: 0.217px;
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
            color: rgba(139, 139, 139, 1);
        }
        
        #Line_2_cl {
            opacity: 0.37;
        }
        
        .Line_2_cl {
            overflow: visible;
            position: absolute;
            width: 470.074px;
            height: 0.5px;
            left: 0px;
            top: 89.744px;
            transform: matrix(1, 0, 0, 1, 0, 0);
        }
        
        #ID202_555_0138 {
            position: absolute;
            left: 0.217px;
            top: 39px;
            overflow: visible;
            width: 195px;
            white-space: nowrap;
            line-height: 76px;
            margin-top: -24.5px;
            text-align: left;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 27px;
            color: rgba(39, 39, 39, 1);
        }
        .FormAdd{
            position: absolute;
            color:black;
            left: 563px;
            top:500px;
            font-size: 20px;
            color: rgba(139, 139, 139, 1);
            font-family: Sukhumvit Set;
           
            

        }
        input[type=text]{
            
            color: rgba(139, 139, 139, 1);
            border: none;
            border-bottom: 2px solid  rgba(112,112,112,1);
            width: 400px;
            height:50px;
            font-size: 20px;
            padding-left:20px;
        }
        .FormAdd #address{
            padding-left: 630px;
        
        }
        .FormAdd #Address{
           left:655px;
           top:55px;
           width: 400px;

        }
        .FormAdd #phone{
           padding-left:600px;
        }
        .FormAdd #Phone{
            left:655px;
            top:196px;
            width: 400px;
        }
        .FormAdd #Save{
            color:white;
            background-color: rgba(74, 84, 190, 1);
            border: 1px solid rgba(74, 84, 190, 1);
            width: 140px;
            height:40px;
            font-family: Sukhumvit Set;
            font-size: 22px;
            text-align: center;
            border-radius: 32px;
            position: absolute;
            left:920px;


        }
        .FormAdd #cancel
        {
            color:rgba(74, 84, 190, 1);
            background-color: white;
            border: 1px solid rgba(112,112,112,1);
            width: 140px;
            height:40px;
            font-family: Sukhumvit Set;
            font-size: 22px;
            text-align: center;
            border-radius: 32px;
            position: absolute;
            left:760px;
        }
        a{
            color: white;
            text-decoration: none;
        }
        a:visited{
            color: white;
        }
        

    </style>
</head>

<body>
    <div id="Add_Customer">
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
		<rect fill="rgba(255,255,255,1)" id="Rectangle_10" rx="20" ry="20" x="0" y="0" width="1413" height="849">
		</rect>
	</svg>
        <div id="MAIN_MENU">
            <span>MAIN MENU</span>
        </div>
        <div onclick="application.goToTargetView(event)" id="Group_16">
            <div id="Home">
               <a href="Homepage.php"> <span>Home</span></a>
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
        <div id="Group_13">
            <div id="Customer">
                <span>Customer</span>
            </div>
            <img id="home_run_bq" src="home_run_bq.png" srcset="home_run_bq.png 1x, home_run_bq@2x.png 2x">
        </div>
        
        <div  id="Group_15">
            <div id="Logout">
                <span>Logout</span>
            </div>
            <img id="home_run_bw" src="home_run_bw.png" srcset="home_run_bw.png 1x, home_run_bw@2x.png 2x">
        </div>
        
      
        <div id="Add_New_Customer">
            <span>Add New Customer</span>
        </div>
        <h1 id="Personal_information">Personal information</h1>
        <div class="FormAdd">
            <form action="Add_Customer.php" method="POST">
           <label for="name" id="ID">ID</label>
           <label for="Address" id="address">Address</label><br>
           <input type="text" id="ID" name="ID">
           <input type="text" id="Address"  name="Address"><br><br><br>
           <label for="sname" id="name">Name</label>
           <label for="phone" id="phone">Phone</label><br>
           <input type="text" id="name" name="name">
           <input type="text" id="Phone" name="Phone"><br><br><br><br>
           <input type="submit" id="cancel" value="CANCEL">
           <input type="submit" id="Save" value="SAVE">

           
          
    </div>
           
             </form>
    </div>
        
        </div>
    </div>
    <?php
        if($check==true)
        {
    ?>
    <script>
     setTimeout(function() {
        swal({
            title: "Complete!",
            text: "Customer was added",
            type: "success"
        }, function() {
            window.location = "Customer.php"; 
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
            window.location = "Customer.php"; 
        });
    }, 1000);
    </script>
    <?php
            }?>


</body>

</html>