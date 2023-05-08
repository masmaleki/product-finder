<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="colorlib.com">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$pf_wizard?->title}}</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('vendor/productfinder/fonts/material-icon/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/productfinder/lib/nouislider/nouislider.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('vendor/productfinder/css/style.css')}}">
</head>
<body>
     @isset($pf_wizard)
        <div class="main">
        
            <div class="container">
                <form method="POST" id="signup-form" class="signup-form" action="#">
                    <div>
                      @foreach ($pf_steps as $pf_step )
                        <h3>{{$pf_step->title}}</h3>
                        <fieldset>
                            <h2>{{$pf_step->title}}</h2>
                            <p class="desc">{{$pf_step->desc}}</p>
                            <div class="fieldset-content">

                            @foreach ($pf_step->questions as $pf_question)
                            <div class="form-row">
                                <h4>{{$pf_question->title}}</h4>
                                @if ($pf_question->typeOption?->type?->name === 'checkbox')
                                @foreach($pf_question->options as $value => $label)
                                <label>
                                    <input type="radio" name="age_gender" value="under_30_male">
                                    <span class="radio-text">Under 30 and male</span>
                                </label>
                                @endforeach
                                @endif

                                @if ($pf_question->typeOption?->type?->name === 'radio')
                                @foreach ($pf_question->options as $option)
                                @php
                                    $option_value=json_decode($option->value);
                                @endphp
                                    <label>
                                        <input type="radio" name="{{ $pf_question->id }}" value="{{ $option->id }}">
                                        <span class="radio-text">{{ $option_value->title }}</span>
                                    </label>
                                @endforeach
                                @endif
                                @if ($pf_question->typeOption?->type?->name === 'range')
                                    {{-- FOR RANGE --}}
                                @endif

                                <p class="desc">{{$pf_question->desc}}</p>
                            </div>

                            @endforeach
                              
                           
                            </div>
                        </fieldset>
                      
                       @endforeach

                    </div>
                </form>
            </div>
    
        </div>
     @endisset
    <!-- JS -->
    <script src="{{ asset('vendor/productfinder/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('vendor/productfinder/lib/jquery-validation/dist/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('vendor/productfinder/lib/jquery-validation/dist/additional-methods.min.js')}}"></script>
    <script src="{{ asset('vendor/productfinder/lib/jquery-steps/jquery.steps.min.js')}}"></script>
    <script src="{{ asset('vendor/productfinder/lib/minimalist-picker/dobpicker.js')}}"></script>
    <script src="{{ asset('vendor/productfinder/lib/nouislider/nouislider.min.js')}}"></script>
    <script src="{{ asset('vendor/productfinder/lib/wnumb/wNumb.js')}}"></script>
    <script src="{{ asset('vendor/productfinder/js/main.js')}}"></script>
</body>

</html>