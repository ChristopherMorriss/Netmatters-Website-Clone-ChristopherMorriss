<!DOCTYPE html>
<html lang="en">
    <head>  
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <link href="css/normalize.css" rel="stylesheet">
        <link href="css/slick.css" rel="stylesheet">
        <link href="css/slick-theme.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <?php
            require_once realpath(__DIR__ . "/vendor/autoload.php");
            use Dotenv\Dotenv;
            $dotenv = Dotenv::createImmutable(__DIR__);
            $dotenv->load();?> 
    <title>Full Service Digital Agency | Cambridgeshire &amp; Norfolk | Netmatters</title>
    </head>

    <body>
        <div id="container">
        <header>
            <?php include "php/header.php" ?>
            <div class="slider">
                <div class="slider-design">
                    <div class="img_banner">
                        <img src="img/home.webp" alt="Banner image">
                    </div>
                    <div class="slider-content container">
                        <h1>The East Of England's Leading Technology Company </h1>
                        <p>Performance-driven digital and technology services <br> with complete transparency.</p>
                        <a href="#" class="btn purple-btn" id="long-btn">Why Choose Us? <span class="icon-arrow-right2"></span></a>
                    </div>
                </div>
                <div class="slider-design">
                    <div class="img_banner">
                        <img src="img/bespoke-bg.webp" alt="Banner image">
                    </div>
                    <div class="slider-content container">
                        <h1>Bespoke Software</h1>
                        <p>Delivering expert bespoke software <br> solutions across a range of Industries.</p>
                        <a href="#" class="btn grey_blue-btn">Find Out More <span class="icon-arrow-right2"></span></a>
                    </div>
                </div>
                <div class="slider-design">
                    <div class="img_banner">
                        <img src="img/it-bg.webp" alt="Banner image">
                    </div>
                    <div class="slider-content container">
                        <h1>IT Support</h1>
                        <p>Fast and cost-effective IT support <br> services for your business.</p>
                        <a href="#" class="btn blue-btn">Find Out More <span class="icon-arrow-right2"></span></a>
                    </div>
                </div>
                <div class="slider-design">
                    <div class="img_banner">
                        <img src="img/digital-marketing-bg.webp" alt="Banner image">
                    </div>
                    <div class="slider-content container">
                        <h1>Digital Marketing </h1>
                        <p>Generating your new business through <br> results-driven marketing activities.</p>
                        <a href="#" class="btn green-btn">Find Out More <span class="icon-arrow-right2"></span></a>
                    </div>
                </div>
                <div class="slider-design">
                    <div class="img_banner">
                        <img src="img/telecoms-services-bg.webp" alt="Banner image">
                    </div>
                    <div class="slider-content container">
                        <h1>Telecoms Services </h1>
                        <p>A new approach to connectivity, see <br> how we can help your business.</p>
                        <a href="#" class="btn dred-btn">Find Out More <span class="icon-arrow-right2"></span></a>
                    </div>
                </div>
                <div class="slider-design">
                    <div class="img_banner">
                        <img src="img/web-design-bg.webp" alt="Banner image">
                    </div>
                    <div class="slider-content container">
                        <h1>Web Design</h1>
                        <p>For businesses looking to make a strong <br> and effective first impression.</p>
                        <a href="#" class="btn purple-btn">Find Out More <span class="icon-arrow-right2"></span></a>
                    </div>
                </div>
                <div class="slider-design">
                    <div class="img_banner">
                        <img src="img/cyber-security-bg.webp" alt="Banner image">
                    </div>
                    <div class="slider-content container">
                        <h1>Cyber Security</h1>
                        <p>Keeping businesses and their customers <br> sensitive information protected.</p>
                        <a href="#" class="btn pred-btn">Find Out More <span class="icon-arrow-right2"></span></a>
                    </div>
                </div>
            </div>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
            
        </header>
        <?php include "php/sticky-header.php" ?>
        <div class="heading container">
            <h2>Our Services</h2>
            <h1 class="line-hover view" id="vow-1"><a href="#" class="black-text">View Our Work <span class="icon-arrow-right2"></span></a></h1>
        </div>
        <div class="grid container">
            <a href="#">
                <div class="grid-object object-1">
                    <div class="btn-icon grey-btn"><span class="icon-cogs"></span></div>
                    <h2>Bespoke Software</h2>
                    <p>Bespoke software solutions for all your business needs including integetrations and reporting.</p>
                    <div class="btn btn-styles grey_blue-btn">Read More</div>
                </div>
            </a>
            <a href="#">
                <div class="grid-object object-2">
                    <div class="btn-icon blue-btn"><span class="icon-display"></span></div>
                    <h2>IT Support</h2>
                    <p>Fully managed IT support and consultancy packages tailored to meet your exact business needs.</p>
                    <div class="btn btn-styles blue-btn">Read More</div>
                </div>
            </a>
            <a href="#">
                <div class="grid-object object-3">
                    <div class="btn-icon green-btn"><span class="icon-bar-graph"></span></div>
                    <h2>Digital Marketing</h2>
                    <p>Driven brand awareness &amp; ROI through creative digital marketing campaigns.</p>
                    <br class="filler-line">
                    <div class="btn btn-styles green-btn">Read More</div>
                </div>
            </a>
        </div>
        <div class="grid2 container">  
            <a href="#">
                <div class="grid-object object-4">
                    <div class="btn-icon dred-btn"><span class="icon-phone_in_talk"></span></div>
                    <h2>Telecoms Services</h2>
                    <p>Business telephony solutions including mobile &amp; connectivity solutions.</p>
                    <div class="btn btn-styles dred-btn">Read More</div>
            
                </div>
            </a>
            <a href="#">
                <div class="grid-object object-5">
                    <div class="btn-icon purple-btn"><span class="icon-embed2"></span></div>
                    <h2>Web Design</h2>
                    <p>User-centric design for businesses looking to make a lasting impression.</p>
                    <div class="btn btn-styles purple-btn">Read More</div>
                </div>
            </a>
            <a href="#">
                <div class="grid-object object-6">
                    <div class="btn-icon pred-btn"><span class="icon-security"></span></div>
                    <h2>Cyber Security</h2>
                    <p>Prevention, testing, consultancy &amp; breach management services.</p>
                    <div class="btn btn-styles pred-btn">Read More</div>
                </div>
            </a>
            <a href="#">
                <div class="grid-object object-4">
                    <div class="btn-icon dred-btn"><span class="icon-graduation-cap"></span></div>
                    <h2>Developer Training</h2>
                    <p>Web design &amp; software training courses designed to secure a job in tech.</p>
                    <div class="btn btn-styles dred-btn">Read More</div>
                </div>
            </a>
            <h3 class="line-hover container view" id="vow-2"><a href="#" class="black-text">View Our Work <span class="icon-arrow-right2"></span></a></h3>
        </div>
        <div class="partners section">
            <div class="all-logos set-1">
                <div class="logo-container">
                    <img src="img/google-partner.webp" alt="Google Partner Logo">
                </div>
                <div class="logo-container">
                    <img src="img/living_wage.webp" alt="Living Wage Partner Logo">
                </div>
                <div class="logo-container">
                    <img src="img/norfolk_prohelp.webp" alt="Norforlk Prohelp Logo">
                </div>
                <div class="logo-container">
                    <img src="img/investing-in-future-growth.webp" alt="Investing In Future Growth Logo">
                </div>
                <div class="logo-container">
                    <img src="img/norfolk-carbon-charter.webp" alt="Norfolk Carbon Charter Logo">
                </div>
                <div class="logo-container">
                    <img src="img/PPC_logo.webp" alt="PCC Logo">
                </div>
                <div class="logo-container">
                    <img src="img/princess-royal-training.webp" alt="Princess Royal Training Award Logo">
                </div>
                <div class="logo-container">
                    <img src="img/future-50.webp" alt="Future-50 Logo">
                </div>
                <div class="logo-container">
                    <img src="img/qms.webp" alt="Citation ISO 9001 Logo">
                </div>
                <div class="logo-container">
                    <img src="img/iso_27001.webp" alt="Citation ISO 27001 Logo">
                </div>
                <div class="logo-container">
                    <img src="img/skills-of-tomorrow.webp" alt="Skills Of Tomorrow Logo">
                </div>
                <div class="logo-container">
                    <img src="img/cyber-essentials-colour.webp" alt="Cyber Essentials Logo">
                </div>
            </div>
        </div>
        <div class="intro section">
            <div class="container">
                <div class="review">
                    <h1>Welcome To Netmatters</h1>
                    <p id="bold">Netmatters is a leading Bespoke Software, IT Support, and Digital Marketing
                    company based in the East of England with offices in Cambridge, Wymondham and Great Yarmouth.
                    </p>
                    <p>
                        We aren't tied into contracts with third-party providers, so you know that our
                        recommendations for your business are based purely with one benefit in mind: to help improve your business with the most appropriate solutions.
                    </p>  
                    <p>
                        We pride ourselves on being an ethical business and have a unique business offering and cost model that ensures you get the most from our 
                        relationship in an upfront manner.
                    </p>
                    <div class="btn-group">
                        <a href="#" class="btn black-btn black-1">Why Choose Us? <span class="icon-arrow-right2"></span></a><br>
                        <a href="#" class="btn black-btn black-2">Our Culture <span class="icon-arrow-right2"></span></a>
                    </div>
                </div>
                <div class="review">
                    <h1>What Our Clients Think</h1>
                    <span class="icon-star"></span>
                    <span class="icon-star"></span>
                    <span class="icon-star"></span>
                    <span class="icon-star"></span>
                    <span class="icon-star"></span>
                    <div class="quote">Netmatters stood out from the start. Great guys and very easy to work with. Both the build and digital marketing teams are clearly 
                        skilled -they know their stuff! They delivered a website to our (high!) expectations and went over and above to ensure we were satisfied clients - and we are! 
                        <div class="line-hover quote-author">Eleanor Bishop, Head of Marketing - <a href="#">Ashcroft Partnership LLP</a></div>
                    </div>
                    <div class="btn-group">
                        <a href="#" class="btn google-btn">Google Reviews <span class="icon-arrow-right2"></span></a><br>
                        <a href="#" class="btn trustpilot-btn">Trustpilot Reviews <span class="icon-arrow-right2"></span></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="heading container">
            <h1>Latest News</h1>
            <h1 class="line-hover view" id="va-1"><a href="#" class="black-text">View All <span class="icon-arrow-right2"></span></a></h1>
        </div>
        <div class="news section container">
            <div class="container">
                    <div class="article article-1">
                        <a href="#" class="article-link"></a>
                        <a href="#" class="btn green-btn img-btn">Case Studies</a>
                        <a href="#" class="img-news">
                            <img src="img/ams-news.webp" alt="Abel's Moving Service">
                        </a>
                        <h3 class="green-text news-title">Moving Forward: Proactive Digital Marketing with Abel's Moving Service</h3>
                        <div class="article-info">
                            <p>Who are abels moving Service? Abel's Moving Services is a high-end removal company with a rich hist...</p>
                            <a href="#" class="btn green-btn read-btn">Read More</a>
                        </div>
                        <div class="article-footer">
                            <div class="img-footer">
                                <img src="img/nm.png" alt="netmatters-logo">
                            </div>
                            <div class ="text-footer">
                                <strong class="light-black">Posted By Netmatters</strong>
                                <br>22nd May 2024
                            </div>
                        </div>
                    </div>
                <div class="article article-2">
                    <a href="#" class="article-link"></a>
                    <a href="#" class="btn dred-btn img-btn">Careers</a>
                    <a href="#" class="img-news">
                        <img src="img/jtt-news.webp" alt="Junior Telecoms Technician">
                    </a>
                    <div class="article-contents">
                        <h3 class="red-text news-title">Junior Telecoms Technician</h3>
                        <div class="article-info">
                            <p>Salary Range £25000 - £28000 per annum Hours 40 hours per week, Monday - Friday Location Wymondham...</p>
                            <a href="#" class="btn dred-btn read-btn">Read More</a>
                        </div>
                        <div class="article-footer">
                            <div class="img-footer">
                                <img src="img/bs.png" alt="netmatters-logo">
                            </div>
                            <div class ="text-footer">
                                <strong class="light-black">Posted By Bethany Shakespeare</strong>
                                <br>16th May 2024
                            </div>
                        </div>
                    </div>
                </div>
                <div class="article article-3">
                    <a href="#" class="article-link"></a>
                    <a href="#" class="btn blue-btn img-btn">Careers</a>
                    <a href="#" class="img-news">
                        <img src="img/slt-news.webp" alt="2nd Line Technician">
                    </a>
                    <div class="article-title news-title">
                        <h3 class="blue-text">2nd Line Technician</h3>
                        <span class="read-time">- 4 Minute Read</span>
                    </div>
                    <div class="article-info">
                        <p>Salary Range £28k-£36k + Bonuses + Pension Hours 40 hours per week, Monday - Friday Location Wymondh...</p>
                        <a href="#" class="btn blue-btn read-btn">Read More</a>
                    </div>
                    <div class="article-footer">
                        <div class="img-footer">
                            <img src="img/rm.png" alt="netmatters-logo">
                        </div>
                        <div class ="text-footer">
                            <strong class="light-black">Posted By Rebecca Moore</strong>
                            <br>9th May 2024
                        </div>
                    </div>
                </div>
                
            </div>
            <h1 class="line-hover container view" id="va-2"><a href="#" class="black-text">View All <span class="icon-arrow-right2"></span></a></h1>
        </div>
        <div class="partners section">
            <div class="all-logos">
                <div class="triangle-partners-1">
                    <div class="logo-container">
                        <div class="full-tooltip">
                            <div class="tooltip-box">
                                <h3>Black Swan Care Group</h3>
                                <p>Black Swan Care Group own and manage 21 high-quality care and residential homes with a focus on putting 
                                the needs of their residents first.</p>
                                <button class="grey_blue-btn">
                                    View Our Case Study
                                    <span class="icon-arrow-right2"></span>
                                </button>
                            </div>
                            <div class="triangle-partners"></div>
                        </div>
                        <div class="partner-1 partner-container">
                            <img class="partners-1" src="img/black_swan_logo.png" alt="Black Swan Logo">
                        </div>
                    </div>
                </div>
                

                <div class="triangle-partners-2">
                    <div class="logo-container">
                        <div class="full-tooltip">
                            <div class="tooltip-box">
                                <h3>Xupes</h3>
                            </div>
                            <div class="triangle-partners"></div>
                        </div>
                        <div class="partner-container partner-2">
                            <img class="partners-2" src="img/xupes_logo.webp" alt="Xupes Logo">
                        </div>
                    </div>
                </div>
                

                <div class="triangle-partners-3">
                    <div class="logo-container">
                        <div class="full-tooltip">
                            <div class="tooltip-box">
                                <h3>BEAT</h3>
                                <p>The UK's eating disorder charity founded in 1989.</p>
                            </div>
                            <div class="triangle-partners"></div>
                        </div>
                        <div class="partner-container partner-3">
                            <img class="partners-3" src="img/beat_logo.webp" alt="Beat Logo">
                        </div>
                    </div>
                </div>
                

                <div class="triangle-partners-4">
                    <div class="logo-container">
                        <div class="full-tooltip">
                            <div class="tooltip-box">
                                <h3>Survey Solutions</h3>
                            </div>
                            <div class="triangle-partners"></div>
                        </div>
                        <div class="partner-container partner-4">
                            <img class="partners-4" src="img/survey_solutions_logo.webp" alt="Survey Solutions Logo">
                        </div>
                    </div>
                </div>   
                

                <div class="triangle-partners-5">
                    <div class="logo-container">
                        <div class="full-tooltip">
                            <div class="tooltip-box">
                                <h3>Girl Guiding Anglia</h3>
                                <p>Girl Guiding Anglia is part of Girlguiding, the UK's leading charity for girls and young women in the UK.</p>
                                <button class="blue-btn">View Our Case Study<span class="icon-arrow-right2"></span></button>
                            </div>
                            <div class="triangle-partners"></div>
                        </div>
                        <div class="partner-container partner-5">
                            <img class="partners-5" src="img/girl_guides_anglia_logo.webp" alt="Girl Guides Anglia Logo">
                        </div>
                    </div>
                </div>
                

                <div class="triangle-partners-6">
                    <div class="logo-container">
                        <div class="full-tooltip">
                            <div class="tooltip-box">
                                <h3>Sweetzy</h3>
                                <p>Sweetzy are an online sweets retailer, based in Wymondham.</p>
                                <button class="green-btn">View Our Case Study<span class="icon-arrow-right2"></span></button>
                            </div>
                            <div class="triangle-partners"></div>
                        </div>
                        <div class="partner-container partner-6">
                            <img class="partners-6" src="img/sweetzy_logo.webp" alt="Sweetzy Logo">
                        </div>
                    </div>
                </div>
                

                <div class="triangle-partners-7">
                    <div class="logo-container">
                        <div class="full-tooltip">
                            <div class="tooltip-box">
                                <h3>Howes Percival</h3>
                            </div>
                            <div class="triangle-partners"></div>
                        </div>
                        <div class="partner-container partner-7">
                            <img class="partners-7" src="img/howes_percival_logo.webp" alt="Howes Percival Logo">
                        </div>
                    </div>
                </div>
                
    
                <div class="triangle-partners-8">
                    <div class="logo-container">
                        <div class="full-tooltip">
                            <div class="tooltip-box">
                                <h3>GDST</h3>
                                <p>The Girls' Day School Trust (GDST) is the UK's leading family of 25 independent girls' schools.</p>
                                <button class="green-btn">View Our Case Study<span class="icon-arrow-right2"></span></button>
                            </div>
                            <div class="triangle-partners"></div>
                        </div>
                        <div class="partner-container partner-8">
                            <img class="partners-8" src="img/girls_day_school_trust_logob.webp" alt="Girls Day School Trust Logo">
                        </div>
                    </div>
                    
                </div>
                

                <div class="triangle-partners-9">
                    <div class="logo-container">
                        <div class="full-tooltip">
                            <div class="tooltip-box">
                                <h3>Ashcroft Partnership LLP</h3>
                                <p>Originally founded in 2006 as Ashcroft Anthony, they became Ashcroft Partnership LLP in 2020 and are one 
                                of the top chartered accountancy firms in Cambridge, advising entrepreneurs and families.</p>
                                <button class="purple-btn">View Our Case Study<span class="icon-arrow-right2"></span></button>
                            </div>
                            <div class="triangle-partners"></div>
                        </div>
                        <div class="partner-container partner-9">
                            <img class="partners-9" src="img/ashcroft_logo.webp" alt="Ashcroft Logo">
                        </div>
                    </div>
                </div>
                

                <div class="triangle-partners-10">
                    <div class="logo-container">
                        <div class="full-tooltip">
                            <div class="tooltip-box">
                                <h3>One Traveller</h3>
                                <p>One Traveller, founded in 2007, is a leading provider of solo holidays for over 50s.</p>
                                <button class="purple-btn">View Our Case Study<span class="icon-arrow-right2"></span></button>
                            </div>
                            <div class="triangle-partners"></div>
                        </div>
                        <div class="partner-container partner-10">
                            <img class="partners-10" src="img/onetravellerlogo.webp" alt="One Traveller Logo">
                        </div>
                    </div>
                    
                </div>

                <div class="triangle-partners-11">
                    <div class="logo-container">
                        <div class="full-tooltip">
                            <div class="tooltip-box">
                                <h3>Searles Leisure Resort</h3>
                                <p>Searles Leisure Resort, on the beautiful North Norfolk coast, is an award-winning UK holiday resort for families.</p>
                                <button class="green-btn">View Our Case Study<span class="icon-arrow-right2"></span></button>
                            </div>
                            <div class="triangle-partners"></div>
                        </div>
                        <div class="partner-container partner-11">
                            <img class="partners-11" src="img/searles_logo.webp" alt="Searles Logo">
                        </div>

                    </div>
                </div>
                

                <div class="triangle-partners-12">
                    <div class="logo-container">
                        <div class="full-tooltip">
                            <div class="tooltip-box">
                                <h3>Busseys</h3>
                                <p>One of the UK's leading Ford dealerships.</p>
                            </div>
                            <div class="triangle-partners"></div>
                        </div>
                        <div class="partner-container partner-12">
                            <img class="partners-12" src="img/busseys_logo.webp" alt="Busseys Logo">
                        </div>
                    </div>
                </div>
    
                <div class="triangle-partners-13">
                    <div class="logo-container">
                        <div class="full-tooltip">
                            <div class="tooltip-box">
                                <h3>Crane Garden Buildings</h3>
                                <p>Leading manufacturer and supplier of high-end garden rooms, summerhouses, workshops and sheds in the UK.</p>
                            </div>
                            <div class="triangle-partners"></div>
                        </div>
                        <div class="partner-container partner-13">
                            <img class="partners-13" src="img/crane_logo.webp" alt="Crane Logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="cookie-shadow">
            <div class="cookie-align">
                <div class="cookie-popup">
                    <div class="cookie-header">
                        <h3>Cookies Policy</h3>
                    </div>
                    <div class="cookie-header">
                        <p>
                        Our website uses cookies. This helps us provide you with a good experience on our website.
                        To see what cookies we use and what they do, and to opt-in on non-essential cookies click "change settings".
                        For a detailed explanation, click on "<a href="#" id="privacy-policy">Privacy Policy</a>" otherwise click "Accept Cookies" to enter.
                        </p>
                    </div>
                    <div class="cookie-buttons">
                        <div class="change-button">
                            <button id="change" class="consent-grey-btn">Change Settings</button>
                        </div>
                        <div class="accept-button">
                            <button id="accept" class="purple-btn">Accept Cookies</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--     Form Seems to have disappeared from page...
        <form id="form">
            <h1>Email Newsletter Sign-Up</h1>
            <h2>Your Name:</h2>
            <input type="text" id="name" name="user-name">
            <h2>Your Email:</h2>
            <input type="text" id="email" name="user-email"><br>
            <input type="checkbox"id="check" name="user-checkbox">
            <p>Please tick this box if you wish to receive marketing information from us. Please see our <a href="#">Privacy Policy</a>
            for more information on how we keep your data safe. </p>
            <button class="sub-btn"><a href='#'>Subscribe</a></button>
        </form> 
        -->
        <button id="fixed-consent">Manage Consent</button>
        <a href="#" class="btn-icon" id="live-chat"><span class="icon-chat"></span></a>

        </div>
        <?php include "php/menu.php" ?>
        <?php include "php/footer.php" ?>




        <script src="js/jquery-3.7.1.min.js"></script>
        <script src="js/slick.js"></script> 
        <script src="js/main.js"></script>
        </body>
    </html>