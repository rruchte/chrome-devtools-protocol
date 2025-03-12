<?php

namespace ChromeDevtoolsProtocol\Model\WebAuthn;

/**
 * Named type WebAuthn.Credential.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Credential implements \JsonSerializable
{
	/** @var string */
	public $credentialId;

	/** @var bool */
	public $isResidentCredential;

	/**
	 * Relying Party ID the credential is scoped to. Must be set when adding a credential.
	 *
	 * @var string|null
	 */
	public $rpId;

	/**
	 * The ECDSA P-256 private key in PKCS#8 format. (Encoded as a base64 string when passed over JSON)
	 *
	 * @var string
	 */
	public $privateKey;

	/**
	 * An opaque byte sequence with a maximum size of 64 bytes mapping the credential to a specific user. (Encoded as a base64 string when passed over JSON)
	 *
	 * @var string|null
	 */
	public $userHandle;

	/**
	 * Signature counter. This is incremented by one for each successful assertion. See https://w3c.github.io/webauthn/#signature-counter
	 *
	 * @var int
	 */
	public $signCount;

	/**
	 * The large blob associated with the credential. See https://w3c.github.io/webauthn/#sctn-large-blob-extension (Encoded as a base64 string when passed over JSON)
	 *
	 * @var string|null
	 */
	public $largeBlob;

	/**
	 * Assertions returned by this credential will have the backup eligibility (BE) flag set to this value. Defaults to the authenticator's defaultBackupEligibility value.
	 *
	 * @var bool|null
	 */
	public $backupEligibility;

	/**
	 * Assertions returned by this credential will have the backup state (BS) flag set to this value. Defaults to the authenticator's defaultBackupState value.
	 *
	 * @var bool|null
	 */
	public $backupState;

	/**
	 * The credential's user.name property. Equivalent to empty if not set. https://w3c.github.io/webauthn/#dom-publickeycredentialentity-name
	 *
	 * @var string|null
	 */
	public $userName;

	/**
	 * The credential's user.displayName property. Equivalent to empty if not set. https://w3c.github.io/webauthn/#dom-publickeycredentialuserentity-displayname
	 *
	 * @var string|null
	 */
	public $userDisplayName;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->credentialId)) {
			$instance->credentialId = (string)$data->credentialId;
		}
		if (isset($data->isResidentCredential)) {
			$instance->isResidentCredential = (bool)$data->isResidentCredential;
		}
		if (isset($data->rpId)) {
			$instance->rpId = (string)$data->rpId;
		}
		if (isset($data->privateKey)) {
			$instance->privateKey = (string)$data->privateKey;
		}
		if (isset($data->userHandle)) {
			$instance->userHandle = (string)$data->userHandle;
		}
		if (isset($data->signCount)) {
			$instance->signCount = (int)$data->signCount;
		}
		if (isset($data->largeBlob)) {
			$instance->largeBlob = (string)$data->largeBlob;
		}
		if (isset($data->backupEligibility)) {
			$instance->backupEligibility = (bool)$data->backupEligibility;
		}
		if (isset($data->backupState)) {
			$instance->backupState = (bool)$data->backupState;
		}
		if (isset($data->userName)) {
			$instance->userName = (string)$data->userName;
		}
		if (isset($data->userDisplayName)) {
			$instance->userDisplayName = (string)$data->userDisplayName;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->credentialId !== null) {
			$data->credentialId = $this->credentialId;
		}
		if ($this->isResidentCredential !== null) {
			$data->isResidentCredential = $this->isResidentCredential;
		}
		if ($this->rpId !== null) {
			$data->rpId = $this->rpId;
		}
		if ($this->privateKey !== null) {
			$data->privateKey = $this->privateKey;
		}
		if ($this->userHandle !== null) {
			$data->userHandle = $this->userHandle;
		}
		if ($this->signCount !== null) {
			$data->signCount = $this->signCount;
		}
		if ($this->largeBlob !== null) {
			$data->largeBlob = $this->largeBlob;
		}
		if ($this->backupEligibility !== null) {
			$data->backupEligibility = $this->backupEligibility;
		}
		if ($this->backupState !== null) {
			$data->backupState = $this->backupState;
		}
		if ($this->userName !== null) {
			$data->userName = $this->userName;
		}
		if ($this->userDisplayName !== null) {
			$data->userDisplayName = $this->userDisplayName;
		}
		return $data;
	}
}
