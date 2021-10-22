#### Dependency Injection (tiêm phụ thuộc)

- Nếu class A sử dụng chức năng của class B, thì có nghĩa là class A (có quan hệ) phụ thuộc class B.
- "Dependency Inversion Principle" is the D in the S.O.L.I.D "Depend on Abstractions. Do not depend on concretions."

#### Problem

```php
class Author {
  private $firstName;
  private $lastName;
    public function __construct($firstName, $lastName) {
      $this->firstName = $firstName;
      $this->lastName = $lastName;
    }
}

class Question {
  private $author;
  public function __construct($authorFirstName, $authorLastName) {
    $this->author = new Author($authorFirstName, $authorLastName);
  }
}
```

- Thông tin name của Author được truyền qua construct của Question mặc dù nó ko làm bất cứ điều gì trong Question,
- về mặt ý nghĩa nó cũng ko liên quan gì đến class Question
- Nếu thêm một tham số mới vào constructor của class Author, phải sửa đổi mọi nơi chúng ta tạo một object Author

#### Phân loại DI

- Constructor Injection
```php
public function __construct(Car $car)
{
    $this->car = $car;
}
```

- Setter Injection
```php
public function setCar(Car $car)
{
    $this->car = $car;
}
```

- Method Injection
- Interface injection
```php
interface Car{}

class Ferrari implements Car {}

class Driver
{
  private $car;
  public function __construct(Car $car)
  {
      $this->car = $car;
  }
}
```

- We are not relying on Car as an object anymore, we now rely on its behavior.
- Ferrari can be replaced by any other class as soon they implement the Car interface.
- And now our application looks a bit like real life, in real life a driver can drive any car

#### Inversion of Control (IoC) (Often called a Dependency Injection Container)

- Lớp này sẽ lưu trữ một đăng ký của tất cả các phụ thuộc cho dự án

```php
class IoC {
  public static function newCar()
  {
    $car = new Car;
    $car->setDB('...');
    return $car;
  }
}
$car = IoC::newCar();
```
- Bằng cách này, người dùng không phải nhớ để thiết lập các phụ thuộc bằng tay; chỉ cần gọi phương thức newCar

```php
class IoC {
  protected static $registry = array();
  public static function register($name, Closure $resolve)
  {
    static::$registry[$name] = $resolve;
  }
  public static function resolve($name)
  {
        $name = static::$registry[$name];
        return $name();
  }
}
IoC::register('car', function() {
  $car = new Car;
  $car->setDB('...');
  return $car;
});
$car = IoC::resolve('car');
```
- Thay vì tạo ra một phương pháp mới cho mỗi lớp học, là viết một thùng chứa registry chung