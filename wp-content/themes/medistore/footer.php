<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Theme Palace
 * @subpackage  medistore
 * @since  medistore 1.0.0
 */

/**
 * medistore_footer_primary_content hook
 *
 * @hooked medistore_add_subscribe_section -  10
 *
 */
do_action( 'medistore_footer_primary_content' );

/**
 * medistore_content_end_action hook
 *
 * @hooked medistore_content_end -  10
 *
 */
do_action( 'medistore_content_end_action' );

/**
 * medistore_content_end_action hook
 *
 * @hooked medistore_footer_start -  10
 * @hooked medistore_Footer_Widgets->add_footer_widgets -  20
 * @hooked medistore_footer_site_info -  40
 * @hooked medistore_footer_end -  100
 *
 */
do_action( 'medistore_footer' );

/**
 * medistore_page_end_action hook
 *
 * @hooked medistore_page_end -  10
 *
 */
do_action( 'medistore_page_end_action' ); 

?>

<?php wp_footer(); ?>

</body>
</html>
