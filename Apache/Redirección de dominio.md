# Redirección de dominio

Para hacer una redirección permantente de "www.misitio.com" a "misitio.com", crear un nuevo virtualhost para "www.misitio.com" que redirija todo a "misitio.com":

```
<VirtualHost *:80>
    ServerName www.misitio.com
    RedirectMatch permanent ^/(.*)$ https://misitio.com/$1
</VirtualHost>
```

Tiene que ser con el permanent para que haga la redireccion con un 301 en vez de la 302. La diferencia está básicamente en la caché del navegador, si el navegador recibe un 302 (temporal), la próxima vez que pidas "www.misitio.com" va a volver a pedirlo al servidor por si ha vuelto a cambiar. Con un 301 (permanente), lo cachea y la próxima vez que pidas "www.misitio.com" el navegador pedirá directamente el destino de la redirección.
