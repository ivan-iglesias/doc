# Parámetros

Para acceder a parametros desde una plantilla twig, realizamos los siguientes pasos

fichero de parametros `app/config/parameters.yml`

```yml
parameters:
    app.version: 0.1.0
```

fichero de configuración `app/config/config.php`

```yml
twig:
    globals:
        version: '%app.version%'
```

plantilla twig

```
{{ version }}
```

Si queremos acceder al parametro en una clase

```php
$container->getParameter('app.version');
```
