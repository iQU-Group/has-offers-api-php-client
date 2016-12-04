<?php

namespace Iqu\HasOffersAPIClient\Models;

class Advertiser
{
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
        $limit = '',
        $page = 1,
        array $fields = array(),
        $contain = array()
    ) {

    }

    public function findAllByIds(array $ids, array $fields = array(), $contain = array())
    {

    }

    public function findAllIds()
    {

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

    public function getSignupQuestions($status = '')
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