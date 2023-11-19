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
<html>
    <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Departmental store</title>
  <link rel="icon" type="image/png" href="White BG Circle Logo.png">
    <meta property="og:image" content="https://courses.crisscrosstamizh.in/Calanjiyam courses - website - thumbnail.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
  <style>
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css");
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
    body
    {
      background-color: #f1f1f1;
      margin: 0px;
      padding: 0px;
      font-family: 'nunito',sans-serif;
    }
    @media ( max-width : 941px)
    {
        .body{
            margin:0px;
        }
      #main-area
      {
        display: block;
        margin-left: 10px;
        margin-top: 0px;
      }
      #menu-trigger
      {
        margin-top: 10px;
      }
      #profile-header
      {
        display: none;
        font-size:10px;
      }
      #view-switch 
      {
        display: none;
      }
      #view-switch button
      {
        display: none;
        opacity: 0;
      }
      #logo-txt{
          font-size:10px;
      }
     
    }
    @media ( min-width : 942px)
    {
      #main-area
      {
        display: grid;
          grid-template-columns: repeat(4, 25%);
        margin-left: 10px;
      }
      #menu-trigger
      {
        margin-top: 20px;
      }
    
      #profile-header
      {
        display: block;
      }
      #view-switch button
      {
            display: block;
      }
    }
    #side-bar
    {
      width: 200px;
      background-color: white;
      height: 100%;
      margin-left: -200px;
      display: block;
      z-index: 1;
      position: fixed;
      transition: margin-left 0.3s linear;
    }
    #side-bar:hover
    {
      width: 200px;
    }
    #side-menu
    {
      margin-top: 100px;
      height: 90%;
    }
    .side-menu-btn
    {
      display: block;
      width: 150px;
      margin-left: 15px;
      margin-top: 20px;
      padding: 15px 0px 15px 0px;
      padding-left: 20px;
      font-size: 16px;
      text-decoration: none;
      border-radius: 510px;
      color: black;
      background-color: transparent;
    }
    .side-menu-btn:hover,
    .side-menu-btn.active
    {
      color: white;
      background-image: linear-gradient(to right, #3B38F6, #5350F7);
    }
    .side-menu-btn-txt
    {
      display: inline;
      padding-left: 8px;
    }
    #menu-trigger
    {
      background-color: transparent;
      font-size: 25px;
      color: black;
      margin-left: 10px;
      padding: 5px;
      width: 40px;
      height: 40px;
      vertical-align: middle;
      border: 0px solid transparent;
      border-radius: 30px;
      z-index: 2;
      position: fixed;
      display: block;
    }
    #menu-trigger:hover
    {
      cursor: pointer;
      background-color: black;
      color: white;
    }
    #logo
    {
      display: inline;
      vertical-align: middle;
      margin-left: 50px;
      width: 50px;
      padding: 0px;
      background-color: #CFDBE8;
      border-radius: 10px;
    }
    #logo-txt
    {
      display: inline;
      vertical-align: middle;
      margin-left: 10px;
    }
    #logo-txt h1
    {
      border: 0px solid black;
      display: table-row;
      line-height: 1.5;
      vertical-align: bottom;
      font-size: 20px;
      font-weight: 500;
      font-family: 'josefin sans', sans-serif;
    }
    #profile-circle
    {
      display: inline;
      vertical-align: middle;
      margin-left: 10px;
      width: 50px;
      padding: 0px;
      background-color: #CFDBE8;
      border-radius: 10px;
    }
    #profile-circle-txt
    {
      display: inline;
      vertical-align: middle;
      text-align:right;
      margin-left: 10px;
    }
    #profile-circle-txt h1
    {
      border: 0px solid black;
      display: table-row;
      line-height: 1.5;
      vertical-align: bottom;
      font-size: 20px;
      font-weight: 500;
      font-family: 'josefin sans', sans-serif;
    }
      #view-switch
      {
      margin-top: 20px;
      height: 50px;
      }
      #view-switch button
      {
          margin: auto;
          width: 120px;
          height: 35px;
          padding: 5px;
          border: 0px solid black;
          border-radius: 20px;
          color: white;
          font-size: 14px;
          font-family: 'josefin sans',sans-serif;
          background-image: linear-gradient(to right, #3B38F6, #5350F7);
      }
      #view-switch button:hover
      {
          cursor: pointer;
          color: white;
          background-image: linear-gradient(to right, #190793, #5350F7);
      }
      @media ( max-width : 490px)
      {
          .employee-details{
            background-color:white;
            border-radius:20px; 
            margin-top:70px;
            text-align:center;
            font-family: 'josefin sans',sans-serif;
            line-height:2;
            
        }
      .employee-details img{
            margin-top:20px;
		    height:100px;
		    border-radius:50%;
            
		}
		.edit-profile-table{
		    line-height:3;
		    //margin-left:auto;
		    //margin-right:auto;
		}
		.edit-profile-table td{
		    padding-left:30px;
		}
		.edit-profile-table span{

		}
		.edit-profile-table tr{
		    color:#4318FF;
		    font-weight:400;
		    font-size:20px;
		}
		.edit-profile-button
		{
		    margin-right:10px;
		    margin-top:-90px;
		    padding: 5px;
            height: 35px;
            width: 25%;
            border: 0px solid black;
            border-radius: 20px;
            color: white;
            background-color: #0352BD;
            font-size: 12px;
            font-family: 'nunito',sans-serif;
		}
		.edit-profile-button:hover{
		    background-color:#4318FF;
		}
		.edit-profile-table input{
		    width:100%;
            height: 38px;
            padding: 10px;
            //margin-left: 15%;
            border: 0px solid transparent;
            border-radius: 10px;
            font-size: 14px;
            font-family: 'nunito',sans-serif;
            background-color: #f1f1f1;
		}
        .edit-profile-a:hover{
            color:#4318FF;
        }
         #profile-top{
          display:none;
         }
     #main-area{
         font-size:50px;
         font-weight:500px;
         }
     #yourp{
         display:none;
          }
               .edit-profile-button-save{
             padding: 5px;
            height: 35px;
            width: 25%;
            border: 0px solid black;
            border-radius: 20px;
            color: white;
            background-color: #0352BD;
            font-size: 12px;
            font-family: 'nunito',sans-serif;
        }
        .edit-profile-button-save:hover{
            background-color:#4318FF;
        }
          
      }
      
      @media ( min-width : 490px)
      {
        .employee-details{
            background-color:white;
            border-radius:20px; 
            margin-top:70px;
            text-align:center;
            font-family: 'josefin sans',sans-serif;
            line-height:2;
            margin-right:200px;
            margin-left:200px;
            padding:40px;
            
        }
      .employee-details img{
            margin-top:30px;
            margin-left:30px;
		    height:100px;
		    border-radius:50%;
            
		}
		.edit-profile-table{
		    line-height:3;
		    margin-left:auto;
		    margin-right:auto;
		}
		.edit-profile-table td{
		    padding-left:30px;
		}
		.edit-profile-table span{

		}
		.edit-profile-table tr{
		    color:#4318FF;
		    font-weight:400;
		    font-size:20px;
		}
		.edit-profile-button
		{
		    margin-top:-170px;
		    margin-right:10px;
		    padding: 5px;
            height: 35px;
            width: 25%;
            border: 0px solid black;
            border-radius: 20px;
            color: white;
            background-color: #0352BD;
            font-size: 12px;
            font-family: 'nunito',sans-serif;
		}
		.edit-profile-button:hover{
		    background-color:#4318FF;
		}
		.edit-profile-table input{
		    width:200px;
            height: 38px;
            padding: 10px;
            margin-left: 15%;
            border: 0px solid transparent;
            border-radius: 10px;
            font-size: 14px;
            font-family: 'nunito',sans-serif;
            background-color: #f1f1f1;
		}
        .edit-profile-a:hover{
            color:#4318FF;
        }
        .edit-profile-button-save{
             padding: 5px;
            height: 35px;
            width: 25%;
            border: 0px solid black;
            border-radius: 20px;
            color: white;
            background-color: #0352BD;
            font-size: 12px;
            font-family: 'nunito',sans-serif;
        }
        .edit-profile-button-save:hover{
            background-color:#4318FF;
        }
        
      }
      @media ( max-width : 941px)
    {
        #profile-circle-txt h1{
            font-size:10px;
            margin-top:50px;
        }
        #logo-txt h1{
            font-size:10px;
        }
        #profile-circle{
            width:40px;
        }
    }
  </style>
