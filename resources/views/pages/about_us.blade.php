@extends('layout')

@section('content')

<main>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                    <ul class="breadcrumb color-12">
                        <li><a href="/">Home</a></li>
                        <li class="current-page"><a href="/about_us">About us</a></li>
                      </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h2>About us</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div id="tabs">
                            <ul>
                                <li><a href="#fragment-1" class="tab-color">One</a></li>
                                <li><a href="#fragment-2">Two</a></li>
                                <li><a href="#fragment-3">Three</a></li>
                            </ul>
                            <div id="fragment-1">
                            A zoo is a facility in which animals are housed within enclosures, displayed to the public, and in which they may also breed.
                            </div>
                            <div id="fragment-2">
                                2 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                            </div>
                            <div id="fragment-3">
                                3 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                            </div>
                        </div>
                    </div>
                </div>
                <h4>Contacts</h4>
            <div class=row>
            <div id="map" class="col-sm-6" style="width:400px;height:400px">My map will go here</div>
            <div class="col-sm-6">
                <h5>Address:</h5>
                <p>Meža prospekts 1, Ziemeļu rajons, Rīga, LV-1014</p>
                <h5>Email:</h5>
                <p>info@rigazoo.lv</p>
                <h5>Phone:</h5>
                <p>67518409</p>
            </div>
            </div>

         </div>
                 
 </main>
 @endsection
   


