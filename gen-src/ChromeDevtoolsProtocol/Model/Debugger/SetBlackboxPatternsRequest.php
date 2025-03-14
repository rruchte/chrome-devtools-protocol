<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Request for Debugger.setBlackboxPatterns command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetBlackboxPatternsRequest implements \JsonSerializable
{
	/**
	 * Array of regexps that will be used to check script url for blackbox state.
	 *
	 * @var string[]
	 */
	public $patterns;

	/**
	 * If true, also ignore scripts with no source url.
	 *
	 * @var bool|null
	 */
	public $skipAnonymous;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->patterns)) {
			$instance->patterns = [];
			foreach ($data->patterns as $item) {
				$instance->patterns[] = (string)$item;
			}
		}
		if (isset($data->skipAnonymous)) {
			$instance->skipAnonymous = (bool)$data->skipAnonymous;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->patterns !== null) {
			$data->patterns = [];
			foreach ($this->patterns as $item) {
				$data->patterns[] = $item;
			}
		}
		if ($this->skipAnonymous !== null) {
			$data->skipAnonymous = $this->skipAnonymous;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetBlackboxPatternsRequestBuilder
	 */
	public static function builder(): SetBlackboxPatternsRequestBuilder
	{
		return new SetBlackboxPatternsRequestBuilder();
	}
}
