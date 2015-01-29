@extends('main')
@section('content')
    <div id="banner-wrap">
            <div id="banner" class="container_24 rounder" >
                <h2>WELCOME TO KING WEB</h2>
                <div id="featured">
                    <img src="{{ asset('site/img/welcome1.jpg') }}" alt="Featured" />
                    <img src="{{ asset('site/img/welcome2.jpg') }}" alt="Featured" />
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris bibendum, lacus ut faucibus aliquam, ex est vehicula orci, a vehicula arcu enim non eros.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris bibendum, lacus ut faucibus aliquam, ex est vehicula orci, a vehicula arcu enim non eros.</p>
                <button>Learn More</button>
                
            </div>
            <p id="breadcrumbs" class="container_24 rounder">You're here: <a href="#">Home</a> > <a href="#">Welcome</a></p>
            
        </div> <!-- end banner wrap-->
        
        <div id="main" class="container_24">
            <div id="primary" class="grid_15">
                <h3>From The Blog</h3>
                <article>
                    <h2><a href="">King Gets Together To Have Some Fun</a></h2>
                    <h6>Janvar 14th 2015 | <a href="#">31 comments</a></h6>
                    <img src="{{ asset('site/img/fromBlog1.jpg') }}" alt="King Gets Together To Have Some Fun" />
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris bibendum, lacus ut faucibus aliquam, ex est vehicula orci, a vehicula arcu enim non eros. <a href="#">Continue reading...</a></p>
                </article>
                <article>
                    <h2><a href="">King Gets Together To Have Some Fun</a></h2>
                    <h6>Janvar 14th 2015 | <a href="#">31 comments</a></h6>
                    <img src="{{ asset('site/img/fromBlog2.jpg') }}" alt="King Gets Together To Have Some Fun" />
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris bibendum, lacus ut faucibus aliquam, ex est vehicula orci, a vehicula arcu enim non eros. <a href="#">Continue reading...</a></p>
                </article>
                <article>
                    <h2><a href="">King Gets Together To Have Some Fun</a></h2>
                    <h6>Janvar 14th 2015 | <a href="#">31 comments</a></h6>
                    <img src="{{ asset('site/img/fromBlog2.jpg') }}" alt="King Gets Together To Have Some Fun" />
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris bibendum, lacus ut faucibus aliquam, ex est vehicula orci, a vehicula arcu enim non eros. <a href="#">Continue reading...</a></p>
                </article>
                <button>The Blog</button>
            </div>
            
            <aside id="secondary" class="grid_8 prefix_1">
                
                <ul id="tabHeadings">
                    <li class="selected"><a href="#comments">Comments</a></li>
                    <li><a href="#catagories">Catagories</a></li>
                    <li><a href="#archives">Archives</a></li>
                </ul>
                <section class="tabs rounder">
                    <ul  id="comments">
                        <li>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris bibendum, lacus ut faucibus aliquam, ex est vehicula orci, a vehicula arcu enim non eros.</p>
                            <footer>
                                <h6>POSTED BY: Some fan!</h6>
                            </footer>
                        </li>
                        <li>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris bibendum, lacus ut faucibus aliquam, ex est vehicula orci, a vehicula arcu enim non eros.</p>
                            <footer>
                                <h6>POSTED BY: Some fan!</h6>
                            </footer>
                        </li>
                    </ul>
                    <h4>Catagories</h4>
                    <ul id="catagories">
                        <li><a href="#">Catagory</a></li>
                        <li><a href="#">Catagory</a></li>
                        <li><a href="#">Catagory</a></li>
                        <li><a href="#">Catagory</a></li>
                        <li><a href="#">Catagory</a></li>
                        <li><a href="#">Catagory</a></li>
                    </ul>
                    <h4>archive</h4>
                    <ul id="archives">
                        <li><a href="#">Archive</a></li>
                        <li><a href="#">Archive</a></li>
                        <li><a href="#">Archive</a></li>
                        <li><a href="#">Archive</a></li>
                        <li><a href="#">Archive</a></li>
                        <li><a href="#">Archive</a></li>
                    </ul>
                </section>
                
                <section>
                    <h3>Who We Are</h3>
                    <img src="{{ asset('site/img/WhoWeAre.jpg') }}" alt="Who we are" />
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#">Continue reading...</a></p>
                </section>
<!--                <section id="players-online">
                    <h3>Players Online</h3>
                    <ul>
                        <li><img src="img/player.png" alt="player" /></li>
                        <li><img src="img/player.png" alt="player" /></li>
                        <li><img src="img/player.png" alt="player" /></li>
                        <li><img src="img/player.png" alt="player" /></li>
                        <li><img src="img/player.png" alt="player" /></li>
                        <li><img src="img/player.png" alt="player" /></li>
                        <li><img src="img/player.png" alt="player" /></li>
                    </ul>
                </section>-->
            </aside>
        </div>
        
        
        <div id="footer-wrap">
            <footer class="container_24">
                <section class="grid_8">
                    <h3>Have a question?</h3>
                    <form action="" method="post">
                        <input type="text" name="name" value="Your Name" placeholder="Your Name" />
                        <input type="text" name="email" value="Your Email" placeholder="Your Email"/>
                        <input  id="topic" type="text" name="topic" value="Topic" placeholder="Topic"/>
                        <textarea name="story" id="story" cols="30" rows="10" placeholder="Tell the painful story">Tell the painful story</textarea>
                        <button>Submit</button>
                        
                    </form>
                </section>
                <section id="allys" class="grid_8">
                    <h3>Our Trusted Allys</h3>
                    <ul>
                        <li><img src="{{ asset('site/img/ally1.jpg') }}" alt="ally" /></li>
                        <li><img src="{{ asset('site/img/ally2.jpg') }}" alt="ally" /></li>
                        <li><img src="{{ asset('site/img/ally3.jpg') }}" alt="ally" /></li>
                        <li><img src="{{ asset('site/img/ally4.jpg') }}" alt="ally" /></li>
                    </ul>
                </section>
                <section id="twitter" class="grid_8">
                    <h3>Twitter Stram</h3>
                    <ul>
                        <li>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span><a href="">2 Hours Ago</a>, via Tweetdeck</span></p>
                        </li>
                        <li>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<span><a href="">2 Hours Ago</a>, via Tweetdeck</span></p>
                        </li>
                        <li>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<span><a href="">2 Hours Ago</a>, via Tweetdeck</span></p>
                        </li>
                    </ul>
                    
                    <button>Follow Us</button>
                </section>
            </footer>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="{{ asset('site/js/plugins.js') }}"></script>
        <script src="{{ asset('site/js/main.js') }}"></script>

@stop