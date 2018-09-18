<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shoreditch
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
  return;
}
?>

<?php
  if(is_single()) { ?>
    <aside id="secondary" class="widget-area widget-area-hero" role="complementary">
<?php
  } else if (!is_single()) { ?>
    <aside id="secondary" class="widget-area" role="complementary">
<?php
  }
?>
  <?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
