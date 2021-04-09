# Prototype

[Referencia](https://refactoring.guru/design-patterns/prototype)

Patrón de diseño de creación que le permite copiar objetos existentes sin que su código dependa de sus clases.

Para crear una copia de un objeto, primero hay que crear un nuevo objeto de la misma clase. Luego recorreremos todos los campos del objeto original y copiaremos sus valores en el nuevo objeto. No todos los objetos pueden ser copiados de esa manera porque algunos de los campos del objeto pueden ser privados y no visibles desde fuera del propio objeto.

El patrón "Prototype" delega el proceso de clonación en los objetos reales que se están clonando.

## Usos

- Utilizaremos este patrón cuando el código no deba depender de las clases de los objetos que se necesitan copiar.

- Reducir el número de subclases que sólo se diferencian en la forma de inicializar sus respectivos objetos. Conjunto de objetos preconstruidos, configurados de diversas maneras, como prototipos.

## Estructura

```php
class Prototype
{
    public $primitive;
    public $component;
    public $circularReference;

    /**
     * PHP tiene soporte de clonación incorporado. Los objetos clonados conservan
     * sus referencias originales por lo que podríamos clonar las referencias.
     */
    public function __clone()
    {
        $this->component = clone $this->component;

        /**
         * Clonar un objeto que tiene un objeto anidado con retro-referencia requiere
         * un tratamiento especial. Una vez completada la clonación, el objeto anidado
         * debe apuntar al objeto clonado, en lugar del objeto original.
         */
        $this->circularReference = clone $this->circularReference;
        $this->circularReference->prototype = $this;
    }
}

class ComponentWithBackReference
{
    public $prototype;

    /**
     * El constructor no se ejecutará durante la clonación. Si se tiene una lógica
     * compleja dentro del constructor, puede que se necesite ejecutar en el "__clone".
     */
    public function __construct(Prototype $prototype)
    {
        $this->prototype = $prototype;
    }
}

function clientCode()
{
    $p1 = new Prototype();
    $p1->primitive = 245;
    $p1->component = new \DateTime();
    $p1->circularReference = new ComponentWithBackReference($p1);
    $p2 = clone $p1;

    if ($p1->primitive === $p2->primitive) {
        echo "Primitive field values have been carried over to a clone. Yay!\n";
    }
    if ($p1->component !== $p2->component) {
        echo "Simple component has been cloned. Yay!\n";
    }

    if ($p1->circularReference !== $p2->circularReference) {
        echo "Component with back reference has been cloned. Yay!\n";
    }

    if ($p1->circularReference->prototype !== $p2->circularReference->prototype) {
        echo "Component with back reference is linked to the clone. Yay!\n";
    }
}

clientCode();
```
