<?php

namespace Iqu\HasOffersAPIClient\Controllers;

use Iqu\HasOffersAPIClient\HasOffersConstants;

class AdManagerController extends BaseController
{
    /**
     * Add Ad Campaign Creative with data properties by Ad Campaign ID.
     *
     * @param $campaignId
     * @param array $data
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function addCreative($campaignId, array $data)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_CAMPAIGN_ID => $campaignId,
            HasOffersConstants::LITERAL_DATA => $data
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AD_MANAGER,
            HasOffersConstants::METHOD_ADD_CREATIVE, $postFields);
    }

    /**
     * Create Ad Campaign with data properties.
     *
     * @param array $data
     * @param bool $returnObject
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function createCampaign(array $data, $returnObject = true)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_DATA => $data,
            HasOffersConstants::LITERAL_RETURN_OBJECT => $returnObject
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AD_MANAGER,
            HasOffersConstants::METHOD_CREATE_CAMPAIGN, $postFields);
    }

    /**
     * List of Ad campaign objects.
     *
     * @param array $filters
     * @param array $sort
     * @param array $fields
     * @param array $contain
     * @param string $limit
     * @param string $page
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findAllCampaigns(
        $filters = array(),
        $sort = array(),
        array $fields = array(),
        $contain = array(),
        $limit = HasOffersConstants::DEFAULT_LIMIT,
        $page = HasOffersConstants::DEFAULT_PAGE_NUMBER
    ) {
        $arguments = array(
            HasOffersConstants::URL_PARAM_FILTERS => $filters,
            HasOffersConstants::URL_PARAM_SORT => $sort,
            HasOffersConstants::URL_PARAM_FIELDS => $fields,
            HasOffersConstants::URL_PARAM_CONTAIN => $contain,
            HasOffersConstants::URL_PARAM_LIMIT => $limit,
            HasOffersConstants::URL_PARAM_PAGE => $page
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AD_MANAGER,
            HasOffersConstants::METHOD_FIND_ALL_CAMPAIGNS, $arguments);
    }

    /**
     * Find all Ad Campaign Creatives by filters.
     *
     * @param array $filters
     * @param array $sort
     * @param array $fields
     * @param array $contain
     * @param string $limit
     * @param string $page
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findAllCreatives(
        $filters = array(),
        $sort = array(),
        array $fields = array(),
        $contain = array(),
        $limit = HasOffersConstants::DEFAULT_LIMIT,
        $page = HasOffersConstants::DEFAULT_PAGE_NUMBER
    ) {
        $arguments = array(
            HasOffersConstants::URL_PARAM_FILTERS => $filters,
            HasOffersConstants::URL_PARAM_SORT => $sort,
            HasOffersConstants::URL_PARAM_FIELDS => $fields,
            HasOffersConstants::URL_PARAM_CONTAIN => $contain,
            HasOffersConstants::URL_PARAM_LIMIT => $limit,
            HasOffersConstants::URL_PARAM_PAGE => $page
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AD_MANAGER,
            HasOffersConstants::METHOD_FIND_ALL_CREATIVES, $arguments);
    }

    /**
     * Find Ad Campaign object by Ad Campaign ID.
     *
     * @param $id
     * @param array $fields
     * @param array $contain
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findCampaignById($id, array $fields = array(), array $contain = array())
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::URL_PARAM_FIELDS => $fields,
            HasOffersConstants::URL_PARAM_CONTAIN => $contain
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AD_MANAGER,
            HasOffersConstants::METHOD_FIND_CAMPAIGN_BY_ID, $arguments);
    }

    /**
     * Find Ad Campaign Creative by Ad Campaign Creative ID.
     *
     * @param $id
     * @param array $fields
     * @param array $contain
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findCreativeById($id, array $fields = array(), array $contain = array())
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::URL_PARAM_FIELDS => $fields,
            HasOffersConstants::URL_PARAM_CONTAIN => $contain
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AD_MANAGER,
            HasOffersConstants::METHOD_FIND_CREATIVE_BY_ID, $arguments);
    }

    /**
     * Get total active Ad Campaigns being currently ran by affiliate_access level.
     *
     * @param string $affiliateAccess
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getActiveNetworkCampaignCount($affiliateAccess = '')
    {
        $arguments = array(
            HasOffersConstants::LITERAL_AFFILIATE_ACCESS => $affiliateAccess
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AD_MANAGER,
            HasOffersConstants::METHOD_GET_ACTIVE_NETWORK_CAMPAIGN_COUNT, $arguments);
    }

    /**
     * Get Ad Campaign code. This is typically a brief snippet which is embedded in the affiliate's site.
     * It will load all the creatives / pixels / links relevant to the ad campaign.
     *
     * @param $campaignId
     * @param $affiliateId
     * @param array $params
     * @param array $options
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     * @internal param string $affiliateAccess
     */
    public function getCampaignCode($campaignId, $affiliateId, array $params = array(), array $options = array())
    {
        $arguments = array(
            HasOffersConstants::LITERAL_CAMPAIGN_ID => $campaignId,
            HasOffersConstants::LITERAL_AFFILIATE_ID => $affiliateId,
            HasOffersConstants::LITERAL_PARAMS => $params,
            HasOffersConstants::LITERAL_OPTIONS => $options
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AD_MANAGER,
            HasOffersConstants::METHOD_GET_CAMPAIGN_CODE, $arguments);
    }

