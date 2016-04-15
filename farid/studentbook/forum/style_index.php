	<style type="text/css" media="screen, print, projection">
	body,
	html {
		margin:0;
		padding:0;
		color:#000;
width:100%;
height:100%;

background-color:#d4f4a6;


}

	#wrap { 
	
width:100%;
        height:1000px;
		margin:0 auto;
 background: #d4f4a6;


	}
	#header {
    	padding:5px 10px;
		background:#04B431;
width:100%;
	}
	h1 {
	    margin:0;
    }
	#nav {
		padding:8px 10px;
		background:#04B431;

-moz-border-radius:10px;
	-webkit-border-radius:10px;
	border-radius:10px;

background:url("../user/home/images/student_word.png") no-repeat #04B431 right 70 top 5;

position:fixed;
	width:100%;

	
	top:0;
	left:0;
right:0;
	}
	#nav ul {
		margin:0;
		padding:0;
		list-style:none;
	}
	#nav li {
		
		margin:0;
		padding:0;
	}
	#main {


		
min-height: 100%; height: auto !important; height: 100%; margin: 0 auto ;
 background: #d4f4a6;

		
		padding:10px;
		
	}
	h2 {
		margin:0 0 1em;
	}
	
	
	#footer {
		
		background:#04B431;
position:fixed;
	width:100%;
	height:17px;
	bottom:0;
	left:0;
color:#f2fede;
	}
	#footer p {
		margin:0;
    }
	* html #footer {
		height:1px;
	}
	
	#farid{
	

 background: #6ecf81;
    background: -moz-linear-gradient(top, #6cd853 0%, #acf39b 100%); /* firefox */

    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#6cd853), color-stop(100%,#acf39b)); 
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#6cd853', endColorstr='#acf39b',GradientType=0 ); 
	
	}
	
	input[type=file]{
	width:90px;
	
	}
	
	#FileUpload {
    position:relative;
}
 
#BrowserVisible {
    position: absolute;
    top: -1px;
    left: -165px;
    z-index: 1;
    background:url(images/button.png) 100% 0px no-repeat;
    height:26px;
    width:240px;
}
 
#FileField {
width:0px;
   border:none;
 background:transparent;
}
 
#BrowserHidden {
    position:relative;
    width:90px;
    height:26px;
    text-align: right;
    -moz-opacity:0 ;
    filter:alpha(opacity: 0);
    opacity: 0;
    z-index: 2;
}

		
	</style>

<style>
input.button_studentbook_style {
font-weight:bold;
	color: #f5f5f5;
	padding: 0px 7px 4px;
	background-color: #d4f4a6;
	border: none;
	
	-webkit-user-select: none;
	-moz-user-select: none;
	user-select: none;
	-webkit-box-shadow: inset 0px -3px 1px rgba(0, 0, 0, 0.45), 0px 2px 2px rgba(0, 0, 0, 0.25);
	-moz-box-shadow: inset 0px -3px 1px rgba(0, 0, 0, 0.45), 0px 2px 2px rgba(0, 0, 0, 0.25);
	box-shadow: inset 0px -3px 1px rgba(0, 0, 0, 0.45), 0px 2px 2px rgba(0, 0, 0, 0.25);
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	-webkit-text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.5);
	-moz-text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.5);
	text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.5);
	text-decoration: none;
	font-size: 17px;
}

input.button_studentbook_style:active {
	position: relative;
	top: 3px;
	-webkit-box-shadow: inset 0px -3px 1px rgba(255, 255, 255, 1), inset 0 0px 3px rgba(0, 0, 0, 0.9);
	-moz-box-shadow: inset 0px -3px 1px rgba(255, 255, 255, 1), inset 0 0px 3px rgba(0, 0, 0, 0.9);
	box-shadow: inset 0px -3px 1px rgba(255, 255, 255, 1), inset 0 0px 3px rgba(0, 0, 0, 0.9);
}
input.button_studentbook_style:active:after {
	content: "";
	width: 100%;
	height: 3px;
	background: #fff;
	position: absolute;
	bottom: -1px;
	left: 0;
}
</style>


<style>
a.button_studentbook_style {
font-weight:bold;
	color: white;
	padding: 0px 7px 4px;
	background-color: #d4f4a6;
	border: none;
	
	-webkit-user-select: none;
	-moz-user-select: none;
	user-select: none;
	-webkit-box-shadow: inset 0px -3px 1px rgba(0, 0, 0, 0.45), 0px 2px 2px rgba(0, 0, 0, 0.25);
	-moz-box-shadow: inset 0px -3px 1px rgba(0, 0, 0, 0.45), 0px 2px 2px rgba(0, 0, 0, 0.25);
	box-shadow: inset 0px -3px 1px rgba(0, 0, 0, 0.45), 0px 2px 2px rgba(0, 0, 0, 0.25);
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	-webkit-text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.5);
	-moz-text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.5);
	text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.5);
	text-decoration: none;
	font-size: 17px;
}

a.button_studentbook_style:active {
	position: relative;
	top: 3px;
	-webkit-box-shadow: inset 0px -3px 1px rgba(255, 255, 255, 1), inset 0 0px 3px rgba(0, 0, 0, 0.9);
	-moz-box-shadow: inset 0px -3px 1px rgba(255, 255, 255, 1), inset 0 0px 3px rgba(0, 0, 0, 0.9);
	box-shadow: inset 0px -3px 1px rgba(255, 255, 255, 1), inset 0 0px 3px rgba(0, 0, 0, 0.9);
}
a.button_studentbook_style:active:after {
	content: "";
	width: 100%;
	height: 3px;
	background: #fff;
	position: absolute;
	bottom: -1px;
	left: 0;
}
</style>
	