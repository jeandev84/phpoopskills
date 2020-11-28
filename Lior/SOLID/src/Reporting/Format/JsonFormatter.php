<?php
namespace App\Reporting\Format;


use App\Reporting\Report;

/**
 * Class JsonFormatter
 * @package App\Reporting\Format
*/
class JsonFormatter
{

    /**
     * Retourne le rapport formatté en JSON
     *
     * @param Report $report
     * @return string
    */
    public function formatToJson(Report $report)
    {
        return json_encode($report->getContents());
    }
}