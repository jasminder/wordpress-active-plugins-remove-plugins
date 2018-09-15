<?php

//Paste the output of active_plugins option between ' ' below. Remove the current ones before pasting your value.


$serialize = 'a:40:{i:0;s:47:"woo-permalink-manager/premmerce-url-manager.php";i:1;s:39:"android-ecommerce/android-ecommerce.php";i:2;s:36:"cleantalk-spam-protect/cleantalk.php";i:3;s:36:"contact-form-7/wp-contact-form-7.php";i:4;s:15:"crisp/crisp.php";i:5;s:39:"heartbeat-control/heartbeat-control.php";i:6;s:27:"js_composer/js_composer.php";i:7;s:21:"json-api/json-api.php";i:8;s:25:"loftloader/loftloader.php";i:9;s:37:"mailchimp-for-wp/mailchimp-for-wp.php";i:10;s:26:"one-click-install/init.php";i:11;s:15:"paytm/index.php";i:12;s:27:"popup-maker/popup-maker.php";i:13;s:47:"really-simple-ssl/rlrsssl-really-simple-ssl.php";i:14;s:27:"redirection/redirection.php";i:15;s:23:"revslider/revslider.php";i:16;s:37:"scripts-n-styles/scripts-n-styles.php";i:17;s:37:"shiprocket/woocommerce-shiprocket.php";i:18;s:34:"smart-woocommerce-search/index.php";i:19;s:25:"sucuri-scanner/sucuri.php";i:20;s:37:"super-socializer/super_socializer.php";i:21;s:51:"sw_ajax_woocommerce_search/sw-woo-search-widget.php";i:22;s:19:"sw_core/sw-core.php";i:23;s:33:"sw_woocommerce/sw-woocommerce.php";i:24;s:46:"under-construction-page/under-construction.php";i:25;s:29:"wc-smart-cod/wc-smart-cod.php";i:26;s:48:"weight-based-shipping-for-woocommerce/plugin.php";i:27;s:47:"woo-order-export-lite/woo-order-export-lite.php";i:28;s:61:"woocommerce-checkout-manager/woocommerce-checkout-manager.php";i:29;s:56:"woocommerce-payu-paisa/woocommerce-gateway-payupaisa.php";i:30;s:77:"woocommerce-sequential-order-numbers/woocommerce-sequential-order-numbers.php";i:31;s:27:"woocommerce/woocommerce.php";i:32;s:24:"wordpress-seo/wp-seo.php";i:33;s:31:"wp-migrate-db/wp-migrate-db.php";i:34;s:39:"wp-rest-api-menus/wp-rest-api-menus.php";i:35;s:31:"wp-statistics/wp-statistics.php";i:36;s:32:"yith-infinite-scrolling/init.php";i:37;s:33:"yith-woocommerce-compare/init.php";i:38;s:38:"yith-woocommerce-social-login/init.php";i:39;s:34:"yith-woocommerce-wishlist/init.php";}';

$unserialize = unserialize($serialize);

//enter plugin number which is i: value. Like below 39 is yith-woocommerce-wishlist/init.php .
$plugins_to_remove = array("39","14","34");

foreach($plugins_to_remove as $plugin_number){
unset($unserialize[$plugin_number]);
};

//Re-sort and serialize the array
sort($unserialize);
$reserialize = serialize($unserialize);

print_r($reserialize);

?>
