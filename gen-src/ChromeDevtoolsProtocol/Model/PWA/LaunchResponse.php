<?php

namespace ChromeDevtoolsProtocol\Model\PWA;

/**
 * Response to PWA.launch command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class LaunchResponse implements \JsonSerializable
{
	/**
	 * ID of the tab target created as a result.
	 *
	 * @var string
	 */
	public $targetId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->targetId)) {
			$instance->targetId = (string)$data->targetId;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->targetId !== null) {
			$data->targetId = $this->targetId;
		}
		return $data;
	}
}
