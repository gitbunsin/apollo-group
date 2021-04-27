                <div class="row">
                    <div class="col-md-6">
                        <div class="bar-left">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><i class="la la-phone"></i>+(855) 81 288 858</li>
                                <li class="list-inline-item"><i class="la la-envelope"></i>SANKOMPHEAK@GMAIL.COM</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bar-right d-flex justify-content-end">
                            <ul class="list-unstyled list-inline bar-menu">
                                <li class="list-inline-item">
                                  <div class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown"><span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> {{ Config::get('languages')[App::getLocale()]['display'] }}<i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu ">
                                         @foreach (Config::get('languages') as $lang => $language)
                                            @if ($lang != App::getLocale())
                                                <li><a href="{{ route('lang.switch', $lang) }}"><span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span> {{$language['display']}}</a></li>
                                            @endif
                                        @endforeach
                                        </ul>
                                    </div>
                                </li>
                                <li class="list-inline-item"><a href="{{url('/pageFaq')}}"><i class="la la-question"></i>{{__('frontpage.Help')}}</a></li>
                            </ul>
                            <ul class="list-unstyled list-inline bar-social">
                                <li class="rounded-circle list-inline-item"><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-google"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>