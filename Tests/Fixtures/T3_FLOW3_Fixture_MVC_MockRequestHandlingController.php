<?php
declare(ENCODING = 'utf-8');

/*                                                                        *
 * This script is part of the TYPO3 project - inspiring people to share!  *
 *                                                                        *
 * TYPO3 is free software; you can redistribute it and/or modify it under *
 * the terms of the GNU General Public License version 2 as published by  *
 * the Free Software Foundation.                                          *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General      *
 * Public License for more details.                                       *
 *                                                                        */

/**
 * A mock RequestHandlingController 
 * 
 * @package		FLOW3
 * @subpackage	Tests
 * @version 	$Id$
 * @copyright	Copyright belongs to the respective authors
 * @license		http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 */
class T3_FLOW3_Fixture_MVC_MockRequestHandlingController extends T3_FLOW3_MVC_Controller_RequestHandlingController {

	/**
	 * @var T3_FLOW3_MVC_Controller_Arguments Arguments passed to the controller
	 */
	public $arguments;
	
	/**
	 * @var array An array of supported request types. By default all kinds of request are supported. Modify or replace this array if your specific controller only supports certain request types.
	 */
	public $supportedRequestTypes = array('T3_FLOW3_MVC_Request');

	/**
	 * @var boolean If processRequest() has been called
	 */
	public $requestHasBeenProcessed = FALSE;
	
	/**
	 * Doesn't really process the request but sets a flag that this method was called.
	 * 
	 * @param  T3_FLOW3_MVC_Request							$request
	 * @param  T3_FLOW3_MVC_Response						$response
	 * @return void
	 * @author Robert Lemke <robert@typo3.org>
	 */
	public function processRequest(T3_FLOW3_MVC_Request $request, T3_FLOW3_MVC_Response $response) {
		parent::processRequest($request, $response);
		$this->requestHasBeenProcessed = TRUE;
	}
}?>