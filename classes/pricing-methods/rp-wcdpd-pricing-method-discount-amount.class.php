<?php

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Load dependencies
if (!class_exists('RP_WCDPD_Pricing_Method_Discount')) {
    require_once('rp-wcdpd-pricing-method-discount.class.php');
}

/**
 * Pricing Method: Discount - Amount
 *
 * @class RP_WCDPD_Pricing_Method_Discount_Amount
 * @package WooCommerce Dynamic Pricing & Discounts
 * @author RightPress
 */
if (!class_exists('RP_WCDPD_Pricing_Method_Discount_Amount')) {

class RP_WCDPD_Pricing_Method_Discount_Amount extends RP_WCDPD_Pricing_Method_Discount
{
    protected $key      = 'amount';
    protected $contexts = array('product_pricing_simple', 'product_pricing_volume', 'product_pricing_bogo', 'cart_discounts_simple');
    protected $position = 10;

    // Singleton instance
    protected static $instance = false;

    /**
     * Singleton control
     */
    public static function get_instance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Constructor class
     *
     * @access public
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->hook();
    }

    /**
     * Get label
     *
     * @access public
     * @return string
     */
    public function get_label()
    {
        return __('Fixed discount', 'rp_wcdpd');
    }





}

RP_WCDPD_Pricing_Method_Discount_Amount::get_instance();

}
