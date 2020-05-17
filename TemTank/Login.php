<?php

 $error = false;
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "TemTank";

$con = new mysqli($servername,$username,$password,$dbname);

if($con->connect_error)
{
    die("Can't connect");

}
if(isset($_POST['username'])&&$_POST['password'])
{
   $user =$_POST['username'];
   $password = md5($_POST['password']);

   $stamt = $con->prepare("SELECT user_id FROM Login WHERE username = ? AND password = ? ");
   $stamt->bind_param('ss',$user,$password);
   $stamt->execute();
   $result = $stamt->get_result();
  if($uid = $result->fetch_assoc())
  {
      
      $_SESSION["uid"] = $uid['user_id'];
      header('Location: /Homepage.php');
  }
  else
        {
           $error=true;
        }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style id="applicationStylesheet" type="text/css">
        #Login {
            position: absolute;
            width: 1430px;
            height: 800px;
            background-color: rgba(255, 255, 255, 1);
            overflow: hidden;
        }
        
        #ID3327590 {
            position: absolute;
            width: 800px;
            height: 600px;
            left: 79px;
            top: 172px;
            overflow: visible;
        }
        
        .Rectangle_1 {
            position: absolute;
            overflow: visible;
            width: 655px;
            height: 1080px;
            left: 900px;
            top: 0px;
        }
        
        #welcome__Sign_in_to_your_accou {
            position: absolute;
            left: 1020px;
            top: 140px;
            overflow: visible;
            width: 335px;
            white-space: nowrap;
            line-height: 40px;
            margin-top: -5px;
            text-align: center;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: bold;
            font-size: 30px;
            color: rgba(255, 255, 255, 1);
            letter-spacing: 0.6px;
        }
        
        #Group_1 {
            position: absolute;
            width: 436px;
            height: 354px;
            left: 970px;
            top: 260px;
            overflow: visible;
        }
        
        .Rectangle_2 {
            position: absolute;
            overflow: visible;
            width: 436px;
            height: 64px;
            left: 0px;
            top: 0px;
        }
        
        .Rectangle_3 {
            position: absolute;
            overflow: visible;
            width: 436px;
            height: 64px;
            left: 0px;
            top: 103px;
        }
        
        #user__2_ {
            position: absolute;
            width: 29px;
            height: 29px;
            left: 33px;
            top: 16px;
            overflow: visible;
        }
        
        #key {
            position: absolute;
            width: 31px;
            height: 31px;
            left: 33px;
            top: 119px;
            overflow: visible;
        }
        
        #Username {
            position: absolute;
            left: 79px;
            top: 21px;
            overflow: visible;
            width: 97px;
            white-space: nowrap;
            line-height: 40px;
            margin-top: -9px;
            text-align: center;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: lighter;
            font-size: 22px;
            color: rgba(215, 215, 255, 1);
        }
        
        #Login_ {
            position: absolute;
            left: 187px;
            top: 301px;
            overflow: visible;
            width: 63px;
            white-space: nowrap;
            line-height: 40px;
            margin-top: -8.5px;
            text-align: center;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 23px;
            color: rgba(255, 255, 255, 1);
        }
        
        #Group_2 {
            position: absolute;
            width: 150px;
            height: 29px;
            left: 1110px;
            top: 600px;
            overflow: visible;
        }
        
        #question {
            position: absolute;
            width: 17px;
            height: 17px;
            left: 0px;
            top: 6px;
            overflow: visible;
        }
        
        #Help___Support {
            position: absolute;
            left: 24px;
            top: 0px;
            overflow: visible;
            width: 127px;
            white-space: nowrap;
            line-height: 30px;
            margin-top: -6.5px;
            text-align: center;
            font-family: Sukhumvit Set;
            font-style: normal;
            font-weight: normal;
            font-size: 17px;
            color: rgba(215, 215, 255, 1);
        }
        
        #Group_5 {
            position: absolute;
            width: 181px;
            height: 35px;
            left: 48px;
            top: 47px;
            overflow: visible;
        }
        
        #database {
            position: absolute;
            left: 49px;
            top: 0px;
            overflow: visible;
            width: 133px;
            white-space: nowrap;
            line-height: 50px;
            margin-top: -10.5px;
            text-align: center;
            font-family: Helvetica;
            font-style: normal;
            font-weight: bold;
            font-size: 29px;
            color: rgba(74, 84, 190, 1);
            letter-spacing: 0.2px;
        }
        
        #database__2_ {
            position: absolute;
            width: 35px;
            height: 35px;
            left: 0px;
            top: 0px;
            overflow: visible;
        }
        
        #username {
            position: absolute;
            overflow: visible;
            width: 77%;
            height: 64px;
            left: 0px;
            top: 0px;
            border-radius: 32px;
            border: none;
            font-size: 22px;
            background-image: url('user__2_.png');
            background-repeat: no-repeat;
            background-position: 35px 15px;
            padding-left: 90px;
            font-family: Sukhumvit Set;
            font-weight: lighter;
        }
        
        #password {
            position: absolute;
            overflow: visible;
            width: 77%;
            height: 64px;
            left: 0px;
            top: 105px;
            border-radius: 32px;
            border: none;
            background-image: url('key.png');
            background-repeat: no-repeat;
            background-position: 35px 15px;
            font-size: 22px;
            padding-left: 90px;
            font-family: Sukhumvit Set;
            font-weight: lighter;
        }
        
        #login {
            position: absolute;
            overflow: visible;
            width: 100%;
            height: 64px;
            left: 0px;
            top: 240px;
            border-radius: 32px;
            border: none;
            font-size: 22px;
            padding-left: 0px;
            font-family: Sukhumvit Set;
            font-weight: lighter;
            background-color: rgba(249, 97, 125, 1);
            color: white;
        }
    </style>
</head>

<body>
    <?php  if(!isset($_SESSION["uid"])) { ?>
    <div id="Login">
        <img id="ID3327590" src="ID3327590.png" srcset="ID3327590.png 1x, ID3327590@2x.png 2x">
        <svg class="Rectangle_1">
		<rect fill="rgba(74,100,190,1)" id="Rectangle_1" rx="0" ry="0" x="0" y="0" width="1400" height="1000">
		</rect>
	</svg>
        <div id="welcome__Sign_in_to_your_accou">
            <span>Welcome!</span><br><span style="font-style:normal;font-weight:lighter;font-size:28px;letter-spacing:0.35px;">Sign in to your account</span>
        </div>
        <div id="Group_1">


            </svg>

            <form action="/Login.php" method="POST"> 
                <input type="text" id="username" class=username name="username" placeholder="Username">
                <input type="password" id="password" class=password name="password" placeholder="Password">
                <input type="submit" id="login" value="Login">
                <img id="user__2_" src="user__2_.png">
                <img id="key" src="key.png">

            </form>




        </div>

        <div id="Group_2">
            <img id="question" src="question.png" srcset="question.png 1x, question@2x.png 2x">
            <div id="Help___Support">
                <span>Help & Support</span>
            </div>
        </div>
        <div id="Group_5">
            <div id="database">
                <span>database</span>
            </div>
            <img id="database__2_" src="database__2_.png" srcset="database__2_.png 1x, database__2_@2x.png 2x">
        </div>
    </div>
    <?php if($error==true){?>
        <script>swal("ID หรือ Password ไม่ถูกต้อง", "โปรดลองใหม่อีกครั้ง", "error");</script>
     
    <?php }?>
    <?php }else {?>
     

    <?php }?>
</body>

</html>