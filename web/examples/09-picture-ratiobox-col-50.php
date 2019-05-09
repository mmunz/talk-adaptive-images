<?php
$title = "picture";
$body = <<<EOT
<h1 class="header-main">picture tag and ratio box</h1>
<textarea id="code" name="code" class="code">
<head>
    <style>
        img {display: block;}
        .img-fluid {max-width: 100%; height: auto}
        @media (min-width: 600px) {
            .col-50 {width: 50%;}
        }
        .ratiobox{position: relative; display: block; height: 0; max-width: 100%;
            padding-bottom: 28.125%; background: lightcyan}
        @media (max-width: 599px) {
            .ratiobox {padding-bottom: 75%;}
        }
        .ratiobox img,
        .ratiobox picture {display: block; position: absolute;
            top: 0; right: 0; bottom: 0; left: 0; max-width: inherit;}
    </style>
</head>
<body>
    <p>picture with one source, srcset and sizes and ratio box</p>
    <div class="col-50">
        <div class="ratiobox">
            <picture>
                <source media="(max-width: 599px)"
                        srcset="/examples/img.php?w=160&h=120&d=1 160w,
                                /examples/img.php?w=320&h=240&d=1 320w"
                        sizes="100vw">
                <img src="/examples/img.php?w=640&h=180&d=1"
                     srcset="/examples/img.php?w=320&h=90&d=1 320w,
                             /examples/img.php?w=640&h=180&d=1 640w"
                     sizes="50vw"
                     alt="" width="640" height="180" class="img-fluid" />
            </picture>
        </div>   
    </div>
    <p>This line is here to demonstrate <b>page reflow</b>.</p>
</body>
</textarea>
EOT;

$notes = null;

include(__DIR__ . "/00-template.php");


