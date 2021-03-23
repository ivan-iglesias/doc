# Encode

```php
public function encodeUtf8ToUtf16($text)
{
	$text = preg_replace_callback('/\\\\u([0-9a-fA-F]{4})/', function ($match) {
		return mb_convert_encoding(pack('H*', $match[1]), 'UTF-8', 'UTF-16BE');
	}, $text);

	$text = str_replace("\\\"", "''", $text);

	return stripslashes($text);
}
```
