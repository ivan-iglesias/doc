# Ajax

```js
jQuery.ajax({
    type: "POST",
    url: "/ws-internal/eroski/card/link",
    data: jsonData,
    success:function(response){
        jQuery(".js-eroski-loquiero-ok").click();
    },
    error: function(xhr, status, error) {
        const response = JSON.parse(xhr.responseText);

        const branCodeError = (typeof response.codeBran !== 'undefined')
            ? response.codeBran
            : -10;

        if (branCodeError == 12509) {
            $("#modal_quiero_ko .content-default").hide();
            $("#modal_quiero_ko .content-cmn").show();
        } else {
            $("#modal_quiero_ko .content-default").show();
            $("#modal_quiero_ko .content-cmn").hide();
        }

        jQuery(".js-eroski-loquiero-ko").click();
    }
})
```
