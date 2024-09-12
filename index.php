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
            <div class="f-container container">
                <div class="left-header container">
                    <a href="#"><img id="n-logo" class="f-line" src="img/netmatters-logo.webp" alt="Netmatters Logo"></a>
                </div>
                <div class="right-header container">
                    <a href="#" class="marg-left btn f-line blue-btn" id="support"><span class="icon-mouse"></span>Support</a>
                    <a href="#" class="marg-left btn f-line grey-btn" id="contact"><span class="icon-send"></span>Contact</a>
                    <div class="search-container">
                        <input type="text" placeholder="Search..." id="search-normal" class="marg-left">
                        <button class="grey-btn" id="search-icon"><span class="icon-search marg-left"></span></button>
                    </div>
                    <a href="#" class="f-line" id="phone"><span class="icon-phone_in_talk"></span></a>
                    <button id="hamburger-menu" class="f-line marg-left">
                        <span class="line"></span>
                    </button> 
                </div>
                <div class="mobile-search">
                    <input type="text" placeholder="Search..." id="search-mobile">
                    <span class="icon-search"></span>
                </div>
                
            </div>
            <div class="nav-background">
                <div class="nav-size container">
                    <a href="#" class="anchor-1">
                        <div class="top-btn btn-1 submenu_1">
                            <p>
                                <span class="icon-cogs"></span><br>
                                <small>Bespoke</small><br> Software
                            </p>
                        </div>
                    </a>
                    <div class="hover-submenu hover-submenu1 minor-fixes">
                        <div class="side-fixer">
                            <div class="container">
                                <div class="triangle triangle-1"></div>
                                <h2 class="white">Our Bespoke Software Services</h2>
                            </div>
                            <div class="hover-grid hover-grid1 container line-hover">
                                <p><a href="#"><span class="icon-cogs"></span><span class="underline">Bespoke CRM</span></a></p>
                                <p><a href="#"><span class="icon-briefcase"></span><span class="underline">Business Automation</span></a></p>
                                <p><a href="#"><span class="icon-shuffle"></span><span class="underline">Software Integrations</span></a></p>
                                <p><a href="#"><span class="icon-mobile"></span><span class="underline">Mobile App Development</span></a></p>
                                <p><a href="#"><span class="icon-folder-open"></span><span class="underline">Bespoke Databases</span></a></p>
                                <p><a href="#"><span class="icon-transfer"></span><span class="underline">Sharepoint Development</span></a></p>
                                <p><a href="#"><span class="icon-download3"></span><span class="underline">Operational Systems</span></a></p>
                                <p><a href="#"><span class="icon-group"></span><span class="underline">Business Central Implementation</span></a></p>
                                <p><a href="#"><span class="icon-display"></span><span class="underline">Internet of Things (IoT) Software</span></a></p>
                                <p><a href="#"><span class="icon-cloud"></span><span class="underline">Intranet Development</span></a></p>
                                <p><a href="#"><span class="icon-cloud-download"></span><span class="underline">Customer Portal Development</span></a></p>
                                <p><a href="#"><span class="icon-earth"></span><span class="underline">Reporting Hub</span></a></p>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="anchor-2">
                        <div class="top-btn btn-2 submenu_2">
                            <p>
                                <span class="icon-display"></span><br>
                                <small>IT</small><br> Support
                            </p>
                        </div>
                    </a>
                    <div class="hover-submenu hover-submenu2 minor-fixes">
                        <div class="side-fixer">
                            <div class="container">
                                <div class="triangle triangle-2"></div>
                                <h2 class="white">Our IT Support Services</h2>
                            </div>
                            <div class="hover-grid hover-grid2 container line-hover">
                                <p><a href="#" class="hover"><span class="icon-headphones"></span><span class="underline">Managed IT Support</span></a></p>
                                <p><a href="#"><span class="icon-briefcase"></span><span class="underline">Business IT Support</span></a></p>
                                <p><a href="#"><span class="icon-display"></span><span class="underline">Office 365 for Business</span></a></p>
                                <p><a href="#"><span class="icon-graduation-cap"></span><span class="underline">IT Consultancy</span></a></p>
                                <p><a href="#"><span class="icon-cloud"></span><span class="underline">Cloud Service Provider</span></a></p>
                                <p><a href="#"><span class="icon-drive"></span><span class="underline">Data Backup & Disaster Recovery</span></a></p>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="anchor-3">
                        <div class="top-btn btn-3 submenu_3">
                            <p>
                                <span class="icon-bar-graph"></span><br>
                                <small>Digital</small><br> Marketing
                            </p>
                        </div>
                    </a>
                    <div class="hover-submenu hover-submenu3 minor-fixes">
                        <div class="side-fixer">
                            <div class="container">
                                <div class="triangle triangle-3"></div>
                                <h2 class="white">Our Digital Marketing Services</h2>
                            </div>
                            <div class="hover-grid hover-grid3 container line-hover">
                                <p><a href="#"><span class="icon-search"></span><span class="underline">Search Engine Optimisation (SEO)</span></a></p>
                                <p><a href="#"><span class="icon-money"></span><span class="underline">Pay Per Click Advertising (PPC)</span></a></p>
                                <p><a href="#"><span class="icon-trending_up"></span><span class="underline">Conversion Rate Optimisation (CRO)</span></a></p>
                                <p><a href="#"><span class="icon-envelope"></span><span class="underline">Email Marketing</span></a></p>
                                <p><a href="#"><span class="icon-group"></span><span class="underline">Social Media Marketing</span></a></p>
                                <p><a href="#"><span class="icon-pencil"></span><span class="underline">Content Marketing</span></a></p>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="anchor-4">
                        <div class="top-btn btn-4 submenu_4">
                            <p>
                                <span class="icon-phone_in_talk"></span><br>
                                <small>Telecoms</small><br> Services
                            </p>
                        </div>
                    </a>
                    <div class="hover-submenu hover-submenu4 minor-fixes">
                        <div class="side-fixer">
                            <div class="container">
                                <div class="triangle triangle-4"></div>
                                <h2 class="white">Our Telecoms Services</h2>
                            </div>
                            <div class="hover-grid hover-grid4 container line-hover">
                                <p><a href="#"><span class="icon-ticket"></span><span class="underline">Business Mobile</span></a></p>
                                <p><a href="#"><span class="icon-call"></span><span class="underline">Hosted VoIP Provider</span></a></p>
                                <p><a href="#"><span class="icon-phone-square"></span><span class="underline">Business VoIP Systems</span></a></p>
                                <p><a href="#"><span class="icon-tachometer"></span><span class="underline">Business Broadband</span></a></p>
                                <p><a href="#"><span class="icon-handshake-o"></span><span class="underline">Leased Lines Provider</span></a></p>
                                <p><a href="#"><span class="icon-phone_in_talk"></span><span class="underline">3CX Systems</span></a></p>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="anchor-5">
                        <div class="top-btn btn-5 submenu_5">
                            <p>
                                <span class="icon-embed2"></span><br>
                                <small>Web</small><br> Design
                            </p>
                        </div>
                    </a>
                    <div class="hover-submenu hover-submenu5 minor-fixes">
                        <div class="side-fixer">
                            <div class="container">
                                <div class="triangle triangle-5"></div>
                                <h2 class="white">Our Web Design Services</h2>
                            </div>
                            <div class="hover-grid hover-grid5 container line-hover">
                                <p><a href="#"><span class="icon-pencil"></span><span class="underline">Bespoke Website Design</span></a></p>
                                <p><a href="#"><span class="icon-cart"></span><span class="underline">eCommerce Website Design</span></a></p>
                                <p><a href="#"><span class="icon-laptop"></span><span class="underline">Pay Monthly Websites</span></a></p>
                                <p><a href="#"><span class="icon-bullhorn"></span><span class="underline">Branding & Design</span></a></p>
                                <p><a href="#"><span class="icon-mobile"></span><span class="underline">Mobile App Development</span></a></p>
                                <p><a href="#"><span class="icon-cloud"></span><span class="underline">Web Hosting</span></a></p>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="anchor-6">
                        <div class="top-btn btn-6 submenu_6">
                            <p>
                                <span class="icon-security"></span><br>
                                <small>Cyber</small><br> Security
                            </p>
                        </div>
                    </a>
                    <div class="hover-submenu hover-submenu6 minor-fixes">
                        <div class="side-fixer">
                            <div class="container">
                                <div class="triangle triangle-6"></div>
                                <h2 class="white">Our Cyber Security Services</h2>
                            </div>
                            <div class="hover-grid hover-grid6 container line-hover">
                                <p class="hover">
                                    <a href="#">
                                        <span class="icon-clipboard"></span>
                                        <span>Cyber Security Assessment</span>
                                    </a>
                                </p>
                                <p class="hover">
                                    <a href="#">
                                        <span class="icon-clock"></span>
                                        <span>Security Management</span>
                                    </a>
                                </p>
                                <p class="hover"><a href="#"><span class="icon-flask"></span><span class="underline">Cyber Penetration Testing</span></a></p>
                                <p class="hover"><a href="#"><span class="icon-graduation-cap"></span><span class="underline">Cyber Essentials Certification</span></a></p>
                                <p class="hover"><a href="#"><span class="icon-security"></span><span class="underline">PCI Compliance</span></a></p>
                                <p class="hover"><a href="#"><span class="icon-lock"></span><span class="underline">Hacking Prevention</span></a></p>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="anchor-7">
                        <div class="top-btn btn-7 submenu_7">
                            <p>
                                <span class="icon-graduation-cap"></span><br>
                                <small>Developer</small><br> Course
                            </p>
                        </div>
                    </a>
                    <div class="hover-submenu hover-submenu7 minor-fixes">
                        <div class="side-fixer">
                            <div class="container">
                                <div class="triangle triangle-7"></div>
                                <h2 class="white">Our Developer Course Services</h2>
                            </div>
                            <div class="hover-grid hover-grid7 container line-hover">
                                <p class="centred">
                                    <a href="#" class="hover">
                                        <span class="icon-laptop"></span>
                                        <span class="underline">Train For A Career In Tech</span>
                                    </a>
                                </p>
                                <p class="centred">
                                    <a href="#" class="hover">
                                        <span class="icon-embed2"></span>
                                        <span class="underline">Skills Bootcamp</span>
                                    </a>
                                </p>
                                <p class="centred">
                                    <a href="#" class="hover">
                                        <span class="icon-help"></span>
                                        <span class="underline">Scion Scheme Frequently Asked Questions</span>
                                    </a>
                                </p>
                                <p class="centred">
                                    <a href="#" class="hover">
                                        <span class="icon-handshake-o"></span>
                                        <span class="underline">Scion Collaborators</span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
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
        <header class="sticky-header animation slideInDown">
            <div class="white-bg">
                <div class="f-container container">
                    <div class="left-header container">
                        <a href="#"><img id="n-logo-clone" class="f-line" src="img/netmatters-logo.webp" alt="Netmatters Logo"></a>
                    </div>
                    <div class="right-header container">
                        <a href="#" class="btn btn-styles f-line blue-btn marg-left" id="support-clone"><span class="icon-mouse"></span>Support</a>
                        <a href="#" class="btn btn-styles f-line grey-btn marg-left" id="contact-clone"><span class="icon-send"></span>Contact</a>
                        <div class="search-container">
                            <input type="text" placeholder="Search..." id="search-normal-clone" class="marg-left">
                            <button class="grey-btn" id="search-icon-clone"><span class="icon-search"></span></button>
                        </div>
                        <a href="#" class="f-line" id="phone-clone"><span class="icon-phone_in_talk"></span></a>
                        <button class="clone f-line marg-left" id="hamburger-menu-clone">
                            <span class="line"></span>
                        </button> 
                    </div>
                    <div class="mobile-search">
                        <input type="text" placeholder="Search..." id="search-mobile-clone">
                        <span class="icon-search"></span>
                    </div>
                    
                </div>
                <div class="nav-background">
                    <div class="nav-size container">
                        <a href="#" class="anchor-1">
                            <div class="top-btn btn-1 submenu_1">
                                <p>
                                    <span class="icon-cogs"></span><br>
                                    <small>Bespoke</small><br> Software
                                </p>
                            </div>
                        </a>
                        <div class="hover-submenu hover-submenu1 minor-fixes">
                            <div class="side-fixer">
                                <div class="container">
                                    <div class="triangle triangle-1"></div>
                                    <h2 class="white">Our Bespoke Software Services</h2>
                                </div>
                                <div class="hover-grid hover-grid1 container line-hover">
                                    <p><a href="#" class="hover"><span class="icon-cogs"></span><span class="underline">Bespoke CRM</span></a></p>
                                    <p><a href="#" class="hover"><span class="icon-briefcase"></span><span class="underline">Business Automation</span></a></p>
                                    <p><a href="#" class="hover"><span class="icon-shuffle"></span><span class="underline">Software Integrations</span></a></p>
                                    <p><a href="#" class="hover"><span class="icon-mobile"></span><span class="underline">Mobile App Development</span></a></p>
                                    <p><a href="#" class="hover"><span class="icon-folder-open"></span><span class="underline">Bespoke Databases</span></a></p>
                                    <p><a href="#" class="hover"><span class="icon-transfer"></span><span class="underline">Sharepoint Development</span></a></p>
                                    <p><a href="#" class="hover"><span class="icon-download3"></span><span class="underline">Operational Systems</span></a></p>
                                    <p><a href="#" class="hover"><span class="icon-group"></span><span class="underline">Business Central Implementation</span></a></p>
                                    <p><a href="#" class="hover"><span class="icon-display"></span><span class="underline">Internet of Things (IoT) Software</span></a></p>
                                    <p><a href="#" class="hover"><span class="icon-cloud"></span><span class="underline">Intranet Development</span></a></p>
                                    <p><a href="#" class="hover"><span class="icon-cloud-download"></span><span class="underline">Customer Portal Development</span></a></p>
                                    <p><a href="#" class="hover"><span class="icon-earth"></span><span class="underline">Reporting Hub</span></a></p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="anchor-2">
                            <div class="top-btn btn-2 submenu_2">
                                <p>
                                    <span class="icon-display"></span><br>
                                    <small>IT</small><br> Support
                                </p>
                            </div>
                        </a>
                        <div class="hover-submenu hover-submenu2 minor-fixes">
                            <div class="side-fixer">
                                <div class="container">
                                    <div class="triangle triangle-2"></div>
                                    <h2 class="white">Our IT Support Services</h2>
                                </div>
                                <div class="hover-grid hover-grid2 container line-hover">
                                    <p><a href="#" class="hover"><span class="icon-headphones"></span><span class="underline">Managed IT Support</span></a></p>
                                    <p><a href="#" class="hover"><span class="icon-briefcase"></span><span class="underline">Business IT Support</span></a></p>
                                    <p><a href="#" class="hover"><span class="icon-display"></span><span class="underline">Office 365 for Business</span></a></p>
                                    <p><a href="#" class="hover"><span class="icon-graduation-cap"></span><span class="underline">IT Consultancy</span></a></p>
                                    <p><a href="#" class="hover"><span class="icon-cloud"></span><span class="underline">Cloud Service Provider</span></a></p>
                                    <p><a href="#" class="hover"><span class="icon-drive"></span><span class="underline">Data Backup & Disaster Recovery</span></a></p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="anchor-3">
                            <div class="top-btn btn-3 submenu_3">
                                <p>
                                    <span class="icon-bar-graph"></span><br>
                                    <small>Digital</small><br> Marketing
                                </p>
                            </div>
                        </a>
                        <div class="hover-submenu hover-submenu3 minor-fixes">
                            <div class="side-fixer">
                                <div class="container">
                                    <div class="triangle triangle-3"></div>
                                    <h2 class="white">Our Digital Marketing Services</h2>
                                </div>
                                <div class="hover-grid hover-grid3 container line-hover">
                                    <p><a href="#" class="hover"><span class="icon-search"></span><span class="underline">Search Engine Optimisation (SEO)</span></a></p>
                                    <p><a href="#" class="hover"><span class="icon-money"></span><span class="underline">Pay Per Click Advertising (PPC)</span></a></p>
                                    <p><a href="#" class="hover"><span class="icon-trending_up"></span><span class="underline">Conversion Rate Optimisation (CRO)</span></a></p>
                                    <p><a href="#" class="hover"><span class="icon-envelope"></span><span class="underline">Email Marketing</span></a></p>
                                    <p><a href="#" class="hover"><span class="icon-group"></span><span class="underline">Social Media Marketing</span></a></p>
                                    <p><a href="#" class="hover"><span class="icon-pencil"></span><span class="underline">Content Marketing</span></a></p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="anchor-4">
                            <div class="top-btn btn-4 submenu_4">
                                <p>
                                    <span class="icon-phone_in_talk"></span><br>
                                    <small>Telecoms</small><br> Services
                                </p>
                            </div>
                        </a>
                        <div class="hover-submenu hover-submenu4 minor-fixes">
                            <div class="side-fixer">
                                <div class="container">
                                    <div class="triangle triangle-4"></div>
                                    <h2 class="white">Our Telecoms Services</h2>
                                </div>
                                <div class="hover-grid hover-grid4 container line-hover">
                                    <p><a href="#" class="hover"><span class="icon-ticket"></span><span class="underline">Business Mobile</span></a></p>
                                    <p><a href="#" class="hover"><span class="icon-call"></span><span class="underline">Hosted VoIP Provider</span></a></p>
                                    <p><a href="#" class="hover"><span class="icon-phone-square"></span><span class="underline">Business VoIP Systems</span></a></p>
                                    <p><a href="#" class="hover"><span class="icon-tachometer"></span><span class="underline">Business Broadband</span></a></p>
                                    <p><a href="#" class="hover"><span class="icon-handshake-o"></span><span class="underline">Leased Lines Provider</span></a></p>
                                    <p><a href="#" class="hover"><span class="icon-phone_in_talk"></span><span class="underline">3CX Systems</span></a></p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="anchor-5">
                            <div class="top-btn btn-5 submenu_5">
                                <p>
                                    <span class="icon-embed2"></span><br>
                                    <small>Web</small><br> Design
                                </p>
                            </div>
                        </a>
                        <div class="hover-submenu hover-submenu5 minor-fixes">
                            <div class="side-fixer">
                                <div class="container">
                                    <div class="triangle triangle-5"></div>
                                    <h2 class="white">Our Web Design Services</h2>
                                </div>
                                <div class="hover-grid hover-grid5 container line-hover">
                                    <p><a href="#" class="hover"><span class="icon-pencil"></span><span class="underline">Bespoke Website Design</span></a></p>
                                    <p><a href="#" class="hover"><span class="icon-cart"></span><span class="underline">eCommerce Website Design</span></a></p>
                                    <p><a href="#" class="hover"><span class="icon-laptop"></span><span class="underline">Pay Monthly Websites</span></a></p>
                                    <p><a href="#" class="hover"><span class="icon-bullhorn"></span><span class="underline">Branding & Design</span></a></p>
                                    <p><a href="#" class="hover"><span class="icon-mobile"></span><span class="underline">Mobile App Development</span></a></p>
                                    <p><a href="#" class="hover"><span class="icon-cloud"></span><span class="underline">Web Hosting</span></a></p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="anchor-6">
                            <div class="top-btn btn-6 submenu_6">
                                <p>
                                    <span class="icon-security"></span><br>
                                    <small>Cyber</small><br> Security
                                </p>
                            </div>
                        </a>
                        <div class="hover-submenu hover-submenu6 minor-fixes">
                            <div class="side-fixer">
                                <div class="container">
                                    <div class="triangle triangle-6"></div>
                                    <h2 class="white">Our Cyber Security Services</h2>
                                </div>
                                <div class="hover-grid hover-grid6 container line-hover">
                                    <p>
                                        <a href="#" class="hover">
                                            <span class="icon-clipboard"></span>
                                            <span class="underline">Cyber Security Assessment</span>
                                        </a>
                                    </p>
                                    <p>
                                        <a href="#" class="hover">
                                            <span class="icon-clock"></span>
                                            <span class="underline">Cyber Security Management</span>
                                        </a>
                                    </p>
                                    <p>
                                        <a href="#" class="hover">
                                            <span class="icon-flask"></span>
                                            <span class="underline">Cyber Penetration Testing</span>
                                        </a>
                                    </p>
                                    <p>
                                        <a href="#" class="hover">
                                            <span class="icon-graduation-cap"></span>
                                            <span class="underline">Cyber Essentials Certification</span>
                                        </a>
                                    </p>
                                    <p>
                                        <a href="#" class="hover">
                                            <span class="icon-security"></span>
                                            <span class="underline">PCI Compliance</span>
                                        </a>
                                    </p>
                                    <p>
                                        <a href="#" class="hover">
                                            <span class="icon-lock"></span>
                                            <span class="underline">Hacking Prevention</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="anchor-7">
                            <div class="top-btn btn-7 submenu_7">
                                <p>
                                    <span class="icon-graduation-cap"></span><br>
                                    <small>Developer</small><br> Course
                                </p>
                            </div>
                        </a>
                        <div class="hover-submenu hover-submenu7 minor-fixes">
                            <div class="side-fixer">
                                <div class="container">
                                    <div class="triangle triangle-7"></div>
                                    <h2 class="white">Our Developer Course Services</h2>
                                </div>
                                <div class="hover-grid hover-grid7 container line-hover">
                                    <p>
                                        <a href="#" class="hover">
                                            <span class="icon-laptop"></span>
                                            <span class="underline">Train For A Career In Tech</span>
                                        </a>
                                    </p>
                                    <p>
                                        <a href="#" class="hover">
                                            <span class="icon-embed2"></span>
                                            <span class="underline">Skills Bootcamp</span>
                                        </a>
                                    </p>
                                    <p class="hover-group">
                                        <a href="#" class="hover">
                                            <span class="icon-help"></span>
                                            <span class="underline">Scion Scheme Frequently Asked Questions</span>
                                        </a>
                                    </p>
                                    <p>
                                        <a href="#" class="hover">
                                            <span class="icon-handshake-o"></span>
                                            <span class="underline">Scion Collaborators</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </header>
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
    <div class="scroll-container" id="scroll1">
        <div class="content">
            <div id="pop-up-menu">
                <div class="menu-sections menu-section-1">
                    <div class="menu-title sub-menu sub-contact">
                        <a href="#">Contact Us</a>
                    </div>
                    <div class="slide-popup-hidden">
                        <div class="menu-title">
                            <a href="#">Services</a>
                        </div>
                        <div>
                            <a href="#">
                                <p class="flex">
                                    <span class="icon-angle-double-right"></span>
                                    Bespoke Software
                                </p>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <p class="flex">
                                    <span class="icon-angle-double-right"></span>
                                    IT Support
                                </p>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <p class="flex">
                                    <span class="icon-angle-double-right"></span>
                                    Digital Marketing
                                </p>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <p class="flex">
                                    <span class="icon-angle-double-right"></span>
                                    Telecoms Services
                                </p>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <p class="flex">
                                    <span class="icon-angle-double-right"></span>
                                    Web Design
                                </p>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <p class="flex">
                                    <span class="icon-angle-double-right"></span>
                                    Cyber Security
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="sub-menu-1">
                        <div class="menu-title sub-menu">
                            <a href="#">
                                <span class="icon-angle-double-right slide-popup-hidden menu-title"></span>
                                <span class="icon-cogs"></span><br>
                                <small>Bespoke</small><br>Software
                            </a>
                        </div>
                        <div class="sub-menu">
                            <a href="#"><p>Bespoke CRM</p></a>
                            <a href="#"><p>Business Automation</p></a>
                            <a href="#"><p>Software Integrations</p></a>
                            <a href="#"><p>Mobile App Development</p></a>
                            <a href="#"><p>Bespoke Databases</p></a>
                            <a href="#"><p>Sharepoint Development</p></a>
                            <a href="#"><p>Operational Systems</p></a>
                            <a href="#"><p>Business Central Implementation</p></a>
                            <a href="#"><p>Internet of Things (IoT) Software</p></a>
                            <a href="#"><p>Intranet Development</p></a>
                            <a href="#"><p>Customer Portal Development</p></a>
                            <a href="#"><p>Reporting Hub</p></a>
                        </div>
                    </div>
                    <div class="sub-menu-2">
                        <div class="menu-title sub-menu">
                            <a href="#">
                                <span class="icon-angle-double-right slide-popup-hidden menu-title"></span>
                                <span class="icon-display"></span><br>
                                <small>IT</small><br>SUPPORT
                            </a> 
                        </div>
                        <div class="sub-menu">                      
                            <a href="#"><p>Managed IT Support</p></a>
                            <a href="#"><p>Business IT Support</p></a>
                            <a href="#"><p>Office 365 for Business</p></a>
                            <a href="#"><p>IT Consultancy</p></a>
                            <a href="#"><p>Cloud Service Provider</p></a>
                            <a href="#"><p>Data Backup & Disaster Recovery</p></a>
                        </div>
                    </div>
                    <div class="sub-menu-3">
                        <div class="menu-title sub-menu">
                            <a href="#">
                                <span class="icon-angle-double-right slide-popup-hidden menu-title"></span>
                                <span class="icon-bar-graph"></span><br>
                                <small>DIGITAL</small><br>MARKETING
                            </a>
                        </div>
                        <div class="sub-menu">
                            <a href="#"><p>Search Engine Optimisation (SEO)</p></a>
                            <a href="#"><p>Pay Per Click Advertising (PPC)</p></a>
                            <a href="#"><p>Conversion Rate Optimisation (CRO)</p></a>
                            <a href="#"><p>Email Marketing</p></a>
                            <a href="#"><p>Social Media Marketing</p></a>
                            <a href="#"><p>Content Marketing</p></a>
                        </div>
                    </div>
                    <div class="sub-menu-4">
                        <div class="menu-title sub-menu">
                            <a href="#">
                                <span class="icon-angle-double-right slide-popup-hidden menu-title"></span>
                                <span class="icon-phone_in_talk"></span><br>
                                <small>TELECOMS</small><br>SERVICES
                            </a>
                        </div>
                        <div class="sub-menu">                       
                            <a href="#"><p>Business Mobile</p></a>
                            <a href="#"><p>Hosted VoIP Provider</p></a>
                            <a href="#"><p>Business VoIP Systems</p></a>
                            <a href="#"><p>Business Broadband</p></a>
                            <a href="#"><p>Leased Lines Provider</p></a>
                            <a href="#"><p>3CX Systems</p></a>
                        </div>
                    </div>
                    <div class="menu-title sub-menu">
                        <a href="#">
                            <span class="icon-angle-double-right slide-popup-hidden menu-title"></span>
                            <span class="icon-embed2"></span><br>
                            <small>WEB</small><br>DESIGN
                        </a>
                    </div>
                    <div class="sub-menu">               
                        <a href="#"><p>Bespoke Website Design</p></a>
                        <a href="#"><p>eCommerce Website Design</p></a>
                        <a href="#"><p>Pay Monthly Websites</p></a>
                        <a href="#"><p>Branding & Design</p></a>
                        <a href="#"><p>Mobile App Development</p></a>
                        <a href="#"><p>Web Hosting</p></a>
                    </div>
                    <div class="menu-title sub-menu">
                        <a href="#">
                            <span class="icon-angle-double-right slide-popup-hidden menu-title"></span>
                            <span class="icon-security"></span><br>
                            <small>CYBER</small><br>SECURITY
                        </a>
                    </div>
                    <div class="sub-menu">               
                        <a href="#"><p>Cyber Security Assessment</p></a>
                        <a href="#"><p>Cyber Security Management</p></a>
                        <a href="#"><p>Cyber Penetration Testing</p></a>
                        <a href="#"><p>Cyber Essentials Certification</p></a>
                        <a href="#"><p>PCI Compliance</p></a>
                        <a href="#"><p>Hacking Prevention</p></a>
                    </div>
                    <div class="menu-title sub-menu">
                        <a href="#">
                            <span class="icon-angle-double-right slide-popup-hidden menu-title"></span>
                            <span class="icon-graduation-cap"></span><br>
                            <small>DEVELOPER</small><br>COURSE
                        </a>
                    </div>
                    <div class="sub-menu">                        
                        <a href="#"><p>Train For A Career In Tech</p></a>
                        <a href="#"><p>Skills Bootcamp</p></a>
                        <a href="#"><p>Scion Scheme Frequently Asked Questions</p></a>
                        <a href="#"><p>Scion Collaborators</p></a>
                    </div>
                </div>
                <div class="menu-sections menu-section-2">
                    <div class="menu-title">
                        <a href="#">Our Work</a>
                    </div>
                    <a href="#"><p> <span class="icon-angle-double-right"></span> CASE STUDIES</p></a>
                    <a href="#"><p> <span class="icon-angle-double-right"></span> OUR DIGITAL MARKETING CLIENTS</p></a>
                    <a href="#"><p> <span class="icon-angle-double-right"></span> OUR WEBSITE CLIENTS</p></a>
                    <a href="#"><p> <span class="icon-angle-double-right"></span> OUR IT CLIENTS</p></a>
                    <a href="#"><p> <span class="icon-angle-double-right"></span> OUR BESPOKE SOFTWARE CLIENTS</p></a>
                    <a href="#"><p> <span class="icon-angle-double-right"></span> OUR TELECOMS CLIENTS</p></a>
                </div>
                <div class="menu-sections menu-section-3">
                    <div class="menu-title">
                        <a href="#">Our Knowledge</a>
                    </div>
                    <a href="#"><p> <span class="icon-angle-double-right"></span> TECHNOLOGIES</p></a>
                    <a href="#"><p> <span class="icon-angle-double-right"></span> INDUSTRIES</p></a>
                    <a href="#"><p> <span class="icon-angle-double-right"></span> NEWS</p></a>
                    <a href="#"><p> <span class="icon-angle-double-right"></span> INSIGHTS</p></a>
                </div>
                <div class="menu-sections menu-section-4">
                    <div class="menu-title">
                        <a href="#">Training</a>
                    </div>
                    <a href="#"><p><span class="icon-angle-double-right"></span> TRAIN FOR A CAREER IN TECH</p></a>
                    <a href="#"><p><span class="icon-angle-double-right"></span> SKILLS BOOTCAMP</p></a>
                    <a href="#"><p><span class="icon-angle-double-right"></span> SCS FREQUENTLY ASKED QUESTIONS</p></a>
                    <a href="#"><p><span class="icon-angle-double-right"></span> SCION COLLABORATORS</p></a>
                </div>
                <div class="menu-sections menu-section-5">
                    <div class="menu-title">
                        <a href="#">Our Company</a>
                    </div>
                    <a href="#"><p><span class="icon-angle-double-right"></span> Why Choose Us?</p></a>
                    <a href="#"><p><span class="icon-angle-double-right"></span> Our Culture</p></a>
                    <a href="#"><p><span class="icon-angle-double-right"></span> OUR TEAM</p></a>
                    <a href="#"><p><span class="icon-angle-double-right"></span> OUR CAREERS</p></a>
                    <a href="#"><p><span class="icon-angle-double-right"></span> OUR BENEFITS</p></a>
                </div>
                <div class="menu-sections menu-section-6">
                    <div class="menu-title">
                        <a href="#">Contact Us</a>
                    </div>
                    <a href="#"><p><span class="icon-angle-double-right"></span> CAMBRIDGE OFFICE</p></a>
                    <a href="#"><p><span class="icon-angle-double-right"></span> WYMONDHAM OFFICE</p></a>
                    <a href="#"><p><span class="icon-angle-double-right"></span> GREAT YARMOUTH OFFICE</p></a>
                </div>
                <div class="menu-sections menu-section-7">
                    <div class="menu-title">
                        <a href="#">Covid Risk Assessment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-contents container">
            <div class="footer-logos">
                <div class="sizing-div">
                    <img id="in-logo" class="f-line" src="img/netmatters-logo-inverted.webp" alt="Netmatters Logo">
                    <h4>Follow Us On:</h4>
                    <div class="social">
                        <a href="#" class="btn black-btn social-btn" id="facebook"><span class="icon-facebook"></span></a>
                        <a href="#" class="btn black-btn social-btn" id="linked_in"><span class="icon-linkedin2"></span></a>
                        <a href="#" class="btn black-btn social-btn" id="twitter"><span class="icon-twitter"></span></a>
                        <a href="#" class="btn black-btn social-btn" id="instagram"><span class="icon-instagram"></span></a>
                    </div>
                </div>
            </div>
            <div class="marginalised">
                <div class="footer-1 footer-list">
                    <h4>About Netmatters</h4>
                    <ul>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Our Careers</a></li>
                        <li><a href="#">Our Team</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Cookie Policy</a></li>
                        <li><a href="#">Data Retention & Disposal Policy</a></li>
                        <li><a href="#">CCTV Policy</a></li>
                        <li><a href="#">Environmental Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
    
                <div class="footer-2 footer-list">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#">Bespoke Software</a></li>
                        <li><a href="#">IT Support</a></li>
                        <li><a href="#">Digital Marketing</a></li>
                        <li><a href="#">Telecoms Services</a></li>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Cyber Security</a></li>
                        <li><a href="#">Developer Training</a></li>
                    </ul>
                </div>
                
                <div class="footer-3 footer-list">
                    <h4>Our Industries</h4>
                    <ul>
                        <li><a href="#">Financial Services</a></li>
                        <li><a href="#">Construction</a></li>
                        <li><a href="#">Retail & E-Commerce</a></li>
                        <li><a href="#">Non-Profits</a></li>
                        <li><a href="#">SME's</a></li>
                        <li><a href="#">Healthcare</a></li>
                        <li><a href="#">Education & Training</a></li>
                        <li><a href="#">Travel & Leisure</a></li>
                    </ul>
                </div>
                <div class="footer-4 footer-list">
                    <h4>Locations</h4>
                    <ul>
                        <li><a href="#">Cambridge Office</a></li>
                        <li><a href="#">Wymondham Office</a></li>
                        <li><a href="#">Great Yarmouth Office</a></li>
                    </ul>
                </div>
            </div>
        </div>
    
    
        
        
    </footer>
    <div class="footer-background">
        <div class="footer-container container">
            <div class="copyright">&copy; Copyright Netmatters 2024. <br class="breakpoint-br">All rights reserved.
                <p id="sitemap-lg"><i>-</i> Sitemap</p>
            </div>
        </div>
    </div>
    <?php include "php/footer.php"; ?>




    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/slick.js"></script> 
    <script src="js/main.js"></script>
    </body>
</html>