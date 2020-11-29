<?php
namespace App\Reporting;


use App\Reporting\Format\Contract\FormatterInterface;


/**
 * Class ReportExtractor
 * @package App\Reporting
*/
class ReportExtractor
{

    /**
     * @var array
    */
    protected $formatters = [];


    /**
     * @param FormatterInterface $formatter
    */
    public function addFormatter(FormatterInterface $formatter)
    {
         $this->formatters[] = $formatter;
    }

    /**
     * @param JsonFormatter $jsonFormatter
    */
    public function addJsonFormatter(JsonFormatter $jsonFormatter)
    {
        $this->formatters[] = $jsonFormatter;
    }


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

        foreach ($this->formatters as $formatter)
        {
            $results[] = $formatter->format($report);
        }

        return $results;
    }
}
