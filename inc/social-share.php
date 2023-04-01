
<?php

function cgpt_add_social_sharing() {
  // Get the current post URL
  $url = get_permalink();

  // Get the current post title
  $title = get_the_title();

  // Encode the title and URL for use in the social sharing links
  $encoded_title = rawurlencode( $title );
  $encoded_url = rawurlencode( $url );

  // Output the social sharing links
  echo '<div class="social-sharing">';
  echo '<a href="https://www.linkedin.com/shareArticle?url=' . $encoded_url . '&title=' . $encoded_title . '" target="_blank"><i class="fab fa-linkedin"></i> Share on LinkedIn</a>';
  echo '<a href="https://www.facebook.com/sharer/sharer.php?u=' . $encoded_url . '" target="_blank"><i class="fab fa-facebook"></i> Share on Facebook</a>';
  echo '</div>';
}

function cgpt_add_social_sharing_after_title( $title ) {
  if ( is_single() ) {
    $title .= cgpt_add_social_sharing();
  }

  return $title;
}

add_filter( 'the_title', 'cgpt_add_social_sharing_after_title' );


