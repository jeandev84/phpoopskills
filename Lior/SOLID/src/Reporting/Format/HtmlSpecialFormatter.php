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
      public function formatToHtml(Report $report)
      {
          $html = parent::formatToHtml($report);

          return '<div style="font-weight: bold">'. $html .'</div>';
      }
}