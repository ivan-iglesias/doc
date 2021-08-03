# Bootstrap

Instalar las siguientes paquetes

```sh
composer require symfony/webpack-encore-bundle

npm i sass sass-loader@^12.0.0 --save-dev
npm i postcss-loader autoprefixer --dev
npm i bootstrap

# si vamos a usar componenes de bootstrap con js
npm i @popperjs/core
```

Crear el fichero `postcss.config.js` con el siguiente contenido en la raiz del proyecto

```js
module.exports = {
    plugins: {
        // include whatever plugins you want
        // but make sure you install these via yarn or npm!
        autoprefixer: {}
    }
}
```

En el fichero `webpack.config.js`, descomentar

```js
.enableSassLoader()
```

y en el fichero `assets/app.js`, añadir la siguiente línea

```js
import { Tooltip, Toast, Popover } from 'bootstrap';
```

y modificar la siguienre, cambiando `.css` a `scss`

```js
import './styles/app.scss';
```

En la ruta `assets/styles`, crear los siguiente ficheros:

**app.scss**

```
@import "custom";
@import "~bootstrap/scss/bootstrap";
```

**custom.scss**

```
$primary:   red;
$secondary: red;
$success:   red;
$info:      red;
```

Para compilar el scss, ejecutar

```sh
npm run build
```
