<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage School
 * @since 1.0
 */
?>

<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/lightbox/css/lightbox.css">
<script src="<?php echo get_template_directory_uri(); ?>/js/lightbox/js/lightbox.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<?php wp_footer(); ?>
</body>
</html>