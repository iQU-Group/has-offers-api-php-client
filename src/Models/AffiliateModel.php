<?php

namespace Iqu\HasOffersAPIClient\Models;

class AffiliateModel extends BaseModel
{
    private $id = null;
    private $accountManagerId = null;
    private $address1 = null;
    private $address2 = null;
    private $affiliateTierId = null;
    private $city = null;
    private $company = null;
    private $country = null;
    private $dateAdded = null;
    private $fax = null;
    private $fraudActivityAlertThreshold = null;
    private $fraudActivityBlockThreshold = null;
    private $fraudActivityScore = null;
    private $fraudProfileAlertThreshold = null;
    private $fraudProfileBlockThreshold = null;
    private $fraudProfileScore = null;
    private $modified = null;
    private $methodData = null;
    private $other = null;
    private $paymentMethod = null;
    private $paymentTerms = null;
    private $phone = null;
    private $ref_id = null;
    private $referralId = null;
    private $region = null;
    private $signUpIp = null;
    private $status = null;
    private $w9Filed = null;
    private $zipCode = null;

    /**
     * AffiliateModel constructor.
     * @param null $id
     * @param null $company
     * @param null $dateAdded
     * @param null $modified
     * @param null $paymentMethod
     * @param null $paymentTerms
     * @param null $status
     * @param null $w9Filed
     * @param null $zipCode
     * @param null $accountManagerId
     * @param null $address1
     * @param null $address2
     * @param null $affiliateTierId
     * @param null $city
     * @param null $country
     * @param null $fax
     * @param null $fraudActivityAlertThreshold
     * @param null $fraudActivityBlockThreshold
     * @param null $fraudActivityScore
     * @param null $fraudProfileAlertThreshold
     * @param null $fraudProfileBlockThreshold
     * @param null $fraudProfileScore
     * @param null $methodData
     * @param null $other
     * @param null $phone
     * @param null $ref_id
     * @param null $referralId
     * @param null $region
     * @param null $signUpIp
     */
    public function __construct(
        $id,
        $company,
        $dateAdded,
        $modified,
        $paymentMethod,
        $paymentTerms,
        $status,
        $w9Filed,
        $zipCode,
        $accountManagerId = null,
        $address1 = null,
        $address2 = null,
        $affiliateTierId = null,
        $city = null,
        $country = null,
        $fax = null,
        $fraudActivityAlertThreshold = null,
        $fraudActivityBlockThreshold = null,
        $fraudActivityScore = null,
        $fraudProfileAlertThreshold = null,
        $fraudProfileBlockThreshold = null,
        $fraudProfileScore = null,
        $methodData = null,
        $other = null,
        $phone = null,
        $ref_id = null,
        $referralId = null,
        $region = null,
        $signUpIp = null
    ) {
        $this->accountManagerId = $accountManagerId;
        $this->address1 = $address1;
        $this->address2 = $address2;
        $this->affiliateTierId = $affiliateTierId;
        $this->city = $city;
        $this->company = $company;
        $this->country = $country;
        $this->dateAdded = $dateAdded;
        $this->fax = $fax;
        $this->fraudActivityAlertThreshold = $fraudActivityAlertThreshold;
        $this->fraudActivityBlockThreshold = $fraudActivityBlockThreshold;
        $this->fraudActivityScore = $fraudActivityScore;
        $this->fraudProfileAlertThreshold = $fraudProfileAlertThreshold;
        $this->fraudProfileBlockThreshold = $fraudProfileBlockThreshold;
        $this->fraudProfileScore = $fraudProfileScore;
        $this->id = $id;
        $this->modified = $modified;
        $this->methodData = $methodData;
        $this->other = $other;
        $this->paymentMethod = $paymentMethod;
        $this->paymentTerms = $paymentTerms;
        $this->phone = $phone;
        $this->ref_id = $ref_id;
        $this->referralId = $referralId;
        $this->region = $region;
        $this->signUpIp = $signUpIp;
        $this->status = $status;
        $this->w9Filed = $w9Filed;
        $this->zipCode = $zipCode;
    }
}