<?php
/**
 * Checkout steps template.
 * 
 * @package WP_Travel_Engine
 */

global $wte_cart;
$cart_items = $wte_cart->getItems();

$checkout_completed_steps = apply_filters( 'wp_travel_engine_checkout_completed_steps', array(
    'calendar' => array(
        'label' => __( 'Select Check-In Date', 'wp-travel-engine' ),
        'class' => 'completed'
    ),
    'travelers' => array(
        'label' => __( 'Travellers', 'wp-travel-engine' ),
        'class' => 'completed'
    ),
) );

$trips_with_extras = array_filter( $cart_items, function( $item ) {
    return isset( $item['trip_extras'] ) && ! empty( $item['trip_extras'] );
} );

if ( count( $trips_with_extras ) > 0 ) :

    $checkout_completed_steps['extra_services'] = array(
        'label' => __( 'Extra Services', 'wp-travel-engine' ),
        'class' => 'completed'
    );

endif;

$checkout_current_step = apply_filters( 'wp_travel_engine_checkout_current_step', array( 
    'checkout' => array(
        'label' => __( 'Booking Details', 'wp-travel-engine' ),
        'class' => 'active'
    )
) );

/*The commented code below is for the payment, we have commented this to remove
the payment banner from the header since we do not have payment currently. If 
it is decided to use the payment extension in future, please make sure to enable
uncomment the code below to have the payment banner. ~ Software Stars*/

// $checkout_remaining_step = apply_filters( 'wp_travel_engine_checkout_remaining_steps', array(
//     'payment' => array(
//         'label' => __( 'Payment', 'wp-travel-engine' ),
//         'class' => ''
//     )
// ) );

/*Also make sure to add the code below in line 58 as it represents the method
above and it is a parameter for array_merge method in line 58 ~ Software Stars*/
// $checkout_remaining_step

$checkout_steps_crumbs = array_merge( $checkout_completed_steps, $checkout_current_step);
$checkout_steps_crumbs = apply_filters( 'wp_travel_engine_checkout_steps', $checkout_steps_crumbs );

if ( is_array( $checkout_steps_crumbs ) && ! empty( $checkout_steps_crumbs ) ) :
?>
    <div class="wpte-bf-step-wrap">
        <?php foreach( $checkout_steps_crumbs as $key => $step ) : 
            $step_class = isset( $step['class'] ) ? $step['class'] : '';
            $step_label = isset( $step['label'] ) ? $step['label'] : '';   
        ?>
            <span class="wpte-bf-step <?php echo esc_attr( $step_class ); ?>">
                <span class="wpte-bf-step-inner"><?php echo esc_html( $step_label ); ?></span>
            </span>
        <?php endforeach; ?>
    </div>
<?php
endif;
