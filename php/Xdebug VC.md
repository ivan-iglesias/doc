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

make install
```

Añadir en el fichero `/etc/php/7.4/cli/conf.d/20-xdebug.ini` o en el `/etc/php/7.4/cli/php.ini` el siguiente texto

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




Con este comando funcionaba php -S 127.0.0.1:5555 pero al intentar entrar a través del vhost de Apache2 fallaba

Esto es porque el php.ini que usa apache está en /etc/php/7.4/apache2/php.ini y el que utiliza el comando php -S [...] es este /etc/php/7.4/cli/php.ini. Y claro yo solo tenía el archivo de configuración en /etc/php/7.4/cli/conf.d/20-xdebug.ini y no en /etc/php/7.4/apache2/conf.d/. Por lo que cuando entraba por el dominio por Apache no hacia ni caso porque le faltaba el archivo de configuración.

Entonces lo que he hecho es sudo ln -s /etc/php/7.4/cli/conf.d/20-xdebug.ini /etc/php/7.4/apache2/conf.d/20-xdebug.ini para tenerlos igual siempre

Luego sudo /etc/init.d/apache2 restart

Y ya ha empezado a funcionar

11:50



Como ves, el archivo/directorio de configuración de apache era otro, donde no estaba el 20-xdebug.conf