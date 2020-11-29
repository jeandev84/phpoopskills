<?php
namespace App\Reporting\Format;


use App\Reporting\Format\Contract\DeserializerInterface;
use App\Reporting\Format\Contract\FormatterInterface;
use App\Reporting\Report;


/**
 * Class JsonFormatter
 * @package App\Reporting\Format
*/
class JsonFormatter implements FormatterInterface, DeserializerInterface
{

    /**
     * Retourne le rapport formatté en JSON
     *
     * @param Report $report
     * @return string
    */
    public function format(Report $report)
    {
        return json_encode($report->getContents());
    }

    /**
     * @param string $str
     * @return Report
    */
    public function deserialize(string $str): Report
    {
         // $str = {"title": "Mon titre", "date": "2019-01-01", "data": {5, 6}}
         $contents = json_decode($str);

         return new Report($contents['date'], $contents['title'], $contents['data']);
    }
}