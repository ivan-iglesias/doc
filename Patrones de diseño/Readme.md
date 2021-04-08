# Patrones de diseño

- Los patrones de creación proporcionan mecanismos de creación de objetos que aumentan la flexibilidad y la reutilización del código existente.

- Los patrones estructurales explican cómo ensamblar objetos y clases en estructuras más grandes, manteniendo las estructuras flexibles y eficientes.

- Los patrones de comportamiento se encargan de la comunicación efectiva y la asignación de responsabilidades entre objetos.

https://refactoring.guru/design-patterns
https://www.tutorialspoint.com/design_pattern/singleton_pattern.htm
https://github.com.cnpmjs.org/code4mk/software-design-pattern/tree/main/behavioral

```php
<?php

interface AbstractFactory
{
    public function createProductA(): AbstractProductA;
    public function createProductB(): AbstractProductB;
}

/**
 * Una factoría concreta produce una familia de productos que pertenecen a un variante.
 * La factoria garantiza que los productos sean compatibles.
 */
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
