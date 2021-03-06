<head>
    <meta charset="UTF-8">
    <title>Nathan Rankin | Aviation</title>
    <script src="https://libs.cartocdn.com/carto-vl/v1.4.3/carto-vl.min.js"></script>
    <script src="https://api.tiles.mapbox.com/mapbox-gl-js/v1.0.0/mapbox-gl.js"></script>
    <link href="https://api.tiles.mapbox.com/mapbox-gl-js/v1.0.0/mapbox-gl.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet">
</head>
<?php include_once("header.php"); ?>

<body>
    <h1 class="header">Aviation</h1>
    <div class="line"></div>
    <div class="aviation-intro">
        <div class="aviation-about">
            <p> Aviation has always fascinated me. At the age of 10, I went for my first introductory flight in a small general-aviation aircraft and made it my goal to earn a pilot's license. After turning 17, I became a certified private pilot and later added an instrument rating and complex endorsement to my certificate. Since then I have seen many amazing sights from the air including the skyline of Chicago, the peaks of the Cascades, and the Massachusetts cape, all while sharing my passion with friends and family.</p>
            <img src="img/wings.png">
        </div>
        <span class="slideshow">
            <span class="slides">
                <div class="slide fade">
                    <div class="caption">Mount Hood</div>
                    <img src="img/av3.png">
                </div>
                <div class="slide fade">
                    <div class="caption">Chicago</div>
                    <img src="img/av1.png">
                </div>
                <div class="slide fade">
                    <div class="caption">Boston College</div>
                    <img src="img/av4.png">
                </div>
                <div class="slide fade">
                    <div class="caption">Arches National Park</div>
                    <img src="img/av2.png">
                </div>
                <div class="slide fade">
                    <div class="caption">Nantucket</div>
                    <img src="img/av5.png">
                </div>
                <div class="slide fade">
                    <div class="caption">Niagara Falls</div>
                    <img src="img/av6.png">
                </div>
                <div class="slide fade">
                    <div class="caption">White Mountains</div>
                    <img src="img/av7.png">
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </span>
            <div style="text-align:center">
                <div class="dotbar">
                    <span class="slide-dot" onclick="currentSlide(1)"></span>
                    <span class="slide-dot" onclick="currentSlide(2)"></span>
                    <span class="slide-dot" onclick="currentSlide(3)"></span>
                    <span class="slide-dot" onclick="currentSlide(4)"></span>
                    <span class="slide-dot" onclick="currentSlide(5)"></span>
                    <span class="slide-dot" onclick="currentSlide(6)"></span>
                    <span class="slide-dot" onclick="currentSlide(7)"></span>

                </div>
            </div>
        </span>
        <script src="js/slides.js"></script>
    </div>
    <div>

        <br>
        <br>
        <div class="subline"></div>
        <div class="flags">
            <div class="flag">
                <img src="img/co.png">
            </div>
            <div class="flag">
                <img src="img/il.png">
            </div>
            <div class="flag">
                <img src="img/in.png">
            </div>
            <div class="flag">
                <img src="img/ia.png">
            </div>
            <div class="flag">
                <img src="img/ma.png">
            </div>
            <div class="flag">
                <img src="img/mi.png">
            </div>
            <div class="flag">
                <img src="img/mo.png">
            </div>
            <div class="flag">
                <img src="img/ne.png">
            </div>
            <div class="flag">
                <img src="img/nh.png">
            </div>
            <div class="flag">
                <img src="img/ny.png">
            </div>
            <div class="flag">
                <img src="img/ok.png">
            </div>
            <div class="flag">
                <img src="img/or.png">
            </div>
            <div class="flag">
                <img src="img/ri.png">
            </div>
            <div class="flag">
                <img src="img/wa.png">
            </div>
            <div class="flag">
                <img src="img/wi.png">
            </div>
        </div>
        <div id="map"></div>
        <script src="js/map.js"></script>

        <span id="board" class="destinations"></span>
        <br>
        <br>
        <div class="subline"></div>
        <h3 class="subsection">
            <span class="aviation-section-text">Total Time:</span>
        </h3>
        <div class="hours">167.6 hrs</div>
        <h3 class="subsection">
            <span class="aviation-subsection-text">Top-Time Aircraft:</span>
        </h3>
        <div class="aircraft">
            <div class="ac">
                <img src="img/c152.png">
                <span class="ac-id">Cessna 152</span>
                <span class="subline"></span>
                <div><span id="c152-board" class="ac-time"></span></div>
            </div>
            <div class="ac">
                <img src="img/c172.png">
                <span class="ac-id">Cessna 172</span>
                <span class="subline"></span>
                <div><span id="c172-board" class="ac-time"></span></div>
            </div>
            <div class="ac">
                <img src="img/p28a.png">
                <span class="ac-id">Piper PA-28</span>
                <span class="subline"></span>
                <div><span id="p28a-board" class="ac-time"></span></div>
            </div>
        </div>
        <script src="js/board.js"></script>
</body>
<?php
include_once('footer.php');
