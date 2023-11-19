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
			#all-courses-main-area
			{
				display: grid;
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
	  			grid-template-columns: repeat(4, 25%);
				margin-left: 10px;
			}
			#all-courses-main-area
			{
				display:inline-block;
				width:400px;
				margin-left: 30px;
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
		.leave-form{
		    display:block;
		    width:330px;
		    margin:auto;
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
			padding: 10px;
			margin: 10px;
			width: 50px;
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
			width: 90%;
			height: 40px;
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
	    .course-card
	    {
	    	display: block;
/*			display: none;*/
	    	text-decoration: none;
	    	width: 90%;
	    	height: 300px;
	    	margin: auto;
	    	margin-top: 20px;
	    	padding: 5px;
	    	background-color: white;
	    	border-radius: 20px;
	    }
	    .course-card:hover
	    {
	    	background-color: #A3AED0;
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
	    	font-size: 10px;
	    	font-weight: 500;
	    	border-radius: 10px;
	    	background-color: #05CD99;
	    	color: white;
	    }
	    .course-card-title
	    {
	    	margin-left: 20px;
	    	font-size: 14px;
	    	font-weight: 600;
	    	color: #1B2559;$cname[$i]
	    	font-family: 'josefin sans',sans-serif;
	    }
	    .course-card-details
	    {
	    	margin-left: 20px;
	    	font-size: 10px;
	    	color: #A3AED0;
	    }
	    .course-card:hover
	    .course-card-details
	    {
	    	color: #1B2559;
	    }
	    .course-card-profile
	    {
	    	margin-right: 15px;
	    	width: 50px;
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
    @media (max-width: 490px) 
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
      
      #image-box
      {
        display: none;
      }
      .assign-ticket{
          width:100%;
      }
      .leave-from{
          margin-left:-50px;
      }
      .leave-form input{
          width:50%;
      }
      #tassign{
          margin-left:-25px;
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
        background-color:white;
        border-radius:20px;
        margin:auto;  
        text-align:center;
        display: block;
        width: 90%;
        margin-top:100px;
        padding-bottom:40px;
        padding-top:40px;
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
    .inputs
    {
     width:300px;
      height: 38px;
      padding: 10px;
      margin-left:50px;
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
      text-decoration: none;
      font-size: 12px;
      font-family: 'nunito',sans-serif;
      color: #0352BD;
    }
    .forgot-pass:hover
    {
      color: #3B38F6;
    }
    .login-btn
    {
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
    .login-btn:hover
    {
      cursor: pointer;
      background-color: #3B38F6;
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
      .assign-ticket{
          margin: 5% 20%;
          background-color:white;
          padding:30px;
          line-height:2;
          border-radius:20px;
      }
      #mylist{
      	padding: 0px;
      	line-height: 2;
	    margin-top: 2%;
	    margin-left: 3%;
	    background-color: white;
	    border-radius: 40px;
	    width: 100%;
      }
      
      input {
    height: 30px;
    padding: 3px;
    font-size: 14px;
    color: #1C1D21;
    border-radius: 20px;
    display: block;
    margin-left: 50px;
    width: 30%;
    margin-top: 20px;
	}
	button{
		cursor: pointer;
    padding: 10px;
    width: 15%;
    border: 0px solid black;
    border-radius: 20px;
    color: white;
    background-color: #0352BD;
    font-size: 10px;
    font-family: 'nunito',sans-serif;
    margin: 10px;
    margin-left: 40%;
	}
	button:hover{
		background-color:#190793;
	}
      #mylist td
      {
	        text-align:center;
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
		<div id="sec1">
			<div style="margin-top: 10px;">
				<img src="logo_dark.jpg" id="logo">
				<div id="logo-txt">
					<h1>Departmental store</h1>
					<h1 style="color: #4318FF;">Calculator</h1>
				</div>
			</div>
		</div>
		<div id="sec2">
			<div id="view-switch">
				
			</div>
		</div>
		<div id="sec3">
		</div>
		<div id="sec4">
			
		</div>
	</div>
	<div id="tassign">
	<div class='assign-ticket'><center><h3 style='display:block;font-weight: 400;font-size: 30px;line-height:2;color: #A3AED0;'>Billing</h3></center><form id='leave-form'><span>Product name:</span><input placeholder="Product name" type="text" id='input'><ul class='list' id='list'></ul><span>Quantity:</span><input type="text" id='myquantity'autocomplete='off' value="1" placeholder="quantity"><button>Add</button></form>
	<form action="" method="post"><table id='mylist' class='list-data' style='padding:50px;'><tr><th>Product</th><th>Quantity</th><th>Delete</th></tr></table>
	 <button type="submit" name='submit'>Bill</button></form>
	</div></div></div>
</body>
<?php 
$sql='select * from product';
$result=$conn->query($sql);
echo"<script>let names=[];</script>";
while($emp=$result->fetch_assoc())
{
	$nam=$emp['pname'];
	echo"<script>names.push('$nam');</script>";
}
?>
<?php 
$sql='select * from product';
$result=$conn->query($sql);
echo"<script>let amount=[];</script>";
while($emp=$result->fetch_assoc())
{
	$nam=$emp['pamount'];
	echo"<script>amount.push('$nam');</script>";
}
?>
<script>
let sortedNames = names.sort();
let input = document.getElementById("input");
input.addEventListener("keyup", (e) => {
  removeElements();
  for (let i of sortedNames) {
    if (
      i.toLowerCase().startsWith(input.value.toLowerCase()) &&
      input.value != ""
    ) {
      let listItem = document.createElement("li");
      listItem.classList.add("list-items");
      listItem.style.cursor = "pointer";
      listItem.setAttribute("onclick", "displayNames('" + i + "')");
      //Display matched part in bold
      let word = "<b>" + i.substr(0, input.value.length) + "</b>";
      word += i.substr(input.value.length);
      //display the value in array
      listItem.innerHTML = word;
      document.querySelector(".list").appendChild(listItem);
    }
  }
});
function displayNames(value) {
  input.value = value;
  removeElements();
}
function removeElements() {
  let items = document.querySelectorAll(".list-items");
  items.forEach((item) => {
    item.remove();
  });
}
	let myform=document.getElementById('leave-form');
	let mylist=document.querySelector('#mylist');
	let myinput=document.getElementById('input');
	let myquantity=document.getElementById('myquantity');
	myform.addEventListener("submit",(data)=>{
		data.preventDefault()
		let count=0;
		for (let i of sortedNames) {
    		if (i.toLowerCase().startsWith(input.value.toLowerCase()) && input.value != "")
    		{
    			count++;
			}
		}
		if(count!=0)
		{
			createItem(myinput.value,myquantity.value)
		}
	})
	let name_prod=[];
	let name_quantity=[];
	createItem =(d,e) =>{
		let mytemp=`<tr><td>${d}</td><td>${e}</td><td><button style='margin-left:50;' onclick='deleteitem(this)'>Delete</button></td></tr>`;
		mylist.insertAdjacentHTML("beforeend",mytemp);
		myinput.value='';
		name_prod.push(d);
		name_quantity.push(e);
		console.log(d);
		myinput.focus();
	}
	function deleteitem(x)
	{
		console.log(x.value);
		//console.log(x.closest('tr').find('td.Product').text());
		x.closest('tr').remove();

	}
  </script>
  	<?php
	if(isset($_POST['submit']))
	{
		echo"<script>var ans=0;for(let i=0;i<name_prod.length;i++){for(let j=0;j<names.length;j++){if(names[j]==name_prod[i]){ans+=name_quantity[i]*amount[i];}}};console.log(ans);window.location.href='income_process.php?amt='+ans;''</script>";
	}
	?>
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
</html>