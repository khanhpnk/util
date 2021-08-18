<p align="center">
<img src="https://camo.githubusercontent.com/1aa36dda4e9827443f9f6d5e80ef93472f81a3ff8044bedc7b27952bd0e58f0f/687474703a2f2f692e696d6775722e636f6d2f494d544e3563792e706e67" width="400">
</p>

## Organizing Data

---

### Encapsulate Field (optional)

#### Problem

```php
public $balance;
```

#### Solution

```php
private $balance;

public function getBalance() {
  return $this->balance;
}

public function setBalance($arg) {
  $this->balance = $arg;
}
```

#### Benefits

- Thực hiện thêm các thao tác (như validation) khi set & get, 
tránh lỗi do đọc ghi dữ liệu sai cách, 
định nghĩa lại được set & gets trong các lớp con.

### Self Encapsulate Field (optional)

#### Problem

```php
private $balance;

public function deposit(int $arg) {
  $this->balance += $arg;
}
```

#### Solution

```php
private $balance;

public function deposit(int $arg) {
  $this->balance += $arg;
}

public function getBalance() {
  return $this->balance;
}
```

#### Benefits

- Tính linh hoạt, có thể Lazy Initialization, validation,
định nghĩa lại được set & gets trong các lớp con.

### Replace Array with Object (required)

#### Problem

```php
$row = [];
$row[0] = 'Khanh';
$row[1] = 30;
```

#### Solution

```php
$row = new Customer;
$row->setName('Khanh');
$row->setAge(30);
```

#### Benefits

- Self-explanatory code, mảng chỉ tuyệt vời khi lưu trữ data và collection của một loại duy nhất.

### Replace Magic Number with Symbolic Constant (important)

#### Problem

```php
function potentialEnergy($mass, $height) {
  return $mass * $height * 9.81;
}
```

#### Solution

```php
define("GRAVITATIONAL_CONSTANT", 9.81);

function potentialEnergy($mass, $height) {
  return $mass * $height * GRAVITATIONAL_CONSTANT;
}
```

#### Benefits

- Hằng số là tự nó đã là document, giúp giá trị có ý nghĩa và dễ hiểu
- Thay đổi hằng số dễ hơn nhiều lần so với việc tìm kiếm số này trong toàn bộ codebase,
và có nguy cơ vô tình thay đổi cùng một số được sử dụng ở nơi khác cho một mục đích khác.