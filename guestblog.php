<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palestine Today</title>
    <!-- Link To CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- Header -->
    <header>
        <!-- Nav -->
        <div class="nav container">
        <!-- Logo -->
        <a href="#" class="logo">Palestine<span>Today</span></a>
        <!-- Login Btn -->
        <a href="inscription.php" class="login" >Sign up</a>
    </div>

    </header>
    <!-- Home -->
    <section class="home" id="home">
        <div class="home-text container">
            <h2 class="home-title">Palestine Today</h2>
            <span class="home-subtitle">Voix pour la Palestine: Partageons, Informons, Agissons</span>
        </div>
    </section>
    <!-- Post Filter -->
    <div class="post-filter container">
        <span class="filter-item active-filter" data-filter='all' onclick="showContent('home')">Acceuil</span>
        <span class="filter-item" data-filter="design" onclick="showContent('news')">Actualité</span>
        <span class="filter-item" data-filter='mobile' onclick="showContent('forum')">Forum</span>
    </div>
    <!-- Posts -->
    <section class="post container">
        <div class="content active" id="home">
        <!-- Post Box 1 -->
        <div class="post-box ">
            <img src="nakba.jpg" alt="" class="post-img">
            <h2 class="category">1948</h2>
            <a href="article1.html" class="post-title"> Nakba (1948)</a>
            <span class="post-date">15 mai 1948</span>
            <p class="post-decription">Le 15 mai 1948 marque le début de la Nakba, la catastrophe, où des centaines de milliers de Palestiniens ont été déplacés de leurs foyers lors de la création de l'État d'Israël. Découvrez l'importance de cette date dans l'histoire palestinienne et l'impact continu sur les réfugiés palestiniens.</p>
        
        </div>
        <!-- Post Box 2 -->
        <div class="post-box ">
            <img src="1967.jpg" alt="" class="post-img">
            <h2 class="category">1967</h2>
            <a href="article2.html" class="post-title">
            Guerre des Six Jours
            </a>
            <span class="post-date">5 juin 1967</span>
            <p class="post-decription"> En juin 1967, Israël a occupé la Cisjordanie, la bande de Gaza, Jérusalem-Est, le plateau du Golan et la péninsule du Sinaï.</p>
            
        </div>
        <!-- Post Box 3 -->
        <div class="post-box">
            <img src="1982.jpg" alt="" class="post-img">
            <h2 class="category">1982</h2>
            <a href="article3.html" class="post-title">
            Massacre de Sabra et Chatila
            </a>
            <span class="post-date">Septembre 1982</span>
            <p class="post-decription">Des milices chrétiennes libanaises ont perpétré un massacre dans les camps de réfugiés palestiniens de Sabra et Chatila au Liban.</p>
            
        </div>
        <!-- Post Box 4 -->
        <div class="post-box ">
            <img src="intifada.jpg" alt="" class="post-img">
            <h2 class="category">2000</h2>
            <a href="article4.html" class="post-title">
            Début de la Deuxième Intifada
            </a>
            <span class="post-date">Septembre 2000</span>
            <p class="post-decription">Après la visite controversée d'Ariel Sharon sur l'esplanade des Mosquées, la Deuxième Intifada a éclaté en septembre 2000</p>
            
        </div>
        <!-- Post Box 5 -->
        <div class="post-box ">
            <img src="durci.jpg" alt="" class="post-img">
            <h2 class="category">2008-2009</h2>
            <a href="article5.html" class="post-title">
            Opération Plomb Durci
            </a>
            <span class="post-date">décembre 2008</span>
            <p class="post-decription">Israël a lancé une offensive militaire majeure contre la bande de Gaza en décembre 2008. Découvrez les impacts humanitaires, les destructions et les appels à la fin de l'occupation.</p>
            
        </div>
        <!-- Post Box 6 -->
        <div class="post-box ">
            <img src="img6.jpg" alt="" class="post-img">
            <h2 class="category">2017</h2>
            <a href="article6.html" class="post-title">
            Reconnaissance de Jérusalem comme Capitale par les États-Unis</a>
            <span class="post-date">Décembre 2017</span>
            <p class="post-decription">Les États-Unis ont reconnu Jérusalem comme la capitale d'Israël, provoquant une condamnation internationale. Voici les implications politiques et diplomatiques de cette décision.</p>
            
        </div>
        <!-- Post Box 7 -->
        <div class="post-box ">
            <img src="img7.jpg" alt="" class="post-img">
            <h2 class="category">2018</h2>
            <a href="article7.html" class="post-title">
            Grande Marche du Retour
            </a>
            <span class="post-date">Depuis 2018</span>
            <p class="post-decription"> La Grande Marche du Retour a commencé en mars 2018 à Gaza pour revendiquer le droit au retour des réfugiés palestiniens et mettre fin au blocus de Gaza</p>
            
        </div>
        <!-- Post Box 8 -->
        <div class="post-box ">
            <img src="img1.jpg" alt="" class="post-img">
            <h2 class="category">2020</h2>
            <a href="article8.html" class="post-title">
            Annexion de la Vallée du Jourdain
            </a>
            <span class="post-date">Mai 2020</span>
            <p class="post-decription">Le gouvernement israélien a annoncé son intention d'annexer une partie de la Vallée du Jourdain en Cisjordanie.</p>
            
        </div>
        <!-- Post Box 9 -->
        <div class="post-box ">
            <img src="img9.jpg" alt="" class="post-img">
            <h2 class="category">2021</h2>
            <a href="article9.html" class="post-title">
            Conflit de Gaza 
            </a>
            <span class="post-date">Mai 2021</span>
            <p class="post-decription"> De violents affrontements ont éclaté entre Israël et Gaza, entraînant des pertes humaines importantes et des destructions massives.</p>
            
        </div>
