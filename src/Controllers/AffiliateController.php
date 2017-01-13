<?php

namespace Iqu\HasOffersAPIClient\Controllers;

use Iqu\HasOffersAPIClient\HasOffersConstants;

class AffiliateController extends BaseController
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
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE, HasOffersConstants::METHOD_ADD_ACCOUNT_NOTE,
            $postFields);
    }

    public function adjustAffiliateClicks($datetime, $affiliateId, $action, $quantity, $offerId, $goalId = '')
    {
        $postFields = array(
            HasOffersConstants::LITERAL_DATE_TIME => $datetime,
            HasOffersConstants::LITERAL_AFFILIATE_ID => $affiliateId,
            HasOffersConstants::LITERAL_ACTION => $action,
            HasOffersConstants::LITERAL_QUANTITY => $quantity,
            HasOffersConstants::LITERAL_OFFER_ID => $offerId,
            HasOffersConstants::LITERAL_GOAL_ID => $goalId
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_ADJUST_AFFILIATE_CLICKS, $postFields);
    }

    public function block($id, $reason = '')
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_REASON => $reason
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE, HasOffersConstants::METHOD_BLOCK,
            $postFields);
    }

    public function create(array $data, $returnObject = true)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_DATA => $data,
            HasOffersConstants::LITERAL_RETURN_OBJECT => $returnObject
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE, HasOffersConstants::METHOD_CREATE,
            $postFields);
    }

    public function createSignupQuestion(array $data)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_DATA => $data
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_CREATE_SIGNUP_QUESTION, $postFields);
    }

    public function createSignupQuestionAnswer($id, array $data)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_DATA => $data
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_CREATE_SIGNUP_QUESTION_ANSWER, $postFields);
    }

    public function disableFraudAlert($fraudAlertId)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_FRAUD_ALERT_ID => $fraudAlertId
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_DISABLE_FRAUD_ALERT, $postFields);
    }

    public function enableFraudAlert($fraudAlertId)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_FRAUD_ALERT_ID => $fraudAlertId
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_ENABLE_FRAUD_ALERT, $postFields);
    }

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
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE, HasOffersConstants::METHOD_FIND_ALL,
            $arguments);
    }

    public function findAllByIds(array $ids, array $fields = array(), array $contain = array())
    {
        $arguments = array(
            HasOffersConstants::LITERAL_IDS => $ids,
            HasOffersConstants::URL_PARAM_FIELDS => $fields,
            HasOffersConstants::URL_PARAM_CONTAIN => $contain
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE, HasOffersConstants::METHOD_FIND_ALL_BY_IDS,
            $arguments);
    }

    public function findAllFraudAlerts(
        $filters = array(),
        $sort = array(),
        array $fields = array(),
        array $contain = array(),
        $page = HasOffersConstants::DEFAULT_PAGE_NUMBER,
        $limit = HasOffersConstants::DEFAULT_LIMIT
    ) {
        $arguments = array(
            HasOffersConstants::URL_PARAM_FILTERS => $filters,
            HasOffersConstants::LITERAL_SORT => $sort,
            HasOffersConstants::LITERAL_FIELDS => $fields,
            HasOffersConstants::URL_PARAM_CONTAIN => $contain,
            HasOffersConstants::URL_PARAM_PAGE => $page,
            HasOffersConstants::URL_PARAM_LIMIT => $limit
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_FIND_ALL_FRAUD_ALERTS, $arguments);
    }

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
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE, HasOffersConstants::METHOD_FIND_ALL_IDS,
            $arguments);
    }

    public function findAllIdsByAccountManagerId($employeeId)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_EMPLOYEE_ID => $employeeId
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_FIND_ALL_IDS_BY_ACCOUNT_MANAGER_ID, $arguments);
    }

    public function findAllPendingUnassignedAffiliateIds($managerId = '')
    {
        $arguments = array();
        if ($managerId) {
            $arguments[HasOffersConstants::LITERAL_MANAGER_ID] = $managerId;
        }
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_FIND_ALL_PENDING_UNASSIGNED_AFFILIATE_IDS, $arguments);
    }

    public function findAllPendingUnassignedAffiliates($employeeId = '')
    {
        $arguments = array();
        if ($employeeId) {
            $arguments[HasOffersConstants::LITERAL_EMPLOYEE_ID] = $employeeId;
        }
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_FIND_ALL_PENDING_UNASSIGNED_AFFILIATES, $arguments);
    }

    public function findById($id, array $fields = array(), $contain = array())
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::URL_PARAM_FIELDS => $fields,
            HasOffersConstants::URL_PARAM_CONTAIN => $contain
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE, HasOffersConstants::METHOD_FIND_BY_ID,
            $arguments);
    }

    public function findList(array $filters = array())
    {
        $arguments = array(
            HasOffersConstants::URL_PARAM_FILTERS => $filters,
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE, HasOffersConstants::METHOD_FIND_LIST,
            $arguments);
    }

    public function getAccountManager($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_ACCOUNT_MANAGER, $arguments);
    }

    public function getAccountNotes($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_ACCOUNT_NOTES, $arguments);
    }

    public function getAffiliateTier($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_AFFILIATE_TIER, $arguments);
    }

    public function getApprovedOfferIds($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_APPROVED_OFFER_IDS, $arguments);
    }

    public function getBlockedOfferIds($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_BLOCKED_OFFER_IDS, $arguments);
    }

    public function getBlockedReasons($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_BLOCKED_REASONS, $arguments);
    }

    public function getCreatorUser($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_CREATOR_USER, $arguments);
    }

    public function getOfferConversionCaps($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_OFFER_CONVERSION_CAPS, $arguments);
    }

    public function getOfferHostnames($id, $status = HasOffersConstants::DEFAULT_STATUS)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_STATUS => $status
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_OFFER_HOSTNAMES, $arguments);
    }

    public function getOfferPayouts($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_OFFER_PAYOUTS, $arguments);
    }

    public function getOfferPayoutsAll()
    {
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_OFFER_PAYOUTS_ALL);
    }

    public function getOfferPixels($id, $status = HasOffersConstants::DEFAULT_STATUS)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_STATUS => $status
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_OFFER_PIXELS, $arguments);
    }

    public function getOwnersAffiliateAccountId()
    {
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_OWNERS_AFFILIATE_ACCOUNT_ID);
    }

    public function getPaymentMethods($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_PAYMENT_METHODS, $arguments);
    }

    public function getReferralAffiliateIds($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_REFERRAL_AFFILIATE_IDS, $arguments);
    }

    public function getReferralCommission($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_REFERRAL_COMMISSION, $arguments);
    }

    public function getReferringAffiliate($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_REFERRING_AFFILIATE, $arguments);
    }

    public function getSignupAnswers($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_SIGNUP_ANSWERS, $arguments);
    }

    public function getSignupQuestions($status = HasOffersConstants::DEFAULT_STATUS)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_STATUS => $status
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_SIGNUP_QUESTIONS, $arguments);
    }

    public function getUnapprovedOfferIds($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_UNAPPROVED_OFFER_IDS, $arguments);
    }

    public function getUnblockedOfferIds($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_UNBLOCKED_OFFER_IDS, $arguments);
    }

    public function removeCustomReferralCommission($id)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_REMOVE_CUSTOM_REFERRAL_COMMISSION, $postFields);
    }

    public function setCustomReferralCommission($id, array $data)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_DATA => $data
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_REMOVE_CUSTOM_REFERRAL_COMMISSION, $postFields);
    }

    public function signup(array $account, array $user = array(), array $meta = array(), $returnObject = true)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ACCOUNT => $account,
            HasOffersConstants::LITERAL_USER => $user,
            HasOffersConstants::LITERAL_META => $meta,
            HasOffersConstants::LITERAL_RETURN_OBJECT => $returnObject
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE, HasOffersConstants::METHOD_SIGNUP,
            $postFields);
    }

    public function simpleSearch(
        $filters = array(),
        $sort = array(),
        array $fields = array(),
        $limit = HasOffersConstants::DEFAULT_LIMIT,
        $page = HasOffersConstants::DEFAULT_PAGE_NUMBER
    ) {
        $arguments = array(
            HasOffersConstants::URL_PARAM_FILTERS => $filters,
            HasOffersConstants::LITERAL_SORT => $sort,
            HasOffersConstants::LITERAL_FIELDS => $fields,
            HasOffersConstants::URL_PARAM_PAGE => $page,
            HasOffersConstants::URL_PARAM_LIMIT => $limit
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE, HasOffersConstants::METHOD_SIMPLE_SEARCH,
            $arguments);
    }

    public function update($id, $data, $returnObject = true)
    {

    }

    public function updateAccountNote($accountNoteId, $note)
    {

    }

    public function updateByRefId($refId, $data)
    {

    }

    public function updateField($id, $field, $value, $returnObject = true)
    {

    }

    public function updatePaymentMethodCheck($affiliateId, $data)
    {

    }

    public function updatePaymentMethodDirectDeposit($affiliateId, $data)
    {

    }

    public function updatePaymentMethodOther($affiliateId, $data)
    {

    }

    public function updatePaymentMethodPayQuicker($affiliateId, $data)
    {

    }

    public function updatePaymentMethodPayoneer($affiliateId, $data)
    {

    }

    public function updatePaymentMethodPaypal($affiliateId, $data)
    {

    }

    public function updatePaymentMethodWire($affiliateId, $data)
    {

    }

    public function updateSignupQuestion($questionId, $data)
    {

    }

    public function updateSignupQuestionAnswer($answerId, $data)
    {

    }
}
