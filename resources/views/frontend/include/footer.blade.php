<footer>
    <div class="footer-area-top s-space-equal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-mb-12">
                    <div class="footer-box center-block">
                        <h3 class="title-medium-light title-bar-left size-lg">Map </h3>

                        <?php echo($primaryInfo->map_embed)?>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-mb-12">
                    <div class="footer-box">
                        <h3 class="title-medium-light title-bar-left size-lg">Facebook</h3>
                        <div class="fb-page" data-href="https://www.facebook.com/shollabloodpoint" data-tabs="timeline" data-height="250" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/shollabloodpoint" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/shollabloodpoint">Sholla Blood Point &#039;SBP&#039;</a></blockquote></div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-mb-12">
                    <div class="footer-box">
                        <h3 class="title-medium-light title-bar-left size-lg">Useful Link </h3>
                        <ul class="useful-link ">
                            <li>
                                <a href="{{URL::to('/about.html')}}">About us</a>
                            </li>
                            <li>
                                <a href="{{URL::to('contact.html')}}">Contact us</a>
                            </li>
                        </ul>
                        <hr>
                        <ul class="useful-link ">
                            @foreach($menus as $menu)
                                @foreach($menu->frontendSubMenu as $subMenu)
                                    @if($subMenu->slug=='page')
                                        <li>
                                            <a href="{{URL::to($subMenu->url)}}"> {{$subMenu->name}} </a>
                                        </li>
                                    @endif
                                @endforeach
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-mb-12">
                    <div class="footer-box">
                        <h3 class="title-medium-light title-bar-left size-lg">Recent Post</h3>
                        <ul class="useful-link ">
                                @foreach($last5notices as $notice)
                                    <li>
                                        <a href="{{URL::to('show-notice/'.$notice->id)}}"> {{$notice->title}} </a>
                                    </li>
                                @endforeach
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footer-area-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-12 text-center-mb">
                    <p>Copyright © {{date('Y')}} <a href="http://shollabloodpoint.com/" title="Sholla Blood Points">Sholla Blood Points</a>
                    </p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-12 text-right text-center-mb">
                    <p>All Rights Reserved © <a href="http://shollabloodpoint.com/" title="Sholla Blood Point">Sholla Blood Points</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>