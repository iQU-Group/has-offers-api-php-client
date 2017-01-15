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

    const CPA_FLAT = "cpa_flat";
    const DATE_FORMAT = "Ymd";
    const DEFAULT_CURRENCY = "EUR";
    const DEFAULT_LIMIT = '';
    const DEFAULT_PAGE_NUMBER = '';
    const DEFAULT_STATUS = '';
    const IS_NOT_PAID = 0;

    const LITERAL_ACCOUNT = "account";
    const LITERAL_ACCOUNT_NOTE_ID = "account_note_id";
    const LITERAL_ACTION = "action";
    const LITERAL_ACTIONS = "actions";
    const LITERAL_ADVERTISER_ID = "advertiser_id";
    const LITERAL_ADVERTISER_IDS = "advertiser_ids";
    const LITERAL_AFFILIATE_ACCESS = "affiliate_access";
    const LITERAL_AFFILIATE_ID = "affiliate_id";
    const LITERAL_AFFILIATE_ID_CAMEL_CASE = "affiliateId";
    const LITERAL_AMOUNT = "amount";
    const LITERAL_ANSWER_ID = "answer_id";
    const LITERAL_CAMPAIGN_ID = "campaign_id";
    const LITERAL_COMPANY = "company";
    const LITERAL_CONTAIN = "contain";
    const LITERAL_COUNTRY = "country";
    const LITERAL_CREATIVE_ID = "creative_id";
    const LITERAL_CURRENCY = "currency";
    const LITERAL_DATA = "data";
    const LITERAL_DATE = "date";
    const LITERAL_DATE_TIME = "datetime";
    const LITERAL_EMAIL = "email";
    const LITERAL_EMPLOYEE_ID = "employee_id";
    const LITERAL_END_DATE = "end_date";
    const LITERAL_FIELD = "field";
    const LITERAL_FIELDS = "fields";
    const LITERAL_FILTERS = 'filters';
    const LITERAL_FRAUD_ALERT_ID = "fraud_alert_id";
    const LITERAL_GOAL_ID = "goal_id";
    const LITERAL_ID = "id";
    const LITERAL_IDS = "ids";
    const LITERAL_IGNORE_PREFERENCE = "ignore_preference";
    const LITERAL_INVOICE_ID = "invoice_id";
    const LITERAL_IS_PAID = "is_paid";
    const LITERAL_LENGTH = "length";
    const LITERAL_MANAGER_ID = "manager_id";
    const LITERAL_MEMO = "memo";
    const LITERAL_META = "meta";
    const LITERAL_NAME = "name";
    const LITERAL_NETWORK_ID = "NetworkId";
    const LITERAL_NETWORK_TOKEN = "NetworkToken";
    const LITERAL_NOTE = "note";
    const LITERAL_PARAMS = "params";
    const LITERAL_OFFER_ID = "offer_id";
    const LITERAL_OPTIONS = "options";
    const LITERAL_PASSWORD = "password";
    const LITERAL_PAYOUT_TYPE = "payout_type";
    const LITERAL_PERMISSION = "permission";
    const LITERAL_QUANTITY = "quantity";
    const LITERAL_QUESTION_ID = "question_id";
    const LITERAL_REASON = "reason";
    const LITERAL_REF_ID = "ref_id";
    const LITERAL_RETURN_OBJECT = "return_object";
    const LITERAL_SORT = 'sort';
    const LITERAL_START_DATE = "start_date";
    const LITERAL_STATUS = "status";
    const LITERAL_TIMEFRAMES = "timeframes";
    const LITERAL_TYPE = "type";
    const LITERAL_USER = "user";
    const LITERAL_VALUE = "value";
    const LITERAL_VAT_CODE = "vat_code";
    const LITERAL_VAT_ID = "vat_id";
    const LITERAL_VAT_NAME = "vat_name";
    const LITERAL_VAT_RATE = "vat_rate";

    const METHOD_ADD_ACCOUNT_NOTE = "addAccountNote";
    const METHOD_ADD_CREATIVE = "addCreative";
    const METHOD_ADD_INVOICE_ITEM = "addInvoiceItem";
    const METHOD_ADJUST_AFFILIATE_CLICKS = "adjustAffiliateClicks";
    const METHOD_BLOCK = "block";
    const METHOD_BLOCK_AFFILIATE = "blockAffiliate";
    const METHOD_CHECK_PASSWORD = "checkPassword";
    const METHOD_CREATE = "create";
    const METHOD_CREATE_CAMPAIGN = "createCampaign";
    const METHOD_CREATE_INVOICE = "createInvoice";
    const METHOD_CREATE_RECEIPT = "createReceipt";
    const METHOD_CREATE_SIGNUP_QUESTION = "createSignupQuestion";
    const METHOD_CREATE_SIGNUP_QUESTION_ANSWER = "createSignupQuestionAnswer";
    const METHOD_DISABLE_FRAUD_ALERT = "disableFraudAlert";
    const METHOD_ENABLE_FRAUD_ALERT = "enableFraudAlert";

    const METHOD_FIND_ALL = "findAll";
    const METHOD_FIND_ALL_ADVERTISER_MANAGERS = "findAllAdvertiserManagers";
    const METHOD_FIND_ALL_AFFILIATE_MANAGERS = "findAllAffiliateManagers";
    const METHOD_FIND_ALL_BY_IDS = "findAllByIds";
    const METHOD_FIND_ALL_CAMPAIGNS = "findAllCampaigns";
    const METHOD_FIND_ALL_CREATIVES = "findAllCreatives";
    const METHOD_FIND_ALL_COUNTRIES = "findAllCountries";
    const METHOD_FIND_ALL_FRAUD_ALERTS = "findAllFraudAlerts";
    const METHOD_FIND_ALL_IDS = "findAllIds";
    const METHOD_FIND_ALL_IDS_BY_ACCOUNT_MANAGER_ID = "findAllIdsByAccountManagerId";
    const METHOD_FIND_ALL_IDS_BY_ADVERTISER_ID = "findAllIdsByAdvertiserId";
    const METHOD_FIND_ALL_IDS_BY_AFFILIATE_ID = "findAllIdsByAffiliateId";
    const METHOD_FIND_ALL_INVOICES = "findAllInvoices";
    const METHOD_FIND_ALL_INVOICES_BY_IDS = "findAllInvoicesByIds";
    const METHOD_FIND_ALL_PENDING_UNASSIGNED_ADVERTISERS = "findAllPendingUnassignedAdvertisers";
    const METHOD_FIND_ALL_PENDING_UNASSIGNED_ADVERTISER_IDS = "findAllPendingUnassignedAdvertiserIds";
    const METHOD_FIND_ALL_PENDING_UNASSIGNED_AFFILIATES = "findAllPendingUnassignedAffiliates";
    const METHOD_FIND_ALL_PENDING_UNASSIGNED_AFFILIATE_IDS = "findAllPendingUnassignedAffiliateIds";
    const METHOD_FIND_ALL_RECEIPTS = "findAllReceipts";
    const METHOD_FIND_ALL_RECEIPTS_BY_IDS = "findAllReceiptsByIds";
    const METHOD_FIND_BY_ID = "findById";
    const METHOD_FIND_CAMPAIGN_BY_ID = "findCampaignById";
    const METHOD_FIND_CREATIVE_BY_ID = "findCreativeById";
    const METHOD_FIND_INVOICE_BY_ID = "findInvoiceById";
    const METHOD_FIND_INVOICE_STATS = "findInvoiceStats";
    const METHOD_FIND_LAST_INVOICE = "findLastInvoice";
    const METHOD_FIND_LAST_RECEIPT = "findLastReceipt";
    const METHOD_FIND_LIST = "findList";
    const METHOD_FIND_RECEIPT_BY_ID = "findReceiptById";

    const METHOD_GENERATE_INVOICES = "generateInvoices";

    const METHOD_GET_ACCOUNT_BALANCE = "getAccountBalance";
    const METHOD_GET_ACCOUNT_HISTORY = "getAccountHistory";
    const METHOD_GET_ACCOUNT_MANAGER = "getAccountManager";
    const METHOD_GET_ACCOUNT_NOTES = "getAccountNotes";
    const METHOD_GET_ACTIVE_NETWORK_CAMPAIGN_COUNT = "getActiveNetworkCampaignCount";
    const METHOD_GET_AFFILIATE_TIER = "getAffiliateTier";
    const METHOD_GET_APPROVED_OFFER_IDS = "getApprovedOfferIds";
    const METHOD_GET_BLOCKED_AFFILIATE_IDS = "getBlockedAffiliateIds";
    const METHOD_GET_BLOCKED_OFFER_IDS = "getBlockedOfferIds";
    const METHOD_GET_BLOCKED_REASONS = "getBlockedReasons";
    const METHOD_GET_CAMPAIGN_CODE = "getCampaignCode";
    const METHOD_GET_CAMPAIGN_CREATIVES = "getCampaignCreatives";
    const METHOD_GET_CREATOR_USER = "getCreatorUser";
    const METHOD_GET_NEXT_START_DATE = "getNextStartDate";
    const METHOD_GET_OFFER_CONVERSION_CAPS = "getOfferConversionCaps";
    const METHOD_GET_OFFER_HOSTNAMES = "getOfferHostnames";
    const METHOD_GET_OFFER_PAYOUTS = "getOfferPayouts";
    const METHOD_GET_OFFER_PAYOUTS_ALL = "getOfferPayoutsAll";
    const METHOD_GET_OFFER_PIXELS = "getOfferPixels";
    const METHOD_GET_OUTSTANDING_INVOICES = "getOutstandingInvoices";
    const METHOD_GET_OVERVIEW = "getOverview";
    const METHOD_GET_OWNERS_ADVERTISER_ACCOUNT_ID = "getOwnersAdvertiserAccountId";
    const METHOD_GET_OWNERS_AFFILIATE_ACCOUNT_ID = "getOwnersAffiliateAccountId";
    const METHOD_GET_PAYMENT_METHODS = "getPaymentMethods";
    const METHOD_GET_REFERRAL_AFFILIATE_IDS = "getReferralAffiliateIds";
    const METHOD_GET_REFERRAL_COMMISSION = "getReferralCommission";
    const METHOD_GET_REFERRING_AFFILIATE = "getReferringAffiliate";
    const METHOD_GET_SIGNUP_ANSWERS = "getSignupAnswers";
    const METHOD_GET_SIGNUP_QUESTIONS = "getSignupQuestions";
    const METHOD_GET_TARGET_COUNTRIES = "getTargetCountries";
    const METHOD_GET_UNAPPROVED_OFFER_IDS = "getUnapprovedOfferIds";
    const METHOD_GET_UNBLOCKED_AFFILIATE_IDS = "getUnblockedAffiliateIds";
    const METHOD_GET_UNBLOCKED_OFFER_IDS = "getUnblockedOfferIds";
    const METHOD_GET_USAGE = "getUsage";

    const METHOD_GRANT_ACCESS = "grantAccess";
    const METHOD_REMOVE_ACCESS = "removeAccess";
    const METHOD_REMOVE_CUSTOM_REFERRAL_COMMISSION = "removeCustomReferralCommission";
    const METHOD_REMOVE_INVOICE_ITEM = "removeInvoiceItem";
    const METHOD_RESET_PASSWORD = "resetPassword";
    const METHOD_SET_CREATIVE_CUSTOM_WEIGHTS = "setCreativeCustomWeights";
    const METHOD_SET_CREATIVE_WEIGHTS = "setCreativeWeights";
    const METHOD_SET_CUSTOM_REFERRAL_COMMISSION = "setCustomReferralCommission";
    const METHOD_SIGNUP = "signup";
    const METHOD_SIMPLE_SEARCH = "simpleSearch";
    const METHOD_UNBLOCK_AFFILIATE = "unblockAffiliate";
    const METHOD_UNIQUE_EMAIL = "uniqueEmail";

    const METHOD_UPDATE = "update";
    const METHOD_UPDATE_ACCOUNT_NOTE = "updateAccountNote";
    const METHOD_UPDATE_BY_REF_ID = "'updateByRefId";
    const METHOD_UPDATE_CAMPAIGN = "updateCampaign";
    const METHOD_UPDATE_CAMPAIGN_FIELD = "updateCampaignField";
    const METHOD_UPDATE_CREATIVE = "updateCreative";
    const METHOD_UPDATE_CREATIVE_FIELD = "updateCreativeField";
    const METHOD_UPDATE_FIELD = "updateField";
    const METHOD_UPDATE_INVOICE = "updateInvoice";
    const METHOD_UPDATE_INVOICE_FIELD = "updateInvoiceField";
    const METHOD_UPDATE_PAYMENT_METHOD_CHECK = "'updatePaymentMethodCheck";
    const METHOD_UPDATE_PAYMENT_METHOD_DIRECT_DEPOSIT = "'updatePaymentMethodDirectDeposit";
    const METHOD_UPDATE_PAYMENT_METHOD_OTHER = "'updatePaymentMethodOther";
    const METHOD_UPDATE_PAYMENT_METHOD_PAYONEER = "'updatePaymentMethodPayoneer";
    const METHOD_UPDATE_PAYMENT_METHOD_PAYPAL = "'updatePaymentMethodPaypal";
    const METHOD_UPDATE_PAYMENT_METHOD_PAY_QUICKER = "'updatePaymentMethodPayQuicker";
    const METHOD_UPDATE_PAYMENT_METHOD_WIRE = "'updatePaymentMethodWire";
    const METHOD_UPDATE_RECEIPT = "'updateReceipt";
    const METHOD_UPDATE_RECEIPT_FIELD = "'updateReceiptField";
    const METHOD_UPDATE_SIGNUP_QUESTION = "updateSignupQuestion";
    const METHOD_UPDATE_SIGNUP_QUESTION_ANSWER = "updateSignupQuestionAnswer";
    const METHOD_UPDATE_TAX_INFO = "updateTaxInfo";

    const PAYOUT_TYPE_AMOUNT = "amount";
    const PAYOUT_TYPE_CPA_BOTH = "cpa_both";
    const PAYOUT_TYPE_CPA_FLAT = "cpa_flat";
    const PAYOUT_TYPE_CPA_PERCENTAGE = "cpa_percentage";
    const PAYOUT_TYPE_CPC = "cpc";
    const PAYOUT_TYPE_CPM = "cpm";

    const STATUS_ACTIVE = "active";
    const STATUS_DELETED = "deleted";
    const STATUS_PAUSED = "paused";

    const TARGET_ACCOUNT_MANAGER = "AccountManager";
    const TARGET_AD_MANAGER = "AdManager";
    const TARGET_ADVERTISER = "Advertiser";
    const TARGET_ADVERTISER_BILLING = "AdvertiserBilling";
    const TARGET_ADVERTISER_USER = "AdvertiserUser";
    const TARGET_AFFILIATE = "Affiliate";
    const TARGET_AFFILIATE_BILLING = "AffiliateBilling";
    const TARGET_AFFILIATE_USER = "AffiliateUser";
    const TARGET_APPLICATION = "Application";
    const TARGET_EMPLOYEE = "Employee";
    const TARGET_OFFER = "Offer";
    const TYPE_ADJUSTMENT = "adjustment";
    const TYPE_STATS = "stats";
    const TYPE_VAT = "vat";

    const URL_PARAM_CONTAIN = "contain";
    const URL_PARAM_FIELDS = "fields";
    const URL_PARAM_FILTERS = "filters";
    const URL_PARAM_LIMIT = "limit";
    const URL_PARAM_METHOD = "Method";
    const URL_PARAM_PAGE = "page";
    const URL_PARAM_SORT = "sort";
    const URL_PARAM_TARGET = "Target";

    const VAT_ID_EU = 2;
    const VAT_ID_NL = 1;
}
