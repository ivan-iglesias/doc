# Eliminar elemento gitignore

Si tenemos N ficheros en el index pero deseamos eliminarlos mediante .gitignore, tendremos que seguir los siguientes pasos

```
git rm -r --cached folder/
git add .
git commit -m ".gitignore is now working"
```
