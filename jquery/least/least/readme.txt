least.js is a Random &amp; Responsive jQuery, HTML 5 &amp; CSS3 Gallery with LazyLoad

##### DEMO - http://kamilczujowski.github.io/least/

## How to install:

1. Download least.js - (http://kamilczujowski.github.io/least/least.zip) or view the Code on GitHub - (https://github.com/kamilczujowski/least).

2. Insert the following code before end of </head>-tag.

    <!-- least.js CSS-file -->
    <link href="css/least.min.css" rel="stylesheet" />
    <!-- jQuery libary -->
    <script src="http://code.jquery.com/jquery-latest.js" defer="defer"></script>
    <!-- least.js JS-file -->
    <script src="js/least.min.js" defer="defer"></script>
    <!-- Lazyload JS-file -->
    <script src="js/jquery.lazyload.js" defer="defer"></script>
    

3. Insert the following code right after the <body>-tag.

    <section>
        <ul id="gallery">
            <li id="fullPreview"></li>
            
            <li>
                <a href="img/full/1.jpg"></a>
                <img data-original="img/thumb/1.jpg" src="img/effects/white.gif" width="240" height="150" alt="Ocean" />
            
                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li>
                            <h2>
                                Ocean
                            </h2>
                        </li>
                        <li>
                            <p>
                                View Picture
                            </p>
                        </li>
                    </ul>
                </div>
            
                <div class="projectInfo">
                    <strong>
                        Day, Month, Year
                    </strong> sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                </div>
            </li>
        </ul>
    </section>

4. Now you need to call the plugin with your Gallery ID (default - #gallery).

    $(document).ready(function(){
        $('#gallery').least();
    });

5. You can use the following default options:
    
    'random': true/false (default to true)
    'lazyload': true/false  (default to true)
    'scrollToGallery': true/false (default to true)

## Changelog

**V.1.5 (03. July 2013)**
» Newtest LazyLoad library (1.8.4)
» Newtest jQuery library (2.0.1)
» LazyLoad loading bugfix

**V.1.4 (26. June 2013)** 
» Added image loader

**V.1.3 (19. June 2013)** 
» Added a new option "scrollToGallery" 
» New pictures

**V.1.2 (06. June 2013)** 
» Transformation to a jQuery Plugin by Jorge Epuñan - @csslab - (https://twitter.com/csslab) 
» Adding Changelog 
» Some small Bugfixes

**V.1.1 (30. April 2013)** 
» Changing file ending from .less to .scss 
» Smaler Download 
» Cleanup .js and .scss files 
» Adding ReadMe file 
» Some small Bugfixes

## Done!

## ToDos for the next version
- slider function
- simple integration

Made with ♥ by Kamil Czujowski - (https://twitter.com/kamilczujowski) and Sergej Müller - (http://wpcoder.de) © 2013 Hamburg, Germany 
Version: 1.5