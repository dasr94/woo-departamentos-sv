<?php
/*
Plugin Name: Woocommerce Departamentos El Salvador
Plugin URI: https://amarusv.com
Description: Agrega los 14 departamentos de El Salvador a Woocommerce
Version: 1.0
Author: Daniel Sánchez
Author URI: https://amarusv.com
License: GPL2
*/

add_filter( 'woocommerce_states', 'uy_woocommerce_states' );
function uy_woocommerce_states( $states ) {

    $states['SV'] = array(
        '02101' => 'Ahuachapan',
        '02201' => 'Santa Ana',
        '02301' => 'Sonsonate',
        '01301' => 'Chalatenango',
        '01501' => 'La Libertad',
        '01101' => 'San Salvador',
        '01601' => 'La Paz',
        '01401' => 'Cuscatlan',
        '01701' => 'San Vicente',
        '03101' => 'La Union', 
        '03201' => 'Morazan',
        '03301' => 'San Miguel',
        '01201' => 'Cabañas',
        '03401' => 'Usulutan'
    );

    return $states;
}
?>