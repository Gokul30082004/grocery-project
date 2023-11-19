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
		@media ( max-width : 490px)
		{
			#main-area
			{
				display: block;
				margin-left: 10px;
				margin-top: 0px;
			}
			#all-courses-main-area
			{
				/*display: grid;*/
				/*margin-left: 10px;*/
				margin-top: 0px;
			}
    	    .course-card
    	    {
    	    	display: block;
    	    	text-decoration: none;
    	    	width:90%;
    	    	height: 200px;
    	    	margin:auto;
    	    	margin-top: 20px;
    	    	padding: 5px;
    	    	background-color: white;
    	    	border-radius: 20px;
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
			#view-switch 
			{
				display: none;
			}
			#view-switch button
			{
				display: none;
				opacity: 0;
			}
		}
		@media ( min-width : 491px)
		{
			#main-area
			{
				display: block;
				margin-left: 10px;
				margin-top: 0px;
			}
			#all-courses-main-area
			{
				/*display: grid;*/
				/*margin-left: 10px;*/
				margin-top: 0px;
			}
    	    .course-card
    	    {
    	    	display: inline-block;
    	    	text-decoration: none;
    	    	width:29%;
    	    	height: 200px;
    	    	margin-top: 20px;
    	    	margin-left:20px;
    	    	padding: 5px;
    	    	background-color: white;
    	    	border-radius: 20px;
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
			#view-switch 
			{
				display: none;
			}
			#view-switch button
			{
				display: none;
				opacity: 0;
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
			#all-courses-main-area
			{
				/*display:inline-block;*/
				/*width:400px;*/
				margin-left: 30px;
			}
    	    .course-card
    	    {
    	    	display: inline-block;
    	    	text-decoration: none;
    	    	width:22%;
    	    	height: 200px;
    	    	margin-top: 20px;
    	    	margin-left:20px;
    	    	padding: 5px;
    	    	background-color: white;
    	    	border-radius: 20px;
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
			width: 92%;
			margin-top: 20px;
			margin-left: 10px;
			display: block;
			margin: auto;
			border-radius: 10px;
			padding: 10px;
		}
		#courses-list h3
		{
			font-family: 'josefin sans',sans-serif;
			font-weight: 400;
			font-size: 14px;
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
			width: 4%;
		}
		.courses-list-logo img
		{
			width: 40px;
			border-radius: 25px;
			vertical-align: middle;
		}
		.courses-list-title
		{
			width: 20%;
		}
		.courses-list-title h4
		{
			font-family: 'josefin sans',sans-serif;
			font-weight: 400;
			font-size: 14px;
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
			font-size: 12px;
			display: block;
			text-align: left;
			padding-left: 10px;
			margin: 0px;
			color: #A3AED0;
		}
		.courses-list-assignments
		{
			width: 10%;
			text-align: center;
			font-family: 'nunito',sans-serif;
			font-weight: 400;
			font-size: 14px;
			line-height: 1;
			display: block;
			padding-left: 0px;
			margin: 0px;
			color: black;
		}
		.courses-list-completion
		{
			width: 5%;
		}
		.courses-list-completion p
		{
			font-family: 'nunito',sans-serif;
			font-weight: 400;
			font-size: 14px;
			line-height: 1;
			display: block;
			padding-left: 0px;
			margin: 0px;
			color: #05CD99;
			width: 28px;
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
	    .course-card-profile
	    {
	    	/*margin-right: 15px;*/
	    	margin-right:7px;
	    	margin-top:70px;
	    	/*float:right;*/
	    	width: 50px;
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
			font-size: 14px;
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
			height: 63%;
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
			width: 5%;
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
			width: 20%;
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
			width: 50px;
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
			color: #05CD99;
			width: 30px;
			background-color: #E6FAF5;
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
		#profile-card
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
			height: 62%;
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
	    .course-card:hover
	    {
	    	background-color: #cfdbe8;
	    }
	    .course-card-img
	    {
	    	display: block;
	    	width: 90%;
	    	height: 160px;
	    	margin: auto;
	    	margin-top: 10px;
	    	border: 1.5px solid #1B2559;
	    	border-radius: 15px;
	    	background-size: 100%;
	    	background-position: center;
	    }
	    .course-card-progress
	    {
	    	width: 30px;
	    	float: right;
	    	margin-right: 3%;
	    	padding: 5px;
	    	text-align: center;
	    	font-size: 12px;
	    	font-weight: 500;
	    	border-radius: 10px;
	    	/*background-color: #05CD99;*/
	    	color: black;
	    }
	    .course-card-title
	    {
	    	margin-left: 20px;
	    	font-size: 14px;
	    	font-weight: 600;
	    	color: #1B2559;
	    	font-family: 'josefin sans',sans-serif;
	    }
	    .course-card-details
	    {
	    	margin-left: 20px;
	    	font-size: 10px;
	    	color:  #1B2559;
	    }
	    .course-card:hover
	    .course-card-details
	    {
	    	color: #1B2559;
	    }
	    #all-courses-table-area
	    {
	    	margin-top: 30px;
	    	display: block;
	    }
	    #all-courses-table
	    {
	    	border-collapse: collapse;
	    	border-radius: 10px;
	    	overflow: hidden;
	    	width: 94%;
	    	margin: auto;
	    }
	    .buttons{
	      
	        width:100%;
	        text-align:right;
	        margin-top:15px;
	    }
	    .table-data{
	        font-size:18px;
	        line-height:5;
	        width:98%;
	        text-align:center;
	        border-radius:1.5px;
	    }
	    
	    .table-data th, td {
            border-bottom: 1px solid #ddd;
        }
        #table{
            padding:20px;
            margin-top:2%;
            margin-left:3%;
             background-color:white;
             border-radius:40px;
             width:90%;
             margin-top:40px
             margin-left:400px;
        }
        #table-view{
            cursor:pointer;
            padding: 10px;
		    height: 35px;
		    width: 80px;
		    border: 0px solid black;
		    border-radius: 20px;
		    color: white;
		    background-color: #0352BD;
		    font-size: 10px;
		    font-family: 'nunito',sans-serif;
		    margin:10px;
        }
        #table-view:hover{
            background-color:#190793;
        }
        #cticket:hover{
            background-color:#190793;
        }
        #cticket{
            cursor:pointer;
            padding: 1px;
		    height: 20px;
		    width: 8%;
		    border: 0px solid black;
		    border-radius: 20px;
		    color: white;
		    background-color: #0352BD;
		    font-size: 10px;
		    font-family: 'nunito',sans-serif;
		    margin:10px;
        }
        
        }
        .table-hover:visited{
            text-decoration:none;
            color:red;
        }
        #search-btn{
            	height: 30px;
				padding: 3px;
				padding-left: 50px;
				font-size: 14px;
				color: #1C1D21;
				border-radius: 20px;
				display: block;
				margin-left:50px;
				width: 15%;
				margin-top: 20px;
        }
        
	    
	</style>


