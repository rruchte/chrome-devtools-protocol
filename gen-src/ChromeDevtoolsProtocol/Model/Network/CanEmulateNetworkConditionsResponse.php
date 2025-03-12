<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Response to Network.canEmulateNetworkConditions command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CanEmulateNetworkConditionsResponse implements \JsonSerializable
{
	/**
	 * True if emulation of network conditions is supported.
	 *
	 * @var bool
	 */
	public $result;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->result)) {
			$instance->result = (bool)$data->result;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->result !== null) {
			$data->result = $this->result;
		}
		return $data;
	}
}
