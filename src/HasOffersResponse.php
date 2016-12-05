<?php

namespace Iqu\HasOffersAPIClient;

class HasOffersResponse
{
    private $status = null;
    private $httpStatus = null;
    private $data = null;
    private $errors = null;
    private $errorMessage = null;

    /**
     * HasOffersResponse constructor.
     *
     * @param $status
     * @param $httpStatus
     * @param $data
     * @param $errors
     * @param $errorMessage
     */
    public function __construct($status, $httpStatus, $data, $errors, $errorMessage)
    {
        $this->status = $status;
        $this->httpStatus = $httpStatus;
        $this->data = $data;
        $this->errors = $errors;
        $this->errorMessage = $errorMessage;
    }

    public static function getResponseObject($hasOffersResponse)
    {
        $hasOffersResponse = json_decode($hasOffersResponse, true);
        HasOffersResponse::validateResponse($hasOffersResponse);
        $hasOffersResponse = $hasOffersResponse["response"];

        return new HasOffersResponse($hasOffersResponse["status"], $hasOffersResponse["httpStatus"],
            $hasOffersResponse["data"], $hasOffersResponse["errors"], $hasOffersResponse["errorMessage"]);
    }

    public static function validateResponse($response)
    {
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \RuntimeException(
                'API response not well-formed (json error code: ' . json_last_error() . ')'
            );
        }
        if (!isset($response['response']['status']) || $response['response']['status'] !== 1) {
            throw new \Exception($response['response']['errorMessage']);
        }
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getHttpStatus()
    {
        return $this->httpStatus;
    }

    public function setHttpStatus($httpStatus)
    {
        $this->httpStatus = $httpStatus;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function setErrors($errors)
    {
        $this->errors = $errors;
    }

    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;
    }
}