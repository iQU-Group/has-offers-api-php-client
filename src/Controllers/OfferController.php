<?php

namespace Iqu\HasOffersAPIClient\Controllers;

use Iqu\HasOffersAPIClient\HasOffersConstants;

class OfferController extends BaseController
{
    public function __construct($networkToken, $networkId, $client)
    {
        parent::__construct($networkToken, $networkId, $client);
    }

    /**
     * Find Offers.
     *
     * @param array $filters
     * @param array $sort
     * @param array $fields
     * @param array $contain
     * @param string $limit
     * @param string $page
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findAll(
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
        return $this->sendGetRequest(HasOffersConstants::TARGET_OFFER, HasOffersConstants::METHOD_FIND_ALL,
            $arguments);
    }

    /**
     * Find one or more Offer(s) by their IDs.
     *
     * @param array $ids
     * @param array $fields
     * @param array $contain
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findAllByIds(array $ids, array $fields = array(), array $contain = array())
    {
        $arguments = array(
            HasOffersConstants::LITERAL_IDS => $ids,
            HasOffersConstants::URL_PARAM_FIELDS => $fields,
            HasOffersConstants::URL_PARAM_CONTAIN => $contain
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_OFFER, HasOffersConstants::METHOD_FIND_ALL_BY_IDS,
            $arguments);
    }

    /**
     * Find a list of Offer IDs.
     *
     * @param array $filters
     * @param string $limit
     * @param string $page
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findAllIds(
        $filters = array(),
        $limit = HasOffersConstants::DEFAULT_LIMIT,
        $page = HasOffersConstants::DEFAULT_PAGE_NUMBER
    ) {
        $arguments = array(
            HasOffersConstants::URL_PARAM_FILTERS => $filters,
            HasOffersConstants::URL_PARAM_PAGE => $page,
            HasOffersConstants::URL_PARAM_LIMIT => $limit
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_OFFER, HasOffersConstants::METHOD_FIND_ALL_IDS,
            $arguments);
    }

    /**
     * Retrieve an Offer by ID.
     *
     * @param $id
     * @param array $fields
     * @param array $contain
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findById($id, array $fields = array(), $contain = array())
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::URL_PARAM_FIELDS => $fields,
            HasOffersConstants::URL_PARAM_CONTAIN => $contain
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_OFFER, HasOffersConstants::METHOD_FIND_BY_ID,
            $arguments);
    }

    /**
     * Get Affiliate-specific Offer Payouts for an Offer.
     *
     * @param $id
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getPayouts($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id,
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_OFFER, HasOffersConstants::METHOD_GET_PAYOUTS,
            $arguments);
    }

    /**
     * Get Affiliate-specific Offer Revenues for an Offer.
     *
     * @param $id
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getRevenues($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id,
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_OFFER, HasOffersConstants::METHOD_GET_REVENUES,
            $arguments);
    }

    /**
     * Sets the Offer approval status for an Affiliate.
     *
     * @param $id
     * @param $affiliateId
     * @param $status
     * @param string $notes
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function setAffiliateApproval($id, $affiliateId, $status, $notes = '')
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_AFFILIATE_ID => $affiliateId,
            HasOffersConstants::LITERAL_STATUS => $status,
            HasOffersConstants::LITERAL_NOTES => $notes
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_OFFER,
            HasOffersConstants::METHOD_SET_AFFILIATE_APPROVAL, $postFields);
    }
}
