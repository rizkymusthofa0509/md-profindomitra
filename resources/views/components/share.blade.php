<!-- Share Icons -->
<div class="share-icons">
    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}" target="_blank" class="icon facebook" title="Share on Facebook">
        <img src="{{url('assets/facebook-icon.webp')}}" alt="Facebook">
    </a>
    <a href="https://api.whatsapp.com/send?text={{ urlencode(Request::fullUrl()) }}" target="_blank" class="icon whatsapp" title="Share on WhatsApp">
        <img src="{{url('assets/whatsapp-icon.png')}}" alt="WhatsApp">
    </a>

    <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}" target="_blank" class="icon twitter" title="Share on Twitter">
        <img src="{{url('assets/twitter-icon.webp')}}" alt="Twitter">
    </a>

    <a href="#" class="icon copylink" onclick="copyLink()" title="Copy Link">
        <img src="{{url('assets/copy-icon.png')}}" alt="Copy Link">
    </a>
</div>

<!-- CSS -->
<style>
    .share-icons {
        position: fixed;
        bottom:5%;
        left: 2em;
        transform: translateY(-50%);
        z-index: 1000;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    /* Ikon Share */
    .share-icons .icon {
        display: block;
        width: 40px;
        height: 40px;
        background-color: white;
        border-radius: 50%;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        text-align: center;
        line-height: 40px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    /* Efek Hover */
    .share-icons .icon:hover {
        transform: scale(1.1);
        box-shadow: 0px 6px 8px rgba(0, 0, 0, 0.2);
    }

    /* Gambar dalam ikon */
    .share-icons .icon img {
        width: 60%;
        height: 60%;
        margin: auto;
    }

    /* Sembunyikan di perangkat dengan layar kecil */
    @media screen and (max-width: 768px) {
        .share-icons {
            display: none; /* Sembunyikan di layar kecil */
        }
    }
    </style>


<!-- JS -->
<script>
function copyLink() {
    const url = window.location.href;
    navigator.clipboard.writeText(url).then(() => {
        alert("Link copied to clipboard!");
    }).catch(err => {
        alert("Failed to copy link: " + err);
    });
}
</script>
