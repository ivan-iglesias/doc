# Cabeceras HTTP

 [Securityheaders](https://securityheaders.com/) es una página web para comprobar el estado de las cabeceras.

## Content-Security-Policy (CSP)

Permite a los navegadores protegerse de contenido indeseado

```
default-src 'none'; script-src 'self'; style-src 'self'; img-src 'self' data:; font-src 'self'
```

## X-Frame-Options

Quien te puede meter un iframe.

## X-Content-Type-Options

Obliga a los navegadores a respetar la cabecera "Content-Type"

## X-Xss-Protection

Obsoleta pero todavía usada, en su lugar se usaria el CSP.

## Permissions-Policy

Indica que APIs del navegado se tiene intención de utilizar, por ejemplo la ubicación, microfono, cámara, etc. Es nueva y reemplaza a Feature-Policy.

## Referrer-Policy

Configurar la politica de uso de Referer en las peticiones subseccuentes a la incial. Si clicamos un enlace a una paquina externa, podemos indicar que solo ponga el dominio y no mande un token.

Referer = de donde vienes.

## Strict-Transport-Security

Una vez conectado por HTTPS a un servidor web, esta cabcera el tiempo en el que el navegador automaticamente redirigira todas las peticiones HTTP en HTTPS.

curl -k -I -L https://test.local
docker run -d --
