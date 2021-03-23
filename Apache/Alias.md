# Alias

Para configurar un subdominio en apache2, añadimos `ServerAlias` en el virtual host.

```
<VirtualHost *:80>
	ServerName <app_name>.localhost
    ServerAlias subdominio.<app_name>.localhost

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
