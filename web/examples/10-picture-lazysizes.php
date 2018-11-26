<?php
$title = "picture";
$body = <<<EOT
<h2>picture with lazysizes</h2>
<textarea id="code" name="code" class="code">
<head>
    <script src="/assets/js/lib/lazysizes.min.js"></script>
    <style>
        img {display: block;}
        .img-fluid {max-width: 100%;height: auto}
        @media (min-width: 600px) {
            .col-50 {
                width: 50%;
            }
        }
        .ratiobox{position: relative; display: block; height: 0; max-width: 100%; padding-bottom: 28.125%}
        @media (max-width: 599px) {
            .ratiobox {padding-bottom: 75%;}
        }
        .ratiobox img,
        .ratiobox picture {display: block; position: absolute; top: 0; right: 0; bottom: 0; left: 0; max-width: inherit;}
    </style>
</head>
<body>
    <p>picture with one source, srcset and sizes and ratio box</p>
    <div class="col-50">
        <div class="ratiobox">
            <picture>
                <source media="(max-width: 599px)"
                        srcset="/examples/img.php?w=80&h=60&d=2 80w"
                        data-srcset="/examples/img.php?w=160&h=120&d=2 160w, /examples/img.php?w=320&h=240&d=2 320w"
                        sizes="100vw"
                        data-sizes="auto"
                        >
                <img src="/examples/img.php?w=640&h=180&d=2"
                     srcset="/examples/img.php?w=80&h=23&d=2 80w"
                     data-srcset="/examples/img.php?w=320&h=90&d=2 320w, /examples/img.php?w=640&h=180&d=2 640w"
                     sizes="50vw"
                     data-sizes="auto"
                     alt="" width="640" height="180" class="img-fluid lazyload" />
            </picture>
        </div>   
    </div>
    <p>This line is here to demonstrate <b>page reflow</b>.</p>
</body>
</textarea>
EOT;

include(__DIR__ . "/00-template.php");


