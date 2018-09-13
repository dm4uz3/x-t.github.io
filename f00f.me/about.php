<!DOCTYPE html>
<html>
<head>
    <title>cmp - about</title>
    <?php include('./resources/stdhead.php'); ?>
</head>
<body>
    <?php include('./resources/noscript.php'); ?>
    <?php include('./resources/contact.php'); ?>
    <?php include('./resources/navbar.php'); ?>

    <div class="c">
        <div class="aboutContent">
            <h2>About me</h2>
            <p>If the front page ain't telling you, I'm cmp.</p>
            <p>I live in Lithuania and I'm 15.</p>
            <p>My pronouns are he/him. Everything is binary :^)</p>
            <p>I change my names often, I don't know why. You can call me zxyz, too.</p>
            <p>The only religion I believe in is the Church of Emacs.</p>
            <?php include('./resources/terry.php'); ?>
            <h3>Specializations</h3>
            <p>I have computer-related autism<span class="sup"><a href="#c-1">[1]</a></span>. I write programs and administrate systems. They're shit and the systems fail.</p>
            <h3>Projects</h3>
            <p>My code can be found on <a href="https://github.com/x-t">Github</a><span class="sup"><a href="#c-2">[2]</a></span> and the things that I run can be found on <a href="https://f00f.xyz">f00f.xyz</a></p>
            <h3>Workflow</h3>
            <p>This is for all the glow-in-the-dark intelligence agencies.</p>
            <h4>Software</h4>
            <div class="l">
                <ul>
                    <li><span class="fab fa-linux"></span> OS: Debian Unstable</li>
                    <li><span class="fas fa-desktop"></span> WM: i3-gaps</li>
                    <li><span class="fas fa-sticky-note"></span> Editor: NeoVim</li>
                    <li><span class="fas fa-terminal"></span> Terminal/shell: Terminator<span class="sup"><a href="#c-3">[3]</a></span>/bash</li>
                    <li><span class="fab fa-firefox"></span> Browser: Firefox</li>
                </ul>
            </div>
            <h4>Hardware</h4>
            <div class="l">
                <ul>
                    <li><span class="fas fa-laptop"></span> Thinkpad X220</li>
                    <li><span class="fas fa-memory"></span> 8GB<span class="sup"><a href="#c-4">[4]</a></span> DDR3 RAM</li>
                    <li><span class="fas fa-microchip"></span> Core i5-2520M CPU</li>
                </ul>
            </div>
            <br>
            <p id="c-1"><small>[1]: I installed Gentoo multiple times.</small></p>
            <p id="c-2"><small>[2]: Github can be considered harmful, but who cares mate</small></p>
            <p id="c-3"><small>[3]: My own fork (don't submit bugs) <a href="https://github.com/x-t/terminator">find it here</a></small></p>
            <p id="c-4"><small>[4]: Still not enough to run VSCode and Chrome at the same time</small></p>
        </div>
    </div>
    <br>
    <div style="text-align:center;"><?php include('./resources/terry2.php'); ?></div>
    <?php include('./resources/copyright.php'); ?>
</body>
</html>
