# Laravel Social Share Demo

## Meta setting
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

## Social share button components
```html
<div class="social-buttons">
    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($url) }}"
       target="_blank">
       <i class="fa fa-facebook-official"></i>
    </a>
    <a href="https://twitter.com/intent/tweet?url={{ urlencode($url) }}"
       target="_blank">
        <i class="fa fa-twitter-square"></i>
    </a>
    <a href="https://plus.google.com/share?url={{ urlencode($url) }}"
       target="_blank">
       <i class="fa fa-google-plus-square"></i>
    </a>
    <a href="https://pinterest.com/pin/create/button/?{{ 
        http_build_query([
            'url' => $url,
            'media' => $image,
            'description' => $description
        ]) 
        }}" target="_blank">
        <i class="fa fa-pinterest-square"></i>
    </a>
</div>
```
