<?php
$title = "img fluid with srcset and sizes";
$body = <<<EOT
<h1 class="header-main">Hello srcset and sizes!</h1>
<textarea id="code" name="code" class="code">
<head>
    <style>img {display: block; max-width: 100%; height: auto; margin-bottom: 10px}</style>
</head>
<body>
    <img src="/examples/img.php?w=160&h=40&d=1" alt=""
         width="960" height="240"
         srcset="/examples/img.php?w=320&h=80&d=1 320w,
                 /examples/img.php?w=620&h=155&d=1 620w,
                 /examples/img.php?w=960&h=240&d=1 960w"
         sizes="100vw"
    />
    <p>Making the image adaptive by adding <i>srcset</i> and <i>sizes</i> attributes</p>
</body>
</textarea>
EOT;
$notes = <<<EOT
<ul class="notes">
    <li><b>Page reflow is back</b>, but don't care for now, we know how to fight the evil villain back.</li>
    <li>Interesting behaviour in Chrome: Change something in the code editor (exceptthe desktop image). Mobile will load the desktop image then. Firefox does not do this.</li>
</ul>
EOT;


include(__DIR__ . "/00-template.php");


