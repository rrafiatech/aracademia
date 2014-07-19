<footer class="clearfix" id="footer">
    <div class="container">
        <div class="row">

            <!-- Newsletter  starts
              ==================== -->
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 footerNewsletter">
                <article>
                    <h3><i class="icomoon-newspaper"></i>جريدة الموقع</h3>

                    <p>إشترك معنا في جريدة الموقع وتوصل بآخر أخبار الموقع</p>
                    {{Form::open(array('url'=>'/subscribeToNewsletter','id'=>'frmNewsLetterForm','class'=>'form-inline'))}}
                    <div class="col-lg-6">
                        <div class="input-group">
                            {{Form::email('email',null,array('class'=>'form-control','placeholder'=>'بريدك الإلكتروني'))}}
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">إشترك</button>
                            </span>
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                    {{Form::close()}}


                </article>
            </div>
            <!-- Newsletter ends
              ==================== -->


            <!-- Tweets  starts
              ==================== -->
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 footerTweets">
                <article>
                    <h3><i class="icomoon-book-2"></i>أحدث الدروس</h3>
                    <ul>

                        <li><a href="#">بي اتش بي القسم الأول</a></li>
                        <li><a href="#"> بي اتش بي القسم الثاني </a></li>
                        <li><a href="#"> بي اتش بي القسم الثاني </a></li>
                        <li><a href="#"> المزيد</a></li>

                    </ul>
                </article>
            </div>
            <!-- Tweets ends
              ==================== -->





            <!-- Contact info  starts
              ==================== -->
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 footerAracademiaInfo">
                <article>
                    <h3><i class="icomoon-envelop"></i>نبذة عن الموقع</h3>
                    كل وبعض الصيني بانتحار إيو, مشروط المقيتة المتطرّف ما إيو, حتى عل وبعض المارق الرايخ. في إجلاء المدن يبق, هو قام خيار الشمال, الربيع، بالمحور الرئيسية شبح عل. جديدة والمعدات الكونجرس أي قهر, الثانية الأبرياء عام تم, طرفاً العالم، كل كلّ. من السادس الإحتفاظ باستسلام يبق. أم فكان والنازي لألمانيا حين, أما هو سقوط أجزاء الهزائم.
                </article>
            </div>
        </div>

        <!-- Contact info ends
          ==================== -->
    </div>

    <div class="footerBottom">
        <div class="container">

            <!-- Copyright  starts
             ==================== -->

            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 copyright">
                <img src="/img/bottomLogo.png" class="footerLogo" alt="AraCademia">
                <span class="copyText">{{date("Y")}} ©
                جميع الحقوق محفوظة</span>
            </div>
            <!-- Copyright ends
              ==================== -->

            <!-- Footer menu  starts
              ==================== -->

            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12  footerMenu hidden-sm hidden-xs">

                <ul class="">
                    <li><a href="/advertise">أعلن معنا</a></li>
                    <li><a href="/contactus">إتصل بنا</a></li>
                    <li><a href="/instructors">الأساتذه</a></li>
                    <li><a href="/qa">أسئلة وأجوبة</a></li>
                    <li><a href="/categories">الدروس</a></li>
                    <li class=""><a href="/">الرئيسية</a></li>

                </ul>
            </div>


            <!-- Footer menu ends
             ==================== -->
        </div>
    </div>
</footer>
</body>
</html>