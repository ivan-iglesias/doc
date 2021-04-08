# Strategy

Patrón de diseño de comportamiento que le permite definir una familia de algoritmos, poner cada uno de ellos en una clase separada y hacer que sus objetos sean intercambiables.

[Referencia](https://refactoring.guru/design-patterns/strategy)

## Usos

- Cuando se desee utilizar diferentes variantes de un algoritmo dentro de un objeto y poder cambiar de un algoritmo a otro durante el tiempo de ejecución.

- Cuando se tenga muchas clases similares que sólo se diferencian en la forma de ejecutar algún comportamiento.

- Aislar el código, los datos internos y las dependencias de varios algoritmos del resto del código. Varios clientes obtienen una interfaz sencilla para ejecutar los algoritmos y cambiarlos en tiempo de ejecución.

- Cuando su clase tenga un operador condicional que cambie entre diferentes variantes del mismo algoritmo.

## Estructura

```php
class Context
{
    private $strategy;

    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function doSomeBusinessLogic(): void
    {
        echo "Context: Sorting data using the strategy (not sure how it'll do it)\n";
        $result = $this->strategy->doAlgorithm(["a", "b", "c", "d", "e"]);
        echo implode(",", $result) . "\n";
    }
}

interface Strategy
{
    public function doAlgorithm(array $data): array;
}

class ConcreteStrategyA implements Strategy
{
    public function doAlgorithm(array $data): array
    {
        sort($data);
        return $data;
    }
}

class ConcreteStrategyB implements Strategy
{
    public function doAlgorithm(array $data): array
    {
        rsort($data);
        return $data;
    }
}

$context = new Context(new ConcreteStrategyA());
$context->doSomeBusinessLogic();
$context->setStrategy(new ConcreteStrategyB());
$context->doSomeBusinessLogic();
```
