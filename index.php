<?php
include "includes/header.php";
?>
 
<style>
  .kutub-partImage{
    display: flex;
    justify-content: center;
    height: 200px;
 
   
  }
 
  .cover-part {
    background-image: url("assets/img/cover.jpg");

    background-repeat: no-repeat;
    background-size: cover;
    /* Ensure the image covers the container */
    background-position: center;

    width: 100%;
    height: 200px;
  }
  .blog-post{
    background-color: #EFF0F1;
    border: 1px solid #EFF0F1;
    box-shadow: 1px 1px 3px #ccc;
    border-radius: 5px;
    padding: 30px 10px;
    margin: 10px 0;
  }
  .short-partImage {
    width: 100%;
      height: 200px;
    margin-bottom: 5px;

  }

  a {

    text-decoration: none;
  }

  .card {
    height: 260px;
  }

  .mycard {
    width: 100%;
    padding: 25px 10px;
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    margin-bottom: 15px;
  }

  a {
    text-decoration: none;
    color: black;
  }
  .title-qudbo {
  background: #f8f9fa;
  border-bottom: 2px solid #ddd;
}

.qudbo {
  background: #fff;
  transition: all 0.3s ease;
}

.qudbo:hover {
  background: #f1f1f1;
}

h6 {
  font-weight: 500;
}

  /* height: 200px;
  margin-bottom: 5px;
  
 } */
  .kutub-partImag {
    width: 100%;
    height: 300px;
  }

  .img-kutub {
    width: 200px;
    height: 150px;
    object-fit: cover;
  }

  /* Marquee Container */
  .video-marquee-container {
    width: 100%;
    height: 800px;
    /* Exact height to fit videos */
    overflow: hidden;
    position: relative;

    border-radius: 10px;

  }

  /* Marquee scrolling effect */
  .video-marquee {
    display: flex;
    flex-direction: column;
    gap: 10px;
    position: relative;
    animation: scrollUp 30s linear infinite;
    /* Infinite scrolling */
  }

  /* Video item */
  .video-item {
    width: 100%;
    height: 200px;
    /* Fit videos properly */
    margin-bottom: 10px;
  }

  .video-item iframe {
    width: 100%;
    height: 100%;
    border-radius: 8px;
  }

  /* Smooth infinite scrolling */
  @keyframes scrollUp {
    0% {
      transform: translateY(0%);
    }

    100% {
      transform: translateY(-50%);
    }

    /* Moves half of the duplicated content */
  }

  /* Pause scrolling when hovered */
  .video-marquee-container:hover .video-marquee {
    animation-play-state: paused;
  }

  /* For screens between 992px and 1199px (tablets and smaller desktops) */
  @media (min-width: 992px) and (max-width: 1199px) {
    .cover-part {
      height: 200px;
      /* Adjust height for medium screens */
      background-size: cover;
      /* Ensure the image fills the container */
    }
  }

  /* For screens between 768px and 991px (tablets) */
  @media (min-width: 768px) and (max-width: 991px) {
    .cover-part {
      height: 150px;
      /* Keep height moderate for smaller devices */
      background-size: cover;
      /* Ensure the image covers the container */
    }
  }

  /* For screens between 576px and 767px (smaller tablets and large phones) */
  @media (min-width: 576px) and (max-width: 767px) {
    .cover-part {
      height: 110px;
      /* Adjust height for smaller tablets */
      background-size: cover;
      /* Cover the container */
    }
    .break{
      display: none;
    }
    .duqbo-row{
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: start;
    }
  }

  /* For screens smaller than 576px (mobile devices) */
  @media (max-width: 575px) {
    .break{
      display: none;
    }
    .cover-part {
      height: 100px;
      /* Smaller height for mobile devices */
      background-size: cover;
      /* Cover the area */
    }
    .duqbo-row{
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: start;
    }
  }

  .short-text-part {
    padding: 10px 10px;
  }
</style>

