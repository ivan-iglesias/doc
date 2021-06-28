# Añadir meta

Añadir un tag meta mediante js

```js
let meta = document.createElement('meta');
meta.name = "robots";
meta.content = "noindex, nofollow";
document.getElementsByTagName('head')[0].appendChild(meta);
```

Tambien podemos añadirlo de la siguiente forma

```js
document.head.innerHTML += '<meta name="robots" content="noindex, nofollow">'
```
