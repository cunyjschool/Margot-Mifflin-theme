<div id="sidebar">
<ul>
  <li class="home-home"<?php if (is_page('3')){ echo " id=\"current-home\"";}?>><a href="/">Home</a></li>
  <li class="articles" <?php if (is_page('7')){ echo " id=\"current-articles\"";}?>><a href="/articles/">Articles</a></li>
  <li class="<?php if (is_page(3)){ echo "books-home";} else { echo "books";} ?>"<?php if (is_page('13')){ echo " id=\"current-books\"";}?>><a href="/books/">Books</a></li>
  <li class="bio"<?php if (is_page('15')){ echo " id=\"current-bio\"";}?>><a href="/biography/">Biography</a></li>
  <li class="<?php if (is_page(3)){ echo "news-home";} else { echo "news";} ?>"<?php if (is_page('20')){ echo " id=\"current-news\"";}?>><a href="/news/">News</a></li>
  <li class="contact"<?php if (is_page('17')){ echo " id=\"current-contact\"";}?>><a href="/contact/">Contact</a></li>
</ul>
</div>

