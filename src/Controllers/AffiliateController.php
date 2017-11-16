<?php

namespace Iqu\HasOffersAPIClient\Controllers;

use Iqu\HasOffersAPIClient\HasOffersConstants;

class AffiliateController extends BaseController
{
    public function __construct($networkToken, $networkId, $client)
    {
        parent::__construct($networkToken, $networkId, $client);
    }

    /**
     * Add an AccountNote for an Affiliate.
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
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE, HasOffersConstants::METHOD_ADD_ACCOUNT_NOTE,
            $postFields);
    }

    /**
     * Adjust affiliate clicks.
     *
     * @param $datetime
     * @param $affiliateId
     * @param $action
     * @param $quantity
     * @param $offerId
     * @param string $goalId
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
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

    /**
     * Block an Affiliate. Sets Affiliate status to 'blocked'.
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
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE, HasOffersConstants::METHOD_BLOCK,
            $postFields);
    }

    /**
     * Create an Affiliate account.
     *
     * @param $data
     * @param bool $returnObject
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function create(array $data, $returnObject = true)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_DATA => $data,
            HasOffersConstants::LITERAL_RETURN_OBJECT => $returnObject
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE, HasOffersConstants::METHOD_CREATE,
            $postFields);
    }

    /**
     * Create an Affiliate Signup Question.
     *
     * @param array $data
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function createSignupQuestion(array $data)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_DATA => $data
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_CREATE_SIGNUP_QUESTION, $postFields);
    }

    /**
     * Create an Affiliate Signup Answer for an existing Signup Question.
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
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_CREATE_SIGNUP_QUESTION_ANSWER, $postFields);
    }

    /**
     * Disables an Affiliate Fraud Alert.
     *
     * @param $fraudAlertId
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function disableFraudAlert($fraudAlertId)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_FRAUD_ALERT_ID => $fraudAlertId
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_DISABLE_FRAUD_ALERT, $postFields);
    }

    /**
     * Enables an Affiliate Fraud Alert.
     *
     * @param $fraudAlertId
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function enableFraudAlert($fraudAlertId)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_FRAUD_ALERT_ID => $fraudAlertId
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_ENABLE_FRAUD_ALERT, $postFields);
    }

    /**
     * Find Affiliates.
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
        return parent::findAllByTarget(HasOffersConstants::TARGET_AFFILIATE, $filters, $sort, $fields, $contain, $limit, $page);
    }

    /**
     * Find one or more Affiliates by their IDs.
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
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE, HasOffersConstants::METHOD_FIND_ALL_BY_IDS,
            $arguments);
    }

    /**
     * Find Affiliate Fraud Alerts.
     * This method is only of use for Networks that have either the Activity Fraud ("affiliate_fraud_activity") or Profile Fraud ("affiliate_fraud_profile") Preferences enabled.
     *
     * @param array $filters
     * @param array $sort
     * @param array $fields
     * @param array $contain
     * @param string $page
     * @param string $limit
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
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

    /**
     * Find a list of Affiliates IDs.
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
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE, HasOffersConstants::METHOD_FIND_ALL_IDS,
            $arguments);
    }

    /**
     * Find all Affiliate IDs reporting to a specific Account Manager.
     *
     * @param $employeeId
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findAllIdsByAccountManagerId($employeeId)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_EMPLOYEE_ID => $employeeId
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_FIND_ALL_IDS_BY_ACCOUNT_MANAGER_ID, $arguments);
    }

    /**
     * Find all Affiliates IDs who have a status of pending or lack an Account Manager.
     *
     * @param string $managerId
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findAllPendingUnassignedAffiliateIds($managerId = '')
    {
        $arguments = array();
        if ($managerId) {
            $arguments[HasOffersConstants::LITERAL_MANAGER_ID] = $managerId;
        }
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_FIND_ALL_PENDING_UNASSIGNED_AFFILIATE_IDS, $arguments);
    }

    /**
     * Find all Affiliates who have a status of pending or lack an Account Manager.
     *
     * @param string $employeeId
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findAllPendingUnassignedAffiliates($employeeId = '')
    {
        $arguments = array();
        if ($employeeId) {
            $arguments[HasOffersConstants::LITERAL_EMPLOYEE_ID] = $employeeId;
        }
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER,
            HasOffersConstants::METHOD_FIND_ALL_PENDING_UNASSIGNED_AFFILIATES, $arguments);
    }

    /**
     * Retrieve an Affiliate by ID.
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
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE, HasOffersConstants::METHOD_FIND_BY_ID,
            $arguments);
    }

    /**
     * Find list of affiliates matching filter.
     *
     * @param array $filters
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findList(array $filters = array())
    {
        $arguments = array(
            HasOffersConstants::URL_PARAM_FILTERS => $filters,
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE, HasOffersConstants::METHOD_FIND_LIST,
            $arguments);
    }

    /**
     * Retrieve the Account Manager (employee) for a specific Affiliate.
     *
     * @param $id
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getAccountManager($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_ACCOUNT_MANAGER, $arguments);
    }

    /**
     * Retrieve all AccountNotes for an Affiliate.
     *
     * @param $id
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getAccountNotes($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_ACCOUNT_NOTES, $arguments);
    }

    /**
     * Retrieve the Affiliate Tier that an Affiliate belongs to.
     *
     * @param $id
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getAffiliateTier($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_AFFILIATE_TIER, $arguments);
    }

    /**
     * Returns a list of all Offer IDs that a specific Affiliate is allowed to run.
     *
     * @param $id
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getApprovedOfferIds($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_APPROVED_OFFER_IDS, $arguments);
    }

    /**
     * Get a list of Offer IDs for which the specified Affiliate account has been blocked at the Offer-level or by the Advertiser.
     *
     * @param $id
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getBlockedOfferIds($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_BLOCKED_OFFER_IDS, $arguments);
    }

    /**
     * Get a list of the reason(s) why an Affiliate was blocked.
     *
     * @param $id
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getBlockedReasons($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_BLOCKED_REASONS, $arguments);
    }

    /**
     * Gets the original/creator Affiliate User for an Affiliate account.
     *
     * @param $id
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getCreatorUser($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_CREATOR_USER, $arguments);
    }

    /**
     * Get any Offer Conversion Caps for an Affiliate.
     *
     * @param $id
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getOfferConversionCaps($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_OFFER_CONVERSION_CAPS, $arguments);
    }

    /**
     * Get a list of AffiliateOffers for an Affiliate, accompanied by the Hostname for each.
     *
     * @param $id
     * @param string $status
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getOfferHostnames($id, $status = HasOffersConstants::DEFAULT_STATUS)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_STATUS => $status
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_OFFER_HOSTNAMES, $arguments);
    }

    /**
     * Gets any Offer Payouts defined for a specific Affiliate.
     *
     * @param $id
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getOfferPayouts($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_OFFER_PAYOUTS, $arguments);
    }

    /**
     * Get all Affiliate-specific Offer Payouts.
     *
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getOfferPayoutsAll()
    {
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_OFFER_PAYOUTS_ALL);
    }

    /**
     * Get Offer Pixels for an Affiliate.
     *
     * @param $id
     * @param string $status
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getOfferPixels($id, $status = HasOffersConstants::DEFAULT_STATUS)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_STATUS => $status
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_OFFER_PIXELS, $arguments);
    }

    /**
     * Get the first (lowest numeric) Affiliate ID in the Network.
     * This ID should always be the brand creator's Affiliate account.
     *
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getOwnersAffiliateAccountId()
    {
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_OWNERS_AFFILIATE_ACCOUNT_ID);
    }

    /**
     * Retrieve the PaymentMethods defined for an Affiliate.
     *
     * @param $id
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getPaymentMethods($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_PAYMENT_METHODS, $arguments);
    }

    /**
     * Get a list of all Affiliate IDs whose accounts were referred by a specific Affiliate.
     *
     * @param $id
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getReferralAffiliateIds($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_REFERRAL_AFFILIATE_IDS, $arguments);
    }

    /**
     * Get the Affiliate Referral Commissions earned for an Affiliate.
     * If no custom Affiliate Referral Commission amount/rate is specified for the Affiliate, the amounts for each commission are determined by the "default_commission_field", "default_commission_type", and "default_commission_rate" Preferences.
     *
     * @param $id
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getReferralCommission($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_REFERRAL_COMMISSION, $arguments);
    }

    /**
     * Get the ID of the Affiliate who referred a specific Affiliate.
     *
     * @param $id
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getReferringAffiliate($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_REFERRING_AFFILIATE, $arguments);
    }

    /**
     * Get the Affiliate Signup Answers provided by a specific Affiliate.
     *
     * @param $id
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getSignupAnswers($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_SIGNUP_ANSWERS, $arguments);
    }

    /**
     * Get all Affiliate Signup Questions, optionally limiting the results to those having a specific status.
     *
     * @param string $status
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getSignupQuestions($status = HasOffersConstants::DEFAULT_STATUS)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_STATUS => $status
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_SIGNUP_QUESTIONS, $arguments);
    }

    /**
     * Get a list of Offer IDs that either are private or require manual approval, for which the specified Affiliate has not been granted access.
     *
     * @param $id
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getUnapprovedOfferIds($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_UNAPPROVED_OFFER_IDS, $arguments);
    }

    /**
     * Get a list of all Offer IDs for which the specified Affiliate has not been blocked at the Offer-level.
     *
     * @param $id
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getUnblockedOfferIds($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_GET_UNBLOCKED_OFFER_IDS, $arguments);
    }

    /**
     * Delete a custom Affiliate Referral Commission rate/amount setting for an Affiliate.
     * This will cause the Affiliate account to revert back to the default commission rate/amount for the Brand.
     *
     * @param $id
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function removeCustomReferralCommission($id)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_REMOVE_CUSTOM_REFERRAL_COMMISSION, $postFields);
    }

    /**
     * Set the custom Affiliate Referral Commission amounts/rates for an Affiliate.
     * Setting a custom rate for an Affiliate will override the default commission amounts for that account.
     *
     * @param $id
     * @param array $data
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function setCustomReferralCommission($id, array $data)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_DATA => $data
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_REMOVE_CUSTOM_REFERRAL_COMMISSION, $postFields);
    }

    /**
     * Sign up for an Affiliate by executing the following steps: - Validate affiliate account attribute.
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
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE, HasOffersConstants::METHOD_SIGNUP,
            $postFields);
    }

    /**
     * Paginated search against the affiliates table directly with no contains, virtual properties attached to the response, etc.
     *
     * @param array $filters
     * @param array $sort
     * @param array $fields
     * @param string $limit
     * @param string $page
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
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

    /**
     * Update an Affiliate account.
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
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE, HasOffersConstants::METHOD_UPDATE,
            $postFields);
    }

    /**
     * Update the text of an AccountNote.
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
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_UPDATE_ACCOUNT_NOTE, $postFields);
    }

    /**
     * Update an Affiliate account by its referral ID (rather than Affiliate ID).
     *
     * @param $refId
     * @param array $data
     * @param bool $returnObject
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function updateByRefId($refId, array $data, $returnObject = true)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_REF_ID => $refId,
            HasOffersConstants::LITERAL_DATA => $data,
            HasOffersConstants::LITERAL_RETURN_OBJECT => $returnObject
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE, HasOffersConstants::METHOD_UPDATE_BY_REF_ID,
            $postFields);
    }

    /**
     * Updated one field of an Affiliate account.
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
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE, HasOffersConstants::METHOD_UPDATE_FIELD,
            $postFields);
    }

    /**
     * Update Payment method 'check' for an Affiliate.
     *
     * @param $affiliateId
     * @param array $data
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function updatePaymentMethodCheck($affiliateId, array $data)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_AFFILIATE_ID => $affiliateId,
            HasOffersConstants::LITERAL_DATA => $data
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_UPDATE_PAYMENT_METHOD_CHECK, $postFields);
    }

    /**
     * Update Payment method 'direct deposit' for an Affiliate.
     *
     * @param $affiliateId
     * @param array $data
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function updatePaymentMethodDirectDeposit($affiliateId, array $data)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_AFFILIATE_ID => $affiliateId,
            HasOffersConstants::LITERAL_DATA => $data
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_UPDATE_PAYMENT_METHOD_DIRECT_DEPOSIT, $postFields);
    }

    /**
     * Update 'other' payment method for an Affiliate.
     *
     * @param $affiliateId
     * @param array $data
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function updatePaymentMethodOther($affiliateId, array $data)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_AFFILIATE_ID => $affiliateId,
            HasOffersConstants::LITERAL_DATA => $data
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_UPDATE_PAYMENT_METHOD_OTHER, $postFields);
    }

    /**
     * Update Payment method 'pay quicker' for an Affiliate.
     *
     * @param $affiliateId
     * @param array $data
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function updatePaymentMethodPayQuicker($affiliateId, array $data)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_AFFILIATE_ID => $affiliateId,
            HasOffersConstants::LITERAL_DATA => $data
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_UPDATE_PAYMENT_METHOD_PAY_QUICKER, $postFields);
    }

    /**
     * Update Payment method 'payoneer' for an Affiliate.
     *
     * @param $affiliateId
     * @param array $data
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function updatePaymentMethodPayoneer($affiliateId, array $data)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_AFFILIATE_ID => $affiliateId,
            HasOffersConstants::LITERAL_DATA => $data
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_UPDATE_PAYMENT_METHOD_PAYONEER, $postFields);
    }

    /**
     * Update Payment method 'paypal' for an Affiliate.
     *
     * @param $affiliateId
     * @param array $data
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function updatePaymentMethodPaypal($affiliateId, array $data)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_AFFILIATE_ID => $affiliateId,
            HasOffersConstants::LITERAL_DATA => $data
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_UPDATE_PAYMENT_METHOD_PAYPAL, $postFields);
    }

    /**
     * Update Payment method 'wire' for an Affiliate.
     *
     * @param $affiliateId
     * @param array $data
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function updatePaymentMethodWire($affiliateId, array $data)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_AFFILIATE_ID => $affiliateId,
            HasOffersConstants::LITERAL_DATA => $data
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_UPDATE_PAYMENT_METHOD_WIRE, $postFields);
    }

    /**
     * Update an Affiliate Signup Question.
     *
     * @param $questionId
     * @param $data
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function updateSignupQuestion($questionId, $data)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_QUESTION_ID => $questionId,
            HasOffersConstants::LITERAL_DATA => $data
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_UPDATE_SIGNUP_QUESTION, $postFields);
    }

    /**
     * Update an Affiliate Signup Answer.
     *
     * @param $answerId
     * @param $data
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function updateSignupQuestionAnswer($answerId, $data)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ANSWER_ID => $answerId,
            HasOffersConstants::LITERAL_DATA => $data
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE,
            HasOffersConstants::METHOD_UPDATE_SIGNUP_QUESTION_ANSWER, $postFields);
    }
}
