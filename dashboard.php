<?php
/*session_start();
if(!(isset($_SESSION['uemail'])))
{
    echo "<script>window.alert('Login to Continue');";
    echo "window.location.href='login.php';</script>";
}
*/?>
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
			#global-search
			{
				display: none;
			}
			#global-search-ip
			{
				height: 30px;
				padding: 3px;
				padding-left: 50px;
				font-size: 14px;
				color: #1C1D21;
				border-radius: 20px;
				display: block;
				margin: auto;
				width: 70%;
				margin-top: 20px;
			}
			.global-search-icon
			{
				position:fixed;
				margin-top: 8px;
				margin-left: 50px;
				color: #1C1D21;
				font-size: 18px;
			}
			#profile-header
			{
				display: none;
			}
		}
		@media ( min-width : 942px)
		{
			#main-area
			{
				display: grid;
	  			grid-template-columns: repeat(3, 33.33%);
				margin-left: 10px;
			}
			#menu-trigger
			{
				margin-top: 20px;
			}
			#global-search
			{
				display: block;
				width: 50%;
				margin: auto;
			}
			#global-search-ip
			{
				height: 30px;
				padding: 3px;
				padding-left: 42px;
				font-size: 14px;
				color: black;
				border: 0px solid transparent;
				border-radius: 20px;
				display: block;
				width: 80%;
				margin-top: 15px;
			}
			.global-search-icon
			{
				position:fixed;
				margin-top: 6px;
				margin-left: 18px;
				font-size: 18px;
				color: #1C1D21;
			}
			#profile-header
			{
				display: block;
			}
		}
		#side-bar
		{
			width: 200px;
			background-color: white;
			height: 100%;
/*			border-top-right-radius: 30px;*/
/*			border-bottom-right-radius: 30px;*/
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
		.side-menu-btn-icon
		{
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
		#courses-summary
		{
			display: grid;
  			grid-template-columns: repeat(2, 50%);
			width: 95%;
			margin-top: 20px;
			margin-left: 10px;
		}
		.total-courses
		{
			background-image: linear-gradient(to right, #3B38F6, #5350F7);
			height: 100px;
			width: 86%;
			border-radius: 20px;
			padding: 10px;
		}
		.total-courses h3
		{
			font-family: 'josefin sans',sans-serif;
			font-weight: 400;
			font-size: 20px;
			line-height: 2.5;
			display: block;
			padding-left: 10px;
			margin: 0px;
			color: white;
		}
		.total-courses p
		{
			font-family: 'josefin sans',sans-serif;
			font-weight: 400;
			font-size: 50px;
			display: block;
			padding-left: 10px;
			margin: 0px;
			color: white;
		}
		.inprogress-courses
		{
			background-color: white;
			height: 100px;
			width: 89%;
			border-radius: 20px;
			padding: 10px;
		}
		.inprogress-courses h3
		{
			font-family: 'josefin sans',sans-serif;
			font-weight: 400;
			font-size: 20px;
			line-height: 2.5;
			display: block;
			padding-left: 10px;
			margin: 0px;
			color: #A3AED0;
		}
		.inprogress-courses p
		{
			font-family: 'josefin sans',sans-serif;
			font-weight: 400;
			font-size: 50px;
			display: block;
			padding-left: 10px;
			margin: 0px;
			color: #190793;
		}
		#ip-icon
		{
			float: right;
			font-size: 40px;
			width: 26%;
			color: #4318FF;
		}
		#courses-list
		{
			background-color: white;
			height: 65%;
			width: 89%;
			margin-top: 20px;
			margin-left: 10px;
			border-radius: 20px;
			padding: 10px;
		}
		#courses-list h3
		{
			font-family: 'josefin sans',sans-serif;
			font-weight: 400;
			font-size: 20px;
			line-height: 2.5;
			display: block;
			padding-left: 10px;
			margin: 0px;
			color: #A3AED0;
		}
		#courses-list a
		{
			text-decoration: none;
			font-family: 'nunito',sans-serif;
			font-weight: 400;
			font-size: 14px;
			line-height: 3;
			display: block;
			padding-left: 15px;
			padding-right: 15px;
			margin: 0px;
			border-radius: 40px;
			color: #4318FF;
		}
		#courses-list a i
		{
			padding-left: 10px;
		}
		#courses-list a:hover
		{
			background-color: #190793;
			color: white;
		}
		.courses-list-table
		{
			width: 100%;
			border-collapse:separate;
            border-spacing:0 10px;
		}
		.courses-list-logo
		{
			width: 20px;
		}
		.courses-list-logo img
		{
			width: 50px;
			border-radius: 25px;
			vertical-align: middle;
		}
		.courses-list-title
		{
			width: 45%;
		}
		.courses-list-title h4
		{
			font-family: 'josefin sans',sans-serif;
			font-weight: 400;
			font-size: 18px;
			line-height: 1.5;
			display: block;
			text-align: left;
			padding-left: 10px;
			margin: 0px;
			color: black;
		}
		.courses-list-title p
		{
			font-family: 'nunito',sans-serif;
			font-weight: 400;
			font-size: 14px;
			display: block;
			text-align: left;
			padding-left: 10px;
			margin: 0px;
			color: #A3AED0;
		}
		.courses-list-assignments
		{
			width: 50px;
			text-align: center;
			font-family: 'nunito',sans-serif;
			font-weight: 400;
			font-size: 18px;
			line-height: 1;
			display: block;
			padding-left: 0px;
			margin: 0px;
			color: black;
		}
		.courses-list-completion
		{
			width: 50px;
		}
		.courses-list-completion p
		{
			font-family: 'nunito',sans-serif;
			font-weight: 400;
			font-size: 18px;
			line-height: 1;
			display: block;
			padding-left: 0px;
			margin: 0px;
			color: #05CD99;
			width: 40px;
			background-color: #E6FAF5;
			padding: 10px;
			border-radius: 10px;
		}
		#courses-card
		{
			display: grid;
			grid-template-columns: repeat(2, 50%);
			width: 95%;
			margin-top: 10px;
			margin-left: 10px;
		}
		.courses-card
		{
			background-color: white;
			height: 100%;
			width: 86%;
			border-radius: 20px;
			padding: 10px;
		}
		.courses-card img
		{
			display: block;
			width: 40%;
			margin: auto;
			border-radius: 40%;
		}
		.courses-card h3
		{
			font-family: 'josefin sans',sans-serif;
			font-weight: 400;
			font-size: 20px;
			text-align: center;
			line-height: 4;
			display: block;
			padding-left: 10px;
			margin: 0px;
			color: black;
		}
		.courses-card p
		{
			font-family: 'josefin sans',sans-serif;
			font-weight: 400;
			font-size: 14px;
			text-align: center;
			line-height: 1.5;
			display: block;
			padding-left: 10px;
			margin: 0px;
			color: #A3AED0;
		}
		.courses-card a
		{
			font-size: 18px;
			color: white;
			text-decoration: none;
			text-align: center;
			background-color: #4318FF;
			padding: 10px;
			width: 50%;
			border-radius: 20px;
			display: block;
			margin: auto;
			margin-top: 12px;
		}
		.courses-card a:hover
		{
			background-color: #190793;
		}
		#manager-card
		{
			background-color: white;
			height: 120px;
			width: 95%;
			margin-top: 40px;
			margin-left: 10px;
			border-radius: 20px;
		}
		.manager-card-img
		{
			float: left;
			width: 30%;
		}
		.manager-card-img img
		{
			display: inline;
			margin: auto;
			margin-top:0%;
			vertical-align: middle;
			padding: 7%;
			width: 100px;
		}
		.manager-card-details
		{
			margin-top: 1%;
			float: right;
			width: 65%;
		}
		.manager-card-details h3
		{
			vertical-align: middle;
			font-size: 10px;
			font-weight: 500;
			line-height: 0;
			color: #A3AED0;
		}
		.manager-card-details h4
		{
			vertical-align: middle;
			font-family: 'josefin sans',sans-serif;
			font-size: 20px;
			font-weight: 500;
			line-height: 0;
			color: black;
		}
		.manager-card-details p
		{
			vertical-align: middle;
			font-family: 'josefin sans',sans-serif;
			font-size: 12px;
			font-weight: 500;
			line-height: 0;
			color: black;
		}
		.manager-card-details i
		{
			vertical-align: middle;
			font-family: 'josefin sans',sans-serif;
			font-size: 12px;
			font-weight: 400;
			color: #1C6CB7;
		}

		#instructors-list
		{
			background-color: white;
/*			height: 63%;*/
			width: 89%;
			margin-top: 20px;
			margin-bottom: 20px;
			margin-left: 10px;
			border-radius: 20px;
			padding: 10px;
		}
		#instructors-list h3
		{
			font-family: 'josefin sans',sans-serif;
			font-weight: 400;
			font-size: 18px;
			line-height: 3.5;
			display: block;
			padding-left: 10px;
			margin: 0px;
			color: #A3AED0;
		}
		#instructors-list a
		{
			text-decoration: none;
			font-family: 'nunito',sans-serif;
			font-weight: 400;
			font-size: 14px;
			line-height: 3;
			display: block;
			padding-left: 15px;
			padding-right: 15px;
			margin: 0px;
			margin-top: 10px;
			border-radius: 40px;
			color: #4318FF;
		}
		#instructors-list a i
		{
			padding-left: 10px;
		}
		#instructors-list a:hover
		{
			background-color: #190793;
			color: white;
		}
		.instructors-list-table
		{
			width: 100%;
			border-collapse:separate;
            border-spacing:0 10px;
		}
		.instructors-list-logo
		{
			width: 10%;
			margin-right: 0px;
		}
		.instructors-list-logo img
		{
			width: 50px;
			border-radius: 25px;
			vertical-align: middle;
		}
		.instructors-list-title
		{
			width: 75%;
			margin-left: 0px;
			text-align: left;
		}
		.instructors-list-title h4
		{
			font-family: 'josefin sans',sans-serif;
			font-weight: 400;
			font-size: 15px;
			line-height: 1.5;
			display: block;
			text-align: left;
			padding-left: 10px;
			margin: 0px;
			color: black;
		}
		.instructors-list-title p
		{
			font-family: 'nunito',sans-serif;
			font-weight: 400;
			font-size: 12px;
			display: block;
			text-align: left;
			padding-left: 10px;
			margin: 0px;
			color: #A3AED0;
		}
		.instructors-list-dept
		{
			width: 80px;
		}
		.instructors-list-dept p
		{
			font-family: 'nunito',sans-serif;
			font-weight: 400;
			font-size: 14px;
			text-align: center;
			line-height: 1;
			display: block;
			padding-left: 0px;
			margin: 0px;
			color: #3B38F6;
			width: 50px;
			background-color: #B2CFFE;
			padding: 10px;
			border-radius: 10px;
		}

		#attendance-summary
		{
			display: grid;
			grid-template-columns: repeat(3, 33.33%);
			width: 95%;
			margin-top: 10px;
/*			margin-left: 10px;*/
		}
		.total-attendance
		{
/*			background-image: linear-gradient(to right, #3B38F6, #5350F7);*/
			background-color: white;
			height: 100px;
			width: 77%;
			border-radius: 20px;
			padding: 10px;
		}
		.total-attendance h3
		{
			font-family: 'josefin sans',sans-serif;
			font-weight: 400;
			font-size: 12px;
			line-height: 1;
			display: block;
			vertical-align: middle;
			padding-top: 8px;
			padding-left: 5px;
			margin: 0px;
			color: black;
		}
		.total-attendance p
		{
			font-family: 'josefin sans',sans-serif;
			font-weight: 400;
			font-size: 20px;
			line-height: 4;
			display: block;
			padding-left: 10px;
			margin: 0px;
			color: black;
		}
		.total-present
		{
			background-color: #190793;
			height: 100px;
			width: 77%;
			margin-left: 10px;
			border-radius: 20px;
			padding: 10px;
		}
		.total-present h3
		{
			font-family: 'josefin sans',sans-serif;
			font-weight: 400;
			font-size: 12px;
			line-height: 1.7;
			display: block;
			padding-top: 8px;
			padding-left: 5px;
			margin: 0px;
			color: #A3AED0;
		}
		.total-present p
		{
			font-family: 'josefin sans',sans-serif;
			font-weight: 400;
			font-size: 20px;
			line-height: 4;
			display: block;
			padding-left: 10px;
			margin: 0px;
			color: white;
		}
		#profile-	card
		{
			display: grid;
			grid-template-columns: repeat(2, 50%);
			width: 100%;
			margin-top: 10px;
			margin-left: 10px;
		}
		.profile-card
		{
			background-color: white;
			height: 40%;
			margin-top: 10px;
			width: 89%;
			border-radius: 20px;
			padding: 10px;
		}
		.profile-card img
		{
			display: block;
			width: 40%;
			margin: auto;
			border-radius: 50%;
		}
		.profile-card h3
		{
			font-family: 'josefin sans',sans-serif;
			font-weight: 400;
			font-size: 20px;
			text-align: center;
			line-height: 3;
			display: block;
			margin: 0px;
			color: black;
		}
		.profile-card p
		{
			font-family: 'josefin sans',sans-serif;
			font-weight: 400;
			font-size: 12px;
			text-align: center;
			line-height: 2;
			display: block;
			margin: 0px;
			padding-left:-10px;
			color: #A3AED0;
		}
		.profile-card a
		{
			font-size: 14px;
			color: white;
			text-decoration: none;
			text-align: center;
			background-color: #2B3674;
			padding: 10px;
			width: 40%;
			border-radius: 20px;
			display: block;
			margin: auto;
			margin-top: 12px;
		}
		.profile-card a:hover
		{
			background-color: grey;
		}
		.schedule
		{
			margin-top: 10px;
			background-color: white;
			height: 100%;
			width: 93%;
			border-radius: 20px;
		}
		.schedule h3
		{
			font-family: 'josefin sans',sans-serif;
			font-weight: 400;
			font-size: 20px;
			line-height: 2.5;
			text-align: center;
			display: block;
			padding-top: 15px;
			margin: 0px;
			color: #A3AED0;
		}
		.schedule-card
		{
			display: block;
			margin-top: 15px;
			margin-left: 8%;
			width: 80%;
			height: 100px;
			border-radius: 20px;
		}
		.schedule-card table
		{
			padding: 20px;
			border-radius: 10px;
		}
		.schedule-card a
		{
			text-decoration: none;
		}
		.schedule-card a:hover table
		{
			border: 0px solid #EFF4FB;
			background-color: #190793;
		}
		.schedule-card a:hover
		.schedule-card-bar
		{
			background-color: #190793;
		}
		.schedule-card a:hover
		.schedule-card-event
		{
			color: #EFF4FB;
		}
		.schedule-card-bar
		{
			display: block;
			height: 90px;
			margin: auto;
			width: 5px;
			border-radius: 10px;
			background-color: #190793;
		}
		.schedule-card-event
		{
			font-size: 16px;
			font-weight: 400;
			color: black;
			padding-left: 5px;
			margin-top: -2px;
			line-height: 1.5;
			font-family: 'josefin sans',sans-serif;
		}
		.schedule-card-date
		{
			font-size: 12px;
			font-weight: 400;
			line-height: 0;
			padding-left: 5px;
			color: #A3AED0;
		}
		.schedule-card-time
		{
			font-size: 12px;
			font-weight: 400;
			line-height: 0;
			padding-left: 5px;
			color: #A3AED0;
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
		.today-attendance
		{
		/*			background-image: linear-gradient(to right, #3B38F6, #5350F7);*/
			background-color: white;
			height: 100px;
			width: 89%;
			border-radius: 20px;
			padding: 10px;
		}
		.today-attendance h3
		{
			font-family: 'josefin sans',sans-serif;
			font-weight: 400;
			font-size: 16px;
			line-height: 3;
			display: block;
			padding-left: 10px;
			margin: 0px;
			color: black;
		}
		.today-attendance p
		{
			font-family: 'josefin sans',sans-serif;
			font-weight: 400;
			font-size: 24px;
			display: block;
			padding-left: 10px;
			margin: 0px;
			color: black;
		}
		.mark-att
		{
			display: block;
			width: 60%;
			margin: auto;
			padding: 10px;
			height: 40px;
			font-size: 16px;
			font-weight: 500;
			font-family: 'josefin sans',sans-serif;
			background-color: #190793;
			color: white;
			border: 0px solid black;
			border-radius: 10px;
		}
		.mark-att:hover
		{
			cursor: pointer;
			background-color: #4318FF;
			color: white;
		}
		#leave-box
		{
			background-color: white;
			height: 75%;
			width: 89%;
			margin-top: 10px;
			margin-bottom: 20px;
			margin-left: 10px;
			border-radius: 20px;
			padding: 10px;
		}
		#leave-box h3
		{
			font-family: 'josefin sans',sans-serif;
			font-weight: 400;
			font-size: 20px;
			line-height: 4;
			text-align: center;
			display: block;
			margin: 0px;
			color: #A3AED0;
		}
		.leave-form label
		{
			font-family: 'josefin sans',sans-serif;
			font-size: 16px;
			font-weight: 500;
			padding-left: 10px;
		}
		.leave-form input[type="date"]
		{
			display: block;
			padding: 10px;
			margin: 10px;
			width: 80%;
			border-radius: 10px;
			color: black;
			font-family: 'nunito',sans-serif;
			font-size: 14px;
			border: 0px solid black;
			background-color: #F6F8FC;
/*			background-color: #4318FF;*/
		}
		::-webkit-calendar-picker-indicator
		{
		    background-color: #ADADFA;
		    padding: 7px;
		    cursor: pointer;
		    border-radius: 10px;
		}
		.leave-reason
		{
			display: block;
			width: 90%;
			height: 130px;
			padding: 10px;
			font-size: 14px;
			font-family: 'nunito',sans-serif;
			background-color: #F6F8FC;
			border: 0px solid black;
			border-radius: 10px;
			margin: 10px;
		}
		.apply-leave-btn
		{
			display: block;
			margin: auto;
			margin-top: 10px;
			width: 100px;
			padding: 10px;
			font-size: 14px;
			font-family: 'nunito',sans-serif;
			border: 0px solid black;
			border-radius: 10px;
			background-color: #4318FF;
			color: white;
		}
		.apply-leave-btn:hover
		{
			cursor: pointer;
			background-color:#190793;
		}
		.mark-att-dis
		{
			display: block;
			width: 60%;
			margin: auto;
			padding: 10px;
			height: 40px;
			font-size: 16px;
			font-weight: 500;
			font-family: 'josefin sans',sans-serif;
			background-color: #D7D8E0;
			color: black;
			border: 0px solid black;
			border-radius: 10px;
		}
		.mark-att-dis:hover
		{
			cursor: no-drop;
			background-color: #D7D8E0;
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
		#courses-summary
		{
			display: grid;
  			grid-template-columns: repeat(2, 50%);
			width: 95%;
			margin-top: 20px;
			margin-left: 10px;
		}
		.total-tickets
		{
			background-image: linear-gradient(to right, #3B38F6, #5350F7);
			height: 100px;
			width: 86%;
			border-radius: 20px;
			padding: 10px;
		}
		.total-tickets h3
		{
			font-family: 'josefin sans',sans-serif;
			font-weight: 400;
			font-size: 16px;
			line-height: 3.5;
			display: block;
			padding-left: 10px;
			margin: 0px;
			color: white;
		}
		.total-tickets p
		{
			font-family: 'josefin sans',sans-serif;
			font-weight: 400;
			font-size: 30px;
			display: block;
			padding-left: 10px;
			margin: 0px;
			color: white;
		}
		.inprogress-courses
		{
			background-color: white;
			height: 100px;
			width: 89%;
			border-radius: 20px;
			padding: 10px;
		}
		.inprogress-courses h3
		{
			font-family: 'josefin sans',sans-serif;
			font-weight: 400;
			font-size: 16px;
			line-height: 3.5;
			display: block;
			padding-left: 10px;
			margin: 0px;
			color: #A3AED0;
		}
		.inprogress-courses p
		{
			font-family: 'josefin sans',sans-serif;
			font-weight: 400;
			font-size: 30px;
			display: block;
			padding-left: 10px;
			margin: 0px;
			color: #190793;
		}
	</style>
	<style>
      @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css");
      
      .wrapper{
      	margin-top: 20px;
      	margin-left: 10px;
        width: 94%;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 15px 40px rgba(0,0,0,0.12);
      }
      .wrapper header{
        display: flex;
        align-items: center;
        padding: 5px 30px 5px;
        justify-content: space-between;
      }
      header .icons{
        display: flex;
      }
      header .icons span{
        height: 38px;
        width: 38px;
        margin: 0 1px;
        cursor: pointer;
        color: #878787;
        text-align: center;
        line-height: 38px;
        font-size: 1.9rem;
        user-select: none;
        border-radius: 50%;
      }
      .icons span:last-child{
        margin-right: -10px;
      }
      header .icons span:hover{
        background: #f2f2f2;
      }
      header .current-date{
        font-size: 1.45rem;
        font-weight: 500;
      }
      .calendar{
        padding: 10px;
        padding-bottom: 30px;
      }
      .calendar ul{
        display: flex;
        flex-wrap: wrap;
        list-style: none;
        text-align: center;
        padding-inline-start: 0px;
      }
      .calendar .days{
        margin-bottom: 20px;
      }
      .calendar li{
        color: #333;
        width: calc(100% / 7);
        font-size: 1.07rem;
      }
      .calendar .weeks li{
        font-weight: 500;
        cursor: default;
      }
      .calendar .days li{
        z-index: 0;
        cursor: pointer;
        position: relative;
        margin-top: 30px;
      }
      .days li.inactive{
        color: #aaa;
      }
      .days li.active{
        color: #fff;
      }
      .days li::before{
        position: absolute;
        content: "";
        left: 50%;
        top: 50%;
        height: 40px;
        width: 40px;
        z-index: -1;
        border-radius: 50%;
        transform: translate(-50%, -50%);
      }
      .days li.active::before{
        background: #4318FF;
      }
      .days li:not(.active):hover::before{
        background: #f2f2f2;
      }
      #sec2
      {
      	margin-top: 12%;
      }
    </style>
</head>
<body>
	<button id="menu-trigger" onclick="triggermenu()"><i class="bi bi-list"></i></button>
	<!-- <button id="menu-trigger"><i class="bi bi-x"></i></button> -->
	<div id="side-bar">	
		<div id="side-menu">
			<a href="dashboard.php" class="side-menu-btn active">
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
			<a href="income.php" class="side-menu-btn">
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
		<div id="sec1">
			<div style="margin-top: 10px;">
				<img src="logo_dark.jpg" id="logo">
				<div id="logo-txt">
					<h1>Departmental Store</h1>
					<h1 style="color: #4318FF;">Dashboard</h1>
				</div>
			</div>
			
			<div class="wrapper">
		      <header>
		        <p class="current-date">July 2023</p>
		        <div class="icons">
		          <span id="prev" class="material-symbols-rounded">chevron_left</span>
		          <span id="next" class="material-symbols-rounded">chevron_right</span>
		        </div>
		      </header>
		      <div class="calendar">
		        <ul class="weeks">
		          <li>Sun</li>
		          <li>Mon</li>
		          <li>Tue</li>
		          <li>Wed</li>
		          <li>Thu</li>
		          <li>Fri</li>
		          <li>Sat</li>
		        </ul>
		        <ul class="days"><li class="inactive">25</li><li class="inactive">26</li><li class="inactive">27</li><li class="inactive">28</li><li class="inactive">29</li><li class="inactive">30</li><li class="">1</li><li class="">2</li><li class="">3</li><li class="">4</li><li class="">5</li><li class="">6</li><li class="">7</li><li class="">8</li><li class="">9</li><li class="">10</li><li class="">11</li><li class="">12</li><li class="">13</li><li class="">14</li><li class="">15</li><li class="active">16</li><li class="">17</li><li class="">18</li><li class="">19</li><li class="">20</li><li class="">21</li><li class="">22</li><li class="">23</li><li class="">24</li><li class="">25</li><li class="">26</li><li class="">27</li><li class="">28</li><li class="">29</li><li class="">30</li><li class="">31</li><li class="inactive">1</li><li class="inactive">2</li><li class="inactive">3</li><li class="inactive">4</li><li class="inactive">5</li></ul>
		      </div>
		    </div> 
		</div>
		<div id="sec2">
			
			
			<div id="instructors-list">
				<h3 style="float: left;">Products</h3>
				<a href="product.php" style="float: right;">View more<i class="bi bi-arrow-right-circle-fill"></i></a>
				<table class="instructors-list-table">
					<tbody><?php
					$sql = "SELECT * FROM product";
					$result1 = $conn->query($sql);
					$i=0;
					while($i!=10 && $emp=$result1->fetch_assoc())
					{
						$amt=$emp['pamount']+$emp['pprofit'];
						echo"<tr><td class='instructors-list-title'><h4>".$emp['pname']."</h4><p>$amt</p></td><td class='instructors-list-dept'><p>".$emp['pquantity']."</p></td></tr>";
						$i++;
					}	
					?>
					</tbody></table>
				
			</div>
		</div>
		<div id="sec3">
			<div style="margin-top: 10px;">
				
				<div id="logo-txt">
					<h1> </h1>
					<h1 style="color: #4318FF;"></h1>
				</div>
			</div>
			<div id="courses-summary" style="margin-top:20%;">
				<div class="total-tickets">
					<h3>Total Products</h3>
					<p><?php
					$sql="select * from product";
					$i=0;
					$result=$conn->query($sql);
					while($result->fetch_assoc())
					{
						++$i;
					}
					echo"$i";
					?></p>
				</div>
				<div class="inprogress-courses">
					<h3>In Sortage</h3>
					<p style="float: left;width: 50%;">
					<?php
					$sql="select * from product";
					$i=0;
					$result=$conn->query($sql);
					while($prod=$result->fetch_assoc())
					{
						if($prod['pquantity']<10)
						{
							++$i;
						}
					}
					echo"$i";
					?></p>
					<i class="bi bi-bar-chart-fill" id="ip-icon"></i>
				</div>
			</div>
			<div id="instructors-list">
				<h3 style="float: left;">Employee Details</h3>
				<a href="employee-details.php" style="float: right;">View more<i class="bi bi-arrow-right-circle-fill"></i></a>
				<table class="instructors-list-table">
					<tbody><?php
					$sql = "SELECT * FROM emp";
					$result1 = $conn->query($sql);
					$i=0;
					while($i!=10 && $emp=$result1->fetch_assoc())
					{
						echo"<tr><td class='instructors-list-title'><h4>".$emp['ename']."</h4><p>".$emp['edept']."</p></td><td class='instructors-list-dept'><p>".$emp['eid']."</p></td></tr>";
						$i++;
					}	
					?>				</tbody></table>
			</div>
		</div>
	</div>
	<script>
		var mleft = "closed";
		function triggermenu()
		{
			// var x = getElementById('side-bar');
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
			// x.style.marginLeft="0px";
		}
	</script>
	<script>
	  const daysTag = document.querySelector(".days"),
	  currentDate = document.querySelector(".current-date"),
	  prevNextIcon = document.querySelectorAll(".icons span");
	  // getting new date, current year and month
	  let date = new Date(),
	  currYear = date.getFullYear(),
	  currMonth = date.getMonth();
	  // storing full name of all months in array
	  const months = ["January", "February", "March", "April", "May", "June", "July",
	                "August", "September", "October", "November", "December"];
	  const renderCalendar = () => {
	      let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(), // getting first day of month
	      lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(), // getting last date of month
	      lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(), // getting last day of month
	      lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate(); // getting last date of previous month
	      let liTag = "";
	      for (let i = firstDayofMonth; i > 0; i--) { // creating li of previous month last days
	          liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
	      }
	      for (let i = 1; i <= lastDateofMonth; i++) { // creating li of all days of current month
	          // adding active class to li if the current day, month, and year matched
	          let isToday = i === date.getDate() && currMonth === new Date().getMonth() 
	                       && currYear === new Date().getFullYear() ? "active" : "";
	          liTag += `<li class="${isToday}">${i}</li>`;
	      }
	      for (let i = lastDayofMonth; i < 6; i++) { // creating li of next month first days
	          liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`
	      }
	      currentDate.innerText = `${months[currMonth]} ${currYear}`; // passing current mon and yr as currentDate text
	      daysTag.innerHTML = liTag;
	  }
	  renderCalendar();
	  prevNextIcon.forEach(icon => { // getting prev and next icons
	      icon.addEventListener("click", () => { // adding click event on both icons
	          // if clicked icon is previous icon then decrement current month by 1 else increment it by 1
	          currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;
	          if(currMonth < 0 || currMonth > 11) { // if current month is less than 0 or greater than 11
	              // creating a new date of current year & month and pass it as date value
	              date = new Date(currYear, currMonth, new Date().getDate());
	              currYear = date.getFullYear(); // updating current year with new date year
	              currMonth = date.getMonth(); // updating current month with new date month
	          } else {
	              date = new Date(); // pass the current date as date value
	          }
	          renderCalendar(); // calling renderCalendar function
	      });
	  });
	</script>
	<script>
		var Diff_in_Days;
		function today_calc()
		{
			document.getElementById("fdate").style.background="#F6F8FC";
			var selectedText = document.getElementById('fdate').value;
		    var selectedDate = new Date(selectedText);
		    var now = new Date();
		    if (selectedDate < now) 
		    {
		   		alert("From date must be in the future");
				document.getElementById("fdate").style.background="#F2B0AC";
		    }
		}
		function days_calc()
		{
			document.getElementById("tdate").style.background="#F6F8FC";
			var fromdate = document.getElementById('fdate').value;
			var f = document.getElementById('fdate').valueAsDate;
			var todate = document.getElementById('tdate').value;
			var t = document.getElementById('tdate').valueAsDate;
			var Diff_in_Time = t.getTime() - f.getTime();
			Diff_in_Days = Diff_in_Time / (1000 * 3600 * 24);
			Diff_in_Days++;
			if(todate<fromdate)
			{
				window.alert("From date must be lesser than to date");
				document.getElementById("tdate").style.background="#F2B0AC";
			}
			else
			{
				document.getElementById("no_days").innerHTML= "No.of Days: "+Diff_in_Days;
			}
		}
		function apply_leave()
		{
			if(Diff_in_Days>0)
			{
				document.getElementById("duration").value = Diff_in_Days;
				document.getElementById("leave-form").submit();
			}
			else
			{
				window.alert("Please enter correct details!");
			}
		}
	</script>

</body></html>