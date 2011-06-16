<?php get_header(); ?>

<div class="home" <?php if(is_page(3)) { ?>id="homeframe"<?php } ?>>
<?php get_sidebar(); ?>


  <div id="content">

<?php if(is_page(3)) { ?><div id="home"><?php } ?>
<?php if(is_page(7)) { ?><div id="articles"><?php } ?>
<?php if(is_page(13)) { ?><div id="books"><?php } ?>
<?php if(is_page(15)) { ?><div id="biography"><?php } ?>
<?php if(is_page(20)) { ?><div id="news"><?php } ?>
<?php if(is_page(17)) { ?><div id="contact"><?php } ?>

<?php edit_post_link('Edit this entry.', '<div style="clear: both;">', '</div>'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="post" id="post-<?php the_ID(); ?>">
      <div class="entry">
<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
      </div>
    </div>
	<?php endwhile; endif; ?>


<?php if(is_page(3)) { ?>
<h2 style="margin-top: 40px; margin-bottom: 5px;">Body Politic</h2>
<span class="subscribe"><a href="http://margotmifflin.com/subscribe/">| Subscribe to blog |</span>
<?php query_posts('cat=1&showposts=10'); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <h3 style="margin-top: 40px;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
  <div class="date">Posted on <?php the_date(); ?></div>
  
  <?php the_content('Read more...'); ?>
  
		<?php endwhile; ?>

		<div class="navigation">
<a href="http://margotmifflin.com/category/blog/page/2/">Older Entries &raquo;</a>
		</div>

	<?php else : ?>
<p>There are currently no stories.</p>
<?php endif; ?>
<?php } ?>


<?php if(is_page(3,7,13,15,17,20)) { ?></div><?php } ?>
  </div>
</div>

<?php get_footer(); ?>
