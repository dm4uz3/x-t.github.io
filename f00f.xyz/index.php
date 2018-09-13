<html>
<head>
    <title>f00f.xyz</title>
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Page dedicated to the projects ran here">
    <link rel="stylesheet" href="/resources/style.css">
    <link id="fontawesome" rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="/resources/overlay.js"></script>
</head>
<body>
<noscript>This page requires Javascript to run properly.</noscript>
<div class="body">
<div class="overlay" id="overlayQuake">
    <div class="overlayContent">
        <div class="overlayClose" onclick="document.getElementById('overlayQuake').style.display = 'none'"><span class="fas fa-times"></span></div>
        <h3>Quake 3 server information</h3>
        <p><em>Connect via IP or domain</em></p>
        <p>IP: 167.99.203.150</p>
        <p>Domain: f00f.xyz</p>
        <p>Port: Default (27960)</p>
        <p><small><span class="fas fa-exclamation-triangle"></span> The ping is quite bad.</small></p>
    </div>
</div>

<div class="c">
    <h1>Welcome</h1>
    <p>This is a page dedicated to the projects ran on this server.</p>
    <br>
    <h2>What is this?</h2>
    <p>f00f.xyz is a super secret club on the information superhighway. It has no real mission at all other than running servers, experimenting and collecting uptime.</p>
    <p><a href="https://f00f.xyz/privacy/policy.php"><span class="fas fa-lock"></span> Privacy policy</a></p>
    <h2>Projects hosted here</h2>
</div>

<div class="sites">
    <div class="site">
        <h4>f00f.me</h4>
        <p>Personal website</p>
        <br>
        <p><a href="https://f00f.me"><span class="fas fa-globe"></span></a></p>
    </div>
    <div class="site">
        <h4>doggoli.xyz</h4>
        <p>Personal website</p>
        <br>
        <p><a href="https://doggoli.xyz"><span class="fas fa-globe"></span></a></p>
    </div>
    <div class="site">
        <h4>okforms</h4>
        <p>A project</p>
        <p>An open platform for forms and polls.</p>
        <p><a href="https://okforms.f00f.xyz"><span class="fas fa-globe"></span></a> <a href="https://github.com/x-t/okforms" style="margin-left:5px;"><span class="fab fa-github"></span></a></p>
    </div>
    <div class="site">
        <h4>Quake 3</h4>
        <p>Server</p>
        <p>Play Quake 3 on this server</p>
        <p><a id="overlayQuakeShow" href="#"><span class="fas fa-question-circle"></span></a></p>
    </div>
</div> <!-- .sites -->

<div class="c">
    <h2>Infrastructure</h2>
    <p>It's a server.</p>
    <p><strong>Specs</strong></p>
    <div class="l">
        <ul>
            <li><span class="fas fa-server"></span> DigitalOcean</li>
            <li><span class="fas fa-memory"></span> 1GB<span class="sup"><a href="#c-1">[1]</a></span> RAM</li>
            <li><span class="fas fa-microchip"></span> Xeon E5-2650 v4 CPU</li>
            <li><span class="fab fa-html5"></span> Nginx <?php echo shell_exec("nginx -v 2>&1 | grep -o '[0-9]*.[0-9]*.[0-9]*$'"); ?></li>
            <li><span class="fab fa-php"></span> PHP <?php echo shell_exec("php -v | head -1 | grep -o '[0-9]*.[0-9]*.[0-9]*-' | sed 's/-//'"); ?></li>
        </ul>
    </div>
    <p><strong>Stats</strong></p>
    <div class="l">
        <ul>
            <li>Uptime: <?php echo shell_exec("uptime -p"); ?></li>
            <li>Memory usage: <?php echo shell_exec("free -m | awk 'NR==2{printf \"%s/%sMB (%.2f%%)\", $3,$2,$3*100/$2 }'"); ?></li>
            <li>Disk usage: <?php echo shell_exec('df -h | awk \'$NF=="/"{printf "%d/%dGB (%s)", $3,$2,$5}\''); ?></li>
            <li>CPU load: <?php echo shell_exec("top -bn1 | grep load | awk '{printf \"%.2f\", $(NF-2)}'"); ?><span class="sup"><a href="#c-2">[2]</a></span></li>
        </ul>
    </div>
    <br><br>
    <div class="l">
        <small><p id="c-1">[1]: Not enough to run a Matrix server.</p>
        <p id="c-2">[2]: Don't understand this? Neither do I.</p></small>
    </div>
</div> <!-- .c -->
<br><br>
<div class="copyright c">
    <p><small>(C) 2018 cmp. Copy it. I won't be mad.</small></p>
</div>
</div> <!-- .body -->
</body>
</html>
