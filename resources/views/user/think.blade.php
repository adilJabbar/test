<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{url('style\logo\darwish-logo.png')}}" sizes="16x16"/>
    <link rel="stylesheet" type="text/css" href="{{url('css/think.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style4.css">
    <link rel="stylesheet" type="text/css"
        href="{{url('style\fontawesome\fontawesome-free-5.15.2-web\css\all.css')}}">
        <title>Home - Darwish Digital</title>
    </head>
    <body style="background-color: white;">
    <div class="container-fluide">
        <div class="row">
         <div class="contain">
                <img class="img1" src="{{url('style\logo\darwish-logo.png')}}" >
              <nav style="margin-top: -4%">
                <ul class="ul1">
                    <b>
         
                <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('about')}}">About Us</a></li>
                    <li><a href="{{url('services')}}">Services</a></li>
                    <li><a href="{{url('contact')}}">Contact Us</a></li>
            </b>
         </ul>
         </nav>
         </div>
        </div>
         <div>
            <p class="para1">
                <b><b>Create a Brand's Online   Presence to Transforming it into a Digital Phenomenon</b></b>
            </p>
         </div>
         <div>
            <h1 class="ha1">
                <b>Making Your Digital<br>Marketing Dreams<br>Come True</b>
            </h1>
         </div>
          <div class="iii">
             <i class="fas fa-angle-right"></i>
         </div>
         <div class="icon2">
            <i class="fas fa-angle-left"></i>
         </div>
    </div>
          <div class="abab">

            <div class="new">
                <b class="the">
                    THE PERFORMANCE MARKETING
                </b>
                <h1 class="one">
                    <b>The One With Master<br>Touch</b>
                </h1>
                <p class="para3">
                    Our remarkable performance and digital marketing<br> services have gained the support and trust of customers<br> all around!  We have proved to deliver top-notch results<br> under strict deadlines and managed to take our<br> customers to new heights of success in their respective<br> fields. Because we don’t think big – We Think Giant!
                </p>
                <p class="what"><b>WHAT I DO</b></p>
                <p class="para4"> 
                     Sleek Website Designs<br>
                     Reliable Website<br> Maintenance<br>
                     Technology Enriched<br> Development<br>
                     Scheduled Migrations &<br> Upgrades
                </p>
                <p class="para5">
                    Effective Content Marketing<br>
                    Prized Industry Citations<br>
                    Result-Driven Email<br> Marketing<br>
                    Excellent CRO
                </p>
            </div>
            <div>
                <img src="{{url('style/a1.jpg')}}" class="new2">
            </div>
         </div>

         <div class="here">
            <h1 class="here1"><b>Here’s What We’re<br> Good At</b></h1>
         </div>
            
            <div class="container-fluid">
               <div class="row">
                   <div class="col-md-1">
                       
                   </div>
                 @foreach($services as $service_key =>$service_value)
                    <div  style="float: none; margin: 0 auto;"  class="col-md-3 span6"> <h4 id="Marketing">{{$service_value->title}}</h4>
                    <p class="para6">{{$service_value->description}}</p>
                        
                    </div>
                    @endforeach
               
                
            </div>
            </div>
         
         

        
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="container-fluidee">
                <div id="see">
                    <h1 id="our"><b>See Our Happy Clients</b></h1>
                </div>
                <div>
                    <h5 class="Satisfied">Satisfied customer is the best source of advertisement</h5>
                    <button id="but">See Our Clints.. --></button>
                </div>
            </div>
            <div>
            <video src="{{url('style/ThemeNectar Reaches Power Elite!.mp4')}}" class="vid-bg" autoplay loop muted></video>
            <div class="nav-area">
                <h6>WE BELIEVE IN TRANSPARENCY</h6>
                <h4>We believe in keeping our work transparent and clear, we keep no secrets and inform our customers<br> before the beginning of every phase with detailed analysis and reports.</h4>
            </div>
            <div id="Keyword">
                <h6>-Keyword Analysis Reports </h6>
            </div>
            <div id="Keyworde">
                <h6>–Link Creation Reports </h6>
            </div>
            <div id="Keywordee">
                <h6>-Traffic Reports </h6>
            </div>
            </div>
            <br>
            <br><br><br>
            <br><br><br>
            <br><br><br>
            <br><br><br>
            <br><br><br>
            <br><br><br>
            <br><br><br>
            <br><br><br>    
            <br><br><br>
            <br><br><br>                                                            
            <br><br><br>
            <br><br><br>
            <br>
         

            <div class="Driving">
                <h1 class="Profits">Driving Profits<br> To Your Door</h1>
                <button id="Learn">Learn More  --></button>
            </div>
                
            <div class="Focused">
                
                    <i class="fas fa-ship" id="ship"></i>
                
                <h1 id="Sales">Sales-Focused<br> Marketing</h1>
                <h6 id="that">Marketing strategies that are<br> tailored for your business and its<br> customer to get 100% attention<br> and sales from them</h6>
                <br>
                </div>

                    <div class="Focusedi">
                
                    <i class="fas fa-book-open" id="ship"></i>
                
                <h1 id="Salesi">Increased ROI</h1>
                <h6 id="thati">
                Your website is made more visible<br> in the organic search results<br> which brings in traffic and<br> increases ROI significantly</h6>
                <br>
                </div>


                <div class="Higher">
                    <i class="far fa-user" id="user"></i>

                    <h1 id="Revenue">Higher Revenue</h1>
                    <h6 id="performance">Our performance marketing<br> strategies make your business<br> rank better in the SERPs which<br> generates higher revenue</h6>
                    
                </div>


                <div class="Budget">
                    <i class="fas fa-trophy" id="trophy"></i>

                    <h1 id="Friendly">Budget Friendly<br> Solutions</h1>
                    <h6 id="plans">We care about our customers and<br> understand their financial plans<br> hence propose packages that are<br>effective and affordable </h6>
                </div>

                <br><br><br>
                <br><br><br>
                <br><br><br>
                <br><br><br><br>

                <div class="ing">
                    <h1 id="Uncovering"><b>Uncovering The Capabilities Of<br> Digital Marketing With Our<br> Result-Driven Approach</b></h1>
                </div>


                <div id="proven">
                    <h6 id="follow">We follow proven methodologies and a result driven approach that enable<br><br> us to bring maximum value to our customers’ online marketing campaigns.<br><br> Whether related to SEO, PPC, CRO or any other internet marketing<br><br> campaign we treat each project differently. We use immaculate coding<br><br> techniques and adhere to design guidelines and optimize activities based on<br><br> its unique requirements</h6>
                </div>








                <div class="YEARS">
                    <i class="fab fa-mixcloud" id="cloud"></i>
                    
                <div id="OF">
                    <p>YEARS OF EXPERIENCE</p>
                </div>
                <p id="been">Think have been n the performance<br> marketing industry for several years<br> formulating effective digital marketn<br> strategies, SEO campaigns, and de.<br> and deveelo services for customers<br> hailing from   differfrent from industry<br> segments Throughout this period w.<br> have acquired unmatched tec.hnica<br> expertise and and deve.ped proven<br> methodologies for delivering project<br> any size and complexity</p>
                </div>





                <div class="YEARSa">
                    <i class="fas fa-glasses" id="clouda"></i></i>
                    
                <div id="OFa">
                    <p>QUALITY-FOCUSED DELIVERY</p>
                </div>
                <p id="beena">The team at Think is commiittedd to<br> deliver enhanced value and quality-<br> focused services our customers. We<br>continuou improve our proceses and<br> leverage and innnovatiiyve tools and<br>technologies that guarantee optimim<br> segmentsefficiency and hence, cosit<br> effectiveness for our customers. Eve<br>project undertaken is closely monitor<br>by the quality assurance team to ens<br> that there is no compromise on qualit</p>
                </div>


                <div class="YEARSab">
                    <i class="far fa-laugh-wink" id="cloudab"></i></i></i>
                    
                <div id="OFab">
                    <p>THE AGENCY OF SOMETHING</p>
                    <p id="cre">CREATIVE</p>
                </div>
                <p id="beenab">The team at Think is commiittedd to<br> deliver enhanced value and quality-<br> focused services our customers. We<br>continuou improve our proceses and<br> leverage and innnovatiiyve tools and<br>technologies that guarantee optimim<br> segmentsefficiency and hence, cosit<br> effectiveness for our customers. Eve<br>project undertaken is closely monitor<br>by the quality assurance team to ens<br> that there is no compromise on qualit</p>
                </div>
                


                <div>
                    <h1 id="SUCC"><b>OUR SUCCESS</b></h1>
                </div>

                <div class="sleder">
                    <figure>
                        <div class="slede">
                            <img src="{{url('style/banner1.jpg')}}" alt="">
                        </div>
                        <div class="slede">
                            <img src="{{url('style/banner2.jpg')}}" alt="">
                        </div>
                        <div class="slede">
                            <img src="{{url('style/banner3.jpg')}}" alt="">
                        </div>
                        <div class="slede">
                            <img src="{{url('style/tiny1.jpg')}}" alt="">
                        </div>
                        <div class="slede">
                            <img src="{{url('style/tiny2.jpg')}}" alt="">
                        </div>
                        <div class="slede">
                            <img src="{{url('style/night.jpg')}}" alt="">
                        </div>
                    </figure>
                </div>

          <div id="bgbga">
              <img src="{{url('style/1.webp')}}" id="jpg">
              <div id="Choose">
              <h1 id="hy"><b>Why Choose Us?</b></h1>
              <p class="perf"><b>Our performance marketing services span your entire funnel, but we are far from generalists. Whether you need search rankings your</b></p><p class="perf"><b> competitors can't match or a web presence to competitors can't miss we have a team of dedicated specialist for each and every job</b></p>
              <button id="Me"><b>Show Me How ---></b></button>
              </div>
          </div>
          
