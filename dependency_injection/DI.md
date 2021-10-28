#### Dependency Injection (tiêm phụ thuộc)

- When class A uses some functionality of class B, then it's said that class A has a dependency of class B.
- Before we can use methods of other classes, we first need to create the object of that class (i.e. class A needs to create an instance of class B).
- So, transferring the task of creating the object to someone else and directly using the dependency is called dependency injection.
- It is the fifth principle of S.O.L.I.D — which states that a class should depend on abstraction and not upon concretions.
- Depending on interfaces (or abstractions) rather than on concrete classes is called dependency inversion principle and is used to write less coupled code.
- Dependency Injection (DI) is a design pattern used to implement IoC (Inversion of control).
- Dependencies injected at runtime rather than at compile time
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

#### Advantages

- Helps to enable loose coupling, which is important in application programming.
- Helps in unit-testing

#### Disadvantages

- Make code difficult to trace because it separates behavior from construction.

#### Roles

- Typically, any object that may be used can be considered a service. Any object that uses other objects can be considered a client.
- Service object, Client object, Interface (define how the client may use the services), Injector object (constructs the services and injects them into the client)