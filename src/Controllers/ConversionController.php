<?php

namespace Iqu\HasOffersAPIClient\Controllers;

use Iqu\HasOffersAPIClient\HasOffersConstants;

class ConversionController extends BaseController
{
    public function __construct($networkToken, $networkId, $client)
    {
        parent::__construct($networkToken, $networkId, $client);
    }

    /**
     * Find Conversions.
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
        return parent::findAllByTarget(HasOffersConstants::TARGET_CONVERSION, $filters, $sort, $fields, $contain,
            $limit, $page);
    }

    /**
     * Create a Conversion.
     *
     * @param $data
     * @param bool $returnObject
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function create(array $data, $number = 1, $returnObject = true)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_DATA => $data,
            HasOffersConstants::LITERAL_NUMBER => $number,
            HasOffersConstants::LITERAL_RETURN_OBJECT => $returnObject
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_CONVERSION,
            HasOffersConstants::METHOD_CREATE, $postFields);
    }

    /**
     * Given a conversion id, updates the status of this conversion.
     *
     * @param $id
     * @param $status
     * @return \Iqu\HasOffersAPIClient\HasOffersResponse
     */
    public function updateStatus($id, $status)
    {
        $postFields = array(
            HasOffersConstants::LITERAL_ID => $id,
            HasOffersConstants::LITERAL_STATUS => $status
        );
        return $this->sendPostRequest(HasOffersConstants::TARGET_CONVERSION,
            HasOffersConstants::METHOD_UPDATE_STATUS, $postFields);
    }
}