    /**
     * Get Ad Campaign Creatives by Ad Campaign ID and other filters.
     *
     * @param $id
     * @param array $filters
     * @param array $sort
     * @param array $fields
     * @param array $contain
     * @param string $limit
     * @param string $page
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getCampaignCreatives(
        $id,
        $filters = array(),
        $sort = array(),
        array $fields = array(),
        $contain = array(),
        $limit = HasOffersConstants::DEFAULT_LIMIT,
        $page = HasOffersConstants::DEFAULT_PAGE_NUMBER
    ) {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::URL_PARAM_FILTERS => $filters,
            HasOffersConstants::URL_PARAM_SORT => $sort,
            HasOffersConstants::URL_PARAM_FIELDS => $fields,
            HasOffersConstants::URL_PARAM_CONTAIN => $contain,
            HasOffersConstants::URL_PARAM_LIMIT => $limit,
            HasOffersConstants::URL_PARAM_PAGE => $page
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AD_MANAGER,
            HasOffersConstants::METHOD_GET_CAMPAIGN_CREATIVES, $arguments);
    }

    /**
     * Get total media usage for start to end date for Ad Campaigns.
     *
     * @param $startDate
     * @param $endDate
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getUsage($startDate, $endDate)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_START_DATE => $startDate,
            HasOffersConstants::LITERAL_END_DATE => $endDate
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AD_MANAGER,
            HasOffersConstants::METHOD_GET_USAGE, $arguments);
    }

    /**
     * Set Ad Campaign Creative weights with data.
     *
     * @param array $data
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function setCreativeCustomWeights(array $data)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_DATA => $data
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AD_MANAGER,
            HasOffersConstants::METHOD_SET_CREATIVE_CUSTOM_WEIGHTS, $postFields);
    }

    /**
     * Set Ad Campaign Creative weights with data properties.
     *
     * @param array $data
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function setCreativeWeights(array $data)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_DATA => $data
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AD_MANAGER,
            HasOffersConstants::METHOD_SET_CREATIVE_WEIGHTS, $postFields);
    }

    /**
     * Update Ad Campaign with data properties by Ad Campaign ID. Data properties is an associative array of fields to the
     * values that they're going to be updated to.
     *
     * @param $id
     * @param $data
     * @param bool $returnObject
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function updateCampaign($id, $data, $returnObject = true)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_DATA => $data,
            HasOffersConstants::LITERAL_RETURN_OBJECT => $returnObject
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AD_MANAGER, HasOffersConstants::METHOD_UPDATE_CAMPAIGN,
            $postFields);
    }

    /**
     * Update Ad Campaign field with value by Ad Campaign ID.
     *
     * @param $id
     * @param $field
     * @param $value
     * @param bool $returnObject
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function updateCampaignField($id, $field, $value, $returnObject = true)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_FIELD => $field,
            HasOffersConstants::LITERAL_VALUE => $value,
            HasOffersConstants::LITERAL_RETURN_OBJECT => $returnObject
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AD_MANAGER,
            HasOffersConstants::METHOD_UPDATE_CAMPAIGN_FIELD, $postFields);
    }

    /**
     * Update Ad Campaign Creative by Ad Campaign Creative ID.
     *
     * @param $creativeId
     * @param $data
     * @param bool $returnObject
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function updateCreative($creativeId, $data, $returnObject = true)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_CREATIVE_ID => $creativeId,
            HasOffersConstants::LITERAL_DATA => $data,
            HasOffersConstants::LITERAL_RETURN_OBJECT => $returnObject
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AD_MANAGER,
            HasOffersConstants::METHOD_UPDATE_CREATIVE, $postFields);
    }

    /**
     * Update Ad Campaign Creative by Ad Campaign Creative ID.
     *
     * @param $id
     * @param $field
     * @param $value
     * @param bool $returnObject
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function updateCreativeField($id, $field, $value, $returnObject = true)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_FIELD => $field,
            HasOffersConstants::LITERAL_VALUE => $value,
            HasOffersConstants::LITERAL_RETURN_OBJECT => $returnObject
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AD_MANAGER,
            HasOffersConstants::METHOD_UPDATE_CREATIVE_FIELD, $postFields);
    }
}
