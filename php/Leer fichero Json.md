Leer fichero Json

# Leer fichero Json

Leer un fichero json

```php
$filePath = dirname(__DIR__, 2) . '/path/to/file.json';

$data = json_decode(file_get_contents($filePath), true);
```
