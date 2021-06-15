<?php
/* Header */
$page_title = 'Home';
$navigation = Array(
    'active' => 'Wie ben ik?',
    'items' => Array(
        'Wie ben ik?' => 'index.php',
    )
);
include __DIR__ . '/tpl/head.php';
include __DIR__ . '/tpl/body-start.php';
?>
<!--script-->
<script src="scripts/main.js"></script>

<!--game-->
<h1>Wie ben ik?</h1>
    <div id="user-info">
        <h5>Kloppen jouw gegevens?</h5>
            <p id="username"></p>
            <p id="player-id"></p>
            <a href="game.php"><button><span class="button">Ja, door naar het spel</span></button></a>
            <button id="rmve"><span class="button">Nee, ik wil mijn gegevens veranderen</span></button>
    </div>
    <div class="inline">
        <form id="example-form" action="game.php" method="post">
            <div class="player">
                <p>
                    Gebruikersnaam:
                        <label for="username"></label>
                        <input id="username" name="username" type="text" /><br/>
                </p>
                <p>
                    Wil je raden of hints geven?
                        <label for="player"></label>
                            <select id="player" name="player">
                        <option value="1">
                            Ik wil raden
                        </option>
                        <option value="2">
                            Ik wil hints geven
                        </option>
                    </select>
                </p>
            </div>
            <button type="submit"><span class="button">Spelen!</span></button>
        </form>
    </div>
</div>
</body>

<?php
include __DIR__ . '/tpl/body-end.php';
include __DIR__ . '/tpl/footer.php';
?>

</html>
