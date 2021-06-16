<?php

/**
 * Provide the Slider options tab
 *
 * @link 		mailto:aabozaid0094@gmail.com
 * @since 		1.0.0
 *
 * @package 	CPTSS
 * @subpackage 	CPTSS/admin/partials/tabs
 */

$atts = array(
    'name' => 'autoplay',
    'label' => 'Autoplay',
    'description' => 'Enables Autoplay',
    'id' => 'autoplay',
    'class' => 'autoplay',
    'type' => 'checkbox',
);

if (!empty($this->meta[$atts['id']][0])) {
    $atts['value'] = $this->meta[$atts['id']][0];
}

apply_filters($this->plugin_name . '-field-' . $atts['id'], $atts);

?><p><?php
        include(plugin_dir_path(__FILE__) . 'fields/' . $this->plugin_name . '-admin-field-' . $atts['type'] . '.php');
?></p>

<?php
$atts = array(
    'name' => 'autoplay_speed',
    'label' => 'Autoplay Speed',
    'description' => 'Autoplay Speed in ms.',
    'id' => 'autoplay_speed',
    'class' => 'autoplay_speed',
    'type' => 'number',
    'placeholder' => 'Ex. 3000',
    'min' => 2000,
    'step' => 100,
    'append' => 'ms',
);

if (!empty($this->meta[$atts['id']][0])) {
    $atts['value'] = $this->meta[$atts['id']][0];
}

apply_filters($this->plugin_name . '-field-' . $atts['id'], $atts);

?><p><?php
        include(plugin_dir_path(__FILE__) . 'fields/' . $this->plugin_name . '-admin-field-' . $atts['type'] . '.php');
?></p>

<?php
$atts = array(
    'name' => 'arrows',
    'label' => 'Arrows',
    'description' => 'Enable Prev/Next Arrows',
    'id' => 'arrows',
    'class' => 'arrows',
    'type' => 'checkbox',
);

if (!empty($this->meta[$atts['id']][0])) {
    $atts['value'] = $this->meta[$atts['id']][0];
}

apply_filters($this->plugin_name . '-field-' . $atts['id'], $atts);

?><p><?php
        include(plugin_dir_path(__FILE__) . 'fields/' . $this->plugin_name . '-admin-field-' . $atts['type'] . '.php');
?></p>

<?php
$atts = array(
    'name' => 'previous_arrow',
    'label' => 'Previous Arrow',
    'description' => 'Previous Arrow i.e. html for previous arrow icon, MAKE SURE ICON LIBRARY INCLUDED.',
    'id' => 'previous_arrow',
    'class' => 'previous_arrow',
    'type' => 'textarea',
    'rows' => 4,
    'cols' => 40,
    'placeholder' => 'Ex. <i class="fa fa-chevron-left" aria-hidden="true"></i>',
);

if (!empty($this->meta[$atts['id']][0])) {
    $atts['value'] = $this->meta[$atts['id']][0];
}

apply_filters($this->plugin_name . '-field-' . $atts['id'], $atts);

?><p><?php
        include(plugin_dir_path(__FILE__) . 'fields/' . $this->plugin_name . '-admin-field-' . $atts['type'] . '.php');
?></p>

<?php
$atts = array(
    'name' => 'next_arrow',
    'label' => 'Next Arrow',
    'description' => 'Next Arrow i.e. html for next arrow icon, MAKE SURE ICON LIBRARY INCLUDED.',
    'id' => 'next_arrow',
    'class' => 'next_arrow',
    'type' => 'textarea',
    'rows' => 4,
    'cols' => 40,
    'placeholder' => 'Ex. <i class="fa fa-chevron-right" aria-hidden="true"></i>',
);

if (!empty($this->meta[$atts['id']][0])) {
    $atts['value'] = $this->meta[$atts['id']][0];
}

apply_filters($this->plugin_name . '-field-' . $atts['id'], $atts);

?><p><?php
        include(plugin_dir_path(__FILE__) . 'fields/' . $this->plugin_name . '-admin-field-' . $atts['type'] . '.php');
?></p>

<?php
$atts = array(
    'name' => 'dots',
    'label' => 'Dots',
    'description' => 'Show dot indicators',
    'id' => 'dots',
    'class' => 'dots',
    'type' => 'checkbox',
);

if (!empty($this->meta[$atts['id']][0])) {
    $atts['value'] = $this->meta[$atts['id']][0];
}

apply_filters($this->plugin_name . '-field-' . $atts['id'], $atts);

?><p><?php
        include(plugin_dir_path(__FILE__) . 'fields/' . $this->plugin_name . '-admin-field-' . $atts['type'] . '.php');
?></p>

