# Datetime

https://www.php.net/manual/en/datetime.format.php

```php
# int
$date = strtotime('10/16/2003');

# string
$date = date('Y-m-d', $time);

# DateTime
$date = \DateTime::createFromFormat('m-d-Y', '7-20-2015');
$date = new \DateTime('7/20/2015');
```

Devolver un string con un formato dado

```php
$date->format('l');
```