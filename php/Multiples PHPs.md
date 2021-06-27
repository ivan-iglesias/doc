# Multiples PHPs

[Referecia](https://www.linuxbabe.com/ubuntu/php-multiple-versions-ubuntu)

Mediante este procedimiento podremos tener instaladas multiples version PHP en nuestra versión Linux Ubuntu o derivada.

## Instalamos las versiones PHP deseadas.

Añadimos el siguiente repositorio

```
sudo apt install software-properties-common
sudo add-apt-repository ppa:ondrej/php
sudo apt update
```

Instalamos las versiones deseadas y algunas extensiones comúnes

```
sudo apt install php8.0 php8.0-fpm
sudo apt install php8.0-mysql php8.0-mbstring php8.0-xml php8.0-gd php8.0-curl
```

```
sudo apt install php7.4 php7.4-fpm
sudo apt install php7.4-mysql php7.4-mbstring php7.4-xml php7.4-gd php7.4-curl
```

## Comfigurar Apache para seleccionar versión PHP

Por defecto, Apache usa la misma versión de PHP en todos los virtual hosts. Para poder usar diferentes versiones tendremos que deshabilitar y habilitar los siguientes módulos de Apache.

Comprobar si mod_php esta deshabilitado.

```
dpkg -l | grep libapache2-mod-php
```

Si esta habilitado, aparecera algo como `libapache2-mod-php7.4`, deshbailitarlo.

```
sudo a2dismod php7.4
```

Tambien deshabilitar el siguiente módulo.

```
sudo a2dismod mpm_prefork
```

Para usar PHP-FPM, habilitamos los siguientes

```
sudo a2enmod mpm_event proxy_fcgi setenvif
```

## Crear un Virtual Host

Nos sitamos en la siguiente carpeta y creamos una copia del `default.conf`

```
cd /etc/apache2/sites-available/

sudo cp 000-default.conf test-php80.conf
```

Editando el fichero, en el `Include`, estableceremos la configuración PHP a usar, de las cuales tenemos plantillas de configuración PHP-FPM situadas en `/etc/apache2/conf-available/`.

```
<VirtualHost *:80>
    ServerName test-php80.local
    DocumentRoot /home/ivan/code/test-php80

    <Directory /home/ivan/code/test-php80>
        DirectoryIndex index.php
        Options +FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined

    Include /etc/apache2/conf-available/php8.0-fpm.conf
</VirtualHost>
```

Comprobarmos que la sintaxis esta bien, habilitamos el Virtual Hosts y reiniciamos Apache.

```
sudo apachectl -t
sudo a2ensite test-php87.conf 
systemctl reload apache2
```

En el código de la página añadiremos un `phpinfo` para comprobar que devuelve la versión esperada.

```php
<?php

phpinfo();
```

Acordaros de añadir la entrada correspondiente al fichero `/etc/hosts`

```
127.0.0.1      test-php80.local
```

## Versión por defecto para la línea de comandos

Para establecer la versión por defecto que se usará en la línea de comandos ejecutamos

```
sudo update-alternatives --config php
```

Con dicho comando nos aparecera un listado de las versiones disponibles, donde tendremos que introducir el id de la versión a usar.

Para comprobar la versión usada ejecutamos

```
php --version
```
