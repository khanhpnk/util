#### PHP isset() vs empty() vs is_null()

| $var              | isset($var)   | is_null($var) | empty($var)    |
| ----------------- | ------------- | ------------- | -------------- |
| 'foo'             | bool(true)    | bool(false)   | bool(false)    |
| null              | bool(false)   | bool(true)    | **bool(true)** |
| ''                | bool(true)    | bool(false)   | bool(true)     |
| '0' or 0 or 0.0   | bool(true)    | bool(false)   | ~~bool(true)~~ |
| FALSE             | bool(true)    | bool(false)   | ~~bool(true)~~ |
| TRUE              | bool(true)    | bool(false)   | bool(false)    |