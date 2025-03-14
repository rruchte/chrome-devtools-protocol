<?php

namespace ChromeDevtoolsProtocol\Model\HeadlessExperimental;

/**
 * Encoding options for a screenshot.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ScreenshotParams implements \JsonSerializable
{
	/**
	 * Image compression format (defaults to png).
	 *
	 * @var string|null
	 */
	public $format;

	/**
	 * Compression quality from range [0..100] (jpeg and webp only).
	 *
	 * @var int|null
	 */
	public $quality;

	/**
	 * Optimize image encoding for speed, not for resulting size (defaults to false)
	 *
	 * @var bool|null
	 */
	public $optimizeForSpeed;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->format)) {
			$instance->format = (string)$data->format;
		}
		if (isset($data->quality)) {
			$instance->quality = (int)$data->quality;
		}
		if (isset($data->optimizeForSpeed)) {
			$instance->optimizeForSpeed = (bool)$data->optimizeForSpeed;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->format !== null) {
			$data->format = $this->format;
		}
		if ($this->quality !== null) {
			$data->quality = $this->quality;
		}
		if ($this->optimizeForSpeed !== null) {
			$data->optimizeForSpeed = $this->optimizeForSpeed;
		}
		return $data;
	}
}
