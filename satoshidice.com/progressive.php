<HTML>
<HEAD>
<link rel="stylesheet" type="text/css" href="style-main.css" />
<link REL="SHORTCUT ICON" href='https://s3-eu-west-1.amazonaws.com/satoshidice/favicon.png'/>
<TITLE>SatoshiDice BitCasino - Progressive Games</TITLE>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31139601-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</HEAD>
<BODY>
<H2>Progressive Games</H2>

<p><a href='progressive-detail.php'>Current Progressive Games</a></p>

<H3>General</H3>
<p>Our progressive games are simple.  For each game there is a jackpot that builds as people play
and when there is a winner the winner takes the jackpot.  Each game has a bet unit which is the minimum bet to play.  Each bet unit gets you a roll and a chance to win the jackpot.  If you send a multiple of the bet unit in a single transaction, you will get multiple rolls.  The details of each roll will be visible on the details page for each bet transaction.</p>

<p>In order to keep the games interesting a portion of each pot stays in the pot to help fund the next round.  This is already calculated in so the jackpot number shown on the main page is what the winners will actually get.</p>

<H3>Difficulty and Win Odds</H3>
<p>As each game progresses, the win odds change.  The higher the pot, the lower the win probability.  This makes the expected return reasonable at high or low pot balances and has the potential to grow quite high.</p>
<p>Because a win or lose depends on the amount in the pot, new bets are considered pending until they have two confirmations.  After that, they are evaluated based on pot funds when confirmed.  This means a PENDING_LOSE can turn into a WIN or a PENDING_WIN can turn into a LOSE depending on what other transactions are doing.</p>
<p>Each roll is expressed as a 12 digit string of hex values, 0-f.  The difficulty is expressed the same way.  A win is simply when the roll string is less than the difficulty string.</p>

<H3>Multiple Winners and Confirmations</H3>
<p>
Every winning roll in a block gets an equal portion of the jackpot.  In the simple case of one winner that winner takes all.  If there are multiple winning rolls, the jackpot is split evenly among them.  Example, if player A wins a single roll and player B has two winning rolls, player A get 1/3 the jackpot and player B get 2/3 since there were three winning rolls.
</p>
<p>
Winners are paid based on all transactions that are confirmed when their bet transaction confirms.  All transactions in that block and before are included in the jackpot.  So a player's own winning bet gets included in their jackpot.
</p>
<H3>Transactions</H3>
<p>
Unlike our normal games there is no payment transaction on a losing transaction in the progressive games.  Winners are not paid until their bet transaction has at least 2 confirmations.  This can take some time so please be patient.  It is to the winner's advantage to wait for confirmation since their jackpot includes all bets included in that block.
</p>

<H3>Authenticity and Verification</H3>
<p>
The progressive games are more complicated to fairly evaluate than our normal games.  This is because if we decided to cheat on our normal games it wouldn't really matter since we would just be taking from our own pot.  However, if we were to cheat on a progressive game we would be cheating the players who could otherwise win a larger jackpot.
</p>
<p>
So for the progressive games we involve a trustable third party to make sure we can't manipulate the results.  We do this by sending incoming transaction IDs through Amazon Simple Notification Service (SNS).  SNS signs each message with their own signing key and we use that signature as part of the final hash used to evaluate bets.  We preserve the SNS message and signature in the details of each bet so that users can verify these have not been modified.  We also allow interested parties to subscribe to the SNS topic so they can observe the messages as we put them through.  That way, it can be seen that we are not running fabricated transactions through to see which ones will win.
</p>
<p>
In short, we are using a bit of data we can't anticipate (SNS message signatures) and allowing interested parties to eavesdrop on that message stream to make sure we are being honest.
</p>
<b>The SNS topic id is: arn:aws:sns:eu-west-1:534655317387:satoshidice-sighash</b>

<p>
<img src='https://s3-eu-west-1.amazonaws.com/satoshidice/progressive_icons/0.png'> <img src='https://s3-eu-west-1.amazonaws.com/satoshidice/progressive_icons/1.png'> <img src='https://s3-eu-west-1.amazonaws.com/satoshidice/progressive_icons/2.png'> <img src='https://s3-eu-west-1.amazonaws.com/satoshidice/progressive_icons/3.png'> <img src='https://s3-eu-west-1.amazonaws.com/satoshidice/progressive_icons/4.png'> <img src='https://s3-eu-west-1.amazonaws.com/satoshidice/progressive_icons/5.png'> <img src='https://s3-eu-west-1.amazonaws.com/satoshidice/progressive_icons/6.png'> <img src='https://s3-eu-west-1.amazonaws.com/satoshidice/progressive_icons/7.png'> <img src='https://s3-eu-west-1.amazonaws.com/satoshidice/progressive_icons/8.png'> <img src='https://s3-eu-west-1.amazonaws.com/satoshidice/progressive_icons/9.png'> <img src='https://s3-eu-west-1.amazonaws.com/satoshidice/progressive_icons/a.png'> <img src='https://s3-eu-west-1.amazonaws.com/satoshidice/progressive_icons/b.png'> <img src='https://s3-eu-west-1.amazonaws.com/satoshidice/progressive_icons/c.png'> <img src='https://s3-eu-west-1.amazonaws.com/satoshidice/progressive_icons/d.png'> <img src='https://s3-eu-west-1.amazonaws.com/satoshidice/progressive_icons/e.png'> <img src='https://s3-eu-west-1.amazonaws.com/satoshidice/progressive_icons/f.png'> </p>

</BODY>
</HTML>

