# Singleton

[Referencia](https://refactoring.guru/design-patterns/singleton)

Singleton es un patrón de diseño de creación que le permite asegurar que una clase tiene sólo una instancia, proporcionando un punto de acceso global a esta instancia.

## Usos

- Lo usaremos cuando una clase deba tener una única instancia disponible para todos los clientes; por ejemplo, un objeto de base de datos compartido.

- Cuando necesite un control más estricto de las variables globales.

## Estructura

```php
class Singleton
{
    public static function getInstance()
    {
        static $instance = null;

		if ($instance === null) {
			$instance = new static();
		}
		return $instance;
    }

    private function __construct()
    {
        // Private to disabled instantiation.
    }

    private function __clone()
    {
        // Cannot clone a singleton.
    }

    private function __sleep()
    {
        // Cannot serialize a singleton.
    }

    private function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }
}

class Database extends Singleton
{
    protected $userName;

    public function setUserName(string $userName): void
    {
        $this->userName = $userName;
    }

    public function printUserName(): void
    {
        echo $this->userName . PHP_EOL;
    }
}

$database1 = Database::getInstance();
$database1->setUserName('John');
$database1->printUserName();

$database2 = Database::getInstance();
$database2->printUserName();

$database2->setUserName('Jane');
$database1->printUserName();
$database2->printUserName();
```
