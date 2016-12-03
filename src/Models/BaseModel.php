<?php

namespace Iqu\HasOffersAPIClient\Models;

class BaseModel
{
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
