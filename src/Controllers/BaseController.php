<?php

namespace Iqu\HasOffersAPIClient\Controllers;

use GuzzleHttp\Client;
use Iqu\HasOffersAPIClient\HasOffersConstants;
use Iqu\HasOffersAPIClient\HasOffersResponse;

class BaseController
{
    protected $networkToken = null;
    protected $networkId = null;

    public function __construct($networkToken, $networkId)
    {
        $this->networkToken = $networkToken;
        $this->networkId = $networkId;
    }

    public function sendGetRequest($target, $method, array $options = array())
    {
        $client = new Client();
        $response = $client->get($this->buildUrl($target, $method, $options));
        return HasOffersResponse::getResponseObject($response->getBody()->getContents());
    }

    protected function getUrlArguments($target, $method, array $options = array())
    {
        $urlArguments = array(
            HasOffersConstants::LITERAL_NETWORK_ID => $this->networkId,
            HasOffersConstants::LITERAL_NETWORK_TOKEN => $this->networkToken,
            HasOffersConstants::URL_PARAM_TARGET => $target,
            HasOffersConstants::URL_PARAM_METHOD => $method
        );
        $urlArguments = array_merge($urlArguments, $options);

        return $urlArguments;
    }

    protected function buildUrl($target, $method, array $options = array())
    {
        $urlArguments = $this->getUrlArguments($target, $method, $options);
        return HasOffersConstants::BASE_API_URL . '?' . http_build_query($urlArguments);
    }

    public function getNetworkToken()
    {
        return $this->networkToken;
    }

    public function setNetworkToken($networkToken)
    {
        $this->networkToken = $networkToken;
    }

    public function getNetworkId()
    {
        return $this->networkId;
    }

    public function setNetworkId($networkId)
    {
        $this->networkId = $networkId;
    }
}