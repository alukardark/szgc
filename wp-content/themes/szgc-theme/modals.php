<div class='modal fade modal-fullscreen-menu' id='modalNavigation' role='dialog' tabindex='-1'>
    <div class='modal-dialog wrapper'>
        <ul class='list-group nostyle-list'>
            <li data-link="true" class="">
                <a class='list-group-item' href='/services/'>Услуги</a>
                <div class="open-sub-menu"></div>
                <ul class="nostyle-list">
                    <?php
                    global $post;
                    $args = array('post_type' => 'services', 'order' => 'ASC','numberposts' => -1);
                    $myposts = get_posts( $args );
                    foreach( $myposts as $post ){
                        setup_postdata($post);?>
                        <li><a href="<? print_r( esc_url(get_permalink()) );?>"><?=$post->post_title?></a></li>
                    <?}wp_reset_postdata();?>
                </ul>
            </li>
            <li data-link="true"><a class='list-group-item' href='/tehnologii-tsinkovaniya/'>Технология цинкования</a></li>
            <li data-link="true"><a class='list-group-item' href='/trebovaniya-k-izdeliyam/'>Требования к изделиям</a></li>
            <li data-link="true"><a class='list-group-item' href='/kontrol-kachestva/'>Контроль качества</a></li>
            <li data-link="true"><a class='list-group-item' href='/company/'>О заводе</a>
                <div class="open-sub-menu"></div>
                <ul class="nostyle-list">
<!--                     <li><a href="/company/certificates/">Сертификаты</a></li> -->
                    <!-- <li><a href="/company/reviews/">Отзывы</a></li> -->
                    <li><a href="/company/photogallery/">Фотогалерея</a></li>
                    <li><a href="/company/developments/">События</a></li>
                </ul>
            </li>
            <li data-link="true"><a class='list-group-item' href='/contacts/'>Контакты</a></li>
        </ul>
    </div>
</div>

<div class="modal fade" id="modalVideo" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="content-modal">
            <div type="button" class="close modal__close" data-dismiss="modal" aria-label="Close">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
            </div>


            <div class="modal-wrap-video" style="position:relative;height:0;padding-bottom:56.25%">
                <iframe class="my-iframe" src="" width="640" height="360" frameborder="0" gesture="media" allow="encrypted-media" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modalMap" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="content-modal">

            <div type="button" class="close modal__close" data-dismiss="modal" aria-label="Close">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
            </div>

                <div id="map"></div>
                <script  type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyAd1xMYT1bt99qtFWQEzXiRBvORDWHgPtk"></script>
                <script type="text/javascript">
                    function CustomMarker(latlng, map, args) {
                        this.latlng = latlng;
                        this.args = args;
                        this.setMap(map);
                    }

                    CustomMarker.prototype = new google.maps.OverlayView();

                    CustomMarker.prototype.draw = function() {

                        var self = this;

                        var div = this.div;

                        if (!div) {

                            div = this.div = document.createElement('div');

                            div.className = 'marker marker-main';

                            // div.style.position = 'absolute';
                            // div.style.cursor = 'pointer';
                            // div.style.width = '30px';
                            // div.style.height = '30px';
                            // div.style.background = '#e92d44';

                            if (typeof(self.args.marker_id) !== 'undefined') {
                                div.dataset.marker_id = self.args.marker_id;
                            }

                            var panes = this.getPanes();
                            panes.overlayImage.appendChild(div);
                        }

                        var point = this.getProjection().fromLatLngToDivPixel(this.latlng);

                        if (point) {
                            div.style.left = (point.x - 15) + 'px';
                            div.style.top = (point.y - 15) + 'px';
                        }
                    };

                    CustomMarker.prototype.remove = function() {
                        if (this.div) {
                            this.div.parentNode.removeChild(this.div);
                            this.div = null;
                        }
                    };

                    CustomMarker.prototype.getPosition = function() {
                        return this.latlng;
                    };

                    var mapStyles = [
                        {
                            "featureType": "all",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
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
                            "featureType": "all",
                            "elementType": "labels.text.stroke",
                            "stylers": [
                                {
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
                            "featureType": "all",
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
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
                            "stylers": [
                                {
                                    "color": "#fefefe"
                                },
                                {
                                    "lightness": 17
                                },
                                {
                                    "weight": 1.2
                                }
                            ]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "saturation": "0"
                                },
                                {
                                    "lightness": "39"
                                },
                                {
                                    "gamma": "0.72"
                                }
                            ]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "visibility": "on"
                                },
                                {
                                    "saturation": "-100"
                                },
                                {
                                    "lightness": "50"
                                },
                                {
                                    "gamma": "0.5"
                                },
                                {
                                    "weight": "1"
                                },
                                {
                                    "hue": "#008aff"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "off"
                                },
                                {
                                    "saturation": "-35"
                                },
                                {
                                    "lightness": "86"
                                },
                                {
                                    "gamma": "10.00"
                                },
                                {
                                    "weight": "0.01"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "lightness": "36"
                                },
                                {
                                    "visibility": "on"
                                },
                                {
                                    "hue": "#00adff"
                                },
                                {
                                    "saturation": "-95"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "labels.text",
                            "stylers": [
                                {
                                    "saturation": "-80"
                                },
                                {
                                    "lightness": "-41"
                                },
                                {
                                    "gamma": "1.01"
                                }
                            ]
                        },
                        {
                            "featureType": "poi.park",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#cbcbcb"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#7f8c97"
                                },
                                {
                                    "weight": "0.50"
                                },
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "visibility": "on"
                                },
                                {
                                    "color": "#7bd4fa"
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "lightness": 16
                                },
                                {
                                    "color": "#efefef"
                                }
                            ]
                        },
                        {
                            "featureType": "transit",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "transit.station",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#3ac8fe"
                                },
                                {
                                    "lightness": 17
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "labels.text",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                }
                            ]
                        }
                    ]

                    function initialize() {
                        var icon = document.getElementById('map').getAttribute('data-marker');
                        var marker_crd = {lat: 53.785985, lng: 87.264088}; 
                        var myLatlng = new google.maps.LatLng( 53.785985, 87.264088);
                        var mapOptions = {
                            clickableIcons: false,
                            disableDefaultUI: false,
                            disableDoubleClickZoom: true,
                            draggable: true,
                            scrollwheel: false,
                            styles: mapStyles,
                            zoom: 16,
                            minZoom: 10,
                            mapTypeControl: false,
                            streetViewControl: false,
                            center: myLatlng,
                        }

                        var map = new google.maps.Map(document.getElementById('map'), mapOptions);

                        overlay = new CustomMarker(
                            myLatlng,
                            map,
                            {
                                marker_id: '123',
                            }
                        );



                        $(window).on('scroll load resize orienationchange', function() {
                            var marker_crd = {lat: 53.785985, lng: 87.264088};
                            if(window.matchMedia('(max-width: 1200px)').matches){
                                var lat = 53.785985;
                                var lng = 87.264088;
                                var lng = lng+0.002;
                                var marker_crd = {lat: lat, lng: lng};
                            }
                            map.panTo(new google.maps.LatLng(marker_crd));
                        });
                    }

                    $('#modalMap.modal').on('shown.bs.modal', function () {
                        initialize();
                    });
                </script>

        </div>
    </div>
</div>