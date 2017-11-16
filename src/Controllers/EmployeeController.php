<?php

namespace Iqu\HasOffersAPIClient\Controllers;

use Iqu\HasOffersAPIClient\HasOffersConstants;

class EmployeeController extends BaseController
{
    /**
     * Check if a password matches that of an Employee account.
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
        return $this->sendGetRequest(HasOffersConstants::TARGET_EMPLOYEE,
            HasOffersConstants::METHOD_CHECK_PASSWORD, $arguments);
    }

    /**
     * Create an Employee.
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
        return $this->sendPostRequest(HasOffersConstants::TARGET_EMPLOYEE, HasOffersConstants::METHOD_CREATE,
            $postFields);
    }

    /**
     * Find Employees.
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
        return parent::findAllByTarget(HasOffersConstants::TARGET_EMPLOYEE, $filters, $sort, $fields, $contain, $limit, $page);
    }

    /**
     * Find all Employees who have the Brand.advertiser_management permission.
     * These are all the Employees who have the ability to be Advertiser Account Managers.
     *
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findAllAdvertiserManagers()
    {
        return $this->sendGetRequest(HasOffersConstants::TARGET_EMPLOYEE,
            HasOffersConstants::METHOD_FIND_ALL_ADVERTISER_MANAGERS);
    }

    /**
     * Find all Employees who have the Brand.affiliate_management permission.
     * These are all the Employees who have the ability to be Affiliate Account Managers.
     *
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findAllAffiliateManagers()
    {
        return $this->sendGetRequest(HasOffersConstants::TARGET_EMPLOYEE,
            HasOffersConstants::METHOD_FIND_ALL_AFFILIATE_MANAGERS);
    }

    /**
     * Find one or more Employees by their IDs.
     *
     * @param array $ids
     * @param array $fields
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findAllByIds(array $ids, array $fields = array())
    {
        $arguments = array(
            HasOffersConstants::LITERAL_IDS => $ids,
            HasOffersConstants::LITERAL_FIELDS => $fields
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_EMPLOYEE, HasOffersConstants::METHOD_FIND_ALL_BY_IDS,
            $arguments);
    }

    /**
     * Find all Employee IDs who have a named Permission.
     *
     * @param $name
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findAllByPermission($name)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_NAME => $name
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_EMPLOYEE,
            HasOffersConstants::METHOD_FIND_ALL_BY_PERMISSION, $arguments);
    }

    /**
     * Get a list of all Employee IDs.
     *
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findAllIds()
    {
        return $this->sendGetRequest(HasOffersConstants::TARGET_EMPLOYEE, HasOffersConstants::METHOD_FIND_ALL_IDS);
    }

    /**
     * Find all Employee IDs who have a named Permission.
     *
     * @param $name
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findAllIdsByPermission($name)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_NAME => $name
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_EMPLOYEE,
            HasOffersConstants::METHOD_FIND_ALL_IDS_BY_PERMISSION, $arguments);
    }

    /**
     * Find Brand owner (Employee) information.
     *
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findBrandOwnerInformation()
    {
        return $this->sendGetRequest(HasOffersConstants::TARGET_EMPLOYEE,
            HasOffersConstants::METHOD_FIND_BRAND_OWNER_INFORMATION);
    }

    /**
     * Retrieve an Employee.
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
        return $this->sendGetRequest(HasOffersConstants::TARGET_EMPLOYEE, HasOffersConstants::METHOD_FIND_BY_ID,
            $arguments);
    }

    /**
     * Get Employee Commission for referrals by Employee ID.
     *
     * @param $id
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getCommission($id)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_EMPLOYEE, HasOffersConstants::METHOD_GET_COMMISSION,
            $arguments);
    }

    /**
     * Get the latest HasOffers informational message for an Employee.
     *
     * @param $employeeId
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getHOMessage($employeeId)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_EMPLOYEE_ID => $employeeId
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_EMPLOYEE, HasOffersConstants::METHOD_GET_HO_MESSAGE,
            $arguments);
    }

    /**
     * Grants a permission to an Employee.
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
        return $this->sendPostRequest(HasOffersConstants::TARGET_EMPLOYEE,
            HasOffersConstants::METHOD_GRANT_ACCESS, $postFields);
    }

    /**
     * Revokes a permission from an Employee.
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
        return $this->sendPostRequest(HasOffersConstants::TARGET_EMPLOYEE,
            HasOffersConstants::METHOD_REMOVE_ACCESS, $postFields);
    }

    /**
     * Removes the custom Employee Commission amount/rate for an Employee.
     *
     * @param $id
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function removeCustomCommission($id)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_EMPLOYEE,
            HasOffersConstants::METHOD_REMOVE_CUSTOM_COMMISSION, $postFields);
    }

    /**
     * Resets an Employee password to a new, randomly generated password.
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
        return $this->sendPostRequest(HasOffersConstants::TARGET_EMPLOYEE,
            HasOffersConstants::METHOD_RESET_PASSWORD, $postFields);
    }

    /**
     * Set a custom commission amount/rate for an Employee.
     *
     * @param $id
     * @param array $data
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function setCustomCommission($id, array $data)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_DATA => $data
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_EMPLOYEE,
            HasOffersConstants::METHOD_SET_CUSTOM_COMMISSION, $postFields);
    }

    /**
     * Checks if any Employees in the Network have a specific email address.
     *
     * @param $email
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function uniqueEmail($email)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_EMAIL => $email
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_EMPLOYEE,
            HasOffersConstants::METHOD_UNIQUE_EMAIL, $arguments);
    }

    /**
     * Update an Employee.
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
        return $this->sendPostRequest(HasOffersConstants::TARGET_EMPLOYEE, HasOffersConstants::METHOD_UPDATE,
            $postFields);
    }

    /**
     * Update one field of an Employee.
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
        return $this->sendPostRequest(HasOffersConstants::TARGET_EMPLOYEE,
            HasOffersConstants::METHOD_UPDATE_FIELD, $postFields);
    }
}
