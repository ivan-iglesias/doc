# JMS Serializer

```php
namespace AppBundle\Agenda\User;

use JMS\Serializer\Annotation as Serializer;

class User
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     */
    private $name;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("phone_number")
     */
    private $phoneNumber;
}
```

```php
namespace AppBundle\Agenda\TimeSchedule;

use JMS\Serializer\SerializerInterface;

class AgendaRepository
{
    private $serializer;

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    public function get(): array
    {
        $users = [/*....*/];

        return $this->serializer->deserialize(
            $users,
            'array<AppBundle\Agenda\User>',
            'json'
        );
    }
}
```