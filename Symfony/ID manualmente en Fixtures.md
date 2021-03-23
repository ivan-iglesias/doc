# ID manualmente en Fixtures

```php
public function removeAutogeneratorId(
    ObjectManager $manager,
    string $class
): ObjectManager
{
	$metadata = $manager->getClassMetadata($class);
	$metadata->setIdGenerator(new AssignedGenerator());
	$metadata->setIdGeneratorType(ClassMetadata::GENERATOR_TYPE_NONE);

	return $manager;
}
```
