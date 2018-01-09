<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


include 'header.php';
?>

<div class="homePage retailerPageOnly">
    <div class="container-fluid sliderSection nopadding">
        <div class="sliderContent">
            <img src="images/retailer-page-top-bg.png" alt="img" class="img-responsive" />
            <div class="overLayContent">
                <h2>Find a retailer near you</h2>
                <p class="text-center"><span class="linkBtn"><input type="search" placeholder="Search by zip code" ><input type="submit" value=""></span></span></p>
            </div>
        </div>
    </div>

    <div class="container-fluid margin136pxTB">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-6 text-center">
                    <h2 class="nomargin">Sweden</h2>
                    <p>choose retailer</p>
                </div>

                <div class="col-sm-4 col-xs-6 text-center pull-right">
                    <h2 class="nomargin">World</h2>
                    <p>choose land</p>
                </div>
            </div>
        </div>        
    </div>



    <div class="container-fluid productContainer nopadding retailerSection">
        <div class="col-sm-6 containInMiddle nopadding">
            <div class="retailerDetail">
                <div class="contentbox">
                    <h4>BRO, Annasbabyshop</h4>
                    <p>
                        <a href="tel:070 - 123 45 67">070 - 123 45 67</a><br />
                        <a href="mailto:anna@babyshop.se">anna@babyshop.se</a>
                    </p>
                    <p class="arrowIcon"><a href="#" class="readMoreBtn" style="border:0;"></a></p>
                </div>
            </div>
            
            <div class="retailerDetail">
                <div class="contentbox">
                    <h4>BROMMA, Mio Mobler</h4>
                    <p>
                        <a href="tel:070 - 123 45 67">070 - 123 45 67</a><br />
                        <a href="mailto:anna@babyshop.se">anna@babyshop.se</a>
                    </p>
                    <p class="arrowIcon"><a href="#" class="readMoreBtn" style="border:0;"></a></p>
                </div>
            </div>

             <div class="retailerDetail">
                <div class="contentbox">
                    <h4>ESKILSTUNA, Babyproffsen</h4>
                    <p>
                        <a href="tel:070 - 123 45 67">070 - 123 45 67</a><br />
                        <a href="mailto:anna@babyshop.se">anna@babyshop.se</a>
                    </p>
                    <p class="arrowIcon"><a href="#" class="readMoreBtn" style="border:0;"></a></p>
                </div>
            </div>
            
            
             <div class="retailerDetail">
                <div class="contentbox">
                    <h4>FARJESTADEN, Magasin Y</h4>
                    <p>
                        <a href="tel:070 - 123 45 67">070 - 123 45 67</a><br />
                        <a href="mailto:anna@babyshop.se">anna@babyshop.se</a>
                    </p>
                    <p class="arrowIcon"><a href="#" class="readMoreBtn" style="border:0;"></a></p>
                </div>
            </div>
            
             <div class="retailerDetail">
                <div class="contentbox">
                    <h4>GOTEBORG, Babyproffsen Backaplan</h4>
                    <p>
                        <a href="tel:070 - 123 45 67">070 - 123 45 67</a><br />
                        <a href="mailto:anna@babyshop.se">anna@babyshop.se</a>
                    </p>
                    <p class="arrowIcon"><a href="#" class="readMoreBtn" style="border:0;"></a></p>
                </div>
            </div>            
            
        </div>

        <div class="col-md-6 col-sm-6 imagesSection nopadding">
            <div id="map" ></div>

        </div>
    </div>



</div>


<?php include 'footer.php'; ?>



<script src='http://maps.googleapis.com/maps/api/js?key=AIzaSyCMtEH2rnetuGfmzSVLHmwkyTiipddoQec' type='text/javascript'></script>

<script>
    var myCenter = new google.maps.LatLng(62.9748368,16.1777075);

    function initialize()
    {
        var mapProp = {
            center: myCenter,
            zoom: 5,
            mapTypeId: google.maps.MapTypeId.ROADMAP,           
            styles: [
                    {
                        "featureType": "administrative",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#000000"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [
                            {
                                "color": "#828282"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "all",
                        "stylers": [
                            {
                                "saturation": -100
                            },
                            {
                                "lightness": 45
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [
                            {
                                "color": "#f2f2f2"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    }
                ]
        };

        var map = new google.maps.Map(document.getElementById("map"), mapProp);

        var marker = new google.maps.Marker({
            position: myCenter,    
            icon:"images/googleMap-marker.png"
        });

        marker.setMap(map);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>
