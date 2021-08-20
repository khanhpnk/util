<p align="center">
<img src="https://camo.githubusercontent.com/1aa36dda4e9827443f9f6d5e80ef93472f81a3ff8044bedc7b27952bd0e58f0f/687474703a2f2f692e696d6775722e636f6d2f494d544e3563792e706e67" width="400">
</p>

## Composing Methods

---

### Inline Temp (required)

#### Problem

```php
$basePrice = $anOrder->basePrice();
return $basePrice > 1000;
```

#### Solution

```php
return $anOrder->basePrice() > 1000;
```

#### Benefits

- Cải thiện một chút readability bằng cách loại bỏ biến không cần thiết

### Extract Method (required)

#### Problem

```php
function printOwing() {
  $this->printBanner();

  // Print details.
  print("name:  " . $this->name);
  print("amount " . $this->getOutstanding());
}
```

#### Solution

```php
function printOwing() {
  $this->printBanner();
  $this->printDetails($this->getOutstanding());
}

function printDetails($outstanding) {
  print("name:  " . $this->name);
  print("amount " . $outstanding);
}
```

#### Benefits

- Theo nguyên tắc chung, nếu bạn cảm thấy cần phải nhận xét về điều gì đó bên trong một phương thức, bạn nên lấy mã này và đặt nó vào một phương thức mới.

### Extract Variable (required)

#### Problem

```php
if (($platform->toUpperCase()->indexOf("MAC") > -1) &&
     ($browser->toUpperCase()->indexOf("IE") > -1) &&
      $this->wasInitialized() && $this->resize > 0)
{
  // do something
}
```

#### Solution

```php
$isMacOs = $platform->toUpperCase()->indexOf("MAC") > -1;
$isIE = $browser->toUpperCase()->indexOf("IE")  > -1;
$wasResized = $this->resize > 0;

if ($isMacOs && $isIE && $this->wasInitialized() && $wasResized) {
  // do something
}
```

#### Benefits

- Dễ hiểu hơn mà không cần thêm comment giải thích

### Replace Temp with Query (optional)

#### Problem

```php
$basePrice = $this->quantity * $this->itemPrice;
if ($basePrice > 1000) {
  return $basePrice * 0.95;
} else {
  return $basePrice * 0.98;
}
```

#### Solution

```php
if ($this->basePrice() > 1000) {
  return $this->basePrice() * 0.95;
} else {
  return $this->basePrice() * 0.98;
}

function basePrice() {
  return $this->quantity * $this->itemPrice;
}
```

#### Benefits

- Có nhiều lợi ích trong việc tái sử dụng code, tránh long method 