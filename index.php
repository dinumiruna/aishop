<?php include('php/header.php'); ?>
<?php include('php/db.php'); ?>



<div class="container">
    <section id="welcome">
        <div class="welcome-content">
            <h1>Inteligență artificială de la A la Z</h1>
            <p>Descoperă cele mai bune produse de inteligență artificială.</p>
            <a href="products.php" class="button">Vezi produsele</a>
        </div>
    </section>

    <section id="ai">
    <h2>Despre Inteligența Artificială</h2>
    <div class="ai-content">
        <p>Inteligența artificială (IA) este capacitatea unei mașini sau a unui program de a gândi și de a învăța. Aceasta implică utilizarea algoritmilor pentru a simula procesele cognitive umane, cum ar fi învățarea, raționamentul și rezolvarea de probleme. IA poate fi aplicată în diverse domenii, cum ar fi asistența medicală, finanțele, industria auto și multe altele.</p>
        <img src="/imagini/1.jpg" alt="Imagine despre Inteligența Artificială">
        <h2>Beneficiile inteligenței artificiale în analiza financiară și luarea deciziilor </h2>
  
        <p>- analiza  rapidă și precisă a datelor Inteligența artificială (IA): permite procesarea unor cantități mari de date semnificativ mai rapid și mai precis decât metodele tradiționale
 Această capacitate de procesare accelerată vă permite să detectați instantaneu tendințele și anomaliile financiare, oferindu-vă o înțelegere mai profundă și mai precisă a mișcărilor pieței
 <br> -algoritmii de învățare automată: folosesc o varietate de tehnici avansate de analiză a datelor pentru a detecta modele subtile și relații complexe în seturile de date financiare, oferind  o bază solidă pentru luarea deciziilor în cunoștință de cauză
 <br>-prognoza și algoritmii de învățare automată: sunt esențiali pentru construirea de modele predictive care pot prezice tendințele pieței, performanța financiară a unei companii și alte variabile economice importante
 Aaceste modele predictive se bazează pe analiza datelor istorice și pe identificarea modelelor care pot indica tendințe viitoare <br>
 Prin aplicarea acestor modele, instituțiile financiare pot dezvolta strategii proactive pentru a minimiza riscul și a maximiza oportunitățile de profit
 Capacitatea AI de a învăța și de a se adapta continuu la date noi  îmbunătățește continuu acuratețea și relevanța acestor predicții, contribuind  la un management financiar mai eficient și strategic</p>
        
 <h2>Ce facem noi?</h2>

        <p>Workshop-uri și Seminarii<br>

Workshop: Implementarea AI în 
Propriul Business Financiar<br>

Un workshop intensiv care ajută participanții să implementeze soluții de AI în propriile afaceri financiare.<br>

Seminar: Tendințe și Inovații în IA pentru Finanțe<br>

Discuții despre cele mai recente tendințe și inovații în domeniul IA și impactul acestora asupra piețelor financiare.<br>
Detectarea Fraudelor cu IA<br>

Metode și tehnici pentru identificarea și prevenirea fraudelor financiare folosind algoritmi de inteligență artificială.<br>

<br><br>
<h2>Data urmatorului seminar</h2>
    
        <h1> 21-07-2024 <b>20:00 </b></h1>

        <a href="products.php" class="button">Obține acces gratuit la seminarii achiziționând oricare dintre cursuri.</a>
        <br><br><br><br><br>
        
 
    </div>
</section>

<div class="container">
    <h1>Produse</h1>
    <div class="product-list">
        <?php
        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='product'>";
                echo "<h2>" . $row['name'] . "</h2>";
                echo "<p>" . $row['description'] . "</p>";
                echo "<p>" . $row['price'] . " RON</p>";
                echo "<form action='cart.php' method='post'>";
                echo "<input type='hidden' name='product_id' value='" . $row['id'] . "'>";
                echo "<button type='submit'>Adaugă în coș</button>";
                echo "</form>";
                echo "</div>";
            }
        } else {
            echo "Nu există produse disponibile.";
        }
        ?>
    </div>
</div>


</div>

<?php include('php/footer.php'); ?>
