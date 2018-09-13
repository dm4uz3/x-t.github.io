<html>
<head>
<title>cmp - blog</title>
<?php include('../resources/stdhead.php'); ?>
</head>

<body>
<?php include('../resources/contact.php'); ?>
<?php include('../resources/navbar.php'); ?>
<div class="blog">
<div class="c">
<h1>Stupid blog</h1>
<p>This is my stupid blog, you can read it, or not.</p>
<p>This also works on <a href="/blog/rss.xml"><span class="fas fa-rss"></span> RSS</a></p>
</div>

<!-- LB -->

<div class="entry">
<h2 id='politics-has-no-place-in-software'>Politics has no place in software</h2>
<small>[<a href="2018.php#politics-has-no-place-in-software">link</a>&mdash;<a target="_blank" href="blog/politics-has-no-place-in-software.html">standalone</a>]</small>

<p>Currently there has been a lot of bullshit surrounding the name "open-source".</p>
<p>Probably the latest one so far are so-called anti-fascist licenses. These are stinking turds that are a cancer to everyone.</p>
<p>Go look at one, right now, here's one <a href="https://github.com/jamiebuilds/anti-fascist-mit-license">here</a></p>
<p>First of all this dumbass put MIT's name of a license they did not fucking make. Second, </p>
<pre>
ANTI-FASCIST LICENSE:

The following conditions must be met by any person obtaining a copy of this
software:

- You MAY NOT be a fascist.
- You MUST not financially support fascists.
- You MUST not publicly voice support for fascists.

"Fascist" can be understood as any entity which supports radical authoritarian
nationalism. For example: Donald Trump is a fascist; if you donated to his
campaign then all rights provided by this license are not granted to you.
</pre>
<p>Ever had an open-minded discussion about politics? Ever didn't gobble down all the shit from the far-left/right? Guess what, stay away from muh software now!</p>
<p>Here's another one (only taking the snippet from it, because the same fucktard just attached political cancer onto MIT)</p>
<pre>
The following license shall not be granted to the following entities or any
subsidiary thereof due to their collaboration with US Immigration and Customs
Enforcement ("ICE"):

- "Microsoft Corporation"
- "Palantir Technologies"
- "Amazon.com, Inc."
- "Northeastern University"
- "Ernst & Young"
- "Thomson Reuters"
- "Motorola Solutions"
- "Deloitte Consulting LLP"
- "Johns Hopkins University"
- "Dell Inc"
- "Xerox Corporation"
- "Canon Inc"
- "Vermont State Colleges"
- "Charter Communications"
- "LinkedIn Corporation"
- "United Parcel Service Co"
</pre>
<p>This is hosted on Github, mind you, so not only are they using Microsoft's software here but also telling them to not use their software.</p>
<p>Why is there an issue with this? Well, this is <b>NOT</b> open source or free software by definition.</p>
<p>Here's a snippet from the <a href="https://opensource.org/osd">open source definition</a></p>
<pre>
5. No Discrimination Against Persons or Groups

The license must not discriminate against any person or group of persons.
6. No Discrimination Against Fields of Endeavor

The license must not restrict anyone from making use of the program in a specific field of endeavor. For example, it may not restrict the program from being used in a business, or from being used for genetic research.
</pre>
<p>Too legal-sounding? Here's the simplified version from their <a href="https://opensource.org/faq#evil">FAQ</a></p>
<pre>
Can I stop "evil people" from using my program?

    No. The Open Source Definition specifies that Open Source licenses may not discriminate against persons or groups. Giving everyone freedom means giving evil people freedom, too.
</pre>
<p>The lack of these retards' understanding that freedom means freedom for <b>EVERYONE</b> is <a href="https://github.com/jamiebuilds/anti-fascist-mit-license/issues/12">abundantly</a> <a href="https://github.com/jamiebuilds/anti-fascist-mit-license/issues/8">clear</a></p>
<p>The Free Software Foundation also has problems with licenses like these:</p>
<pre>
I'd like to license my code under the GPL, but I'd also like to make it clear that it can't be used for military and/or commercial uses. Can I do this? (#NoMilitary)

    No, because those two goals contradict each other. The GNU GPL is designed specifically to prevent the addition of further restrictions. GPLv3 allows a very limited set of them, in section 7, but any other added restriction can be removed by the user.

    More generally, a license that limits who can use a program, or for what, is not a free software license.
