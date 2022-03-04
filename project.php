<?php 
$page='project.php';
require('inc/header.php'); 
require('inc/nav.php');  
?>

<main>
    <!-- Header Slider -->
        <div class="header pos-re slider-fade project ">
            <div class="owl-carousel owl-theme project-slider">
                <div class="item bg-img" data-overlay-dark="3" data-background="images/projects/KMCT-Medical-College.jpg">
                    <div class="container caption">
                        <h4><span>1/3</span>Hospital</h4>
                        <h1>MKCT Medical College</h1>
                    </div>
                </div>
                <div class="item bg-img" data-overlay-dark="3" data-background="images/projects/ul-cyber-park/cyber-park.jpg">
                    <div class="container caption">
                        <h4><span>2/3</span>Commercial</h4>
                        <h1>UL Cyber park</h1>
                    </div>
                </div>
                <div class="item bg-img" data-overlay-dark="3" data-background="images/projects/nesto/nesto.jpg ">
                    <div class="container caption">
                        <h4><span>3/3</span>Residential</h4>
                        <h1>M Space Mall</h1>
                    </div>
                </div>
            </div>
            <div class="scroll-down"><i class="fa-solid fa-arrow-down-long"></i></div>
        </div>


       
    
    <!-- Filter portfolio -->

    <section class="filter-portfolio scroll-to pt pb">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="filtering col-sm-12 text-right">
                    <span data-filter="*" class="active">All</span>
                    <span data-filter=".commercial" class="">Commercial</span>
                    <span data-filter=".residential" class="">Residential</span>
                    <span data-filter=".education" class="">Education</span>
                    <span data-filter=".healthcare" class="">Health Care</span>
                </div>
                <div class="col-12  w-100">
                    <div class="grid form-row gallery text-left">
                        <div class="col-sm-3 mb-2 grid-item residential">
                            <a href="project-details.php">
                                <div data-wow-delay="0.2s" class="portfolio-wrapper wow fadeInUp">
                                    <div class="portfolio-image">
                                        <img src="images/projects/ferris-KOTTAKKAL.jpg" alt="..." />
                                    </div>
                                    <div class="portfolio-content">
                                        <h4>HOME STEAD FERRIS</h4>
                                        <p>Residential</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 mb-2 grid-item healthcare">
                            <a href="project-details.php">
                                <div data-wow-delay="0.3s" class="portfolio-wrapper wow fadeInUp">
                                    <div class="portfolio-image">
                                        <img src="images/projects/PT-APARTMENT-VIEW_1.jpg" alt="..." />
                                    </div>
                                    <div class="portfolio-overlay">
                                        <div class="portfolio-content">
                                            <h4>PT LIVE HI PROJECT
                                            </h4>
                                            <p>Residential</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 mb-2 grid-item commercial">
                           <a href="project-details.php">
                            <div data-wow-delay="0.4s" class="portfolio-wrapper wow fadeInUp">
                                <div class="portfolio-image">
                                    <img src="images/projects/SAROVARAM (1).jpg" alt="..." />
                                </div>
                                <div class="portfolio-overlay">
                                    <div class="portfolio-content">
                                        <h4>Sarovaram</h4>
                                        <p>Commercial</p>
                                    </div>
                                </div>
                            </div>
                           </a>
                        </div>
                        <div class="col-sm-3 mb-2 grid-item healthcare">
                            <a href="project-details.php">
                                <div data-wow-delay="0.5s" class="portfolio-wrapper wow fadeInUp">
                                    <div class="portfolio-image">
                                        <img src="images/projects/24 WELCARE HOSPITAL.jpg" alt="..." />
                                    </div>
                                    <div class="portfolio-overlay">
                                        <div class="portfolio-content">
                                            <h4>WELCARE HOSPITAL</h4>
                                            <p>Health Care</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 mb-2 grid-item education">
                            <a href="project-details.php">
                                <div data-wow-delay="0.2s" class="portfolio-wrapper wow fadeInUp">
                                    <div class="portfolio-image">
                                        <img src="images/projects/SREEROSH.jpg" alt="..." />
                                    </div>
                                    <div class="portfolio-overlay">
                                        <div class="portfolio-content">
                                            <h4>SREEROSH</h4>
                                            <p>Residential</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 mb-2 grid-item residential">
                            <a href="project-details.php">
                                <div data-wow-delay="0.3s" class="portfolio-wrapper wow fadeInUp">
                                    <div class="portfolio-image">
                                        <img src="images/projects/pvs-iris.jpg" alt="..." />
                                    </div>
                                    <div class="portfolio-overlay">
                                        <div class="portfolio-content">
                                            <h4>PVS IRIS</h4>
                                            <p>Residential</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 mb-2 grid-item grid-item healthcare">
                            <a href="project-details.php">
                                <div data-wow-delay="0.4s" class="portfolio-wrapper wow fadeInUp">
                                    <div class="portfolio-image">
                                        <img src="images/projects/PK-steels.jpg" alt="..." />
                                    </div>
                                    <div class="portfolio-overlay">
                                        <div class="portfolio-content">
                                            <h4>PK Steels</h4>
                                            <p>Health Care</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 mb-2 grid-item grid-item residential">
                            <a href="project-details.php">
                                <div data-wow-delay="0.5s" class="portfolio-wrapper wow fadeInUp">
                                    <div class="portfolio-image">
                                        <img src="images/projects/bayheights.webp" alt="..." />
                                    </div>
                                    <div class="portfolio-overlay">
                                        <div class="portfolio-content">
                                            <h4>Bay Heights</h4>
                                            <p>Residential</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 mb-2 grid-item grid-item residential">
                            <a href="project-details.php">
                                <div data-wow-delay="0.2s" class="portfolio-wrapper wow fadeInUp">
                                    <div class="portfolio-image">
                                        <img src="images/projects/Grand hi street mall view.jpg" alt="..." />
                                    </div>
                                    <div class="portfolio-overlay">
                                        <div class="portfolio-content">
                                            <h4>Grand hi street mall</h4>
                                            <p>Residential</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 mb-2 grid-item grid-item residential">
                            <a href="project-details.php">
                                <div data-wow-delay="0.2s" class="portfolio-wrapper wow fadeInUp">
                                    <div class="portfolio-image">
                                        <img src="images/projects/KMCT engineering college.jpg" alt="..." />
                                    </div>
                                    <div class="portfolio-overlay">
                                        <div class="portfolio-content">
                                            <h4>KMCT engineering college</h4>
                                            <p>Education</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                  
                    
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </section>

    <!-- Inner-statistics -->

