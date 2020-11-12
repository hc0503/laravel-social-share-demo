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