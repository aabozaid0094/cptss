<?php

/**
 * Provide the CPT option tab
 *
 * @link 		mailto:aabozaid0094@gmail.com
 * @since 		1.0.0
 *
 * @package 	CPTSS
 * @subpackage 	CPTSS/admin/partials/tabs
 */

$post_types = get_post_types(array('public' => true,), 'objects');
$included_post_types = array();
$excluded_post_types = array('attachment');
apply_filters($this->plugin_name . '-excluded_post_types', $excluded_post_types);
if (is_array($post_types) && !empty($post_types)) {
    foreach ($post_types as $post_type) {
        if (!in_array($post_type->name, $excluded_post_types, true)) {
            $included_post_types[] = array($post_type->name, $post_type->label);
        }
    }
}
$atts = array(
    'name' => 'cpt',
    'label' => 'CPT',
    'description' => 'CPT i.e. which post type posts to slide.',
    'id' => 'cpt',
    'class' => 'cpt',
    'aria' => 'CPT',
    'type' => 'select',
    'blank' => 'Select Post Type',
    'selections' => $included_post_types,
);

if (!empty($this->meta[$atts['id']][0])) {
    $atts['value'] = $this->meta[$atts['id']][0];
}

apply_filters($this->plugin_name . '-field-' . $atts['id'], $atts);

?><p><?php
        include(plugin_dir_path(__FILE__) . 'fields/' . $this->plugin_name . '-admin-field-' . $atts['type'] . '.php');
?></p>

<?php
$taxonomies = get_taxonomies(array('public' => true,), 'objects');
$included_taxonomies = array();
$excluded_taxonomies = array();
apply_filters($this->plugin_name . '-excluded_taxonomies', $excluded_taxonomies);
if (is_array($taxonomies) && !empty($taxonomies)) {
    foreach ($taxonomies as $taxonomy) {
        if (!in_array($taxonomy->name, $excluded_taxonomies, true)) {
            $included_taxonomies[] = array( 
                $taxonomy->name, 
                array($taxonomy->label, $taxonomy->object_type)
            );
        }
    }
}
$atts = array(
    'name' => 'taxonomy',
    'label' => 'Taxonomy',
    'description' => 'Taxonomy i.e. which taxonomies of posts to slide.',
    'id' => 'taxonomy',
    'class' => 'taxonomy',
    'aria' => 'Taxonomy',
    'type' => 'select',
    'blank' => 'Select Taxonomy',
    'selections' => $included_taxonomies,
);

if (!empty($this->meta[$atts['id']][0])) {
    $atts['value'] = $this->meta[$atts['id']][0];
}

apply_filters($this->plugin_name . '-field-' . $atts['id'], $atts);

?><p><?php
        include(plugin_dir_path(__FILE__) . 'fields/' . $this->plugin_name . '-admin-field-' . $atts['type'] . '.php');
?></p>

<?php
$terms = get_terms(array('hide_empty' => false));
$included_terms = array();
$excluded_terms = array();
apply_filters($this->plugin_name . '-excluded_terms', $excluded_terms);
if (is_array($terms) && !empty($terms)) {
    foreach ($terms as $term) {
        if (!in_array($term->slug, $excluded_terms, true)) {
            $included_terms[] = array(
                $term->slug, 
                array( $term->name, $term->taxonomy)
            );
        }
    }
}
$atts = array(
    'name' => 'term',
    'label' => 'Term',
    'description' => 'Term i.e. which terms of posts to slide.',
    'id' => 'term',
    'class' => 'term',
    'aria' => 'Term',
    'type' => 'select',
    'blank' => 'Select Term',
    'selections' => $included_terms,
);

if (!empty($this->meta[$atts['id']][0])) {
    $atts['value'] = $this->meta[$atts['id']][0];
}

apply_filters($this->plugin_name . '-field-' . $atts['id'], $atts);

?><p><?php
        include(plugin_dir_path(__FILE__) . 'fields/' . $this->plugin_name . '-admin-field-' . $atts['type'] . '.php');
?></p>