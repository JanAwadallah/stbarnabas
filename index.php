<?php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="main-style-V1.1.css" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style.css" />
    <title>St.Barnabas</title>
  </head>
  <body>
    <div class="" id="cardContainer">
      <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html"
            ><i class="fas fa-bible"></i> St. Barnabas Group</a
          >
        </div>
      </nav>

      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button
            class="nav-link active"
            id="home-tab"
            data-bs-toggle="tab"
            data-bs-target="#home"
            type="button"
            role="tab"
            aria-controls="home"
            aria-selected="true"
          >
            Atheism
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button
            class="nav-link"
            id="profile-tab"
            data-bs-toggle="tab"
            data-bs-target="#profile"
            type="button"
            role="tab"
            aria-controls="profile"
            aria-selected="false"
          >
            Sexual Health
          </button>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div
          class="tab-pane fade show active"
          id="home"
          role="tabpanel"
          aria-labelledby="home-tab"
        >
          <div id="heading"><h1>1-Our Faith library</h1></div>
          <div class="flexbox-container">
            <div class="flexbox-item flexbox-item1">
              <div class="card">
                <img
                  src="images/BarnabasTeam.png"
                  class="card-img-top"
                  alt="Book"
                />
                <div class="card-body">
                  <h5 class="card-title">Barnabas Group</h5>
                  <center>
                    <p class="card-text">
                      First preparation meeting for Barnabas Group with Father
                      Marcos Yassa
                    </p>
                  </center>
                  <a
                    target='blank'
                    href='docs/BarnabasTeam.pdf'
                    class="btn btn-primary button show-modal">
                    Open
                  </a>
                  <a
                    id="fileDownload"
                    class="btn"
                    href="docs/BarnabasTeam.pdf"
                    download="BarnabasTeam.pdf"
                    ><i class="fas fa-download"> Download</i></a
                  >
                </div>
              </div>
            </div>

            <div class="flexbox-item flexbox-item2">
              <div class="card">
                <img
                  src="images/Catechism.png"
                  class="card-img-top"
                  alt="Book"
                />
                <div class="card-body">
                  <h5 class="card-title">Catechism</h5>
                  <center>
                    <p class="card-text">
                      الجزء الاول‫:‬ مقدمات في كاتيكيزم القبطي إعداد القمص تادرس
                      يعقوب ملطي و الشماس بيشوي بشرى فايز
                    </p>
                  </center>
                  <a
                  target='blank'
                    href='docs/Catechism.pdf'
                    class="btn btn-primary button show-modal"
                  >
                    Open
                  </a>
                  <a
                    id="fileDownload"
                    class="btn"
                    href="docs/Catechism.pdf"
                    download="Catechism.pdf"
                    ><i class="fas fa-download"> Download</i></a
                  >
                </div>
              </div>
            </div>

            <div class="flexbox-item flexbox-item2">
              <div class="card">
                <img
                  src="images/HolyBibletruthy.png"
                  class="card-img-top"
                  alt="Book"
                />
                <div class="card-body">
                  <h5 class="card-title">صحة الكتاب المقدس</h5>
                  <center>
                    <p class="card-text">
                      كتاب “ صحة الكتاب المقدس و خرافة إنجيل برنابا” إصدار كنيسة
                      القديسين مارمرقس الرسول والبابا بطرس خاتم الشهداء
                      بالإسكندرية
                    </p>
                  </center>
                  <a
                  target='blank'
                    href='docs/SehatAlketabAlmokades.pdf'
                    class="btn btn-primary button show-modal"
                  >
                    Open
                  </a>
                  <a
                    id="fileDownload"
                    class="btn"
                    href="docs/SehatAlketabAlmokades.pdf"
                    download="صحة الكتاب المقدس.pdf"
                    ><i class="fas fa-download"> Download</i></a
                  >
                </div>
              </div>
            </div>

            <div class="flexbox-item flexbox-item2">
              <div class="card">
                <img
                  src="images/ChristiansDogma.png"
                  class="card-img-top"
                  alt="Book"
                />
                <div class="card-body">
                  <h5 class="card-title">عقيدة المسيحيين في المسيح</h5>
                  <center>
                    <p class="card-text">
                      كتاب عقيدة المسيحيين في المسيح لنيافة الأنبا يؤنس أسقف
                      الغربية المتنيح
                    </p>
                  </center>
                  <!-- <a href="docs/ChristiansDogma InChrist.pdf" class="btn btn-primary button" target="blank">Open</a><br> -->
                  <a
                  target='blank'
                    href='docs/ChristiansDogma InChrist.pdf'
                    class="btn btn-primary button show-modal"
                  >
                    Open
                  </a>
                  <a
                    id="fileDownload"
                    class="btn"
                    href="docs/ChristiansDogma InChrist.pdf"
                    download="ChristiansDogma InChrist.pdf"
                    ><i class="fas fa-download"> Download</i></a
                  >
                </div>
              </div>
            </div>

            <div class="flexbox-item flexbox-item2">
              <div class="card">
                <img src="images/Defense.png" class="card-img-top" alt="Book" />
                <div class="card-body">
                  <h5 class="card-title">دليل الدفاعيات</h5>
                  <center>
                    <p class="card-text">
                      كتاب دليل الدفاعيات - الجزء الأول إصدار كنيسة مارمرقس مصر
                      الجديدة
                    </p>
                  </center>
                  <a
                  target='blank'
                    href='docs/ChildrenChristianApologetics-1.pdf'
                    class="btn btn-primary button show-modal"
                  >
                    Open
                  </a>
                  <a
                    id="fileDownload"
                    class="btn"
                    href="docs/ChildrenChristianApologetics-1.pdf"
                    download="ChildrenChristianApologetics-1.pdf"
                    ><i class="fas fa-download"> Download</i></a
                  >
                </div>
              </div>
            </div>

            <div class="flexbox-item flexbox-item2">
              <div class="card">
                <img
                  src="images/ElOrthodoxya.png"
                  class="card-img-top"
                  alt="Book"
                />
                <div class="card-body">
                  <h5 class="card-title">الأرثوذكسية قانون إيمان لكل العصور</h5>
                  <center>
                    <p class="card-text">
                      كتاب الأرثوذكسية قانون إيمان لكل العصور – الاب انتوني
                      كونيارس مراجعة و تقديم نيافة الأنبا أثناسيوس أسقف بني مزار
                      المتنيح
                    </p>
                  </center>
                  <a
                  target='blank'
                    href='docs/el_orsozksya_kanon_2iman_lkol_el3sor.pdf'
                    class="btn btn-primary button show-modal"
                  >
                    Open
                  </a>
                  <a
                    id="fileDownload"
                    class="btn"
                    href="docs/el_orsozksya_kanon_2iman_lkol_el3sor.pdf"
                    download="el_orsozksya_kanon_2iman_lkol_el3sor.pdf"
                    ><i class="fas fa-download"> Download</i></a
                  >
                </div>
              </div>
            </div>

            <div class="flexbox-item flexbox-item2">
              <div class="card">
                <img
                  src="images/FaithLife.png"
                  class="card-img-top"
                  alt="Book"
                />
                <div class="card-body">
                  <h5 class="card-title">حياة الإيمان</h5>
                  <center>
                    <p class="card-text">
                      كتاب حياة الإيمان هو من سلسلة الإيمان والرجاء والمحبة ضمن
                      مجموعة الكتب الروحية في اللاهوت الروحي لقداسة البابا شنودة
                      الثالث
                    </p>
                  </center>
                  <a
                  target='blank'
                    href='docs/LifeOfFath-PopeShenodah.pdf'
                    class="btn btn-primary button show-modal"
                  >
                    Open
                  </a>
                  <a
                    id="fileDownload"
                    class="btn"
                    href="docs/LifeOfFath-PopeShenodah.pdf"
                    download="LifeOfFath-PopeShenodah.pdf"
                    ><i class="fas fa-download"> Download</i></a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="tab-pane fade"
          id="profile"
          role="tabpanel"
          aria-labelledby="profile-tab"
        >
        
          <div class="flexbox-container">
            <div class="flexbox-item flexbox-item1">
              <div class="card">
                <img
                  src="images/Sex-in-its-lights-and-shades.png"
                  class="card-img-top"
                  alt="Book"
                />
                <div class="card-body">
                  <h5 class="card-title">الجنس في أنواره و ظلاله</h5>
                  <center>
                    <p class="card-text">
                      الجنس في أنواره و ظلاله, رؤية إنسانية و إيمانية للكاتب كوستي بندلي
                    </p>
                  </center>
                  <a
                    target='blank'
                    href='docs/SehatAlketabAlmokades.pdf'
                    class="btn btn-primary button show-modal">
                    Open
                  </a>
                  <a
                    id="fileDownload"
                    class="btn"
                    href="docs/Sex-in-its-lights-and-shades.pdf"
                    download="Sex-in-its-lights-and-shades.pdf"
                    ><i class="fas fa-download"> Download</i></a
                  >
                </div>
              </div>
            </div>

            <div class="flexbox-item flexbox-item2">
              <div class="card">
                <img
                  src="images/ChristInMarriageAndtheFamily.png"
                  class="card-img-top"
                  alt="Book"
                />
                <div class="card-body">
                  <h5 class="card-title">المسيح في الزواج و الاسرة</h5>
                  <center>
                    <p class="card-text">
                      كتاب المسيح في الزواج و الاسرة <br>تأليف أ د نبيل باقي سليمان استاذ بكليات الطب واستشاري الزواج و الاسرة<br> تقديم الانبا باخوميوس
                    </p>
                  </center>
                  <a
                  target='blank'
                    href='docs/ChristInMarriageAndtheFamily.pdf'
                    class="btn btn-primary button show-modal"
                  >
                    Open
                  </a>
                  <a
                    id="fileDownload"
                    class="btn"
                    href="docs/ChristInMarriageAndtheFamily.pdf"
                    download="ChristInMarriageAndtheFamily.pdf"
                    ><i class="fas fa-download"> Download</i></a
                  >
                </div>
              </div>
            </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- <div id="canvas" class="">
      <canvas id="pdf-render"></canvas>
    </div> -->

    <!--<div class="modall hidden">-->
    <!--  <button class="close-modal">&times;</button>-->

      <div class="pdfDiv"></div>
    <!--</div>-->
    <div class="overlay hidden"></div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>
    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
    <script src="js/main-V2-2.js"></script>
  </body>
</html>
