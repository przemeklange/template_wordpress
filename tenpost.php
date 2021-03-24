<?php
$args = array(
    'numberposts' => 10,
    'offset' => 0,
    'category' => 0,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'include' => '',
    'exclude' => '',
    'meta_key' => '',
    'meta_value' =>'',
    'post_type' => 'post',
    'suppress_filters' => true
);

$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
?>

<?php
$args = array(
    'numberposts' => 2,
);

$recent_posts = wp_get_recent_posts( $args );


foreach ($recent_posts as $post ) {

?>

<div class="blog_bloc">
    <span class="Title_post"><?php echo $post["post_title"]; ?></span>
    <button id="read" >
    Read more
    </button>
</div>

<?php

}

wp_reset_query();

?>