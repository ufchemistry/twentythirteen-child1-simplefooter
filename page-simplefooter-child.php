<?php
/*
Template Name: Child Theme Page with Simple Footer
*/
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<?php site_breadcrumbs(); ?>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
 			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post();
			 ?>
						<h1 class="entry-title"><?php the_title(); ?></h1>

						<?php the_content(); ?>

					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->

				<?php comments_template(); ?>
			<?php endwhile;
			 ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php ##get_footer();
 ?>
 </div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
				<div id="secondary" class="sidebar-container" role="complementary" style="width:100%">
		<div class="widget-area" style="width:600px; margin: 0 auto 0 auto;">
<div class="widget" style="float:left; width:auto; padding:0px; margin:0px"><h3 class="widget-title" style="text-align:right">Program Organizer&nbsp;&nbsp;&nbsp;</h3>
<img style="position:relative" src="/wp-content/uploads/sites/5/2013/12/acs-logo-247x95.png" alt="American Chemical Society, Florida Section" width="247" height="95" /></div>
<div class="widget" style="float:left; width:auto; padding:0px; padding-left:15px; margin:0px">
<ul>
<li><a href="mailto:nelly.mateeva@famu.edu?Subject=FAME%202014">Dr. Nelly Mateeva</a></li>
</ul>
</ul>
</div>
<div class="widget" style="float:left; width:auto; padding:0px; padding-left:15px; margin:0px"><ul>
<li>(850) 412-5663</li>
<li>Department of Chemistry</li>
<li>Florida Agricultural and Mechanical University</li>
<li>Tallahassee, FL 32307</li></div>
</div><!-- .widget-area -->
	</div><!-- #secondary -->

			<div class="site-info">
								<a href="http://wordpress.org/" title="Semantic Personal Publishing Platform">Proudly powered by WordPress</a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->



		</body>
</html>