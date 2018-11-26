<?php
$title = "img fluid with srcset and sizes";
$body = <<<EOT
<h2>Hello srcset and sizes!</h2>
<textarea id="code" name="code" class="code">
<head>
    <style>
        img {display: block;}
        .img-fluid {max-width: 100%;height: auto}
        @media (min-width: 600px) {
            .col-50 {
                width: 50%;
            }
        }
    </style>
</head>
<body>
    <p>Making the image adaptive by adding <i>srcset</i> and <i>sizes</i> attributes</p>
    <div class="col-50">
        <img class="img-fluid" src="/examples/img.php?w=160&h=40&d=2" alt=""
            width="960" height="240"
            srcset="/examples/img.php?w=320&h=80&d=2 320w, /examples/img.php?w=620&h=155&d=2&foo=bar 620w, /examples/img.php?w=960&h=240&d=2&foo=bar 960w"
            sizes="(min-width: 600px) 50vw, 100vw"
        />
        </div>
    <p><b>Page reflow is back</b>, but don't care for now, we know how to fight him back.</p>
</body>
</textarea>
EOT;

include(__DIR__ . "/00-template.php");


