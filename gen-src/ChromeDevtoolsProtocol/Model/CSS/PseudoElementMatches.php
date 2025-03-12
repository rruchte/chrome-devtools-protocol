<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * CSS rule collection for a single pseudo style.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PseudoElementMatches implements \JsonSerializable
{
	/**
	 * Pseudo element type.
	 *
	 * @var string
	 */
	public $pseudoType;

	/**
	 * Pseudo element custom ident.
	 *
	 * @var string|null
	 */
	public $pseudoIdentifier;

	/**
	 * Matches of CSS rules applicable to the pseudo style.
	 *
	 * @var RuleMatch[]
	 */
	public $matches;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->pseudoType)) {
			$instance->pseudoType = (string)$data->pseudoType;
		}
		if (isset($data->pseudoIdentifier)) {
			$instance->pseudoIdentifier = (string)$data->pseudoIdentifier;
		}
		if (isset($data->matches)) {
			$instance->matches = [];
			foreach ($data->matches as $item) {
				$instance->matches[] = RuleMatch::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->pseudoType !== null) {
			$data->pseudoType = $this->pseudoType;
		}
		if ($this->pseudoIdentifier !== null) {
			$data->pseudoIdentifier = $this->pseudoIdentifier;
		}
		if ($this->matches !== null) {
			$data->matches = [];
			foreach ($this->matches as $item) {
				$data->matches[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
