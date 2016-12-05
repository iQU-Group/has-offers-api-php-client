<?php

namespace Iqu\HasOffersAPIClient\Controllers;

use Iqu\HasOffersAPIClient\HasOffersConstants;

class AdvertiserController extends BaseController
{
    public function __construct($networkToken, $networkId)
    {
        parent::__construct($networkToken, $networkId);
    }

    public function addAccountNote($id, $note)
    {

    }

    public function block($id, $reason = '')
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
        $limit = HasOffersConstants::DEFAULT_LIMIT,
        $page = HasOffersConstants::DEFAULT_PAGE_NUMBER,
        array $fields = array(),
        $contain = array()
    ) {
        $urlArguments = array(
            HasOffersConstants::URL_PARAM_FILTERS => $filters,
            HasOffersConstants::URL_PARAM_SORT => $sort,
            HasOffersConstants::URL_PARAM_FIELDS => $fields,
            HasOffersConstants::URL_PARAM_CONTAIN => $contain
        );
        if ($limit != HasOffersConstants::DEFAULT_LIMIT) {
            $urlArguments[HasOffersConstants::URL_PARAM_LIMIT] = $limit;
        }
        if ($page != HasOffersConstants::DEFAULT_PAGE_NUMBER) {
            $urlArguments[HasOffersConstants::URL_PARAM_PAGE] = $page;
        }
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER, HasOffersConstants::METHOD_FIND_ALL,
            $urlArguments);
    }

    public function findAllByIds(array $ids, array $fields = array(), $contain = array())
    {
        $urlArguments = array(
            HasOffersConstants::LITERAL_IDS => $ids,
            HasOffersConstants::URL_PARAM_FIELDS => $fields,
            HasOffersConstants::URL_PARAM_CONTAIN => $contain
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER, HasOffersConstants::METHOD_FIND_ALL_BY_IDS,
            $urlArguments);
    }

    public function findAllIds()
    {
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER, HasOffersConstants::METHOD_FIND_ALL_IDS);
    }

    public function findAllIdsByAccountManagerId($employeeId)
    {
        $urlArguments = array(
            HasOffersConstants::LITERAL_EMPLOYEE_ID => $employeeId
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_FIND_ALL_IDS_BY_ACCOUNT_MANAGER_ID, $urlArguments);
    }

    public function findAllPendingUnassignedAdvertiserIds($managerId = '')
    {
        $urlArguments = array();
        if ($managerId) {
            $urlArguments[HasOffersConstants::LITERAL_MANAGER_ID] = $managerId;
        }
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_FIND_ALL_PENDING_UNASSIGNED_ADVERTISER_IDS, $urlArguments);
    }

    public function findAllPendingUnassignedAdvertisers($employeeId = '')
    {
        $urlArguments = array();
        if ($employeeId) {
            $urlArguments[HasOffersConstants::LITERAL_EMPLOYEE_ID] = $employeeId;
        }
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_FIND_ALL_PENDING_UNASSIGNED_ADVERTISERS, $urlArguments);
    }

    public function findById($id, array $fields = array(), $contain = array())
    {
        $urlArguments = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::URL_PARAM_FIELDS => $fields,
            HasOffersConstants::URL_PARAM_CONTAIN => $contain
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER, HasOffersConstants::METHOD_FIND_BY_ID,
            $urlArguments);
    }

    public function getAccountBalance($id)
    {
        $urlArguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_GET_ACCOUNT_BALANCE, $urlArguments);
    }

    public function getAccountManager($id)
    {
        $urlArguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_GET_ACCOUNT_MANAGER, $urlArguments);
    }

    public function getAccountNotes($id)
    {
        $urlArguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_GET_ACCOUNT_NOTES, $urlArguments);
    }

    public function getBlockedAffiliateIds($id)
    {
        $urlArguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_GET_BLOCKED_AFFILIATE_IDS, $urlArguments);
    }

    public function getBlockedReasons($id)
    {
        $urlArguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_GET_BLOCKED_REASONS, $urlArguments);
    }

    public function getCreatorUser($id)
    {
        $urlArguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_GET_CREATOR_USER, $urlArguments);
    }

    public function getOverview(array $advertiserIds = array(), array $fields = array(), $employeeId = '')
    {
        $urlArguments = array(
            HasOffersConstants::LITERAL_ADVERTISER_IDS => $advertiserIds,
            HasOffersConstants::LITERAL_FIELDS => $fields
        );
        if ($employeeId) {
            $urlArguments[HasOffersConstants::LITERAL_EMPLOYEE_ID] = $employeeId;
        }
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_GET_OVERVIEW, $urlArguments);
    }

    public function getOwnersAdvertiserAccountId()
    {
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_GET_OWNER_ADVERTISER_ACCOUNT_ID);
    }

    public function getSignupAnswers($id)
    {
        $urlArguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_GET_SIGNUP_ANSWERS, $urlArguments);
    }

    public function getSignupQuestions($status = HasOffersConstants::DEFAULT_STATUS)
    {
        $urlArguments = array(
            HasOffersConstants::LITERAL_STATUS => $status
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_GET_SIGNUP_ANSWERS, $urlArguments);
    }

    public function getUnblockedAffiliateIds($id)
    {
        $urlArguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_GET_UNBLOCKED_AFFILIATE_IDS, $urlArguments);
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