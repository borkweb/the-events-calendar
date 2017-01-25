<?php

class Tribe__Events__REST__V1__Documentation__Cost_Details_Definition_Provider
	implements Tribe__Documentation__Swagger__Provider_Interface {

	/**
	 * Returns an array in the format used by Swagger 2.0.
	 *
	 * While the structure must conform to that used by v2.0 of Swagger the structure can be that of a full document
	 * or that of a document part.
	 * The intelligence lies in the "gatherer" of informations rather than in the single "providers" implementing this
	 * interface.
	 *
	 * @link http://swagger.io/
	 *
	 * @return array An array description of a Swagger supported component.
	 */
	public function get_documentation() {
		$documentation = array(
			'type'       => 'array',
			'properties' => array(
				'currency_symbol'    => array( 'type' => 'string', 'description' => __( 'The cost currency symbol', 'the-events-calendar' ) ),
				'currency_position ' => array( 'type' => 'string', 'description' => __( 'The position of the currency symbol in the cost string', 'the-events-calendar' ), 'enum' => array( 'prefix', 'postfix' ) ),
				'values'             => array( 'type' => 'array', 'description' => __( 'An sorted array of all the numeric values for the cost', 'the-events-calendar' ) ),
			),
		);

		/**
		 * Filters the Swagger documentation generated for a cost details in the TEC REST API.
		 *
		 * @param array $documentation An associative PHP array in the format supported by Swagger.
		 *
		 * @link http://swagger.io/
		 */
		$documentation = apply_filters( 'tribe_rest_swagger_cost_details_documentation', $documentation );

		return $documentation;
	}
}