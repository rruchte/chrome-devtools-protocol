<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.reload command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReloadRequest implements \JsonSerializable
{
	/**
	 * If true, browser cache is ignored (as if the user pressed Shift+refresh).
	 *
	 * @var bool|null
	 */
	public $ignoreCache;

	/**
	 * If set, the script will be injected into all frames of the inspected page after reload. Argument will be ignored if reloading dataURL origin.
	 *
	 * @var string|null
	 */
	public $scriptToEvaluateOnLoad;

	/**
	 * If set, an error will be thrown if the target page's main frame's loader id does not match the provided id. This prevents accidentally reloading an unintended target in case there's a racing navigation.
	 *
	 * @var string
	 */
	public $loaderId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->ignoreCache)) {
			$instance->ignoreCache = (bool)$data->ignoreCache;
		}
		if (isset($data->scriptToEvaluateOnLoad)) {
			$instance->scriptToEvaluateOnLoad = (string)$data->scriptToEvaluateOnLoad;
		}
		if (isset($data->loaderId)) {
			$instance->loaderId = (string)$data->loaderId;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->ignoreCache !== null) {
			$data->ignoreCache = $this->ignoreCache;
		}
		if ($this->scriptToEvaluateOnLoad !== null) {
			$data->scriptToEvaluateOnLoad = $this->scriptToEvaluateOnLoad;
		}
		if ($this->loaderId !== null) {
			$data->loaderId = $this->loaderId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ReloadRequestBuilder
	 */
	public static function builder(): ReloadRequestBuilder
	{
		return new ReloadRequestBuilder();
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
