<?php
$title = "img simple";
$body = <<<EOT
<h2>Simple img tag</h2>
<textarea id="code" name="code" class="code">
<head>    
    <style>
        img {display: block;}
    </style>
</head>
<body>
    
    <p>A simple image.</p>
    <img src="/examples/img.php?w=300&h=155&d=2" alt=""/>
    <p>Let's welcome page reflow, our new <b>enemy no 1</b>.</p>
</body>
</textarea>
EOT;

include(__DIR__ . "/00-template.php");


