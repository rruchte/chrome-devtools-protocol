<?php

namespace ChromeDevtoolsProtocol\Model\HeapProfiler;

/**
 * Request for HeapProfiler.stopTrackingHeapObjects command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StopTrackingHeapObjectsRequest implements \JsonSerializable
{
	/**
	 * If true 'reportHeapSnapshotProgress' events will be generated while snapshot is being taken when the tracking is stopped.
	 *
	 * @var bool|null
	 */
	public $reportProgress;

	/**
	 * Deprecated in favor of `exposeInternals`.
	 *
	 * @var bool|null
	 */
	public $treatGlobalObjectsAsRoots;

	/**
	 * If true, numerical values are included in the snapshot
	 *
	 * @var bool|null
	 */
	public $captureNumericValue;

	/**
	 * If true, exposes internals of the snapshot.
	 *
	 * @var bool|null
	 */
	public $exposeInternals;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->reportProgress)) {
			$instance->reportProgress = (bool)$data->reportProgress;
		}
		if (isset($data->treatGlobalObjectsAsRoots)) {
			$instance->treatGlobalObjectsAsRoots = (bool)$data->treatGlobalObjectsAsRoots;
		}
		if (isset($data->captureNumericValue)) {
			$instance->captureNumericValue = (bool)$data->captureNumericValue;
		}
		if (isset($data->exposeInternals)) {
			$instance->exposeInternals = (bool)$data->exposeInternals;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->reportProgress !== null) {
			$data->reportProgress = $this->reportProgress;
		}
		if ($this->treatGlobalObjectsAsRoots !== null) {
			$data->treatGlobalObjectsAsRoots = $this->treatGlobalObjectsAsRoots;
		}
		if ($this->captureNumericValue !== null) {
			$data->captureNumericValue = $this->captureNumericValue;
		}
		if ($this->exposeInternals !== null) {
			$data->exposeInternals = $this->exposeInternals;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return StopTrackingHeapObjectsRequestBuilder
	 */
	public static function builder(): StopTrackingHeapObjectsRequestBuilder
	{
		return new StopTrackingHeapObjectsRequestBuilder();
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
