# Git pide password

Para que no pida la clave en los comandos de git, añadiremos la clave privada al `ssh-agent`

Inicializar el `ssh-agent` si no lo esta

```sh
eval `ssh-agent -s`
```

Añadir la clave privada, pedira la contraseña

```sh
ssh-add ~/.ssh/id_rsa_key
```

Comprobar que la clave esta añadida

```sh
ssh-add -l
```
