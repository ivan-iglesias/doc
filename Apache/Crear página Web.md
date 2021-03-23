# Crear página Web

Situarnos en sites-available

```sh
cd /etc/apache2/sites-available
```

crear una copia del fichero por defecto y editarlo

```sh
sudo cp 000-default.conf <app_name>.conf
```

Habilitar el fichero conf y cargarlo

```sh
sudo a2ensite <app_name>.conf
systemctl reload apache2
```

Añadir la siguiente linea en `/etc/hosts`. No usar ".app", ".dev", etc.

```sh
127.0.0.1    <app_name>.localhost
```

reiniciar apache

```sh
sudo service apache2 restart
```

Ejemplo de fichero `.conf`

```
<VirtualHost *:80>
    ServerName <proyect_name>.localhost
	DocumentRoot "/home/<user>/code/<app_name>/web"

    <Directory "/home/<user>/code/<app_name>/web">
        AllowOverride All
        Require all granted
        Allow from All
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```
