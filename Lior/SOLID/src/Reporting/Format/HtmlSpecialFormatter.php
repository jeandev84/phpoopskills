<?php
namespace App\Reporting\Format;


use App\Reporting\Report;

/**
 * Class HtmlSpecialFormatter
 * @package App\Reporting\Format
*/
class HtmlSpecialFormatter extends HtmlFormatter
{

      /**
       * @param Report $report
       * @return string
      */
      public function format(Report $report): string
      {
          $html = parent::format($report);

          return '<div style="font-weight: bold">'. $html .'</div>';
      }
}