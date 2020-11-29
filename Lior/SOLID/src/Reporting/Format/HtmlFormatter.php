<?php
namespace App\Reporting\Format;


use App\Reporting\Format\Contract\FormatterInterface;
use App\Reporting\Report;

/**
 * Class HtmlFormatter
 * @package App\Reporting\Format
*/
class HtmlFormatter implements FormatterInterface
{

    /**
     * Retourne le rapport formatté en HTML
     *
     * @param Report $report
     * @return string
    */
    public function format(Report $report): string
    {
        $contents = $report->getContents();

        $data = "";

        foreach ($contents['data'] as $value) {
            $data .= "<li>$value</li>";
        }

        return "
            <h2>{$contents['title']}</h2>
            <em>Date : {$contents['date']}</em>
            <h4>Données : </h4>
            <ul>
                $data
            </ul>
        ";
    }

    /*
    public function deserialize(string $str): Report
    {
        throw new \Exception("Il est impossible de deserialiser du HTML");

        return new Report("", "", []);
    }
    */
}


/**
 * interface CoffeeMaker {
 *    public function makeCoffee();
 *    public function makeCapuccino();
 *    public function makeTea();
 * }
 *
 * interface TeaMaker {
 *    public function makeTea();
 * }
 *
 * class MachineACoffee implements CoffeeMaker {
 *
 *    public function makeCoffee() {
 *
 *         // 30 lignes de code
 *    }
 *
 *    public function makeCapuccino() {
 *
 *        // 30 lignes de code
 *    }
 *
 *    public function makeTea() {
 *
 *        // 20 lignes de code
 *    }
 * }
 */