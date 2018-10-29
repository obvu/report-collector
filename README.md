Obvu
====
Сборщик информации с рекламных каналов

Установка
------------

Установка через composer

```
php composer.phar require --prefer-dist obvu/report-collector "*"
```

или добавить

```
"obvu/report-collector": "*"
```

в require в `composer.json`


Использование
-----

```php
$collector = new ReportCollectorComponent();
print_r($collector->getDirectReport());
```

Планы
-----

* сборка Яндекс.Директа