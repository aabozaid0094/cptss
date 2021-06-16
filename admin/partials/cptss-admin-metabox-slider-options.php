<?php

/**
 * Provide the view for a metabox
 *
 * @link 		mailto:aabozaid0094@gmail.com
 * @since 		1.0.0
 *
 * @package 	CPTSS
 * @subpackage 	CPTSS/admin/partials
 */

wp_nonce_field($this->plugin_name, 'slider_options');
?>
<div id="<?php echo $this->plugin_name; ?>-admin-metabox-tabs">
    <ul class="nav-tab-wrapper wp-clearfix">
        <li class="active">
            <a href="#<?php echo $this->plugin_name; ?>-admin-metabox-tab-cpt" class="nav-tab nav-tab-active" data-toggle="tab">
                <?php esc_html_e('Post Type Options', 'cptss'); ?>
            </a>
        </li>
        <li>
            <a href="#<?php echo $this->plugin_name; ?>-admin-metabox-tab-structure" class="nav-tab" data-toggle="tab">
                <?php esc_html_e('Structure Options', 'cptss'); ?>
            </a>
        </li>
        <li>
            <a href="#<?php echo $this->plugin_name; ?>-admin-metabox-tab-slider" class="nav-tab" data-toggle="tab">
                <?php esc_html_e('Slider Options', 'cptss'); ?>
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div id="<?php echo $this->plugin_name; ?>-admin-metabox-tab-cpt" class="tab-pane active meta-options">
            <?php include_once( plugin_dir_path(__FILE__) . 'tabs/cptss-admin-metabox-tab-cpt.php' ); ?>
        </div>
        <div id="<?php echo $this->plugin_name; ?>-admin-metabox-tab-structure" class="tab-pane meta-options">
            <?php include_once( plugin_dir_path(__FILE__) . 'tabs/cptss-admin-metabox-tab-structure.php' ); ?>
        </div>
        <div id="<?php echo $this->plugin_name; ?>-admin-metabox-tab-slider" class="tab-pane meta-options">
            <?php include_once( plugin_dir_path(__FILE__) . 'tabs/cptss-admin-metabox-tab-slider.php' ); ?>
        </div>
    </div>
</div>