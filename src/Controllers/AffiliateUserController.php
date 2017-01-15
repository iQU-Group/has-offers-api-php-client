<?php

namespace Iqu\HasOffersAPIClient\Controllers;

use Iqu\HasOffersAPIClient\HasOffersConstants;

class AffiliateUserController extends BaseController
{
    /**
     * Check if a password matches that of an Affiliate User account.
     *
     * @param $id
     * @param $password
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function checkPassword($id, $password)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_PASSWORD => $password
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE_USER,
            HasOffersConstants::METHOD_CHECK_PASSWORD, $arguments);
    }

    /**
     * Create an Affiliate User.
     *
     * @param array $data
     * @param bool $returnObject
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function create(array $data, $returnObject = true)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_DATA => $data,
            HasOffersConstants::LITERAL_RETURN_OBJECT => $returnObject
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE_USER, HasOffersConstants::METHOD_CREATE,
            $postFields);
    }

    /**
     * Find Affiliate Users.
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
        $arguments = array(
            HasOffersConstants::URL_PARAM_FILTERS => $filters,
            HasOffersConstants::URL_PARAM_SORT => $sort,
            HasOffersConstants::URL_PARAM_FIELDS => $fields,
            HasOffersConstants::URL_PARAM_CONTAIN => $contain,
            HasOffersConstants::URL_PARAM_LIMIT => $limit,
            HasOffersConstants::URL_PARAM_PAGE => $page
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE_USER, HasOffersConstants::METHOD_FIND_ALL,
            $arguments);
    }

    /**
     * Find one or more Affiliate Users by their IDs.
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
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE_USER,
            HasOffersConstants::METHOD_FIND_ALL_BY_IDS, $arguments);
    }

    /**
     * Get a list of all Affiliate User IDs.
     *
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findAllIds()
    {
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE_USER,
            HasOffersConstants::METHOD_FIND_ALL_IDS);
    }

    /**
     * Get a list of all Affiliate User IDs in a specific Affiliate account.
     *
     * @param $affiliateId
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findAllIdsByAffiliateId($affiliateId)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_AFFILIATE_ID => $affiliateId
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE_USER,
            HasOffersConstants::METHOD_FIND_ALL_IDS_BY_AFFILIATE_ID, $arguments);
    }

    /**
     * Retrieve an Affiliate User.
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
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE_USER, HasOffersConstants::METHOD_FIND_BY_ID,
            $arguments);
    }

    /**
     * Grants a permission to an Affiliate User.
     *
     * @param $id
     * @param $permission
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function grantAccess($id, $permission)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_PERMISSION => $permission
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE_USER,
            HasOffersConstants::METHOD_GRANT_ACCESS, $postFields);
    }

    /**
     * Revokes a permission from an Affiliate User.
     *
     * @param $id
     * @param $permission
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function removeAccess($id, $permission)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_PERMISSION => $permission
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE_USER,
            HasOffersConstants::METHOD_REMOVE_ACCESS, $postFields);
    }

    /**
     * Resets an Affiliate User password to a new, randomly generated password.
     *
     * @param $id
     * @param string $length
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function resetPassword($id, $length = '')
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_LENGTH => $length
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE_USER,
            HasOffersConstants::METHOD_RESET_PASSWORD, $postFields);
    }

    /**
     * Checks if any Affiliate Users in the Network have a specific email address.
     *
     * @param $email
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function uniqueEmail($email)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_EMAIL => $email
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE_USER,
            HasOffersConstants::METHOD_UNIQUE_EMAIL, $arguments);
    }

    /**
     * Update an Affiliate User.
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
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE_USER, HasOffersConstants::METHOD_UPDATE,
            $postFields);
    }

    /**
     * Update one field of an Affiliate User.
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
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE_USER,
            HasOffersConstants::METHOD_UPDATE_FIELD, $postFields);
    }
}
