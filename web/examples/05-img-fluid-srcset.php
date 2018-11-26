<?php
$title = "img fluid with srcset and sizes";
$body = <<<EOT
<h2>Hello srcset and sizes!</h2>
<textarea id="code" name="code" class="code">
<head>
    <style>
        img {display: block;}
        .img-fluid {max-width: 100%;height: auto}
    </style>
</head>
<body>
    <p>Making the image adaptive by adding <i>srcset</i> and <i>sizes</i> attributes</p>
    <img class="img-fluid" src="/examples/img.php?w=160&h=40&d=2" alt=""
        width="620" height="155"
        srcset="/examples/img.php?w=320&h=80&d=2 320w, /examples/img.php?w=620&h=155&d=2&foo=bar 620w"
        sizes="100vw"
    />
    <p><b>Page reflow is back</b>, but don't care for now, we know how to fight him back.</p>
</body>
</textarea>
EOT;

include(__DIR__ . "/00-template.php");


