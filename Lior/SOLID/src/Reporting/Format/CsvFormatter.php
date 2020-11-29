<?php
namespace App\Reporting\Format;


use App\Reporting\Format\Contract\DeserializerInterface;
use App\Reporting\Format\Contract\FormatterInterface;
use App\Reporting\Report;

/**
 * Class CsvFormatter
 * @package App\Reporting\Format
*/
class CsvFormatter implements FormatterInterface, DeserializerInterface
{

    /**
     * @param Report $report
     * @return string
    */
    public function format(Report $report): string
    {
        $contents = $report->getContents();

        $data = implode(";", $contents['data']);

        unset($contents['data']);

        return implode(";", $contents) . ";" . $data;
    }


    /**
     * @param string $str
     * @return Report
     */
    public function deserialize(string $str): Report
    {
        // $str == "title;date;5;6"

        // ["title", "date", 5, 6]
        $contents = explode(";", $str);

        $data = [
           $contents[2],
           $contents[3]
        ];

        return new Report($contents[1], $contents[0], $data);
    }
}