</div>
        <!-- news -->
        <div class="content" id="news">
            <div class="post-box design">
            <img src="news1.jpg" alt="" class="post-img">
            <h2 class="category">2024</h2>
            <a href="news1.html" class="post-title">
             Renouvellement des Tensions à Gaza
            </a>
            <span class="post-date"> 7 Octobre 2024</span>
            <p class="post-decription"> De violents affrontements ont éclaté entre Israël et Gaza, entraînant des pertes humaines importantes et des destructions massives.</p>
            </div>
        
            <div class="post-box design">
            <img src="news2.jpg" alt="" class="post-img">
            <h2 class="category">2024</h2>
            <a href="news2.html" class="post-title">
            Nouveaux raids meurtriers israéliens à Gaza 
            </a>
            <span class="post-date">21 Mars 2024</span>
            <p class="post-decription"> L’armée israélienne mène depuis quatre jours une opération dans le complexe hospitalier Al-Chifa, dans la bande de Gaza, où elle a annoncé jeudi avoir déjà tué "plus de 140" combattants palestiniens.</p>
            </div>
        
            <div class="post-box design">
            <img src="news3.jpg" alt="" class="post-img">
            <h2 class="category">2024</h2>
            <a href="news3.html" class="post-title">
            "Un match nul en faveur de l'Iran", la première attaque iranienne sur le sol israélien.
            </a>
            <span class="post-date">13 Avril 2024</span>
            <p class="post-decription"> Dans la nuit de samedi à dimanche, Téhéran a lancé plus de 300 drones et missiles en direction d'Israël, selon l'armée israélienne.</p>
            </div>
        </div>
        <div class="content" id="forum">
            <h1>Vous devez s'authentifier pour pouvoir accéder au forum !</h1>
        

        </div>

            </form>
        </div>
    </section>
    <!-- Footer -->
    <div class="footer container">
        <p>&#169; All Right Reserved</p>
        <div class="social">
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-twitter'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-linkedin' ></i></a>
        </div>
    </div>







    <!-- JQuery Link -->
    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
    <!-- Link To JS -->
    <script src="js/main.js">
    </script>
</body>
</html>