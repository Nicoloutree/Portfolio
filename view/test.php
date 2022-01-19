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
                <li><a href="#about_me">À Propos</a></li>
                <li><a href="#my_projects">Mes Projets</a></li>
                <li><a href="#contacts">Me Contacter</a></li>
            </nav>
        </header>
        <div class="cream" id="home">
            <div class="left">
                <h1>Portfolio Stoll Nicolas</h1>
            </div>
            <div class="right">
                <img src="../public/images/Trabajo_verano.jpg" id="intro_img"> 
            </div>
        </div>
        <div class="cream2" id="about_me">
            <div class="title">
                <h1>À Propos</h1>
            </div>
            <div class="text">
                <img src=../public/images/me.jpg id="my_img">
                <p>Actuellement étudiant en DUT informatique, et bientôt étudiant à l'université de Limerick dans le cadre d'un Erasmus,
                à travers se portfolio je vous propose de découvrir les différents projets que j'ai eu l'occasion de réaliser lors de mon DUT.
                Ces projets m'ont permis d'acquerir un certain nombres de connaissances et compétences, parmis celle-ci les plus importante étant,
                la programmation dans différent langage, l'algorithmique avancé, la gestion et création de base de données, et bien d'autres compétences
                professionnels.
                </p>
            </div>
        </div>
        <main class="container" id="my_projects">
            <h1 class="title">Mes Projets</h1>
            <section class="card">
                <img src="../public/images/chocolat.png" alt=""/>
                <div>
                    <h3>Site sur le chocolat</h3>
                    <p>
                    En tant que premier projet, il consistait en un site statique présentant différent aspects d'un theme choisi selon nos préférences
                    parmis trois sujets imposés. En l'occurence ici il s'agit du chocolat, il a fallu donc effectuer de long travaux de recherche vis-à-vis
                    du sujet ainsi que le developpement entier du site à partir des recherches.
                    </p>
                    <a href="#" class="btn">En savoir plus</a>
                </div>
            </section>

            <section class="card" data-aos="fade-left">
                <img src="../public/images/nim_game.png" alt="" />
                <div>
                    <h3>Jeu de Nim</h3>
                    <p>
                    Lors du premier semestre de DUT informatique, il nous a été demander de développer en langage
                    de programmation C un jeu de nim. Il comportait notamment la création d'un ordinateur contre le quel nous nous battons,
                    ainsi que divers paramètres pour que le jeu diffère à chaque parties.
                    </p>
                    <a href="#" class="btn">En savoir plus</a>
                </div>
            </section>

            <section class="card" data-aos="fade-right">
                <img src="../public/images/CPOA.PNG" alt="" />
                <div>
                <h3>Projet CPOA</h3>
                <p>
                Au cours du semestre 3 nous avons réaliser en groupe de 2, un projet Java permettant la gestion complète de la société RevuesOnLine, 
                qui commercialise des abonnements à des magazines, revues et journaux. Celui-ci comportait notamment une DAO a des fin d'hydratation de la base de donnée.
                </p>
                <a href="#" class="btn">En savoir plus</a>
                </div>
            </section>

            <section class="card" data-aos="fade-left">
                <img src="../public/images/forum.png" alt="" />
                <div>
                <h3>Forum en ligne</h3>
                <p>
                Dans le cadre de mon troisième semestre de DUT informatique, en groupe de trois,
                nous avons développer un forum en ligne permettant la création de fils de discussions.
                Celui-ci a été créé en utilisant les language HTML5, CSS3 ainsi que PHP7. Pour ce qui est
                du stockage des informations, celle-ci ont été stocker dans une base de données se trouvant 
                sur les serveurs de l'université de lorraine.
                </p>
                <a href="#" class="btn">En savoir plus</a>
                </div>
            </section>
        </main>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <div class="cream2" id="contacts">
            <div id="blue">
                <div class="title">
                    <h1>Me Contacter</h1>
                </div>
                <div id="formulaire">
                    <form method="POST" name="myemailform" action="form-to-mail.php">
                        <div>
                            <label for="name">Name*</label><br>
                            <input type="text" name="name" placeholder="Enter your name" size="50">
                        </div>
                        <div>
                            <label for="address">Address</label><br>
                            <input type="text" name="address" placeholder="Enter your address" size="50">
                        </div>
                        <div id="info">
                            <div>
                                <label for="email">Email*</label><br>
                                <input type="text" name="email" placeholder="Enter your email" size="20">
                            </div>
                            <div>
                                <label for="phone">Phone</label><br>
                                <input type="text" name="phone" placeholder="Enter your phone number" size="20">
                            </div>
                        </div>
                        <div>
                            <label for="subject">Subject*</label><br>
                            <input type="text" name="subject" placeholder="Type the subject" size="50">
                        </div>
                        <div>
                            <label for="message">Message</label><br>
                            <textarea name="message" placeholder="Type your message here..." size="50" id="message"></textarea>
                        </div>
                        <input type="submit" name="submit" id="submit_button">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>