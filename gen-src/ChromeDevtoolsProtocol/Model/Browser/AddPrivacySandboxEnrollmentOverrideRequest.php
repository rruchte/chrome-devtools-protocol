<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

/**
 * Request for Browser.addPrivacySandboxEnrollmentOverride command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddPrivacySandboxEnrollmentOverrideRequest implements \JsonSerializable
{
	/** @var string */
	public $url;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return AddPrivacySandboxEnrollmentOverrideRequestBuilder
	 */
	public static function builder(): AddPrivacySandboxEnrollmentOverrideRequestBuilder
	{
		return new AddPrivacySandboxEnrollmentOverrideRequestBuilder();
	}
}
