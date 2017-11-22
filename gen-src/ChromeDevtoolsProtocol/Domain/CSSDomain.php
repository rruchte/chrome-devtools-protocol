<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\CSS\AddRuleRequest;
use ChromeDevtoolsProtocol\Model\CSS\AddRuleResponse;
use ChromeDevtoolsProtocol\Model\CSS\CollectClassNamesRequest;
use ChromeDevtoolsProtocol\Model\CSS\CollectClassNamesResponse;
use ChromeDevtoolsProtocol\Model\CSS\CreateStyleSheetRequest;
use ChromeDevtoolsProtocol\Model\CSS\CreateStyleSheetResponse;
use ChromeDevtoolsProtocol\Model\CSS\FontsUpdatedEvent;
use ChromeDevtoolsProtocol\Model\CSS\ForcePseudoStateRequest;
use ChromeDevtoolsProtocol\Model\CSS\GetBackgroundColorsRequest;
use ChromeDevtoolsProtocol\Model\CSS\GetBackgroundColorsResponse;
use ChromeDevtoolsProtocol\Model\CSS\GetComputedStyleForNodeRequest;
use ChromeDevtoolsProtocol\Model\CSS\GetComputedStyleForNodeResponse;
use ChromeDevtoolsProtocol\Model\CSS\GetInlineStylesForNodeRequest;
use ChromeDevtoolsProtocol\Model\CSS\GetInlineStylesForNodeResponse;
use ChromeDevtoolsProtocol\Model\CSS\GetMatchedStylesForNodeRequest;
use ChromeDevtoolsProtocol\Model\CSS\GetMatchedStylesForNodeResponse;
use ChromeDevtoolsProtocol\Model\CSS\GetMediaQueriesResponse;
use ChromeDevtoolsProtocol\Model\CSS\GetPlatformFontsForNodeRequest;
use ChromeDevtoolsProtocol\Model\CSS\GetPlatformFontsForNodeResponse;
use ChromeDevtoolsProtocol\Model\CSS\GetStyleSheetTextRequest;
use ChromeDevtoolsProtocol\Model\CSS\GetStyleSheetTextResponse;
use ChromeDevtoolsProtocol\Model\CSS\MediaQueryResultChangedEvent;
use ChromeDevtoolsProtocol\Model\CSS\SetEffectivePropertyValueForNodeRequest;
use ChromeDevtoolsProtocol\Model\CSS\SetKeyframeKeyRequest;
use ChromeDevtoolsProtocol\Model\CSS\SetKeyframeKeyResponse;
use ChromeDevtoolsProtocol\Model\CSS\SetMediaTextRequest;
use ChromeDevtoolsProtocol\Model\CSS\SetMediaTextResponse;
use ChromeDevtoolsProtocol\Model\CSS\SetRuleSelectorRequest;
use ChromeDevtoolsProtocol\Model\CSS\SetRuleSelectorResponse;
use ChromeDevtoolsProtocol\Model\CSS\SetStyleSheetTextRequest;
use ChromeDevtoolsProtocol\Model\CSS\SetStyleSheetTextResponse;
use ChromeDevtoolsProtocol\Model\CSS\SetStyleTextsRequest;
use ChromeDevtoolsProtocol\Model\CSS\SetStyleTextsResponse;
use ChromeDevtoolsProtocol\Model\CSS\StopRuleUsageTrackingResponse;
use ChromeDevtoolsProtocol\Model\CSS\StyleSheetAddedEvent;
use ChromeDevtoolsProtocol\Model\CSS\StyleSheetChangedEvent;
use ChromeDevtoolsProtocol\Model\CSS\StyleSheetRemovedEvent;
use ChromeDevtoolsProtocol\Model\CSS\TakeCoverageDeltaResponse;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class CSSDomain implements CSSDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function enable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'CSS.enable', $request);
	}


	public function disable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'CSS.disable', $request);
	}


	public function getMatchedStylesForNode(ContextInterface $ctx, GetMatchedStylesForNodeRequest $request): GetMatchedStylesForNodeResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'CSS.getMatchedStylesForNode', $request);
		return GetMatchedStylesForNodeResponse::fromJson($response);
	}


	public function getInlineStylesForNode(ContextInterface $ctx, GetInlineStylesForNodeRequest $request): GetInlineStylesForNodeResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'CSS.getInlineStylesForNode', $request);
		return GetInlineStylesForNodeResponse::fromJson($response);
	}


	public function getComputedStyleForNode(ContextInterface $ctx, GetComputedStyleForNodeRequest $request): GetComputedStyleForNodeResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'CSS.getComputedStyleForNode', $request);
		return GetComputedStyleForNodeResponse::fromJson($response);
	}


	public function getPlatformFontsForNode(ContextInterface $ctx, GetPlatformFontsForNodeRequest $request): GetPlatformFontsForNodeResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'CSS.getPlatformFontsForNode', $request);
		return GetPlatformFontsForNodeResponse::fromJson($response);
	}


	public function getStyleSheetText(ContextInterface $ctx, GetStyleSheetTextRequest $request): GetStyleSheetTextResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'CSS.getStyleSheetText', $request);
		return GetStyleSheetTextResponse::fromJson($response);
	}


	public function collectClassNames(ContextInterface $ctx, CollectClassNamesRequest $request): CollectClassNamesResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'CSS.collectClassNames', $request);
		return CollectClassNamesResponse::fromJson($response);
	}


	public function setStyleSheetText(ContextInterface $ctx, SetStyleSheetTextRequest $request): SetStyleSheetTextResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'CSS.setStyleSheetText', $request);
		return SetStyleSheetTextResponse::fromJson($response);
	}


	public function setRuleSelector(ContextInterface $ctx, SetRuleSelectorRequest $request): SetRuleSelectorResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'CSS.setRuleSelector', $request);
		return SetRuleSelectorResponse::fromJson($response);
	}


	public function setKeyframeKey(ContextInterface $ctx, SetKeyframeKeyRequest $request): SetKeyframeKeyResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'CSS.setKeyframeKey', $request);
		return SetKeyframeKeyResponse::fromJson($response);
	}


	public function setStyleTexts(ContextInterface $ctx, SetStyleTextsRequest $request): SetStyleTextsResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'CSS.setStyleTexts', $request);
		return SetStyleTextsResponse::fromJson($response);
	}


	public function setMediaText(ContextInterface $ctx, SetMediaTextRequest $request): SetMediaTextResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'CSS.setMediaText', $request);
		return SetMediaTextResponse::fromJson($response);
	}


	public function createStyleSheet(ContextInterface $ctx, CreateStyleSheetRequest $request): CreateStyleSheetResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'CSS.createStyleSheet', $request);
		return CreateStyleSheetResponse::fromJson($response);
	}


	public function addRule(ContextInterface $ctx, AddRuleRequest $request): AddRuleResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'CSS.addRule', $request);
		return AddRuleResponse::fromJson($response);
	}


	public function forcePseudoState(ContextInterface $ctx, ForcePseudoStateRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'CSS.forcePseudoState', $request);
	}


	public function getMediaQueries(ContextInterface $ctx): GetMediaQueriesResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'CSS.getMediaQueries', $request);
		return GetMediaQueriesResponse::fromJson($response);
	}


	public function setEffectivePropertyValueForNode(ContextInterface $ctx, SetEffectivePropertyValueForNodeRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'CSS.setEffectivePropertyValueForNode', $request);
	}


	public function getBackgroundColors(ContextInterface $ctx, GetBackgroundColorsRequest $request): GetBackgroundColorsResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'CSS.getBackgroundColors', $request);
		return GetBackgroundColorsResponse::fromJson($response);
	}


	public function startRuleUsageTracking(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'CSS.startRuleUsageTracking', $request);
	}


	public function takeCoverageDelta(ContextInterface $ctx): TakeCoverageDeltaResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'CSS.takeCoverageDelta', $request);
		return TakeCoverageDeltaResponse::fromJson($response);
	}


	public function stopRuleUsageTracking(ContextInterface $ctx): StopRuleUsageTrackingResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'CSS.stopRuleUsageTracking', $request);
		return StopRuleUsageTrackingResponse::fromJson($response);
	}


	public function addMediaQueryResultChangedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('CSS.mediaQueryResultChanged', function ($event) use ($listener) {
			return $listener(MediaQueryResultChangedEvent::fromJson($event));
		});
	}


	public function awaitMediaQueryResultChanged(ContextInterface $ctx): MediaQueryResultChangedEvent
	{
		return MediaQueryResultChangedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'CSS.mediaQueryResultChanged'));
	}


	public function addFontsUpdatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('CSS.fontsUpdated', function ($event) use ($listener) {
			return $listener(FontsUpdatedEvent::fromJson($event));
		});
	}


	public function awaitFontsUpdated(ContextInterface $ctx): FontsUpdatedEvent
	{
		return FontsUpdatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'CSS.fontsUpdated'));
	}


	public function addStyleSheetChangedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('CSS.styleSheetChanged', function ($event) use ($listener) {
			return $listener(StyleSheetChangedEvent::fromJson($event));
		});
	}


	public function awaitStyleSheetChanged(ContextInterface $ctx): StyleSheetChangedEvent
	{
		return StyleSheetChangedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'CSS.styleSheetChanged'));
	}


	public function addStyleSheetAddedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('CSS.styleSheetAdded', function ($event) use ($listener) {
			return $listener(StyleSheetAddedEvent::fromJson($event));
		});
	}


	public function awaitStyleSheetAdded(ContextInterface $ctx): StyleSheetAddedEvent
	{
		return StyleSheetAddedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'CSS.styleSheetAdded'));
	}


	public function addStyleSheetRemovedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('CSS.styleSheetRemoved', function ($event) use ($listener) {
			return $listener(StyleSheetRemovedEvent::fromJson($event));
		});
	}


	public function awaitStyleSheetRemoved(ContextInterface $ctx): StyleSheetRemovedEvent
	{
		return StyleSheetRemovedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'CSS.styleSheetRemoved'));
	}
}
