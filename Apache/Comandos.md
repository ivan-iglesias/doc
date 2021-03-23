# Comandos

```sh
# habilitar aplicacion
sudo a2ensite <config_file>.conf

# deshabilitar aplicacion
sudo a2dissite <config_file>.conf

# habilitar modulo de Apache (rewrite)
sudo a2enmod rewrite

# deshabilitar modulo
sudo a2dismod rewrite

# habilitar configuracion
sudo a2enconf <config_file.conf>

# deshabilitar configuracion
sudo a2disconf <config_file.conf>

# comprobar que los ficheros conf esten bien
apachectl configtest

# estado y reinicio
systemctl status apache2
systemctl reload apache2

service apache2 status
service apache2 restart
```
