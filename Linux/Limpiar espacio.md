# Limpiar Espacio

## Docker

*Referencia*: [https://www.freecodecamp.org](https://www.freecodecamp.org/news/where-are-docker-images-stored-docker-container-paths-explained)

Para limpiar contenedores parados, redes sin uso, imagenes sin contenedores asociadosy la cache

```sh
docker system prune -a
```

Para limpiar volumenes no usados

```sh
docker volumes prune
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
