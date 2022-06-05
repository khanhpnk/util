## [1] Forms

#### 01. Liên kết các nhãn một cách rõ ràng
<label for="name">Name</label>
<input type="text" id="name">

<input type="checkbox" id="subscribe">
<label for="subscribe">Subscribe to newsletter</label>

```html
<label for="name">Name</label>
<input type="text" id="name">

<input type="checkbox" id="subscribe">
<label for="subscribe">Subscribe to newsletter></label>
```

```html
- Nó đảm bảo rằng công nghệ hỗ trợ (assistive technologies) có thể hiếu được form.
- Các trình duyệt web cũng cung cấp nhãn giúp tăng diện tích vùng có thể nhấp.
```

#### 02. Cung cấp hướng dẫn bên ngoài nhãn
<label for="email">Email address</label>
<input type="email" id="email" aria-describedby="emailHelp">
<div id="emailHelp">We'll never share your email with anyone else.</div>

```html
<label for="email">Email address</label>
<input type="email" id="email" aria-describedby="emailHelp">
<div id="emailHelp">We'll never share your email with anyone else.</div>
```

```html
Các công nghệ hỗ trợ (assistive technology) sẽ thông báo văn bản liên kết bởi aria-describedby 
khi người dùng focuses hoặc enter vào phần tử.
```

#### 03. Ẩn văn bản nhãn

<input type="text" name="search" aria-label="Search">
<button type="submit">Search</button>

```html
- Trong ví dụ ô nhập tìm kiếm được đặt ngay bên cạnh nút tìm kiếm. 
- Nó đủ rõ ràng và không cần thêm nhãn cho người dùng, nhưng không đủ trực quan với các công nghệ hỗ trợ (assistive technologies)
```

##### Phương pháp 1: Ẩn phần tử nhãn
```html
<label for="search" class="visually-hidden">Search: </label>
<input type="text" name="search" id="search">
<button type="submit">Search</button>
```

##### Phương pháp 2: Sử dụng aria-label
```html
<input type="text" name="search" aria-label="Search">
<button type="submit">Search</button>
```

##### Phương pháp 3: Sử dụng aria-labelledby
```html
<input type="text" name="search" aria-labelledby="searchBtn">
<button id="searchBtn" type="submit">Search</button>
```

##### Phương pháp 4: Sử dụng thuộc tính title
```html
<input type="text" name="search" title="Search">
<button type="submit">Search</button>
```

```html
- Cách tiếp cận này thường kém đáng tin cậy hơn và không được khuyến nghị 
bởi vì một số trình đọc màn hình và công nghệ hỗ trợ sử dụng title thay thế cho label.
```

##### Phương pháp 5: Sử dụng placeholder
```html
<input type="text" name="search" placeholder="Search">
<button type="submit">Search</button>
```

```html
- Mặc dù văn bản trình giữ chỗ (placeholder) cung cấp hướng dẫn có giá trị cho nhiều người dùng, 
văn bản trình giữ chỗ không phải là sự thay thế tốt cho nhãn.
```

##  [2] Lưu ý về ẩn các phần tử
```html
.visually-hidden,
.visually-hidden-focusable:not(:focus):not(:focus-within) {
    position: absolute!important;
    width: 1px!important;
    height: 1px!important;
    padding: 0!important;
    margin: -1px!important;
    overflow: hidden!important;
    clip: rect(0,0,0,0)!important;
    white-space: nowrap!important;
    border: 0!important;
}
```

```html
- Các công nghệ hỗ trợ (assistive technology) như trình đọc màn hình (screen readers) khác cũng giống như trình duyệt web 
ẩn các phần tử khi chúng được tạo kiểu bằng cách sử dụng display: none; hay visibility: hidden;
- Phương pháp phổ biến được sử dụng để ẩn thông tin một cách trực quan nhưng vẫn giữ cho chúng có sẵn cho trình đọc màn hình và những người dùng công nghệ hỗ trợ khác 
là sử dụng CSS để giữ thông tin hiển thị về mặt kỹ thuật nhưng thực tế bị ẩn.
```

