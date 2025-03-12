<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * A cache's contents have been modified.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CacheStorageContentUpdatedEvent implements \JsonSerializable
{
	/**
	 * Origin to update.
	 *
	 * @var string
	 */
	public $origin;

	/**
	 * Storage key to update.
	 *
	 * @var string
	 */
	public $storageKey;

	/**
	 * Storage bucket to update.
	 *
	 * @var string
	 */
	public $bucketId;

	/**
	 * Name of cache in origin.
	 *
	 * @var string
	 */
	public $cacheName;


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
		if (isset($data->storageKey)) {
			$instance->storageKey = (string)$data->storageKey;
		}
		if (isset($data->bucketId)) {
			$instance->bucketId = (string)$data->bucketId;
		}
		if (isset($data->cacheName)) {
			$instance->cacheName = (string)$data->cacheName;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->origin !== null) {
			$data->origin = $this->origin;
		}
		if ($this->storageKey !== null) {
			$data->storageKey = $this->storageKey;
		}
		if ($this->bucketId !== null) {
			$data->bucketId = $this->bucketId;
		}
		if ($this->cacheName !== null) {
			$data->cacheName = $this->cacheName;
		}
		return $data;
	}
}
