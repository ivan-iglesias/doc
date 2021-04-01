# Copiar fichero a public

Instalar el siguiente paquete

```sh
npm i -D file-loader@latest
```

En el fichero `webpack.config.js`, añadir

```js
.copyFiles({
    from: './assets/images',

    // optional target path, relative to the output dir
    to: 'images/[path][name].[ext]',

    // if versioning is enabled, add the file hash too
    to: 'images/[path][name].[hash:8].[ext]',

    // only copy files matching this pattern
    //pattern: /\.(png|jpg|jpeg)$/
})
```

Cuando se ejecute `npm run dev` o `npm run build` las imagenes de la carpeta `assets/images` serán copiadas a la carpeta `public/build/images`.
