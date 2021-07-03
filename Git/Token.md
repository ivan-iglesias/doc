# Token

A partir de de agosto del 2021 github elimina la posibilidad de usar usuario/contraseña. A partir de dicha fecha usaremos los tokens.

[Crear Token](https://docs.github.com/en/github/authenticating-to-github/keeping-your-account-and-data-secure/creating-a-personal-access-token)

Una vez creado el token, cuando clonemos un proyecto añadiremos el token.

Si se trata de un proyecto ya descargado, cambiaremos el origen

```
git remote remove origin

git remote add origin https://<TOKEN>@github.com/<USERNAME>/<REPO>.git
```
