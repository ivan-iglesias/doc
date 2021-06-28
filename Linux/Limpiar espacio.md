# Limpiar Espacio

## Docker

[Referencia](https://www.freecodecamp.org/news/where-are-docker-images-stored-docker-container-paths-explained)

Para saber las imagenes, contenedores y volumenes usados

```
docker system df
```

Si queremos elimunar todos los contenedores parados, redes sin uso, imagenes sin contenedores asociados y la cache

```
docker system prune -a
```

Para eliminar individualmente los distintos elementos

```sh
# elimina volumenes no usados
docker volumes prune

# elimina imagenes no usadas
docker image prune

# elimina imagenes sin contenedores asociados o proyectos aprados
docker image prune --all
```

## /var/log/journal

Si la carpeta de `var/log` pesa demasiado lo mas seguro sea por `journal`, para ver su tamaño ejecutamos

```sh
journalctl --disk-usage
```

Se puede borrar manualmente pero la mejor forma es con

```sh
journalctl --vacuum-size=200M
```
