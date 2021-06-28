# Comandos

Solo usarse en *desarrollo* y en fase de *pruebas*. **Actualiza** las dependencias que encuentre en el *composer.json* a su última versión y sobreescribe los ficheros *composer.json* y *composer.lock*.

```sh
composer update / composer u
```

Podemos concatenar multiples paquetes y añadir el tag `--with-dependencies` para que actualice las dependencias de los paquetes indicados.

```sh
composer u doctrine/doctrine-bundle \
           doctrine/doctrine-fixtures-bundle \
           doctrine/doctrine-migrations-bundle \
           --with-dependencies
```

Se puede usar en *desarrollo*, *pruebas* y *producción*. **Instala** las dependencias que encuentre en el fichero *composer.lock*, si no esta, hará un *composer update* y lo creará. Por esta razón siempre hay que subirlo a producción.

```sh
composer install / composer i
```

**Instala** paquetes en el **directorio global** de composer para poder ser usados en cualquier sitio.

```sh
composer global require phpunit/phpunit
```

**Instala y añade dependencias** en la sección *require* del fichero *composer.json*.

```sh
composer require phpunit/phpunit

composer require internet/ekt-core-bundle "^4.0"

composer require internet/ekt-core-bundle:4.1
```

**Instala y añade dependencias** en la sección *require-dev* del fichero *composer.json*. Solo se usaran en desarrollo y pruebas.

```sh
composer require --dev phpunit/phpunit
```

**Elimina** cualquier dependencia instalada que se encuentre en la sección *require* o *require-dev*.

```sh
composer remove
```

Elimina el *autoloader* y **reconstruye los ficheros**.

```sh
composer dump-autoload
```

**Busca** paquetes en el repositorio.

```sh
composer search faker
```

visualiza los **paquetes instalados con la versión**.

```sh
composer show -i
```

Visualiza las **versiones disponibles** del paquete.

```sh
composer show internet/ekt-shopping-cart-bundle --all
```

