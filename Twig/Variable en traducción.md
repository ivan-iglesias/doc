# Variable en traducción

En el fichero de traducciones

```yml
text: 'Esta es tu <a href="@url">dirección</a>'
```

En la plantilla twig, se completa de la siguiente forma

```
{% set text = 'text'|trans({'@url': path('user_url')}) %}
```
