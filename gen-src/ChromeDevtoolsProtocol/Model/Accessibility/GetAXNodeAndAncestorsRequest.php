<?php

namespace ChromeDevtoolsProtocol\Model\Accessibility;

/**
 * Request for Accessibility.getAXNodeAndAncestors command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetAXNodeAndAncestorsRequest implements \JsonSerializable
{
	/**
	 * Identifier of the node to get.
	 *
	 * @var int
	 */
	public $nodeId;

	/**
	 * Identifier of the backend node to get.
	 *
	 * @var int
	 */
	public $backendNodeId;

	/**
	 * JavaScript object id of the node wrapper to get.
	 *
	 * @var string
	 */
	public $objectId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->nodeId)) {
			$instance->nodeId = (int)$data->nodeId;
		}
		if (isset($data->backendNodeId)) {
			$instance->backendNodeId = (int)$data->backendNodeId;
		}
		if (isset($data->objectId)) {
			$instance->objectId = (string)$data->objectId;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->backendNodeId !== null) {
			$data->backendNodeId = $this->backendNodeId;
		}
		if ($this->objectId !== null) {
			$data->objectId = $this->objectId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetAXNodeAndAncestorsRequestBuilder
	 */
	public static function builder(): GetAXNodeAndAncestorsRequestBuilder
	{
		return new GetAXNodeAndAncestorsRequestBuilder();
	}


	/**
	 * Create new empty instance.
	 *
	 * @return self
	 */
	public static function make(): self
	{
		return static::builder()->build();
	}
}
