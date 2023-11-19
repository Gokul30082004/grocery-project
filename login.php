<?php
$servername="localhost:3306";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn)
{
  die("Connection failed:".mysqli_connect_error());
}
$dbname="grocery";
mysqli_select_db($conn,$dbname);

?>
<html><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Grocary Employee</title>
 
  <style>
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css");
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
    body
    {
      background-color: #f1f1f1;
      margin: 0px;
      padding: 0px;
      height: 100%;
      width: 100%;
      font-family: 'nunito',sans-serif;
    }
    /*mobile*/
    @media (max-width: 480px) 
    {
      #login-box
      {
        display: block;
        margin: auto;
          width: 330px;
          height: 330px;
          transform: translateY(45%);
        background-color: white;
        border-radius: 20px;
      }
      .form-box-h1
      {
        padding-top: 10%;
      }
      #image-box
      {
        display: none;
      }
    }
    @media (min-width: 481px)
    {
      #login-box
      {
        display: grid;
        grid-template-columns: repeat(2, 50%);
        position: fixed;
        margin: auto;
          width: 70%;
          margin-left: 15%;
          height: 70%;
          margin-top: 7%;
        background-color: white;
        border-radius: 20px;
      }
      #form-box
      {
        display: block;
        width: 90%;
        margin: auto;
      }
      #image-box
      {
        background-image: url('https://static.wixstatic.com/media/269c5c_5f8e54e7ae7d44b8b110d8f6c1c08fbd~mv2.png/v1/fill/w_345,h_345,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/web%20designing%20why%20choose%20us.png');
        background-size: contain;
        background-repeat: no-repeat;
        background-position-y: center;
      }
    }
    .form-box-h1
    {
      font-size: 22px;
      font-weight: 600;
      font-family: 'josefin sans',sans-serif;
      line-height: 2;
      text-align: center;
    }
    .uemail
    {
      width: 70%;
      height: 38px;
      padding: 10px;
      margin-left: 15%;
      border: 0px solid transparent;
      border-radius: 10px;
      font-size: 14px;
      font-family: 'nunito',sans-serif;
      background-color: #f1f1f1;
    }
    .upasskey
    {
      width: 70%;
      height: 38px;
      padding: 10px;
      margin-left: 15%;
      border: 0px solid transparent;
      border-radius: 10px;
      font-size: 14px;
      font-family: 'nunito',sans-serif;
      background-color: #f1f1f1;
    }
    .eyebtn
    {
      display: inline;
      position: fixed;
      z-index: 1;
      padding: 5px;
      margin-top: 7px;
      margin-left: -35px;
      border: 1px solid transparent;
      border-radius: 10px;
      color: #0352BD;
    }
    .eyebtn:hover
    {
      cursor: pointer;
      color: #3B38F6;
    }
    .forgot-pass
    { 
      width: 70%;
      height: 20px;
      padding: 10px;
      margin-left: 15%;
      text-decoration: none;
      font-size: 12px;
      font-family: 'nunito',sans-serif;
      color: #0352BD;
    }
    .forgot-pass:hover
    {
      color: #0A20D1;
      text-decoration: underline;
    }
    .login-btn
    {
      padding: 5px;
      height: 35px;
      width: 25%;
      margin-left: 40%;
      border: 0px solid black;
      border-radius: 20px;
      color: white;
      background-color: #0352BD;
      font-size: 12px;
      font-family: 'nunito',sans-serif;
    }
    .login-btn:hover
    {
      cursor: pointer;
      background-color: #3B38F6;
    }
  </style>
</head>
<body>
  <div id="login-box">
    <div id="form-box">
      <form action="" method="POST">
        <h1 class="form-box-h1">Login to continue</h1>
        <input type="email" name="uemail" class="uemail" placeholder="Enter your email" required=""><br><br>
        <input type="password" id="upasskey" name="upasskey" class="upasskey" placeholder="Enter your password" required="">
        <button class="eyebtn" id="eyebtn" type="button" onclick="show_hide()"><i class="bi bi-eye-fill"></i></button>
        <br><br>
        <input type="submit" name="submit" class="login-btn" value="Login">
      </form>
    </div>
    <div id="image-box"></div>
  </div>
  <?php
  if(isset($_POST['submit']))
  {
  $uemail = $_POST['uemail'];
  $upasskey = $_POST['upasskey'];
  $sql = "SELECT * FROM employee where uemail = '$uemail'";
  $result = $conn->query($sql);
  if ($row = $result->fetch_assoc())//result table empty - false ;;; else - true
  {
    $dbp = $row['paskey'];
    if($dbp == $upasskey)
    {
        session_start();
        $_SESSION['uemail']=$row['uemail'];
      echo "<script>window.alert('Welcome');</script>";
      echo "<script>window.location.href='dashboard.php';</script>";
    }
    else
    {
      echo "<script>window.alert('password is wrong');</script>";
      echo "<script>window.location.href='login.php';</script>";
    }
  }
  else
  {
      echo "<script>window.alert('email is wrong');</script>";
      echo "<script>window.location.href='login.php';</script>";
  }
}
  ?>
  <script>
    var stat="hide";
    function show_hide()
    {
      if(stat=="hide")
      {
        document.getElementById('upasskey').type="text";
        document.getElementById('eyebtn').innerHTML="<i class='bi bi-eye-slash-fill'></i>";
        stat="open";
      }
      else
      {
        document.getElementById('upasskey').type="password";
        document.getElementById('eyebtn').innerHTML="<i class='bi bi-eye-fill'></i>";
        stat="hide";
      }
    }
  </script>

</body></html>