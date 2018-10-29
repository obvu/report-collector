<?php
/**
 * Created by PhpStorm.
 * User: amorev
 * Date: 29.10.18
 * Time: 14:47
 */

namespace obvu\report_collector\collector\base;


use obvu\report_collector\models\SingleReportCollectorElement;

class ReportElementCollection
{
    /**
     * @var SingleReportCollectorElement[]
     */
    public $collection;

    public function __construct(array $collection)
    {
        foreach ($collection as $item) {
            if (!($item instanceof SingleReportCollectorElement)) {
                throw new \Exception("Item must be instance of SingleReportCollectorElement");
            }
        }
        $this->collection = $collection;
    }
}