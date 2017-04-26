<?php 

$page = get_page_by_title( 'Mission Statement' );
$the_excerpt = $page->post_excerpt;
$page_data = get_page( $page );
$title = $page_data->post_title;

?>

    <div class="entry-content">
        <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Mission Statement' ) ) );?>"> 
        <?php 
        	echo $the_excerpt; 
        ?>
        <br>
        more +
        </a>
    </div>