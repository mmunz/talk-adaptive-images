<?php
$title = "picture";
$body = <<<EOT
<h1 class="header-main">Simple picture tag</h1>
<textarea id="code" name="code" class="code">
<head>
    <style>
        img {display: block;}
        .img-fluid {max-width: 100%;height: auto}
    </style>
</head>
<body>
    <p>A simple picture with one source</p>
    <picture>
        <source media="(max-width: 600px)" srcset="/examples/img.php?w=320&h=240&d=1">
        <img src="/examples/img.php?w=640&h=180&d=1" alt="" width="640" height="180" class="img-fluid" />
    </picture>
    <p>This line is here to demonstrate <b>page reflow</b>.</p>
</body>
</textarea>
EOT;

include(__DIR__ . "/00-template.php");


