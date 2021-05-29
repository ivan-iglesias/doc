# Enviar datos

## Form

```js
function submit(url, params) {
    const form = document.createElement('form');
    form.method = 'GET';
    form.action = url;

    for (const key in params) {
        if (params.hasOwnProperty(key)) {
            const hiddenField = document.createElement('input');
            hiddenField.type = 'hidden';
            hiddenField.name = key;
            hiddenField.value = params[key];
            form.appendChild(hiddenField);
        }
    }

    document.body.appendChild(form);
    form.submit();
}
```

## FormData

```js
    let formData = new FormData();

    formData.append("Campo 1", "Valor 1");
    formData.append("Campo 2", "Valor 2");

    for(let [name, value] of formData) {
        console.log(`${name} = ${value}`);
    }
```

## Cookies

```js
const expires = new Date(Date.now() + 1000).toUTCString()
document.cookie = `oauth-username=user123; expires=${expires}`
window.location.href = `https:foo.com/oauth/google/link`
```