</head>
<body>
	<button id="menu-trigger" onclick="triggermenu()"><i class="bi bi-list"></i></button>
	<!-- <button id="menu-trigger"><i class="bi bi-x"></i></button> -->
	<div id="side-bar">	
		<div id="side-menu">
			<a href="dashboard.php" class="side-menu-btn">
				<span class="side-menu-btn-icon"><i class="bi bi-house-door-fill"></i></span>
				<span class="side-menu-btn-txt">Home</span>
			</a>
			<a href="product.php" class="side-menu-btn active">
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
					<h1>Departmental shop</h1>
					<h1 style="color: #4318FF;">Product details</h1>
				</div>
			</div>
		</div>
	</div>

	</div>
	<div id='all-courses-main-area'>
	<div class="buttons">
	       <input type='search' style='float:left; border-radius:6px;padding:2px;margin-top:20px;' placeholder='Search here' id='search-btn' name='search_btn'>
		    <a href='delete-prod.php' id="cticket" style='text-decoration:none;padding:10px;'>Delete product</a>
	    <a href='create-prod.php' id="cticket" style='text-decoration:none;padding:10px;'>Create product</a>
	</div>
	
	   <div id="table" class="table">
	   <table class="table-data" id="table-data">
	       <thead>
	       <tr>
	           <th>Product Name</th>
	           <th>Product amount</th>
	           <th>Profit</th>
	           <th>total Amount</th>
			   <th>Total Products</th>
           </tr>
           </thead>
           	       <tbody>
				<?php
				$sql="select * from product";
				$result=$conn->query($sql);
				while($prod=$result->fetch_assoc())
				{
    		  		echo"<tr><td><a style='text-decoration:none;' class='table-hover'href='edit-prod.php?id=".$prod['pname']."'>".$prod['pname']."</a></td><td>".$prod['pamount']."</td><td>".$prod['pprofit']."</td><td>".$prod['pamount']+$prod['pprofit']."</td><td>".$prod['pquantity']."</td></tr>";
				}
			  ?>
    </tbody>
    </table>
    </div>
    	<script>
    		var mleft=closed;
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
        // Get references to the input field and table body
        const searchInput = document.getElementById('search-btn');
        const tableBody = document.getElementsByTagName('tbody')[0];

        // Add an event listener to the input field
        searchInput.addEventListener('input', function () {
            const searchText = searchInput.value.toLowerCase();

            // Get all rows in the table body
            const rows = tableBody.getElementsByTagName('tr');

            // Loop through each row and hide/show based on the search text
            for (let i = 0; i < rows.length; i++) {
                const row = rows[i];
                const cells = row.getElementsByTagName('td');
                let rowMatch = false;

                // Loop through all cells in the row
                for (let j = 0; j < cells.length; j++) {
                    const cell = cells[j];
                    const cellText = cell.textContent.toLowerCase();

                    // Check if the cell contains the search text
                    if (cellText.includes(searchText)) {
                        rowMatch = true;
                        break; // No need to check other cells once a match is found in this row
                    }
                }

                // Show or hide the row based on the search result
                if (rowMatch) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            }
        });
    </script>

</body></html>