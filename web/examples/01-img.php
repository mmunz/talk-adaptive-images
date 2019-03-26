<?php
$title = "img simple";
$body = <<<EOT
<h1 class="header-main">Simple img tag</h1>
<textarea id="code" name="code" class="code">
<head>    
    <style>
        img {display: block;}
    </style>
</head>
<body>
    <img src="/examples/img.php?w=300&h=155&d=1" alt=""/>
    <p>A simple image</p>
</body>
</textarea>
EOT;

$notes = <<< EOT
<ul class="notes">
    <li>Let's welcome page reflow, our new <b>enemy no 1</b>.</li>
</ul>
EOT;

include(__DIR__ . "/00-template.php");


