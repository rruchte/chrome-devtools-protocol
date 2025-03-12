<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Depending on the concrete errorType, different properties are set.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GenericIssueDetails implements \JsonSerializable
{
	/**
	 * Issues with the same errorType are aggregated in the frontend.
	 *
	 * @var string
	 */
	public $errorType;

	/** @var string */
	public $frameId;

	/** @var int */
	public $violatingNodeId;

	/** @var string|null */
	public $violatingNodeAttribute;

	/** @var AffectedRequest|null */
	public $request;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->errorType)) {
			$instance->errorType = (string)$data->errorType;
		}
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		if (isset($data->violatingNodeId)) {
			$instance->violatingNodeId = (int)$data->violatingNodeId;
		}
		if (isset($data->violatingNodeAttribute)) {
			$instance->violatingNodeAttribute = (string)$data->violatingNodeAttribute;
		}
		if (isset($data->request)) {
			$instance->request = AffectedRequest::fromJson($data->request);
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->errorType !== null) {
			$data->errorType = $this->errorType;
		}
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		if ($this->violatingNodeId !== null) {
			$data->violatingNodeId = $this->violatingNodeId;
		}
		if ($this->violatingNodeAttribute !== null) {
			$data->violatingNodeAttribute = $this->violatingNodeAttribute;
		}
		if ($this->request !== null) {
			$data->request = $this->request->jsonSerialize();
		}
		return $data;
	}
}
