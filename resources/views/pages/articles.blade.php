@extends('layout')

@section('content')

<main>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                    <ul class="breadcrumb color-12">
                        <li><a href="/">Home</a></li>
                        <li><a href="/articles">Articles</a></li>
                      </ul>
                    </div>
                </div>
                
                <div class="row">
                    <div class="article-1">
                        <div class="col-xs-12 border">
                            <div class="row border4 article-1 medium-article">
                                <div class="col-sm-4 hidden-xs">
                            <a href="/article_1">
                             <img src="https://i.pinimg.com/originals/3e/b5/14/3eb514ab88317e9f3d0c5ecc83f288e3.jpg" alt="">
                            </a>
                            </div>
                                <div class="col-xs-12 col-sm-8 border">
                                    <a href="/article_1" class="links"><h4>Dog</h4></a>
                                <p>
                                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum cum officia, ut quod veniam tempore? Nesciunt optio ducimus nemo perspiciatis, aspernatur maxime, laudantium quo atque non, saepe illo ratione?
                                 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="article-2">
                        <div class="col-xs-12 border">
                            <div class="row border4 medium-article">
                                <div class="col-sm-4 hidden-xs">
                                    <img src="https://blog.oxforddictionaries.com/wp-content/uploads/zebra.jpg" alt="">
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
                        <div class="col-xs-12  border">
                            <div class="row border4 medium-article">
                                <div class="col-sm-4 hidden-xs">
                                    <img src="http://img-aws.ehowcdn.com/750x428p/s3.amazonaws.com/uploadedimages.demandmedia/giraffe.jpg" alt="">
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
                <div class="row">
                        <div class="col-md-12 ">
                            <ul class="pagination">
                                    <li class="active"><a href="/articles">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                            </ul>
                        </div>
                </div>
            </div>          
        </main>
        @endsection