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

    /**
     * Find All.
     *
     * @param $target
     * @param array $filters
     * @param array $sort
     * @param array $fields
     * @param array $contain
     * @param string $limit
     * @param string $page
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findAllByTarget(
        $target,
        $filters = array(),
        $sort = array(),
        array $fields = array(),
        array $contain = array(),
        $limit = HasOffersConstants::DEFAULT_LIMIT,
        $page = HasOffersConstants::DEFAULT_PAGE_NUMBER
    ) {
        $arguments = array(
            HasOffersConstants::URL_PARAM_FILTERS => $filters,
            HasOffersConstants::URL_PARAM_SORT => $sort,
            HasOffersConstants::URL_PARAM_FIELDS => $fields,
            HasOffersConstants::URL_PARAM_CONTAIN => $contain
        );
        if ($limit != HasOffersConstants::DEFAULT_LIMIT) {
            $arguments[HasOffersConstants::URL_PARAM_LIMIT] = $limit;
        }
        if ($page != HasOffersConstants::DEFAULT_PAGE_NUMBER) {
            $arguments[HasOffersConstants::URL_PARAM_PAGE] = $page;
        }
        return $this->sendGetRequest($target, HasOffersConstants::METHOD_FIND_ALL, $arguments);
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
