@extends('layouts.master')



@section('content')

<div class="uk-container uk-container-smal">
<div id="slider" class="uk-card uk-grid-collapse uk-margin" uk-grid>
    <div class="uk-flex-last@s uk-card-media-right uk-cover-container uk-width-2-3@l uk-width-1-2@s">
        <img src="{{asset('images/slide.png')}}" alt="">
        
    </div>
    <div class="uk-width-1-2@s uk-width-1-3@l">
        <div class="uk-card-body" uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
            <h3 class="uk-card-title">Here’s to talented, <span>amazing people</span></h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>

             <a href="#" class="uk-button slider-btn uk-box-shadow-large">GET STARTED</a>
        </div>
    </div>
</div>
</div>

<div class="skill">
<div class="uk-container uk-container-smal">
<div class="uk-child-width-1-3@m uk-grid-small uk-grid-match " uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 300; repeat: false" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body" >
            <img src="{{asset('images/info-icon1.png')}}">
            <h3 class="uk-card-title">Web Development </h3>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <img src="{{asset('images/info-icon2.png')}}">
            <h3 class="uk-card-title">Creative Design</h3>
             <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <img src="{{asset('images/info-icon3.png')}}">
            <h3 class="uk-card-title">Mobile Application</h3>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
        </div>
    </div>
</div>

<div class="presentation">
    <h1>Hello! We're A Creative Agency in Algeria That Focuses On Graphic Design, Web Design & Web Develop.</h1>
    <div class="uk-child-width-1-2@m"  uk-grid>
        
        <div>
        <div class="uk-card uk-card-body" uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
      
            <h3 class="uk-card-title">Your unique agency team, without the overhead.</h3>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English </p>
        </div>
        </div>
        <div>
            
            <div id="chart" uk-scrollspy="cls: uk-animation-slide-right; repeat: false">
                <div class="progress-element">
                   <span class="uk-float-left">Development</span>
                   <span class="uk-float-right">80%</span>
                </div>
                <progress class="uk-progress  " value="80" max="100"></progress>
                <div class="progress-element">
                   <span class="uk-float-left">HTML, CSS, JS</span>
                   <span class="uk-float-right">70%</span>
                </div>
                <progress class="uk-progress" value="70" max="100"></progress>
                <div class="progress-element">
                   <span class="uk-float-left">Marketing</span>
                   <span class="uk-float-right">90%</span>
                </div>
                <progress class="uk-progress" value="90" max="100"></progress>
                <div class="progress-element">
                   <span class="uk-float-left">Design</span>
                   <span class="uk-float-right">80%</span>
                </div>
                <progress class="uk-progress" value="80" max="100"></progress>

            </div>

        </div>
    </div>
</div>

</div>
</div>

<div class="clients">
    <div class="uk-container uk-container-smal">
    <h1>Our Clients Says</h1>
    <div class="sub-title">Simple & honest pricing. No hidden fees.</div>

    <div class="clients-content">
            <div uk-slider="center: true">

    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s  uk-grid">
            <li>
                <div class="uk-card">
                    <div class="uk-card-media-top">
                        <img class="uk-border-circle" src="{{asset('images/client1.jpg')}}"  alt="">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Reda Yagoub</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-card">
                    <div class="uk-card-media-top">
                        <img class="uk-border-circle" src="{{asset('images/client2.jpg')}}"  alt="">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Reda Yagoub</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-card ">
                    <div class="uk-card-media-top">
                        <img class="uk-border-circle" src="{{asset('images/client3.jpg')}}"  alt="">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Reda Yagoub</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-card">
                    <div class="uk-card-media-top">
                        <img class="uk-border-circle" src="{{asset('images/client3.jpg')}}"  alt="">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Reda Yagoub</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-card">
                    <div class="uk-card-media-top">
                         <img class="uk-border-circle" src="{{asset('images/client4.jpg')}}"  alt="">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Reda Yagoub</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
            </li>

        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

    </div>

    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

</div>
    </div>

    </div>
</div>

<div class="stat">
   <div class="uk-container uk-container-smal">
<div class="uk-child-width-1-4@m uk-grid-small uk-grid-match stat-cont" uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 200; repeat: false" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <img src="{{asset('images/info-icon4.png')}}">
            <h3 class="uk-card-title">25,327 </h3>
            <p>Support Given </p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <img src="{{asset('images/info-icon5.png')}}">
            <h3 class="uk-card-title">420</h3>
             <p>Video Tutorial </p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <img src="{{asset('images/info-icon6.png')}}">
            <h3 class="uk-card-title">+20</h3>
            <p>Expert Stuff </p>
        </div>
    </div>
       <div>
        <div class="uk-card uk-card-default uk-card-body">
            <img src="{{asset('images/info-icon8.png')}}">
            <h3 class="uk-card-title">5,126</h3>
            <p>Project Done</p>
        </div>
    </div>
</div>
</div> 
</div>


<div class="pricing">
       <div class="uk-container uk-container-smal">
        <div class="pricing-sub">Pricing</div>
        <h1>Pricing Plan</h1>
