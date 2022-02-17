## Active Record Pattern

1. Một đối tượng được liên kết với một hàng (row) trong bảng.
2. Một đối tượng mang cả data và behavior
3. putting data access logic in the domain object.
5. The pattern could provide for a great productivity boost and value when you have next to no business logic

Pros
1. Active Record Pattern đơn giản, dễ hiểu, dễ sử dụng
2. Mô hình này giúp tăng năng suất tuyệt vời khi bạn không có hoặc có rất ít business logic

Cons
1. Active Record là một lựa chọn tốt khi domain logic, business logic không quá phức tạp, 
nhưng phần lớn trường hợp ứng dụng của bạn thường sẽ không đơn giản hoặc sẽ ngày càng phức tạp trong tương lai.
2. Vi phạm nguyên tắc Single responsibility principle (CURD, Validation, Business Logic)
3. Nhiều developer quên hoặc không biết rằng họ đang làm việc với một row trong cơ sở dữ liệu, 
và sử dụng object này để lấy ra nhiều row dữ liệu.

```php
$user = new User()
$user->name = 'Phạm Ngọc Khánh';
$user->age = 18;
$user->save()
```

