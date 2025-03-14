<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Request for Network.getRequestPostData command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetRequestPostDataRequest implements \JsonSerializable
{
	/**
	 * Identifier of the network request to get content for.
	 *
	 * @var string
	 */
	public $requestId;


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
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetRequestPostDataRequestBuilder
	 */
	public static function builder(): GetRequestPostDataRequestBuilder
	{
		return new GetRequestPostDataRequestBuilder();
	}
}
