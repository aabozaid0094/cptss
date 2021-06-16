<?php

/**
 * Provides the markup for a select field
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
<select 
	aria-label="<?php esc_attr( _e( $atts['aria'], 'cptss' ) ); ?>"
	class="<?php echo esc_attr( $atts['class'] ); ?>"
	id="<?php echo esc_attr( $atts['id'] ); ?>"
	name="<?php echo esc_attr( $atts['name'] ); ?>"><?php

if ( ! empty( $atts['blank'] ) ) {
	?><option value><?php esc_html_e( $atts['blank'], 'cptss' ); ?></option><?php
}

foreach ( $atts['selections'] as $selection ) {
	if ( is_array( $selection ) ) {
		$value = $selection[0];
		$label = $selection[1];
		if ( is_array( $label ) ) {
			$data = $label[1];
			$label = $label[0];
			if ( is_array( $data ) ) {
				$data = implode(',', $data);
			}
		}
	} else {
		$label = $selection;
		$value = strtolower( $selection );
	}
	?>
	<option 
		value="<?php echo esc_attr( $value ); ?>" 
		<?php if(!empty($data)){ ?>parent_select="<?php echo esc_attr( $data ); ?>" <?php } 
		selected( $atts['value'], $value ); ?>>
		<?php esc_html_e( $label, 'cptss' ); ?>
	</option>
	<?php
}

?></select>
<span class="description"><?php esc_html_e( $atts['description'], 'cptss' ); ?></span>