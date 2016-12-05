<?php

namespace Iqu\HasOffersAPIClient\Controllers;

use GuzzleHttp\Client;

class BaseController
{
    const BASE_API_URL = 'https://api.hasoffers.com/Apiv3/json';

    const DEFAULT_LIMIT = 0;
    const DEFAULT_PAGE_NUMBER = 1;
    const DEFAULT_STATUS = '';

    const STATUS_ACTIVE = 'active';
    const STATUS_DELETED = 'deleted';

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
        return $response->getBody()->getContents();
    }

    protected function getUrlArguments($target, $method, array $options = array())
    {
        $args = array(
            'NetworkId' => $this->networkId,
            'Target' => $target,
            'Method' => $method,
            'NetworkToken' => $this->networkToken
        );
        $args = array_merge($args, $options);

        return $args;
    }

    protected function buildUrl($target, $method, array $options = array())
    {
        $args = $this->getUrlArguments($target, $method, $options);

        return self::BASE_API_URL . '?' . http_build_query($args);
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