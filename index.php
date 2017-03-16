<?php get_header(); ?>

<ul class='sm-nav'>
  <li>
    <a href='index.html'>
      <i class='fa fa-facebook'></i>
    </a>
  </li>
  <li>
    <a href='index.html'>
      <i class='fa fa-twitter'></i>
    </a>
  </li>
  <li>
    <a href='index.html'>
      <i class='fa fa-linkedin'></i>
    </a>
  </li>
  <li>
    <a href='index.html'>
      <i class='fa fa-flickr'></i>
    </a>
  </li>
</ul>

<section class='body-content-home'>

  <div class='bch-left'>
    <h1>Western Ecosystems Technology, ULC</h1>
    <h2>Providing Scientific Solutions to Natural Resource Challenges in Canada</h2>
    <p class='body-text'>
      WEST provides environmental and statistical consulting services and contract research
      throughout Canada and internationally to industry, government, and private organizations.
      We offer clients a unique combination of field ecology and statistics to help solve on-going
      and contemporary natural resource problems.
    </p>
    <p class='body-text'>
      Through the use of state-of-the-art statistical principles in the design, conduct and analysis
      of ecological field studies, WEST specializes in a common sense, defensible, and professional approach to the solution of natural resource problems. WEST’s expert ecologists and biometricians have broad experience in basic and applied ecological studies and the sophisticated
      analysis of natural resource data.
    </p>





		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

				<header class="article-header">

					<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

				</header>

				<section class="entry-content cf">
					<?php the_content(); ?>
				</section>

			</article>

		<?php endwhile; ?>




  </div>


  <div class='bch-right'>
    <div class='contact-callout'>
      <h2>Contact Us</h2>
      <p class='body-text'>
        WEST is committed to providing the highest level of professional consulting services resulting in original solutions to a wide range of natural resource problems.
      </p>
      <strong>
        Contact us with your project inquiries.
      </strong>
      <div class='btn btn-primary'>
        Contact
      </div>
    </div>
  </div>

</section>


<?php else : ?>

	<article id="post-not-found" class="hentry cf">
			<header class="article-header">
				<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
		</header>
			<section class="entry-content">
				<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
		</section>
		<footer class="article-footer">
				<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
		</footer>
	</article>

<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
