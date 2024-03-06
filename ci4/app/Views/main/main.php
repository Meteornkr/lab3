<!DOCTYPE html>
<html lang="en">
<head>
  <title>Personal Website</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@400;700&display=swap" rel="stylesheet">
  <link href="<?= base_url('CSS/style.css') ?>" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>

  </style>
</head>

<body>
  <div class="wrapper">
    <section class="me">
      <div class="mask">
          <button>About me</button>
      </div>
      <span class="close">
          <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
              <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
          </svg>
      </span>
        <div class="inner">
          <div class="bg"></div>
            <div class="text">
              <div class="box">
                  <h3>About me</h3>
                  <p>I'm Alhaitham, the Akademiya's scribe. If you wish to access an archived file, please submit an application according to the prescribed format.
Oh, your form isn't ready? Not to worry. You can come again on the next working day. My work hours are posted outside the office.
                  </p>
                  <p style="text-align:center;">
                    <a href="<?= base_url('forms') ?>" style="color:black;">guests</a>
                  </p>
                  <div class="socials">
                    <p>Follow me on:</p>
                    <a href="https://www.facebook.com/janmichael.villeza/"><img src="./images/fb.png" alt = "fb"></a>
                    <a href="https://www.instagram.com/jmvlza/"><img src="./images/ig.png" alt = "ig"></a>
                    <a href="https://www.github.com/meteornkr/"><img src="./images/github.png" alt = "github"></a>
                    <a href="https://www.linkedin.com/in/janmichaelvilleza/"><img src="./images/linkedin.png" alt = "linkedin"></a>
                  </div>
              </div>
            </div>
        </div>
  </section>

  <section>
    <div class="text1">
      <form action="<?= base_url('photos') ?>" method="get">
        <button type="submit"style="color: black; cursor: pointer;">Photography</button>
      </form>
      <p>Most people are wary of interacting with me.</p>
      <p>Perhaps they're afraid, or maybe they think I'm difficult to get along with.</p>
      <p>I hope to keep things this way.</p>
    </div>
    <img src="./images/kamera.png" alt="">
    </section>

    <section>
      <p>nothing here..</p>
    </section>

    <section>
    <p>still nothing here</p>
    </section>

      

  </div>

  <script src="test.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
  <script src="<?= base_url('JS/app.js') ?>"></script>

</body>
</html>
