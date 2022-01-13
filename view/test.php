<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Titre de la page</title>
        <link rel="stylesheet" href="../public/css/style2.css">
        <script src="../public/js/script.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    </head>
    <body>
        <header>
            <h2><a href="#home">Home</a></h2>
            <nav>
                <li><a href="#about_me">About me</a></li>
                <li><a href="#my_projects">My Projects</a></li>
                <li><a href="#contacts">Contacts</a></li>
            </nav>
        </header>
        <div class="cream" id="home">
            <div class="left">
                <h1>Introducing Stoll Nicolas</h1>
            </div>
            <div class="right">
                <img src="../public/images/Trabajo_verano.jpg" id="intro_img"> 
            </div>
        </div>
        <div class="cream2" id="about_me">
            <div class="title">
                <h1>About me</h1>
            </div>
            <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod error
                    enim laudantium, animi veniam libero eveniet culpa unde perferendis
                    illo fugit corporis, voluptatibus totam dolorum, maiores magnam
                    officia. Ab, delectus.
                </p>
            </div>
        </div>
        <main class="container" id="my_projects">
            <h1 class="title">My projects</h1>
            <section class="card">
                <img src="https://i.ibb.co/VvC0vpN/paint-1.png" alt=""/>
                <div>
                    <h3>Acrylic Painting One</h3>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod error
                    enim laudantium, animi veniam libero eveniet culpa unde perferendis
                    illo fugit corporis, voluptatibus totam dolorum, maiores magnam
                    officia. Ab, delectus.
                    </p>
                    <a href="#" class="btn">Buy Now</a>
                </div>
            </section>

            <section class="card" data-aos="fade-left">
                <img src="https://i.ibb.co/3NHjDcW/paint-2.png" alt="" />
                <div>
                    <h3>Acrylic Painting Two</h3>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod error
                    enim laudantium, animi veniam libero eveniet culpa unde perferendis
                    illo fugit corporis, voluptatibus totam dolorum, maiores magnam
                    officia. Ab, delectus.
                    </p>
                    <a href="#" class="btn">Buy Now</a>
                </div>
            </section>

            <section class="card" data-aos="fade-right">
                <img src="https://i.ibb.co/0VywMkW/paint-3.png" alt="" />
                <div>
                <h3>Acrylic Painting Three</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod error
                    enim laudantium, animi veniam libero eveniet culpa unde perferendis
                    illo fugit corporis, voluptatibus totam dolorum, maiores magnam
                    officia. Ab, delectus.
                </p>
                <a href="#" class="btn">Buy Now</a>
                </div>
            </section>

            <section class="card" data-aos="fade-left">
                <img src="https://i.ibb.co/5LkJFRP/paint-4.png" alt="" />
                <div>
                <h3>Acrylic Painting Four</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod error
                    enim laudantium, animi veniam libero eveniet culpa unde perferendis
                    illo fugit corporis, voluptatibus totam dolorum, maiores magnam
                    officia. Ab, delectus.
                </p>
                <a href="#" class="btn">Buy Now</a>
                </div>
            </section>

            <section class="card" data-aos="fade-right">
                <img src="https://i.ibb.co/61R8Q2y/paint-5.png" alt="" />
                <div>
                <h3>Acrylic Painting Five</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod error
                    enim laudantium, animi veniam libero eveniet culpa unde perferendis
                    illo fugit corporis, voluptatibus totam dolorum, maiores magnam
                    officia. Ab, delectus.
                </p>
                <a href="#" class="btn">Buy Now</a>
                </div>
            </section>
        </main>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <div id="contacts">

        </div>
    </body>
</html>