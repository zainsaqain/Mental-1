@extends('mental.layouts.app')
@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-xs-12  col-md-9 col-md-push-3" role="main">

                <!-- ============================
                      SLIDER
                     ============================ -->

        <div class="jumbotron  jumbotron--with-captions">
            <div class="carousel  slide  fade" id="headerCarousel" data-ride="carousel" data-interval="5000">
                <div class="carousel-inner">
                    <div class="item"> <img src="{{asset('assets/images/21477.jpg') }}" srcset="{{asset('assets/images/21477.jpg 425w') }}, {{asset('assets/images/21477.jpg 850w') }}" sizes="(min-width: 768px) 720px, (min-width: 992px) 700px, (min-width: 1200px) 850px, calc(100vw-20px)" alt="&quot;Be smart, help yourself now.&quot;">
                        <div class="jumbotron-content">
                            <h1 class="jumbotron-content__title">"Be smart, help yourself now."</h1>
                            <div class="jumbotron-content__description">
                                <p><i>–</i>&nbsp;Mahatma Gandhi</p>
                            </div>
                        </div>
                    </div>
                    <div class="item active"> <img src="{{asset('assets/images/image-6-425x200.jpg') }}" srcset="{{asset('assets/images/21477.jpg 425w') }}, {{asset('assets/images/21477.jpg 850w') }}" sizes="(min-width: 768px) 720px, (min-width: 992px) 700px, (min-width: 1200px) 850px, calc(100vw-20px)" alt="&quot;Mental illness is no myth.&quot;">
                        <div class="jumbotron-content">
                            <h1 class="jumbotron-content__title">"Mental illness is no myth."</h1>
                            <div class="jumbotron-content__description">
                                <p><i>–</i>&nbsp;Nelson Mandela</p>
                            </div>
                        </div>
                    </div>
                
                </div>
                <a class="left  jumbotron__control" href="#headerCarousel" role="button" data-slide="prev"> <i class="fa  fa-chevron-left"></i> </a>
                <a class="right  jumbotron__control" href="#headerCarousel" role="button" data-slide="next"> <i class="fa  fa-chevron-right"></i> </a>
            </div>
        </div>

        <!-- ========  // SLIDER ======== -->

        <!-- ============================
            CONTENT
            ============================ -->

        <div class="content-container">

            <article>
                <div class="panel-grid row">
                    <div class="col-md-6 panel-grid-cell">
                        <div class="so-panel panel-first-child panel-last-child">
                            <h3 class="widget-title">Welcome to my Practice</h3>
                            <div class="textwidget">
                                <p>As a psychologist and a cognitive behavioral therapist I have worked with hundreds of patients and understand the intricacies of various psychological issues that people face.</p>
                                <p>My work revolves around being friendly, disciplined and organized yet flexible. I approach my patients and help them resolve their emotional issues of the past and the present, to open the door to a brighter and confident future.</p>
                                <p><a class="read-more" href="about.html">Read more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="so-panel panel-first-child widget_featured_page">
                            <div class="page-box  page-box--inline">
                                <a class="page-box__picture" href="depression-treatment.html"><img width="100" height="70" src="{{asset('assets/images/image-16-100x70.jpg') }}" class="attachment-thumbnail size-thumbnail wp-post-image" alt="Depression Treatment"></a>
                                <div class="page-box__content">
                                    <h5 class="page-box__title  text-uppercase"><a href="depression-treatment.html">Depression Treatment</a></h5>
                                    <p>Depression is a mental illness, which one should not confuse …</p>
                                </div>
                            </div>
                        </div>
                        <div class="so-panel widget_featured_page">
                            <div class="page-box  page-box--inline">
                                <a class="page-box__picture" href="services/individual-treatment/index.html"><img width="100" height="70" src="{{asset('assets/images/image-27-100x70.jpg')  }}" class="attachment-thumbnail size-thumbnail wp-post-image" alt="Individual Treatment"></a>
                                <div class="page-box__content">
                                    <h5 class="page-box__title  text-uppercase"><a href="services/individual-treatment/index.html">Individual Treatment</a></h5>
                                    <p>Individual treatment is often termed as psychotherapy, and is …</p>
                                </div>
                            </div>
                        </div>
                        <div class="so-panel panel-last-child widget_featured_page">
                            <div class="page-box  page-box--inline">
                                <a class="page-box__picture" href="anxiety-treatment.html"><img width="100" height="70" src="{{asset('assets/images/image-1-100x70.jpg') }}" class="attachment-thumbnail size-thumbnail wp-post-image" alt="Anxiety Treatment"></a>
                                <div class="page-box__content">
                                    <h5 class="page-box__title  text-uppercase"><a href="anxiety-treatment.html">Anxiety Treatment</a></h5>
                                    <p>Whether it is social phobia, specific phobia, post traumatic …</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ============================
                    HIGHLIGHT LINK
                    ============================ -->

                <div class="panel-grid row m-b-lg">
                    <div class="col-md-6">
                        <div class="so-panel widget widget_pw_banner widget-banner panel-first-child panel-last-child" id="panel-6-1-0-0">
                            <a class="banner" href="http://frequently-asked-questions/" target="_self">
                                <div class="banner__title"> Privacy Policy</div>
                                <div class="banner__content"> Between Doctors and Patients</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="so-panel widget widget_pw_banner widget-banner panel-first-child panel-last-child" id="panel-6-1-1-0">
                            <a class="banner" href="http://shop/" target="_self">
                                <div class="banner__title"> Book Recommendations</div>
                                <div class="banner__content"> Couple of Books We Recommend You</div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- ========  // END HIGHLIGHT LINK ======== -->

                <!-- ============================
                        SERVICES OVERVIEW
                        ============================ -->

                <div class="panel-grid row">
                    <div class="col-md-4">
                        <div class="so-panel widget widget_pw_featured_page widget-featured-page panel-first-child panel-last-child" id="panel-6-2-0-0">
                            <div class="page-box  page-box--block">
                                <a class="page-box__picture" href="couples-therapy.html"><img width="360" height="240" src="{{asset('assets/images/image-21-360x240.jpg') }}" class="attachment-page-box size-page-box wp-post-image" alt="Couples Therapy"></a>
                                <div class="page-box__content">
                                    <h5 class="page-box__title  text-uppercase"><a href="couples-therapy.html">Couples Therapy</a></h5>
                                    <p>A relationship goes through numerous phases during its life cycle, and it is obvious for it to have a few rough patches. However, the strength of a relationship is reflected in how the couples deal with those ...</p>
                                    <p>
                                        <a href="couples-therapy.html" class="read-more  read-more--page-box">Read more</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="so-panel widget widget_pw_featured_page widget-featured-page panel-first-child panel-last-child" id="panel-6-2-1-0">
                            <div class="page-box  page-box--block">
                                <a class="page-box__picture" href="post-divorce-recovery.html"><img width="360" height="240" src="{{asset('assets/images/image-35-360x240.jpg') }}" class="attachment-page-box size-page-box wp-post-image" alt="Post-divorce Recovery"></a>
                                <div class="page-box__content">
                                    <h5 class="page-box__title  text-uppercase"><a href="post-divorce-recovery.html">Post-divorce Recovery</a></h5>
                                    <p>Our systematic approach towards couple therapy is defined on the lines of enhancing the communication between the partners, and establishing short term and long term goals, where both the partners would be...</p>
                                    <p><a href="post-divorce-recovery.html" class="read-more  read-more--page-box">Read more</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="so-panel widget widget_pw_featured_page widget-featured-page panel-first-child panel-last-child" id="panel-6-2-2-0">
                            <div class="page-box  page-box--block">
                                <a class="page-box__picture" href="children-therapy.html"><img width="360" height="240" src="{{asset('assets/images/image-54-360x240.jpg') }}" class="attachment-page-box size-page-box wp-post-image" alt="Therapy for Children"></a>
                                <div class="page-box__content">
                                    <h5 class="page-box__title  text-uppercase"><a href="children-therapy.html">Therapy for Children</a></h5>
                                    <p>There are many emotional issues that find a corner in our heart, and refuse to die down. With time, these issues can transform into a sort of emotional tumor that impacts negatively on our daily life, such as lack of...</p>
                                    <p><a href="children-therapy.html" class="read-more  read-more--page-box">Read more</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========  // END SERVICES OVERVIEW ======== -->

                <!-- ============================
                        TESTIMONIALs
                        ============================ -->

                <div class="panel-grid row m-b-lg">
                    <div class="panel-row-style">
                        <div class="col-md-12">
                            <div class="so-panel widget widget-testimonials panel-first-child panel-last-child">
                                <div class="testimonial grey-wrap">
                                    <h2 class="widget-title">Testimonials</h2>
                                    <div class="carousel slide" data-ride="carousel" data-interval="false">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="item active">
                                                <div class="row">
                                                    <div class="col-xs-12  col-sm-12">
                                                        <blockquote>
                                                            <p class="testimonial__quote"> We've had a lot of financial troubles over the years; loss of physical health, job and bankruptcy. Laura's coaching gave us hope and a new sense of vision so we can create our lives together.</p>
                                                            <cite class="testimonial__author"> Anastacia Rockafeller</cite>
                                                            <div class="testimonial__author-description"> Mother of two.</div>
                                                        </blockquote>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========  // END TESTIMONIALS ======== -->

                <!-- ============================
                        FAQ SECTION
                        ============================ -->

                <!-- FAQ TITLE -->
                <div class="panel-grid row m-b">
                    <div class="col-md-12">
                        <div class="so-panel widget panel-first-child panel-last-child" id="panel-6-4-0-0">
                            <div class="text-center panel-widget-style">
                                <h3 class="widget-title">Frequently Asked Questions</h3>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- // end FAQ TITLE -->
                <div class="panel-grid row m-b-0">
                    <div class="col-md-4">
                        <div class="so-panel widget widget_black_studio_tinymce panel-first-child panel-last-child" id="panel-6-5-0-0">
                            <div class="textwidget">
                                <p><strong>What can I expect in the first session when I see a therapist?</strong></p>
                                <p>Aliquam erat volutpat. Morbi volutpat velit ac sem vulputate sollicitudin. Aliquam tincidunt finibus leo, eget suscipit augue eleifend in.</p>
                                <p><a class="read-more" href="faq.html">Read more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="so-panel widget widget_black_studio_tinymce panel-first-child panel-last-child" id="panel-6-5-1-0">
                            <div class="textwidget">
                                <p><strong>What are the signs of being abused by partner?</strong></p>
                                <p>Morbi volutpat velit ac sem vulputate sollicitudin. Aliquam tincidunt finibus leo, eget suscipit augue eleifend in.&nbsp;Aliquam erat volutpat.</p>
                                <p><a class="read-more" href="faq.html">Read more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="so-panel widget widget_black_studio_tinymce panel-first-child panel-last-child" id="panel-6-5-2-0">
                            <div class="textwidget">
                                <p><strong>What can I expect in the first session when I see a therapist?</strong></p>
                                <p>Aliquam erat volutpat. Morbi volutpat velit ac sem vulputate sollicitudin. Aliquam tincidunt finibus leo, eget suscipit augue eleifend in.</p>
                                <p><a class="read-more" href="faq.html">Read more</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========  // END FAQ SECTION ======== -->

            </article>

        </div>
        <!-- // end .content-container -->

        <!-- ========  // END CONTENT ======== -->

        <!-- ============================
            LATEST POSTS
            ============================ -->

        <div class="latest-posts">
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <div class="latest-post">
                        <a class="latest-post__thumbnail" href="blog-single.html"><img width="270" height="190" src="{{asset('assets/images/image-36-270x190.jpg') }}" class="attachment-latest-posts size-latest-posts wp-post-image" alt="MentalPress 21"></a>
                        <div class="latest-post__categories">
                            <ul class="post-categories">
                                <li><a href="category/teenage/index.html" rel="category tag">Teenage</a></li>
                            </ul>
                        </div>
                        <h4 class="latest-post__title"><a href="blog-single.html">Looking for help is sign of strength</a></h4>
                        <p class="latest-post__excerpt"> Individual treatment is often termed as psychotherapy, and is meant to help people with their emotional issues, which can …</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="latest-post">
                        <a class="latest-post__thumbnail" href="blog-single.html"><img width="270" height="190" src="{{asset('assets/images/image-45-270x190.jpg') }}" class="attachment-latest-posts size-latest-posts wp-post-image" alt="MentalPress 13"></a>
                        <div class="latest-post__categories">
                            <ul class="post-categories">
                                <li><a href="category/self-improvement/index.html" rel="category tag">Self-improvement</a></li>
                                <li><a href="category/therapy/index.html" rel="category tag">Therapy</a></li>
                            </ul>
                        </div>
                        <h4 class="latest-post__title"><a href="blog-single.html">Get the most out of your work day</a></h4>
                        <p class="latest-post__excerpt"> There are many emotional issues that find a corner in our heart, and refuse to die down. With time, these issues can transform …</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="latest-post">
                        <a class="latest-post__thumbnail" href="blog-single.html"><img width="270" height="190" src="{{asset('assets/images/image-57-270x190.jpg') }}" class="attachment-latest-posts size-latest-posts wp-post-image" alt="MentalPress 1"></a>
                        <div class="latest-post__categories">
                            <ul class="post-categories">
                                <li><a href="category/children-therapy/index.html" rel="category tag">Children Therapy</a></li>
                            </ul>
                        </div>
                        <h4 class="latest-post__title"><a href="blog-single.html">Help your child find new friends</a></h4>
                        <p class="latest-post__excerpt"> Anxiety is something that exists in everyone’s life to a certain extent, and in a way it is medically known to be helpful …</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- // end div[role=main] -->

    <div class="col-xs-12  col-md-3  col-md-pull-9">

        <!-- ============================
            SIDEBAR
            ============================ -->

        <div class="sidebar">
            <nav id="main-navigation" class="main-navigation__container">
                <div class="main-navigation__title"> NAVIGATION</div>
                <ul id="menu-main-menu" class="main-navigation">
                    <li class="menu-item current-menu-item current_page_item"><a href="index.html">Home</a>

                    </li>
                    <li class="menu-item menu-item-has-children"><a href="services.html">Services</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="services.html">Services List</a></li>
                            <li class="menu-item"><a href="couples-therapy.html">Couples Therapy</a></li>
                            <li class="menu-item"><a href="depression-treatment.html">Depression Treatment</a></li>
                            <li class="menu-item"><a href="individual-treatment.html">Individual Treatment</a></li>
                            <li class="menu-item"><a href="children-therapy.html">Therapy for Children</a></li>
                            <li class="menu-item"><a href="anxiety-treatment.html">Anxiety Treatment</a></li>
                            <li class="menu-item"><a href="post-divorce-recovery.html">Post-divorce Recovery</a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a href="about.html">About Me</a></li>
                    <li class="menu-item"><a href="blog.html">Blog</a></li>
                    <li class="menu-item menu-item-has-children"><a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="index-top-menu.html">index Top Menu</a></li>
                            <li class="menu-item"><a href="index-slider.html">Index Large Slider</a></li>
                            <li class="menu-item"><a href="index-fullwidth.html">Index Full Width</a></li>
                            <li class="menu-item"><a href="index-rtl.html">Index RTL Version</a></li>
                            <li class="menu-item"><a href="blog.html">Blog List</a></li>
                            <li class="menu-item"><a href="blog-single.html">Blog Single</a></li>
                            <li class="menu-item"><a href="shop.html">Shop Listing</a></li>
                            <li class="menu-item"><a href="shop-single.html">Shop Single</a></li>
                            <li class="menu-item"><a href="shortcodes.html">Shortcodes</a></li>
                            <li class="menu-item"><a href="brochure-box.html">Brochure Box</a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a href="contact.html">Contact Us</a></li>
                </ul> <a class="btn  btn-primary  btn-featured-page" target="_self" href="appointment.html"> Make an Appointment </a>
            </nav>
            <div class="widget  widget-about-us">
                <div id="carousel-people-pw_about_us-2" class="carousel slide" data-ride="carousel" data-interval="false">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active"> <a href="about.html" class="about-us__tag">MSEd, MA, LMHP, CPC</a><img class="about-us__image" src="{{asset('assets/images/image-51.jpg') }}" alt="About us image">
                            <h5 class="about-us__name">Jennifer Willinger, Ph.D</h5>
                            <p class="about-us__description">I'm a New York based psychologist and I was born and raised in New Jersey. I completed my Masters in Clinical Psychology from Rutgers University, New Jersey in 1987, and have a diploma in Cognitive Psychology and Neurosciences.</p> <a href="about-2.html" class="read-more  about-us__link">Read more</a></div>
                    </div>
                </div>
            </div>
            <div class="widget  widget-skype">
                <a class="skype-button" href="skype:echo123"> <i class="fa  fa-skype"></i>
                    <p class="skype-button__title">Skype Call</p>
                </a>
            </div>
            <div class="widget  widget_text">
                <h4 class="sidebar__headings">Forms</h4>
                <div class="textwidget">Before our first session, kindly take some time to print &amp; fill out relevant forms as well as you can.
                    <br>
                    <br><a class="btn  btn-default  fullwidth" href="{{asset('assets/images/brochure.pdf') }}" target="_self"><i class="fa fa-file-pdf-o"></i> Financial Agreement</a><a class="btn  btn-default  fullwidth" href="{{asset('assets/images/brochure.pdf') }}" target="_self"><i class="fa fa-file-word-o"></i> Release of Information</a></div>
            </div>
            <div class="widget  widget_text">
                <h4 class="sidebar__headings">Verifications</h4>
                <div class="textwidget">
                    <a href="#"><img src="{{asset('assets/images/verification_01.png') }}" class="logo-alternative" alt="Verification"></a>
                    <a href="#"><img src="{{asset('assets/images/verification_02.png') }}" class="logo-alternative" alt="Verification"></a>
                    <a href="#"><img src="{{asset('assets/images/verification_03.png') }}" class="logo-alternative" alt="Verification"></a>
                </div>
            </div>
        </div>

        <!-- ========  // END SIDEBAR ======== -->

            </div>
        </div>
        <!-- // end .row -->
    </div>
    

    @endsection