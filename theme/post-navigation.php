<?php
$postlist = get_posts( 'orderby=menu_order&sort_order=asc' );
$posts = array();
foreach ( $postlist as $post ) {
   $posts[] += $post->ID;
}

$current = array_search( get_the_ID(), $posts );
$prevID = $posts[$current-1];
$nextID = $posts[$current+1];
?>

<div class="navigation">
<?php if ( !empty( $prevID ) ): ?>
<div class="navigation--prev">
<a href="<?php echo get_permalink( $prevID ); ?>"
  title="<?php echo get_the_title( $prevID ); ?>">Previous</a>
</div>
<?php endif;
if ( !empty( $nextID ) ): ?>
<div class="navigation--next">
	<a 
		href="<?php echo get_permalink( $nextID ); ?>" 
		title="<?php echo get_the_title( $nextID ); ?>"
	>
		Next
	</a>
</div>
<?php endif; ?>
</div><!-- .navigation -->
?>