<section class="inner-stats">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 p-0">
                <img src="images/stats-b.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-sm continue-cta-p-t">
                <span class="small-heading">Continue to</span>
                <h2>Services</h2>
            </div>
            <div class="col-sm continue-cta-p-t">
                <svg class="continue-icon cta-icon-end" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="19" cy="19" r="18.5" stroke="#319CDD"/>
                    <path d="M28.7071 19.7071C29.0976 19.3166 29.0976 18.6834 28.7071 18.2929L22.3431 11.9289C21.9526 11.5384 21.3195 11.5384 20.9289 11.9289C20.5384 12.3195 20.5384 12.9526 20.9289 13.3431L26.5858 19L20.9289 24.6569C20.5384 25.0474 20.5384 25.6805 20.9289 26.0711C21.3195 26.4616 21.9526 26.4616 22.3431 26.0711L28.7071 19.7071ZM10 20H28V18H10V20Z" fill="#319CDD"/>
                    </svg>
                    
            </div>
        </div>
        <div class="stats-counter">
            <div class="count-box">
                <svg  viewBox="0 0 50 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_218_3938)">
                    <path d="M49.9999 21.5218C49.844 21.7164 49.6686 21.8948 49.4762 22.0545C49.0564 22.3461 48.5381 22.2316 47.9793 21.7615C45.9708 20.0749 43.9637 18.3882 41.9579 16.7016L25.3097 2.72025C25.2233 2.64835 25.1315 2.58709 25.0073 2.4859C24.8832 2.58177 24.7536 2.67231 24.6335 2.77351C17.1143 9.09131 9.59237 15.4056 2.06778 21.7162C1.77305 21.956 1.4223 22.1194 1.04735 22.1916C0.630263 22.2675 0.311714 21.9945 0.120045 21.6204C0.0286457 21.4576 -0.012039 21.2719 0.00308763 21.0864C0.0182142 20.9009 0.0884795 20.724 0.205082 20.5778C0.323556 20.4257 0.459434 20.2876 0.610016 20.1663C8.42436 13.5973 16.2392 7.02828 24.0544 0.459265C24.7954 -0.163904 25.2206 -0.153252 25.9819 0.487228C28.2207 2.3736 30.4614 4.25909 32.7038 6.14368C32.7996 6.22491 32.9036 6.29548 33.0574 6.41C33.0709 6.22225 33.0898 6.08776 33.0898 5.95327C33.0898 4.7815 33.0898 3.60973 33.0898 2.43663C33.0898 1.56712 33.5258 1.13836 34.414 1.1317C35.959 1.12194 37.5045 1.12194 39.0505 1.1317C39.9778 1.13836 40.4205 1.58709 40.4219 2.50454C40.4219 5.73223 40.4192 8.95904 40.4138 12.185C40.4059 12.3259 40.4337 12.4665 40.4948 12.5941C40.5558 12.7217 40.6481 12.8324 40.7634 12.916C43.615 15.3048 46.4603 17.7016 49.2994 20.1064C49.5693 20.3394 49.7664 20.6643 49.9972 20.9466L49.9999 21.5218ZM35.2468 3.31013C35.2468 4.56179 35.321 5.77085 35.2238 6.96525C35.1442 7.95194 35.4479 8.62038 36.278 9.16765C36.9529 9.61639 37.5455 10.1956 38.2379 10.7655V3.3088L35.2468 3.31013Z" fill="#319CDD"/>
                    <path d="M42.1224 22.992V23.6498C42.1224 29.8948 42.1224 36.139 42.1224 42.3822C42.1274 42.6045 42.117 42.827 42.0914 43.048C42.0654 43.2812 41.9599 43.4989 41.7922 43.6654C41.6245 43.8318 41.4044 43.9371 41.1681 43.9641C40.9742 43.9867 40.7789 43.996 40.5837 43.992H9.38884C9.27545 43.992 9.16072 43.992 9.04734 43.992C8.33061 43.9508 7.92027 43.5486 7.87303 42.8362C7.86223 42.6765 7.87303 42.5153 7.87303 42.3542V22.992C7.35471 23.4235 6.94168 23.791 6.49625 24.1292C6.28768 24.3018 6.01869 24.3867 5.74726 24.3655C5.47584 24.3444 5.22372 24.2188 5.04524 24.016C4.6754 23.6019 4.69294 23.0227 5.09653 22.5753C5.19633 22.4697 5.30369 22.3714 5.41778 22.281L13.6164 15.3662C17.0799 12.4457 20.5443 9.52688 24.0097 6.60988C24.8128 5.93212 25.2056 5.93212 26.0074 6.60988C32.2299 11.8536 38.4506 17.0995 44.6695 22.3476C44.8561 22.5005 45.0138 22.6849 45.1351 22.8922C45.3511 23.285 45.2175 23.8243 44.8719 24.1199C44.694 24.2764 44.4665 24.3669 44.2283 24.3759C43.9901 24.3849 43.7562 24.3118 43.5667 24.1691C43.0943 23.8243 42.6637 23.4354 42.1224 22.992ZM39.9776 41.8402V41.3689C39.9776 34.7697 39.9731 28.17 39.9641 21.5699C39.9482 21.3117 39.8328 21.0692 39.6415 20.8922C35.7514 17.5979 31.8524 14.3134 27.9443 11.0386C26.9698 10.2184 25.9925 9.40083 25.0247 8.58858C24.968 8.61914 24.9135 8.65339 24.8614 8.69111C20.0022 12.7746 15.1479 16.858 10.2986 20.9414C10.1305 21.1206 10.0383 21.3564 10.0408 21.6006C10.0273 28.1838 10.0237 34.7674 10.03 41.3516C10.03 41.5073 10.0462 41.6618 10.0556 41.8256H18.5417V41.2224C18.5417 37.399 18.5417 33.577 18.5417 29.7564C18.5417 28.5753 18.8576 28.2597 20.0346 28.2597H29.9474C31.1338 28.2597 31.4605 28.5766 31.4605 29.7377C31.4605 33.5753 31.4605 37.4133 31.4605 41.2517V41.8362L39.9776 41.8402ZM20.7122 41.8309H29.2711V30.4195H20.7122V41.8309Z" fill="#319CDD"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_218_3938">
                    <rect width="50" height="44" fill="white"/>
                    </clipPath>
                    </defs>
                 </svg>
    
                 <div class="count-content">
                    <p>Square Ft</p>
                    <h2 class="counter">1,000</h2>
                 </div>
            </div>
             <div class="count-box">
                <svg  viewBox="0 0 57 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.03192 30.7919C2.03192 26.2238 2.0867 21.6558 2.01001 17.0894C1.96932 14.6389 2.89427 12.7205 4.60956 11.1161C6.83663 9.04478 9.52539 7.8259 12.391 7.04837C14.2691 6.53851 16.2175 6.27402 18.1316 5.89003C18.3871 5.85446 18.6355 5.77754 18.8672 5.66219C22.3275 3.65143 26.1008 2.69067 30.0213 2.27959C35.2313 1.73309 40.3851 2.05812 45.4136 3.67215C47.7392 4.41941 49.935 5.44709 51.8412 7.03084C53.9118 8.75321 55.0261 10.8659 54.9995 13.7068C54.9181 22.7356 54.9181 31.7643 54.9995 40.793C55.0198 43.4348 54.0307 45.4662 52.1323 47.1249C49.4451 49.4702 46.2211 50.6493 42.8391 51.4268C41.5479 51.7263 40.2207 51.8745 38.9123 52.1055C38.6321 52.1453 38.3603 52.232 38.1079 52.3621C34.6366 54.3505 30.8617 55.3145 26.9444 55.7208C21.9472 56.2418 16.9969 55.955 12.1515 54.4939C9.65998 53.7419 7.29988 52.7062 5.25436 51.038C3.1165 49.3045 1.92863 47.1615 1.99906 44.2569C2.11487 39.7686 2.03192 35.2786 2.03192 30.7919ZM23.2837 24.8185C24.1883 24.75 25.755 24.6895 27.3059 24.4999C28.6499 24.3284 29.9826 24.0752 31.2968 23.7415C34.02 23.0547 36.6446 22.0988 38.8091 20.1948C41.5322 17.8048 41.5385 15.0962 38.8529 12.6823C37.3817 11.3646 35.6508 10.5011 33.8103 9.87649C26.7472 7.48653 19.6309 7.43714 12.4959 9.50684C10.2547 10.1569 8.1278 11.1002 6.34677 12.6935C3.70809 15.0516 3.66427 17.8956 6.38902 20.131C7.6558 21.1459 9.05338 21.979 10.5427 22.607C14.3958 24.2625 18.4806 24.7628 23.2837 24.8185ZM4.38419 21.651C4.38419 22.9544 4.44054 24.1717 4.37167 25.3826C4.26525 27.226 5.06656 28.6011 6.37181 29.7482C7.832 31.0324 9.52852 31.8992 11.3408 32.5254C17.9141 34.7974 24.5749 34.9552 31.2921 33.322C34.0482 32.6528 36.6743 31.6443 38.8701 29.7307C39.7356 28.9771 40.5916 28.1071 40.6887 26.9376C40.8342 25.1962 40.7262 23.4324 40.7262 21.8853C39.3177 22.7281 37.8512 23.7558 36.2674 24.5142C32.4847 26.3258 28.4249 27.0364 24.2807 27.148C17.18 27.3423 10.3423 26.3879 4.38419 21.651ZM4.38419 31.1456C4.38419 32.5795 4.42802 33.8399 4.37324 35.1002C4.30594 36.6186 4.79893 37.941 5.91951 38.8508C7.18877 39.8801 8.53784 40.9317 10.0231 41.5419C17.551 44.6409 25.2416 44.711 32.9886 42.4182C35.078 41.8 37.0405 40.8807 38.7308 39.4483C39.7309 38.6007 40.6496 37.6096 40.7654 36.2505C40.9 34.6078 40.7967 32.9444 40.7967 31.2523C40.7151 31.2813 40.6373 31.3203 40.565 31.3686C38.7073 33.0607 36.5256 34.1744 34.1859 34.9695C28.7207 36.8289 23.1085 37.2001 17.4305 36.4449C12.7197 35.8251 8.24204 34.5186 4.38419 31.1456ZM40.8577 40.8871C39.6495 41.6837 38.5446 42.5186 37.3395 43.1671C33.5614 45.1985 29.4563 46.0127 25.2354 46.2788C19.9752 46.6118 14.8231 46.0701 9.87283 44.1119C7.8513 43.3334 5.98998 42.1782 4.38419 40.7054C4.38419 42.2031 4.4155 43.5208 4.3748 44.8353C4.34079 45.4477 4.43621 46.0605 4.65463 46.6322C4.87305 47.2039 5.20938 47.7212 5.64093 48.1494C6.38864 48.9232 7.22518 49.6026 8.13249 50.1729C11.189 52.0163 14.5727 52.8305 18.0674 53.2623C23.0193 53.8725 27.9006 53.5618 32.6913 52.1087C34.9262 51.43 37.0546 50.5027 38.8466 48.9221C39.9422 47.9661 40.7982 46.8269 40.8467 45.2814C40.8937 43.8299 40.8577 42.3688 40.8577 40.8871ZM43.2053 20.1262C43.8516 19.935 44.4291 19.7853 44.9894 19.5909C47.2478 18.8086 49.4138 17.8383 51.1244 16.0856C52.112 15.0643 52.7646 13.8709 52.5815 12.3796C52.3953 10.858 51.4672 9.78408 50.356 8.85837C48.9052 7.65223 47.2337 6.85239 45.4762 6.24215C40.0908 4.37639 34.5709 4.07047 28.9711 4.84482C27.7504 5.01371 26.5453 5.32281 25.3324 5.55703C28.2403 5.95376 31.0855 6.40626 33.8353 7.34313C36.5851 8.27999 39.2066 9.53074 41.238 11.7534C42.5511 13.1874 43.282 14.862 43.2178 16.8631C43.1849 17.9195 43.2115 18.9775 43.2115 20.1262H43.2053ZM43.2053 41.9068C43.1302 44.3174 43.62 46.9066 41.8922 49.1149C45.1632 48.4266 48.2181 47.4435 50.7363 45.2129C51.5767 44.472 52.3843 43.5973 52.4766 42.4581C52.6175 40.7421 52.5142 39.0038 52.5142 37.4503C51.1057 38.2931 49.6877 39.2874 48.1508 40.0251C46.5858 40.7803 44.9049 41.2774 43.2178 41.9068H43.2053ZM43.2053 29.6271C45.6875 29.2878 49.4655 27.4794 51.0305 25.7172C51.6879 24.9779 52.3577 24.0203 52.4954 23.0818C52.7349 21.4614 52.5627 19.7773 52.5627 18.0629C51.8913 18.5696 51.2903 19.0683 50.6471 19.4969C48.5609 20.9022 46.2509 21.7833 43.8454 22.4318C43.5167 22.521 43.1959 22.5321 43.2021 23.0404C43.2256 25.2201 43.2131 27.3949 43.2131 29.6271H43.2053ZM52.5549 27.5813C49.8364 30.0765 46.6077 31.2922 43.2554 32.194V39.2858C46.254 38.4222 49.1133 37.428 51.2371 35.0715C51.8287 34.4166 52.3906 33.518 52.4892 32.6704C52.7067 31.0324 52.5627 29.3627 52.5627 27.5813H52.5549Z" fill="#319CDD"/>
                    </svg>
                    
    
                 <div class="count-content">
                    <p>Square Ft</p>
                    <h2 class="counter">5,000</h2>
                 </div>
             </div>
            <div class="count-box">
                <svg  viewBox="0 0 53 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_218_4089)">
                    <path d="M0 20.9814C0.151719 20.3948 0.248819 19.7822 0.473363 19.2248C1.13789 17.5784 2.48061 16.6672 4.05241 16.7223C5.66519 16.7805 7.29465 17.9 7.75436 19.479C8.15035 20.8298 8.35213 22.2357 8.61916 23.6247C9.20328 26.6448 9.77526 29.6664 10.3548 32.6865C10.3899 32.8276 10.4324 32.9666 10.4823 33.1031C11.6035 32.9499 12.491 33.4599 13.3558 34.0863C15.4799 35.6178 17.604 37.1493 19.7599 38.6409C20.8386 39.3898 21.3423 40.3807 21.3362 41.6917C21.3231 44.6587 21.3231 47.6251 21.3362 50.5911C21.3362 51.1884 21.1845 51.6723 20.6672 51.9986H10.3351C9.72822 51.6111 9.61595 51.0107 9.68878 50.3583C9.73733 49.9173 9.56437 49.6768 9.19721 49.4394C7.36748 48.2908 5.55595 47.1116 3.74443 45.9385C2.37004 45.0742 1.302 43.7929 0.693356 42.2782C0.389918 41.5278 0.227579 40.7207 0 39.9396V20.9814ZM15.9093 43.9537C15.7317 43.8281 15.5922 43.7347 15.4541 43.6351C13.33 42.0699 11.206 40.5048 9.0819 38.9396C7.56471 37.8201 7.28403 35.8766 8.38855 34.3329C8.52708 34.1224 8.5838 33.8677 8.54785 33.6177C7.74981 29.2979 6.93811 24.9801 6.11276 20.6644C6.05455 20.3334 5.92837 20.0184 5.74232 19.7396C5.55628 19.4608 5.3145 19.2244 5.03252 19.0456C3.99476 18.3687 2.89025 18.626 2.3744 19.7593C2.11747 20.3312 1.98058 20.9507 1.97235 21.5787C1.93897 27.4335 1.91925 33.2899 1.96021 39.1448C1.97538 41.3348 2.95852 43.0822 4.78674 44.2875C6.56185 45.456 8.3582 46.5848 10.1439 47.7395C11.426 48.565 11.426 48.565 11.6975 49.9923H19.3897C19.3897 47.0733 19.4064 44.2048 19.3639 41.3364C19.3639 41.0178 19.0908 40.6012 18.8207 40.4052C16.4903 38.7037 14.1341 37.0359 11.7779 35.3728C11.0512 34.8597 10.326 34.9684 9.88753 35.6147C9.46575 36.2273 9.63264 36.9165 10.3427 37.4357C11.7931 38.5077 13.2451 39.5797 14.6985 40.6518C15.4769 41.2261 16.2521 41.8035 17.0502 42.3946C16.6557 42.9245 16.2901 43.4284 15.9093 43.9537Z" fill="#319CDD"/>
                    <path d="M32.327 52.0001C31.7914 51.6571 31.6533 51.1532 31.6564 50.5345C31.6746 47.6063 31.6746 44.6781 31.6564 41.7499C31.6473 40.419 32.1343 39.4037 33.2327 38.6395C35.4933 37.0697 37.7297 35.4632 39.966 33.8582C40.7246 33.3176 41.5242 33.0082 42.5452 33.1062C42.697 32.3405 42.8487 31.5885 43.0004 30.8274C43.6862 27.2238 44.3659 23.6187 45.0562 20.0166C45.4006 18.2309 47.1302 16.7867 48.9493 16.7285C50.7199 16.6703 52.2795 17.9154 52.7423 19.8221C52.8978 20.4742 52.9777 21.1423 52.9805 21.813C53.0017 27.383 52.9805 32.9531 53.0063 38.5231C53.0214 41.9076 51.6666 44.4882 48.7945 46.2601C47.1636 47.2648 45.5811 48.3506 43.9502 49.3552C43.4707 49.6493 43.2371 49.9678 43.3129 50.536C43.3934 51.1486 43.2083 51.6617 42.6681 52.0062L32.327 52.0001ZM41.4195 50.0199C41.0538 48.7319 41.9535 48.3031 42.7698 47.787C44.5813 46.6415 46.3837 45.4816 48.1771 44.3075C50.0553 43.0823 51.0294 41.3073 51.043 39.0729C51.0764 33.2532 51.0582 27.4336 51.0309 21.6216C51.0296 21.0301 50.9163 20.4442 50.6971 19.8956C50.1509 18.5694 48.8158 18.2952 47.7189 19.2172C47.112 19.7318 46.9466 20.4301 46.8085 21.1851C46.0378 25.3355 45.2246 29.4781 44.4463 33.6269C44.4134 33.8774 44.4728 34.1314 44.6132 34.3406C45.66 35.797 45.4613 37.6455 44.0943 38.8171C42.2464 40.4007 40.3964 41.9832 38.5444 43.5647C38.4064 43.6826 38.2592 43.7898 38.0893 43.9185L36.8679 42.4222C37.2305 42.1159 37.5325 41.851 37.8359 41.5937C39.5008 40.1755 41.1636 38.7569 42.8244 37.3377C43.3949 36.8492 43.4965 36.1477 43.1081 35.5995C42.7197 35.0512 42.0309 34.9026 41.3922 35.2549C41.262 35.333 41.1359 35.4179 41.0144 35.5091C38.7872 37.0942 36.5675 38.69 34.3266 40.2567C34.0868 40.4072 33.892 40.6206 33.7629 40.8742C33.6339 41.1277 33.5754 41.4119 33.5938 41.6963C33.612 44.2799 33.5938 46.8635 33.5938 49.4456V50.0184L41.4195 50.0199Z" fill="#319CDD"/>
                    <path d="M43.7875 12.6854C43.3899 13.4358 42.9105 13.5415 42.2217 13.033C37.304 9.39627 32.3878 5.75849 27.4731 2.11968C27.2728 1.96653 27.1545 2.00329 26.9755 2.13653C22.0689 5.76921 17.1603 9.39627 12.2496 13.0177C11.6655 13.4496 11.1588 13.4312 10.8356 12.9687C10.5124 12.5062 10.655 12.0498 11.2301 11.621L26.5067 0.337032C27.1135 -0.111693 27.3532 -0.111693 27.951 0.337032C33.0609 4.11469 38.1688 7.89235 43.2746 11.67C43.4635 11.8411 43.6348 12.0309 43.7859 12.2367L43.7875 12.6854Z" fill="#319CDD"/>
                    <path d="M16.0443 28.0493H22.9278V27.6572C22.9278 25.3064 22.9202 22.9571 22.9278 20.6124C22.9369 18.5158 24.2295 16.8174 26.1776 16.3135C26.7826 16.1597 27.4136 16.1408 28.0266 16.2583C28.6395 16.3757 29.2198 16.6267 29.7269 16.9936C30.2339 17.3606 30.6557 17.8347 30.9627 18.383C31.2697 18.9313 31.4546 19.5405 31.5045 20.1683C31.5378 20.6277 31.5287 21.0872 31.5303 21.5374C31.5303 23.5723 31.5303 25.6066 31.5303 27.6404V28.0508H38.4138V27.6695C38.4138 23.2435 38.4138 18.8165 38.4138 14.3885C38.4138 13.7422 38.7764 13.3532 39.3377 13.3899C39.5211 13.4012 39.6954 13.4742 39.8329 13.5972C39.9704 13.7201 40.0631 13.886 40.0963 14.0684C40.1186 14.1968 40.1288 14.327 40.1267 14.4574C40.1267 19.2111 40.1267 23.9648 40.1267 28.7186C40.1267 28.7737 40.1267 28.8273 40.1267 28.8824C40.0948 29.4766 39.7701 29.8013 39.1784 29.8013C36.3767 29.8013 33.5749 29.8013 30.7732 29.8013C30.1329 29.8013 29.8052 29.4629 29.8052 28.8089C29.8052 26.0676 29.8052 23.3262 29.8052 20.5848C29.8052 19.1085 28.7068 17.9568 27.2973 17.9185C26.9487 17.9081 26.6015 17.9692 26.277 18.0981C25.9524 18.227 25.6571 18.421 25.4089 18.6683C25.1607 18.9157 24.9648 19.2113 24.833 19.5373C24.7012 19.8633 24.6363 20.2129 24.6422 20.5649C24.6331 23.2512 24.6422 25.9389 24.6422 28.6251C24.6422 28.7231 24.6422 28.8212 24.6422 28.9192C24.6463 29.0368 24.6262 29.154 24.5832 29.2633C24.5401 29.3727 24.475 29.4718 24.392 29.5545C24.309 29.6371 24.2099 29.7015 24.1009 29.7434C23.992 29.7854 23.8757 29.804 23.7592 29.7983C20.915 29.7983 18.0697 29.7983 15.2235 29.7983C14.6879 29.7983 14.3648 29.4766 14.3238 28.9345C14.3238 28.8273 14.3238 28.717 14.3238 28.6083V14.5707C14.3198 14.4172 14.3274 14.2636 14.3466 14.1113C14.3725 13.8981 14.4786 13.7032 14.643 13.567C14.8074 13.4307 15.0174 13.3635 15.2296 13.3792C15.4361 13.3872 15.6326 13.4715 15.7817 13.616C15.9307 13.7606 16.022 13.9553 16.0382 14.1633C16.0443 14.2827 16.0443 14.4023 16.0382 14.5217V28.0447L16.0443 28.0493Z" fill="#319CDD"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_218_4089">
                    <rect width="53" height="52" fill="white"/>
                    </clipPath>
                    </defs>
                    </svg>
                    
    
                 <div class="count-content">
                    <p>Square Ft</p>
                    <h2 class="counter">3,000</h2>
                 </div>
            </div>
             
                
        </div>
    </div>
       
