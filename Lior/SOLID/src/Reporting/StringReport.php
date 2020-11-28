<?php
namespace App\Reporting;


/**
 * Class StringReport
 * @package App\Reporting
*/
class StringReport extends Report
{
     /*
     Redefinir la methode getContents() du parent
     va paraliser l' utilisation de la methode dans d' autre classe
     cependant il suffit de creer une methode nomme par example getStringContents()
     afin de ne pas casser le comportement de getContents() de Report
     public function getContents()
     {
         return "title:$this->title;date:$this->date;data:". implode(",", $this->data);
     }
     */


    public function getStringContents()
    {

    }
}