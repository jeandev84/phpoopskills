<?php
namespace App\Reporting;


use App\Reporting\Format\HtmlFormatter;
use App\Reporting\Format\HtmlSpecialFormatter;
use App\Reporting\Format\JsonFormatter;

/**
 * Class ReportExtractor
 * @package App\Reporting
*/
class ReportExtractor
{

    /**
     * Doit afficher l'ensemble des formats possibles pour un rapport en se servant
     * des formatters ajoutés dans le tableau
     *
     * @param Report $report
     *
     * @return array
     */
    public function process(Report $report): array
    {
        $results = [];

        $htmlFormatter = new HtmlFormatter();
        $htmlSpecialFormatter = new HtmlSpecialFormatter();
        $jsonFormatter = new JsonFormatter();


        $results[] = $htmlFormatter->format($report);
        $results[] = $jsonFormatter->format($report);
        $results[] = $htmlSpecialFormatter->format($report);

        return $results;
    }
}
