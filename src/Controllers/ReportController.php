<?php


namespace Iqu\HasOffersAPIClient\Controllers;

use Iqu\HasOffersAPIClient\HasOffersConstants;

class ReportController extends BaseController
{
    public function getStats(
        array $filters = array(),
        array $fields = array(),
        array $groups = array(),
        array $contain = array(),
        array $sort = array(),
        $limit = HasOffersConstants::DEFAULT_LIMIT,
        $page = HasOffersConstants::DEFAULT_PAGE_NUMBER,
        $dataStart = '',
        $dataEnd = '',
        $totals = '',
        $currency = ''
    ) {
        $arguments = array(
            HasOffersConstants::URL_PARAM_FILTERS => $filters,
            HasOffersConstants::URL_PARAM_FIELDS => $fields,
            HasOffersConstants::URL_PARAM_GROUPS => $groups,
            HasOffersConstants::URL_PARAM_CONTAIN => $contain,
            HasOffersConstants::URL_PARAM_SORT => $sort
        );
        if ($limit != HasOffersConstants::DEFAULT_LIMIT) {
            $arguments[HasOffersConstants::URL_PARAM_LIMIT] = $limit;
        }
        if ($page != HasOffersConstants::DEFAULT_PAGE_NUMBER) {
            $arguments[HasOffersConstants::URL_PARAM_PAGE] = $page;
        }
        if ($dataStart) {
            $arguments[HasOffersConstants::URL_PARAM_DATA_START] = $dataStart;
        }
        if ($dataEnd) {
            $arguments[HasOffersConstants::URL_PARAM_DATA_END] = $dataEnd;
        }
        if ($totals) {
            $arguments[HasOffersConstants::URL_PARAM_TOTALS] = $totals;
        }
        if ($currency) {
            $arguments[HasOffersConstants::URL_PARAM_CURRENCY] = $currency;
        }

        return $this->sendGetRequest(HasOffersConstants::TARGET_REPORT, HasOffersConstants::METHOD_GET_STATS,
            $arguments);
    }
}
