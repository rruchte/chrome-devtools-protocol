<?php

namespace ChromeDevtoolsProtocol\Model\Animation;

/**
 * Event for animation that has been updated.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AnimationUpdatedEvent implements \JsonSerializable
{
	/**
	 * Animation that was updated.
	 *
	 * @var Animation
	 */
	public $animation;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->animation)) {
			$instance->animation = Animation::fromJson($data->animation);
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->animation !== null) {
			$data->animation = $this->animation->jsonSerialize();
		}
		return $data;
	}
}
