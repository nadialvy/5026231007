<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>TagTeamSigns</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <link rel="stylesheet" href="css/sweetalert2.css" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Simple line icons-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css"
    rel="stylesheet" />
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic"
    rel="stylesheet" type="text/css" />
  <link
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap"
    rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
    rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  @vite(['resources/css/utsstylesheet.css', 'resources/js/uts.js'])



</head>

<body id="page-top">
  <!-- Navigation-->
  <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand"><a href="#page-top">TagTeamSigns</a></li>
      <li class="sidebar-nav-item"><a href="#page-top">Home</a></li>
      <li class="sidebar-nav-item"><a href="#about">About</a></li>
      <li class="sidebar-nav-item"><a href="#services">Services</a></li>
      <li class="sidebar-nav-item"><a href="#portfolio">Portfolio</a></li>
      <li class="sidebar-nav-item"><a href="#contact">Contact</a></li>
    </ul>
  </nav>
  <!-- Header-->
  <header class="masthead d-flex align-items-center">
    <div class="container px-4 px-lg-5 text-center" style="color: white">
      <h1 class="mb-1">SIGNS</h1>
      <h1 style="font-size: 64px">
        DESIGN <span style="font-size: 20px">◼</span> BUILD
        <span style="font-size: 20px">◼</span> INSTALL
      </h1>
      <h3 class="mb-5 open-sans-font" style="font-weight: 500">
        Where innovation meets construction
      </h3>
      <a class="btn btn-xl btn-findout" href="#about" style="background-color: #d7342d; outline: none">Find Out More</a>
    </div>
  </header>
  <!-- About-->
  <section class="content-section bg-light" id="about">
    <div class="container px-4 px-lg-5 text-center">
      <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-lg-10">
          <h2>
            We are a Full Service Sign Company with Over 20 Years in the
            Industry.
          </h2>
          <p class="lead mb-5">
            We specialize in Commercial Building Signs, Storefront Signs and
            Monument Signs!
          </p>
          <a class="btn btn-dark btn-xl" href="#services">What We Offer</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Services-->
  <section class="content-section text-white text-center" id="services" style="background-color: #d7342d">
    <div class="container px-4 px-lg-5">
      <div class="content-section-heading">
        <h3 class="mb-0">Services</h3>
        <h2 class="mb-5">What We Offer</h2>
      </div>
      <div class="row gx-4 gx-lg-5">
        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
          <!-- <span class="service-icon rounded-circle mx-auto mb-3"></span> -->
          <div style="background-color: white; width: 100px; height: 100px"
            class="rounded-circle d-flex justify-content-center align-items-center mx-auto mb-3">
            <img src={{ asset("assets/uts/icon/store-gray.png") }} alt="store" width="32px" height="32px" />
          </div>
          <p class="open-sans-font" style="font-size: 24px; font-weight: 500">
            Storefront Signs
          </p>
        </div>
        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
          <div style="background-color: white; width: 100px; height: 100px"
            class="rounded-circle d-flex justify-content-center align-items-center mx-auto mb-3">
            <img src={{ asset("assets/uts/icon/commercial-gray.png") }} alt="store" width="32px" height="32px" />
          </div>
          <p class="open-sans-font" style="font-size: 24px; font-weight: 500">
            Commercial Signs
          </p>
        </div>
        <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
          <div style="background-color: white; width: 100px; height: 100px"
            class="rounded-circle d-flex justify-content-center align-items-center mx-auto mb-3">
            <img src={{ asset("assets/uts/icon/monument-gray.png") }} alt="store" width="32px" height="32px" />

          </div>
          <p class="open-sans-font" style="font-size: 24px; font-weight: 500">
            Monument Signs
          </p>
        </div>
        <div class="col-lg-3 col-md-6">
          <div style="background-color: white; width: 100px; height: 100px"
            class="rounded-circle d-flex justify-content-center align-items-center mx-auto mb-3">
            <img src={{ asset("assets/uts/icon/service-gray.png") }} alt="store" width="32px" height="32px" />
          </div>
          <p class="open-sans-font" style="font-size: 24px; font-weight: 500">
            Service
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio-->
  <section class="content-section" id="portfolio">
    <div class="container px-4 px-lg-5">
      <div class="content-section-heading text-center">
        <h3 class="mb-0" style="color: #d7342d">Portfolio</h3>
        <h2 class="mb-5">Our Work</h2>
      </div>
      <div class="row gx-0">
        <div class="col-lg-6">
          <a class="portfolio-item" href="#!">
            <div class="caption">
              <div class="caption-content">
                <div class="h2">Crepella Crepes</div>
                <p class="mb-0">Avondale, AZ</p>
              </div>
            </div>
            <img class="img-fluid" src={{ asset("assets/uts/img/work/crepes.avif") }} alt="..." />
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="#!">
            <div class="caption">
              <div class="caption-content">
                <div class="h2">Burns Martial Arts</div>
                <p class="mb-0">Phoenix, AZ</p>
              </div>
            </div>
            <img class="img-fluid" src={{ asset("assets/uts/img/work/kungfu.avif") }} alt="..." />
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="#!">
            <div class="caption">
              <div class="caption-content">
                <div class="h2">azWHOLEistic</div>
                <p class="mb-0">Phoenix, AZ</p>
              </div>
            </div>
            <img class="img-fluid" src={{ asset("assets/uts/img/work/azwholeistic.avif") }} alt=" ..." />
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="#!">
            <div class="caption">
              <div class="caption-content">
                <div class="h2">Arizona</div>
                <p class="mb-0">Amadia, AZ</p>
              </div>
            </div>
            <img class="img-fluid" src="{{ asset("assets/uts/img/work/arizona.png") }}" alt="..." />
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- Callout-->
  <section class="callout">
    <div class="container px-4 px-lg-5 text-center">
      <h2 class="mx-auto mb-5">Our Mission</h2>
      <p style="font-family: 'Open Sans'; font-size: 18px" class="mb-5 px-4">
        TagTeamSigns was established in 2001 to make the process of purchasing
        high quality, cost effective signs available to everyone.When you work
        with TagTeamSigns you'll find your expectations met or exceeded.
        You'll find us professional and proactive in all of our practices.
        You'll be impressed with our efficient systems, use of technology and
        competitive pricing.From start to finish TagTeamSigns provides
        complete project management, designed with each clients unique needs
        in mind. This has made TagTeamSigns one of the most respected sign
        companies in Arizona for the past 20 years
      </p>
    </div>
  </section>
  <div class="contact form" style="background-color: white; color: #d7342d; padding: 4rem">
    <div class="row">
      <!-- Contact Form -->
      <div class="col-md-6 mb-4">
        <h2 style="color: #d7342d; font-weight: bold; font-size: 48px">
          Get In Touch!
        </h2>
        <form>
          <div class="form-row">
            <div class="form-group col-md-6 my-3">
              <label for="name" style="margin-bottom: 4px">Enter your name
              </label>
              <input id="firstName" name="name" type="text" class="form-control" id="firstName" placeholder="First Name"
                style="
                    background-color: rgb(242, 242, 242);
                    border: none;
                    color: white;
                  " />
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label style="margin-bottom: 4px" for="email">Enter your email
              </label>
              <input name="email" type="email" class="form-control" id="email" placeholder="Email" style="
                    background-color: rgb(242, 242, 242);
                    border: none;
                    color: white;
                  " />
            </div>
            <div class="form-group col-md-6 my-3">
              <label style="margin-bottom: 4px" for="">Enter your subject
              </label>
              <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" style="
                    background-color: rgb(242, 242, 242);
                    border: none;
                    color: white;
                  " />
            </div>
          </div>
          <div class="form-group">
            <label style="margin-bottom: 4px" for="message">Enter your message
            </label>
            <textarea name="message" class="form-control" id="message" rows="4" placeholder="Message" style="
                  background-color: rgb(242, 242, 242);
                  border: none;
                  color: white;
                "></textarea>
          </div>
          <button type="submit" class="btn" style="
                background-color: #d7342d;
                color: white;
                font-weight: bold;
                padding: 8px 25px;
                border-radius: 5px;
                margin-top: 12px;
              ">
            SUBMIT
          </button>
        </form>
      </div>

      <!-- Contact Info -->
      <div class="col-md-6" style="text-align: end">
        <!-- <h5 style="color: #ff3399; font-weight: bold">Contact Information</h5>
          <p style="margin-top: 20px">
            3 W. Auglaize St.<br />
            P.O. Box 37<br />
            Wapakoneta, OH 45895
          </p>
          <p>
            Email:
            <a href="mailto:riversideartcenter@gmail.com" style="color: #ffcccc"
              >riversideartcenter@gmail.com</a
            >
          </p>
          <p>Phone: <span style="font-weight: bold">419-738-2352</span></p>
          <p>
            Open Hours:<br />
            Wednesday - Friday: 12:00 PM - 4:00 PM<br />
            Saturday: 10:00 AM - 2:00 PM
          </p>
          <h6 style="color: #ff3399; font-weight: bold; margin-top: 30px">
            Follow Us
          </h6>
          <p>
            <a href="#" style="color: white">instagram</a>
          </p> -->
      </div>
    </div>
  </div>
  <!-- Call to Action-->
  <section class="content-section text-white" style="background-color: #d7342d">
    <div class="container px-4 px-lg-5 text-center">
      <h2 class="mb-4">The buttons below are impossible to resist...</h2>
      <a class="btn btn-xl btn-light me-4" href="#!">Click Me!</a>
      <a class="btn btn-xl btn-dark" href="#!">Look at Me!</a>
    </div>
  </section>
  <!-- Map-->
  <div class="map" id="contact">
    <iframe
      src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
    <br />
    <small><a
        href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a></small>
  </div>
  <!-- Footer-->
  <footer class="footer text-center">
    <div class="container px-4 px-lg-5">
      <ul class="list-inline mb-5">
        <li class="list-inline-item">
          <div class="rounded-circle p-4 d-flex justify-content-center align-items-center"
            style="background-color: #d7342d; width: 60px; height: 60px">
            <img src={{ asset("assets/uts/icon/fb.png") }} alt="fb" width="26px" height="26px" />
          </div>
        </li>
        <li class="list-inline-item">
          <div class="rounded-circle p-4 d-flex justify-content-center align-items-center"
            style="background-color: #d7342d; width: 60px; height: 60px">
            <img src={{ asset("assets/uts/icon/ig.png") }} alt="fb" width="26px" height="26px" />
          </div>
        </li>
        <li class="list-inline-item">
          <div class="rounded-circle p-4 d-flex justify-content-center align-items-center"
            style="background-color: #d7342d; width: 60px; height: 60px">
            <img src={{ asset("assets/uts/icon/linkedin.png") }} alt="fb" width="26px" height="26px" />
          </div>
        </li>
      </ul>
      <p class="text-muted small mb-0">Copyright &copy; TagTeamSigns 2025</p>
    </div>
  </footer>
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
  <script>
  document.querySelector("form").addEventListener("submit", function(e) {
    e.preventDefault();

    const name = document.getElementsByName("name").value;
    const email = document.getElementsByName("email").value;
    const subject = document.getElementsByName("subject").value;
    const message = document.getElementsByName("message").value;

    if (!name || !email || !subject || !message) {
      Swal.fire({
        icon: "warning",
        title: "Form Incomplete",
        text: "Please fill in all fields.",
      });
      return;
    }

    Swal.fire({
      icon: "success",
      title: "Message Sent!",
      text: "Thank you for contacting us.",
    });

    document.querySelector("form").reset();
  });
  </script>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>