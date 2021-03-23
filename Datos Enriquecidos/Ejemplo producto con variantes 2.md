# Ejemplo producto con variantes 2

```json-ld
[
    {
        "@context": "http://schema.org/",
        "@type": "ProductGroup",
        "name": "Coat winter collection",
        "url": "https://www.example.com/coat",
        "brand": {
            "@type": "Thing",
            "name": "Good brand"
        },
        "audience": {
            "@type": "PeopleAudience",
            "suggestedGender": "unisex",
            "suggestedMinAge": 13
        },
        "productGroupID": "44E01",
        "variesBy": [ "size", "color" ],
        "hasVariant": [
            {
                "@context": "https://schema.org/",
                "@type": "Product",
                "sku": "44E01-M11000",
                "gtin14": "98766051104218",
                "image": "https://www.example.com/coat_small_green.jpg",
                "name": "Small green coat",
                "description": "Small wool green coat for winter",
                "color": "green",
                "size": "small",
                "offers": {
                    "@type": "Offer",
                    "url": "https://www.example.com/coat?s=s&c=g",
                    "priceCurrency": "USD",
                    "price": 39.99,
                    "itemCondition": "https://schema.org/NewCondition",
                    "availability": "https://schema.org/InStock"
                }
            },
            {
                "@context": "https://schema.org/",
                "@type": "Product",
                "sku": "44E01-K11000",
                "gtin14": "98766051104201",
                "image": "https://www.example.com/coat_small_darkblue.jpg",
                "name": "Small dark blue coat",
                "description": "Small dark blue coat for winter",
                "color": "light blue",
                "size": "small",
                "offers": {
                    "@type": "Offer",
                    "url": "https://www.example.com/coat?s=s&c=lb",
                    "priceCurrency": "USD",
                    "price": 39.99,
                    "itemCondition": "https://schema.org/NewCondition",
                    "availability": "https://schema.org/InStock"
                }
            },
            {
                "@context": "https://schema.org/",
                "@type": "Product",
                "sku": "44E01-X1100000",
                "gtin14": "98766051104391",
                "image": "https://www.example.com/coat_large_darkblue.jpg",
                "name": "Large dark blue coat",
                "description": "Large dark blue coat for winter",
                "color": "light blue",
                "size": "large",
                "offers": {
                    "@type": "Offer",
                    "url": "https://www.example.com/coat?s=l&c=lb",
                    "priceCurrency": "USD",
                    "price": 49.99,
                    "itemCondition": "https://schema.org/NewCondition",
                    "availability": "https://schema.org/InStock"
                }
            }
        ]
    }
]
```