<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Request for Storage.trackCacheStorageForOrigin command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class TrackCacheStorageForOriginRequest implements \JsonSerializable
{
	/**
	 * Security origin.
	 *
	 * @var string
	 */
	public $origin;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->origin)) {
			$instance->origin = (string)$data->origin;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->origin !== null) {
			$data->origin = $this->origin;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return TrackCacheStorageForOriginRequestBuilder
	 */
	public static function builder(): TrackCacheStorageForOriginRequestBuilder
	{
		return new TrackCacheStorageForOriginRequestBuilder();
	}
}
