#### Dependency Injection (tiêm phụ thuộc)

- When class A uses some functionality of class B, then it's said that class A has a dependency of class B.
- Before we can use methods of other classes, we first need to create the object of that class (i.e. class A needs to create an instance of class B).
- So, transferring the task of creating the object to someone else and directly using the dependency is called dependency injection.

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

#### Types of Dependency Injection

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

- Interface injection
```php
interface CarInterface{}
class Driver
{
  public function __construct(CarInterface $car)
  {
      $this->car = $car;
  }
}
```

#### Inversion of Control (IoC) (Often called a Dependency Injection Container)