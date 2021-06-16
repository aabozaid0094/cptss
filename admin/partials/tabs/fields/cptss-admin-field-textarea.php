<?php

/**
 * Provides the markup for a textare field
 *
 * @link 		mailto:aabozaid0094@gmail.com
 * @since 		1.0.0
 *
 * @package 	CPTSS
 * @subpackage 	CPTSS/admin/partials/tabs/fields
 */

if ( ! empty( $atts['label'] ) ) {
	?><label for="<?php echo esc_attr( $atts['id'] ); ?>"><?php esc_html_e( $atts['label'], 'cptss' ); ?>: </label><?php
}

?>
<textarea
	class="<?php echo esc_attr( $atts['class'] ); ?>"
	id="<?php echo esc_attr( $atts['id'] ); ?>"
	name="<?php echo esc_attr( $atts['name'] ); ?>"
	rows="<?php echo esc_attr( $atts['rows'] ); ?>"
	cols="<?php echo esc_attr( $atts['cols'] ); ?>">
	<?php echo esc_textarea( $atts['value'] ); ?>
</textarea>
<?php

if ( ! empty( $atts['description'] ) ) {
	?><span class="description"><?php esc_html_e( $atts['description'], 'cptss' ); ?></span><?php
}