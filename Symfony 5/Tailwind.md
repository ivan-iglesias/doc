# Tailwind

Instalar las siguientes paquetes

```sh
composer require symfony/webpack-encore-bundle

npm i -D @symfony/webpack-encore tailwindcss@latest postcss@latest postcss-loader@latest autoprefixer@latest
```

En la raiz del proyecto, crear los siguientes dos ficheros

`tailwind.config.js`

```js
module.exports = {
    purge: [
        './templates/**/*.html.twig',
        './templates/**/*.js',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {},
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
```

`postcss.config.js`

```js
module.exports = {
    plugins: [
        require('tailwindcss'),
        require('autoprefixer'),
    ]
}
```

Crear el siguiente fichero `assets/css/tailwind.css`

```css
@import "tailwindcss/base";
@import "tailwindcss/components";
@import "tailwindcss/utilities";
```

En el fichero `webpack.config.js`, añadir

```js
.addStyleEntry('tailwind', './assets/css/tailwind.css')
.enablePostCssLoader((options) => {
    options.postcssOptions = {
        config: './postcss.config.js',
    };
})
```

Para que el comando `npm run build` minifique el fichero css, añadir la siguiente variable de entorno, tener en cuenta que una vez añadido, el comando `npm i` no instalara los paquetes dev.

```sh
export NODE_ENV=production
```
