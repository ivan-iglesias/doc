# Xdebug

## Instalar versión mas reciente

Por ahora solo he conseguido que funcione depurando paginas entrando con `127.0.0.1`, mediante `virtualhost` no funciona.

Añadir en el fichero `/etc/php/7.4/cli/php.ini` el siguiente texto

```
[xdebug]
xdebug.mode = debug
xdebug.start_with_request = yes
xdebug.client_port = 9003
xdebug.client_host = localhost
xdebug.discover_client_host = 1
```

Reiniciar apache

```sh
sudo service apache2 restart
```

## Instalar la version 2.9

https://xdebug.org/docs/install#compile


Descargar la versión 2.9 de la web de [versiones históricas](https://xdebug.org/download/historical) de xdebug.

```sh
# instalar php-dev para la versión de php que tengas
sudo aptitude install php7.4-dev

# descomprimir el fichero
tar -xzf xdebug-2.9.8.tgz

# ir a la carpeta
cd xdebug-2.9.8

# preparar entorno de compilación
phpize

# ejecutar el script configure
./configure --enable-xdebug

# realizar la instalación
make

sudo make install
```

Añadir el siguiente texto en los ficheros `/etc/php/7.4/cli/conf.d/20-xdebug.ini` (mirar por que no funciona, para solucionarlo lo añadimos en `/etc/php/7.4/apache2/php.ini`) y `/etc/php/7.4/cli/php.ini`

```
[xdebug]
zend_extension=xdebug.so
xdebug.remote_enable = 1
xdebug.remote_autostart = 1
xdebug.remote_handler=dbgp
xdebug.remote_port=9000
```

Reiniciar `apache2`

```sh
/etc/init.d/apache2 restart
```

## Problema

Con el comando `php -S 127.0.0.1:8888` funciona pero al intentar entrar a través del virtual host de Apache2 falla.

Esto es porque apache usa el fichero `/etc/php/7.4/apache2/php.ini` y el comando el `/etc/php/7.4/cli/php.ini`. Puede ser que solo se tenga el archivo de configuración en `/etc/php/7.4/cli/conf.d/20-xdebug.ini` y no en `/etc/php/7.4/apache2/conf.d/`, por lo que cuando se entra mediante Apache no tiene la configuración.

Para solucionarlo creamos un enlace simbólico y reiniciamos

```sh
sudo ln -s /etc/php/7.4/cli/conf.d/20-xdebug.ini /etc/php/7.4/apache2/conf.d/20-xdebug.ini

/etc/init.d/apache2 restart
```
