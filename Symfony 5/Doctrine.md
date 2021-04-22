# Doctrine

```php
$entityManager = $this->getEntityManager();

$query = $entityManager->createQuery(
    'SELECT p, c
    FROM App\Entity\Product p
    INNER JOIN p.category c
    WHERE p.id = :id'
)->setParameter('id', $productId);

return $query->getOneOrNullResult();
```
