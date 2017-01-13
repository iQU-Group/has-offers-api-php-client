<?php

namespace Iqu\HasOffersAPIClient\Controllers;

use Iqu\HasOffersAPIClient\HasOffersConstants;

class AdvertiserController extends BaseController
{
    public function __construct($networkToken, $networkId, $client)
    {
        parent::__construct($networkToken, $networkId, $client);
    }

    public function addAccountNote($id, $note)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_NOTE => $note
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_ADD_ACCOUNT_NOTE, $postFields);
    }

    public function block($id, $reason = '')
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_REASON => $reason
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_ADVERTISER, HasOffersConstants::METHOD_BLOCK,
            $postFields);
    }

    public function blockAffiliate($id, $affiliateId)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_AFFILIATE_ID => $affiliateId
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_ADVERTISER, HasOffersConstants::METHOD_BLOCK_AFFILIATE,
            $postFields);
    }

    public function create($data, $returnObject = true)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_DATA => $data,
            HasOffersConstants::LITERAL_RETURN_OBJECT => $returnObject
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_ADVERTISER, HasOffersConstants::METHOD_CREATE,
            $postFields);
    }

    public function createSignupQuestion(array $data)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_DATA => $data
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_CREATE_SIGNUP_QUESTION, $postFields);
    }

    public function createSignupQuestionAnswer($id, array $data)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_DATA => $data
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_CREATE_SIGNUP_QUESTION_ANSWER, $postFields);
    }

    public function findAll(
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
            HasOffersConstants::URL_PARAM_CONTAIN => $contain
        );
        if ($limit != HasOffersConstants::DEFAULT_LIMIT) {
            $arguments[HasOffersConstants::URL_PARAM_LIMIT] = $limit;
        }
        if ($page != HasOffersConstants::DEFAULT_PAGE_NUMBER) {
            $arguments[HasOffersConstants::URL_PARAM_PAGE] = $page;
        }
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER, HasOffersConstants::METHOD_FIND_ALL,
            $arguments);
    }

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

    public function findAllIds()
    {
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER, HasOffersConstants::METHOD_FIND_ALL_IDS);
    }

    public function findAllIdsByAccountManagerId($employeeId)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_EMPLOYEE_ID => $employeeId
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_FIND_ALL_IDS_BY_ACCOUNT_MANAGER_ID, $arguments);
    }

    public function findAllPendingUnassignedAdvertiserIds($managerId = '')
    {
        $arguments = array();
        if ($managerId) {
            $arguments[HasOffersConstants::LITERAL_MANAGER_ID] = $managerId;
        }
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_FIND_ALL_PENDING_UNASSIGNED_ADVERTISER_IDS, $arguments);
    }

    public function findAllPendingUnassignedAdvertisers($employeeId = '')
    {
        $arguments = array();
        if ($employeeId) {
            $arguments[HasOffersConstants::LITERAL_EMPLOYEE_ID] = $employeeId;
        }
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_FIND_ALL_PENDING_UNASSIGNED_ADVERTISERS, $arguments);
    }

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

    public function getAccountBalance($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_GET_ACCOUNT_BALANCE, $arguments);
    }

    public function getAccountManager($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_GET_ACCOUNT_MANAGER, $arguments);
    }

    public function getAccountNotes($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_GET_ACCOUNT_NOTES, $arguments);
    }

    public function getBlockedAffiliateIds($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_GET_BLOCKED_AFFILIATE_IDS, $arguments);
    }

    public function getBlockedReasons($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_GET_BLOCKED_REASONS, $arguments);
    }

    public function getCreatorUser($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_GET_CREATOR_USER, $arguments);
    }

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

    public function getOwnersAdvertiserAccountId()
    {
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_GET_OWNERS_ADVERTISER_ACCOUNT_ID);
    }

    public function getSignupAnswers($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_GET_SIGNUP_ANSWERS, $arguments);
    }

    public function getSignupQuestions($status = HasOffersConstants::DEFAULT_STATUS)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_STATUS => $status
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_GET_SIGNUP_ANSWERS, $arguments);
    }

    public function getUnblockedAffiliateIds($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_GET_UNBLOCKED_AFFILIATE_IDS, $arguments);
    }

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

    public function unblockAffiliate($id, $affiliateId)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_AFFILIATE_ID => $affiliateId
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_UNBLOCK_AFFILIATE, $postFields);
    }

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

    public function updateAccountNote($accountNoteId, $note)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ACCOUNT_NOTE_ID => $accountNoteId,
            HasOffersConstants::LITERAL_NOTE => $note
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_UPDATE_ACCOUNT_NOTE, $postFields);
    }

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

    public function updateSignupQuestion($questionId, array $data)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_QUESTION_ID => $questionId,
            HasOffersConstants::LITERAL_DATA => $data
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_UPDATE_SIGNUP_QUESTION, $postFields);
    }

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
