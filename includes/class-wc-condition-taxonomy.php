<?php

class WC_Condition_Taxonomy {

    public static function init() {
        add_action('init', array(__CLASS__, 'register_condition_taxonomy'));
    }

    public static function register_condition_taxonomy() {
        $labels = array(
            'name'              => _x('Conditions', 'taxonomy general name', 'woocommerce-custom-condition'),
            'singular_name'     => _x('Condition', 'taxonomy singular name', 'woocommerce-custom-condition'),
            'search_items'      => __('Search Conditions', 'woocommerce-custom-condition'),
            'all_items'         => __('All Conditions', 'woocommerce-custom-condition'),
            'parent_item'       => __('Parent Condition', 'woocommerce-custom-condition'),
            'parent_item_colon' => __('Parent Condition:', 'woocommerce-custom-condition'),
            'edit_item'         => __('Edit Condition', 'woocommerce-custom-condition'),
            'update_item'       => __('Update Condition', 'woocommerce-custom-condition'),
            'add_new_item'      => __('Add New Condition', 'woocommerce-custom-condition'),
            'new_item_name'     => __('New Condition Name', 'woocommerce-custom-condition'),
            'menu_name'         => __('Conditions', 'woocommerce-custom-condition'),
        );

        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array('slug' => 'condition'),
        );

        register_taxonomy('product_condition', array('product'), $args);
    }
}
