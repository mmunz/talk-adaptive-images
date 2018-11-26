<?php
$title = "img with width and height";
$body = <<<EOT
<h2>Simple img tag with width and height</h2>
<textarea id="code" name="code" class="code">
<head>
    <style>
        img {display: block;}
    </style>
</head>
<body>
    <p>A simple image.</p>
    <img src="/examples/img.php?w=300&h=155&d=2" alt=""
        width="300" height="155"
    />
    <p>Look ma, <b>no page reflow!</b></p>
</body>
</textarea>
EOT;

include(__DIR__ . "/00-template.php");


