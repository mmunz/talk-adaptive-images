<!doctype html>

<head>
    <title><?php echo $title ?></title>
    <meta charset="utf-8"/>
    <link rel=stylesheet href="/assets/js/lib/codemirror/lib/codemirror.css">
    <link rel=stylesheet href="/assets/js/lib/codemirror/theme/cobalt.css">
    <link rel=stylesheet href="/assets/css/examples.css">
    <script src="/assets/js/lib/codemirror/lib/codemirror.js"></script>
    <script src="/assets/js/lib/codemirror/mode/xml/xml.js"></script>
    <script src="/assets/js/lib/codemirror/mode/javascript/javascript.js"></script>
    <script src="/assets/js/lib/codemirror/mode/css/css.js"></script>
    <script src="/assets/js/lib/codemirror/mode/htmlmixed/htmlmixed.js"></script>
</head>

<body>

<div style="max-width: 1185px; margin-left: auto; margin-right: auto; background: #efefef">
    <?php

    function menuItemselected($pathsegment)
    {
        $uri = (string)$_SERVER['REQUEST_URI'];
        if ('/examples/' . $pathsegment . '.php' === $uri) {
            return ' selected';
        }
        return $uri;
    }

    ?>
    <select id="nav" class="modeselect"
            onchange="var url = '/examples/' + this.value + '.php'; window.location.href = url;">
        <option value="01-img"<?php echo menuItemselected('01-img'); ?>>img</option>
        <option value="02-img-width-height"<?php echo menuItemselected('02-img-width-height'); ?>>img w witdh &amp;
            height
        </option>
        <option value="03-img-fluid"<?php echo menuItemselected('03-img-fluid'); ?>>img-fluid</option>
        <option value="04-img-fluid-ratiobox"<?php echo menuItemselected('04-img-fluid-ratiobox'); ?>>img-fluid with
            ratiobox
        </option>
        <option value="05-img-fluid-srcset"<?php echo menuItemselected('05-img-fluid-srcset'); ?>>img-fluid with srcset
            and sizes
        </option>
        <option value="06a-img-fluid-srcset-col-50"<?php echo menuItemselected('06a-img-fluid-srcset-col-50'); ?>>
            img-fluid with srcset and sizes in 50% on desktop
        </option>
        <option value="06b-img-fluid-srcset-col-50-fixed-sizes"<?php echo menuItemselected('06b-img-fluid-srcset-col-50-fixed-sizes'); ?>>
            img-fluid with srcset and sizes in 50% on desktop with fixed sizes
        </option>
        <option value="07-picture"<?php echo menuItemselected('07-picture'); ?>>Picture</option>
        <option value="08-picture-ratiobox"<?php echo menuItemselected('08-picture-ratiobox'); ?>>Picture with ratio
            box
        </option>
        <option value="09-picture-ratiobox-col-50"<?php echo menuItemselected('09-picture-ratiobox-col-50'); ?>>Picture
            with ratio box and 50% on desktop
        </option>
        <option value="10-picture-lazysizes"<?php echo menuItemselected('10-picture-lazysizes'); ?>>Picture with ratio
            box lazysizes
        </option>
        <option value="10a-picture-lazysizes-smallest-placeholder"<?php echo menuItemselected('10a-picture-lazysizes-smallest-placeholder'); ?>>
            Picture with ratio box lazysizes and smallest possible inline placeholder
        </option>
    </select>

    <?php echo $body ?>

    <div class="preview">
        <div class="preview__mobile">
            <iframe id="preview-mobile" sandbox="allow-same-origin allow-scripts"></iframe>
        </div>
        <div class="preview__desktop">
            <iframe id="preview-desktop" sandbox="allow-same-origin allow-scripts"></iframe>
        </div>
    </div>

    <?php
        if ($notes) {
            echo $notes;
        }
    ?>
    <script src="/assets/js/examples.js"></script>
</div>
</body>
