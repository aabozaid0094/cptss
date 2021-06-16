<?php

/**
 * Provides the markup for a checkbox field
 *
 * @link 		mailto:aabozaid0094@gmail.com
 * @since 		1.0.0
 *
 * @package 	CPTSS
 * @subpackage 	CPTSS/admin/partials/tabs/fields
 */

if ( ! empty( $atts['label'] ) ) {
	?><label for="<?php echo esc_attr( $atts['id'] ); ?>"><?php esc_html_e( $atts['label'], 'cptss' ); ?>: <?php
}

?>
<input aria-role="checkbox"
	<?php checked( 1, $atts['value'], true ); ?>
	class="<?php echo esc_attr( $atts['class'] ); ?>"
	id="<?php echo esc_attr( $atts['id'] ); ?>"
	name="<?php echo esc_attr( $atts['name'] ); ?>"
	type="checkbox"
	value="1" />
<?php

if ( ! empty( $atts['description'] ) ) {
	?><span class="description"><?php esc_html_e( $atts['description'], 'cptss' ); ?></span><?php
}
if ( ! empty( $atts['label'] ) ) {
	?></label><?php
}