<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Holut Yudawan - Portfolio</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Jockey+One&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>

  <body>
    <div id="home" class="dashme">
      <header class="hero d-flex align-items-start justify-content-center">
        <nav class="navbar navbar-expand-lg nav-absolute w-100 px-4">
          <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center me-0" href="#">
              <img src="gambar/logo.png" alt="Logo" class="logo-img" />
            </a>

            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navMenu"
              aria-controls="navMenu"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="30"
                height="30"
                fill="white"
                viewBox="0 0 30 30"
              >
                <path
                  stroke="white"
                  stroke-width="3"
                  stroke-linecap="round"
                  d="M4 7h22M4 15h22M4 23h22"
                />
              </svg>
            </button>

            <div
              class="collapse navbar-collapse justify-content-end"
              id="navMenu"
            >
              <ul class="navbar-nav align-items-center">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item">
                  <a class="nav-link" href="#about">About Me</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#skill">Service & Skills</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#project">My Project</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact Me</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <div class="hero-box d-flex align-items-end">
          <img src="gambar/planet1.png" alt="planet" class="planet-img" />
          <div class="photo-wrap">
            <img src="gambar/yuda1.png" alt="Holut Yudawan" class="photo-img" />
          </div>

          <div class="content-card">
            <div class="text-card px-5 py-4">
              <h5 class="hello-text">HELLO!</h5>
              <h1 class="name-text">I Am HOLUT YUDAWAN</h1>
              <p class="lead-desc">
                UI/UX Designer & Frontend Developer Website that focuses on user
                experience and attractive visual interfaces.
              </p>
              <div class="d-flex align-items-center gap-3 mt-4">
                <div class="socials d-flex gap-3">
                  <a
                    href="https://www.instagram.com/yuda.hyn_?igsh=bDMzM2FtNjcwYnhi"
                    class="social-link"
                    ><img src="gambar/ig.png" alt="ig"
                  /></a>
                  <a href="#" class="social-link"
                    ><img src="gambar/twitter.png" alt="x/twitter"
                  /></a>
                  <a href="#" class="social-link"
                    ><img src="gambar/linkedin.png" alt="linkedin"
                  /></a>
                  <a
                    href="https://www.facebook.com/share/1D2bLnHxk9/"
                    class="social-link"
                    ><img src="gambar/fb.png" alt="facebook"
                  /></a>
                </div>

                <div class="ms-auto">
                  <a href="#" class="btn btn-outline-light contact-btn"
                    >Contact Me</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

      <div class="running-name">
        <div class="text-wrapper">
          <span
            >HOLUT YUDAWAN &nbsp; HOLUT YUDAWAN &nbsp; HOLUT YUDAWAN &nbsp;
            HOLUT YUDAWAN &nbsp; HOLUT YUDAWAN</span
          >
          <span
            >HOLUT YUDAWAN &nbsp; HOLUT YUDAWAN &nbsp; HOLUT YUDAWAN &nbsp;
            HOLUT YUDAWAN &nbsp; HOLUT YUDAWAN</span
          >
        </div>
      </div>

      <!--ABOUT ME-->
      <section id="about" class="about-section position-relative">
        <img src="gambar/bg2.png" class="about-bg" />
        <img src="gambar/planet2.png" class="planet2-img" />

        <div
          class="about-container d-flex align-items-start justify-content-center"
        >
          <div class="kotak-belakang">
            <img src="gambar/gaya.png" class="gaya-img" />
            <img src="gambar/yuda2.png" class="foto-saya" />

            <div class="about-name-box text-center">
              <h3 class="my-name">HOLUT YUDAWAN</h3>
              <div class="social-icons d-flex justify-content-center gap-3">
                <a href="#"><img src="gambar/ig.png" alt="IG" /></a>
                <a href="#"><img src="gambar/twitter.png" alt="Twitter" /></a>
                <a href="#"><img src="gambar/linkedin.png" alt="LinkedIn" /></a>
                <a href="#"><img src="gambar/fb.png" alt="Facebook" /></a>
              </div>
            </div>
          </div>
          <div class="aboutme"><p class="title-about">About Me</p></div>

          <div class="about-text d-flex flex-column gap-4">
            <!-- Kotak Atas -->
            <div class="about-card text-ukuran about-card-top">
              <p>
                Hello! My name is <b>Holut Yudawan</b>, a fifth semester student
                at Politekni Negeri Banyuwangi, majoring in Business and
                Informatics, Software Engineering Technology.<br />
                I have a strong interest in website and application interface
                design, particularly in creating attractive, clean, and
                user-friendly interfaces. I'm also actively developing the
                front-end of websites, although I haven't yet focused on the
                front-end of applications.
              </p>
            </div>

            <!-- Kotak Bawah -->
            <div class="about-card about-card-bottom">
              <p>
                I'm constantly learning about website development and am open to
                collaboration and learning new things to add value to users. For
                me, good design isn't just visually appealing, but also
                simplifies, speeds up, and clarifies the user experience.
              </p>
            </div>
          </div>
        </div>
      </section>
    </div>

    <div class="skill-running">
      <div class="skill-track">
        <!-- Duplikasi 1 -->
        <div class="skill-icons">
          <img src="gambar/figma.png" />
          <img src="gambar/html.png" />
          <img src="gambar/css.png" />
          <img src="gambar/js.png" />
          <img src="gambar/php.png" />
        </div>
        <div class="skill-icons">
          <img src="gambar/figma.png" />
          <img src="gambar/html.png" />
          <img src="gambar/css.png" />
          <img src="gambar/js.png" />
          <img src="gambar/php.png" />
        </div>
        <div class="skill-icons">
          <img src="gambar/figma.png" />
          <img src="gambar/html.png" />
          <img src="gambar/css.png" />
          <img src="gambar/js.png" />
          <img src="gambar/php.png" />
        </div>
      </div>
    </div>

    <!--MY SKILL-->

    <section id="skill" class="service-section">
      <h2 class="title">Service and Skills</h2>

      <!-- Bagian Kiri (3 Services) -->
      <div class="services-box">
        <div class="service-item">
          <img src="gambar/web.png" class="icon" />
          <span>Web Design</span>
        </div>
        <div class="service-item">
          <img src="gambar/mobile.png" class="icon" />
          <span>Mobile Design</span>
        </div>
        <div class="service-item">
          <img src="gambar/frontend.png" class="icon" />
          <span>Web Frontend</span>
        </div>
      </div>

      <!-- Bagian Kanan (Skills) -->
      <div class="skill-wrapper">
        <img src="gambar/planet3.png" class="planet" />
        <div class="skill-box">
          <h3 class="skill-title">Skills</h3>

          <div class="skill-row">
            <img src="gambar/figma.png" class="skill-icon" />
            <div class="skill-bar"><div style="width: 85%"></div></div>
          </div>

          <div class="skill-row">
            <img src="gambar/html.png" class="skill-icon" />
            <div class="skill-bar"><div style="width: 75%"></div></div>
          </div>

          <div class="skill-row">
            <img src="gambar/css.png" class="skill-icon" />
            <div class="skill-bar"><div style="width: 70%"></div></div>
          </div>

          <div class="skill-row">
            <img src="gambar/js.png" class="skill-icon" />
            <div class="skill-bar"><div style="width: 45%"></div></div>
          </div>

          <div class="skill-row">
            <img src="gambar/php.png" class="skill-icon" />
            <div class="skill-bar"><div style="width: 25%"></div></div>
          </div>
        </div>
      </div>
    </section>

    <!----  PROJECT -->

    <section id="project" class="project-section">
      <h2 class="project-title fade-hidden">My Project</h2>

      <div class="project-grid">
        <button class="project-item fade-hidden">
          <div class="project-image"></div>
          <div class="project-text">Project Title</div>
        </button>
        <button class="project-item fade-hidden">
          <div class="project-image"></div>
          <div class="project-text">Project Title</div>
        </button>
        <button class="project-item fade-hidden"
          onclick="window.open('https://mager.vercel.app/', '_blank')">
          <img class="project-image" src="gambar/mager.png" alt="Project 1" />
          <div class="project-text">
            Website MAGER (Monitoring Atlit & Gerak Efektif Rutin)
          </div>
        </button>
        <button class="project-item fade-hidden">
          <div class="project-image"></div>
          <div class="project-text">Project Title</div>
        </button>
        <button class="project-item fade-hidden">
          <div class="project-image"></div>
          <div class="project-text">Project Title</div>
        </button>
        <button class="project-item fade-hidden">
          <div class="project-image"></div>
          <div class="project-text">Project Title</div>
        </button>
      </div>
    </section>

    <footer>
      <div
        class="container d-flex flex-column align-items-center justify-content-center h-100"
      >
        <!-- Logo -->
        <img src="gambar/logo.png" alt="HY Logo" class="logo fade-hidden" />

        <!-- Navigation -->
        <nav class="my-4">
          <a href="#home" class="fade-hidden">Home</a>
          <a href="#about" class="fade-hidden">About Me</a>
          <a href="#skill" class="fade-hidden">Service</a>
          <a href="#project" class="fade-hidden">My Project</a>
          <a href="#" class="fade-hidden">Contact Me</a>
        </nav>

        <!-- Social Media Icons -->
        <div class="social-icons mb-3">
          <a href="https://www.instagram.com/yuda.hyn_?igsh=bDMzM2FtNjcwYnhi"
            ><img src="gambar/ig.png" alt="Instagram" class="fade-hidden"
          /></a>
          <a href="#"
            ><img src="gambar/twitter.png" alt="Twitter" class="fade-hidden"
          /></a>
          <a href="#"
            ><img src="gambar/linkedin.png" alt="LinkedIn" class="fade-hidden"
          /></a>
          <a href="https://www.facebook.com/share/1D2bLnHxk9/"
            ><img src="gambar/fb.png" alt="Facebook" class="fade-hidden"
          /></a>
        </div>

        <!-- Email -->
        <a href="#" class="email-text fade-hidden">ragilbro754@gmail.com</a>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
          Holut Yudawan © 2025. All Rights Reserved
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const hello = document.querySelector(".hello-text");
        const nameText = document.querySelector(".name-text");
        const lead = document.querySelector(".lead-desc");

        const helloTxt = "HELLO!";
        const nameTxt = "I Am HOLUT YUDAWAN";
        const leadTxt =
          "UI/UX Designer & Frontend Developer Website that focuses on user experience and attractive visual interfaces.";

        let i = 0,
          j = 0,
          k = 0;

        // Bersihkan teks awal
        hello.textContent = "";
        nameText.textContent = "";
        lead.textContent = "";

        // Mulai animasi bersamaan (animasi fade sudah mulai)
        function typeHello() {
          if (i < helloTxt.length) {
            hello.textContent += helloTxt.charAt(i);
            i++;
            setTimeout(typeHello, 30);
          } else {
            typeName();
          }
        }
        function typeName() {
          if (j < nameTxt.length) {
            nameText.textContent += nameTxt.charAt(j);
            j++;
            setTimeout(typeName, 30);
          } else {
            typeLead();
          }
        }
        function typeLead() {
          if (k < leadTxt.length) {
            lead.textContent += leadTxt.charAt(k);
            k++;
            setTimeout(typeLead, 10);
          }
        }

        setTimeout(typeHello, 100); // mulai setelah semua fade muncul
      });

      //ABOUT ME ANIMASI

      document.addEventListener("DOMContentLoaded", () => {
        const elementsFadeUp = document.querySelectorAll(".fade-up");
        const elementsFadeRight = document.querySelectorAll(".fade-right");

        // Observer untuk muncul fade saat scroll
        const observer = new IntersectionObserver(
          (entries) => {
            entries.forEach((entry) => {
              if (entry.isIntersecting) {
                if (entry.target.classList.contains("fade-up")) {
                  entry.target.classList.add("fade-up-show");
                }
                if (entry.target.classList.contains("fade-right")) {
                  entry.target.classList.add("fade-right-show");
                }
              }
            });
          },
          { threshold: 0.2 }
        );

        elementsFadeUp.forEach((el) => observer.observe(el));
        elementsFadeRight.forEach((el) => observer.observe(el));

        // ==== Efek Ketikan Khusus untuk Nama ====
        const nameEl = document.querySelector(".my-name");
        const nameText = "HOLUT YUDAWAN";
        let i = 0;

        const observerName = new IntersectionObserver(
          (entries) => {
            entries.forEach((entry) => {
              if (entry.isIntersecting) {
                nameEl.textContent = "";
                nameEl.style.opacity = 1;
                typeName();
                observerName.disconnect(); // agar tidak mengulang
              }
            });
          },
          { threshold: 0.5 }
        );

        function typeName() {
          if (i < nameText.length) {
            nameEl.textContent += nameText.charAt(i);
            i++;
            setTimeout(typeName, 120);
          }
        }

        observerName.observe(nameEl);
      });

      //ABOUT ME

      document.addEventListener("DOMContentLoaded", function () {
        // Elemen yang akan dianimasikan
        const elements = [
          { selector: ".title-about", animation: "fade-up" },
          { selector: ".kotak-belakang", animation: "fade-up" },
          { selector: ".about-card-top", animation: "fade-right" },
          { selector: ".about-card-bottom", animation: "fade-right" },
        ];

        // Tambahkan kelas fade-hidden ke semua target
        elements.forEach((item) => {
          const el = document.querySelector(item.selector);
          if (el) {
            el.classList.add("fade-hidden");
            el.dataset.animate = item.animation;
          }
        });

        // Sosial media (ikon muncul satu-satu)
        document.querySelectorAll(".social-icons a").forEach((el, i) => {
          el.classList.add("fade-hidden");
          el.dataset.animate = "fade-up";
          el.style.transitionDelay = `${i * 0.2}s`;
        });

        // Observer ketika elemen muncul di layar
        const observer = new IntersectionObserver(
          (entries) => {
            entries.forEach((entry) => {
              if (entry.isIntersecting) {
                entry.target.classList.add(entry.target.dataset.animate);
              }
            });
          },
          { threshold: 0.2 }
        );

        document.querySelectorAll(".fade-hidden").forEach((el) => {
          observer.observe(el);
        });

        // ✅ Efek ketikan untuk nama
        const nameEl = document.querySelector(".my-name");
        const fullName = "";
        nameEl.textContent = "";
        nameEl.classList.add("fade-hidden", "typewriter");

        observer.observe(nameEl);
        nameEl.dataset.animate = "fade-up";

        // Ketik saat muncul di layar
        const typeObserver = new IntersectionObserver((entries) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              let i = 0;
              const typing = setInterval(() => {
                if (i < fullName.length) {
                  nameEl.textContent += fullName[i];
                  i++;
                } else {
                  clearInterval(typing);
                  nameEl.style.borderRight = "none";
                }
              }, 120);
            }
          });
        });
        typeObserver.observe(nameEl);
      });

      //SERVICE AND SKILS

      document.addEventListener("DOMContentLoaded", () => {
        // Target animasi
        const title = document.querySelector(".title");
        const serviceItems = document.querySelectorAll(".service-item");
        const skillBox = document.querySelector(".skill-box");

        // Tambahkan class fade-hidden & arah animasi
        title.classList.add("fade-hidden", "fade-up");

        serviceItems.forEach((item, idx) => {
          item.classList.add("fade-hidden", "fade-left");
          item.style.transitionDelay = `${idx * 0.2}s`; // agar tidak bersamaan
        });

        skillBox.classList.add("fade-hidden", "fade-right");

        // Observer agar muncul ketika discroll
        const observer = new IntersectionObserver(
          (entries) => {
            entries.forEach((entry) => {
              if (entry.isIntersecting) {
                entry.target.classList.add("show");
              }
            });
          },
          { threshold: 0.2 }
        );

        observer.observe(title);
        serviceItems.forEach((item) => observer.observe(item));
        observer.observe(skillBox);
      });

      //ANIMASI MY PROJECT

      const observer = new IntersectionObserver(
        (entries) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              entry.target.classList.add("fade-show");
            }
          });
        },
        { threshold: 0.2 }
      );

      // Target elemen yang ingin dianimasikan
      document
        .querySelectorAll(".project-title, .project-item")
        .forEach((el) => {
          observer.observe(el);
        });

      //===================ANIMASI FOOTER=====================

      // Daftarkan semua elemen footer untuk animasi
      document
        .querySelectorAll(
          "footer .logo, footer nav a, footer .social-icons img, footer .email-text, footer"
        )
        .forEach((el) => observer.observe(el));
    </script>
  </body>
</html>
