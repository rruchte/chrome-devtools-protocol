<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * A cookie should have been blocked by 3PCD but is exempted and stored from a response with the corresponding reason. A cookie could only have at most one exemption reason.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ExemptedSetCookieWithReason implements \JsonSerializable
{
	/**
	 * The reason the cookie was exempted.
	 *
	 * @var string
	 */
	public $exemptionReason;

	/**
	 * The string representing this individual cookie as it would appear in the header.
	 *
	 * @var string
	 */
	public $cookieLine;

	/**
	 * The cookie object representing the cookie.
	 *
	 * @var Cookie
	 */
	public $cookie;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->exemptionReason)) {
			$instance->exemptionReason = (string)$data->exemptionReason;
		}
		if (isset($data->cookieLine)) {
			$instance->cookieLine = (string)$data->cookieLine;
		}
		if (isset($data->cookie)) {
			$instance->cookie = Cookie::fromJson($data->cookie);
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->exemptionReason !== null) {
			$data->exemptionReason = $this->exemptionReason;
		}
		if ($this->cookieLine !== null) {
			$data->cookieLine = $this->cookieLine;
		}
		if ($this->cookie !== null) {
			$data->cookie = $this->cookie->jsonSerialize();
		}
		return $data;
	}
}
