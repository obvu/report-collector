<?php
/**
 * Created by PhpStorm.
 * User: amorev
 * Date: 29.10.18
 * Time: 14:43
 */

namespace obvu\report_collector\models;

/**
 * Стандартный ответ для отчета из любого рекламного кабинета
 */
class SingleReportCollectorElement
{
    /**
     * Стандартное UTM поле
     * @var string
     */
    public $utm_source;
    /**
     * Стандартное UTM поле
     * @var string
     */
    public $utm_medium;
    /**
     * Стандартное UTM поле
     * @var string
     */
    public $utm_campaign;
    /**
     * Стандартное UTM поле
     * @var string
     */
    public $utm_content;
    /**
     * Стандартное UTM поле
     * @var string
     */
    public $utm_term;

    /**
     * Любая специфичная для коллектора информация. Представляется в виде объекта
     * Например сюда можно положить Yandex Client ID
     * @var mixed
     */
    public $specific_data;
}