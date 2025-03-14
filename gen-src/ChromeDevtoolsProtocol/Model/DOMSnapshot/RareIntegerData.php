<?php

namespace ChromeDevtoolsProtocol\Model\DOMSnapshot;

/**
 * Named type DOMSnapshot.RareIntegerData.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RareIntegerData implements \JsonSerializable
{
	/** @var int[] */
	public $index;

	/** @var int[] */
	public $value;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->index)) {
			$instance->index = [];
			foreach ($data->index as $item) {
				$instance->index[] = (int)$item;
			}
		}
		if (isset($data->value)) {
			$instance->value = [];
			foreach ($data->value as $item) {
				$instance->value[] = (int)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->index !== null) {
			$data->index = [];
			foreach ($this->index as $item) {
				$data->index[] = $item;
			}
		}
		if ($this->value !== null) {
			$data->value = [];
			foreach ($this->value as $item) {
				$data->value[] = $item;
			}
		}
		return $data;
	}
}
