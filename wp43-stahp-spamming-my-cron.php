<?php
/**
 * WP 4.3: Stahp spamming my cron!
 *
 * @author  Patrick Hesselberg
 *
 * Plugin Name:       WP 4.3: Stahp spamming my cron!
 * Plugin URI:        
 * Description:       WP 4.3 introduced a wp_batch_split_terms() that had arguments switched in wp_schedule_single_event(). This plugin makes up for that mistake.
 * Version:           0.1
 * Author:            Patrick Hesselberg
 * Author URI:        http://peytz.dk/medarbejdere/phh
 * GitHub Plugin URI: https://github.com/phh/wp43-stahp-spamming-my-cron
 */

function wp43_staph_spamming_my_cron_disable_event( $event ) {
	if ( $event->timestamp == 'wp_batch_split_terms' ) {
		return false;
	}

	return $event;
}
add_filter( 'schedule_event', 'wp43_staph_spamming_my_cron_disable_event' );
