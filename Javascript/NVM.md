# Node Version Manager

*Referencia*: [NVM](https://github.com/nvm-sh/nvm)

NVM es un script bash para administrar multiples versiones de Node.js activas. Con NVM se pueden instar y desinstalar cualquier versión específica de Node.js.

## Instalación

```sh
# instalar NVM
curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.35.3/install.sh | bash

# cerrar, abrir el terminal y probar que este instalado
nvm --version

# instalar Node.js
nvm install node

# comprobar la versión instalada
node --version
```

## Comandos Básicos

```sh
# instalar una versión en concreto
nvm install 8.10.0

# listar versiones instaladas
nvm ls

# establecer la verión a usar
nvm use 8.10.0

# cambiar la versión por defecto
nvm alias default 8.10.0
```

