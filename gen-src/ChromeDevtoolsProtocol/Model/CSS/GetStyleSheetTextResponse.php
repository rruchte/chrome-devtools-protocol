<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Response to CSS.getStyleSheetText command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetStyleSheetTextResponse implements \JsonSerializable
{
	/**
	 * The stylesheet text.
	 *
	 * @var string
	 */
	public $text;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->text)) {
			$instance->text = (string)$data->text;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->text !== null) {
			$data->text = $this->text;
		}
		return $data;
	}
}
