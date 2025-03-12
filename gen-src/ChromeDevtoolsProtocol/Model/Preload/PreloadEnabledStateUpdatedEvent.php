<?php

namespace ChromeDevtoolsProtocol\Model\Preload;

/**
 * Fired when a preload enabled state is updated.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PreloadEnabledStateUpdatedEvent implements \JsonSerializable
{
	/** @var bool */
	public $disabledByPreference;

	/** @var bool */
	public $disabledByDataSaver;

	/** @var bool */
	public $disabledByBatterySaver;

	/** @var bool */
	public $disabledByHoldbackPrefetchSpeculationRules;

	/** @var bool */
	public $disabledByHoldbackPrerenderSpeculationRules;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->disabledByPreference)) {
			$instance->disabledByPreference = (bool)$data->disabledByPreference;
		}
		if (isset($data->disabledByDataSaver)) {
			$instance->disabledByDataSaver = (bool)$data->disabledByDataSaver;
		}
		if (isset($data->disabledByBatterySaver)) {
			$instance->disabledByBatterySaver = (bool)$data->disabledByBatterySaver;
		}
		if (isset($data->disabledByHoldbackPrefetchSpeculationRules)) {
			$instance->disabledByHoldbackPrefetchSpeculationRules = (bool)$data->disabledByHoldbackPrefetchSpeculationRules;
		}
		if (isset($data->disabledByHoldbackPrerenderSpeculationRules)) {
			$instance->disabledByHoldbackPrerenderSpeculationRules = (bool)$data->disabledByHoldbackPrerenderSpeculationRules;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->disabledByPreference !== null) {
			$data->disabledByPreference = $this->disabledByPreference;
		}
		if ($this->disabledByDataSaver !== null) {
			$data->disabledByDataSaver = $this->disabledByDataSaver;
		}
		if ($this->disabledByBatterySaver !== null) {
			$data->disabledByBatterySaver = $this->disabledByBatterySaver;
		}
		if ($this->disabledByHoldbackPrefetchSpeculationRules !== null) {
			$data->disabledByHoldbackPrefetchSpeculationRules = $this->disabledByHoldbackPrefetchSpeculationRules;
		}
		if ($this->disabledByHoldbackPrerenderSpeculationRules !== null) {
			$data->disabledByHoldbackPrerenderSpeculationRules = $this->disabledByHoldbackPrerenderSpeculationRules;
		}
		return $data;
	}
}
