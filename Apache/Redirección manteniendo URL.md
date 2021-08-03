# Redirección manteniendo URL

Listar módulos activos

```
apache2ctl -M
```

Enable mod_rewrite in Apache

```
sudo a2enmod rewrite_module
```

Enable mod_proxy in Apache

```
sudo a2enmod proxy
sudo a2enmod proxy_http
sudo a2enmod proxy_balancer
sudo a2enmod lbmethod_byrequests
```

```
sudo service apache2 restart
```

```
RewriteEngine On

RewriteCond %{HTTP_HOST} ^(www\.)?example\.com$ [NC]
# RewriteCond %{HTTP_HOST} ^telecable.localhost$ [NC]
# RewriteCond %{REQUEST_URI} ^/aviso-legal

RewriteRule ^ http://www.example1.com%{REQUEST_URI} [L,NE,P]
```



