<?php
namespace App\Reporting\Format;


use App\Reporting\Report;

/**
 * Class CsvFormatter
 * @package App\Reporting\Format
*/
class CsvFormatter
{

    /**
     * @param Report $report
     * @return string
    */
    public function formatToCsv(Report $report)
    {
          $contents = $report->getContents();

          $data = implode(";", $contents['data']);

          unset($contents['data']);

          return implode(";", $contents) . ";" . $data;
    }
}