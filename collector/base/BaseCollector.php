<?php
/**
 * Created by PhpStorm.
 * User: amorev
 * Date: 29.10.18
 * Time: 14:36
 */

namespace obvu\report_collector\collector\base;


abstract class BaseCollector
{
    abstract protected function collectElements($dateStart, $dateStop): ReportElementCollection;

    /**
     * @param $dateStart
     * @param $dateStop
     * @return ReportElementCollection
     */
    public function getReportElements($dateStart, $dateStop)
    {
        return $this->collectElements($dateStart, $dateStop);
    }
}