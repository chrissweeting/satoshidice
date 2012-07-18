<HTML>
<HEAD>
<link rel="stylesheet" type="text/css" href="style-main.css" />
<link REL="SHORTCUT ICON" href='https://s3-eu-west-1.amazonaws.com/satoshidice/favicon.png'/>
<TITLE>SatoshiDice BitCasino - Secrets</TITLE>
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
<H1>Secret Keys</H1>
<p>In order to ensure that there is no way for the system to change the outcome of a bet, the secret keys used are decided ahead of time.  They are not released right away, since they could be used to submit selective transactions and win bets unfairly.  However, the hash of the secrets is released.  After the secrets are release users can verify that preceeding bets were provably fair.</p>

<H2>Days</H2>
<p>Each bet transaction that comes in is assigned to the secret key of the current day when it is first processed.  In most cases this will be as soon as the transaction is broadcast on the bitcoin network.  However it could be later if the system has some problems processing or an outage.  All times are in GMT.</p>

<H2>Hash File</H2>
The system has a file of all the hash keys for the next 10 years: <a href='https://s3-eu-west-1.amazonaws.com/satoshidice/hash.keys'>hash.keys</a>

This file can be verified in several ways.  The simplest is to simply download and keep a copy of that file.  If ever your copy and the copy we are distributing disagree there is something awry.  

The other way is to use a package called <a href='https://github.com/fireduck64/BitcoinTimestamp'>BitcoinTimestamp</a>.  This is something which stores a sha256 sum in the bitcoin network as a transaction.  Since this transaction goes into the block chain, it is impossible for anyone to tamper with after the fact.  

<pre class='data'>
$ sha256sum hash.keys
9b0d87ac871518cfd8601aa456b58fa74c01194cfeb25e7f3eecf43759d6ccb4  hash.keys
$ java -jar jar/BitcoinTimestamp-1.0.1.jar decode 428bcc630b00fe431623b4e1fb0f726493dc0a2ead86ace9f65cd51bc8092459
url: http://blockexplorer.com/rawtx/428bcc630b00fe431623b4e1fb0f726493dc0a2ead86ace9f65cd51bc8092459
Account: OP_DUP OP_HASH160 00d1cd2e5ec984226c98f85a69852ee9e6c659bd OP_EQUALVERIFY OP_CHECKSIG: 39693
Account: OP_DUP OP_HASH160 11ffd426374b71a2b59463d9130030a1eac84586 OP_EQUALVERIFY OP_CHECKSIG: 34732
Account: OP_DUP OP_HASH160 1f6bd9aeba05706f90797c955aa63ea89b0f7b35 OP_EQUALVERIFY OP_CHECKSIG: 34581
Account: OP_DUP OP_HASH160 20906f06c0e979a1c9e91c1562cd437a0b033c06 OP_EQUALVERIFY OP_CHECKSIG: 6351
Account: OP_DUP OP_HASH160 24deb4c6d8a5069f226af98a9d96d1cda2af0c95 OP_EQUALVERIFY OP_CHECKSIG: 55392
Account: OP_DUP OP_HASH160 271fb5f58b3f33a2793b1106f921082d977715a1 OP_EQUALVERIFY OP_CHECKSIG: 6820
Account: OP_DUP OP_HASH160 372c92a1184f8bd7b43cfd35f4a6300af9575bba OP_EQUALVERIFY OP_CHECKSIG: 22197
Account: OP_DUP OP_HASH160 3b7496c38f98607860aeb8681a0f278c80131001 OP_EQUALVERIFY OP_CHECKSIG: 36775
Account: OP_DUP OP_HASH160 533a0c569ba6e3a17a09c5897740c151fcb08039 OP_EQUALVERIFY OP_CHECKSIG: 19457
Account: OP_DUP OP_HASH160 5b90be81a48a38fca725b8ce2c0b2bb860eb597c OP_EQUALVERIFY OP_CHECKSIG: 6476
Account: OP_DUP OP_HASH160 68f734b27adff98dd6d6fae2d9ab43865e31e997 OP_EQUALVERIFY OP_CHECKSIG: 65202
Account: OP_DUP OP_HASH160 6dc7dbaa82777cc38dd2805c34cb6127676b1e9a OP_EQUALVERIFY OP_CHECKSIG: 24191
Account: OP_DUP OP_HASH160 6f64ed1e6ea10028151b4c957c8d2b693b282e44 OP_EQUALVERIFY OP_CHECKSIG: 16108
Account: OP_DUP OP_HASH160 7912dbde98ac3e8a6923e4443e3c4d1db67609ac OP_EQUALVERIFY OP_CHECKSIG: 62519
Account: OP_DUP OP_HASH160 7ed45bd66f3390e03c0bf30263dd2e53ec9a9f5a OP_EQUALVERIFY OP_CHECKSIG: 22998
Account: OP_DUP OP_HASH160 81740eeee552dafdb5ae1c546a654a9cc337b6a2 OP_EQUALVERIFY OP_CHECKSIG: 52404
Account: OP_DUP OP_HASH160 173a3fea23899592de272434b590869e809c5a71 OP_EQUALVERIFY OP_CHECKSIG: 1011658
Account: OP_DUP OP_HASH160 83fdafd7a1a8f7c06ab46ce2095adf28a4d6797d OP_EQUALVERIFY OP_CHECKSIG: 10255
[9b0d87ac871518cfd8601aa456b58fa74c01194cfeb25e7f3eecf43759d6ccb4]

</pre>

<p>There the sha256 sum of the file stored in S3 and the sha256 sum stored in transaction <a href='http://blockchain.info/search?search=428bcc630b00fe431623b4e1fb0f726493dc0a2ead86ace9f65cd51bc8092459'>428bcc630b00fe431623b4e1fb0f726493dc0a2ead86ace9f65cd51bc8092459</a> match.  This shows the file has existed since the time of the transaction on 2012-04-18.</p>

<p>In case you just want the hash of the file without validation:
<pre class='data'>
$ sha256sum hash.keys
9b0d87ac871518cfd8601aa456b58fa74c01194cfeb25e7f3eecf43759d6ccb4  hash.keys
$ sha1sum hash.keys
d5f03cad9c3e0e2fac85fd0ba110d41fb31a20e2  hash.keys
$ md5sum hash.keys
15cd77530c41e4d6b1f4802b6bdd1c83  hash.keys
</pre></p>
<H2>Secrets</H2>
<p>So that is all well and good for the hashes but those are just hashes, not the actual secrets used.  After a day has been over for at least 24 hours the system will release the secret used.  Then you can verify that the hash of the secret matches the published hash in the hash file.  This demonstrates that the system used the secret it promised it would use.  A list of secrets for previous days can be found here: <a href='secretlist.php'>secret list</a></p>

<H2>Lucky Number</H2>
<p>The lucky number used to determine the winner of games is simple.  It is simply the first bytes of hmac_sha512(secert,txid).  That would be the secret string as the key and the transaction ID of your bet transaction as the data.</p>

<p>You can see all of this on the full details page for your transaction.</p>

<br>
<center>SatoshiDice Bitcoin Game - Bet Bitcoins with SatoshiDice Bitcoin gambling. Follow <a href="https://twitter.com/#!/satoshidice" target="_new">@SatoshiDice</a> on Twitter
</center>
</font>
</BODY>
</HTML>

