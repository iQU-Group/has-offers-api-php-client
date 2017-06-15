<?php

namespace Iqu\HasOffersAPIClient\Controllers;

use Iqu\HasOffersAPIClient\HasOffersConstants;

class AdvertiserController extends BaseController
{
    public function __construct($networkToken, $networkId, $client)
    {
        parent::__construct($networkToken, $networkId, $client);
    }

    /**
     * Add Advertiser account note by Advertiser ID.
     *
     * @param $id
     * @param $note
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function addAccountNote($id, $note)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_NOTE => $note
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_ADD_ACCOUNT_NOTE, $postFields);
    }

    /**
     * Block Advertiser account by Advertiser ID.
     *
     * @param $id
     * @param string $reason
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function block($id, $reason = '')
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_REASON => $reason
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_ADVERTISER, HasOffersConstants::METHOD_BLOCK,
            $postFields);
    }

    /**
     * Block an Affiliate from an Advertiser's Offers.
     *
     * @param $id
     * @param $affiliateId
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function blockAffiliate($id, $affiliateId)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_AFFILIATE_ID => $affiliateId
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_ADVERTISER, HasOffersConstants::METHOD_BLOCK_AFFILIATE,
            $postFields);
    }

    /**
     * Create Advertiser account.
     *
     * @param $data
     * @param bool $returnObject
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function create($data, $returnObject = true)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_DATA => $data,
            HasOffersConstants::LITERAL_RETURN_OBJECT => $returnObject
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_ADVERTISER, HasOffersConstants::METHOD_CREATE,
            $postFields);
    }

    /**
     * Create advertiser signup question.
     *
     * @param array $data
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function createSignupQuestion(array $data)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_DATA => $data
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_CREATE_SIGNUP_QUESTION, $postFields);
    }

    /**
     * Create signup question answer by Advertiser ID.
     *
     * @param $id
     * @param array $data
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function createSignupQuestionAnswer($id, array $data)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_DATA => $data
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_CREATE_SIGNUP_QUESTION_ANSWER, $postFields);
    }

    /**
     * Find all advertiser objects by filters.
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
        $contain = array(),
        $limit = HasOffersConstants::DEFAULT_LIMIT,
        $page = HasOffersConstants::DEFAULT_PAGE_NUMBER
    ) {
        return parent::findAll(HasOffersConstants::TARGET_ADVERTISER, $filters, $sort, $fields, $contain, $limit, $page);
    }

    /**
     * Find all Advertiser objects by list Advertiser IDs.
     *
     * @param array $ids
     * @param array $fields
     * @param array $contain
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findAllByIds(array $ids, array $fields = array(), $contain = array())
    {
        $arguments = array(
            HasOffersConstants::LITERAL_IDS => $ids,
            HasOffersConstants::URL_PARAM_FIELDS => $fields,
            HasOffersConstants::URL_PARAM_CONTAIN => $contain
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER, HasOffersConstants::METHOD_FIND_ALL_BY_IDS,
            $arguments);
    }

    /**
     * Find all Advertiser IDs based on what the requester has access to.
     * In order to have a restrictive effect, a Request Interface must be passed, else all IDs in the Network will be returned.
     *
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findAllIds()
    {
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER, HasOffersConstants::METHOD_FIND_ALL_IDS);
    }

    /**
     * Find all Advertisers IDs with given account manager (employee).
     *
     * @param $employeeId
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findAllIdsByAccountManagerId($employeeId)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_EMPLOYEE_ID => $employeeId
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_FIND_ALL_IDS_BY_ACCOUNT_MANAGER_ID, $arguments);
    }

    /**
     * Find all pending and unassigned Advertisers by account manager (employee) ID.
     *
     * @param string $managerId
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findAllPendingUnassignedAdvertiserIds($managerId = '')
    {
        $arguments = array();
        if ($managerId) {
            $arguments[HasOffersConstants::LITERAL_MANAGER_ID] = $managerId;
        }
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_FIND_ALL_PENDING_UNASSIGNED_ADVERTISER_IDS, $arguments);
    }

    /**
     * Find all Advertisers with a status of "pending" who are managed by the specified Account Manager (Employee).
     *
     * @param string $employeeId
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findAllPendingUnassignedAdvertisers($employeeId = '')
    {
        $arguments = array();
        if ($employeeId) {
            $arguments[HasOffersConstants::LITERAL_EMPLOYEE_ID] = $employeeId;
        }
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_FIND_ALL_PENDING_UNASSIGNED_ADVERTISERS, $arguments);
    }

    /**
     * Find Advertiser object by Advertiser ID.
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
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER, HasOffersConstants::METHOD_FIND_BY_ID,
            $arguments);
    }

    /**
     * Get Advertiser account balance.
     *
     * @param $id
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getAccountBalance($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_GET_ACCOUNT_BALANCE, $arguments);
    }

    /**
     * Get account manager by Advertiser ID.
     *
     * @param $id
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getAccountManager($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_GET_ACCOUNT_MANAGER, $arguments);
    }

    /**
     * Get Advertiser account notes by Advertiser ID.
     *
     * @param $id
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getAccountNotes($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_GET_ACCOUNT_NOTES, $arguments);
    }

    /**
     * Get Affiliate IDs blocked from using Advertiser's Offers.
     *
     * @param $id
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getBlockedAffiliateIds($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_GET_BLOCKED_AFFILIATE_IDS, $arguments);
    }

    /**
     * Get reasons why Advertiser is blocked.
     *
     * @param $id
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getBlockedReasons($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_GET_BLOCKED_REASONS, $arguments);
    }

    /**
     * Get creator Advertiser User for the specified Advertiser account.
     *
     * @param $id
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getCreatorUser($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_GET_CREATOR_USER, $arguments);
    }

    /**
     * Get overview of active and pending Advertiser accounts by Advertiser IDs, account manager (employee) ID, and filters. This is used on the snapshot pages.
     *
     * @param array $advertiserIds
     * @param array $fields
     * @param string $employeeId
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getOverview(array $advertiserIds = array(), array $fields = array(), $employeeId = '')
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ADVERTISER_IDS => $advertiserIds,
            HasOffersConstants::LITERAL_FIELDS => $fields
        );
        if ($employeeId) {
            $arguments[HasOffersConstants::LITERAL_EMPLOYEE_ID] = $employeeId;
        }
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_GET_OVERVIEW, $arguments);
    }

    /**
     * Get the first Advertiser ID. This ID should always be the brand creator's Advertiser account.
     *
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getOwnersAdvertiserAccountId()
    {
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_GET_OWNERS_ADVERTISER_ACCOUNT_ID);
    }

    /**
     * Get signup answers by Advertiser ID.
     *
     * @param $id
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getSignupAnswers($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_GET_SIGNUP_ANSWERS, $arguments);
    }

    /**
     * Get Advertiser Signup Questions.
     *
     * @param string $status
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getSignupQuestions($status = HasOffersConstants::DEFAULT_STATUS)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_STATUS => $status
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_GET_SIGNUP_ANSWERS, $arguments);
    }

    /**
     * Get Affiliate IDs that can use a specified Advertiser's Offers.
     *
     * @param $id
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getUnblockedAffiliateIds($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_GET_UNBLOCKED_AFFILIATE_IDS, $arguments);
    }

    /**
     * Advertiser signup from login page.
     *
     * @param array $account
     * @param array $user
     * @param array $meta
     * @param bool $returnObject
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function signup(array $account, array $user = array(), array $meta = array(), $returnObject = true)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ACCOUNT => $account,
            HasOffersConstants::LITERAL_USER => $user,
            HasOffersConstants::LITERAL_META => $meta,
            HasOffersConstants::LITERAL_RETURN_OBJECT => $returnObject
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_ADVERTISER, HasOffersConstants::METHOD_SIGNUP,
            $postFields);
    }

    /**
     * Unblock an Affiliate from accessing an Advertiser's Offers.
     *
     * @param $id
     * @param $affiliateId
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function unblockAffiliate($id, $affiliateId)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_AFFILIATE_ID => $affiliateId
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_UNBLOCK_AFFILIATE, $postFields);
    }

    /**
     * Update all Advertiser fields passed into data by Advertiser ID.
     *
     * @param $id
     * @param $data
     * @param bool $returnObject
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function update($id, $data, $returnObject = true)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_DATA => $data,
            HasOffersConstants::LITERAL_RETURN_OBJECT => $returnObject
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_ADVERTISER, HasOffersConstants::METHOD_UPDATE,
            $postFields);
    }

    /**
     * Update Advertiser account note by AccountNote ID.
     *
     * @param $accountNoteId
     * @param $note
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function updateAccountNote($accountNoteId, $note)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ACCOUNT_NOTE_ID => $accountNoteId,
            HasOffersConstants::LITERAL_NOTE => $note
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_UPDATE_ACCOUNT_NOTE, $postFields);
    }

    /**
     * Update Advertiser field by Advertiser ID.
     *
     * @param $id
     * @param $field
     * @param $value
     * @param bool $returnObject
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function updateField($id, $field, $value, $returnObject = true)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_FIELD => $field,
            HasOffersConstants::LITERAL_VALUE => $value,
            HasOffersConstants::LITERAL_RETURN_OBJECT => $returnObject
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_ADVERTISER, HasOffersConstants::METHOD_UPDATE_FIELD,
            $postFields);
    }

    /**
     * Update an Advertiser Signup Question.
     *
     * @param $questionId
     * @param array $data
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function updateSignupQuestion($questionId, array $data)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_QUESTION_ID => $questionId,
            HasOffersConstants::LITERAL_DATA => $data
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_UPDATE_SIGNUP_QUESTION, $postFields);
    }

    /**
     * Update signup question answer by SignupAnswer ID.
     *
     * @param $answerId
     * @param array $data
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function updateSignupQuestionAnswer($answerId, array $data)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ANSWER_ID => $answerId,
            HasOffersConstants::LITERAL_DATA => $data
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_UPDATE_SIGNUP_QUESTION_ANSWER, $postFields);
    }
}
