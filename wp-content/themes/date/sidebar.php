<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

$options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

				<aside id="meta" class="widget" style="
    margin-top: -323px;
    height: 282px;
    margin-bottom: 117px;
    width: 18%;
    float: right;
">
				<div id="newsletter" style="
    background-color: #fff;
    height: 161px;
    width: 222px;
    padding-top: 32px;
    padding-left: 30px;
    border: 1px solid #ccc;
    border-radius: 15px;
">
<form id="newsletter"><label for="first_name"></label><input type="text" name="first_name" class="required" id="first_name" placeholder="First Name"><span style="color:red; font-weight:bold;">*</span>
<label for="last_name"></label><input type="text" name="last_name" class="required" id="last_name" placeholder="Last Name"><span style="color:red; font-weight:bold;">*</span>
<label for="phone"></label><input type="text" name="phone" class="required" id="phone" placeholder="Phone"><span style="color:red; font-weight:bold;">*</span>
<label for="email"></label><input type="text" name="email" class="required email" id="email" placeholder="Email"><span style="color:red; font-weight:bold;">*</span>
</form>


</div>
				</aside>

			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->
<?php endif; ?>