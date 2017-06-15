<?php

namespace Iqu\HasOffersAPIClient\Controllers;

use Iqu\HasOffersAPIClient\HasOffersConstants;

class OfferPixelController extends BaseController
{
    public function __construct($networkToken, $networkId, $client)
    {
        parent::__construct($networkToken, $networkId, $client);
    }

    /**
     * Create an Offer Pixel.
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
        return $this->sendPostRequest(HasOffersConstants::TARGET_OFFER_PIXEL, HasOffersConstants::METHOD_CREATE,
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
        return parent::findAll(HasOffersConstants::TARGET_OFFER_PIXEL, $filters, $sort, $fields, $contain, $limit, $page);
    }

    /**
     * Find one or more Offer Pixels by their IDs.
     *
     * @param array $ids
     * @param array $fields
     * @param array $contain
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findAllByIds(array $ids, array $fields = array(), array $contain = array())
    {
        $arguments = array(
            HasOffersConstants::LITERAL_IDS => $ids
        );
        if (count($fields)) {
            $arguments[HasOffersConstants::URL_PARAM_FIELDS] = $fields;
        }
        if (count($contain)) {
            $arguments[HasOffersConstants::URL_PARAM_CONTAIN] = $contain;
        }
        return $this->sendGetRequest(HasOffersConstants::TARGET_OFFER_PIXEL, HasOffersConstants::METHOD_FIND_ALL_BY_IDS,
            $arguments);
    }

    /**
     * Retrieve an Offer Pixel.
     *
     * @param $id
     * @param array $fields
     * @param array $contain
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function findById($id, array $fields = array(), $contain = array())
    {
        $arguments = array(
            HasOffersConstants::LITERAL_ID => $id
        );
        if (count($fields)) {
            $arguments[HasOffersConstants::URL_PARAM_FIELDS] = $fields;
        }
        if (count($contain)) {
            $arguments[HasOffersConstants::URL_PARAM_CONTAIN] = $contain;
        }
        return $this->sendGetRequest(HasOffersConstants::TARGET_OFFER_PIXEL, HasOffersConstants::METHOD_FIND_BY_ID,
            $arguments);
    }

    /**
     * Gets an array of the allowed pixel types for the given offer.
     * If an offer is using iFrame tracking, all pixel types are allowed
     * If an offer is using image tracking, only image and postbacks are allowed
     * Else only postbacks are allowed
     *
     * @param $offerId
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function getAllowedTypes($offerId)
    {
        $arguments = array(
            HasOffersConstants::LITERAL_OFFER_ID => $offerId
        );
        return $this->sendGetRequest(HasOffersConstants::TARGET_OFFER_PIXEL,
            HasOffersConstants::METHOD_GET_ALLOWED_TYPES, $arguments);
    }

    /**
     * Update an Offer Pixel.
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
        return $this->sendPostRequest(HasOffersConstants::TARGET_OFFER_PIXEL, HasOffersConstants::METHOD_UPDATE,
            $postFields);
    }

    /**
     * Update one field of an Offer Pixel.
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
        return $this->sendPostRequest(HasOffersConstants::TARGET_OFFER_PIXEL, HasOffersConstants::METHOD_UPDATE_FIELD,
            $postFields);
    }
}
