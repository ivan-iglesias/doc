# Redirecciones

```
RewriteRule ^empresas/pymes(.*)$ /empresas$1  [R=301,L]

RewriteRule ^particulares/ayuda$ /ayuda [R=301,L]

RewriteRule ^nuevaoferta$ https://info.telecable.es/evolucionamos/ [R=301,L]
```

302 crea redirecciones temporales, la 301 permanentes
