# Codificación

Codifica una cadena en base-64:

```js
encodedText = window.btoa(text);
```

Codifica un URI sustituyendo caracteres por una secuencias de escape que representan la codificación UTF-8 del carácter.

```js
encodedText = encodeURI(text);

encodedText = encodeURIComponent(text);
```

Decodifica el resultado de las funciones anteriores

```js
text = decodeURI(encodedText);

text = decodeURIComponent(encodedText);
```
