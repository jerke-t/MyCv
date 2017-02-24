    <?php
        include("navigation/header.php");
    ?>
    <section id="form">
        <h2>Contactformulier</h2>
        <article>
            <p>
                Gelieve uw naam, voornaam, emailadres en een bericht achter te laten.<br/>
                Ik neem zo spoedig mogelijk contact met u op.
            </p>
        </article>
        <form name="contactForm" method="post" action="contact.php" >
            <fieldset>
                <?php

                $isPosted = $_SERVER['REQUEST_METHOD'] == 'POST';

                ?>
                <form method="post" action="contact.php">
                    <fieldset>
                        <div>
                            <label for="naam">Naam</label>
                            <input type="text" id="naam" name="naam" value="<?php echo $_POST["naam"] ?>">
                            <span class="error">*</span>
                            <?php if( $isPosted && empty($_POST['naam'])) { echo 'Naam niet opgegeven!'; } ?>
                        </div>
                        <div>
                            <label for="voorNaam">Voornaam</label>
                            <input type="text" id="voorNaam" name="voorNaam" value="<?php echo $_POST["voorNaam"] ?>">
                            <span class="error">*</span>
                            <?php if( $isPosted && empty($_POST['voorNaam'])) { echo 'Voornaam niet opgegeven!'; } ?>
                        </div>
                        <div>
                            <label for="geslacht">Geslacht</label>
                            <input type="radio" name="geslacht" value="man">Man
                            <input type="radio" name="geslacht" value="vrouw">Vrouw
                        </div>
                        <br/>
                        <div>
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" placeholder="example@example.com" value="<?php echo $_POST["email"] ?>">
                            <span class="error">*</span>
                            <?php if( $isPosted && empty($_POST['email'])) { echo 'E-mail niet opgegeven!'; } ?>
                        </div>

                        <div>
                            <label for="bericht">Bericht</label>
                            <input type="textaria" id="bericht" name="bericht" value="<?php echo $_POST["bericht"] ?>">
                            <span class="error">*</span>
                            <?php if( $isPosted && empty($_POST['bericht'])) { echo 'Geen bericht ingegeven!'; } ?>
                        </div>

                    </fieldset>

                    <div class="knop">
                        <button type="submit" name="verstuur" value="verstuur">Verzenden</button>
                    </div>
                </form>
                <h3>
                <?php

                if($isPosted && !empty($_POST['naam']) && !empty($_POST['email']) && !empty($_POST['voorNaam'])) {
                    echo "Bedankt voor uw interesse " . $_POST['voorNaam'] . " " .  strtoupper($_POST['naam']) . " (" . $_POST["geslacht"] . "), ik neem zo spoedig mogelijk contact met u op via: " . $_POST['email'];
                    ?>
                    <br/>
                    <?php
                    echo "Uw bericht was: <i>'" . $_POST["bericht"] . "'</i>";
                    mail('jerke.taeymans@gmail.com', 'Contact', $_POST['naam'] . " zou graag contact met jou willen opnemen!");
                    ?>
                    <br/>
                    <?php
                    echo "Door een technisch probleem wordt uw bericht niet doorgestuurd. U kan mij steeds contacteren op ";
                    ?> <a href="mailto:'jerke.taeymans@gmail.com'">jerke.taeymans@gmail.com</a>
                    <?php
                }
                ?>
                </h3>
    
            </fieldset>
        </form>
    </section>
    <?php
    include("navigation/footer.php");
    ?>