<br><br><br><br><br><br><br><br><br>

          <div class="class">
            <video src="{{url('style/ThemeNectar Reaches Power Elite!.mp4')}}" class="vid-bg" autoplay loop muted></video>
            <div class="nav-area">
                    
                <h4 id="keeping">We believe in keeping our work transparent and clear, we keep no secrets and inform our customers<br> before the beginning of every phase with detailed analysis and reports.</h4>
            </div>
            <div id="Keywordm">
                <h6><b>Muhammad Bin Jawad</b> </h6>
            </div>
            <div id="Keywordmq">
                <p><b>Trippy CEO</b> </p>
            </div>
            </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<style>
    .Asked{
    width: 90%;
    margin-left: 7%;
}
#Answer{
    font-size: 330%;
}

.bbooxx p{
 height: 4px;
 overflow: hidden;
 font-size: 15px;
 color: black;
}
.bbooxx p:hover{
  color: black
}
.bbooxx.showContect p{
    height: auto;
}
.bbooxx a{
    display:inline-block;
    text-decoration: none;
    letter-spacing: 1px;
    font-size: 28px;
    color: black;
    padding-top: 2%;
}
</style>

            <div class="Asked">
                <h1 id="Answer">
                    You Asked We Answered!
                </h1>
                <div class="bbooxx">
               <a href="javascript:void();" class="readmore-btn">How Does Reputation Management Work?  <p>Reputation management involves the monitoring of the reputation of a brand or business on the internet, addressing content which is potentially damaging to it, and using customer feedback to try to solve problems before they damage the brand or business’s reputation.</p></a>
              </div>
              <hr>

               <div class="bbooxx">
               <a href="javascript:void();" class="readmore-btn">How Does SEO Optimization Help Small Businesses?  <p>It helps small businesses owners create fast, robust and user-friendly websites that rank higher, in search engines, which in turn helps bring more qualified potential customers to their sites and eventually increases conversion rate.</p></a>
              </div>
            <hr>

             <div class="bbooxx">
               <a href="javascript:void();" class="readmore-btn">What Is SEO’s Significance In 2020?  <p> The strength of SEO and driving organic traffic is clear. Organic search usage and share is outpacing growth in other channels. Organic and paid dominated web traffic in 2019. Optimizing your pages for SEO is going to be even more important in 2020 as organic search continues to rise above other search traffic..</p></a>
              </div>
            <hr>

             <div class="bbooxx">
               <a href="javascript:void();" class="readmore-btn">What is Amazon Marketing Services? 
               <p> Conversion Rate Optimization is the process of optimizing your site or landing page experience based on website visitor behavior to help improve the probability of the visitor taking desired actions (conversions) on the said page.</p> </a>
              </div>
            <hr>

             <div class="bbooxx">
               <a href="javascript:void();" class="readmore-btn">How Does Reputation Management Work? <p> AMS or amazon marketing services is a self-services platform which amazon offers sellers in order to promote their products directly to their target market. Amazon marketing services allows sellers to market specific products with three unique options: Sponsored Products. Headline Search Ads. Product Display Ads.</p></a>
              </div>
            <hr>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
            
            <script>
                $(".readmore-btn").on('click', function(){
                    $(this).parent().toggleClass("showContect");
                        });
            </script> 
            
            
                </div>




     <footer>
      <div class="lastdiv">
                <div id="lstdiv">
                    <p id="bout">About US</p>
                    <p id="Agency">Darwish Digital Agency  is a Full-</p> 
                    <p id="Agency">Service Digital Marketing Agency</p>
                    <p id="Agency"> based in United States of America</p>
                    <p id="Agency"> that brings an out of the box,</p>
                    <p id="Agency"> innovative, result oriented approach </p>
                    <p id="Agency"> developing digital footprints.</p>

                </div>


                <div id="lstdivv">
                    <p id="boutv">Quick Links</p>
                    <li id="Agencyv"><a style="color:#D3D9B9" href="{{url('/')}}">Home</a></li><br><br>  
                    <li id="Agencyv"></li> <a style="color:#D3D9B9" href="{{url('about')}}">About Us</a></li> <br><br>
                    <li id="Agencyv"><a style="color:#D3D9B9" href="{{url('services')}}">Services</a></li><br><br>
                    <li id="Agencyv"><a style="color:#D3D9B9" href="{{url('contact')}}">Contact Us</a></li><br>
                    
                </div>


                <div id="lstdivx">
                    <p id="boutx">Get In Touch</p>
                    <p id="Agencyx">Address:101 Merritt 7 Corporate</p> 
                    <p id="Agencyx">Park Suite 300Norwalk CT 06851,</p>
                    <p id="Agencyx"> United States of America</p>
                    <p id="Agencyx">1st floor, 16 CC, DHA Phase 4</p>
                    <p id="Agencyx"> Lahore Punjab, Pakistan </p>
                    <p id="Agencyx"> Email: info@darwishdigital.co</p>
                    <p id="Agencyx">Phone: +92 333 4052545</p>

                </div>


                
                <div>

                <div id="lstdivxx">
                    <p id="bout">Looking For Something</p>
                    <input type="search" name="search" class="fafafafa" placeholder="Search..." >
                    <hr id="hhr">
                </div>
                <hr id="hrhr">
                <p id="nkitBig">Copyrights ©️ 2010 Reserved by DarwishDigital | Developed by <a href="https://bugskiller.com">BugsKiller</a></p>

                <div class="twitter">
                    <i class="fab fa-twitter"></i>
                </div>
                <div class="facebook">
                    <i class="fab fa-facebook-f"></i>
                </div>
                <div class="plus">
                    <i class="fab fa-google-plus-g"></i>
                </div>

            </div>
            </footer>


    </html>     
    </body>