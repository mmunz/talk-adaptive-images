<?php
$title = "img fluid";
$body = <<<EOT
<h2>img-fluid</h2>
<textarea id="code" name="code" class="code">
<head>
    <style>
        img {display: block;}
        .img-fluid {max-width: 100%;height: auto}
    </style>
</head>
<body>
    <p>Good old img-fluid (formerly known as img-responsive)</p>
    <img class="img-fluid" src="/examples/img.php?w=620&h=155&d=2" alt=""
        width="620" height="155"
    />
    <p>But oh no, our arch enemy <b>page reflow is back!</b></p>
</body>
</textarea>
EOT;

include(__DIR__ . "/00-template.php");


