<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>




<!-- 메인페이지 -->
<main>
            <!-- mainVisual -->
            <section class="mainVisual">
                <div class="main_slide">
                    <figure>
                        <div class="iframe_case">
                            <iframe src="https://www.youtube.com/embed/1nmfWgumIHE" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </figure>
                    <figure>
                        <div class="iframe_case">
                            <iframe src="https://www.youtube.com/embed/7l1Mq6K5iCs" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </figure>
                    <figure>
                        <div class="iframe_case">
                            <iframe src="https://www.youtube.com/embed/IQa8QXHIjFI" title="한울캠핑카" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </figure>
                    <figure>
                        <div class="iframe_case">
                            <iframe src="https://www.youtube.com/embed/WatPw9-p42Q" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </figure>
                    <figure>
                        <div class="iframe_case">
                            <iframe src="https://www.youtube.com/embed/v8r7p0adWxc" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </figure>
                </div>

                <div class="m_link">
                    <? include G5_THEME_PATH.'/doc/nav02.php'; ?>
                </div>

            </section>







            <!-- main_map -->
            <section class="main_map">
                <!-- * 카카오맵 - 지도퍼가기 -->
                <!-- 1. 지도 노드 -->
                <div id="daumRoughmapContainer1673846785191"
                    class="root_daum_roughmap root_daum_roughmap_landing _map_">
                </div>

                <!--
               2. 설치 스크립트
	            * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
                    -->
                <script charset="UTF-8" class="daum_roughmap_loader_script"
                    src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

                <!-- 3. 실행 스크립트 -->
                <script charset="UTF-8">
                    new daum.roughmap.Lander({
                        "timestamp": "1673846785191",
                        "key": "2dfqu",
                        // "mapWidth": "640",
                        // "mapHeight": "360"
                    }).render();
                </script>
            </section>













            <!-- mainCustomer -->
            <section class="mainCustomer">
                <div class="inner">
                    <div class="news">
                        <h3>
                            news &amp; notice <a href="/bbs/board.php?bo_table=nos"><i class="xi-plus"></i></a>
                        </h3>
                        <div class="latest">
                              <?php
                                  echo latest('theme/basic', 'nos', 4, 35);
                              ?>
                        </div>
                    </div>
                    <div class="sang">
                        <figure>
                            <img src="<?=G5_THEME_URL ?>/images/sang.jpg" alt="">
                        </figure>
                    </div>
                    <div class="contact">
                        <a href="tel:<?= $as_tel ?>"><?= $as_tel ?></a>
                        <p><?= $as_description ?></p>
                        <a href="https://youtu.be/-55-M7gUTQs"> <i class="xi-youtube-play"></i></a>

                    </div>
                </div>
            </section>
        </main>



<!-- 메인페이지 -->







<?php
include_once(G5_THEME_PATH.'/tail.php');