<?php
$atts = array(
    'name' => 'dot_icon',
    'label' => 'Dot Icon',
    'description' => 'Dot Icon i.e. html for dot icon, MAKE SURE ICON LIBRARY INCLUDED.',
    'id' => 'dot_icon',
    'class' => 'dot_icon',
    'type' => 'textarea',
    'rows' => 4,
    'cols' => 40,
    'placeholder' => 'Ex. <i class="fa fa-square" aria-hidden="true"></i>',
);

if (!empty($this->meta[$atts['id']][0])) {
    $atts['value'] = $this->meta[$atts['id']][0];
}

apply_filters($this->plugin_name . '-field-' . $atts['id'], $atts);

?><p><?php
        include(plugin_dir_path(__FILE__) . 'fields/' . $this->plugin_name . '-admin-field-' . $atts['type'] . '.php');
?></p>

<?php
$atts = array(
    'name' => 'rtl',
    'label' => 'RTL',
    'description' => 'Change the slider\'s direction to become right-to-left.',
    'id' => 'rtl',
    'class' => 'rtl',
    'type' => 'checkbox',
);

if (!empty($this->meta[$atts['id']][0])) {
    $atts['value'] = $this->meta[$atts['id']][0];
}

apply_filters($this->plugin_name . '-field-' . $atts['id'], $atts);

?><p><?php
        include(plugin_dir_path(__FILE__) . 'fields/' . $this->plugin_name . '-admin-field-' . $atts['type'] . '.php');
?></p>

<?php
$atts = array(
    'name' => 'desktop_slides_to_show',
    'label' => 'Desktop Slides To Show',
    'description' => '# of slides to show in desktop.',
    'id' => 'desktop_slides_to_show',
    'class' => 'desktop_slides_to_show',
    'type' => 'number',
    'placeholder' => 'Ex. 2',
    'min' => 1,
    'max' => 6,
    'step' => 1,
    'append' => 'item',
);

if (!empty($this->meta[$atts['id']][0])) {
    $atts['value'] = $this->meta[$atts['id']][0];
}

apply_filters($this->plugin_name . '-field-' . $atts['id'], $atts);

?><p><?php
        include(plugin_dir_path(__FILE__) . 'fields/' . $this->plugin_name . '-admin-field-' . $atts['type'] . '.php');
?></p>

<?php
$atts = array(
    'name' => 'tablet_slides_to_show',
    'label' => 'Tablet Slides To Show',
    'description' => '# of slides to show in tablet.',
    'id' => 'tablet_slides_to_show',
    'class' => 'tablet_slides_to_show',
    'type' => 'number',
    'placeholder' => 'Ex. 2',
    'min' => 1,
    'max' => 3,
    'step' => 1,
    'append' => 'item',
);

if (!empty($this->meta[$atts['id']][0])) {
    $atts['value'] = $this->meta[$atts['id']][0];
}

apply_filters($this->plugin_name . '-field-' . $atts['id'], $atts);

?><p><?php
        include(plugin_dir_path(__FILE__) . 'fields/' . $this->plugin_name . '-admin-field-' . $atts['type'] . '.php');
?></p>

<?php
$atts = array(
    'name' => 'mobile_slides_to_show',
    'label' => 'Mobile Slides To Show',
    'description' => '# of slides to show in mobile.',
    'id' => 'mobile_slides_to_show',
    'class' => 'mobile_slides_to_show',
    'type' => 'number',
    'placeholder' => 'Ex. 2',
    'min' => 1,
    'max' => 2,
    'step' => 1,
    'append' => 'item',
);

if (!empty($this->meta[$atts['id']][0])) {
    $atts['value'] = $this->meta[$atts['id']][0];
}

apply_filters($this->plugin_name . '-field-' . $atts['id'], $atts);

?><p><?php
        include(plugin_dir_path(__FILE__) . 'fields/' . $this->plugin_name . '-admin-field-' . $atts['type'] . '.php');
?></p>

<?php
$atts = array(
    'name' => 'slides_to_scroll',
    'label' => 'Slide To Scroll',
    'description' => '# of slides to scroll.',
    'id' => 'slides_to_scroll',
    'class' => 'slides_to_scroll',
    'aria' => 'Slide To Scroll',
    'type' => 'select',
    'blank' => 'Select Slides\' Number To Scroll',
    'selections' => array(
        'one' => 'One Item',
        'all' => 'All Items',
    ),
);

if (!empty($this->meta[$atts['id']][0])) {
    $atts['value'] = $this->meta[$atts['id']][0];
}

apply_filters($this->plugin_name . '-field-' . $atts['id'], $atts);

?><p><?php
        include(plugin_dir_path(__FILE__) . 'fields/' . $this->plugin_name . '-admin-field-' . $atts['type'] . '.php');
?></p>