<?php
App::uses('PaymentException', 'Payments.Lib/Error');
/**
 * PaymentApiException
 *
 * @author Florian Krämer
 * @copyright 2012 Florian Krämer
 * @license MIT
 */
class PaymentApiException extends PaymentException {

	public $apiErrorCode = null;
	public $apiErrorMessage = null;
	public $apiErrorReason = null;
}