<div class="uk-child-width-1-4@m uk-grid-small uk-grid-match " uk-grid>
    <div class="div-price">
         <div class="square"></div>
        <div class="uk-card uk-card-default uk-card-body">
           
            <h3 class="uk-card-title">BASIC</h3>
            <h1 class="price"><sup class="dollar">$</sup>20 <span class="month">/month</span></h1>
            <ul class="uk-list uk-list-divider">
                <li>Rapidiously strategize</li>
                <li>Progressively visualize</li>
                <li>Equity invested supply</li>
            </ul>
            <a href="#" class="uk-button price-btn uk-box-shadow-large">GET STARTED</a>
        </div>
         <div class="square"></div>
    </div>
    <div class="div-price">
         <div class="square"></div>
        <div class="uk-card uk-card-default uk-card-body">
           
            <h3 class="uk-card-title">STANDARD</h3>
             <h1 class="price"><sup class="dollar">$</sup>39 <span class="month">/month</span></h1>
             <ul class="uk-list uk-list-divider">
                <li>Rapidiously strategize</li>
                <li>Progressively visualize</li>
                <li>Equity invested supply</li>
            </ul>
             <a href="#" class="uk-button price-btn uk-box-shadow-large">GET STARTED</a>
        </div>
         <div class="square"></div>
    </div>
    <div class="div-price">
        <div class="squarepro"></div>
        <div class="uk-card uk-card-body pro">
        
            <h3 class="uk-card-title">PROFESSIONAL</h3>
            <h1 class="price"><sup class="dollar">$</sup>45 <span class="month">/month</span></h1>
            <ul class="uk-list uk-list-divider">
                <li>Rapidiously strategize</li>
                <li>Progressively visualize</li>
                <li>Equity invested supply</li>
            </ul>
             <a href="#" class="uk-button price-btn uk-box-shadow-large">GET STARTED</a>
        </div>
        <div class="squarepro"></div>
    </div>
       <div class="div-price">
         <div class="square"></div>
        <div class="uk-card uk-card-default uk-card-body last">
          
            <h3 class="uk-card-title">ENTERPRISE</h3>
            <h1 class="price"><sup class="dollar">$</sup>169 <span class="month">/month</span></h1>
            <ul class="uk-list uk-list-divider">
                <li>Rapidiously strategize</li>
                <li>Progressively visualize</li>
                <li>Equity invested supply</li>
            </ul>
             <a href="#" class="uk-button price-btn uk-box-shadow-large">GET STARTED</a>
        </div>
         <div class="square"></div>
    </div>
</div>
</div> 
</div>


<div class="contactus">
     <div class="uk-container uk-container-smal">
      <div class="contact-sub">CONTACT</div>
        <h1>Get In Touch</h1>

        <div class="contact-form ">
            
            <form class="uk-grid-small" uk-grid>
            <div class="uk-width-1-2@s">
                <input class="uk-input" type="text" placeholder="Your Name">
            </div>
            <div class="uk-width-1-2@s">
                <input class="uk-input" type="text" placeholder="Your Email">
            </div>
            <div class="uk-width-1-2@s">
                <input class="uk-input" type="text" placeholder="Phone Number">
            </div>
            <div class="uk-width-1-2@s">
                <input class="uk-input" type="text" placeholder="Subject">
            </div>
            <div class="uk-margin uk-width-1-1@s">
            <textarea class="uk-textarea" rows="10" placeholder="Your Message"></textarea>
            </div>
            <button class="uk-button uk-box-shadow-large">Send Message</button>
            </form>

        </div>

     </div>
</div>


<div class="maps">
    <iframe class="maps mapscontact" width="100%" height="400" src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Centre%20Unversitaire%20Belhadj%20Bouchaib%20+(Ain%20t%C3%A9mouchent)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

    <div class="address uk-box-shadow-large">
        <p>Feel free to send me any question you may have. We are happy to answer them.</p>
        <h4>Our Headquarters</h4>
         <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        <h4>Call Center</h4>
        <ul class="uk-list">
            <li>(+213)698683132</li>
            <li>(+213)698683132</li>
        </ul>
        <a href="#" class="uk-button maps-btn uk-box-shadow-large">send message</a>
    </div>

</div>

<div class="footer">
     <div class="uk-container uk-container-smal">
         <div class="footer-content  uk-child-width-1-3@m" uk-grid>
             <div>
                 <a class="uk-navbar-item uk-logo" href="#"><img src="{{asset('images/logo.png')}}"></a>
                 <a href="" class="uk-icon-button uk-margin-small-right" uk-icon="twitter"></a>
                 <a href="" class="uk-icon-button  uk-margin-small-right" uk-icon="facebook"></a>
                 <a href="" class="uk-icon-button  uk-margin-small-right" uk-icon="instagram"></a>
                 <a href="" class="uk-icon-button" uk-icon="google-plus"></a>
             </div>
             <div>
                 <h4>Working Hours</h4>
                <ul class="uk-list">
                    <li>Sunday - Thursday: 06.00 - 18.00 hrs</li>
                    <li>Friday & Saturday: 06.00 - 09.00 hrs</li>
                </ul>
             </div>
             <div>
                 <h4>Get Subscribed Now</h4>
                 <form>
                         <div class="uk-margin" uk-margin>
                          
                                <input class="uk-input" type="text" placeholder="Your Email">
                           
                            <button class="uk-button uk-button-default uk-box-shadow-large">Subscribe</button>
                        </div>
                 </form>
             </div>
         </div>
         <div id="copyright" class=" uk-container uk-container-large">
           
                <span>Copyright {{ now()->year }}. </span>
                <span>Developed By <a  href="https://www.facebook.com/yagoub.reda">Reda Yagoub</a></span>
           
        </div>
     </div>
</div>

@endsection
