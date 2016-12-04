<?php

namespace Iqu\HasOffersAPIClient\Controllers;

class AffiliateController extends BaseController
{
    public function __construct($networkToken, $networkId)
    {
        parent::__construct($networkToken, $networkId);
    }

    public function addAccountNote($id, $note)
    {

    }

    public function adjustAffiliateClicks($datetime, $affiliateId, $action, $quantity, $offerId, $goalId)
    {

    }

    public function block($id)
    {

    }

    public function create($data)
    {

    }

    public function createSignupQuestion($data)
    {

    }

    public function createSignupQuestionAnswer($id, $data)
    {

    }

    public function disableFraudAlert($fraudAlertId)
    {

    }

    public function enableFraudAlert($fraudAlertId)
    {

    }

    public function findAll(
        $filters = array(),
        $sort = array(),
        $limit = self::DEFAULT_LIMIT,
        $page = self::DEFAULT_PAGE_NUMBER,
        array $fields = array(),
        array $contain = array()
    ) {

    }

    public function findAllByIds(array $ids, array $fields = array(), array $contain = array())
    {

    }

    public function findAllFraudAlerts(
        $filters = array(),
        $sort = array(),
        $limit = self::DEFAULT_LIMIT,
        $page = self::DEFAULT_PAGE_NUMBER,
        array $fields = array(),
        array $contain = array()
    ) {

    }

    public function findAllIds($filters = array(), $limit = self::DEFAULT_LIMIT, $page = self::DEFAULT_PAGE_NUMBER)
    {

    }

    public function findAllIdsByAccountManagerId($employeeId)
    {

    }

    public function findAllPendingUnassignedAffiliateIds($managerId = null)
    {

    }

    public function findAllPendingUnassignedAffiliates($managerId = null)
    {

    }

    public function findById($id, array $fields = array(), $contain = array())
    {

    }

    public function findList(array $filters = array())
    {

    }

    public function getAccountManager($id)
    {

    }

    public function getAccountNotes($id)
    {

    }

    public function getAffiliateTier($id)
    {

    }

    public function getApprovedOfferIds($id)
    {

    }

    public function getBlockedOfferIds($id)
    {

    }

    public function getBlockedReasons($id)
    {

    }

    public function getCreatorUser($id)
    {

    }

    public function getOfferConversionCaps($id)
    {

    }

    public function getOfferHostnames($id, $status = self::DEFAULT_STATUS)
    {

    }

    public function getOfferPayouts($id)
    {

    }

    public function getOfferPayoutsAll()
    {

    }

    public function getOfferPixels($id, $status = self::DEFAULT_STATUS)
    {

    }

    public function getOwnersAffiliateAccountId()
    {

    }

    public function getPaymentMethods($id)
    {

    }

    public function getReferralAffiliateIds($id)
    {

    }

    public function getReferralCommission($id)
    {

    }

    public function getReferringAffiliate($id)
    {

    }

    public function getSignupAnswers($id)
    {

    }

    public function getSignupQuestions($status = self::DEFAULT_STATUS)
    {

    }

    public function getUnapprovedOfferIds($id)
    {

    }

    public function getUnblockedOfferIds($id)
    {

    }

    public function removeCustomReferralCommission($id)
    {

    }

    public function setCustomReferralCommission($id, $data)
    {

    }

    public function signup($account, $user = null, $meta = null, $returnObject = true)
    {

    }

    public function simpleSearch(
        $filters = array(),
        $sort = array(),
        $limit = self::DEFAULT_LIMIT,
        $page = self::DEFAULT_PAGE_NUMBER,
        array $fields = array()
    ) {

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