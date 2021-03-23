# Habilitar modulo

Para habilitar CORS en apache debemos de añadir la siguiente cabcera en el fichero `.htaccess`

```
 Header set Access-Control-Allow-Origin "*"
```

```sh
# habilitar el modulo headers
a2enmod headers

# reinicar apache
sudo systemctl restart apache2

# listar modulos activos
apache2ctl -M

# comprobar la configuración de apache
sudo apachectl -t
```
