<?php
?>
<html>
<head>
    <link rel="stylesheet" href="assets/css/reveal/reveal.css">
    <link rel="stylesheet" href="assets/css/reveal/theme/black-team23.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/lib/head.load.min.js"></script>

</head>
<body>
<div class="reveal">
    <div class="slides">
        <section id="cover">
            <h1>Adaptive images</h1>
            <p>Manuel Munz</p>
            <p>27.11.2018 @ TEAM23</p>
            <!--<p class="small"><a href="https://git.team23.de/mmunz/2018-ai-talk">https://git.team23.de/mmunz/2016-svg-talk</a></p>-->
        </section>
        <section id="schedule">
            <h1>Fahrplan</h1>
            <ul>
                <li><a href="#/what">Was sind adaptive images?</a></li>
                <li><a href="#/why">Warum adaptive images verwenden?</a></li>
                <li><a href="#/5minutes">Adaptive images in 5 minuten</a></li>
                <li><a href="#/usage-in-cms">Adaptive images im CMS</a></li>
                <li><a href="#/lazysizes">lazysizes.js</a></li>
                <li><a href="#/c1-adaptive-images">c1-adaptive-images</a></li>
                <li><a href="#/more-opt">Weitere sinnvolle Bildoptimierungen</a></li>
            </ul>
        </section>
        <section id="what">
            <h1>Definition</h1>
            <ul>
                <li><b>fluid/responsive image:</b> Passt sich der Breite des Geräts an. Wenn Bild zu gross ist, dann wird es kleiner skaliert (max-width: 100%; height: auto)</li>
                <li><b>adaptive image:</b> Für unterschiedliche Geräte(-breiten) wird das jeweils optimalste Bild geladen. Optional auch fluid/responsive.</li>
            </ul>
        </section>
        <section id="why">
            <h1>Warum der Aufwand?</h1>
            <ul>
                <li>Zwei Drittel des Datenvolumens einer üblichen Webseite sind Bilder</li>
                <li>Schnellere Ladezeit durch adaptive images</li>
                <li>und weniger verbrauchte Bandbreite</li>
                <li>Psychologische Performanceoptimierung durch Placeholder und lazyloading</li>
            </ul>
        </section>
        <section id="crashcourse">
            <section id="5minutes">
                <h1>Adaptive images in 5 minuten</h1>
                <ul>
                    <li>img</li>
                    <li>picture</li>
                    <li>img mit srcset und sizes</li>
                    <li>picture mit source, srcset und sizes</li>
                    <li>ratiobox</li>
                </ul>
            </section>
            <section id="img">
                <a href="/examples/01-img.php" target="_blank">Start adaptive images crash course</a>
            </section>
            <section id="img-review">
                <h1>Review Demo</h1>
                <ul>
                    <li>Wir können nun adaptive img und picture tags mit sources, srcset und sizes bauen.</li>
                    <li>Wir wissen, was art direction ist.</li>
                    <li>Wir kennen die Problematik der page reflows und wissen, warum es eine ratio box braucht.</li>
                    <li>Wir erahnen, wie ein Browser Bilder läd und warum wir das sizes-Attribut IMMER korrekt angeben müssen.</li>
                    <li>Must read: <a href="https://ericportis.com/posts/2014/srcset-sizes/" target="_blank">https://ericportis.com/posts/2014/srcset-sizes/</a></li>
                </ul>
            </section>
        </section>
        <section id="being-a-developer">
            <img src="assets/img/gfx/developer.jpg" class="img-responsive"/>
        </section>
        <section id="usage-in-cms">
            <h1>Adaptive images im CMS</h1>
            <ul>
                <li>Wir bauen flexible Webseiten. Editoren können Bilder frei anordnen, z.B. in Spalten</li>
                <li>Als Entwickler kennen wir nun das sizes-Attribut nicht mehr und können es folglich nicht richtig setzen</li>
                <li>Backend muss crop-Varianten unterstützen, in TYPO3: image wizard.</li>
            </ul>
            <img src="assets/img/gfx/typo3-8_7-image-wizard.png" class="img-responsive"/>
        </section>
        <section id="lazysizes">
            <h1>lazysizes.js</h1>
            <ul>
                <li>JavaScript Lib, <a target="_blank" href="https://github.com/aFarkas/lazysizes">https://github.com/aFarkas/lazysizes</a></li>
                <li>automatisches Setzen des sizes Attributs auf tatsächliche Breite in Pixeln.</li>
                <li>Bis dahin Möglichkeit zur Anzeige eines Placeholder-Bilds (z.B. LQIP - low quality image placeholder)</li>
                <li>Ratio Box weiterhin nötig.</li>
                <li>Demo: <a target="_blank" href="/examples/10-picture-lazysizes.php">Lazysizes Demo img</a></li>
                <li>Demo TYPO3: <a href="https://ai-demo.comuno.net/modes/picture-mit-lazysizesjs-und-image-placeholder/">https://ai-demo.comuno.net/modes/picture-mit-lazysizesjs-und-image-placeholder/</a></li>
            </ul>
        </section>
        <section id="c1-adaptive-images">
            <h1>c1_adaptive_images viewHelpers für TYPO3</h1>
            <ul>
                <li>
                    Sammlung von ViewHelpern für flexibles Rendern von adaptive Images in TYPO3 / Fluid
                    <ul class="ul--inline">
                        <li>ai:getCropVariants</li>
                        <li>ai:getSrcSet</li>
                        <li>ai:ratioBox</li>
                        <li>ai:placeholder.image</li>
                        <li>ai:placeholder.svg</li>
                        <li>ai:image</li>
                        <li>ai:picture</li>
                    </ul>
                </li>
                <li>Nimmt dem Entwickler viel Arbeit ab ohne ihn einzuschränken</li>
                <li>Noch nicht released, aber schon im Einsatz</li>
                <li>Hohe Test-Abdeckung: Unit, Functional, Acceptance</li>
                <li><a href="https://github.com/mmunz/c1_adaptive_images/tree/development">https://github.com/mmunz/c1_adaptive_images/tree/development</a></li>
            </ul>
        </section>
        <section id="more-opt">
            <h1>Weitere sinnvolle Optimierungen</h1>
            <ul>
                <li>Alternative Formate wie webp oder heif verwenden (30-50% Reduktion)</li>
                <li>Bilder optimieren durch jpegoptim, optipng, gifsicle</li>
                <li>SVG nutzen wo sinnvoll</li>
                <li>focal point und object-fit</li>
            </ul>
        </section>
        <section id="the-end">
            <h1>Use. Adaptive. Images.</h1>
            <img src="/assets/img/gfx/aggro.jpg" class="img-responsive" alt="Use goddamn adaptive images!"/>
            <h1>Please.</h1>
        </section>
    </div>
</div>
<script src="assets/js/reveal.js"></script>
<script>
    Reveal.initialize({
        dependencies: [
            // {
            //     src: 'assets/js/plugin/highlight/highlight.js', async: true, callback: function () {
            //         hljs.initHighlightingOnLoad();
            //     }
            // },
            // {
            //     src: 'assets/js/lib/jquery-3.1.1.min.js', async: true, callback: function () {
            //     }
            // },
            // {
            //     src: 'assets/js/lib/flot/jquery.flot.js', async: true, callback: function () {
            //     }
            // },
            // {
            //     src: 'assets/js/lib/flot/plugins/jquery.flot.JUMlib.js', async: true, callback: function () {
            //     }
            // },
            // {
            //     src: 'assets/js/lib/flot/plugins/jquery.flot.spider.js', async: true, callback: function () {
            //     }
            // },
            {
                src: 'assets/js/main.js', async: true, callback: function () {
                }
            },
        ]
    });
</script>
</body>
</html>
