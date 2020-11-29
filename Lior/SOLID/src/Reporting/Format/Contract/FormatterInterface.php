<?php
namespace App\Reporting\Format\Contract;


use App\Reporting\Report;


/**
 * Interface FormatterInterface
 * @package App\Reporting\Format\Contract
*/
interface FormatterInterface
{

     /**
      * @param Report $report
      * @return string
     */
     public function format(Report $report): string;
}