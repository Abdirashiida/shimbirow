<?php
include "includes/header.php";
?>
 <style>
  .kutub-partImage{
    display: flex;
    justify-content: center;
   
  }
  .title-qudbo{
    background-color: #EFF0F1;
    padding: 5px 10px;
    border-radius: 5px;
    font-size: 20px;
    font-weight: 600;
    color: #000;
     
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
  .qudbo{
    background-color: #fff;
    border: 1px solid #ccc;
    box-shadow: 1px 1px 3px #ccc;
    border-radius: 5px;
    padding: 15px 10px;
    margin: 10px 0;
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
   
     
    <div class="row g-2">
    <div class="col-md-8">
        
    <article class="blog-post">
          <div class="title-qudbo">
           Qudbado cusub  
          </div>
          
          <div class="qudbo">
            <div class="row duqbo-row">
              <div class="col-md-6 py-2 ">
              <h6><i class="fa-solid fa-feather"></i> Mawduuca: Jacaylka Rasuulka ﷺ iyo Muhiimadiisa <span class="break">|</span></h6>
              </div>
              <div class="col-md-2 py-2    d-flex justify-content-center align-items-start">
              <h6><i class="fa-solid fa-microphone-lines"></i> listening <span class="break">|</span></h6> 
              </div>
              <div class="col-md-2 py-2    d-flex justify-content-center align-items-start">
              <h6><i class="fa-solid fa-download"></i> Download <span class="break">|</span></h6>  
              </div>
              <div class="col-md-2 py-2   d-flex justify-content-center align-items-start">
              <h6><i class="fa-regular fa-eye"></i> Views 15</h6>  
              </div>

            </div>
           
          </div>
          <div class="qudbo">
            <div class="row duqbo-row">
              <div class="col-md-6  ">
              <h6><i class="fa-solid fa-feather"></i> Mawduuca: Jacaylka Rasuulka ﷺ iyo Muhiimadiisa <span class="break">|</span></h6>
              </div>
              <div class="col-md-2 py-2     d-flex justify-content-center  align-items-start">
              <h6><i class="fa-solid fa-microphone-lines"></i> listening <span class="break">|</span></h6> 
              </div>
              <div class="col-md-2 py-2     d-flex justify-content-center  align-items-start">
              <h6><i class="fa-solid fa-download"></i> Download <span class="break">|</span></h6>  
              </div>
              <div class="col-md-2 py-2     d-flex justify-content-center  align-items-start">
              <h6><i class="fa-regular fa-eye"></i> Views 15</h6>  
              </div>

            </div>
           
          </div>
          <div class="qudbo">
            <div class="row duqbo-row">
              <div class="col-md-6 py-2 ">
              <h6><i class="fa-solid fa-feather"></i> Mawduuca: Jacaylka Rasuulka ﷺ iyo Muhiimadiisa <span class="break">|</span></h6>
              </div>
              <div class="col-md-2 py-2    d-flex justify-content-center align-items-start">
              <h6><i class="fa-solid fa-microphone-lines"></i> listening <span class="break">|</span></h6> 
              </div>
              <div class="col-md-2 py-2    d-flex justify-content-center align-items-start">
              <h6><i class="fa-solid fa-download"></i> Download <span class="break">|</span></h6>  
              </div>
              <div class="col-md-2 py-2   d-flex justify-content-center align-items-start">
              <h6><i class="fa-regular fa-eye"></i> Views 15</h6>  
              </div>

            </div>
           
          </div>
          <div class="qudbo">
            <div class="row duqbo-row">
              <div class="col-md-6  ">
              <h6><i class="fa-solid fa-feather"></i> Mawduuca: Jacaylka Rasuulka ﷺ iyo Muhiimadiisa <span class="break">|</span></h6>
              </div>
              <div class="col-md-2 py-2     d-flex justify-content-center  align-items-start">
              <h6><i class="fa-solid fa-microphone-lines"></i> listening <span class="break">|</span></h6> 
              </div>
              <div class="col-md-2 py-2     d-flex justify-content-center  align-items-start">
              <h6><i class="fa-solid fa-download"></i> Download <span class="break">|</span></h6>  
              </div>
              <div class="col-md-2 py-2     d-flex justify-content-center  align-items-start">
              <h6><i class="fa-regular fa-eye"></i> Views 15</h6>  
              </div>

            </div>
           
          </div>
          <div class="qudbo">
            <div class="row duqbo-row">
              <div class="col-md-6 py-2 ">
              <h6><i class="fa-solid fa-feather"></i> Mawduuca: Jacaylka Rasuulka ﷺ iyo Muhiimadiisa <span class="break">|</span></h6>
              </div>
              <div class="col-md-2 py-2    d-flex justify-content-center align-items-start">
              <h6><i class="fa-solid fa-microphone-lines"></i> listening <span class="break">|</span></h6> 
              </div>
              <div class="col-md-2 py-2    d-flex justify-content-center align-items-start">
              <h6><i class="fa-solid fa-download"></i> Download <span class="break">|</span></h6>  
              </div>
              <div class="col-md-2 py-2   d-flex justify-content-center align-items-start">
              <h6><i class="fa-regular fa-eye"></i> Views 15</h6>  
              </div>

            </div>
           
          </div>
          <div class="qudbo">
            <div class="row duqbo-row">
              <div class="col-md-6  ">
              <h6><i class="fa-solid fa-feather"></i> Mawduuca: Jacaylka Rasuulka ﷺ iyo Muhiimadiisa <span class="break">|</span></h6>
              </div>
              <div class="col-md-2 py-2     d-flex justify-content-center  align-items-start">
              <h6><i class="fa-solid fa-microphone-lines"></i> listening <span class="break">|</span></h6> 
              </div>
              <div class="col-md-2 py-2     d-flex justify-content-center  align-items-start">
              <h6><i class="fa-solid fa-download"></i> Download <span class="break">|</span></h6>  
              </div>
              <div class="col-md-2 py-2     d-flex justify-content-center  align-items-start">
              <h6><i class="fa-regular fa-eye"></i> Views 15</h6>  
              </div>

            </div>
           
          </div>
          <div class="qudbo">
            <div class="row duqbo-row">
              <div class="col-md-6 py-2 ">
              <h6><i class="fa-solid fa-feather"></i> Mawduuca: Jacaylka Rasuulka ﷺ iyo Muhiimadiisa <span class="break">|</span></h6>
              </div>
              <div class="col-md-2 py-2    d-flex justify-content-center align-items-start">
              <h6><i class="fa-solid fa-microphone-lines"></i> listening <span class="break">|</span></h6> 
              </div>
              <div class="col-md-2 py-2    d-flex justify-content-center align-items-start">
              <h6><i class="fa-solid fa-download"></i> Download <span class="break">|</span></h6>  
              </div>
              <div class="col-md-2 py-2   d-flex justify-content-center align-items-start">
              <h6><i class="fa-regular fa-eye"></i> Views 15</h6>  
              </div>

            </div>
           
          </div>
          <div class="qudbo">
            <div class="row duqbo-row">
              <div class="col-md-6  ">
              <h6><i class="fa-solid fa-feather"></i> Mawduuca: Jacaylka Rasuulka ﷺ iyo Muhiimadiisa <span class="break">|</span></h6>
              </div>
              <div class="col-md-2 py-2     d-flex justify-content-center  align-items-start">
              <h6><i class="fa-solid fa-microphone-lines"></i> listening <span class="break">|</span></h6> 
              </div>
              <div class="col-md-2 py-2     d-flex justify-content-center  align-items-start">
              <h6><i class="fa-solid fa-download"></i> Download <span class="break">|</span></h6>  
              </div>
              <div class="col-md-2 py-2     d-flex justify-content-center  align-items-start">
              <h6><i class="fa-regular fa-eye"></i> Views 15</h6>  
              </div>

            </div>
           
          </div>
          <div class="qudbo">
            <div class="row duqbo-row">
              <div class="col-md-6 py-2 ">
              <h6><i class="fa-solid fa-feather"></i> Mawduuca: Jacaylka Rasuulka ﷺ iyo Muhiimadiisa <span class="break">|</span></h6>
              </div>
              <div class="col-md-2 py-2    d-flex justify-content-center align-items-start">
              <h6><i class="fa-solid fa-microphone-lines"></i> listening <span class="break">|</span></h6> 
              </div>
              <div class="col-md-2 py-2    d-flex justify-content-center align-items-start">
              <h6><i class="fa-solid fa-download"></i> Download <span class="break">|</span></h6>  
              </div>
              <div class="col-md-2 py-2   d-flex justify-content-center align-items-start">
              <h6><i class="fa-regular fa-eye"></i> Views 15</h6>  
              </div>

            </div>
           
          </div>
          <div class="qudbo">
            <div class="row duqbo-row">
              <div class="col-md-6  ">
              <h6><i class="fa-solid fa-feather"></i> Mawduuca: Jacaylka Rasuulka ﷺ iyo Muhiimadiisa <span class="break">|</span></h6>
              </div>
              <div class="col-md-2 py-2     d-flex justify-content-center  align-items-start">
              <h6><i class="fa-solid fa-microphone-lines"></i> listening <span class="break">|</span></h6> 
              </div>
              <div class="col-md-2 py-2     d-flex justify-content-center  align-items-start">
              <h6><i class="fa-solid fa-download"></i> Download <span class="break">|</span></h6>  
              </div>
              <div class="col-md-2 py-2     d-flex justify-content-center  align-items-start">
              <h6><i class="fa-regular fa-eye"></i> Views 15</h6>  
              </div>

            </div>
           
          </div>
          <div class="qudbo">
            <div class="row duqbo-row">
              <div class="col-md-6 py-2 ">
              <h6><i class="fa-solid fa-feather"></i> Mawduuca: Jacaylka Rasuulka ﷺ iyo Muhiimadiisa <span class="break">|</span></h6>
              </div>
              <div class="col-md-2 py-2    d-flex justify-content-center align-items-start">
              <h6><i class="fa-solid fa-microphone-lines"></i> listening <span class="break">|</span></h6> 
              </div>
              <div class="col-md-2 py-2    d-flex justify-content-center align-items-start">
              <h6><i class="fa-solid fa-download"></i> Download <span class="break">|</span></h6>  
              </div>
              <div class="col-md-2 py-2   d-flex justify-content-center align-items-start">
              <h6><i class="fa-regular fa-eye"></i> Views 15</h6>  
              </div>

            </div>
           
          </div>
          <div class="qudbo">
            <div class="row duqbo-row">
              <div class="col-md-6  ">
              <h6><i class="fa-solid fa-feather"></i> Mawduuca: Jacaylka Rasuulka ﷺ iyo Muhiimadiisa <span class="break">|</span></h6>
              </div>
              <div class="col-md-2 py-2     d-flex justify-content-center  align-items-start">
              <h6><i class="fa-solid fa-microphone-lines"></i> listening <span class="break">|</span></h6> 
              </div>
              <div class="col-md-2 py-2     d-flex justify-content-center  align-items-start">
              <h6><i class="fa-solid fa-download"></i> Download <span class="break">|</span></h6>  
              </div>
              <div class="col-md-2 py-2     d-flex justify-content-center  align-items-start">
              <h6><i class="fa-regular fa-eye"></i> Views 15</h6>  
              </div>

            </div>
           
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
                <iframe src="https://www.youtube.com/embed/F8l9_BNc-iY?si=5xYpsMMr2m4TV3HM" frameborder="0" allowfullscreen></iframe>>   
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
              <!-- <h4 class="fst-italic">Recent posts</h4>
          <ul class="list-unstyled">
            <li>
              <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>
                <div class="col-lg-8">
                  <h6 class="mb-0">Example blog post title</h6>
                  <small class="text-body-secondary">January 15, 2024</small>
                </div>
              </a>
            </li>
            <li>
              <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>
                <div class="col-lg-8">
                  <h6 class="mb-0">This is another blog post title</h6>
                  <small class="text-body-secondary">January 14, 2024</small>
                </div>
              </a>
            </li>
            <li>
              <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>
                <div class="col-lg-8">
                  <h6 class="mb-0">Longer blog post title: This one has multiple lines!</h6>
                  <small class="text-body-secondary">January 13, 2024</small>
                </div>
              </a>
            </li>
          </ul> -->
            </div>

            <!-- <div class="p-4">
          <h4 class="fst-italic">Archives</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="#">March 2021</a></li>
            <li><a href="#">February 2021</a></li>
            <li><a href="#">January 2021</a></li>
            <li><a href="#">December 2020</a></li>
            <li><a href="#">November 2020</a></li>
            <li><a href="#">October 2020</a></li>
            <li><a href="#">September 2020</a></li>
            <li><a href="#">August 2020</a></li>
            <li><a href="#">July 2020</a></li>
            <li><a href="#">June 2020</a></li>
            <li><a href="#">May 2020</a></li>
            <li><a href="#">April 2020</a></li>
          </ol>
        </div> -->

            <!-- <div class="p-4">
          <h4 class="fst-italic">Elsewhere</h4>
          <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div> -->
          </div>
        </div>
      </div>

</main>




<?php
include "includes/footer.php";
?>