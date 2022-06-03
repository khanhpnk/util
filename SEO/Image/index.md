## Decorative Images

#### Images may be decorative when they are:
- Visual styling such as borders, spacers, and corners;
- Supplementary to link text to improve its appearance or increase the clickable area
- Identified and described by surrounding text.
- Illustrative of adjacent text but not contributing information (“eye-candy”)


#### Strategy
- add alt="" so that they can be ignored by assistive technologies, such as screen readers.
- Leaving out the alt attribute some screen readers will announce the file name of the image instead.
- Screen readers also allow the use of WAI-ARIA to hide elements by using role="presentation". However, currently, this feature is not as widely supported.
- Where possible, decorative images should be provided using CSS background images instead.

### Example 1: Image used as part of page design
![Alt text](img/topinfo_bg.png)
```html
<img src="topinfo_bg.png" alt="">
```

### Example 2: Decorative image as part of a text link
![Alt text](img/youtube.png)
```html
<a href="https://www.youtube.com">
  <img src="youtube.png" alt="">
  <h6>Youtube</h6>
</a>
```

### Example 3: Image with adjacent text alternative
![Alt text](img/sleepingdog.png)
```html
<p>
  <img src="sleepingdog.png" alt="">
  <div>The sleeping dogs:</div> ...
</p
```

### Example 4: Image with adjacent text alternative
![Alt text](img/tropical.png)
```html
<img src="tropical.png" alt="">
```
If the purpose of this image was to identify a plant or convey other information, rather than just to improve the look of the page, it should probably be treated as informative.

## Informative Images

### Example 1: Images used to label other information
![Alt text](img/phone.png) 0123 456 7890
```html
<img src="phone.png" alt="Telephone:"> 0123 456 7890
```

### Example 2: Images used to supplement other information
![Alt text](img/phone.png) 0123 456 7890
```html
<img src="phone.png" alt="Con chó với một chiếc chuông gắn trên cổ áo">
```

### Example 4: Images conveying an impression or emotion
![Alt text](img/family.png)
```html
<img src="family.jpg" alt="We’re family-friendly.">
```
- This photograph shows a happy family group.  It’s being used to give the impression that the website or the company it represents is family-friendly.
- Note: If the purpose of this image were simply to improve the look of a page rather than convey an impression, it could be deemed to be decorative.

### Example 5: Images conveying file format
![Alt text](img/format.png)
```html
<a href="#">2012 Annual report <img src="html5logo.png" alt="HTML" > (43KB)</a>
, also available in
<a href="#"><img src="worddocument.png" alt="Word document"> (254KB)</a>
or
<a href="#"><img src="pdfdocument.png" alt="PDF"> (353KB)</a>
format.
```