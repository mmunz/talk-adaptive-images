<?php
$title = "img with width and height";

$body = <<<EOT
<h1 class="header-main">Simple img tag with width and height</h1>
<textarea id="code" name="code" class="code">
<head>
    <style>
        img {display: block;}
    </style>
</head>
<body>
    <img src="/examples/img.php?w=300&h=155&d=1"
         alt="Image with width and height attributes"
         width="300"
         height="155"
    />
    <p>A simple image.</p>
</body>
</textarea>
EOT;

$notes = <<<EOT
<ul class="notes">
<li>Look ma, <b>no page reflow!</b></li>
</ul>
EOT;

include(__DIR__ . "/00-template.php");