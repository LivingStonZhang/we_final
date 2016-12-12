<?php
define("HOME_DIR",dirname(dirname(dirname(dirname(__FILE__)))));
define("SITE_ADDRESS","http://localhost/olivetnews/");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="Olivet University, where future leaders and scholars are equipped to change the world for Jesus Christ. Olivet University students come from a wide range of age groups, geographical areas, educational backgrounds, and cultural heritages, creating a rich and challenging educational environment." name="description" />
    <meta name="keywords" content="Olivet University, Olivet, News, Campus News" />
    <meta name="keyphrase" content="Olivet University News, Olivet News" />
    <title>Olivet University News - OlivetNews.com</title>
    <meta name="msvalidate.01" content="1041215C1BB846E107FFF683F2966CCD" />
    <meta name="p:domain_verify" content="0d63b3d3525a4ce3df924cbb2a20d05c" />
    <link href="{{ asset('css/ounews.css') }}" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo SITE_ADDRESS.'public/css/style.css'?>">
    <link rel="stylesheet" href="<?php echo SITE_ADDRESS.'public/css/jquery.mCustomScrollbar.css'?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script type="application/javascript" src="{{ asset('js/jquery.jscroll.min.js')}}"></script>
    <script type="application/javascript" src="{{asset('js/jquery.disables.scroll.js')}}"></script>
    <script>var $used_ids = '1097,1096,1095'; </script>
    <script src="{{asset('js/common.js')}}"></script>
</head>

<body>