<main class="container">
  <div class="p-4 p-md-5 mb-4 rounded   cover-part">

  </div>

  <div class="row mb-4 ">
    <h4 class=" mb-1 fst-italic ">
      Muuqaal gaaban</h4>
    </h3>

    <div class="col-md-3 mb-3">
      <a href="https://www.youtube.com/watch?v=Gp0f4itg604">


    </div>
    <div class="row">



      <div class="col-md-3 mb-3">

        <div class="card   shadow-md rounded pb-2">
          <a target="_blank" href="https://www.youtube.com/watch?v=Gp0f4itg604&t=35s">
            <div class="short-partImage">
              <img src="assets/img/shorts-1.jpg" alt="card image" class="w-100 h-100  ">
            </div>
            <div class="short-text-part">
              <h6>Maxaan u dukanaynaa ?</h6>
            </div>
          </a>


        </div>

        </a>

      </div>

      <div class="col-md-3 mb-3">
        <a target="_blank" href="https://www.youtube.com/watch?v=wj-FTUgQbYw">
          <div class="card   shadow-md rounded pb-2">
            <div class="short-partImage">
              <img src="assets/img/shorts-3.jpg" alt="card image" class="w-100 h-100  ">
            </div>
            <div class="short-text-part">
              <h6>TALOOYIN KU SAABSAN XILLIGA IMTIXAANKA WAXBARASHADA</h6>
            </div>

          </div>
        </a>

      </div>

      <div class="col-md-3 mb-3">
        <a target="_blank" href="https://www.youtube.com/watch?v=rP4KpCRtn24">
          <div class="card   shadow-md rounded pb-2">
            <div class="short-partImage">
              <img src="assets/img/shorts-3.jpg" alt="card image" class="w-100 h-100  ">
            </div>
            <div class="short-text-part">
              <h6>Farriin ugaar ka Dumarka oo Xagga ِAllaah kaga Timid</h6>
            </div>

          </div>
        </a>

      </div>

      <div class="col-md-3 mb-3">
        <a target="_blank" href="https://www.youtube.com/watch?v=ITlFZn0AMlQ">
          <div class="card   shadow-md rounded pb-2">
            <div class="short-partImage">
              <img src="assets/img/shorts-1.jpg" alt="card image" class="w-100 h-100  ">
            </div>
            <div class="short-text-part">
              <h6>Allaah ka baqa oo Heshiiya</h6>
            </div>

          </div>
        </a>

      </div>





    </div>

    <h4 class=" mb-1 fst-italic ">
      Kutubo
    </h4>

    <div class="row g-2">
      <div class="col-md-8">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-4">
            <a target="_blank"
              href="https://www.youtube.com/watch?v=2j6OPGo0ZVg&list=PLn0uaBLg-rxjND9qAzgmUdMseCnL05wES">
              <div class="mycard">
                <div class="kutub-partImage  ">
                  <img src="assets\img\kutubo\rowdattulAnwar.jpg" style="object-fit: contain; width: 100%;height: 100%;box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.2);"" class="img-kutub" alt="">
                </div>
                <div class="mt-4">
                  <h6> Kitaabka Rowdatul Anwaar </h6>
                </div>


              </div>
            </a>
          </div>
          <div class="col-md-4">


            <a target="_blank" href="https://www.youtube.com/watch?v=O1WkwX4XJzY">
              <div class="mycard">
                <div class="kutub-partImage">
                  <img src="assets\img\kutubo\nuurul yaqiin.webp" style="object-fit: contain; width: 100%;height: 100%;box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.2);"" class="img-kutub" alt="">
                </div>
                <div class="mt-4">
                  <h6>Siirada Nuural Yaqiin</h6>
                </div>

              </div>
            </a>
          </div>
          <div class="col-md-4">

            <a target="_blank"
              href="https://www.youtube.com/watch?v=z5jjx_RIk5k&list=PLn0uaBLg-rxh5eXVq_Hi2xUUbZ2o97Fa0">

              <div class="mycard">
                <div class="kutub-partImage">
                  <img src="assets\img\kutubo\safiinad.jpg" style="object-fit: contain; width: 100%;height: 100%;box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.2);" class="img-kutub" alt="">
                </div>
                <div class="mt-4">
                  <h6>Safiino Salaad</h6>
                </div>
              </div>
            </a>
          </div>
        </div>
        <article class="blog-post">
  <div class="title-qudbo">
    <h4 class="text-center py-3">Qudbado Cusub</h4>
  </div>

  <div class="qudbo-list">
    <!-- Single Qudbo Item -->
    <div class="qudbo p-3 border-bottom">
      <div class="row align-items-center">
        <div class="col-md-6">
          <h6 class="mb-0"><i class="fa-solid fa-feather"></i> Mawduuca: Jacaylka Rasuulka ﷺ iyo Muhiimadiisa</h6>
        </div>
        <div class="col-md-2 text-center">
          <h6 class="mb-0"><i class="fa-solid fa-microphone-lines"></i> Listening</h6>
        </div>
        <div class="col-md-2 text-center">
          <h6 class="mb-0"><i class="fa-solid fa-download"></i> Download</h6>
        </div>
        <div class="col-md-2 text-center">
          <h6 class="mb-0"><i class="fa-regular fa-eye"></i> Views: 15</h6>
        </div>
      </div>
    </div>
    <!-- Repeat this block for additional qudbo items -->
  </div>
</article>

        
         
 
      </div>

      <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem;">
          <div class="p-4 mb-3 bg-body-tertiary rounded">
            <div class="video-marquee-container">
              <div class="video-marquee">
                <div class="video-item">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/wj-FTUgQbYw?si=-l6Cld9_ldhQBq2w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> </div>
                <div class="video-item">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/2j6OPGo0ZVg?si=_EqJtrDYnROs44GY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                <div class="video-item">
                <iframe src="https://www.youtube.com/embed/F8l9_BNc-iY?si=5xYpsMMr2m4TV3HM" frameborder="0" allowfullscreen></iframe>  
              </div>
                <div class="video-item">
                <iframe  src="https://www.youtube.com/embed/o-Dn6oBSjHM?si=NvbP2WONnu3F_quH"  frameborder="0" allowfullscreen></iframe></div>
                <div class="video-item">
                  <iframe src="https://www.youtube.com/embed/2K5GFTte4-w?si=G8Jn3mueJQCVbIeW" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="video-item">
                  <iframe src="https://www.youtube.com/embed/g_y-CWsw2pQ?si=cY8-nICzFUFWuUEg" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="video-item">
                  <iframe src="https://www.youtube.com/embed/L7LiOrsYQDQ?si=-lycqP-2teYgYxT1" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="video-item">
                  <iframe src="https://www.youtube.com/embed/4mPm6-J_FKM?si=QoNfAzE9hg9y7JFy" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
            </div>

            <div>
            
          </div>
        </div>
      </div>

</main>




<?php
include "includes/footer.php";
?>