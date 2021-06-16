<?php

/**
 * Provide the Structure optiona tab
 *
 * @link 		mailto:aabozaid0094@gmail.com
 * @since 		1.0.0
 *
 * @package 	CPTSS
 * @subpackage 	CPTSS/admin/partials/tabs
 */

$atts = array(
    'name' => 'item_layout',
    'label' => 'Item Layout',
    'description' => 'Item Layout i.e. vertical or horizontal and if the image is first or last.',
    'id' => 'item_layout',
    'class' => 'item_layout',
    'aria' => 'Item Layout',
    'type' => 'select',
    'blank' => 'Select Item Layout',
    'selections' => array(
        'column' => 'Vertical, Image first',
        'column-reverse' => 'Vertical, Image last',
        'row' => 'Horizontal, Image first',
        "row-reverse" => 'Horizontal, Image last',
    ),
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
    'name' => 'mobile_item_layout',
    'label' => 'Mobile Item Layout',
    'description' => 'Mobile Item Layout i.e. if the image is first or last.',
    'id' => 'mobile_item_layout',
    'class' => 'mobile_item_layout',
    'aria' => 'Mobile Item Layout',
    'type' => 'select',
    'blank' => 'Select Mobile Item Layout',
    'selections' => array(
        'column' => 'Vertical, Image first',
        'column-reverse' => 'Vertical, Image last',
    ),
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
    'name' => 'image_size',
    'label' => 'Image Size',
    'description' => 'Image Size i.e. thumb, medium, large, full.',
    'id' => 'image_size',
    'class' => 'image_size',
    'aria' => 'Image Size',
    'type' => 'select',
    'blank' => 'Select Image Size',
    'selections' => array(
        'thumb' => 'Thumbnail',
        'medium' => 'Medium',
        'large' => 'Large',
        'full' => 'Full',
    ),
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
    'name' => 'horizontal_alignment',
    'label' => 'Horizontal Alignment',
    'description' => 'Horizontal Alignment i.e. CSS text align.',
    'id' => 'horizontal_alignment',
    'class' => 'horizontal_alignment',
    'aria' => 'Horizontal Alignment',
    'type' => 'select',
    'blank' => 'Select Horizontal Alignment',
    'selections' => array(
        'default' => 'Default',
        'left' => 'Left',
        'center' => 'Center',
        'right' => 'Right',
    ),
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
    'name' => 'item_margin',
    'label' => 'Item Margin',
    'description' => 'Item Margin, accept all CSS measurements.',
    'id' => 'item_margin',
    'class' => 'item_margin',
    'type' => 'text',
    'placeholder' => 'Ex. 15px',
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
    'name' => 'item_padding',
    'label' => 'Item Padding',
    'description' => 'Item Padding, accept all CSS measurements.',
    'id' => 'item_padding',
    'class' => 'item_padding',
    'type' => 'text',
    'placeholder' => 'Ex. 15px',
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
    'name' => 'item_bg_color',
    'label' => 'Item BG Color',
    'id' => 'item_bg_color',
    'class' => 'item_bg_color',
    'type' => 'color',
    'placeholder' => 'Ex. #fff',
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
    'name' => 'item_border_radius',
    'label' => 'Item Border Radius',
    'description' => 'Item Border Radius in px.',
    'id' => 'item_border_radius',
    'class' => 'item_border_radius',
    'type' => 'number',
    'placeholder' => 'Ex. 5',
    'min' => 0,
    'max' => 50,
    'step' => 1,
    'append' => 'px',
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
    'name' => 'arrow_color',
    'label' => 'Arrows Color',
    'id' => 'arrow_color',
    'class' => 'arrow_color',
    'type' => 'color',
    'placeholder' => 'Ex. #fff',
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
    'name' => 'arrow_color_hover',
    'label' => 'Arrows Color Hover',
    'id' => 'arrow_color_hover',
    'class' => 'arrow_color_hover',
    'type' => 'color',
    'placeholder' => 'Ex. #fff',
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
    'name' => 'arrow_bg_color',
    'label' => 'Arrows BG Color',
    'id' => 'arrow_bg_color',
    'class' => 'arrow_bg_color',
    'type' => 'color',
    'placeholder' => 'Ex. #fff',
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
    'name' => 'arrow_bg_color_hover',
    'label' => 'Arrows BG Color Hover',
    'id' => 'arrow_bg_color_hover',
    'class' => 'arrow_bg_color_hover',
    'type' => 'color',
    'placeholder' => 'Ex. #fff',
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
    'name' => 'arrows_border_radius',
    'label' => 'Arrows Border Radius',
    'description' => 'Arrows Border Radius in px.',
    'id' => 'arrows_border_radius',
    'class' => 'arrows_border_radius',
    'type' => 'number',
    'placeholder' => 'Ex. 5',
    'min' => 0,
    'max' => 50,
    'step' => 1,
    'append' => 'px',
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
    'name' => 'dot_color',
    'label' => 'Dot Color',
    'id' => 'dot_color',
    'class' => 'dot_color',
    'type' => 'color',
    'placeholder' => 'Ex. #fff',
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
    'name' => 'dot_color_hover',
    'label' => 'Dot Color Hover',
    'id' => 'dot_color_hover',
    'class' => 'dot_color_hover',
    'type' => 'color',
    'placeholder' => 'Ex. #fff',
);

if (!empty($this->meta[$atts['id']][0])) {
    $atts['value'] = $this->meta[$atts['id']][0];
}

apply_filters($this->plugin_name . '-field-' . $atts['id'], $atts);

?><p><?php
        include(plugin_dir_path(__FILE__) . 'fields/' . $this->plugin_name . '-admin-field-' . $atts['type'] . '.php');
?></p>