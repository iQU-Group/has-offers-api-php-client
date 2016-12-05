<?php

namespace Iqu\HasOffersAPIClient;

/**
 * Abstract class containing constants.
 *
 * @package Iqu\HasOffersAPIClient
 */
abstract class HasOffersConstants
{
    const BASE_API_URL = 'https://api.hasoffers.com/Apiv3/json';

    const DEFAULT_CURRENCY = "EUR";

    const DEFAULT_LIMIT = 0;
    const DEFAULT_PAGE_NUMBER = 1;
    const DEFAULT_STATUS = '';

    const URL_PARAM_CONTAIN = "contain";
    const URL_PARAM_FIELDS = "fields";
    const URL_PARAM_FILTERS = "filters";
    const URL_PARAM_LIMIT = "limit";
    const URL_PARAM_METHOD = "Method";
    const URL_PARAM_PAGE = "page";
    const URL_PARAM_SORT = "sort";
    const URL_PARAM_TARGET = "Target";

    const LITERAL_ACTIONS = "actions";
    const LITERAL_ADVERTISER_IDS = "advertiser_ids";
    const LITERAL_AMOUNT = "amount";
    const LITERAL_COMPANY = "company";
    const LITERAL_CONTAIN = "contain";
    const LITERAL_COUNTRY = "country";
    const LITERAL_CURRENCY = "currency";
    const LITERAL_DATA = "data";
    const LITERAL_EMPLOYEE_ID = "employee_id";
    const LITERAL_END_DATE = "end_date";
    const LITERAL_FIELD = "field";
    const LITERAL_FIELDS = "fields";
    const LITERAL_FILTERS = 'filters';
    const LITERAL_ID = "id";
    const LITERAL_IDS = "ids";
    const LITERAL_INVOICE_ID = "invoice_id";
    const LITERAL_IS_PAID = "is_paid";
    const LITERAL_MANAGER_ID = "manager_id";
    const LITERAL_MEMO = "memo";
    const LITERAL_NAME = "name";
    const LITERAL_NETWORK_ID = "NetworkId";
    const LITERAL_NETWORK_TOKEN = "NetworkToken";
    const LITERAL_OFFER_ID = "offer_id";
    const LITERAL_PAYOUT_TYPE = "payout_type";
    const LITERAL_SORT = 'sort';
    const LITERAL_START_DATE = "start_date";
    const LITERAL_STATUS = "status";
    const LITERAL_TYPE = "type";
    const LITERAL_VALUE = "value";
    const LITERAL_VAT_CODE = "vat_code";
    const LITERAL_VAT_ID = "vat_id";
    const LITERAL_VAT_NAME = "vat_name";
    const LITERAL_VAT_RATE = "vat_rate";

    const TARGET_ACCOUNT_MANAGER = "AccountManager";
    const TARGET_ADVERTISER = "Advertiser";
    const TARGET_ADVERTISER_BILLING = "AdvertiserBilling";
    const TARGET_ADVERTISER_USER = "AdvertiserUser";
    const TARGET_AFFILIATE = "Affiliate";
    const TARGET_AFFILIATE_BILLING = "AffiliateBilling";
    const TARGET_AFFILIATE_USER = "AffiliateUser";
    const TARGET_APPLICATION = "Application";
    const TARGET_OFFER = "Offer";
    const TARGET_EMPLOYEE = "Employee";

    const METHOD_ADD_INVOICE_ITEM = "addInvoiceItem";
    const METHOD_CREATE_INVOICE = "createInvoice";
    const METHOD_FIND_ALL = "findAll";
    const METHOD_FIND_ALL_BY_IDS = "findAllByIds";
    const METHOD_FIND_ALL_COUNTRIES = "findAllCountries";
    const METHOD_FIND_ALL_IDS = "findAllIds";
    const METHOD_FIND_ALL_PENDING_UNASSIGNED_ADVERTISERS = "findAllPendingUnassignedAdvertisers";
    const METHOD_FIND_ALL_PENDING_UNASSIGNED_ADVERTISER_IDS = "findAllPendingUnassignedAdvertiserIds";
    const METHOD_FIND_ALL_IDS_BY_ACCOUNT_MANAGER_ID = "findAllIdsByAccountManagerId";
    const METHOD_FIND_BY_ID = "findById";
    const METHOD_FIND_INVOICE_STATS = "findInvoiceStats";
    const METHOD_GET_ACCOUNT_BALANCE = "getAccountBalance";
    const METHOD_GET_ACCOUNT_MANAGER = "getAccountManager";
    const METHOD_GET_ACCOUNT_NOTES = "getAccountNotes";
    const METHOD_GET_BLOCKED_AFFILIATE_IDS = "getBlockedAffiliateIds";
    const METHOD_GET_BLOCKED_REASONS = "getBlockedReasons";
    const METHOD_GET_CREATOR_USER = "getCreatorUser";
    const METHOD_GET_OWNER_ADVERTISER_ACCOUNT_ID = "getOwnersAdvertiserAccountId";
    const METHOD_GET_OVERVIEW = "getOverview";
    const METHOD_GET_PAYMENT_METHODS = "getPaymentMethods";
    const METHOD_GET_SIGNUP_ANSWERS = "getSignupAnswers";
    const METHOD_GET_SIGNUP_QUESTIONS = "getSignupQuestions";
    const METHOD_GET_TARGET_COUNTRIES = "getTargetCountries";
    const METHOD_GET_UNBLOCKED_AFFILIATE_IDS = "getUnblockedAffiliateIds";
    const METHOD_FIND_ALL_ADVERTISER_MANAGERS = "findAllAdvertiserManagers";
    const METHOD_FIND_ALL_AFFILIATE_MANAGERS = "findAllAffiliateManagers";
    const METHOD_UPDATE_INVOICE_FIELD = "updateInvoiceField";

    const PAYOUT_TYPE_AMOUNT = "amount";
    const CPA_FLAT = "cpa_flat";
    const PAYOUT_TYPE_CPA_BOTH = "cpa_both";
    const PAYOUT_TYPE_CPA_FLAT = "cpa_flat";
    const PAYOUT_TYPE_CPA_PERCENTAGE = "cpa_percentage";
    const PAYOUT_TYPE_CPC = "cpc";
    const PAYOUT_TYPE_CPM = "cpm";

    const DATE_FORMAT = "Ymd";
    const IS_NOT_PAID = 0;
    const STATUS_ACTIVE = "active";
    const STATUS_DELETED = "deleted";
    const STATUS_PAUSED = "paused";

    const VAT_ID_NL = 1;
    const VAT_ID_EU = 2;

    const TYPE_STATS = "stats";
    const TYPE_ADJUSTMENT = "adjustment";
    const TYPE_VAT = "vat";
}