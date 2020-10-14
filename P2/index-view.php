<!DOCTYPE html>

<html>

<head>

    <title>Rock Paper Scissors!</title>
    <meta charset='utf-8'>


</head>

<body>

    <h1>Rock Paper Scissors</h1>

    <div>
        <h2>How to Play</h2>
        <ul>
            <li>Choose a move from the dropdown menu.</li>
            <li>The computer will also choose a move.</li>
            <li>Paper beats rock, rock beats scissors, and scissors beats paper.</li>
            <li>If you and the computer chose the same move, it is a tie.</li>
        </ul>
    </div>
    <h2>Your Move</h2>
    <form method='GET' action='process.php'>
        <p>Choose your move:</p>
        <input type='radio' name='move' id='rock' value='rock'>
        <label for='rock'>Rock</label>

        <input type='radio' name='move' id='paper' value='paper'>
        <label for='paper'>Paper</label>

        <input type='radio' name='move' id='scissors' value='scissors'>
        <label for='scissors'>Scissors</label>

        <button type='submit'>Play!</button>
    </form>

    <?php if($GamePlayed) { ?>
    <h2>Game Results</h2>
    <ul>
        <li>You chose <?php echo $move ?></li>
        <li>The computer chose <?php echo $comp_move ?></li>
        <li><?php echo $result ?></li>
    </ul>
    <?php } ?>
</body>

</html>