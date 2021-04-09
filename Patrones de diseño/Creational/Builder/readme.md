# Builder

[Referencia](https://refactoring.guru/design-patterns/builder)

"Builder" es un patrón de diseño de creación que permite construir objetos complejos paso a paso. El patrón permite producir diferentes tipos y representaciones de un objeto utilizando el mismo código de construcción.

## Usos

- Con contructores con muchos parametros opcionales.
- Cuando queramos crear diferentes representaciones de un mismo producto (casa de madera, piedra, etc)

## Estructura

```php
interface Builder
{
    public function producePartA(): void;
    public function producePartB(): void;
}

class ConcreteBuilder implements Builder
{
    private $product;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->product = new Product();
    }

    public function producePartA(): void
    {
        $this->product->parts[] = "PartA1";
    }

    public function producePartB(): void
    {
        $this->product->parts[] = "PartB1";
    }

    public function getProduct(): Product
    {
        $result = $this->product;
        $this->reset();
        return $result;
    }
}

class Product
{
    public $parts = [];

    public function listParts(): void
    {
        echo "Product parts: " . implode(', ', $this->parts);
    }
}

/**
 * El director solo es responsable de ejecutar los pasos del constructor.
 */
class Director
{
    private $builder;

    public function setBuilder(Builder $builder): void
    {
        $this->builder = $builder;
    }

    public function buildMinimalViableProduct(): void
    {
        $this->builder->producePartA();
    }

    public function buildFullFeaturedProduct(): void
    {
        $this->builder->producePartA();
        $this->builder->producePartB();
    }
}

$director = new Director();
$builder = new ConcreteBuilder();
$director->setBuilder($builder);

// Producto estandar
$director->buildMinimalViableProduct();
$builder->getProduct()->listParts();

// Producto completo
$director->buildFullFeaturedProduct();
$builder->getProduct()->listParts();

// Producto personalizado (podemos usarlo sin la clase directora)
$builder->producePartB();
$builder->getProduct()->listParts();
```
