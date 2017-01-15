<?php

namespace Iqu\HasOffersAPIClient\Controllers;

use Iqu\HasOffersAPIClient\HasOffersConstants;

class AffiliateBillingController extends BaseController
{
    /**
     * Add an Affiliate Invoice Item to an Affiliate Invoice.
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
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE_BILLING,
            HasOffersConstants::METHOD_ADD_INVOICE_ITEM, $postFields);
    }

    /**
     * Create an Affiliate Invoice.
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
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE_BILLING,
            HasOffersConstants::METHOD_CREATE_INVOICE, $postFields);
    }

    /**
     * Create an Affiliate Receipt.
     *
     * @param array $data
     * @param bool $returnObject
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function createReceipt(array $data, $returnObject = true)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_DATA => $data,
            HasOffersConstants::LITERAL_RETURN_OBJECT => $returnObject
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE_BILLING,
            HasOffersConstants::METHOD_CREATE_RECEIPT, $postFields);
    }

    /**
     * Find Affiliate Billing Invoices.
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
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE_BILLING,
            HasOffersConstants::METHOD_FIND_ALL_INVOICES, $arguments);
    }

    /**
     * Find one or more Affiliate Invoices by their IDs
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
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE_BILLING,
            HasOffersConstants::METHOD_FIND_ALL_INVOICES_BY_IDS, $arguments);
    }

    /**
     * Find Affiliate Receipts.
     *
     * @param array $filters
     * @param array $sort
     * @param array $fields
     * @param array $contain
     * @param string $limit
     * @param string $page
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findAllReceipts(
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
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE_BILLING,
            HasOffersConstants::METHOD_FIND_ALL_RECEIPTS, $arguments);
    }

    /**
     * Find one or more Affiliate Receipt(s) by their IDs.
     *
     * @param array $ids
     * @param array $fields
     * @param array $contain
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findAllReceiptsByIds(array $ids, array $fields = array(), array $contain = array())
    {
        $arguments = array(
            HasOffersConstants::LITERAL_IDS => $ids,
            HasOffersConstants::URL_PARAM_FIELDS => $fields,
            HasOffersConstants::URL_PARAM_CONTAIN => $contain
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE_BILLING,
            HasOffersConstants::METHOD_FIND_ALL_RECEIPTS_BY_IDS, $arguments);
    }

    /**
     * Retrieve an Affiliate Invoice.
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
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE_BILLING,
            HasOffersConstants::METHOD_FIND_INVOICE_BY_ID, $arguments);
    }

    /**
     * Find Affiliate Invoice stats for an Affiliate ID for a specific date range and currency.
     *
     * @param $affiliateId
     * @param $endDate
     * @param string $startDate
     * @param string $currency
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findInvoiceStats($affiliateId, $endDate, $startDate = '', $currency = '')
    {
        $arguments = array(
            HasOffersConstants::LITERAL_AFFILIATE_ID => $affiliateId,
            HasOffersConstants::LITERAL_END_DATE => $endDate,
            HasOffersConstants::LITERAL_START_DATE => $startDate,
            HasOffersConstants::LITERAL_CURRENCY => $currency
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE_BILLING,
            HasOffersConstants::METHOD_FIND_INVOICE_STATS, $arguments);
    }

    /**
     * Find the most recent Invoice for an Affiliate.
     *
     * @param $affiliateId
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findLastInvoice($affiliateId)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_AFFILIATE_ID => $affiliateId
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE_BILLING,
            HasOffersConstants::METHOD_FIND_LAST_INVOICE, $arguments);
    }

    /**
     * Find the most recent Invoice for an Affiliate.
     *
     * @param $affiliateId
     * @param string $status
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findLastReceipt($affiliateId, $status = '')
    {
        $arguments = array(
            HasOffersConstants::LITERAL_AFFILIATE_ID => $affiliateId,
            HasOffersConstants::LITERAL_STATUS => $status
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE_BILLING,
            HasOffersConstants::METHOD_FIND_LAST_RECEIPT, $arguments);
    }

    /**
     * Find an Affiliate Receipt.
     *
     * @param $id
     * @param array $fields
     * @param array $contain
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findReceiptById($id, array $fields = array(), array $contain = array())
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_FIELDS => $fields,
            HasOffersConstants::LITERAL_CONTAIN => $contain
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE_BILLING,
            HasOffersConstants::METHOD_FIND_RECEIPT_BY_ID, $arguments);
    }

    /**
     * Generate Affiliate Invoices.
     *
     * @param string $date
     * @param string $ignorePreference
     * @param array $advertiserIds
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function generateInvoices($date = '', $ignorePreference = '', array $advertiserIds = array())
    {
        $postFields = array(
            HasOffersConstants::LITERAL_DATE => $date,
            HasOffersConstants::LITERAL_IGNORE_PREFERENCE => $ignorePreference,
            HasOffersConstants::LITERAL_ADVERTISER_IDS => $advertiserIds
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE_BILLING,
            HasOffersConstants::METHOD_GENERATE_INVOICES, $postFields);
    }

    /**
     * Retrieves the Account Balance for an Affiliate.
     *
     * @param $affiliateId
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getAccountBalance($affiliateId)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_AFFILIATE_ID_CAMEL_CASE => $affiliateId
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE_BILLING,
            HasOffersConstants::METHOD_GET_ACCOUNT_BALANCE, $arguments);
    }

    /**
     * Retrieve a listing of all Affiliate Invoices and Affiliate Invoice Receipts for an Affiliate.
     *
     * @param $affiliateId
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getAccountHistory($affiliateId)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_AFFILIATE_ID => $affiliateId
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE_BILLING,
            HasOffersConstants::METHOD_GET_ACCOUNT_HISTORY, $arguments);
    }

    /**
     * Retrieve the next start date for the provided Affiliate's invoices.
     *
     * @param $affiliateId
     * @param string $currency
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getNextStartDate($affiliateId, $currency = '')
    {
        $arguments = array(
            HasOffersConstants::LITERAL_AFFILIATE_ID => $affiliateId,
            HasOffersConstants::LITERAL_CURRENCY => $currency
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE_BILLING,
            HasOffersConstants::METHOD_GET_NEXT_START_DATE, $arguments);
    }

    /**
     * Get outstanding (unpaid, active) Affiliate Invoice amounts.
     *
     * @param array $filters
     * @param string $limit
     * @param string $page
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getOutstandingInvoices(
        array $filters = array(),
        $limit = HasOffersConstants::DEFAULT_LIMIT,
        $page = HasOffersConstants::DEFAULT_PAGE_NUMBER
    ) {
        $arguments = array(
            HasOffersConstants::LITERAL_FILTERS => $filters,
            HasOffersConstants::URL_PARAM_LIMIT => $limit,
            HasOffersConstants::URL_PARAM_PAGE => $page
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE_BILLING,
            HasOffersConstants::METHOD_GET_OUTSTANDING_INVOICES, $arguments);
    }

    /**
     * Get payout totals for an Affiliate for one or more timeframes.
     *
     * @param $affiliateId
     * @param $timeframes
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getPayoutTotals($affiliateId, array $timeframes)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_AFFILIATE_ID => $affiliateId,
            HasOffersConstants::LITERAL_CURRENCY => $timeframes
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_AFFILIATE_BILLING,
            HasOffersConstants::LITERAL_TIMEFRAMES, $arguments);
    }

    /**
     * Deletes an Affiliate Invoice Item from an Affiliate Invoice.
     *
     * @param $id
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function removeInvoiceItem($id)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE_BILLING,
            HasOffersConstants::METHOD_REMOVE_INVOICE_ITEM, $postFields);
    }

    /**
     * Update an Affiliate Invoice.
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
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE_BILLING,
            HasOffersConstants::METHOD_UPDATE_INVOICE, $postFields);
    }

    /**
     * Update one field of an Affiliate Invoice.
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
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE_BILLING,
            HasOffersConstants::METHOD_UPDATE_INVOICE_FIELD, $postFields);
    }

    /**
     * Update an Affiliate Receipt.
     *
     * @param $id
     * @param array $data
     * @param bool $returnObject
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function updateReceipt($id, array $data, $returnObject = true)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_DATA => $data,
            HasOffersConstants::LITERAL_RETURN_OBJECT => $returnObject
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE_BILLING,
            HasOffersConstants::METHOD_UPDATE_RECEIPT, $postFields);
    }

    /**
     * Update one field of an Affiliate Receipt.
     *
     * @param $id
     * @param $field
     * @param $value
     * @param bool $returnObject
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function updateReceiptField($id, $field, $value, $returnObject = true)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_FIELD => $field,
            HasOffersConstants::LITERAL_VALUE => $value,
            HasOffersConstants::LITERAL_RETURN_OBJECT => $returnObject
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE_BILLING,
            HasOffersConstants::METHOD_UPDATE_RECEIPT_FIELD, $postFields);
    }

    /**
     * Update tax information data by Affiliate ID.
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
        return $this->sendPostRequest(HasOffersConstants::TARGET_AFFILIATE_BILLING,
            HasOffersConstants::METHOD_UPDATE_TAX_INFO, $postFields);
    }
}
