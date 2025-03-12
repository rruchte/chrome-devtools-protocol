<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Request for Storage.resetSharedStorageBudget command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ResetSharedStorageBudgetRequest implements \JsonSerializable
{
	/** @var string */
	public $ownerOrigin;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->ownerOrigin)) {
			$instance->ownerOrigin = (string)$data->ownerOrigin;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->ownerOrigin !== null) {
			$data->ownerOrigin = $this->ownerOrigin;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ResetSharedStorageBudgetRequestBuilder
	 */
	public static function builder(): ResetSharedStorageBudgetRequestBuilder
	{
		return new ResetSharedStorageBudgetRequestBuilder();
	}
}
