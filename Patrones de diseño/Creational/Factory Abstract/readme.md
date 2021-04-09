# Factory Abstract

[Referencia](https://refactoring.guru/design-patterns/abstract-factory)

"Factory Abstract" es un patrón de diseño de creación que permite producir familias de objetos relacionados sin especificar sus clases concretas.

## Usos

Lo usaremos cuando el código necesite trabajar con varias familias de productos relacionados, pero no quiere que dependa de las clases concretas de esos productos.

Este patrón roporciona una interfaz para crear objetos de cada clase de la familia de productos. Mientras tu código cree objetos a través de esta interfaz, no tendrás que preocuparte por crear una variante incorrecta de un producto que no coincida con los productos ya creados por tu aplicación.

Contemplaremos usar este patrón cuando tengamos una clase con un conjunto de métodos que desdibujen su responsabilidad principal.

## Estructura

```php
interface AbstractFactory
{
    public function createProductA(): AbstractProductA;
    public function createProductB(): AbstractProductB;
}

class ConcreteFactory1 implements AbstractFactory
{
    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA1();
    }

    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB1();
    }
}

class ConcreteFactory2 implements AbstractFactory
{
    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA2();
    }

    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB2();
    }
}

interface AbstractProductA
{
    public function usefulFunctionA(): string;
}

class ConcreteProductA1 implements AbstractProductA
{
    public function usefulFunctionA(): string
    {
        return "The result of the product A1.";
    }
}

class ConcreteProductA2 implements AbstractProductA
{
    public function usefulFunctionA(): string
    {
        return "The result of the product A2.";
    }
}

interface AbstractProductB
{
    public function usefulFunctionB(): string;
    public function anotherUsefulFunctionB(): string;
}

class ConcreteProductB1 implements AbstractProductB
{
    public function usefulFunctionB(): string
    {
        return "The result of the product B1.1.";
    }

    public function anotherUsefulFunctionB(): string
    {
        return "The result of the product B1.2.";
    }
}

class ConcreteProductB2 implements AbstractProductB
{
    public function usefulFunctionB(): string
    {
        return "The result of the product B2.1.";
    }

    public function anotherUsefulFunctionB(): string
    {
        return "The result of the product B2.2.";
    }
}

function clientCode(AbstractFactory $factory)
{
    $productA = $factory->createProductA();
    $productB = $factory->createProductB();

    echo $productA->usefulFunctionA() . "\n";
    echo $productB->usefulFunctionB() . "\n";
    echo $productB->anotherUsefulFunctionB($productA) . "\n";
}

clientCode(new ConcreteFactory1());
clientCode(new ConcreteFactory2());
```
