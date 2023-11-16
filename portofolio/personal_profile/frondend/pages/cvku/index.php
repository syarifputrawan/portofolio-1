<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cv mas ari</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="cv-card ">
        <div class="row">
            <div class="col-md-5">
                <img class="photo-header" src="ari.jpeg" alt="" width="250" height="250">
            </div>
            <div class="col-md-5">
                <h2 class="mt-5">musa al as ari</h2>
                <h5 class="mt-1"> web programer</h5>

                <!-- skill progres -->
                <div class="my-2">
                    <b>HTML</b>
                    <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-success" style="width: 70%">70%</div>
                    </div>
                    <b>CSS</b>
                    <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-success" style="width: 80%">80%</div>
                    </div>
                    <b>PHP</b>
                    <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-success" style="width: 90%">90%</div>
                    </div>
                    <b>BOOTSTRAP</b>
                    <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-success" style="width: 100%">100%</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 mx-5">
                <h2>Tentang Saya</h2>
                <p>Halo, nama saya ari, dan saya adalah seorang programmer dengan minat mendalam dalam dunia teknologi. Sejak saya pertama kali menyentuh komputer, saya telah jatuh cinta dengan dunia pemrograman.
                </p>
            </div>

            <div class="col-md-5">
                <h2>Pendidikan Terakhir</h2>
                <div class="row">
                    <div class="col-sm-2">
                        <h4>2017</h4>
                    </div>
                    <div class="col-sm-5">madrasah aliyah (darussalam)</div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <h4>2020</h4>
                    </div>
                    <div class="col-sm-5">kuliah jurusan sistem informasi (bsi)</div>
                </div>
            </div>
        </div>

        <!-- pengalaman kerja -->
        <div class="row">
            <div class="col-md-6 mx-5">
                <h2>Pengalaman Kerja</h2>
                <div class="row">
                    <div class="col-sm-2">
                        <h4>2019</h4>
                    </div>
                    <div class="col-sm-10">
                        <h5>Web programer</h5>
                        <p>CV Access PT lauwba Techno indonesia</p>
                        <hr>

                        <p>Pengalaman kerja di PT Lawuba Techno Indonesia juga memberikan wawasan tentang pentingnya kolaborasi tim dalam mencapai tujuan bersama. Saya terlibat dalam proyek-proyek tim yang menuntut komunikasi yang efektif, pemecahan masalah bersama, dan koordinasi yang baik. Hal ini tidak hanya meningkatkan keterampilan interpersonal saya, tetapi juga memperkaya pengalaman kerja saya secara keseluruhan.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <h2>Kontak Pribadi</h2>

                <div class="row">
                    <div class="col-sm-1"> <i class="fa-solid fa-envelope"></i> </div>
                    <div class="col-sm-8">
                        <p>musaalari77@gmail.com</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-1"> <i class="fa-solid fa-phone"></i> </div>
                    <div class="col-sm-8">
                        <p>+6288985911006</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-1"> <i class="fa-brands fa-facebook"></i> </div>
                    <div class="col-sm-8">
                        <p>musa al as ari</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-1"> <i class="fa-brands fa-youtube"></i> </div>
                    <div class="col-sm-8">
                        <p>ari,web_programer</p>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <button class="btn btn-outline-primary mt-5 mx-5" id="print-cv" onclick="cetakCV()" type="button"><i class="fa-solid fa-print"></i>
        print
    </button>

    <script>
        function cetakCV() {
            window.print();
        }
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>