<?php
/**
 * Created by PhpStorm.
 * User: amorev
 * Date: 29.10.18
 * Time: 15:11
 */

namespace obvu\report_collector\models;


class SingleReportResultElement extends SingleReportCollectorElement
{
    /**
     * Количество визитов
     * @var int
     */
    public $visits;

    /**
     * Достижения целей по каждой цели в виде ассоциативного массива
     * @var array
     */
    public $targets = [];
}