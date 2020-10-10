<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rock Paper Scissors Lizard Spock</title>
    <link rel="stylesheet" type="text/css" href="../style/styles.css"/>
</head>
<body>
<div class="header">
    <h1 style="font-size: 50px">Rock Paper Scissors Lizard Spock</h1>
    <h1 id="player-move">Your Move</h1>
    <div class="game-status">
        <h1><?= $game; ?></h1>
    </div>
    <h1 id="computer-move">Computer Move</h1>
</div>
<div class="game-container">
    <div class="player">
        <?php
        if ($playerMove !== '') {
            echo "<img src='/img/{$playerMove}.svg'>";
        }
        ?>
    </div>
    <div class="vs"><h1>VS</h1></div>
    <div class="player">
        <?php
        if ($computerMove !== '' && $playerMove !== '') {
            echo "<img src='/img/{$computerMove}.svg'>";
        }
        ?>
    </div>
</div>
<div class="image-container">
    <form method="post">
        <label for="rock">
            <input type="image" name="rock" alt="rock" src="/img/rock.svg" class="images">
        </label>
    </form>

    <form method="post">
        <label for="paper">
            <input type="image" name="paper" alt="paper" src="/img/paper.svg" class="images">
        </label>
    </form>

    <form method="post">
        <label for="scissors">
            <input type="image" name="scissors" alt="scissors" src="/img/scissors.svg" class="images">
        </label>
    </form>

    <form method="post">
        <label for="lizard">
            <input type="image" name="lizard" alt="lizard" src="/img/lizard.svg" class="images">
        </label>
    </form>

    <form method="post">
        <label for="spock">
            <input type="image" name="spock" alt="spock" src="/img/spock.svg" class="images">
        </label>
    </form>
</div>
</body>
</html>
