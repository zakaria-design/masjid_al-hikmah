<style>
    body {
    font-family: cursive, 'Trebuchet MS', 'Lucida Sans Unicode','Lucida Grande', 'Lucida Sans', Arial , Sans-serif;
}

.main-color {
    /* agar css ini bisa dipakai oleh tampilan maka harus ditambahkan !important */
    background-color: aqua !important;   
}

.banner {
    height: 80vh;
    background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url({{ asset('img/masjid.jpg') }}) ;
    background-size: cover;
    background-position: center;
}



.hovered-card:hover {
    transform: scale(1.1);
    transition: .5s;
}

.icon-service {
    width: 90px;
    height: 90px;
    border: solid #000 1px;
    border-radius: 100%;
}

.subscribe {
    background-color: rgba(0,0,0,0.7);
}

.banner-produk {
    height: 60vh;
    background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.7)), url('../image/banner.jpg') ;
    background-size: cover;
    background-position: center;
}

.lb-loader,.lightbox{text-align:center;line-height:0;position:absolute;left:0}body.lb-disable-scrolling{overflow:hidden}.lightboxOverlay{position:absolute;top:0;left:0;z-index:9999;background-color:#000;filter:alpha(Opacity=80);opacity:.8;display:none}.lightbox{width:100%;z-index:10000;font-weight:400;outline:0}.lightbox .lb-image{display:block;height:auto;max-width:inherit;max-height:none;border-radius:3px;border:4px solid #fff}.lightbox a img{border:none}.lb-outerContainer{position:relative;width:250px;height:250px;margin:0 auto;border-radius:4px;background-color:#fff}.lb-outerContainer:after{content:"";display:table;clear:both}.lb-loader{top:43%;height:25%;width:100%}.lb-cancel{display:block;width:32px;height:32px;margin:0 auto;background:url(../images/loading.gif) no-repeat}.lb-nav{position:absolute;top:0;left:0;height:100%;width:100%;z-index:10}.lb-container>.nav{left:0}.lb-nav a{outline:0;background-image:url(data:image/gif;base64,R0lGODlhAQABAPAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==)}.lb-next,.lb-prev{height:100%;cursor:pointer;display:block}.lb-nav a.lb-prev{width:34%;left:0;float:left;background:url(../images/prev.png) left 48% no-repeat;filter:alpha(Opacity=0);opacity:0;-webkit-transition:opacity .6s;-moz-transition:opacity .6s;-o-transition:opacity .6s;transition:opacity .6s}.lb-nav a.lb-prev:hover{filter:alpha(Opacity=100);opacity:1}.lb-nav a.lb-next{width:64%;right:0;float:right;background:url(../images/next.png) right 48% no-repeat;filter:alpha(Opacity=0);opacity:0;-webkit-transition:opacity .6s;-moz-transition:opacity .6s;-o-transition:opacity .6s;transition:opacity .6s}.lb-nav a.lb-next:hover{filter:alpha(Opacity=100);opacity:1}.lb-dataContainer{margin:0 auto;padding-top:5px;width:100%;border-bottom-left-radius:4px;border-bottom-right-radius:4px}.lb-dataContainer:after{content:"";display:table;clear:both}.lb-data{padding:0 4px;color:#ccc}.lb-data .lb-details{width:85%;float:left;text-align:left;line-height:1.1em}.lb-data .lb-caption{font-size:13px;font-weight:700;line-height:1em}.lb-data .lb-caption a{color:#4ae}.lb-data .lb-number{display:block;clear:left;padding-bottom:1em;font-size:12px;color:#999}.lb-data .lb-close{display:block;float:right;width:30px;height:30px;background:url(../images/close.png) top right no-repeat;text-align:right;outline:0;filter:alpha(Opacity=70);opacity:.7;-webkit-transition:opacity .2s;-moz-transition:opacity .2s;-o-transition:opacity .2s;transition:opacity .2s}.lb-data .lb-close:hover{cursor:pointer;filter:alpha(Opacity=100);opacity:1}
</style>