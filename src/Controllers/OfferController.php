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
     * Returns the affiliate offer approval notes for a given offer and affiliate.
     * This method refers to the approval_notes property in the AffiliateOffer model.
     *
     * @param $id
     * @param $affiliateId
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getAffiliateApplicationNote($id, $affiliateId)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_AFFILIATE_ID => $affiliateId
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_OFFER,
            HasOffersConstants::METHOD_GET_AFFILIATE_APPLICATION_NOTE,
            $arguments);
    }

    /**
     * Returns an affiliate's approval status for a given offer.
     *
     * @param $id
     * @param $affiliateId
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getAffiliateApprovalStatus($id, $affiliateId)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_AFFILIATE_ID => $affiliateId
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_OFFER,
            HasOffersConstants::METHOD_GET_AFFILIATE_APPROVAL_STATUS,
            $arguments);
    }

    /**
     * Returns affiliate-specific custom tracking information for a given offer.
     *
     * @param $id
     * @param $status
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getAffiliateHostnames($id, $status = '')
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_STATUS => $status
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_OFFER,
            HasOffersConstants::METHOD_GET_AFFILIATE_HOST_NAMES,
            $arguments);
    }

    /**
     * Returns a summary of payout- and revenue-related information for a given affiliate and offer. Filter further by supplying a goal.
     *
     * @param $offerId
     * @param $affiliateId
     * @param $goalId
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getAffiliatePayment($offerId, $affiliateId, $goalId = '')
    {
        $arguments = array(
            HasOffersConstants::LITERAL_OFFER_ID => $offerId,
            HasOffersConstants::LITERAL_AFFILIATE_ID => $affiliateId
        );
        if ($goalId) {
            $arguments[HasOffersConstants::LITERAL_GOAL_ID] = $goalId;
        }
        return $this->sendGetRequest(HasOffersConstants::TARGET_OFFER, HasOffersConstants::METHOD_GET_AFFILIATE_PAYMENT,
            $arguments);
    }

    /**
     * Returns payout information for a given offer, affiliate, and (optionally) goal.
     *
     * @param $offerId
     * @param $affiliateId
     * @param $goalId
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getAffiliatePayout($offerId, $affiliateId, $goalId = '')
    {
        $arguments = array(
            HasOffersConstants::LITERAL_OFFER_ID => $offerId,
            HasOffersConstants::LITERAL_AFFILIATE_ID => $affiliateId
        );
        if ($goalId) {
            $arguments[HasOffersConstants::LITERAL_GOAL_ID] = $goalId;
        }
        return $this->sendGetRequest(HasOffersConstants::TARGET_OFFER, HasOffersConstants::METHOD_GET_AFFILIATE_PAYOUT,
            $arguments);
    }

    /**
     * Returns revenue information for a given offer, affiliate, and (optionally) goal.
     *
     * @param $offerId
     * @param $affiliateId
     * @param $goalId
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getAffiliateRevenue($offerId, $affiliateId, $goalId = '')
    {
        $arguments = array(
            HasOffersConstants::LITERAL_OFFER_ID => $offerId,
            HasOffersConstants::LITERAL_AFFILIATE_ID => $affiliateId
        );
        if ($goalId) {
            $arguments[HasOffersConstants::LITERAL_GOAL_ID] = $goalId;
        }
        return $this->sendGetRequest(HasOffersConstants::TARGET_OFFER, HasOffersConstants::METHOD_GET_AFFILIATE_REVENUE,
            $arguments);
    }

    /**
     * Returns all answers an affiliate provided for a given offer's approval questions.
     *
     * @param $offerId
     * @param $affiliateId
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getApprovalAnswers($offerId, $affiliateId)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_OFFER_ID => $offerId,
            HasOffersConstants::LITERAL_AFFILIATE_ID => $affiliateId
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_OFFER, HasOffersConstants::METHOD_GET_APPROVAL_ANSWERS,
            $arguments);
    }

    /**
     * Returns IDs of all affiliates approved for a given offer.
     *
     * If the offer is private or requires approval, this method returns affiliates who are approved for this offer.
     * If the offer is public, this method returns all affiliates except those who have been blocked from this offer.     *
     *
     * @param $id
     * @param array $sort
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getApprovedAffiliateIds($id, $sort = array())
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id,
        );
        if (count($sort)) {
            $arguments[HasOffersConstants::LITERAL_SORT] = $sort;
        }
        return $this->sendGetRequest(HasOffersConstants::TARGET_OFFER,
            HasOffersConstants::METHOD_GET_APPROVED_AFFILIATE_IDS, $arguments);
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
