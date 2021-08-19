<p align="center">
<img src="https://camo.githubusercontent.com/1aa36dda4e9827443f9f6d5e80ef93472f81a3ff8044bedc7b27952bd0e58f0f/687474703a2f2f692e696d6775722e636f6d2f494d544e3563792e706e67" width="400">
</p>

## Simplifying Conditional Expressions

---

### Rename Method (important)

#### Problem

```php
function getFn() {}
```

#### Solution

```php
function getFirstName() {}
```

#### Benefits

- Tên phản ánh những gì nó thực hiện giúp code dễ hiểu

### Preserve Whole Object (required)

#### Problem

```php
$name = $customer->getName();
$email = $customer->getEmail();
$email->send($name, $email);
```

#### Solution

```php
$email->send($customer);
```

#### Benefits

- Tham số cho hàm nhìn đơn giản, gọn gàng
- Nếu hàm cần thêm dữ liệu từ đối tượng, sẽ không cần phải viết lại tất cả những nơi mà hàm được sử dụng,
chỉ đơn giản sửa bên trong hàm đó.
- Tên phản ánh những gì nó thực hiện giúp code dễ hiểu

### Hide Method (required)

#### Problem

```php
class Customer {
  public function calculateLifetime() {}
}
```

#### Solution

```php
class Customer {
  private function calculateLifetime() {}
}
```

#### Benefits

- Tạo một giao diện công khai cho class, các đối tượng khác nên biết mình có thể làm gì với class hiện tại 
- Khi thay đổi một phương thức private, chỉ cần để ý làm thế nào để không phá vỡ lớp hiện tại
