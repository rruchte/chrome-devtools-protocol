<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Response to CSS.getLayersForNode command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetLayersForNodeResponse implements \JsonSerializable
{
	/** @var CSSLayerData */
	public $rootLayer;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->rootLayer)) {
			$instance->rootLayer = CSSLayerData::fromJson($data->rootLayer);
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->rootLayer !== null) {
			$data->rootLayer = $this->rootLayer->jsonSerialize();
		}
		return $data;
	}
}
