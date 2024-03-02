<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <title><?= "Mettre variable _GET" ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Guillain Victor">
        <meta name="description" content="Présentation des avengers avec photo des principaux menbres.">
        <link rel="stylesheet" href="./css/style-avengers.css">
        <link rel="icon" href="../images/avengers/favicon.ico" type="image/x-con">
        <link href="https://fonts.googleapis.com/css2?family=Rethink+Sans:wght@500&display=swap" rel="stylesheet">
    </head>

    <body>
        <div aria-label="page content" class="wrapper">
            <header>
                <h1>Les <img src='./images/avengers/logo.webp' alt="logo avengers"> <span aria-label="container fin du h1">: héros et protecteurs!</span></h1>

                <nav>
                    <section aria-label="link website">
                        <a href="#">A propos</a>
                        <a href="#">Blog</a>
                        <a href="#">Contact</a>
                    </section>

                    <section aria-label="link social networks">
                        <figure aria-label="container logo facebook">
                            <img src="./images/avengers/facebook_icon.webp" alt="logo facebook">
                        </figure>
                        <figure aria-label="container logo twiter">
                            <img src="./images/avengers/twitter_icon.webp" alt="logo twiter">
                        </figure>
                    </section>
                    
                </nav>
            </header>

            <main>
                <section aira-label="presentation of avengers">
                    <h2>Les <span aria-label="avengers en red">Avengers</span>, les meilleurs amis des citoyens du monde</h2>
                    <p>Les Avengers sont une équipe de super-héros exceptionnels qui travaillent ensemble pour protéger le mond des menaces intérieures et extérieures. 
                        Ils sont incroyablement puissants, mais ils ont également un sens de l'humour et une humanité qui les rendent attachants.
                        Lorsque les Avengers sont en action, vous savez que tout va bien se passer!
                    </p>
                </section>

                <section aria-label="container picture of Iron man">
                    <figure aria-label="picture of Iron man">
                        <img src="./images/avengers/iron-man.webp" alt="photo d'Iron Man">
                        <figcaption>Le super-héros de la semaine <i></i></figcaption>
                    </figure>
                </section>

                <div aria-label="container area aside and hero's pictures">
                    <section aria-labelledby="container of hero's pictures">
                        <div aria-labelledby="container first five pictures">
                            <div aria-label="container first pictures" class="firstPictures">
                                <figure aria-label="container héro"><img src="./images/avengers/captain-america.webp" alt="photo de captain america"></figure>
                            </div>
                            <div aria-label="container four pictures following" class="secondFourPicture img">
                                <figure aria-label="container héro"><img src="./images/avengers/thor.webp" alt="photo de thor"></figure>
                                <figure aria-label="container héro"><img src="./images/avengers/hulk.webp" alt="photo de hulk"></figure>
                                <figure aria-label="container héro" class="first-picture-widow"><img src="./images/avengers/black-widow.webp" alt="photo de black widow"></figure>
                                <figure aria-label="container héro" class="first-picure-hawkeye"><img src="./images/avengers/hawkeye.webp" alt="photo de hawkeye"></figure>
                            </div>
                        </div>
                        <div aria-label="container pictures following" class="lastPictures img">
                            <figure aria-label="container héro" class="second-picure-captain-america"><img src="./images/avengers/captain-america.webp" alt="photo de captain america"></figure>
                            <figure aria-label="container héro" class="second-picure-thor"><img src="./images/avengers/thor.webp" alt="photo de thor"></figure>
                            <figure aria-label="container héro" class="second-picure-hulk"><img src="./images/avengers/hulk.webp" alt="photo de hulk"></figure>  
                            <figure aria-label="container héro" class="second-picture-widow"><img src="./images/avengers/black-widow.webp" alt="photo de black widow"></figure>
                            <figure aria-label="container héro" class="second-picure-hawkeye"><img src="./images/avengers/hawkeye.webp" alt="photo de hawkeye"></figure>
                            <figure aria-label="container héro"><img src="./images/avengers/scarlet-witch.webp" alt="photo de scarlet-witch"></figure>
                            <figure aria-label="container héro"><img src="./images/avengers/vision.webp" alt="photo de vision"></figure>
                            <figure aria-label="container héro"><img src="./images/avengers/antman.webp" alt="photo de antman"></figure>
                            <figure aria-label="container héro"><img src="./images/avengers/falcon.webp" alt="photo de falcon"></figure>
                            <figure aria-label="container héro"><img src="./images/avengers/war-machine.webp" alt="photo de war-machine"></figure>
                            <figure aria-label="container héro"><img src="./images/avengers/spiderman.webp" alt="photo de spiderman"></figure>
                            <figure aria-label="container héro"><img src="./images/avengers/doctor-strange.webp" alt="photo de doctor-strange"></figure>
                            <figure aria-label="container héro"><img src="./images/avengers/black-panther.webp" alt="photo de black-panther"></figure>
                            <figure aria-label="container héro"><img src="./images/avengers/captain-marvel.webp" alt="photo de captain-marvel"></figure>
                            <figure aria-label="container héro"><img src="./images/avengers/winter-soldier.webp" alt="photo de winter-soldier"></figure>
                            <figure aria-label="container héro"><img src="./images/avengers/star-lord.webp" alt="photo de star-lord"></figure>
                            <figure aria-label="container héro"><img src="./images/avengers/nick-fury.webp" alt="photo de nick-fury"></figure>
                        </div>
                    </section>

                    <aside>
                        <div aria-label="section avengers rassemblement">
                            <h3>Avengers Rassemblement</h3>
                            <p>Vous avez des compétences hors du commun et vous souhaitez sauver le monde aux côtés des plus
                                grands héros de la planète ?
                            </p>
                            <a href="#">Soumettez votre candidature !</a>
                        </div>

                        <div aria-label="section avengers rassemblement">
                            <h3>Restez informé des dernières aventures des Avengers</h3>
                            <p>Abonnez-vous à notre newsletter et ne manquez aucune mission !</p>
                            <a href="#">S'abonner</a>
                        </div>
                    </aside>
                </div>
            </main>

            <footer>
                <p>Copyright &copy 2023 | Avengers</p>
            </footer>
        </div>
    </body>
</html>