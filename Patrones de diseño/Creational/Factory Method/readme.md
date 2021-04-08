# Factory Method

Patrón de diseño de creación que proporciona una interfaz para crear objetos en una superclase, pero permite a las subclases modificar el tipo de objetos que se crearán.

[Referencia](https://refactoring.guru/design-patterns/factory-method)

## Usos

- Lo usaremos cuando no conozcamos de antemano los tipos y dependencias exactas de los objetos con los que debemos trabajar.

  El método Factory separa el código de construcción del producto del código que realmente lo utiliza. Por lo que es más fácil extender el código de construcción del producto independientemente del resto del código.

- Cuando queramos proporcionar a los usuarios de la biblioteca o framework una forma de extender sus componentes internos.

  La herencia es probablemente la forma más fácil de extender el comportamiento por defecto de una biblioteca o framework. Pero, ¿cómo reconocerá el framework que tu subclase debe ser utilizada en lugar de un componente estándar? La solución es reducir el código que construye los componentes en todo el framework a un único método de fábrica y dejar que cualquiera anule este método además de extender el propio componente.

## Estructura

```php
abstract class Creator
{
    abstract public function factoryMethod(): Product;

    /**
     * Su función principal no es crear productos, contiene lógica de negocio
     * que depende del producto devuelto por la función "factoryMethod".
     */
    public function someOperation(): string
    {
        $product = $this->factoryMethod();

        return "Creator: " . $product->operation();
    }
}

class ConcreteCreator1 extends Creator
{
    public function factoryMethod(): Product
    {
        return new ConcreteProduct1();
    }
}

class ConcreteCreator2 extends Creator
{
    public function factoryMethod(): Product
    {
        return new ConcreteProduct2();
    }
}

interface Product
{
    public function operation(): string;
}

class ConcreteProduct1 implements Product
{
    public function operation(): string
    {
        return "{Result of the ConcreteProduct1}";
    }
}

class ConcreteProduct2 implements Product
{
    public function operation(): string
    {
        return "{Result of the ConcreteProduct2}";
    }
}

function clientCode(Creator $creator)
{
    echo "Client: " . $creator->someOperation();
}

clientCode(new ConcreteCreator1());
clientCode(new ConcreteCreator2());
```
