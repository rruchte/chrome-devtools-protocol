<?php

namespace ChromeDevtoolsProtocol\Model\CacheStorage;

use ChromeDevtoolsProtocol\Model\Storage\StorageBucket;

/**
 * Cache identifier.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Cache implements \JsonSerializable
{
	/**
	 * An opaque unique id of the cache.
	 *
	 * @var string
	 */
	public $cacheId;

	/**
	 * Security origin of the cache.
	 *
	 * @var string
	 */
	public $securityOrigin;

	/**
	 * Storage key of the cache.
	 *
	 * @var string
	 */
	public $storageKey;

	/**
	 * Storage bucket of the cache.
	 *
	 * @var StorageBucket|null
	 */
	public $storageBucket;

	/**
	 * The name of the cache.
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
		if (isset($data->cacheId)) {
			$instance->cacheId = (string)$data->cacheId;
		}
		if (isset($data->securityOrigin)) {
			$instance->securityOrigin = (string)$data->securityOrigin;
		}
		if (isset($data->storageKey)) {
			$instance->storageKey = (string)$data->storageKey;
		}
		if (isset($data->storageBucket)) {
			$instance->storageBucket = StorageBucket::fromJson($data->storageBucket);
		}
		if (isset($data->cacheName)) {
			$instance->cacheName = (string)$data->cacheName;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->cacheId !== null) {
			$data->cacheId = $this->cacheId;
		}
		if ($this->securityOrigin !== null) {
			$data->securityOrigin = $this->securityOrigin;
		}
		if ($this->storageKey !== null) {
			$data->storageKey = $this->storageKey;
		}
		if ($this->storageBucket !== null) {
			$data->storageBucket = $this->storageBucket->jsonSerialize();
		}
		if ($this->cacheName !== null) {
			$data->cacheName = $this->cacheName;
		}
		return $data;
	}
}
