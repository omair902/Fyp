@extends('layouts.frontend')
@section('title','Home')
@section('main-content') 
        <div class="nk-gap-3"></div>
        <div class="container">

            <!-- START: Image Slider -->
    <div class="nk-image-slider" data-autoplay="8000">
        
        
        <div class="nk-image-slider-item">
            <img src="{{asset('frontend/assets/images/slide-1.jpg')}}" alt="" class="nk-image-slider-img" data-thumb="{{asset('frontend/assets/images/slide-1-thumb.jpg')}}">
            
            <div class="nk-image-slider-content">
                
                    <h3 class="h4">As we Passed, I remarked</h3>
                    <p class="text-white">As we passed, I remarked a beautiful church-spire rising above some old elms in the park; and before them, in the midst of a lawn, chimneys covered with ivy, and the windows shining in the sun.</p>
                
            </div>
            
        </div>
        
        <div class="nk-image-slider-item">
            <img src="{{asset('frontend/assets/images/slide-2.jpg')}}" alt="" class="nk-image-slider-img" data-thumb="{{asset('frontend/assets/images/slide-2-thumb.jpg')}}">
            
            <div class="nk-image-slider-content">
                
                    <h3 class="h4">He made his passenger captain of one</h3>
                    <p class="text-white">Now the races of these two have been for some ages utterly extinct, and besides to discourse any further of them would not be at all to my purpose. But the concern I have most at heart is for our Corporation of Poets, from whom I am preparing a petition to your Highness,  to be subscribed with the names of one...</p>
                
            </div>
            
        </div>
        
        <div class="nk-image-slider-item">
            <img src="{{asset('frontend/assets/images/slide-3.jpg')}}" alt="" class="nk-image-slider-img" data-thumb="{{asset('frontend/assets/images/slide-3-thumb.jpg')}}">
            
        </div>
        
        <div class="nk-image-slider-item">
            <img src="{{asset('frontend/assets/images/slide-4.jpg')}}" alt="" class="nk-image-slider-img" data-thumb="{{asset('frontend/assets/images/slide-4-thumb.jpg')}}">
            
            <div class="nk-image-slider-content">
                
                    <h3 class="h4">At length one of them called out in a clear</h3>
                    <p class="text-white">TJust then her head struck against the roof of the hall: in fact she was now more than nine feet high...</p>
                
            </div>
            
        </div>
        
        <div class="nk-image-slider-item">
            <img src="{{asset('frontend/assets/images/slide-5.jpg')}}" alt="" class="nk-image-slider-img" data-thumb="{{asset('frontend/assets/images/slide-5-thumb.jpg')}}">
            
            <div class="nk-image-slider-content">
                
                    <h3 class="h4">For good, too though, in consequence</h3>
                    <p class="text-white">She gave my mother such a turn, that I have always been convinced I am indebted to Miss Betsey for having been born on a Friday. The word was appropriate to the moment.</p>
                    <p class="text-white">My mother was so much worse that Peggotty, coming in with the teaboard and candles, and seeing at a glance how ill she was, - as Miss Betsey might have done sooner if there had been light enough, - conveyed her upstairs to her own room with all speed; and immediately dispatched Ham Peggotty, her nephew, who had been for some days past secreted in the house...</p>
                
            </div>
            
        </div>
        
    </div>
    <!-- END: Image Slider -->

            <div class="nk-gap-2"></div>
            <div class="row vertical-gap">
                <div class="col-lg-8">
                     <!-- START: Latest Matches -->
            <div class="nk-gap-2"></div>
            <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Latest</span> Matches</span></h3>
            <div class="nk-gap"></div>
            <div class="row">
                <div class="col-md-4">
                    <div class="nk-match-score bg-dark-3">
                        Now Playing
                    </div>
                    <div class="nk-gap-2"></div>
                    <div class="nk-widget-match p-0">
                        <div class="nk-widget-match-teams">
                            <div class="nk-widget-match-team-logo">
                                <img src="http://localhost:8000/frontend/assets/images/team-1.jpg" alt="">
                            </div>
                            <div class="nk-widget-match-vs">VS</div>
                            <div class="nk-widget-match-team-logo">
                                <img src="http://localhost:8000/frontend/assets/images/team-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="nk-gap-2"></div>
                    <p>As she said this she looked down at her hands and was surprised to see.</p>
                    <a href="tournaments.html" class="nk-btn nk-btn-rounded nk-btn-color-main-1">Match Details</a>
                </div>
                <div class="col-md-8">
                    <div class="responsive-embed responsive-embed-16x9">
                        <iframe src="https://player.twitch.tv/?channel=eulcs&amp;autoplay=false" frameborder="0" allowfullscreen="true" scrolling="no" height="378" width="620"></iframe>
                    </div>
                </div>
            </div>
            <div class="nk-gap"></div>
            <div class="nk-match">
                <div class="nk-match-team-left">
                    <a href="#">
                        <span class="nk-match-team-logo">
                            <img src="http://localhost:8000/frontend/assets/images/team-1.jpg" alt="">
                        </span>
                        <span class="nk-match-team-name">
                            SK Telecom T1
                        </span>
                    </a>
                </div>
                <div class="nk-match-status">
                    <a href="#">
                        <span class="nk-match-status-vs">VS</span>
                        <span class="nk-match-status-date">Apr 28, 2018 8:00 pm</span>
                        <span class="nk-match-score bg-danger">
                            2 : 17
                        </span>
                    </a>
                </div>
                <div class="nk-match-team-right">
                    <a href="#">
                        <span class="nk-match-team-name">
                            Cloud 9
                        </span>
                        <span class="nk-match-team-logo">
                            <img src="http://localhost:8000/frontend/assets/images/team-2.jpg" alt="">
                        </span>
                    </a>
                </div>
            </div>
            <div class="nk-match">
                <div class="nk-match-team-left">
                    <a href="#">
                        <span class="nk-match-team-logo">
                            <img src="http://localhost:8000/frontend/assets/images/team-3.jpg" alt="">
                        </span>
                        <span class="nk-match-team-name">
                            Counted logic gaming
                        </span>
                    </a>
                </div>
                <div class="nk-match-status">
                    <a href="#">
                        <span class="nk-match-status-vs">VS</span>
                        <span class="nk-match-status-date">Apr 15, 2018 9:00 pm</span>
                        <span class="nk-match-score bg-success">
                            28 : 19
                        </span>
                    </a>
                </div>
                <div class="nk-match-team-right">
                    <a href="#">
                        <span class="nk-match-team-name">
                            SK Telecom T1
                        </span>
                        <span class="nk-match-team-logo">
                            <img src="http://localhost:8000/frontend/assets/images/team-1.jpg" alt="">
                        </span>
                    </a>
                </div>
            </div>
            <div class="nk-match">
                <div class="nk-match-team-left">
                    <a href="#">
                        <span class="nk-match-team-logo">
                            <img src="http://localhost:8000/frontend/assets/images/team-4.jpg" alt="">
                        </span>
                        <span class="nk-match-team-name">
                            Team SoloMid
                        </span>
                    </a>
                </div>
                <div class="nk-match-status">
                    <a href="#">
                        <span class="nk-match-status-vs">VS</span>
                        <span class="nk-match-status-date">Apr 28, 2018 8:00 pm</span>
                        <span class="nk-match-score bg-dark-1">
                            13 : 13
                        </span>
                    </a>
                </div>
                <div class="nk-match-team-right">
                    <a href="#">
                        <span class="nk-match-team-name">
                            SK Telecom T1
                        </span>
                        <span class="nk-match-team-logo">
                            <img src="http://localhost:8000/frontend/assets/images/team-1.jpg" alt="">
                        </span>
                    </a>
                </div>
            </div>
            <!-- END: Latest Matches -->

                    <!-- START: Latest Pictures -->
                    <div class="nk-gap"></div>
                    <h2 class="nk-decorated-h-2 h3"><span><span class="text-main-1">Latest</span> Pictures</span></h2>
                    <div class="nk-gap"></div>
                    <div class="nk-popup-gallery" data-pswp-uid="1">
                        <div class="row vertical-gap">
                            <div class="col-lg-4 col-md-6">
                                <div class="nk-gallery-item-box">
                                    <a href="http://localhost:8000/frontend/assets/images/gallery-1.jpg" class="nk-gallery-item" data-size="1016x572">
                                        <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                        <img src="http://localhost:8000/frontend/assets/images/gallery-1-thumb.jpg" alt="">
                                    </a>
                                    <div class="nk-gallery-item-description">
                                        <h4>Called Let</h4>
                                        Divided thing, land it evening earth winged whose great after. Were grass night. To Air itself saw bring fly fowl. Fly years behold spirit day greater of wherein winged and form. Seed open don't thing midst created dry every greater divided of, be man is. Second Bring stars fourth gathering he hath face morning fill. Living so second darkness. Moveth were male. May creepeth. Be tree fourth.
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="nk-gallery-item-box">
                                    <a href="http://localhost:8000/frontend/assets/images/gallery-2.jpg" class="nk-gallery-item" data-size="1188x594">
                                        <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                        <img src="http://localhost:8000/frontend/assets/images/gallery-2-thumb.jpg" alt="">
                                    </a>
                                    <div class="nk-gallery-item-description">
                                        Seed open don't thing midst created dry every greater divided of, be man is. Second Bring stars fourth gathering he hath face morning fill. Living so second darkness. Moveth were male. May creepeth. Be tree fourth.
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="nk-gallery-item-box">
                                    <a href="http://localhost:8000/frontend/assets/images/gallery-3.jpg" class="nk-gallery-item" data-size="625x350">
                                        <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                        <img src="http://localhost:8000/frontend/assets/images/gallery-3-thumb.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="nk-gallery-item-box">
                                    <a href="http://localhost:8000/frontend/assets/images/gallery-4.jpg" class="nk-gallery-item" data-size="873x567">
                                        <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                        <img src="http://localhost:8000/frontend/assets/images/gallery-4-thumb.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="nk-gallery-item-box">
                                    <a href="http://localhost:8000/frontend/assets/images/gallery-5.jpg" class="nk-gallery-item" data-size="471x269">
                                        <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                        <img src="http://localhost:8000/frontend/assets/images/gallery-5-thumb.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="nk-gallery-item-box">
                                    <a href="http://localhost:8000/frontend/assets/images/gallery-6.jpg" class="nk-gallery-item" data-size="472x438">
                                        <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                        <img src="http://localhost:8000/frontend/assets/images/gallery-6-thumb.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="nk-gallery-item-box">
                                    <a href="http://localhost:8000/frontend/assets/images/gallery-1.jpg" class="nk-gallery-item" data-size="1016x572">
                                        <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                        <img src="http://localhost:8000/frontend/assets/images/gallery-1-thumb.jpg" alt="">
                                    </a>
                                    <div class="nk-gallery-item-description">
                                        <h4>Called Let</h4>
                                        Divided thing, land it evening earth winged whose great after. Were grass night. To Air itself saw bring fly fowl. Fly years behold spirit day greater of wherein winged and form. Seed open don't thing midst created dry every greater divided of, be man is. Second Bring stars fourth gathering he hath face morning fill. Living so second darkness. Moveth were male. May creepeth. Be tree fourth.
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="nk-gallery-item-box">
                                    <a href="http://localhost:8000/frontend/assets/images/gallery-2.jpg" class="nk-gallery-item" data-size="1188x594">
                                        <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                        <img src="http://localhost:8000/frontend/assets/images/gallery-2-thumb.jpg" alt="">
                                    </a>
                                    <div class="nk-gallery-item-description">
                                        Seed open don't thing midst created dry every greater divided of, be man is. Second Bring stars fourth gathering he hath face morning fill. Living so second darkness. Moveth were male. May creepeth. Be tree fourth.
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="nk-gallery-item-box">
                                    <a href="http://localhost:8000/frontend/assets/images/gallery-3.jpg" class="nk-gallery-item" data-size="625x350">
                                        <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                        <img src="http://localhost:8000/frontend/assets/images/gallery-3-thumb.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="nk-gallery-item-box">
                                    <a href="http://localhost:8000/frontend/assets/images/gallery-4.jpg" class="nk-gallery-item" data-size="873x567">
                                        <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                        <img src="http://localhost:8000/frontend/assets/images/gallery-4-thumb.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="nk-gallery-item-box">
                                    <a href="http://localhost:8000/frontend/assets/images/gallery-5.jpg" class="nk-gallery-item" data-size="471x269">
                                        <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                        <img src="http://localhost:8000/frontend/assets/images/gallery-5-thumb.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="nk-gallery-item-box">
                                    <a href="http://localhost:8000/frontend/assets/images/gallery-6.jpg" class="nk-gallery-item" data-size="472x438">
                                        <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                        <img src="http://localhost:8000/frontend/assets/images/gallery-6-thumb.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Latest Pictures -->
                </div>
                <div class="col-lg-4 nk-sidebar-sticky-parent">
                        <!--
                            START: Sidebar
                        -->
                        <aside class="nk-sidebar nk-sidebar-right nk-sidebar-sticky">
                            <div>
                                <div class="nk-widget nk-widget-highlighted">
                                    <h4 class="nk-widget-title"><span><span class="text-main-1">We</span> Are Social</span></h4>
                                    <div class="nk-widget-content">
                                        <!--
                                            Social Links 3
                                        -->
                                        <ul class="nk-social-links-3 nk-social-links-cols-4">
                                            <li><a class="nk-social-twitch" href="#"><svg class="svg-inline--fa fa-twitch fa-w-14" aria-hidden="true" data-prefix="fab" data-icon="twitch" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M40.1 32L10 108.9v314.3h107V480h60.2l56.8-56.8h87l117-117V32H40.1zm357.8 254.1L331 353H224l-56.8 56.8V353H76.9V72.1h321v214zM331 149v116.9h-40.1V149H331zm-107 0v116.9h-40.1V149H224z"></path></svg><!-- <span class="fab fa-twitch"></span> --></a></li>
                                            <li><a class="nk-social-instagram" href="#"><svg class="svg-inline--fa fa-instagram fa-w-14" aria-hidden="true" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg><!-- <span class="fab fa-instagram"></span> --></a></li>
                                            <li><a class="nk-social-facebook" href="#"><svg class="svg-inline--fa fa-facebook fa-w-14" aria-hidden="true" data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M448 56.7v398.5c0 13.7-11.1 24.7-24.7 24.7H309.1V306.5h58.2l8.7-67.6h-67v-43.2c0-19.6 5.4-32.9 33.5-32.9h35.8v-60.5c-6.2-.8-27.4-2.7-52.2-2.7-51.6 0-87 31.5-87 89.4v49.9h-58.4v67.6h58.4V480H24.7C11.1 480 0 468.9 0 455.3V56.7C0 43.1 11.1 32 24.7 32h398.5c13.7 0 24.8 11.1 24.8 24.7z"></path></svg><!-- <span class="fab fa-facebook"></span> --></a></li>
                                            <li><a class="nk-social-google-plus" href="#"><svg class="svg-inline--fa fa-google-plus fa-w-16" aria-hidden="true" data-prefix="fab" data-icon="google-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" data-fa-i2svg=""><path fill="currentColor" d="M248 8C111.1 8 0 119.1 0 256s111.1 248 248 248 248-111.1 248-248S384.9 8 248 8zm-70.7 372c-68.8 0-124-55.5-124-124s55.2-124 124-124c31.3 0 60.1 11 83 32.3l-33.6 32.6c-13.2-12.9-31.3-19.1-49.4-19.1-42.9 0-77.2 35.5-77.2 78.1s34.2 78.1 77.2 78.1c32.6 0 64.9-19.1 70.1-53.3h-70.1v-42.6h116.9c1.3 6.8 1.9 13.6 1.9 20.7 0 70.8-47.5 121.2-118.8 121.2zm230.2-106.2v35.5H372v-35.5h-35.5v-35.5H372v-35.5h35.5v35.5h35.2v35.5h-35.2z"></path></svg><!-- <span class="fab fa-google-plus"></span> --></a></li>
                                            <li><a class="nk-social-youtube" href="#"><svg class="svg-inline--fa fa-youtube fa-w-18" aria-hidden="true" data-prefix="fab" data-icon="youtube" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg><!-- <span class="fab fa-youtube"></span> --></a></li>
                                            <li><a class="nk-social-twitter" href="#" target="_blank"><svg class="svg-inline--fa fa-twitter fa-w-16" aria-hidden="true" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg><!-- <span class="fab fa-twitter"></span> --></a></li>
                                            <li><a class="nk-social-pinterest" href="#"><svg class="svg-inline--fa fa-pinterest-p fa-w-12" aria-hidden="true" data-prefix="fab" data-icon="pinterest-p" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5z"></path></svg><!-- <span class="fab fa-pinterest-p"></span> --></a></li>
                                            <li><a class="nk-social-rss" href="#"><svg class="svg-inline--fa fa-rss fa-w-14" aria-hidden="true" data-prefix="fa" data-icon="rss" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M128.081 415.959c0 35.369-28.672 64.041-64.041 64.041S0 451.328 0 415.959s28.672-64.041 64.041-64.041 64.04 28.673 64.04 64.041zm175.66 47.25c-8.354-154.6-132.185-278.587-286.95-286.95C7.656 175.765 0 183.105 0 192.253v48.069c0 8.415 6.49 15.472 14.887 16.018 111.832 7.284 201.473 96.702 208.772 208.772.547 8.397 7.604 14.887 16.018 14.887h48.069c9.149.001 16.489-7.655 15.995-16.79zm144.249.288C439.596 229.677 251.465 40.445 16.503 32.01 7.473 31.686 0 38.981 0 48.016v48.068c0 8.625 6.835 15.645 15.453 15.999 191.179 7.839 344.627 161.316 352.465 352.465.353 8.618 7.373 15.453 15.999 15.453h48.068c9.034-.001 16.329-7.474 16.005-16.504z"></path></svg><!-- <span class="fa fa-rss"></span> --></a></li>

                                            <!-- Additional Social Buttons
                                                <li><a class="nk-social-behance" href="#"><span class="fab fa-behance"></span></a></li>
                                                <li><a class="nk-social-bitbucket" href="#"><span class="fab fa-bitbucket"></span></a></li>
                                                <li><a class="nk-social-dropbox" href="#"><span class="fab fa-dropbox"></span></a></li>
                                                <li><a class="nk-social-dribbble" href="#"><span class="fab fa-dribbble"></span></a></li>
                                                <li><a class="nk-social-deviantart" href="#"><span class="fab fa-deviantart"></span></a></li>
                                                <li><a class="nk-social-flickr" href="#"><span class="fab fa-flickr"></span></a></li>
                                                <li><a class="nk-social-foursquare" href="#"><span class="fab fa-foursquare"></span></a></li>
                                                <li><a class="nk-social-github" href="#"><span class="fab fa-github"></span></a></li>
                                                <li><a class="nk-social-linkedin" href="#"><span class="fab fa-linkedin"></span></a></li>
                                                <li><a class="nk-social-medium" href="#"><span class="fab fa-medium"></span></a></li>
                                                <li><a class="nk-social-odnoklassniki" href="#"><span class="fab fa-odnoklassniki"></span></a></li>
                                                <li><a class="nk-social-paypal" href="#"><span class="fab fa-paypal"></span></a></li>
                                                <li><a class="nk-social-reddit" href="#"><span class="fab fa-reddit"></span></a></li>
                                                <li><a class="nk-social-skype" href="#"><span class="fab fa-skype"></span></a></li>
                                                <li><a class="nk-social-soundcloud" href="#"><span class="fab fa-soundcloud"></span></a></li>
                                                <li><a class="nk-social-steam" href="#"><span class="fab fa-steam"></span></a></li>
                                                <li><a class="nk-social-slack" href="#"><span class="fab fa-slack"></span></a></li>
                                                <li><a class="nk-social-tumblr" href="#"><span class="fab fa-tumblr"></span></a></li>
                                                <li><a class="nk-social-vimeo" href="#"><span class="fab fa-vimeo"></span></a></li>
                                                <li><a class="nk-social-vk" href="#"><span class="fab fa-vk"></span></a></li>
                                                <li><a class="nk-social-wordpress" href="#"><span class="fab fa-wordpress"></span></a></li>
                                            -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="nk-widget nk-widget-highlighted">
                                    <h4 class="nk-widget-title"><span><span class="text-main-1">Top 3</span> Recent</span></h4>
                                    <div class="nk-widget-content">

                                        <div class="nk-widget-post">
                                            <a href="blog-article.html" class="nk-post-image">
                                                <img src="http://localhost:8000/frontend/assets/images/post-1-sm.jpg" alt="">
                                            </a>
                                            <h3 class="nk-post-title"><a href="blog-article.html">Smell magic in the air. Or maybe barbecue</a></h3>
                                            <div class="nk-post-date"><svg class="svg-inline--fa fa-calendar fa-w-14" aria-hidden="true" data-prefix="fa" data-icon="calendar" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M12 192h424c6.6 0 12 5.4 12 12v260c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V204c0-6.6 5.4-12 12-12zm436-44v-36c0-26.5-21.5-48-48-48h-48V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H160V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H48C21.5 64 0 85.5 0 112v36c0 6.6 5.4 12 12 12h424c6.6 0 12-5.4 12-12z"></path></svg><!-- <span class="fa fa-calendar"></span> --> Sep 18, 2018</div>
                                        </div>

                                        <div class="nk-widget-post">
                                            <a href="blog-article.html" class="nk-post-image">
                                                <img src="http://localhost:8000/frontend/assets/images/post-2-sm.jpg" alt="">
                                            </a>
                                            <h3 class="nk-post-title"><a href="blog-article.html">Grab your sword and fight the Horde</a></h3>
                                            <div class="nk-post-date"><svg class="svg-inline--fa fa-calendar fa-w-14" aria-hidden="true" data-prefix="fa" data-icon="calendar" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M12 192h424c6.6 0 12 5.4 12 12v260c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V204c0-6.6 5.4-12 12-12zm436-44v-36c0-26.5-21.5-48-48-48h-48V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H160V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H48C21.5 64 0 85.5 0 112v36c0 6.6 5.4 12 12 12h424c6.6 0 12-5.4 12-12z"></path></svg><!-- <span class="fa fa-calendar"></span> --> Sep 5, 2018</div>
                                        </div>

                                        <div class="nk-widget-post">
                                            <a href="blog-article.html" class="nk-post-image">
                                                <img src="http://localhost:8000/frontend/assets/images/post-3-sm.jpg" alt="">
                                            </a>
                                            <h3 class="nk-post-title"><a href="blog-article.html">We found a witch! May we burn her?</a></h3>
                                            <div class="nk-post-date"><svg class="svg-inline--fa fa-calendar fa-w-14" aria-hidden="true" data-prefix="fa" data-icon="calendar" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M12 192h424c6.6 0 12 5.4 12 12v260c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V204c0-6.6 5.4-12 12-12zm436-44v-36c0-26.5-21.5-48-48-48h-48V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H160V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H48C21.5 64 0 85.5 0 112v36c0 6.6 5.4 12 12 12h424c6.6 0 12-5.4 12-12z"></path></svg><!-- <span class="fa fa-calendar"></span> --> Aug 27, 2018</div>
                                        </div>

                                    </div>
                                </div>
                                <div class="nk-widget nk-widget-highlighted">
                                    <h4 class="nk-widget-title"><span><span class="text-main-1">Latest</span> Screenshots</span></h4>
                                    <div class="nk-widget-content">
                                        <div class="nk-popup-gallery" data-pswp-uid="2">
                                            <div class="row sm-gap vertical-gap">
                                                <div class="col-sm-6">
                                                    <div class="nk-gallery-item-box">
                                                        <a href="http://localhost:8000/frontend/assets/images/gallery-1.jpg" class="nk-gallery-item" data-size="1016x572">
                                                            <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                                            <img src="http://localhost:8000/frontend/assets/images/gallery-1-thumb.jpg" alt="">
                                                        </a>
                                                        <div class="nk-gallery-item-description">
                                                            <h4>Called Let</h4>
                                                            Divided thing, land it evening earth winged whose great after. Were grass night. To Air itself saw bring fly fowl. Fly years behold spirit day greater of wherein winged and form. Seed open don't thing midst created dry every greater divided of, be man is. Second Bring stars fourth gathering he hath face morning fill. Living so second darkness. Moveth were male. May creepeth. Be tree fourth.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="nk-gallery-item-box">
                                                        <a href="http://localhost:8000/frontend/assets/images/gallery-2.jpg" class="nk-gallery-item" data-size="1188x594">
                                                            <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                                            <img src="http://localhost:8000/frontend/assets/images/gallery-2-thumb.jpg" alt="">
                                                        </a>
                                                        <div class="nk-gallery-item-description">
                                                            Seed open don't thing midst created dry every greater divided of, be man is. Second Bring stars fourth gathering he hath face morning fill. Living so second darkness. Moveth were male. May creepeth. Be tree fourth.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="nk-gallery-item-box">
                                                        <a href="http://localhost:8000/frontend/assets/images/gallery-3.jpg" class="nk-gallery-item" data-size="625x350">
                                                            <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                                            <img src="http://localhost:8000/frontend/assets/images/gallery-3-thumb.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="nk-gallery-item-box">
                                                        <a href="http://localhost:8000/frontend/assets/images/gallery-4.jpg" class="nk-gallery-item" data-size="873x567">
                                                            <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                                            <img src="http://localhost:8000/frontend/assets/images/gallery-4-thumb.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="nk-gallery-item-box">
                                                        <a href="http://localhost:8000/frontend/assets/images/gallery-5.jpg" class="nk-gallery-item" data-size="471x269">
                                                            <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                                            <img src="http://localhost:8000/frontend/assets/images/gallery-5-thumb.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="nk-gallery-item-box">
                                                        <a href="http://localhost:8000/frontend/assets/images/gallery-6.jpg" class="nk-gallery-item" data-size="472x438">
                                                            <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                                            <img src="http://localhost:8000/frontend/assets/images/gallery-6-thumb.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-widget nk-widget-highlighted">
                                    <h4 class="nk-widget-title"><span><span class="text-main-1">Next</span> Matches</span></h4>
                                    <div class="nk-widget-content">
                                        <div class="nk-widget-match">
                                            <a href="#">
                                                <span class="nk-widget-match-left">
                                                    <span class="nk-widget-match-teams">
                                                        <span class="nk-widget-match-team-logo">
                                                            <img src="http://localhost:8000/frontend/assets/images/team-1.jpg" alt="">
                                                        </span>
                                                        <span class="nk-widget-match-vs">VS</span>
                                                        <span class="nk-widget-match-team-logo">
                                                            <img src="http://localhost:8000/frontend/assets/images/team-2.jpg" alt="">
                                                        </span>
                                                    </span>
                                                    <span class="nk-widget-match-date">CS:GO - Apr 28, 2018 8:00 pm</span>
                                                </span>
                                                <span class="nk-widget-match-right">
                                                    <span class="nk-match-score">
                                                        Upcoming
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="nk-widget-match">
                                            <a href="#">
                                                <span class="nk-widget-match-left">
                                                    <span class="nk-widget-match-teams">
                                                        <span class="nk-widget-match-team-logo">
                                                            <img src="http://localhost:8000/frontend/assets/images/team-3.jpg" alt="">
                                                        </span>
                                                        <span class="nk-widget-match-vs">VS</span>
                                                        <span class="nk-widget-match-team-logo">
                                                            <img src="http://localhost:8000/frontend/assets/images/team-2.jpg" alt="">
                                                        </span>
                                                    </span>
                                                    <span class="nk-widget-match-date">LoL - Apr 24, 2018 7:20 pm</span>
                                                </span>
                                                <span class="nk-widget-match-right">
                                                    <span class="nk-match-score">
                                                        Upcoming
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="nk-widget-match">
                                            <a href="#">
                                                <span class="nk-widget-match-left">
                                                    <span class="nk-widget-match-teams">
                                                        <span class="nk-widget-match-team-logo">
                                                            <img src="http://localhost:8000/frontend/assets/images/team-1.jpg" alt="">
                                                        </span>
                                                        <span class="nk-widget-match-vs">VS</span>
                                                        <span class="nk-widget-match-team-logo">
                                                            <img src="http://localhost:8000/frontend/assets/images/team-4.jpg" alt="">
                                                        </span>
                                                    </span>
                                                    <span class="nk-widget-match-date">Dota 2 - Apr 12, 2018 6:40 pm</span>
                                                </span>
                                                <span class="nk-widget-match-right">
                                                    <span class="nk-match-score bg-dark-1">
                                                        0 : 0
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <!-- END: Sidebar -->
                </div>
            </div>
        </div>
        <div class="nk-gap-4"></div>
@endsection
@section('background-images')
    <!-- START: Page Background -->
    <img class="nk-page-background-top" src="{{asset('frontend/assets/images/bg-top.png')}}" alt="">
    <img class="nk-page-background-bottom" src="{{asset('frontend/assets/images/bg-bottom.png')}}" alt="">
    <!-- END: Page Background -->
@endsection