</pre>
<p><small><a href="https://www.gnu.org/licenses/gpl-faq.en.html#NoMilitary">source</a></small></p>
<p>Open source means getting work done, whether you're white, black, gay or straight or whatever. Shit like this makes a big example at how mentally ill the scene of software development has gotten.</p>
<p>Although small, it's good that we have people like Stallman keeping abortion jokes and Torvalds telling you to fuck off because you're stupid. It brings a bit more positive light in this sea of shit.</p>
<p>If you were offended by this blog post - you deserve to be offended. I used insults directly to the people I want to tell to fuck off this planet, although admitedly childish, it illustrates my point. Intonation over text is not possible.</p>
<p>And remember: </p>
<pre>
I like offending people, because I think people who get offended should be offended.
    - Linus Torvalds
</pre>
<p>:^)</p>
<small>Thu, 30 Aug 2018 11:30:46 +0300</small>
</div>


<div class="entry">
<h2 id='cool-tools-pt.-1'>Cool tools, pt. 1</h2>
<small>[<a href="2018.php#cool-tools-pt.-1">link</a>&mdash;<a target="_blank" href="blog/cool-tools-pt.-1.html">standalone</a>]</small>

<p>Sometimes I just make tools to make my doodly-doos around the computer a little easier.</p>
<p>Since I think these are too small to have their own git repository or something, I thought I'd share these in my blog.</p>
<p>However many I'll write/release, they'll be "licensed" under CC0. Practically public domain, and if your state/country doesn't have public domain - it'll still act like it.</p>
<p>The first in the series is a small thing I made to learn awk. It counts your music by formats.</p>
<p>FLAC sound molesters can flex their RAID arrays with this.</p>
<p>Here's the source code:</p>
<pre>
#!/bin/bash

find ./ | awk '

BEGIN {
    AllMusic=0
    Flacs=0
    MPThrees=0
    MFourAs=0
    WAVs=0
}

/flac$/ {
    AllMusic++
    Flacs++
}

/mp3$/ {
    AllMusic++
    MPThrees++
}

/m4a$/ {
    AllMusic++
    MFourAs++
}

/wav$/ {
    AllMusic++
    WAVs++
}

END {
    print "Total music:", AllMusic
    print "FLACs:", Flacs
    print "MP3s:", MPThrees
    print "M4As:", MFourAs
    print "WAVs:", WAVs
}
'
</pre>
<p>Of course there are some issues with this, like not supporting every music format in existance. But you can easily edit it, if you would like to do that.</p>
<p>If you're wondering what my music collection looks like, well...</p>
<pre>
~/Music&gt; CountMusic
Total music: 560
FLACs: 367
MP3s: 138
M4As: 54
WAVs: 1
~/Music&gt; 
</pre>
<p>I'll leave it there.</p>
<small>Mon, 27 Aug 2018 23:56:41 +0300</small>
</div>


<div class="entry">
<h2 id='so-i-have-a-blog-now'>So I have a blog now</h2>
<small>[<a href="2018.php#so-i-have-a-blog-now">link</a>&mdash;<a target="_blank" href="blog/so-i-have-a-blog-now.html">standalone</a>]</small>

<p>Yeah, I set up a blog.</p>
<p>No particular reason, I just thought that I'd have one.</p>
<p>This runs on lb, a tool made by all-mighty Luke Smith. Tumblr can lick my left nut.</p>
<p>I'm not a blog guy by any means, so expect absolutely no new blog posts.</p>
<p>Maybe they will be memes at best, either way, it's fun setting up shit like this, which is why I do it, even though I may end up never using it.</p>
<small>Mon, 27 Aug 2018 23:20:15 +0300</small>
</div>











</div>
<?php include('../resources/copyright.php'); ?>
</body>
</html>

