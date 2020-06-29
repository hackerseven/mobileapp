@extends('layouts.webapp.master')

@section('title')
    Properties
@endsection

@section('body')
    <div class="site-loader"></div>

    <div class="site-section site-section-sm pb-0">
        <div class="container">
            <div class="row">
                <form class="form-search col-md-12" style="margin-top: -100px; background: #4a77c3;" action="{{ url('home') }}" method="GET">
                    <input type="hidden" name="sort_by" value="{{ $sort ?? NULL }}">
                    <div class="row  align-items-end">
                        {{--<div class="col-md-3">
                            <label for="list-types">Listing Types</label>
                            <div class="select-wrap">
                                <span class="icon icon-arrow_drop_down"></span>
                                <select name="list-types" id="list-types" class="form-control d-block rounded-0">
                                    <option value="">Condo</option>
                                    <option value="">Commercial Building</option>
                                    <option value="">Land Property</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="offer-types">Offer Type</label>
                            <div class="select-wrap">
                                <span class="icon icon-arrow_drop_down"></span>
                                <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                                    <option value="">For Sale</option>
                                    <option value="">For Rent</option>
                                    <option value="">For Lease</option>
                                </select>
                            </div>
                        </div>--}}
                        <div class="col-md-3">
                            <label for="select-city">Select City</label>
                            <div class="select-wrap">
                                <span class="icon icon-arrow_drop_down"></span>
                                <select name="city" id="select-city" class="form-control d-block rounded-0">
                                    <option value="">All</option>
                                    <option value="bangalore" @if(!empty($city) && $city == 'bangalore') selected @endif>Bangalore</option>
                                    <option value="mumbai" @if(!empty($city) && $city == 'mumbai') selected @endif>Mumbai</option>
                                    <option value="hyderabad" @if(!empty($city) && $city == 'hyderabad') selected @endif>Hyderabad</option>
                                    <option value="pune" @if(!empty($city) && $city == 'pune') selected @endif>Pune</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <input style="background: #00d199;" type="submit" class="btn btn-success text-white btn-block rounded-0" value="Search">
                        </div>
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-3" style="padding: 5px; text-align: center;">
                            <a href="{{ url('sign-out') }}" title="Logout">
                                <i style="color: #fff; font-size: 30px" class="fa fa-sign-out" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="view-options bg-white py-3 px-3 d-md-flex align-items-center">

                        <div class="mr-auto d-flex align-items-center">
                            <div>
                                <a href="javascript:void(0)" class="view-list px-3 border-right active prop-type" data-type="all">All</a>
                                <a href="javascript:void(0)" class="view-list px-3 border-right prop-type" data-type="office">Office</a>
                                <a href="javascript:void(0)" class="view-list px-3 prop-type" data-type="retail">Retail</a>
                            </div>

                            <div class="select-wrap">
                                <span class="icon icon-arrow_drop_down"></span>
                                <form id="sortPropForm" method="GET" action="{{ url('home') }}">
                                    <input type="hidden" name="city" value="{{ $city ?? NULL }}">
                                    <select name="sort_by" class="form-control form-control-sm d-block rounded-0" id="sortProp">
                                    <option value="">Sort by</option>
                                    <option value="area_asc" @if(!empty($sort) && $sort=='area_asc') selected @endif>Area Ascending</option>
                                    <option value="area_desc" @if(!empty($sort) && $sort=='area_desc') selected @endif>Area Descending</option>
                                    <option value="price_asc" @if(!empty($sort) && $sort=='price_asc') selected @endif>Price Ascending</option>
                                    <option value="price_desc" @if(!empty($sort) && $sort=='price_desc') selected @endif>Price Descending</option>
                                </select>
                                <input style="display: none;" type="submit">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section site-section-sm bg-light">
        <div class="container">

            <div class="row mb-5">
                @foreach($properties as $property)
                <div class="col-md-6 col-lg-4 mb-4 prop prop-{{ $property['type'] }}">
                    <div class="property-entry h-100">
                        <a href="javascript:void(0)" class="property-thumbnail">
                            <img src="{{ asset('images/propmedia/'.$property['image']) }}" alt="Image" class="img-fluid">
                        </a>
                        <div class="p-4 property-body">
                            <h2 class="property-title"><a href="javascript:void(0)">{{ $property['name'] }}</a></h2>
                            <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span>{{ $property['location'] }}</span>
                            {{--<strong class="property-price text-primary mb-3 d-block text-success">{{ $property->price }}</strong>--}}
                            <ul class="property-specs-wrap mb-3 mb-lg-0">
                                <li>
                                    <span class="property-specs">PRICE PER SQ FT</span>
                                    <span class="property-specs-number">₹{{ number_format($property['price']) }}</span>

                                </li>
                                <li>
                                    <span class="property-specs">SQ FT</span>
                                    <span class="property-specs-number">{{ number_format($property['area']) }}</span>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{--<div class="row">
                <div class="col-md-12 text-center">
                    <div class="site-pagination">
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <span>...</span>
                        <a href="#">10</a>
                    </div>
                </div>
            </div>--}}

        </div>
    </div>

@endsection

@section('js')
    <script>
        $('.prop-type').click(function () {
            $('.prop-type').removeClass('active');
            $(this).addClass('active');
            if($(this).attr('data-type') == 'all'){
                $('.prop').show();
            } else{
                $('.prop').hide();
                $('.prop-'+$(this).attr('data-type')).show();
            }
        });

        $('#sortProp').change(function () {
            if($(this).val() != ''){
                $('#sortPropForm').submit();
            }
        });

        if('serviceWorker' in navigator){
            navigator.serviceWorker.register('sw.js')
                .then((reg) => console.log('service worker registered', reg))
                .catch((err) => console.log('service worker not registered', err));
        }
    </script>
@endsection

