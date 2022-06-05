## [1] Khu vực Trang

#### 01. Page header
```html
<header>
  <img src="/images/logo.png">
</header>
```
```html
- Nếu phần tử <header> được sử dụng bên trong các phần tử <article> và <section>, thì nó không được liên kết với các phần tử đó.
- Nó không có vai trò biểu ngữ WAI-ARIA và không có hành vi đặc biệt trong các công nghệ hỗ trợ (assistive technologies).
```

#### 02. Page footer
```html
<footer>
  <p>&copy; 2014 SpaceBears Inc.</p>
</footer>
```
```html
- Nếu phần tử <footer> được sử dụng bên trong các phần tử <article> và <section>, thì nó không được liên kết với các phần tử đó.
- Nó không có vai trò biểu ngữ WAI-ARIA và không có hành vi đặc biệt trong các công nghệ hỗ trợ (assistive technologies).
```

#### 03. Navigation

```html
<nav aria-label="Main Navigation">
</nav>
<nav aria-labelledby="quicknav-heading">
  <h5 id="quicknav-heading">Quick Navigation</h5>
</nav>
```
```html
- Một trang web có thể có nhiều menu điều hướng bất kỳ. Sử dụng nhãn (label) để xác định từng menu điều hướng.
```

#### 04. Main content
```html
<main>
  <h1>Stellar launch weekend for the SpaceBear 7!</h1>
</main>
```

#### 05. Complementary content
```html
<aside>
  <h3>Related Articles</h3>
</aside>
```

#### 06. Khu vực Trang trong HTML5 sử dụng WAI-ARIA
```html
<header role="banner"></header>
<main role="main"></main>
<nav role="navigation"></nav>
<footer role="contentinfo"></footer>
```
```html
- Hầu hết các trình duyệt web hiện tại đều hỗ trợ các phần tử HTML5.
- Tuy nhiên, để tối đa hóa khả năng tương thích với các trình duyệt web và công nghệ hỗ trợ (assistive technologies) hỗ trợ WAI-ARIA nhưng chưa hỗ trợ HTML5, 
bạn nên sử dụng cả phần tử HTML5 và role WAI-ARIA tương ứng.
```

## [2] Gán nhãn cho khu vực
```html
- Nhãn để phân biệt hai vùng của cùng một kiểu, chẳng hạn như <nav aria-label="main-navigation"> và <nav aria-label="sub-navigation">.
- Nhãn cũng được sử dụng để thay đổi nhận dạng mặc định của các vùng trang, ví dụ <aside aria-label="advertisement">.
- Các vùng là duy nhất như <main> không cần bổ sung nhãn.
```

#### Phương pháp 1: Sử dụng aria-label
```html
<nav aria-label="Main Navigation">
</nav>
```
```html
- Sử dụng nếu nhãn không xuất hiện trực quan trên trang.
```

#### Phương pháp 2: Sử dụng aria-labelledby
```html
<nav aria-labelledby="regionheading">
  <h3 id="regionheading">On this Page</h3>
</nav>
```
```html
- Sử dụng aria-labellingby để trỏ đến một phần tử theo id (duy nhất) của nó.
- Nếu một tiêu đề (h1,..) xuất hiện trong vùng và phản ánh cho vùng đó, hãy xem xét sử dụng nó làm nhãn:
```

## [3] Headings
```html
<section>
  <h4>This is heading h4</h4>
</section>
<section>
  <h2>This is heading h2</h2>
</section>
```
```html
- Tiêu đề tổ theo thứ hạng. Tiêu đề quan trọng nhất có xếp hạng 1 (<h1>), tiêu đề ít quan trọng nhất có xếp hạng 6 (<h6>).
- Đảm bảo rằng <h2> không theo sau trực tiếp <h4>. Có thể bỏ qua các cấp bậc khi đóng các phần (section), ví dụ: <h2> bắt đầu một phần mới, có thể theo sau <h4> đã được đóng ở phần trước.
```

## [4] Cấu trúc nội dung

#### 01. Articles
```html
<article>
  <h2>Space Bear Classic</h2>
</article>
<article>
  <h2>Space Bear Extreme</h2>
</article>
```
```html
- Phần tử HTML5 <article> đại diện cho một thành phần hoàn chỉnh hoặc khép kín trong một trang web.
```

#### 02. Sections
```html
<section>
  <h2>Chapter 2</h2>
</section>
```
```html
- Phần tử HTML5 <section> được sử dụng để nhóm nội dung.
```

#### 03. Figures
```html
<figure role="group" aria-labelledby="fig-t3-capt">
  <figcaption id="fig-t3-capt">G3: SpaceBear sales volume</figcaption>
  <img src="#" alt="SpaceBear sales diagram, showing the huge success in Q4">
  <a href="#">Long Description</a>
</figure>
```

## [5] Menu

#### 01. Identify menus
```html
<nav>
  <ul></ul>
</nav>
```

#### 02. Indicate trang (mục) hiện tại
##### Phương pháp 1: Sử dụng text invisible 
<ul>
<li>
  <a href="#">IPhone 6</a>
</li>
<li>
  <span class="current">
    <span class="visually-hidden">Current Page: </span>
    IPhone 8
  </span>
</li>
</ul>

```html
<ul>
<li>
  <a href="#">IPhone 6</a>
</li>
<li>
  <span class="current">
    <span class="visually-hidden">Current Page: </span>
    IPhone 8
  </span>
</li>
</ul>
```
```html
- Cung cấp một nhãn ẩn được đọc to cho người dùng trình đọc màn hình (screen readers)
- Loại bỏ ký tự liên kết (<a>) để người dùng không thể tương tác với mục hiện tại.
```

##### Phương pháp 2: Sử dụng WAI-ARIA
<ul>
<li>
  <a href="#"> IPhone 6</a>
</li>
<li>
  <a href="#" class="current" aria-current="page">IPhone 8</a>
</li>
</ul>

```html
<ul>
<li>
  <a href="#"> IPhone 6</a>
</li>
<li>
  <a href="#" class="current" aria-current="page">IPhone 8</a>
</li>
</ul>
```

#### 03. Menu con

<nav aria-label="Main">
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">Shop</a></li>
    <li class="has-submenu">
      <a href="#" aria-expanded="false">Iphone</a>
      <ul>
        <li><a href="#">Iphone 8</a></li>
        <li><a href="#">Iphone 8 Plus</a></li>
      </ul>
    </li>
    <li><a href="#">Contact</a></li>
  </ul>
</nav>

```html
<nav aria-label="Main">
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">Shop</a></li>
    <li class="has-submenu">
      <a href="#" aria-expanded="false">Iphone</a>
      <ul>
        <li><a href="#">Iphone 8</a></li>
        <li><a href="#">Iphone 8 Plus</a></li>
      </ul>
    </li>
    <li><a href="#">Contact</a></li>
  </ul>
</nav>
```

```html
- Đánh dấu WAI-ARIA aria-expand="false" tuyên bố rằng điều hướng menu con hiện bị ẩn (hidden) hoặc đã thu gọn (collapsed).
```

