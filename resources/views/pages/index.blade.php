@extends('layout')

@section('content')

<main>
            <div class="container">
                 <div class="row">
                    <div class="col-xs-12 slider">
                        <img src="https://i.pinimg.com/originals/3e/b5/14/3eb514ab88317e9f3d0c5ecc83f288e3.jpg" alt="">
                    </div>
                </div>
                <h4>3 most reacent articles</h4>
                <div class="row">
                    <div class="article-1">
                        <div class="col-xs-12 col-sm-6 col-md-4 small-article border">
                            <div class="row border3 article-1">
                                <div class="col-sm-4 hidden-xs img-pad">
                                    <a href="/articles">
                                        <img src="https://i.pinimg.com/originals/3e/b5/14/3eb514ab88317e9f3d0c5ecc83f288e3.jpg" alt="" class="img-small">
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-8">
                                    <a href="/articles" class="links"><h4 class="links">Dogs</h4></a>
                                <p>
                                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum cum officia, ut quod veniam tempore? Nesciunt optio ducimus nemo perspiciatis, aspernatur maxime, laudantium quo atque non, saepe illo ratione?
                                 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="article-2">
                        <div class="col-xs-12 col-sm-6 col-md-4 small-article">
                            <div class="row border3">
                                <div class="col-sm-4 hidden-xs img-pad">
                                    <img src="https://blog.oxforddictionaries.com/wp-content/uploads/zebra.jpg" alt="" class="img-small">
                                </div>
                                <div class="col-xs-12 col-sm-8 border">
                                    <h4>Zebra</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum cum officia, ut quod veniam tempore? Nesciunt optio ducimus nemo perspiciatis, aspernatur maxime, laudantium quo atque non, saepe illo ratione?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="article-3">
                        <div class="col-xs-12 col-sm-6 col-md-4 small-article">
                            <div class="row border3">
                                <div class="col-sm-4 hidden-xs img-pad">
                                    <img src="http://img-aws.ehowcdn.com/750x428p/s3.amazonaws.com/uploadedimages.demandmedia/giraffe.jpg" alt="" class="img-small">
                                </div>
                                <div class="col-xs-12 col-sm-8 border">
                                    <h4>Giraffe</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum cum officia, ut quod veniam tempore? Nesciunt optio ducimus nemo perspiciatis, aspernatur maxime, laudantium quo atque non, saepe illo ratione?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
 </main>

 @endsection