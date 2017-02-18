<?php
include("navigation/header.php");
?>
<section id="form">
    <form name="contactForm" method="post" action="result.php" >
        <fieldset>
            <div>
                <label for="naam">Naam</label>
                <input type="text" name="naam" id="naam" value="" >

            </div>
            <div>
                <label for="bericht">Bericht</label>
                <textarea id="bericht" name="bericht"></textarea>
            </div>

            <button type="submit" name="opslaan" value="opslaan">Verzenden</button>

        </fieldset>
    </form>
</section>
<?php
include("navigation/footer.php");
?>
