# Json Parse

Parsear datos con formato json

```html
<script id="data" type="application/ld+json">
    {{ device|raw }}
</script>

<script>
    const data = JSON.parse(document.getElementById("data").text);
    console.log(data);
</script>
```