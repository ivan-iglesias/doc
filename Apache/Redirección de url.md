# Redirección de url

En el fichero `.htaccess`, añadimos las siguientes líneas.

Para permitir hacer uso del módulo mod_rewrite y poder reescribir o redireccionar URLs

```
RewriteEngine On
```

Una redirección de ejemplo sería

```
RewriteRule ^url/originen$ /url/destino [R=302,L]
```

A continuación pongo algunos de los [flags](https://httpd.apache.org/docs/2.4/rewrite/flags.html) mas usados:

- `QSA` Añade la cadena de la consulta a la URL que sustituye.
- `L` Este flag indica last o último. Si se cumplen todas las condiciones (RewriteCond), al llegar a esta regla de RewriteRule, se dejan de leer el resto de reglas.
