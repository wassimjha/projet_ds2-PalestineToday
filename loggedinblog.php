<?php
session_start();
include 'connexion.php';
include 'articles.php';
include 'mail.php';
if (isset($_SESSION['username'])) {
    $user = $_SESSION['username'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $articleText = $_POST['status']; 
    $pos = strpos($articleText,':');
    $article=substr($articleText,$pos+1);
    $database = new Database();
    $db = $database->getConnection();
    $pos = strpos($article, '@');
    if ($pos===1) {
        $spacePos = strpos($article,' ', 1);
        $reciever = substr($article, 2, $spacePos-2);
        //sendEmail('wassimjha7@gmail.com', $reciever);
        $query = "SELECT mail FROM blogueur WHERE user = :username";
        $stmt = $db->prepare($query);

        // Liaison de paramètres
        $stmt->bindParam(':username', $reciever);

        // Exécution de la requête
        $stmt->execute();

        // Récupération du résultat
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            $receiver_mail = $row['mail'];
            sendEmail($receiver_mail, 'Someone tagged you in their post ! '.$article, 'PalestineToday ! You have a new notification from PalestineToday .');
        }
    }
    // Initialize Article object
    $articleObj = new Article($db);

    // Add article
    if ($articleObj->addArticle($article, $user)) {
        $_SESSION['success'] = 'Article added successfully.';
    } else {
        $_SESSION['error'] = 'Error adding article.';
    }

    header('Location: loggedinblog.php'); // Redirect to form page
    exit();
}
?>
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
        <a href="" class="login" disabled><?php echo $user; ?></a>
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
            <form action="loggedinblog.php" method="post" name=forum>
            
            <div class="forum-box">
            <div class="Message" id="newDiv">
            <?php
                    function heuremin($time) {
                        $elapsed = time() - $time; // Temps écoulé en secondes
                        // Tableau associatif des unités de temps en secondes
                        $units = array (
                            "an" => 31536000,
                            "mois" => 2592000,
                            "semaine" => 604800,
                            "jour" => 86400,
                            "heure" => 3600,
                            "minute" => 60,
                            "seconde" => 1
                        );
                    
                        // Parcourir le tableau pour trouver l'unité de temps appropriée
                        foreach ($units as $unit => $value) {
                            if ($elapsed >= $value) {
                                $time = floor($elapsed / $value); // Nombre de cette unité
                                return "il y a $time " . ($time > 1 ? "$unit" . "s" : "$unit"); // Pluriel si nécessaire
                            }
                        }
                    
                        // Si le temps est inférieur à 1 seconde
                        if ($elapsed < 60) {
                            return "il y a quelques secondes";
                        } elseif ($elapsed < 3600) { // Moins d'une heure
                            $minutes = floor($elapsed / 60);
                            return "il y a $minutes minute" . ($minutes > 1 ? "s" : "");
                        } elseif ($elapsed < 86400) { // Moins d'un jour
                            $hours = floor($elapsed / 3600);
                            return "il y a $hours heure" . ($hours > 1 ? "s" : "");
                        } else { // Plus d'un jour
                            $days = floor($elapsed / 86400);
                            return "il y a $days jour" . ($days > 1 ? "s" : "");
                        }
                    }
                    date_default_timezone_set('Africa/Tunis');                   
                    include_once 'connexion.php';
                    $host = 'localhost';
                    $db_name = 'projetds2';
                    $username = 'root';
                    $password = '';
                    try {
                        $conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        // Requête SQL pour sélectionner tous les articles
                        $query = "SELECT * FROM article";
                        $stmt = $conn->query($query);
                        // Vérifier s'il y a des résultats
                        if ($stmt->rowCount() > 0) {
                            // Afficher les articles
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                $time=heuremin(strtotime($row['date']));
                                echo "<div class='status-history'>";
                                echo "<p class='stat'>" .$row['user'].' : '.$row['article'] . "<span class='wakt'>".$time."</span> </p>"; // Afficher le contenu de l'article
                                echo "<p class='comment' onclick='replyClick(\"" . $row['user'] . "\")'>Repondre à " . $row['user'] . "</p>";
                                echo "</div>";
                            }
                        }
                    } catch (PDOException $e) {
                        echo "Error: " . $e->getMessage();
                    }

                    // Fermer la connexion PDO
                    $conn = null;
                    ?>

        </div>
        <input type="text" name="status" id="status" class="status-container" placeholder="Exprimez vous ..!">
            <p id="username"  data-phpvalue="<?php echo $user; ?>"></p><hr>
            <input type="button"  class="share-btn" id="shareBtn" onclick="ShareOnclick()" value="Partager">
            <br>

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