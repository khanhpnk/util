#### PHP null type

```php
$name = null;
var_dump($name);  // NULL
var_dump($email); // NULL (Warning)
```

#### PHP NULL and case-sensitivity

PHP keywords are case-insensitive.
Therefore, you can use null, Null, or NULL to represent the null value.

It’s a good practice to keep your code consistent use NULL in the uppercase

#### Testing for NULL

| $var    | is_null($var) | === NULL     | == NULL        |
| ------- | ------------- | ------------ | -------------- |
| null    | bool(true)    | bool(true)   | bool(true)     |
| 'foo'   | bool(false)   | bool(false)  | bool(false)    |
| ''      | bool(false)   | bool(false)  | ~~bool(true)~~ |