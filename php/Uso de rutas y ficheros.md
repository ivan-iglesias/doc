# Uso de rutas y ficheros

```php
# carpeta temporal del sistema
sys_get_temp_dir()

# crea una ruta
if (!is_dir($path)) {
	mkdir($path, 0755, true);
}

# copia un fichero
copy($fileSource, $fileDestination);

# tamaño del fichero
filesize($file);
```
