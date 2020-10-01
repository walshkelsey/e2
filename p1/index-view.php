<!doctype html>
<html lang='en'>

<head>
    <title>KW E2P1</title>
    <meta charset='utf-8'>
</head>

<body>
    <h1>The One Where the High Card Wins</h1>

    <p>Monica and Rachel lost their apartment to Chandler and Joey and are trying to win it back.
        After several failed attempts to win back the apartment, including a game of "Phoebe Ball,"" the friends
        decide to play a game of "High Card Wins."</p>
    <br>

    <h2>Mechanics</h2>
    <ul>
        <li>Phoebe shuffles a deck of 10 cards.</li>
        <li>Monica and Rachel draw a card from the deck.</li>
        <li>Chandler and Joey also draw a card from the remaining deck.</li>
        <li>If Monica and Rachel draw the higher number, they win the apartment.</li>
        <li>Otherwise, Chandler and Joey win.</li>
    </ul>
    <br>
    <h2>Results</h2>
    <ul>
        <li>Monica and Rachel draw a <?php echo $TeamMRdraw; ?>.</li>
        <li>Chandler and Joey draw a <?php echo $TeamCJdraw; ?>.</li>
        <li><strong><?php echo $winner; ?>.</strong></li>
    </ul>

</body>

</html>