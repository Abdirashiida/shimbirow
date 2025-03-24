<?php
include "includes/header.php";
?>
<style>
  /* General Styles */
  body {
    font-family: 'Arial', sans-serif;
    background-color: #f8f9fa;
    color: #333;
  }

  .kutub-partImage {
    display: flex;
    justify-content: center;
  }

  .title-qudbo {
    background-color: #EFF0F1;
    padding: 10px 20px;
    border-radius: 8px;
    font-size: 22px;
    font-weight: bold;
    color: #333;
    text-align: center;
  }

  .cover-part {
    background-image: url("assets/img/cover.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    width: 100%;
    height: 250px;
    border-radius: 10px;
  }

  .card {
    height: 280px;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  .mycard {
    width: 100%;
    padding: 20px;
    border-radius: 12px;
    background-color: #fff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
  }

  a {
    text-decoration: none;
    color: #007bff;
  }

  .qudbo {
    background-color: #fff;
    border: 1px solid #ccc;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
    border-radius: 6px;
    padding: 20px;
    margin: 10px 0;
  }

  .kutub-partImag {
    width: 100%;
    height: 300px;
  }

  .img-kutub {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 10px;
  }

  /* Marquee Container */
  .video-marquee-container {
    width: 100%;
    height: 800px;
    overflow: hidden;
    position: relative;
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  /* Marquee scrolling effect */
  .video-marquee {
    display: flex;
    flex-direction: column;
    gap: 10px;
    position: relative;
    animation: scrollUp 30s linear infinite;
  }

  /* Video item */
  .video-item {
    width: 100%;
    height: 200px;
    margin-bottom: 10px;
  }

  .video-item iframe {
    width: 100%;
    height: 100%;
    border-radius: 8px;
  }

  /* Container */
  .container-customer {
    max-width: 1000px;
    margin: 0 auto;
    padding: 25px;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .audio-player {
    width: 100%;
    background: #fff;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  .download-buttons {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-top: 20px;
  }

  .download-buttons a {
    width: 45%;
    padding: 10px;
    text-align: center;
    border-radius: 6px;
    font-size: 16px;
    transition: background-color 0.3s;
  }

  .download-buttons a:hover {
    background-color: #0069d9;
    color: white;
  }

  .khutbah-details {
    padding: 20px;
    background: #f1f3f5;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  h5, h6 {
    font-weight: 700;
    color: #333;
  }

  p {
    color: #555;
    line-height: 1.8;
  }

  /* Smooth infinite scrolling */
  @keyframes scrollUp {
    0% {
      transform: translateY(0%);
    }

    100% {
      transform: translateY(-50%);
    }
  }

  /* Pause scrolling when hovered */
  .video-marquee-container:hover .video-marquee {
    animation-play-state: paused;
  }

  /* Responsive Design */
  @media (max-width: 992px) {
    .cover-part {
      height: 200px;
    }

    .container {
      padding: 15px;
    }
  }

  @media (max-width: 576px) {
    .cover-part {
      height: 150px;
    }

    .download-buttons {
      flex-direction: column;
      gap: 10px;
    }
  }

  .short-text-part {
    padding: 15px 20px;
  }

</style>

<main class="container">
  <div class="p-4 p-md-5 mb-4 rounded cover-part"></div>

  <div class="container-customer mt-4">
    <!-- Audio Player -->
    <div class="audio-player text-center w-100  ">
      <audio controls class="w-75">
        <source src="assets\audio\1446-08-08.mp3" type="audio/mpeg">
        متصفحك لا يدعم تشغيل الصوت
      </audio>
    </div>

    <!-- Download Buttons -->
    <div class="download-buttons">
      <a href="khutbah.mp3" class="btn btn-success">
        ⬇ تنزيل الخطبة
      </a>
      <a href="khutbah-text.pdf" class="btn btn-primary">
        📄 تنزيل التفريغ
      </a>
    </div>

    <hr>

    <!-- Khutbah Details -->
    <div class="khutbah-details mt-3  ">
      <h5 style="text-align: right;">📖 خطبة بعنوان: تلاوة القرآن وقيام ليل رمضان</h5>
      
    </div>

    <hr>

    <!-- Khutbah Text -->
    <div class="mt-3">
      <h5 style="text-align: right;">الخطبة الأولى</h5>
      <p  style="text-align: right;">
      
      

رمضان هو شهر القرآن وموسم الطاعات، وفيه يكثر المسلمون من تلاوة كتاب الله والقيام به في الليل. فهو شهر الرحمة والمغفرة، ولذلك ينبغي الاجتهاد فيه للفوز برضوان الله.

**فضل تلاوة القرآن في رمضان:**

قراءة القرآن في رمضان لها فضل عظيم، فهو شهر نزول القرآن وفيه يضاعف الأجر. فقد كان جبريل يدارس النبي صلى الله عليه وسلم فيه القرآن في كل سنة.

**فوائد تلاوة القرآن:**

1. يهدي للتي هي أقوم.
2. ينشر الطمأنينة في قلوب المسلمين.
3. يزيد في الحسنات ويمحو السيئات.
4. يجلب لقارئه شفاعة يوم القيامة.

**قيام الليل في رمضان:**

قيام الليل من أفضل العبادات في رمضان. وقال النبي صلى الله عليه وسلم: "من قام رمضان إيمانًا واحتسابًا غُفر له ما تقدم من ذنبه".

**أفضل أوقات القيام:**

1. الثلث الأخير من الليل.
2. الوقت بعد المنتصف.

**الخاتمة:**

لنكن من المجتهدين في هذا الشهر المبارك ونغتنم فرصته للقرب من الله عز وجلّ.


      </p>
    </div>
  </div>
</main>

<?php
include "includes/footer.php";
?>
