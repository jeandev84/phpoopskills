<?php
namespace App\Reporting\Format\Contract;


use App\Reporting\Report;

/**
 * Interface DeserializerInterface
 * @package App\Reporting\Format\Contract
*/
interface DeserializerInterface
{
    public function deserialize(string $str): Report;
}