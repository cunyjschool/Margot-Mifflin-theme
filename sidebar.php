<div id="sidebar">
<ul>
  <li class="home-home"<?php if (is_page('home')){ echo " id=\"current-home\"";}?>><a href="<?php bloginfo('url'); ?>">Home</a></li>
  <li class="articles" <?php if (is_page('articles')){ echo " id=\"current-articles\"";}?>><a href="<?php bloginfo('url'); ?>/articles/">Articles</a></li>
  <li class="<?php if (is_page('books')){ echo "books-home";} else { echo "books";} ?>"<?php if (is_page('books')){ echo " id=\"current-books\"";}?>><a href="<?php bloginfo('url'); ?>/books/">Books</a></li>
  <li class="bio"<?php if (is_page('biography')){ echo " id=\"current-bio\"";}?>><a href="<?php bloginfo('url'); ?>/biography/">Biography</a></li>
  <li class="<?php if (is_page('home')){ echo "news-home";} else { echo "news";} ?>"<?php if (is_page('news')){ echo " id=\"current-news\"";}?>><a href="<?php bloginfo('url'); ?>/news/">News</a></li>
  <li class="contact"<?php if (is_page('contact')){ echo " id=\"current-contact\"";}?>><a href="<?php bloginfo('url'); ?>/contact/">Contact</a></li>
</ul>
</div>

