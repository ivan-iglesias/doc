# Phpunit dependencias obsoletas

Para ocular los mensajes de dependencias obsoletas al ejecutar los tests, añadiremos la siguiente línea en el fichero `phpunit.xml`

```xml
<php>
    <env name="SYMFONY_DEPRECATIONS_HELPER" value="weak" />
</php>
```
