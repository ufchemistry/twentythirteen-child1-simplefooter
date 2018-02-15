<?php
function site_breadcrumbs() {
  global $post;
  if (is_page() && !is_front_page()) {
    $breadcrumb = "<nav id='breadcrumb'><div class='container'>";
    $breadcrumb .= '<a href="' . get_bloginfo('url') . '">Home</a> ';
    $post_ancestors = get_post_ancestors($post);
    if ($post_ancestors) {
      $post_ancestors = array_reverse($post_ancestors);
      foreach ($post_ancestors as $crumb)
        $breadcrumb .= ' <a href="' . get_permalink($crumb) . '">' . get_the_title($crumb) . '</a> ';
    }
    $breadcrumb .= '<strong>' . get_the_title() . '</strong>';
    $breadcrumb .= "</div></nav>";

    echo $breadcrumb;
  }
}

?>
