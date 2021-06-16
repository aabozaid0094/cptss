<?php

/**
 * Provides the markup for a number field
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

if ( ( ! empty( $atts['prepend'] ) ) || (! empty( $atts['append'] )) ) { ?><span class="number-wrap"><?php } 
if ( ! empty( $atts['prepend'] ) ) { ?><span class="number-prepend"><?php echo esc_attr( $atts['prepend'] ); ?></span><?php } 
?><input
	class="<?php echo esc_attr( $atts['class'] ); ?>"
	id="<?php echo esc_attr( $atts['id'] ); ?>"
	name="<?php echo esc_attr( $atts['name'] ); ?>"
	placeholder="<?php echo esc_attr( $atts['placeholder'] ); ?>"
	type="<?php echo esc_attr( $atts['type'] ); ?>"
	value="<?php echo esc_attr( $atts['value'] ); ?>"
	min="<?php echo esc_attr( $atts['min'] ); ?>"
	max="<?php echo esc_attr( $atts['max'] ); ?>"
	step="<?php echo esc_attr( $atts['step'] ); ?>" />
	
<?php
if ( ! empty( $atts['append'] ) ) { ?><span class="number-append"><?php echo esc_attr( $atts['append'] ); ?></span><?php } 
if ( ( ! empty( $atts['prepend'] ) ) || (! empty( $atts['append'] )) ) { ?></span><?php } 

if ( ! empty( $atts['description'] ) ) {
	?><span class="description"><?php esc_html_e( $atts['description'], 'cptss' ); ?></span><?php
}