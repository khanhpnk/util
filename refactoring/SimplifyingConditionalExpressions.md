<p align="center">
<img src="https://camo.githubusercontent.com/1aa36dda4e9827443f9f6d5e80ef93472f81a3ff8044bedc7b27952bd0e58f0f/687474703a2f2f692e696d6775722e636f6d2f494d544e3563792e706e67" width="400">
</p>

## Simplifying Conditional Expressions

---

### Consolidate Duplicate Conditional Fragments (required)

#### Problem

```php
if (isSpecialDeal()) {
  $total = $price * 0.95;
  send();
} else {
  $total = $price * 0.98;
  send();
}
```

#### Solution

```php
if (isSpecialDeal()) {
  $total = $price * 0.95;
} else {
  $total = $price * 0.98;
}
send();
```

#### Benefits

- Tránh duplicate code

### Replace Nested Conditional with Guard Clauses (important)

#### Problem

```php
function getPayAmount() {
  if ($this->isDead) {
    $result = $this->deadAmount();
  } else {
    if ($this->isSeparated) {
      $result = $this->separatedAmount();
    } else {
      if ($this->isRetired) {
        $result = $this->retiredAmount();
      } else {
        $result = $this->normalPayAmount();
      }
    }
  }
  return $result;
}
```

#### Solution

```php
function getPayAmount() {
  if ($this->isDead) {
    return $this->deadAmount();
  }
  if ($this->isSeparated) {
    return $this->separatedAmount();
  }
  if ($this->isRetired) {
    return $this->retiredAmount();
  }
  return $this->normalPayAmount();
}
```

#### Benefits

- Code không bị lồng thành nhiều cấp giúp dễ theo dõi (nhất là khi có nhiều nội dung viết trong if)
- Cấu trúc phẳng giúp dễ hiểu flow