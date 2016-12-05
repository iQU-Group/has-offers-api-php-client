<?php

namespace Iqu\HasOffersAPIClient;

/**
 * Abstract class containing constants.
 *
 * @package Iqu\HasOffersAPIClient
 * @author Evangelos Karvounis <evangelos.karvounis@iqu.com>
 */
abstract class HasOffersConstants
{
    const
        DEFAULT_CURRENCY = "EUR",

        URL_PARAM_CONTAIN = "contain",
        URL_PARAM_FIELDS = "fields",
        URL_PARAM_FILTERS = "filters",
        URL_PARAM_LIMIT = "limit",
        URL_PARAM_METHOD = "Method",
        URL_PARAM_PAGE = "page",
        URL_PARAM_SORT = "sort",
        URL_PARAM_TARGET = "Target",

        LITERAL_ACTIONS = "actions",
        LITERAL_AMOUNT = "amount",
        LITERAL_COMPANY = "company",
        LITERAL_CONTAIN = "contain",
        LITERAL_COUNTRY = "country",
        LITERAL_CURRENCY = "currency",
        LITERAL_DATA = "data",
        LITERAL_END_DATE = "end_date",
        LITERAL_FIELD = "field",
        LITERAL_FIELDS = "fields",
        LITERAL_FILTERS = 'filters',
        LITERAL_ID = "id",
        LITERAL_IDS = "ids",
        LITERAL_INVOICE_ID = "invoice_id",
        LITERAL_IS_PAID = "is_paid",
        LITERAL_MEMO = "memo",
        LITERAL_NAME = "name",
        LITERAL_NETWORK_ID = "NetworkId",
        LITERAL_NETWORK_TOKEN = "NetworkToken",
        LITERAL_OFFER_ID = "offer_id",
        LITERAL_PAYOUT_TYPE = "payout_type",
        LITERAL_SORT = 'sort',
        LITERAL_START_DATE = "start_date",
        LITERAL_STATUS = "status",
        LITERAL_TYPE = "type",
        LITERAL_VALUE = "value",
        LITERAL_VAT_CODE = "vat_code",
        LITERAL_VAT_ID = "vat_id",
        LITERAL_VAT_NAME = "vat_name",
        LITERAL_VAT_RATE = "vat_rate",

        TARGET_ACCOUNT_MANAGER = "AccountManager",
        TARGET_ADVERTISER = "Advertiser",
        TARGET_ADVERTISER_BILLING = "AdvertiserBilling",
        TARGET_ADVERTISER_USER = "AdvertiserUser",
        TARGET_AFFILIATE = "Affiliate",
        TARGET_AFFILIATE_BILLING = "AffiliateBilling",
        TARGET_AFFILIATE_USER = "AffiliateUser",
        TARGET_APPLICATION = "Application",
        TARGET_OFFER = "Offer",
        TARGET_EMPLOYEE = "Employee",

        METHOD_ADD_INVOICE_ITEM = "addInvoiceItem",
        METHOD_CREATE_INVOICE = "createInvoice",
        METHOD_FIND_ALL = "findAll",
        METHOD_FIND_ALL_BY_IDS = "findAllByIds",
        METHOD_FIND_ALL_COUNTRIES = "findAllCountries",
        METHOD_FIND_ALL_IDS = "findAllIds",
        METHOD_FIND_BY_ID = "findById",
        METHOD_FIND_INVOICE_STATS = "findInvoiceStats",
        METHOD_GET_PAYMENT_METHODS = "getPaymentMethods",
        METHOD_GET_TARGET_COUNTRIES = "getTargetCountries",
        METHOD_FIND_ALL_ADVERTISER_MANAGERS = "findAllAdvertiserManagers",
        METHOD_FIND_ALL_AFFILIATE_MANAGERS = "findAllAffiliateManagers",
        METHOD_UPDATE_INVOICE_FIELD = "updateInvoiceField",

        PAYOUT_TYPE_AMOUNT = "amount",
        CPA_FLAT = "cpa_flat",
        PAYOUT_TYPE_CPA_BOTH = "cpa_both",
        PAYOUT_TYPE_CPA_FLAT = "cpa_flat",
        PAYOUT_TYPE_CPA_PERCENTAGE = "cpa_percentage",
        PAYOUT_TYPE_CPC = "cpc",
        PAYOUT_TYPE_CPM = "cpm",

        DATE_FORMAT = "Ymd",
        IS_NOT_PAID = 0,
        STATUS_ACTIVE = "active",
        STATUS_DELETED = "deleted",

        VAT_ID_NL = 1,
        VAT_ID_EU = 2,

        TYPE_STATS = "stats",
        TYPE_ADJUSTMENT = "adjustment",
        TYPE_VAT = "vat";
}
