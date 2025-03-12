<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * A cache has been added/deleted.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CacheStorageListUpdatedEvent implements \JsonSerializable
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
		return $data;
	}
}
