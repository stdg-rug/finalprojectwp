<?php
/* Header */
$page_title = 'Wie ben ik?';
$navigation = Array(
    'active' => 'Wie ben ik?',
    'items' => Array(
        'Wie ben ik?' => 'game.php',
        'Start over' => 'index.php',
    )
);
include __DIR__ . '/tpl/head.php';
include __DIR__ . '/tpl/body-start.php';
?>
<!-- SCRIPT -->
<script type="application/javascript" src="scripts/game.js"></script>
<script src="/scripts/main.js"></script>

<!-- TITLE -->
<div class="begin">
    <h2>
        <b>Wie ben ik..?!</b>
    </h2>
</div>
<div class="subbegin">
    <p>
        You are playing against <br/><span id="player"></span>
    </p>
</div>

<!-- CHAT -->
<div class="topcontainer">
    <?php
    if(file_exists("data.json") && filesize("data.json") > 0){
        $contents = file_get_contents("data.json");
        echo $contents;
    }
    ?>
</div>
<div class="textarea">
    <form action="game.php" onsubmit="get_question()">
        <div class="questionarea">
            <label for="question"></label>
                <textarea name="question" id="question" placeholder="Typ hier je vraag..."></textarea>
                    <button type="button" id="send_chat">Stuur bericht!</button>
        </div>
    </form>
</div>
<div class="activeplayer"></div>
<div class="personal">
    <h4>
        <b>Your personal information:</b>
    </h4>
        <p id="username"></p>
        <p id="player-id"></p>
</div>
<?php
    include __DIR__ . '/tpl/body-end.php';
    include __DIR__ . '/tpl/footer.php';
?>