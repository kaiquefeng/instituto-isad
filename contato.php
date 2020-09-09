
        <!-- Begin Main Header Area Two -->
        <?php require_once('components/header.php') ?>
        <!-- Main Header Area Two End Here -->

        <!-- Begin Quicky's Breadcrumb Area -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Contato</h2>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Contato</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Quicky's Breadcrumb Area End Here -->

        <!-- Begin Contact Main Page Area -->
        <div class="contact-main-page ptb-100">
            <div class="google-map_area">
                <div class="container-fluid">
                    <div id="google-map"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-page-side-content">
                            <h3 class="contact-page-title">Informações de contato</h3>
                            <p class="contact-page-message">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi, necessitatibus. Magnam, esse? Id, repellendus veniam iure quas, quidem quis hic cupiditate qui quam dolores, modi ipsam? Aut totam quis illum?</p>
                            <div class="single-contact-block">
                                <h4><i class="fa fa-fax"></i> Endereço</h4>
                                <p>Rua ...</p>
                            </div>
                            <div class="single-contact-block">
                                <h4><i class="fa fa-phone"></i> Telefone</h4>
                                <p>Mobile: (08) 123 456 789</p>
                                <p>Hotline: 1009 678 456</p>
                            </div>
                            <div class="single-contact-block last-child">
                                <h4><i class="fa fa-envelope"></i> E-mail</h4>
                                <p>recepcao@institutoisad.com.br</p>
                                <p>compras@institutoisad.com.br</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form-content">
                            <h3 class="contact-page-title">Nos envie uma mensagem</h3>
                            <div class="contact-form">
                                <form id="contact-form" action="http://hasthemes.com/file/mail.php" method="post">
                                    <div class="form-group">
                                        <label> Nome <span class="required">*</span></label>
                                        <input type="text" name="name" id="con_name" required>
                                    </div>
                                    <div class="form-group">
                                        <label> E-mail <span class="required">*</span></label>
                                        <input type="email" name="email" id="con_email" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Assunto</label>
                                        <input type="text" name="assunto" id="con_subject">
                                    </div>
                                    <div class="form-group form-group-2">
                                        <label> Mensagem</label>
                                        <textarea name="mensagem" id="con_message"></textarea>
                                    </div>
                                    <div class="form-group mb-0">
                                        <button type="submit" value="submit" id="submit" class="contact-form_btn" name="submit">Enviar</button>
                                    </div>
                                </form>
                            </div>
                            <p class="form-messege mb-0"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Main Page Area End Here -->

        <script src="https://maps.google.com/maps/api/js?sensor=false&amp;libraries=geometry&amp;v=3.22&amp;key=AIzaSyChs2QWiAhnzz0a4OEhzqCXwx_qA9ST_lE"></script>

<script>
    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 12,
            scrollwheel: false,
            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(40.740610, -73.935242), // New York
            // How you would like to style the map.
            // This is where you would paste any style found on
            styles: [{
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [{
                            "color": "#e9e9e9"
                        },
                        {
                            "lightness": 17
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [{
                            "color": "#f5f5f5"
                        },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [{
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 17
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 29
                        },
                        {
                            "weight": 0.2
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [{
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 18
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [{
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 16
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [{
                            "color": "#f5f5f5"
                        },
                        {
                            "lightness": 21
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [{
                            "color": "#dedede"
                        },
                        {
                            "lightness": 21
                        }
                    ]
                },
                {
                    "elementType": "labels.text.stroke",
                    "stylers": [{
                            "visibility": "on"
                        },
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 16
                        }
                    ]
                },
                {
                    "elementType": "labels.text.fill",
                    "stylers": [{
                            "saturation": 36
                        },
                        {
                            "color": "#333333"
                        },
                        {
                            "lightness": 40
                        }
                    ]
                },
                {
                    "elementType": "labels.icon",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [{
                            "color": "#f2f2f2"
                        },
                        {
                            "lightness": 19
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [{
                            "color": "#fefefe"
                        },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                            "color": "#fefefe"
                        },
                        {
                            "lightness": 17
                        },
                        {
                            "weight": 1.2
                        }
                    ]
                }
            ]
        };
        // Get the HTML DOM element that will contain your map
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('google-map');
        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);
        // Let's also add a marker while we're at it
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(40.740610, -73.935242),
            map: map,
            title: 'Kenne',
            animation: google.maps.Animation.BOUNCE
        });
    }
</script>

        <!-- Begin Footer Area Two -->
        <?php require_once('components/footer.php') ?>
        <!-- Footer Area Two End Here -->
