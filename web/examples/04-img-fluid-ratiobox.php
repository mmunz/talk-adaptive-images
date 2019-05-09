<?php
$title = "img fluid with ratio  box";
$body = <<<EOT
<h1 class="header-main">img-fluid with ratio box</h1>
<textarea id="code" name="code" class="code">
<head>
    <style>
        .img-fluid {max-width: 100%;height: auto}
        .ratiobox{position: relative; display: block;
            height: 0; max-width: 100%; padding-bottom: 25%; background: lightcyan }
        .ratiobox img {display: block; position: absolute;
            top: 0; right: 0; bottom: 0; left: 0; max-width: inherit;}
    </style>
</head>
<body>
    <p>We can use the padding-bottom hack to create a ratio box as placeholder for fluid images:</p>
    <div class="ratiobox">
        <img class="img-fluid" src="/examples/img.php?w=900&h=225&d=1" alt=""
            width="900" height="225"
        />
    </div>
    <p>And once again <b>page reflow has been defeated!</b></p>
</body>
</textarea>
EOT;

$notes = null;

include(__DIR__ . "/00-template.php");
