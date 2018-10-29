<?php
/**
 * Created by PhpStorm.
 * User: amorev
 * Date: 29.10.18
 * Time: 14:53
 */

namespace obvu\report_collector\collector\yandex_direct;


use obvu\report_collector\collector\base\BaseCollector;
use obvu\report_collector\collector\base\ReportElementCollection;
use obvu\report_collector\models\SingleReportCollectorElement;
use obvu\report_collector\models\SingleReportSpentMoneyElement;

class YandexDirectCollector extends BaseCollector
{
    private $authData;

    public function __construct($authData)
    {
        $this->authData = $authData;
    }

    /**
     * @param $dateStart
     * @param $dateStop
     * @return ReportElementCollection
     * @throws \Exception
     */
    protected function collectElements($dateStart, $dateStop): ReportElementCollection
    {
        // тут нужно добавлять элементы на трату денег, т.к. формруется отчет на затраты в директе
        $element = new SingleReportSpentMoneyElement();
        $result = new ReportElementCollection([$element]);

        return $result;
    }
}