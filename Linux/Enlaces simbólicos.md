# Enlaces simbólicos

Un enlace simbólico (symlink) es un tipo de archivo que apunta a otro archivo. Se usan como accesos directos, asi como proveer mayor seguridad a los archivos ejecutables, ya que permiten su ejecución pero no edición.

Existen los enlaces simbólicos duros (enlace fijo), los cuales apuntan directamente al inodo del archivo principal. En este caso el enlace será válido, incluso si mueves el archivo principal.

```sh
# crear un enlace simbólico
ln -s file.txt file_symbolic

# crear un enlace simbólico duro
ln file.txt file_symbolic

# borrar un enlace
rm file_symbolic

# borrar varios enlaces
rm file_symbolic file_symbolic1 file_symbolic2

# borrar un enlace simbólico o duro que se encuentra en una ruta
rm -f /demo/file_symbolic
```
