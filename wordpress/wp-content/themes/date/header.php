<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US"><!-- BEGIN head --><head>

	<!-- Meta Tags -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<!-- Title -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

<script src="/js/jquery.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/themes/base/jquery-ui.css" type="text/css" media="screen">

	<script type="text/javascript" charset="utf-8">
		$(function () {
			var tabContainers = $('div.tabs > div');
			tabContainers.hide().filter(':first').show();
			
			$('div.tabs ul.tabNavigation a').click(function () {
				tabContainers.hide();
				tabContainers.filter(this.hash).show();
				$('div.tabs ul.tabNavigation a').removeClass('selected');
				$(this).addClass('selected');
				return false;
			}).filter(':first').click();
		});
</script>
	<title>Date Demo</title>
 <style type="text/css" media="screen">
    UL.tabNavigation {
		    list-style: none;
		    margin: 0;
		    padding: 0;
		}

		UL.tabNavigation LI {
		    display: inline;
		}

		UL.tabNavigation LI A {
		    padding: 3px 5px;
		    background-color: #ccc;
		    color: #000;
		    text-decoration: none;
		}

		UL.tabNavigation LI A.selected,
		UL.tabNavigation LI A:hover {
		    background-color: #333;
		    color: #fff;
		    padding-top: 7px;
		}
		
		UL.tabNavigation LI A:focus {
			outline: 0;
		}

		div.tabs > div {
			padding: 5px;
			margin-top: 3px;
			border: 5px solid #333;
		}
		
		div.tabs > div h2 {
			margin-top: 0;
		}

		#first {
		    background-color: #f00;
		}

		#second {
		    background-color: #0f0;
		}

		#third {
		    background-color: #00f;
		}
		
		.waste {
			min-height: 1000px;
		}
		
    </style>

</head>

<!-- Begin Body -->
<body class=" customize-support" style="zoom: 1;"><div class="logo" style="
    font-family: Myriad Pro;
    font-size: 49px;
    color: #CC3333;
    margin-left: 177px;
    margin-bottom: 0px;
"><p style="
    font-weight: bold;
    margin-bottom: 22px;
">It's Not a Date </p>
    
    <p style="
    font-size: 17px;
    margin-top: -33px;
    margin-bottom: -39px;
    font-style: italic;
    color: black;
">A great way to meet business profesisonals</p></div>

<div class="mingle" style="
    float: right;
    margin-top: -43px;
    margin-bottom: -10px;
    margin-right: 218px;
">
    <p class="call now" style="
    color: #CC3333;
    font-size: 23px;
    font-weight: bold;
    margin-right: 100px;
">Ready to mingle?</p>
    <p class="phone number" style="
    margin-top: -15px;
"> Call now 1.800.123.1234</p>
    </div>
        <div class="menu" style="
    float: right;
    background-color: #CC3333;
    margin-right: -232px;
    margin-top: 48px;
    padding-right: 14px;
    font-size: 11px;
">
                       <ul class="menu" style="
    z-index: 40;
    float: right;
    position: relative;
">
                        <a href="" style="
    color: white;
    padding-right: 28px;
">About us</a>
<a href="" style=" color: white; z-index: 40; float: right; padding-right: 9px;">Our Process </a>
<a href="" style=" color: white; padding-right: 18px;">The Buzz </a>
<a href="" style=" color: white; padding-right: 21px;">Success Stories </a>
<a href="" style=" color: white; padding-right: 25px;">Blog </a>
<a href="" style=" color: white; padding-right: 20px;">Contact  </a>
                    </ul>
                     
<!--End of the menu-->
</div>

                     
<!--End of the menu-->

<div id="main picture" style="
    background: url(http://localhost/date/wordpress/wp-content/uploads/2013/01/bar-Div.png);
    height: 452px;
    margin-top: 48px;
    border-top: 4px solid grey;
">
    
         <div id="slider" style="
    background-color: #fff;
    float: left;
    margin-top: 74px;
    margin-left: 407px;
">
             <div id="header"><div class="wrap"><div id="slide-holder"><div id="slide-runner"><a href=""></a>
<a href=""><img id="slide-img-2" src="http://localhost/date/wordpress/wp-content/uploads/2013/01/woman1-718x2881.jpg" class="slide" alt=""></a>

</div></div></div></div>

         </div>
    <div id="trial form" style="
    float: right;
    margin-right: 258px;
    background-color: #fff;
    margin-top: 53px;
    padding-left: 23px;
    padding-bottom: 4px;
    padding-top: -1px;
    padding-right: 30px;
    font-family: Myriad pro;
    border: 3px solid grey;
">
        
<h2>Try us today Free
<form id="trail form">

             <label for="first_name"></label><input type="text" name="first_name" class="required" id="first_name" placeholder="First Name" style="
    margin-top: 22px;
    width: 211px;
    margin-bottom: 0px;
    padding-left: 7px;
"><span style="color:red; font-weight:bold;">*</span><br>
<label for="last_name"></label><input type="text" name="last_name" class="required" id="last_name" placeholder="Last Name" style="
    width: 211px;
    margin-bottom: 1px;
    padding-left: 5px;
"><span style="color:red; font-weight:bold;">*</span>
<br>
<label for="phone"></label><input type="text" name="phone" class="required" id="phone" placeholder="Phone" style="
    width: 211px;
    margin-bottom: 3px;
    padding-left: 7px;
"><span style="color:red; font-weight:bold;">*</span>
<br>
<label for="email"></label><input type="text" name="email" class="required email" id="email" placeholder="Email" style="
    width: 211px;
    margin-bottom: 10px;
    padding-left: 7px;
"><span style="color:red; font-weight:bold;">*</span>
<br>
<input type="text" name="age" class="required email" id="age" placeholder="Age" style="
    width: 41px;
    margin-bottom: 10px;
    padding-left: 7px;
">
     <div class="submit" style="
    background-color: #C90014;
    width: 72px;
    padding-left: 19px;
    padding-top: 4px;
    padding-bottom: 4px;
    margin-top: 15px;
    border-radius: 4px;
    font-size: 15px;
    color: white;
">
Submit
</div>
</form></h2>
    </div>
</div>
   

<!--  Begin Content-->