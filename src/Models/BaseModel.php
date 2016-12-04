<?php

namespace Iqu\HasOffersAPIClient\Models;

class BaseModel
{
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
