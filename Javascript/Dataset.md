# Dataset

Pasar datos a js mediante dataset

```html
<div
    class="js-data"
    data-name="John"
    data-last-name="Doe">
</div>
```

```js
const div = document.querySelector('.js-data');

if (div != null) {
    const name = div.dataset.name;
    const lastName = div.dataset.lastName;
}
```
