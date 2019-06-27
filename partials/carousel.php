<div id="carousel" class="carousel slide" data-ride="carousel">

<ol class="carousel-indicators">
    <li data-target="#slide1" data-slide-to="0" class="active"></li>
    <li data-target="#slide2" data-slide-to="1"></li>
    <li data-target="#slide3" data-slide-to="2"></li>
  </ol>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="Assests/headers/header-1.png" alt="" class="d-block w-100" id="slide1">
            <div class="slide-text" id="slide-one">
                <h1>Work Hard <br>
                    Work Smart <br>
                    Enjoy Life.</h1>
                    <!-- Button trigger modal -->
                    <a href="btn btn-primary" data-toggle="modal" data-target="#videoModal">
                        <p><img src="Assests/icons/Play Arrow.png" alt=""><span>Watch video</span></p>
                    </a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="Assests/headers/header-2.png" alt="" class="d-block w-100" id="slide2">
        </div>
        <div class="carousel-item">
            <img src="Assests/headers/header-3.png" alt="" class="d-block w-100" id="slide3">
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <iframe src="https://www.youtube.com/embed/sdq7s2gI8Zs?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>      
    </div>
  </div>
</div>