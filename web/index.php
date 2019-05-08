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
            <p>Manuel Munz / TEAM23</p>
            <p>09.05.2019 @ HSA</p>
        </section>
        <section id="schedule">
            <h1>Fahrplan</h1>
            <ul>
                <li><a href="#/what">Was sind adaptive images?</a></li>
                <li><a href="#/five-minutes">Adaptive images in 5 minuten</a></li>
                <li><a href="#/usage-in-cms">Adaptive images im CMS</a></li>
                <li><a href="#/lazysizes">lazysizes.js</a></li>
                <li><a href="#/c1-adaptive-images">c1-adaptive-images</a></li>
                <li><a href="#/more-opt">Weitere sinnvolle Bildoptimierungen</a></li>
                <li><a href="#/why">Warum adaptive images verwenden?</a></li>
            </ul>
        </section>
        <section id="what">
            <section id="what-into">
                <h1>Wichtige Begriffe</h1>
                <ul>
                    <li><a href="what-fluid-image">Responsive / Fluid Image</a></li>
                    <li><a href="what-adaptive-image">Adaptive Image</a></li>
                    <li><a href="art direction">Art direction</a></li>
                </ul>
            </section>
            <section id="what-fluid-image">
                <h1>Fluid / Responsive Image</h1>
                <ul>
                    <li>Passt sich der Breite des Viewports an.</li>
                    <li>.img-responsive/.img-fluid in Bootstrap</li>
                </ul>

                <div class="font-small">max-width: 100%; height: auto</div>
                <video width="480" height="360" controls data-autoplay>
                    <source src="assets/video/resize-responsive-image.webm" type="video/webm">
                    Your browser does not support the video tag.
                </video>
            </section>
            <section id="what-adaptive-image">
                <h1>Adaptive image</h1>
                Für unterschiedliche Geräte(-breiten) wird das jeweils optimale Bild geladen.<br />
                Optional auch fluid/responsive.
                <video width="480" height="360" controls data-autoplay>
                    <source src="assets/video/resize-adaptive-image.webm" type="video/webm">
                    Your browser does not support the video tag.
                </video>
            </section>
            <section id="what-art-direction">
                <h1>Art direction</h1>
                Unterschiedliche Beschnitte für unterschiedliche Geräte(-breiten)<br />
                <video width="480" height="360" controls data-autoplay>
                    <source src="assets/video/art-direction.webm" type="video/webm">
                    Your browser does not support the video tag.
                </video>
            </section>

        </section>
        <section id="crashcourse">
            <section id="five-minutes">
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
                <h1>lvl0 - Einfaches Bild</h1>
                <ul class="ul--block">
                    <li><?php echo(htmlspecialchars('<img src="" alt="" />')) ?></li>
                    <li><i>src</i> ist required, <i>alt</i> ist wichtig (Accessibility)</li>
                    <li><i>height</i> und <i>width</i></li>
                    <li>Demo
                        <ul>
                            <li>Setup vorstellen</li>
                            <li>Responsiveness</li>
                            <li>Page reflow</li>
                        </ul>
                    </li>
                </ul>
                <a href="/examples/01-img.php" target="_blank">Demo</a>
            </section>
            <section id="srcset">
                <h1>lvl1 - srcset und sizes</h1>
                <ul>
                    <li>seit 2013 (extension spec) / 2014 (HTML 5)</li>
                    <li>zwei neue Attribute
                        <ul>
                            <li>
                                <i>srcset</i>: Komma-separierte Liste mit Bildkandidaten (url, width descriptor)
                            </li>
                            <li><i>sizes</i>: Breite in der das Bild dargestellt werden wird
                                <ul>
                                <li>relativ zum Viewport (vw) oder absolut (px, em etc.) aber keine %. Default 100vw</li>
                                <li>calc() für komplexere Szenarios</li>
                                <li>media conditions !=media queries</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <a href="/examples/05-img-fluid-srcset.php" target="_blank">Demo</a>
                <footer class="quotations">
                    <ol>
                        <li><a href="http://w3c.github.io/html/semantics-embedded-content.html#element-attrdef-img-srcset">http://w3c.github.io/html/semantics-embedded-content.html#element-attrdef-img-srcset</a></li>
                    </ol>
                </footer>
            </section>
            <section id="picture">
                <h1>lvl2 - picture, source, srcset und sizes</h1>
                <ul>
                    <li>ebenfalls nicht neu (2014)</li>
                    <li>mehrere <i>source</i> tags mit media conditions möglich</li>
                    <li>damit ist nun art direction möglich</li>
                </ul>
                <div>
                    <a href="/examples/07-picture.php" target="_blank">Demo</a>
                </div>
                <footer class="quotations">
                    <ol>
                        <li><a href="https://w3c.github.io/html/semantics-embedded-content.html#the-picture-element">https://w3c.github.io/html/semantics-embedded-content.html#the-picture-element</a></li>
                    </ol>
                </footer>
            </section>
            <section id="browser-support">
                <h1>Caniuse?</h1>
                <div class="row">
                    <div class="col-6">
                        <img src="assets/img/gfx/caniuse-srcset-sizes.png" class="img-responsive"/>
                    </div>
                    <div class="col-6">
                        <img src="assets/img/gfx/caniuse-picture.png" class="img-responsive"/>
                    </div>
                </div>
                <h2>Polyfills verfügbar</h2>
                <ul>
                    <li>https://github.com/scottjehl/picturefill</li>
                    <li>https://github.com/aFarkas/lazysizes/blob/gh-pages/plugins/respimg</li>
                </ul>
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
            <section id="img-review-2">
                <h1>Review Demo - Wer weiss was?</h1>
                <table>
                    <tr>
                        <th></th>
                        <th>Entwickler</th>
                        <th>Browser</th>
                    </tr>
                    <tr>
                        <th>Viewport Dimensions</th>
                        <td><span class="color-error">✗</span></td>
                        <td><span class="color-ok">✓</span></td>
                    </tr>
                    <tr>
                        <th>Tatsächliche Bildgrösse im Layout</th>
                        <td><span class="color-ok">✓</span></td>
                        <td><span class="color-error">✗</span></td>
                    </tr>
                    <tr>
                        <th>Pixel density</th>
                        <td><span class="color-error">✗</span></td>
                        <td><span class="color-ok">✓</span></td>
                    </tr>
                    <tr>
                        <th>Grösse der Bilder/kandidaten</th>
                        <td><span class="color-ok">✓</span></td>
                        <td><span class="color-error">✗</span></td>
                    </tr>
                </table>
            </section>

        </section>
        <section id="being-a-developer">
            <img src="assets/img/gfx/developer.jpg" class="img-responsive"/>
        </section>
        <section id="usage-in-cms">
            <h1>Adaptive images im CMS</h1>
            <ul>
                <li>Flexible Webseiten. Freie Anordnung von Inhalten (z.B. in Spalten)</li>
                <li>Als Entwickler kennen wir nun das sizes-Attribut nicht mehr und können es folglich nicht richtig setzen</li>
                <li>Backend muss crop-Varianten unterstützen, in TYPO3: image wizard.</li>
            </ul>
            <img src="assets/img/gfx/typo3-8_7-image-wizard.png" class="img-responsive"/>
        </section>
        <section id="lazysizes">
            <h1>lvl3 - lazysizes.js</h1>
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
            <h1>c1_adaptive_images viewHelper für TYPO3</h1>
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
                <li>Hohe Test-Abdeckung: Unit, Functional, Acceptance</li>
                <li><a href="https://extensions.typo3.org/extension/c1_adaptive_images/">https://extensions.typo3.org/extension/c1_adaptive_images/</a></li>
                <li><a href="https://github.com/mmunz/c1_adaptive_images/tree/development">https://github.com/mmunz/c1_adaptive_images/tree/development</a></li>
            </ul>
        </section>
        <section id="more-opt">
            <h1>Weitere sinnvolle Optimierungen</h1>
            <ul>
                <li>Alternative Formate wie webp oder heif verwenden (30-50% Reduktion)</li>
                <li>Bilder optimieren durch jpegoptim, optipng, gifsicle</li>
                <li>SVG nutzen wo sinnvoll, für einfache Icons evtl. auch unicode</li>
            </ul>
        </section>
        <section id="why">
            <section id="why-intro">
                <h1>Warum der Aufwand?</h1>
                <ul>
                    <li><a href="#why-volume">Gewicht einer Webseite</a></li>
                    <li><a href="#why-performance">Schnellere Ladezeit durch adaptive images</a></li>
                    <li><a href="#why-bandwidth">und weniger verbrauchte Bandbreite</a></li>
                    <li><a href="#why-psychological">Psychologische Performanceoptimierung durch Placeholder und lazyloading</a></li>
                </ul>
            </section>
            <section id="why-volume">
                <h1>Gewicht einer durchschnittlichen Webseite</h1>

                <div class="row">
                    <div class="col-6">
                        <ul>
                            <li>Eine durchschnittliche Webseite ist um die 2MB gross <sup class="quotation-link">[1][2]</sup></li>
                            <li>um die zwei Drittel davon sind Bilder <sup class="quotation-link">[1][2]</sup></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <figure>
                            <img src="assets/img/gfx/average-page-size-2016-lg.png" alt="Average weight of a website in 2016" class="img-responsive"/>
                            <figcaption>Average weight of a website in 2016, from: https://www.keycdn.com/support/the-growth-of-web-page-size</figcaption>
                        </figure>
                    </div>
                </div>

                <footer class="quotations">
                    <ol>
                        <li><a href="https://httparchive.org/reports/page-weight?view=grid">https://httparchive.org/reports/page-weight?view=grid</li>
                        <li><a href="https://www.keycdn.com/support/the-growth-of-web-page-size">https://www.keycdn.com/support/the-growth-of-web-page-size</a></li>
                    </ol>
                </footer>
            </section>
            <section id="why-performance">
                <h1>Performance</h1>
                <ul>
                    <li>"No matter what, faster is better and less is more."<sup class="quotation-link">[1]</sup></li>
                    <li>Zufriedene User, weniger Dropouts, mehr Umsatz</li>
                    <li>gut für SEO</li>
                    <li>nicht vergessen: es gibt jede Menge Menschen mit langsamer Internetverbindung!</li>
                </ul>
                <footer class="quotations">
                    <ol>
                        <li><a href="https://www.thinkwithgoogle.com/marketing-resources/data-measurement/mobile-page-speed-new-industry-benchmarks/">https://www.thinkwithgoogle.com/marketing-resources/data-measurement/mobile-page-speed-new-industry-benchmarks/</a></li>
                    </ol>
                </footer>
            </section>
            <section id="why-bandwidth">
                <h1>Weniger Trafficverbrauch</h1>
                <ul>
                    <li>Gut für Besucher ohne Flatrate oder mit limitiertem Datenverbrauch</li>
                    <li>Kostenersparnis beim Hosting</li>
                </ul>
            </section>
            <section id="why-psychological">
                <h1>Psychologische Performanceoptimierung</h1>
                <ul>
                    <li>durch Low-Quality Preview images (inline, sofort da)</li>
                    <li>Vermeidung von Page Reflows</li>
                </ul>
                <video width="480" height="360" controls data-autoplay>
                    <source src="assets/video/lazyload-with-preview-image.webm" type="video/webm">
                    Your browser does not support the video tag.
                </video>
            </section>
        </section>
        <section id="the-end">
            <h1>Adaptive images für schnelle Seiten</h1>
            <p>Das ist benutzbar, tut es!</p>
            <img src="/assets/img/gfx/too-fast.gif" class="img-responsive" alt="Use goddamn adaptive images!"/>
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
