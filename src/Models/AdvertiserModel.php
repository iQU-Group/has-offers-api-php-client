<?php

namespace Iqu\HasOffersAPIClient\Models;

class AdvertiserModel extends BaseModel
{
    private $id = null;
    private $accountManagerId = null;
    private $address1 = null;
    private $address2 = null;
    private $city = null;
    private $company = null;
    private $conversionSecurityToken = null;
    private $country = null;
    private $dateAdded = null;
    private $fax = null;
    private $modified = null;
    private $phone = null;
    private $ref_id = null;
    private $region = null;
    private $signUpIp = null;
    private $status = null;
    private $tmpToken = null;
    private $zipCode = null;

    /**
     * AdvertiserModel constructor.
     *
     * @param integer $id
     * @param string $address1
     * @param string $zipCode
     * @param string $status
     * @param \DateTime $dateAdded
     * @param \DateTime $modified
     * @param integer $accountManagerId
     * @param string $address2
     * @param string $city
     * @param string $company
     * @param string $conversionSecurityToken
     * @param string $country
     * @param string $fax
     * @param string $phone
     * @param string $ref_id
     * @param string $region
     * @param string $signUpIp
     * @param string $tmpToken
     */
    public function __construct(
        $id,
        $address1,
        $zipCode,
        $status,
        $dateAdded,
        $modified,
        $accountManagerId = null,
        $address2 = null,
        $city = null,
        $company = null,
        $conversionSecurityToken = null,
        $country = null,
        $fax = null,
        $phone = null,
        $ref_id = null,
        $region = null,
        $signUpIp = null,
        $tmpToken = null
    ) {
        $this->id = $id;
        $this->accountManagerId = $accountManagerId;
        $this->address1 = $address1;
        $this->address2 = $address2;
        $this->city = $city;
        $this->company = $company;
        $this->conversionSecurityToken = $conversionSecurityToken;
        $this->country = $country;
        $this->dateAdded = $dateAdded;
        $this->fax = $fax;
        $this->modified = $modified;
        $this->phone = $phone;
        $this->ref_id = $ref_id;
        $this->region = $region;
        $this->signUpIp = $signUpIp;
        $this->status = $status;
        $this->tmpToken = $tmpToken;
        $this->zipCode = $zipCode;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAccountManagerId()
    {
        return $this->accountManagerId;
    }

    public function setAccountManagerId($accountManagerId)
    {
        $this->accountManagerId = $accountManagerId;
    }

    public function getAddress1()
    {
        return $this->address1;
    }

    public function setAddress1($address1)
    {
        $this->address1 = $address1;
    }

    public function getAddress2()
    {
        return $this->address2;
    }

    public function setAddress2($address2)
    {
        $this->address2 = $address2;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getCompany()
    {
        return $this->company;
    }

    public function setCompany($company)
    {
        $this->company = $company;
    }

    public function getConversionSecurityToken()
    {
        return $this->conversionSecurityToken;
    }

    public function setConversionSecurityToken($conversionSecurityToken)
    {
        $this->conversionSecurityToken = $conversionSecurityToken;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;
    }

    public function getFax()
    {
        return $this->fax;
    }

    public function setFax($fax)
    {
        $this->fax = $fax;
    }

    public function getModified()
    {
        return $this->modified;
    }

    public function setModified($modified)
    {
        $this->modified = $modified;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getRefId()
    {
        return $this->ref_id;
    }

    public function setRefId($ref_id)
    {
        $this->ref_id = $ref_id;
    }

    public function getRegion()
    {
        return $this->region;
    }

    public function setRegion($region)
    {
        $this->region = $region;
    }

    public function getSignUpIp()
    {
        return $this->signUpIp;
    }

    public function setSignUpIp($signUpIp)
    {
        $this->signUpIp = $signUpIp;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getTmpToken()
    {
        return $this->tmpToken;
    }

    public function setTmpToken($tmpToken)
    {
        $this->tmpToken = $tmpToken;
    }

    public function getZipCode()
    {
        return $this->zipCode;
    }

    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
    }
}
