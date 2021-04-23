# Calidad de código

```
https://github.com/symplify/easy-coding-standard
https://phpmd.org/
phpstan
```

## Comprobación de código

[easy-coding-standard](https://github.com/symplify/easy-coding-standard)

```sh
# comprobar estilos
vendor/bin/ecs check {path-carpeta}

# comprobar y corregir estilos
vendor/bin/ecs check {path-carpeta} --fix
```

[phpmd](https://phpmd.org/documentation/suppress-warnings.html)

```sh
vendor/bin/phpmd {path-carpeta} text cleancode
```