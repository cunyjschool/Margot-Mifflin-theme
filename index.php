<?php get_header(); ?>


<div class="home" id="homeframe">
<?php get_sidebar(); ?>

  <div id="content">
  
  <strong>New in April, 2009: <a href="http://www.amazon.com/Blue-Tattoo-Olive-Oatman-Women/dp/0803211481/ref=pd_bbs_sr_1?ie=UTF8&amp;s=books&amp;qid=1238366646&amp;sr=8-1">The Blue Tattoo: The Life of Olive Oatman (University of Nebraska Press)</a></strong>, a biography of a 19th-century Mormon pioneer who became a celebrity after she was captured, raised, and tattooed by Southwest Indians, then ransomed back five  years later.

Elmore Leonard calls it "a winner."

Read the <a href="http://margotmifflin.com/wp-content/uploads/2009/02/prologue-rotated.pdf">prologue</a> here.


<strong>Body Politic</strong>:
<ul style="padding-bottom: 40px;">

<?php query_posts('category_name=blog&showposts=10'); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  					<?php the_content() ?>

  </li>
    <?php endwhile; else: ?><p>There are currently no stories.</p>
<?php endif; ?>
</ul>

  </div>
</div>

<?php get_footer(); ?>
	