# Comandos

**composer update / composer u**

Solo usarse en *desarrollo* y en fase de *pruebas*. Actualiza las dependencias que encuentre en el *composer.json* a su última versión y sobreescribe los ficheros *composer.json* y *composer.lock*.

**composer install / composer i**

Se puede usar en *desarrollo*, *pruebas* y *producción*. Instala las dependencias que encuentre en el fichero *composer.lock*, si no esta, hará un *composer update* y lo creará. Por esta razón siempre hay que subirlo a producción.

**composer require phpunit/phpunit**

Instala y añade dependencias en la sección *require* del fichero *composer.json*.

```sh
composer require middlewares/whoops "^4.0"
composer require middlewares/whoops:4.1"
```

**composer require --dev phpunit/phpunit**

Instala y añade dependencias en la sección *require-dev* del fichero *composer.json*. Solo se usaran en desarrollo y pruebas.

**composer remove**

Elimina cualquier dependencia instalada que se encuentre en la sección *require* o *require-dev*.

**composer dump-autoload**

Elimina el *autoloader* y reconstruye los ficheros.

**composer search faker**

Busca paquetes en el repositorio.

**composer show -i**

visualiza los paquetes instalados con la versión.

**composer show internet/ekt-shopping-cart-bundle --all**

Visualiza las versiones disponibles del paquete.

**composer global require phpunit/phpunit**

Instala paquetes en el directorio global de composer para poder ser usados en cualquier sitio.
