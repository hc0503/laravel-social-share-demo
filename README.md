# Laravel Social Share Demo


## Social meta tags
```html
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="SPSCloud Screenwriting competition" />
<meta property="og:description" content="I have just entered the SPSCloud FREE screenwriting competition." />
<meta property="og:site_name" content="SPSCloud" />
<meta property="article:published_time" content="2020-11-13T06:24:02+00:00" />
<meta property="og:image" content="https://spscloud.io/wp-content/uploads/2020/11/spsc-trophy-208x300.jpg" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:label1" content="Written by">
<meta name="twitter:data1" content="David Raynor">
<meta name="twitter:label2" content="Est. reading time">
<meta name="twitter:data2" content="1 minute">
```


## Social share button
```html
<div id="social-links">
    <ul>
        <li><a href="https://www.facebook.com/sharer/sharer.php?u=https://app.spscloud.io" class="social-button " id=""><span class="fa fa-facebook-official"></span></a></li>
        <li><a href="https://twitter.com/intent/tweet?url=https://app.spscloud.io/competition-rules-and-terms" class="social-button " id=""><span class="fa fa-twitter"></span></a></li>
        <li><a href="https://www.instagram.com/bad_hat_films/" class="social-button " id=""><span class="fa fa-instagram"></span></a></li>
    </ul>
</div>
```


## JS for Social popup
```javascript
var popupSize = {
    width: 780,
    height: 550
};
$(document).on('click', '.social-button', function (e) {
    var verticalPos = Math.floor(($(window).width() - popupSize.width) / 2),
        horisontalPos = Math.floor(($(window).height() - popupSize.height) / 2);

    var popup = window.open($(this).prop('href'), 'social',
        'width=' + popupSize.width + ',height=' + popupSize.height +
        ',left=' + verticalPos + ',top=' + horisontalPos +
        ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');
    if (popup) {
        popup.focus();
        e.preventDefault();
    }
});
```
