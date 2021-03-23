# Swagger

```php
@SWG\Response(
    response=200,
    description="Crea un nuevo color.",
    @SWG\Schema(
        type="object",
        @Model(type=Color::class),
    )
)
```

```php
use Nelmio\ApiDocBundle\Annotation\Model;

@SWG\Response(
    response=200,
    description="Listado de los variantes existentes.",
    @SWG\Schema(
        type="array",
        @SWG\Items(
            ref=@Model(type=VariantType::class)
        )
	)
)
```

```php
@SWG\Response(
    response=200,
    description="Array de medias encontrados.",
    @SWG\Schema(
        type="object",
        @SWG\Property(
            property="links",
            type="object",
            @SWG\Property(property="prev", type="string"),
            @SWG\Property(property="next", type="string")
        ),
        @SWG\Property(
            property="data",
            type="array",
            @SWG\Items(
                @SWG\Property(property="name", type="string"),
                @SWG\Property(property="brands", type="array"
                    @SWG\Items(
                        @SWG\Property(property="id", type="integer"),
                        @SWG\Property(property="slug", type="string")
                    )
                )
            )
        )
    )
)
```
