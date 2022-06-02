<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hospital Anxiety & Depression Test | HADS</title>
  <link rel="stylesheet" href="hadstest1.css">
  <!-- FontAweome CDN Link for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <!-- Favicons -->
  <link href="assets/img/fyp-favicon.svg" rel="icon">

</head>

<body>
  <!-- start Quiz button -->
  <div class="start_btn"><button>Start Test</button></div>

  <!-- Info Box -->
  <div class="info_box">
    <div class="info-title"><span>Rules to follow for Test</span></div>
    <div class="info-list">
      <div class="info">1. Carefully read the question before answering.</div>
      <div class="info">2. Once you select your answer, it can't be undone.</div>
      <div class="info">3. Give answers based on your past 2 weeks experiences.</div>
      <div class="info">4. Select that option which comes in your mind fisrt.</div>
      <div class="info">5. <span>This HADS test is officially recommended by professionals.</span></div>
    </div>
    <div class="buttons">
      <button class="quit">Exit Test

      </button>
      <button class="restart">Continue</button>
    </div>
  </div>

  <!-- Quiz Box -->
  <div class="quiz_box">
    <header>
      <div class="title">Hospital Anxiety & Depression Test | HADS</div>
    </header>
    <section>
      <div class="que_text">
        <!-- Here inserted question from JavaScript -->
      </div>
      <div class="option_list">
        <!-- Here inserted options from JavaScript -->
      </div>
    </section>

    <!-- footer of Quiz Box -->
    <footer>
      <div class="total_que">
        <!-- Here inserted Question Count Number from JavaScript -->
      </div>
      <button class="next_btn">Next Ques</button>
    </footer>
  </div>

  <!-- Result Box -->
  <div class="container-fluid">
    <div class="row result_box">

      <div class="col-md-12 text-center">

        <div class="header mt-4 mb-5">
            <h6>“Relief in life , makes you more alive”</h6>
            <a href="https://smartpsychrelief.pist.pk/" target="_blank">
              <h6>Smart Psych Relief</h6>
            </a>
            <h6>All right reserved © Smart Psych Relief</h6>
        </div>

        <div class="col-md-12 text-center">
            <!-- <form action="" method="post" class="text-center">
                <fieldset class="text-center">
                  <input placeholder="Your name" type="text" tabindex="1" required autofocus />
                </fieldset>
                <fieldset class="text-center">
                  <input placeholder="Email Address" type="email" tabindex="2" required />
                </fieldset>       
            </form> -->
            <div class="complete_text">You've completed the Test!</div>
            <div class="score_text">
              <!-- Here inserted Score Result from JavaScript -->
            </div>
            <div class="rangedep my-2">
              <!-- range of depresion and and anxiety -->
            </div>
            <div class="rangeanx my-2">
              <!-- range of depresion and and anxiety -->
            </div>
            <div style="width: 100%;" class="text-center">
                <a style="color: #fff; text-align: center; margin: auto; text-decoration: none;" href="./our-psychotherapies.php"><button class="relaxation-btn"
                    style="font-size: .8rem; display:none; outline:none; border: 1px solid #1fa7cb; border-radius: 10px; background: #f1f1f1; padding: .55rem; margin: 1.3rem auto">Suggested
                    Mind Relaxation and Virtual Therapy</button></a>
                <a style="color: #fff; text-align: center; margin: auto; text-decoration: none;" href="./our-psychologist.php"><button
                    class="contact-psychologist-btn"
                    style="font-size: .8rem; display:none; outline:none; border: 1px solid #1fa7cb; border-radius: 10px; background: #f1f1f1; padding: .55rem; margin: 1.3rem auto">Suggested
                    Contact Real Time Psychologist</button></a>
                <div class="buttons">
                  <button class="restart text-center m-auto">Reattempt Test</button>
                  <button class="quit text-center m-auto">Quit Test</button>
                </div>
            </div>
        </div>

    
        
      </div>


    </div>

  </div>

  <script>

    let dt = new Date();
    document.getElementById('date-time').innerHTML = dt;

  </script>

  <script src="./hadstest1.js"></script>
  <!--For working of quiz -->
  <script src="./hadstestquestions.js"></script>
  <!--For questions only -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/main12.js"></script>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/popper.js"></script>

</body>

</html>