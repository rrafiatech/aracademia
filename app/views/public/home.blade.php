@section('title')
    Aracademia - الرئيسية
@stop

@section('content')
<!-- Slider starts
  ================================================== -->
    @include('partials.home.slideshow')
<!-- Slider ends
  ================================================== -->

<!-- Courses Thumbnails starts
  ================================================== -->
    @include('partials.home.courses')
<!-- Courses Thumbnails ends
  ================================================== -->

<!-- Questions starts
  ================================================== -->
    <section class="blox dark">
        <div class="container ">
            <h1 class="text-center">
                أسئلة وأجوبة على مدار الساعة
                <br><br>
                يمكن لأي عضو طرح أسئلة والإجابة على أسئلة أخرى
            </h1>

        </div>
    </section>
    @include('partials.home.questions')
<!-- Questions ends
  ================================================== -->
@stop