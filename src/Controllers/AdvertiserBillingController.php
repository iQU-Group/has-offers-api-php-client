<?php

namespace Iqu\HasOffersAPIClient\Controllers;

use Iqu\HasOffersAPIClient\HasOffersConstants;

class AdvertiserBillingController extends BaseController
{
    /**
     * Create an Advertiser Invoice Item for an existing Advertiser Invoice.
     *
     * @param $invoiceId
     * @param array $data
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function addInvoiceItem($invoiceId, array $data)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_INVOICE_ID => $invoiceId,
            HasOffersConstants::LITERAL_DATA => $data
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_ADVERTISER_BILLING,
            HasOffersConstants::METHOD_ADD_INVOICE_ITEM, $postFields);
    }

    /**
     * Create an Advertiser Invoice.
     *
     * @param array $data
     * @param bool $returnObject
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function createInvoice(array $data, $returnObject = true)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_DATA => $data,
            HasOffersConstants::LITERAL_RETURN_OBJECT => $returnObject
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_ADVERTISER_BILLING,
            HasOffersConstants::METHOD_CREATE_INVOICE, $postFields);
    }

    /**
     * Find Advertiser Billing Invoices.
     *
     * @param array $filters
     * @param array $sort
     * @param array $fields
     * @param array $contain
     * @param string $limit
     * @param string $page
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findAllInvoices(
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
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER_BILLING,
            HasOffersConstants::METHOD_FIND_ALL_INVOICES, $arguments);
    }

    /**
     * Find one or more Advertiser Invoices by their IDs
     *
     * @param array $ids
     * @param array $fields
     * @param array $contain
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findAllInvoicesByIds(array $ids, array $fields = array(), $contain = array())
    {
        $arguments = array(
            HasOffersConstants::LITERAL_IDS => $ids,
            HasOffersConstants::URL_PARAM_FIELDS => $fields,
            HasOffersConstants::URL_PARAM_CONTAIN => $contain
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER_BILLING,
            HasOffersConstants::METHOD_FIND_ALL_INVOICES_BY_IDS, $arguments);
    }

    /**
     * Retrieve an Advertiser Invoice.
     *
     * @param $id
     * @param array $fields
     * @param array $contain
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findInvoiceById($id, array $fields = array(), $contain = array())
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::URL_PARAM_FIELDS => $fields,
            HasOffersConstants::URL_PARAM_CONTAIN => $contain
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER_BILLING,
            HasOffersConstants::METHOD_FIND_INVOICE_BY_ID, $arguments);
    }

    /**
     * Find Advertiser Invoice stats for an Advertiser ID for a specific date range and currency.
     *
     * @param $advertiserId
     * @param $endDate
     * @param string $startDate
     * @param string $currency
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findInvoiceStats($advertiserId, $endDate, $startDate = '', $currency = '')
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ADVERTISER_ID => $advertiserId,
            HasOffersConstants::LITERAL_END_DATE => $endDate,
            HasOffersConstants::LITERAL_START_DATE => $startDate,
            HasOffersConstants::LITERAL_CURRENCY => $currency
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER_BILLING,
            HasOffersConstants::METHOD_FIND_INVOICE_STATS, $arguments);
    }

    /**
     * Get the next Advertiser Invoice start date for a specific Advertiser and Currency.
     *
     * @param $advertiserId
     * @param $currency
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getNextStartDate($advertiserId, $currency)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ADVERTISER_ID => $advertiserId,
            HasOffersConstants::LITERAL_CURRENCY => $currency
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_ADVERTISER_BILLING,
            HasOffersConstants::METHOD_GET_NEXT_START_DATE, $arguments);
    }

    /**
     * Delete Advertiser Invoice Item.
     *
     * @param $id
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function removeInvoiceItem($id)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_ADVERTISER_BILLING,
            HasOffersConstants::METHOD_REMOVE_INVOICE_ITEM, $postFields);
    }

    /**
     * Update an Advertiser Invoice.
     *
     * @param $id
     * @param array $data
     * @param bool $returnObject
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function updateInvoice($id, array $data, $returnObject = true)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_DATA => $data,
            HasOffersConstants::LITERAL_RETURN_OBJECT => $returnObject
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_ADVERTISER_BILLING,
            HasOffersConstants::METHOD_UPDATE_INVOICE, $postFields);
    }

    /**
     * Update one field of an Advertiser Invoice.
     *
     * @param $id
     * @param $field
     * @param $value
     * @param bool $returnObject
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function updateInvoiceField($id, $field, $value, $returnObject = true)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_FIELD => $field,
            HasOffersConstants::LITERAL_VALUE => $value,
            HasOffersConstants::LITERAL_RETURN_OBJECT => $returnObject
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_ADVERTISER_BILLING,
            HasOffersConstants::METHOD_UPDATE_INVOICE_FIELD, $postFields);
    }

    /**
     * Update tax information data by Advertiser ID.
     *
     * @param $id
     * @param array $data
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function updateTaxInfo($id, array $data)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_DATA => $data
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_ADVERTISER_BILLING,
            HasOffersConstants::METHOD_UPDATE_TAX_INFO, $postFields);
    }
}
