# Diseño de esquema

### Datos redundantes

Dividir tabla en subtablas cuando tengamos datos redundantes.

|id|name|department|
|-|-|-|
|1|Alex|Eng|
|2|Bob|Design|
|3|Ada|Eng|

Creamos una tabla para departamentos, la cúal tendrá una relacion *OneToMany* con user.

|id|name|department_id|
|-|-|-|
|1|Alex|1|
|2|Bob|2|
|3|Ada|1|

|id|name|
|-|-|
|1|Eng|
|2|Design|

### Campos null

Evitar los campos null. Dichos campos tienen dos inconvenientes:

1. No se puede indexar conlumnas con campos null
2. Desperdicio de espacio, ya que se reservará el espacio del tipo de columna.

Para evitar esta situación,

|id|name|certificate|
|-|-|-|
|1|Alex|React Basics|
|2|Bob|Ruby Adv|
|3|Ada|null|
|4|Sheva|Ruby Adv|

Creamos una tabla de certificados teniendo una relación *OneToMany* con user.

|id|name|
|-|-|
|1|Alex|
|2|Bob|
|3|Ada|
|4|Sheva|

|user_id|name|
|-|-|
|1|React Basics|
|2|Ruby Adv|
|4|Ruby Adv|

### Constantes

Para definir constantes, o un número finito de valores usados en diferentes tablas, nunca usarlos directamente en las tablas en cuestión. Para evitar esta redundancia, creamos una tabla con estos valores , por lo que si queremos actualizarlo solo lo haremos en un sitio.