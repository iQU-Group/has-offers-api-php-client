<?php

namespace Iqu\HasOffersAPIClient\Controllers;

use Iqu\HasOffersAPIClient\HasOffersConstants;
use Iqu\HasOffersAPIClient\HasOffersResponse;

class AdvertiserController extends BaseController
{
    public function __construct($networkToken, $networkId)
    {
        parent::__construct($networkToken, $networkId);
    }

    public function addAccountNote($id, $note)
    {

    }

    public function block($id, $reason)
    {

    }

    public function blockAffiliate($id, $affiliateId)
    {

    }

    public function create($data, $returnObject = true)
    {

    }

    public function createSignupQuestion($data)
    {

    }

    public function createSignupQuestionAnswer($id, $data)
    {

    }

    public function findAll(
        $filters = array(),
        $sort = array(),
        $limit = self::DEFAULT_LIMIT,
        $page = self::DEFAULT_PAGE_NUMBER,
        array $fields = array(),
        $contain = array()
    ) {
        $urlArguments = array(
            HasOffersConstants::URL_PARAM_FILTERS => $filters,
            HasOffersConstants::URL_PARAM_SORT => $sort,
            HasOffersConstants::URL_PARAM_FIELDS => $fields,
            HasOffersConstants::URL_PARAM_CONTAIN => $contain
        );
        if ($limit != self::DEFAULT_LIMIT) {
            $urlArguments[HasOffersConstants::URL_PARAM_LIMIT] = $limit;
        }
        if ($page != self::DEFAULT_PAGE_NUMBER) {
            $urlArguments[HasOffersConstants::URL_PARAM_PAGE] = $page;
        }
        $hasOffersResponse = $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_FIND_ALL, $urlArguments);

        return HasOffersResponse::getResponseObject($hasOffersResponse);
    }

    public function findAllByIds(array $ids, array $fields = array(), $contain = array())
    {

    }

    public function findAllIds()
    {
        $hasOffersResponse = $this->sendGetRequest(self::TARGET_ADVERTISER, HasOffersConstants::METHOD_FIND_ALL_IDS);
        return HasOffersResponse::getResponseObject($hasOffersResponse);
    }

    public function findAllIdsByAccountManagerId($employeeId)
    {

    }

    public function findAllPendingUnassignedAdvertiserIds($managerId)
    {

    }

    public function findAllPendingUnassignedAdvertisers($employeeId)
    {

    }

    public function findById($id, array $fields = array(), $contain = array())
    {

    }

    public function getAccountBalance($id)
    {

    }

    public function getAccountManager($id)
    {

    }

    public function getAccountNotes($id)
    {

    }

    public function getBlockedAffiliateIds($id)
    {

    }

    public function getBlockedReasons($id)
    {

    }

    public function getCreatorUser($id)
    {

    }

    public function getOverview(array $advertiserIds, array $fields = array(), $employeeId = null)
    {

    }

    public function getOwnersAdvertiserAccountId()
    {

    }

    public function getSignupAnswers($id)
    {

    }

    public function getSignupQuestions($status = self::DEFAULT_STATUS)
    {

    }

    public function getUnblockedAffiliateIds($id)
    {

    }

    public function signup($account, $user = null, $meta = null, $returnObject = true)
    {

    }

    public function unblockAffiliate($id, $affiliateId)
    {

    }

    public function update($id, $data, $returnObject = true)
    {

    }

    public function updateAccountNote($accountNoteId, $note)
    {

    }

    public function updateField($id, $field, $value, $returnObject = true)
    {

    }

    public function updateSignupQuestion($questionId, $data)
    {

    }

    public function updateSignupQuestionAnswer($answerId, $data)
    {

    }
}