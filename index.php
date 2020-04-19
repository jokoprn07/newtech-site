<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NewTech adalah sebuah Blog sederhana yang berisi tentang Berita, Teknologi, Tutorial, Tips & Trick, dan juga Game.">
    <meta name="keyword" content="NewTech adalah sebuah Blog sederhana yang berisi tentang Berita, Teknologi, Tutorial, Tips & Trick, dan juga Game.">
    <meta property="og:title" content="NewTech adalah sebuah Blog sederhana yang berisi tentang Berita, Teknologi, Tutorial, Tips & Trick, dan juga Game.">
    <meta property="og:description" content="NewTech adalah sebuah Blog sederhana yang berisi tentang Berita, Teknologi, Tutorial, Tips & Trick, dan juga Game.">
    <meta property="og:image" content="img/icon.png">
    <link rel="icon" href="img/icon.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>NewTech</title>
</head>
<body>

    <!-- Navbar NewTech -->

    <nav class="navbar navbar-transparent">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed btn" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Button Nav</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand logo page-scroll" href="#">NewTech</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#welcome" class="page-scroll">Home</a></li>
                <li><a href="#about" class="page-scroll">About</a></li>
                <li><a href="http://www.newtech.cf/">Blog</a></li>
                <li><a href="#contact" class="page-scroll">Contact Us</a></li>
            </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
        </nav>

    <!-- NavBar End -->

    <!-- Welcome -->
    <section class="welcome" id="welcome">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="newtech">Welcome to NewTech</h1>
                    <p>We Learn to Getting New Science</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Welcome -->

    <!-- About -->
    
    <section class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="tentang">About</h1>
                </div>
                <div class="col-sm-6">
                    <img src="img/icon.png" alt="Logo NewTech" class="logo1">
                </div>
                <div class="col-sm-6">
                    <p class="about-text">
                        NewTech adalah sebuah Blog sederhana yang berisi tentang Berita, Teknologi, Tutorial, Tips & Trick, dan juga Game. Blog ini berdiri pada tanggal 29 Maret 2020, Blog ini dibuat karena keinginan saya untuk berbagi tentang apa yang saya ketahui dibidang Teknik Informatika. Namun disini saya tidak sendiri, saya ditemanin oleh 2 teman saya untuk membantu saya dalam mengisi artikel ataupun konten dalam Blog ini.
                        Semoga Suka dan Berkenan membaca artikel ataupun Konten yang kami sediakan. Terima Kasih.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- End About -->

    <!-- Contact -->

    <section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="cek">Contact Us</h1>
                </div>
                <div class="col-sm-8 col-sm-offset-2 input">
                    <form action="send.php" ,method="post">
                        <input type="hidden" name="subject" value="You have new Message from Newatech">
                        <div class="form-group">
                            <label for="name">Name : </label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan Nama Anda">
                        </div>
                        <div class="form-group">
                            <label for="email">Email : </label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email Anda">
                        </div>
                        <div class="form-group">
                            <label for="hp">No Handphone : </label>
                            <input type="number" name="hp" id="hp" class="form-control" placeholder="Masukkan No Handphone Anda">
                        </div>
                        <div class="form-group">
                            <label for="pesan">Pesan</label>
                            <textarea name="pesan" id="pesan" cols="30" rows="10" class="form-control" placeholder="Masukkan Pesan Anda"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary form-control">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- End Contact -->

    <!-- Footer -->

    <footer class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>&copy; Copyright by NewTech | Est.2020 | All Right Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- End Footer -->

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>

</body>
</html>