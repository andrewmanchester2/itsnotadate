<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>

		<div id="content">
		<div id="primary">
			<div id="content" style="
    width: 71%;
    margin-left: 232px;
">
    
		<div id="primary" style="
    width: 72%;
">
			<div id="content" role="main" style="
    margin-top: 5px;
    margin-left: 173px;
">
<h1> <p style=" width: 92%;font-size: 37px;color: grey;font-family: &quot;HelveticaNeue-Light&quot;, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;;">It's Not a Date is a professional and enjoyable alternative to online dating.</p></h1>
<p style="width: 100%;font-family: Myriad Pro;color: grey;margin-bottom: 36px;">
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</p> 
<div class="tabs">
        <ul class="tabNavigation">
            <li><a href="#first" class="">First</a></li>
            <li><a href="#second" class="">Second</a></li>
            <li><a href="#third" class="selected">Third</a></li>
        </ul>
        
        <div id="second" style="display: none; color: grey;">

            
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div id="third" style="display: block;">
            <h2>Third</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
<h2 style="
    color: grey;
">It's Not A Date Blog</h2>
<div class="post" style="
    border:  2px solid grey;
    margin-top: 40px;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 10px;
    padding-right: 10px;
">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> <h2><?php the_title() ;?></h2> <?php the_post_thumbnail(); ?> <?php the_excerpt(); ?></div> <?php endwhile; else: ?> <p>Sorry, no posts to list</p> <?php endif; ?>

 
</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

   
</div>
</div>
</div>

</div>