<!doctype html>

<head>
    <title><?php echo $title ?></title>
    <meta charset="utf-8"/>

    <link rel=stylesheet href="/assets/js/lib/codemirror/lib/codemirror.css">
    <link rel=stylesheet href="/assets/css/examples.css">
    <script src="/assets/js/lib/codemirror/lib/codemirror.js"></script>
    <script src="/assets/js/lib/codemirror/mode/xml/xml.js"></script>
    <script src="/assets/js/lib/codemirror/mode/javascript/javascript.js"></script>
    <script src="/assets/js/lib/codemirror/mode/css/css.js"></script>
    <script src="/assets/js/lib/codemirror/mode/htmlmixed/htmlmixed.js"></script>
</head>

<body>
    <div style="max-width: 1185px; margin-left: auto; margin-right: auto; background: #efefef">

    <select id="nav" onchange="var url = '/examples/' + this.value + '.php'; window.location.href = url;">
        <option value="01-img">img</option>
        <option value="02-img-width-height">img w witdh &amp; height</option>
        <option value="03-img-fluid">img-fluid</option>
        <option value="04-img-fluid-ratiobox">img-fluid with ratiobox</option>
        <option value="05-img-fluid-srcset">img-fluid with srcset and sizes</option>
        <option value="06a-img-fluid-srcset-col-50">img-fluid with srcset and sizes in 50% on desktop</option>
        <option value="06b-img-fluid-srcset-col-50-fixed-sizes">img-fluid with srcset and sizes in 50% on desktop with fixed sizes</option>
        <option value="07-picture">Picture</option>
        <option value="08-picture-ratiobox">Picture with ratio box</option>
        <option value="09-picture-ratiobox-col-50">Picture with ratio box and 50% on desktop</option>
        <option value="10-picture-lazysizes">Picture with ratio box lazysizes</option>
    </select>

    <?php echo $body ?>

    <iframe id=preview-mobile></iframe><iframe id=preview-desktop></iframe>
    <script src="/assets/js/examples.js"></script>
    </div>
</body>
