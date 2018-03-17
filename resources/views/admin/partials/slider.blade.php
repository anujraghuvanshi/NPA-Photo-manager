<div class="container no-padding">
    <div class="row">
        <div id="carousel-example" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example" data-slide-to="1"></li>
                <li data-target="#carousel-example" data-slide-to="2"></li>
            </ol>
            <div class="clearfix"></div>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="{{ asset('img/slideshow/slide1.jpg') }}">
                </div>
                <div class="item">
                    <img src="{{ asset('img/slideshow/slide2.jpg') }}">
                </div>
                <div class="item">
                    <img src="{{ asset('img/slideshow/slide3.jpg') }}">
                </div>
                <div class="item">
                    <img src="{{ asset('img/slideshow/slide4.jpg') }}">
                </div>
            </div>
            <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>
</div>