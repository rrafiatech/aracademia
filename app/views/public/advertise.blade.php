@section('title')
أعلن معنا
@stop

@section('content')
    <section class="container wrapper text-right contactDetails">
        <div class="col-lg-7 pull-right">
            <h2 class="customTitle">
                للإعلان في موقعنا المرجو ملئ الخانات أسفله وسوف يتم الإتصال بك في أقرب وقت ممكن
            </h2>
            <hr class="vertical-space1">
            {{Helpers::displayMessage(Session::get('sentryError'), Session::get('success'))}}
            {{Form::open(array('url'=>'/advertise','role'=>'form'))}}
            @if(!Sentry::check())
                <div class="form-group">
                   {{Form::label('fullName',' الإسم الكامل ')}}
                   {{Form::text('fullName', null, array('class'=>'form-control','required'=>'required','placeholder'=>' إسمك '))}}
                   {{Helpers::displayError('fullName', $errors)}}
                </div>
                <div class="form-group">
                    {{Form::label('email',' البريد الإلكتروني ')}}
                    {{Form::email('email', null, array('class'=>'form-control','required'=>'required','placeholder'=>'  بريدك الإلكتروني '))}}
                    {{Helpers::displayError('email', $errors)}}
                </div>
            @else
                <div class="form-group">
                    {{Form::label('fullName',' الإسم الكامل ')}}
                    {{Form::text('fullName', Session::get("fullName"), array('class'=>'form-control','placeholder'=>' إسمك ','readonly'))}}
                    {{Helpers::displayError('fullName', $errors)}}
                </div>
                <div class="form-group">
                    {{Form::label('email',' البريد الإلكتروني ')}}
                    {{Form::email('email', Session::get("email"), array('class'=>'form-control','readonly','placeholder'=>'  بريدك الإلكتروني '))}}
                    {{Helpers::displayError('email', $errors)}}
                </div>
            @endif
            <div class="form-group">
                {{Form::label('msg',' الرسالة ')}}
                {{Form::textarea('msg', null, array('class'=>'form-control','required'=>'required','placeholder'=>'  رسالتك '))}}
                {{Helpers::displayError('msg', $errors)}}
            </div>
            {{Form::recaptcha($errors)}}
            {{Form::submit(' إتصل بالإدارة ',array('class'=>'btn btn-primary ','name'=>'submit'))}}
            {{Form::close()}}



        </div>
    </section>


@stop