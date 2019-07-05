<?php
/**
 * View: List View Nav Disabled Next Button
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/views/v2/list/nav/next-disabled.php
 *
 * See more documentation about our views templating system.
 *
 * @link {INSERT_ARTCILE_LINK_HERE}
 *
 * @var string $link The URL to the next page, if any, or an empty string.
 *
 * @version TBD
 *
 */
?>
<li class="tribe-events-c-nav__list-item tribe-events-c-nav__list-item--next">
	<button class="tribe-events-c-nav__next tribe-common-b2 tribe-common-b1--min-medium" disabled>
		<?php
			echo sprintf(
				wp_kses(
					/* translators: %s: Event (plural or singular). */
					__( 'Next<span class="tribe-events-c-nav__next-label-plural"> %s</span>', 'the-events-calendar' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				tribe_get_event_label_plural()
			);
		?>
	</button>
</li>