</section>

  <!-- Testimonials -->

  <section class="testimonial m-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <div class="testimonials owl-carousel owl-theme">
                    <div class="item">
                        <img class="review-img" src="images/testimonial/demo.jpg" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release.</p>
                        <h4>John David</h4>
                    </div>
                    <div class="item">
                        <img class="review-img" src="images/testimonial/demo.jpg" alt="">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia accusantium obcaecati maiores amet. Blanditiis veniam consectetur nisi. Sit quos suscipit obcaecati saepe perferendis id, vel necessitatibus ullam quo sint placeat magni aperiam explicabo, natus est provident nesciunt quisquam ipsum nihil molestiae porro a reiciendis reprehenderit? Voluptatem eligendi iste veniam ipsum eum ea voluptas nobis, natus aspernatur aperiam recusandae maxime minima repudiandae, facere doloremque</p>
                        <h4>John David</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 testimonial-heading align-middle">
                <svg width="59" height="49" viewBox="0 0 59 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.4552 25.9677V49H0V32.7419C0 26.4194 1.02736 20.6237 3.08209 15.3548C5.13682 10.086 8.58582 4.96774 13.4291 0L21.7948 6.77418C16.0709 13.2473 12.842 19.6452 12.1082 25.9677H22.4552ZM59 25.9677V49H36.5448V32.7419C36.5448 26.4194 37.5721 20.6237 39.6269 15.3548C41.6816 10.086 45.1306 4.96774 49.9739 0L58.3396 6.77418C52.6157 13.2473 49.3868 19.6452 48.653 25.9677H59Z" fill="#77BBE5"/>
                    </svg>
                    
                <h2>What Our clients say</h2>
            </div>
        </div>
    </div>
</section>


  <!-- Upadates -->
    
  <!-- <section class="updates">
    <div class="container-fluid">
        <div class="row news-updates pt">
                <div class="col-sm-4">
                    <h2>Important Updates</h2>
                </div>
                <div class="col-sm latest-news">
                    <img src="images/updates/updates-01.jpg" alt="">
                       <div class="caption-overlay">
                         <div class="caption">
                             <h3>Lorem Ipsum is simply dummy text</h3>
                         </div>
                       </div>     
                </div>
                <div class="col-sm latest-news">
                 <img src="images/updates/updates-02.jpg" alt="">
                 <div class="caption-overlay">
                     <div class="caption">
                         <h3>Lorem Ipsum is simply dummy text</h3>
                     </div>
                   </div> 
             </div>
             <div class="col-sm latest-news">
                 <img src="images/updates/updates-03.jpg" alt="">
                 <div class="caption-overlay">
                     <div class="caption">
                         <h3>Lorem Ipsum is simply dummy text</h3>
                     </div>
                   </div> 
             </div>
             
        </div>
    </div>
</section> -->


</main>
<?php 

require('inc/footer.php');
require('inc/script.php');
?>


</body>
</html>