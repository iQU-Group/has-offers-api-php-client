<?php

namespace Iqu\HasOffersAPIClient\Controllers;

use GuzzleHttp\Client;
use Iqu\HasOffersAPIClient\HasOffersConstants;
use Iqu\HasOffersAPIClient\HasOffersResponse;

class BaseController
{
    protected $networkToken = null;
    protected $networkId = null;
    protected $client = null;

    public function __construct($networkToken, $networkId,Client $client)
    {
        $this->networkToken = $networkToken;
        $this->networkId = $networkId;
        $this->client = $client;
    }

    public function sendGetRequest($target, $method, array $options = array())
    {
        $response = $this->client->get($this->buildUrl($target, $method, $options));
        return HasOffersResponse::getResponseObject($response->getBody()->getContents());
    }

    public function sendPostRequest($target, $method, array $postFields = array())
    {
        $args = $this->prepareArguments($target, $method, $postFields);
        $response = $this->client->post(HasOffersConstants::BASE_API_URL, array('form_params' => $args));
        return HasOffersResponse::getResponseObject($response->getBody()->getContents());
    }

    protected function prepareArguments($target, $method, array $options = array())
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
        $urlArguments = $this->prepareArguments($target, $method, $options);
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
