# Borrar ramas en local

Para borrar todas las ramas en local ejecutamos el siguiente comando

```
git branch | grep -v "master" | xargs git branch -D
```

1. Obtengo todas las ramas.
2. Descarto master del listado anterior.
3. Borro las ramas del listado final.