</head>
<body>
  <button id="menu-trigger" onclick="triggermenu()"><i class="bi bi-list"></i></button>
  <div id="side-bar"> 
    <div id="side-menu">
      <a href="dashboard.php" class="side-menu-btn">
        <span class="side-menu-btn-icon"><i class="bi bi-house-door-fill"></i></span>
        <span class="side-menu-btn-txt">Home</span>
      </a>
      <a href="product.php" class="side-menu-btn">
        <span class="side-menu-btn-icon"><i class="bi bi-calendar-fill"></i></span>
        <span class="side-menu-btn-txt">Product Details</span>
      </a>
      <a href="employee-details.php" class="side-menu-btn">
        <span class="side-menu-btn-icon"><i class="bi bi-person-badge-fill"></i></span>
        <span class="side-menu-btn-txt">Employee Details</span>
      </a>
      <a href="income.php" class="side-menu-btn active">
        <span class="side-menu-btn-icon"><i class="bi bi-book-half"></i></span>
        <span class="side-menu-btn-txt">Calculate</span>
      </a>
      <a href="edit-emp.php" class="side-menu-btn">
        <span class="side-menu-btn-icon"><i class="bi bi-gear-fill"></i></span>
        <span class="side-menu-btn-txt">Edit products</span>
      </a>
      <a href="login.php" class="side-menu-btn">
        <span class="side-menu-btn-icon"><i class="bi bi-power"></i></span>
        <span class="side-menu-btn-txt">Logout</span>
      </a>
    </div>
  </div>
  <div id="main-area">
      <div style="margin-top: 10px;">
        <img src="logo_dark.jpg" id="logo">
        <div id="logo-txt">
          <h1>Departmental store</h1>
          <h1 style="color: #4318FF;">Product details</h1>
        </div>
      </div>
    </div>
    <div style="margin-top: -60px; margin-left: 200px; " id="profile-top">
        
      </div>
      <div>
  </div>
  <div>
		        <div class="employee-details">
                    <h3>Net Price:</h3>
                    <h3 id='rand'></h3>
		    </div>
          </body>
  <script>
    console.log(Math.floor(Math.random()*(200-100+1))+100);
    document.getElementById('rand').innerHTML=Math.floor(Math.random()*(200-100+1))+100;
    var mleft = "closed";
    function triggermenu()
    {
      if(mleft=="closed")
      {
        document.getElementById("side-bar").style.marginLeft="0px";
        document.getElementById("menu-trigger").style.background="black";
        document.getElementById("menu-trigger").style.color="white";
        document.getElementById("menu-trigger").innerHTML="<i class='bi bi-x'></i>";
        mleft = "open";
      }
      else
      {
        document.getElementById("side-bar").style.marginLeft="-200px";
        document.getElementById("menu-trigger").style.background="transparent";
        document.getElementById("menu-trigger").style.color="black";
        document.getElementById("menu-trigger").innerHTML="<i class='bi bi-list'></i>";
        mleft = "closed";
      }
    }
  </script>
</html>