@include('layouts.header')
<?php //print_r($articles);die();?>
<!-- Content Start -->
<div class="m_content">
    <div class="container">
        @include('layouts.siderbar')
        <div class="m_contentr sub_contentr">
            <div class="m_contentr1">
                <div class="row">

                    <div class="col-sm-8">
                        <div class=" topnews_img">
                            <a href="/article/2016/12/09/1097/olivet-university-olivet-winter-art-show-2016-to-share-grace-&amp;-joy-in-christmas-season.htm">
                                <img src="http://www.olivetuniversity.edu/images_articles/files/ocad/IMG_osad.jpg" class="img-responsive" alt="">
                            </a>
                        </div>
                        <a class="category category_artd" href="javascript:void(0)">
                            <span>Arts &amp; Design</span>
                        </a>
                        <div class="">
                            <h3><a href="/article/2016/12/09/1097/olivet-university-olivet-winter-art-show-2016-to-share-grace-&amp;-joy-in-christmas-season.htm">
                                    Olivet Winter Art Show 2016 to Share Grace & Joy in Christmas Season              		</a></h3>
                            <span class="headline_datetime">Dec 09, 2016</span>
                            <p>Christmas is the season to remember and share God&#039;s love, Olivet School of Art and Design is going to reach out to friends and neighbors in a special way through the Winter Art Show.</p>
                        </div>
                    </div>

                    <div class="col-sm-4 headline_news point_menu">
                        <h5 class="head_titt">More headlines</h5>
                        <ul>
                            <li class="m_theology">
                                <div class="headline_text">
                                    <h5><a href="/article/2016/11/04/1094/olivet-university-zsds-annual-doctoral-colloquium-kicks-off-in-riverside.htm">ZSDS Annual Doctoral Colloquium Kicks Off in Riverside</a></h5>
                                    <span></span>
                                </div>
                            </li>
                            <li class="m_university">
                                <div class="headline_text">
                                    <h5><a href="/article/2016/09/29/1093/olivet-university-olivet-university-president-presents-at-abhe-workshop.htm">Olivet University President Presents at ABHE Workshop</a></h5>
                                    <span></span>
                                </div>
                            </li>
                            <li class="m_university">
                                <div class="headline_text">
                                    <h5><a href="/article/2016/09/26/1092/olivet-university-olivet-university-holds-fall-convocation-services.htm">Olivet University Holds Fall Convocation Services</a></h5>
                                    <span></span>
                                </div>
                            </li>
                            <li class="m_university">
                                <div class="headline_text">
                                    <h5><a href="/article/2016/08/08/1091/olivet-university-olivet-university-to-open-bachelor-of-science-degree-in-agriculture.htm">Olivet University to Open Bachelor of Science Degree in Agriculture</a></h5>
                                    <span></span>
                                </div>
                            </li>
                            <li class="m_theology">
                                <div class="headline_text">
                                    <h5><a href="/article/2016/08/04/1089/olivet-university-otcs-reading-program-enriches-campus-life-in-summer.htm">OTCS Reading Program Enriches Campus Life in Summer</a></h5>
                                    <span></span>
                                </div>
                            </li>
                            <li class="m_bussiness">
                                <div class="headline_text">
                                    <h5><a href="/article/2016/07/08/1088/olivet-university-olivet-business-graduates-found-baby-care-product-start-up.htm">Olivet Business Graduates Found Baby Care Product Start-Up</a></h5>
                                    <span></span>
                                </div>
                            </li>
                            <li class="m_artd">
                                <div class="headline_text">
                                    <h5><a href="/article/2016/07/05/1087/olivet-university-zimou-tan-appointed-new-associate-dean-of-osad.htm">Zimou Tan Appointed New Associate Dean of OSAD</a></h5>
                                    <span></span>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>
            <div class="m_contentr2">
                <div class="row">

                    <div class="col-sm-4 vice_news">
                        <div class=" topnews_img">
                            <a href="/article/2016/11/29/1096/olivet-university-mdiv-students-engage-in-dialogue-on-cross-cultural-mission.htm">
                                <img src="http://www.olivetuniversity.edu/images_articles/files/otcs/Cross-Cultural-Mission.jpg" class="img-responsive" alt="">
                            </a>
                        </div>
                        <a class="category category_theology" href="javascript:void(0)">
                            <span>Theology</span>
                        </a>
                        <div class="">
                            <h3><a href="/article/2016/11/29/1096/olivet-university-mdiv-students-engage-in-dialogue-on-cross-cultural-mission.htm">MDiv Students Engage in Dialogue on Cross-Cultural Mission</a></h3>
                            <span class="headline_datetime">Nov 29, 2016</span>
                            <p>Cross-cultural mission is an area of great interest especially to Olivet University students around the world. During the doctoral colloquium of the Zinzendorf School of Doctoral Studies at its Riverside</p>
                        </div>
                    </div>
                    <div class="col-sm-4 vice_news">
                        <div class=" topnews_img">
                            <a href="/article/2016/11/28/1095/olivet-university-ny-mba-students-present-projects-on-strategy-formulation.htm">
                                <img src="http://www.olivetuniversity.edu/images_articles/files/ocb/NY_MBA_Students.jpg" class="img-responsive" alt="">
                            </a>
                        </div>
                        <a class="category category_bussiness" href="javascript:void(0)">
                            <span>Business</span>
                        </a>
                        <div class="">
                            <h3><a href="/article/2016/11/28/1095/olivet-university-ny-mba-students-present-projects-on-strategy-formulation.htm">NY MBA Students Present Projects on Strategy Formulation</a></h3>
                            <span class="headline_datetime">Nov 28, 2016</span>
                            <p>MBA students at Olivet Business School (OBS) New York Extension present recent projects on strategy formulation covering situation analysis, business strategy and corporate strategy.</p>
                        </div>
                    </div>

                    <div class="col-sm-4  vice_news1">

                        <h5 class="head_titt">Events / Calendar</h5>
                        <ul class="m_calendar">
                            <li class="m_calendarlist">
                                <div class="media-left">
                                    <div class="date">
                                        <span class="month">Dec</span> <span class="day">12</span>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p>Final exam period<span></span></p>
                                </div>
                            </li>
                            <li class="m_calendarlist">
                                <div class="media-left">
                                    <div class="date">
                                        <span class="month">Dec</span> <span class="day">16</span>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p>Fall quarter ends<span></span></p>
                                </div>
                            </li>
                            <li class="m_calendarlist">
                                <div class="media-left">
                                    <div class="date">
                                        <span class="month">Dec</span> <span class="day">23</span>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p>Christmas Holiday<span></span></p>
                                </div>
                            </li>
                            <li class="m_calendarlist">
                                <div class="media-left">
                                    <div class="date">
                                        <span class="month">Dec</span> <span class="day">23</span>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p>Christmas Holiday<span></span></p>
                                </div>
                            </li>
                            <li class="m_calendarlist">
                                <div class="media-left">
                                    <div class="date">
                                        <span class="month">Dec</span> <span class="day">30</span>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p>Last day to register without charge<span></span></p>
                                </div>
                            </li>

                        </ul> </div>

                </div>
            </div>
            <div class="clearfix"></div>

            <div class="m_contentr3">
                <div class="various_menu">
                    <ul class="nav nav-tabs">
                        <li class="latest"><a class="current" data-type="latest" href="javascript:void(0);">LATEST </a></li>
                        <li class="spotlights"><a data-type="spotlights" href="javascript:void(0);">Spotlights </a></li>
                        <li class="slideshow"><a data-type="slideshow" href="javascript:void(0);">Photos/Slideshow </a></li>
                        <li class="videos"><a data-type="videos" href="javascript:void(0);"> Video</a></li>
                    </ul>
                </div>

                <div class="menu_latest" id="menu_latest" style="min-height:700px;">
                    <?php foreach ($articles as $key => $val){?>
                        <div class="news-list">
                            <div class="row">
                                <div class="col-sm-2 col-xs-5 newslist_img">
                                    <a href="<?= $val['id']?>"><img  class="img-responsive" src="http://www.olivetuniversity.edu/images_articles/files/zinzendorf/co2016.jpg" alt=""></a>
                                </div>
                                <div class="col-sm-8 col-xs-7  newslist_text">
                                    <a class="category category_theology" href="javascript:void(0)"><span>  </span></a>
                                    <div class="">
                                        <h3><a href="<?= $val['id']?>"><?= $val['title']?></a></h3>
                                        <span class="news_date"><?= $val['publish_date']?></span>
                                        <p><?= $val['body']?></p>
                                    </div>
                                </div>
                                <div class="col-sm-2 lable_tag">
                                </div>
                            </div>
                        </div>

                    <?php }?>

                    <div class="news-list">
                        <div class="row">
                            <div class="col-sm-2 col-xs-5 newslist_img">
                                <a href="/article/2016/09/29/1093/olivet-university-olivet-university-president-presents-at-abhe-workshop.htm"><img  class="img-responsive" src="http://www.olivetuniversity.edu/images_articles/files/gen/ABHE_workshop11.jpg" alt=""></a>
                            </div>
                            <div class="col-sm-8 col-xs-7  newslist_text">
                                <a class="category category_university" href="javascript:void(0)"><span> University </span></a>
                                <div class="">
                                    <h3><a href="/article/2016/09/29/1093/olivet-university-olivet-university-president-presents-at-abhe-workshop.htm">Olivet University President Presents at ABHE Workshop</a></h3>
                                    <span class="news_date">Sep 29, 2016</span>
                                    <p>Olivet University President Dr. Tracy Davis joined leaders of The Association for Biblical Higher Education this month to guide Christian institutions on their journey toward accreditation.</p>
                                </div>
                            </div>
                            <div class="col-sm-2 lable_tag">
                            </div>
                        </div>
                    </div>

                    <div class="news-list">
                        <div class="row">
                            <div class="col-sm-2 col-xs-5 newslist_img">
                                <a href="/article/2016/09/26/1092/olivet-university-olivet-university-holds-fall-convocation-services.htm"><img  class="img-responsive" src="http://www.olivetuniversity.edu/images_articles/files/gen/convocation20161111111.jpg" alt=""></a>
                            </div>
                            <div class="col-sm-8 col-xs-7  newslist_text">
                                <a class="category category_university" href="javascript:void(0)"><span> University </span></a>
                                <div class="">
                                    <h3><a href="/article/2016/09/26/1092/olivet-university-olivet-university-holds-fall-convocation-services.htm">Olivet University Holds Fall Convocation Services</a></h3>
                                    <span class="news_date">Sep 26, 2016</span>
                                    <p>On September 23, 2016, Olivet University held its Fall Convocation services on campuses nationwide. Riverside, Dover, and San Francisco campuses each welcomed</p>
                                </div>
                            </div>
                            <div class="col-sm-2 lable_tag">
                            </div>
                        </div>
                    </div>

                    <div class="news-list">
                        <div class="row">
                            <div class="col-sm-2 col-xs-5 newslist_img">
                                <a href="/article/2016/08/08/1091/olivet-university-olivet-university-to-open-bachelor-of-science-degree-in-agriculture.htm"><img  class="img-responsive" src="http://www.olivetuniversity.edu/images_articles/files/gen/Bachelor-of-Science-in-Agriculture.jpg" alt=""></a>
                            </div>
                            <div class="col-sm-8 col-xs-7  newslist_text">
                                <a class="category category_university" href="javascript:void(0)"><span> University </span></a>
                                <div class="">
                                    <h3><a href="/article/2016/08/08/1091/olivet-university-olivet-university-to-open-bachelor-of-science-degree-in-agriculture.htm">Olivet University to Open Bachelor of Science Degree in Agriculture</a></h3>
                                    <span class="news_date">Aug 08, 2016</span>
                                    <p>Olivet University announces approval to launch a new Bachelor of Science in Agriculture major as recently confirmed by the Association for Biblical Higher Education.</p>
                                </div>
                            </div>
                            <div class="col-sm-2 lable_tag">
                            </div>
                        </div>
                    </div>

                    <div class="news-list">
                        <div class="row">
                            <div class="col-sm-2 col-xs-5 newslist_img">
                                <a href="/article/2016/08/04/1089/olivet-university-otcs-reading-program-enriches-campus-life-in-summer.htm"><img  class="img-responsive" src="http://www.olivetuniversity.edu/images_articles/files/otcs/OTCS-Reading-Program-Enriches-Campus-Life-in-Summer.jpg" alt=""></a>
                            </div>
                            <div class="col-sm-8 col-xs-7  newslist_text">
                                <a class="category category_theology" href="javascript:void(0)"><span> Theology </span></a>
                                <div class="">
                                    <h3><a href="/article/2016/08/04/1089/olivet-university-otcs-reading-program-enriches-campus-life-in-summer.htm">OTCS Reading Program Enriches Campus Life in Summer</a></h3>
                                    <span class="news_date">Aug 04, 2016</span>
                                    <p>Every Thursday evening, book lovers from Olivet Theological College & Seminary gather for sharing as each of them pick up the challenge of reading one book per week this summer.</p>
                                </div>
                            </div>
                            <div class="col-sm-2 lable_tag">
                            </div>
                        </div>
                    </div>

                    <div class="news-list">
                        <div class="row">
                            <div class="col-sm-2 col-xs-5 newslist_img">
                                <a href="/article/2016/07/08/1088/olivet-university-olivet-business-graduates-found-baby-care-product-start-up.htm"><img  class="img-responsive" src="http://www.olivetuniversity.edu/images_articles/files/ocb/OBS_new111.jpg" alt=""></a>
                            </div>
                            <div class="col-sm-8 col-xs-7  newslist_text">
                                <a class="category category_bussiness" href="javascript:void(0)"><span> Business </span></a>
                                <div class="">
                                    <h3><a href="/article/2016/07/08/1088/olivet-university-olivet-business-graduates-found-baby-care-product-start-up.htm">Olivet Business Graduates Found Baby Care Product Start-Up</a></h3>
                                    <span class="news_date">Jul 08, 2016</span>
                                    <p>A team of Olivet Business School graduates has realized their dreams of entrepreneurship as they founded a baby care product start-up recently in New York City.</p>
                                </div>
                            </div>
                            <div class="col-sm-2 lable_tag">
                            </div>
                        </div>
                    </div>

                    <div class="news-list">
                        <div class="row">
                            <div class="col-sm-2 col-xs-5 newslist_img">
                                <a href="/article/2016/07/05/1087/olivet-university-zimou-tan-appointed-new-associate-dean-of-osad.htm"><img  class="img-responsive" src="http://www.olivetuniversity.edu/images_articles/files/ocad/OSAD_new.jpg" alt=""></a>
                            </div>
                            <div class="col-sm-8 col-xs-7  newslist_text">
                                <a class="category category_artd" href="javascript:void(0)"><span> Arts &amp; Design </span></a>
                                <div class="">
                                    <h3><a href="/article/2016/07/05/1087/olivet-university-zimou-tan-appointed-new-associate-dean-of-osad.htm">Zimou Tan Appointed New Associate Dean of OSAD</a></h3>
                                    <span class="news_date">Jul 05, 2016</span>
                                    <p>The Board of Trustees of Olivet University appointed Zimou Tan as the new Associate Dean of Olivet School of Art and Design. Tan will succeed Dr. Hannah Lee in this position.</p>
                                </div>
                            </div>
                            <div class="col-sm-2 lable_tag">
                                <span>Sportlight</span>              </div>
                        </div>
                    </div>

                    <div class="news-list">
                        <div class="row">
                            <div class="col-sm-2 col-xs-5 newslist_img">
                                <a href="/article/2016/07/01/1086/olivet-university-olivet-class-of-2016-exhorted-to-be-visionary-leaders-at-commencement-ceremony.htm"><img  class="img-responsive" src="http://www.olivetuniversity.edu/images_articles/files/gen/commencement111.jpg" alt=""></a>
                            </div>
                            <div class="col-sm-8 col-xs-7  newslist_text">
                                <a class="category category_university" href="javascript:void(0)"><span> University </span></a>
                                <div class="">
                                    <h3><a href="/article/2016/07/01/1086/olivet-university-olivet-class-of-2016-exhorted-to-be-visionary-leaders-at-commencement-ceremony.htm">Olivet Class of 2016 Exhorted to be Visionary Leaders at Commencement Ceremony</a></h3>
                                    <span class="news_date">Jul 01, 2016</span>
                                    <p>Global evangelical leader Bishop Efraim Tendero challenged Olivet University graduates to have &quot;daring ambitions&quot; as they are about to begin a new chapter in their lives.</p>
                                </div>
                            </div>
                            <div class="col-sm-2 lable_tag">
                            </div>
                        </div>
                    </div>

                    <div class="news-list">
                        <div class="row">
                            <div class="col-sm-2 col-xs-5 newslist_img">
                                <a href="/article/2016/05/31/1084/olivet-university-zsds-holds-european-consultation--seeking-to-expand-d.-min.-enrollment.htm"><img  class="img-responsive" src="http://www.olivetuniversity.edu/images_articles/files/zinzendorf/zd111.jpg" alt=""></a>
                            </div>
                            <div class="col-sm-8 col-xs-7  newslist_text">
                                <a class="category category_theology" href="javascript:void(0)"><span> Zinzendorf </span></a>
                                <div class="">
                                    <h3><a href="/article/2016/05/31/1084/olivet-university-zsds-holds-european-consultation--seeking-to-expand-d.-min.-enrollment.htm">ZSDS Holds European Consultation, Seeking to Expand D. Min. Enrollment</a></h3>
                                    <span class="news_date">May 31, 2016</span>
                                    <p>Zinzendorf School of Doctoral Studies held a consultation in Teisendorf near Salzburg, Germany earlier in May to discuss the possibilities and initial steps to expand its programs in Europe.</p>
                                </div>
                            </div>
                            <div class="col-sm-2 lable_tag">
                            </div>
                        </div>
                    </div>

                    <div class="news-list">
                        <div class="row">
                            <div class="col-sm-2 col-xs-5 newslist_img">
                                <a href="/article/2016/05/31/1083/olivet-university-senior-media-executive-spoke-at-mba-leadership-class-in-manhattan-ny.htm"><img  class="img-responsive" src="http://www.olivetuniversity.edu/images_articles/files/ocb/MBA-Leadership-Class1.jpg" alt=""></a>
                            </div>
                            <div class="col-sm-8 col-xs-7  newslist_text">
                                <a class="category category_bussiness" href="javascript:void(0)"><span> Business </span></a>
                                <div class="">
                                    <h3><a href="/article/2016/05/31/1083/olivet-university-senior-media-executive-spoke-at-mba-leadership-class-in-manhattan-ny.htm">Senior Media Executive Spoke at MBA Leadership Class in Manhattan NY</a></h3>
                                    <span class="news_date">May 31, 2016</span>
                                    <p>Olivet Business School recently invited distinguished senior media & marketing executive Darius Myers as a guest speaker for MBA leadership class at Olivet&#039;s Manhattan campus.</p>
                                </div>
                            </div>
                            <div class="col-sm-2 lable_tag">
                            </div>
                        </div>
                    </div>

                    <div class="next load_more"><a href="load_more/latest/2/1097,1096,1095.htm">Load More ...</a></div>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- Content End -->

</body>
</html>



 