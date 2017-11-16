<?php

namespace Iqu\HasOffersAPIClient\Controllers;

use Iqu\HasOffersAPIClient\HasOffersConstants;

class VatRateController extends BaseController
{
    public function __construct($networkToken, $networkId, $client)
    {
        parent::__construct($networkToken, $networkId, $client);
    }

    /**
     * Create Vat Rate with data properties.
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
        return $this->sendPostRequest(HasOffersConstants::TARGET_VAT_RATE, HasOffersConstants::METHOD_CREATE,
            $postFields);
    }

    /**
     * Delete Vat Rate by Vat Rate ID.
     *
     * @param $id
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function delete($id)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_VAT_RATE, HasOffersConstants::METHOD_DELETE,
            $postFields);
    }

    /**
     * Find Offer Pixels.
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
    )
    {
        return parent::findAllByTarget(HasOffersConstants::TARGET_VAT_RATE, $filters, $sort, $fields, $contain, $limit, $page);
    }

    /**
     * Find Vat Rate by Vat Rate ID.
     *
     * @param $id
     * @param array $fields
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findById($id, array $fields = array())
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::URL_PARAM_FIELDS => $fields
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_VAT_RATE, HasOffersConstants::METHOD_FIND_BY_ID,
            $arguments);
    }

    /**
     * Update Vat Rate with data properties by Vat Rate ID.
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
        return $this->sendPostRequest(HasOffersConstants::TARGET_VAT_RATE, HasOffersConstants::METHOD_UPDATE,
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
        return $this->sendPostRequest(HasOffersConstants::TARGET_VAT_RATE, HasOffersConstants::METHOD_UPDATE_FIELD,
            $postFields);
    }
}