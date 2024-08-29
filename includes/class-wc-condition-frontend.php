<?php

class WC_Condition_Frontend {

    public static function init() {
        add_action('woocommerce_single_product_summary', array(__CLASS__, 'display_product_condition'), 6);
        add_filter('template_include', array(__CLASS__, 'condition_template_include'), 99);
    }

    public static function display_product_condition() {
        global $post;
        $terms = get_the_terms($post->ID, 'product_condition');
        if ($terms && !is_wp_error($terms)) {
            $condition = array_shift($terms);
            echo '<p class="product_condition">' . esc_html($condition->name) . '</p>';
        }
    }

    public static function condition_template_include($template) {
        if (is_tax('product_condition')) {
            $condition_template = locate_template('woocommerce-condition-archive.php');
            if ($condition_template) {
                $template = $condition_template;
            } else {
                $template = WC_CUSTOM_CONDITION_PATH . 'templates/condition-archive.php';
            }
        }
        return $template;
    }
}
