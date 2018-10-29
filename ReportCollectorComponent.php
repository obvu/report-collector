<?php
/**
 * Created by PhpStorm.
 * User: amorev
 * Date: 29.10.18
 * Time: 14:52
 */

namespace obvu\report_collector;


use obvu\report_collector\collector\yandex_direct\YandexDirectCollector;

class ReportCollectorComponent
{
    public function getDirectReport($dateStart = null, $dateStop = null)
    {
        if (empty($dateStop)) {
            // Дата окончания сегодня
            $dateStop = date("Y-m-d");
        }
        if (empty($dateStart)) {
            // Получаем за один день до
            $dateStart = date("Y-m-d", time() - 60 * 60 * 24);
        }
        $collector = new YandexDirectCollector(['токены и тд']);

        return $collector->getReportElements($dateStart, $dateStop);
    }
}