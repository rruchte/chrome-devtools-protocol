<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Fired when data chunk was received over the network.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DataReceivedEvent implements \JsonSerializable
{
	/**
	 * Request identifier.
	 *
	 * @var string
	 */
	public $requestId;

	/**
	 * Timestamp.
	 *
	 * @var int|float
	 */
	public $timestamp;

	/**
	 * Data chunk length.
	 *
	 * @var int
	 */
	public $dataLength;

	/**
	 * Actual bytes received (might be less than dataLength for compressed encodings).
	 *
	 * @var int
	 */
	public $encodedDataLength;

	/**
	 * Data that was received. (Encoded as a base64 string when passed over JSON)
	 *
	 * @var string|null
	 */
	public $data;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->requestId)) {
			$instance->requestId = (string)$data->requestId;
		}
		if (isset($data->timestamp)) {
			$instance->timestamp = $data->timestamp;
		}
		if (isset($data->dataLength)) {
			$instance->dataLength = (int)$data->dataLength;
		}
		if (isset($data->encodedDataLength)) {
			$instance->encodedDataLength = (int)$data->encodedDataLength;
		}
		if (isset($data->data)) {
			$instance->data = (string)$data->data;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		if ($this->timestamp !== null) {
			$data->timestamp = $this->timestamp;
		}
		if ($this->dataLength !== null) {
			$data->dataLength = $this->dataLength;
		}
		if ($this->encodedDataLength !== null) {
			$data->encodedDataLength = $this->encodedDataLength;
		}
		if ($this->data !== null) {
			$data->data = $this->data;
		}
		return $data;
	}
}
