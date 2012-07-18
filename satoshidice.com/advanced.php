<HTML>
<HEAD>
<link rel="stylesheet" type="text/css" href="style-main.css" />
<link REL="SHORTCUT ICON" href='https://s3-eu-west-1.amazonaws.com/satoshidice/favicon.png'/>
<TITLE>SatoshiDice BitCasino - Bits and Bets</TITLE>
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
<font size="2">
<H1>Advanced SatoshiDICE Tips</H1>

<h4>Multiple bets per transaction</h4>
If desired, you can put multiple Bitcoin bets in a single transaction. Just put in multiple outputs to as many of the bet option addresses as you want. Each bet will be evaluated and paid. All the bets from one transaction will have the same lucky number.


<h4>Sending payout to a custom Bitcoin address</h4>
Normally, when you send a bet, the return payment is sent back to the same Bitcoin address you sent from. However, there is a way to have the return payment sent to a new, custom address. <br>
-If you add an additional payment to your bet transaction, sending exactly 0.00543210 BTC to a separate address, the payout for the bet will go to that address. <br>
-In the standard Bitcoin client, this is done by clicking the "Add recipient..." button. <br>
-The first payment in the transaction must go to SatoshiDICE with your bet amount, and the second payment in the transaction must go to [yournewaddress] with the amount of 0.00543210. If you win, all the money will then be sent to [yournewaddress]. Fun!</p>

<h4>Making sure bets are returned quickly</h4>
SatoshiDICE attempts to calculate your Bitcoin bet and return it within 30 seconds. However, due to a number of variables, there is sometimes a delay. The best way for you to ensure your Bitcoin bet is returned to you quickly, is for you to include the standard fee of .0005btc in your payment transaction. This helps it get noticed by the network faster, and SatoshiDICE picks it up, calculates it, and returns it to you faster. Sometimes, this fee issue can mean the difference between your bet being returned within a minute vs. hours.

<h4>Looking up a past transaction</h4>
You can search for any past Bitcoin bet transaction by transaction ID (in bet or payment transaction) or by address prefix.<br> <a href="http://satoshidice.com/lookup.php?tx=&limit=100&min_bet=0">Click here to look up transactions</a>.

<br>
<br>
<br>
<center>SatoshiDice Bitcoin Game - Bet Bitcoins with SatoshiDice Bitcoin gambling. Follow <a href="https://twitter.com/#!/satoshidice" target="_new">@SatoshiDice</a> on Twitter</center>


</center>
</BODY>
</HTML>

