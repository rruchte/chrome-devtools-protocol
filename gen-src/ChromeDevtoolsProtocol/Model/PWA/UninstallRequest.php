<?php

namespace ChromeDevtoolsProtocol\Model\PWA;

/**
 * Request for PWA.uninstall command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class UninstallRequest implements \JsonSerializable
{
	/** @var string */
	public $manifestId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->manifestId)) {
			$instance->manifestId = (string)$data->manifestId;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->manifestId !== null) {
			$data->manifestId = $this->manifestId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return UninstallRequestBuilder
	 */
	public static function builder(): UninstallRequestBuilder
	{
		return new UninstallRequestBuilder();
	}
}
