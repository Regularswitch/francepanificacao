<?php

get_header();

while (have_posts()) :
    the_post();
    include_once('page_components/menu.php');
    echo "<div class='wrapper content-page'>";
    the_content();
    echo "</div>";
    include_once('page_components/popup.php');
    include_once('page_components/footer.php');
endwhile;

get_footer();
