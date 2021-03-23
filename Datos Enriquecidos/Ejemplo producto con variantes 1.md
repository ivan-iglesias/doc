# Ejemplo producto con variantes 1

```json-ld
{
    "@context": "http://schema.org/",
    "@type": "Product",
    "deviceType": "terminal",
    "name": "iPhone 11",
    "description": "XIAOMI REDMI NOTE 9",
    "sku": "11111111111111111110",
    "url": "https://euskaltel.com/iphone-11.html",
    "offers": {
        "@type": "AggregateOffer",
        "lowPrice": 599.00,
        "highPrice": 899.00,
        "priceCurrency": "EUR",
        "availability": "https://schema.org/InStock"
    },
    "additionalProperty": [
        {
            "@type": "PropertyValue",
            "name": "generic",
            "value": [
                {
                    "@type": "PropertyValue",
                    "name": "procesador",
                    "value": "molon"
                }
            ]
        },
        {
            "@type": "PropertyValue",
            "name": "multimedia",
            "value": [
                {
                    "@type": "PropertyValue",
                    "name": "MP3",
                    "value": "1"
                }
            ]
        }
    ],
    "model": [
        {
            "@type": "ProductModel",
            "sku": "11111111111111111111",
            "name": "iPhone 11",
            "image": "https://estatico.euskaltel.com/aaa.png",
            "offers": {
                "@type": "Offer",
                "availability": "https://schema.org/InStock",
                "price": 599.00,
                "priceCurrency": "EUR",
                "installment": {
                    "initial": 119.0,
                    "fee": 35.0,
                    "months": 24
                }
            },
            "additionalProperty": {
                "@type": "PropertyValue",
                "name": "storage",
                "category": "generic",
                "unitText": "GB",
                "value": "64"
            }
        },
        {
            "@type": "ProductModel",
            "sku": "11111111111111111112",
            "name": "iPhone 11",
            "image": "https://estatico.euskaltel.com/bbbb.png",

            "offers": {
                "@type": "Offer",
                "availability": "http://schema.org/OutOfStock",
                "price": 899.00,
                "priceCurrency": "EUR",
                "installment": {
                    "initial": 119.0,
                    "fee": 35.0,
                    "months": 24
                }
            },
            "additionalProperty": {
                "@type": "PropertyValue",
                "name": "Storage",
                "category": "generic",
                "unitText": "GB",
                "value": "64"
            }
        }
    ]
}
```