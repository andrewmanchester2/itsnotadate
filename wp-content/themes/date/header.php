<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
    <head>
        <title>Date Demo</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <script src="js/jquery.js" type="text/javascript" charset="utf-8"></script>
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/themes/base/jquery-ui.css" type="text/css" media="screen" />
        <link rel='stylesheet' href='http://itsnotadate.demos.thisisboss.com/wp-content/themes/date/style.css' type='text/css' media="screen" />
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
    </head>

    <!-- Begin Body -->
    <body class=" customize-support">

        <div id="header">
            <div class="logo"><img src="http://itsnotadate.demos.thisisboss.com/wp-content/uploads/logo.gif" /></div>
            <div class="mingle">
                <p class="call-now">Ready to mingle?</p>
                <p class="phone number"> Call now 1.800.123.1234</p>
            </div>
            <div class="clear-both"></div>

        </div>

        <div id="main-picture">
            <div class="menu" >
                <a href="" >About us</a><span class="nav-divider">&nbsp; | &nbsp;</span>
                <a href="">Our Process </a><span class="nav-divider">&nbsp; | &nbsp;</span>
                <a href="">The Buzz </a><span class="nav-divider">&nbsp; | &nbsp;</span>
                <a href="">Success Stories </a><span class="nav-divider">&nbsp; | &nbsp;</span>
                <a href="">Blog </a><span class="nav-divider">&nbsp; | &nbsp;</span>
                <a href="">Contact  </a>
            </div> <!-- /.menu -->
            <div id="objects">
            <div id="slider" >
              <?php echo do_shortcode("[nivoslider id='22']"); ?>
            </div> <!-- /#slider -->

            <div id="trial-form"><h2>Try us today Free</h2>
                <form id="trial" action="">
                    <label for="first_name"></label><input type="text" name="first_name" class="required" id="first_name" placeholder="First Name" /><span>*</span><br />
                    <label for="last_name"></label><input type="text" name="last_name" class="required" id="last_name" placeholder="Last Name" /><span>*</span><br />
                    <label for="phone"></label><input type="text" name="phone" class="required" id="phone" placeholder="Phone" /><span>*</span><br />
                    <label for="email"></label><input type="text" name="email" class="required email" id="email" placeholder="Email" /><span>*</span><br />
                    <input type="age" name="age" class="required email" id="age" placeholder="Age" />
                    <br/>
                    <label for="hear">How did you hear about us ?</label>
                    <select name="hear">
                        <option value="volvo">Volvo XC90</option>
                        <option value="saab">Saab 95</option>
                        <option value="mercedes">Mercedes SLK</option>
                        <option value="audi">Audi TT</option>
                    </select>
                    <div class="submit" >Submit</div>
                </form>
            </div>
        </div>
        </div>
       <!--  Begin Content-->