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
                       <h3>Best Product for you!</h3>
                       <fieldset>
                           <h3>Find the best product for you!</h3>
                           <p class="desc">Please enter your infomation and proceed to next step so we can build your
                               account</p>
                           <div class="fieldset-content">
                               <div class="choose-bank">
                                   <h2>Best Product for you!</h2>
                                   <div class="card">
                                       <div class="card__title">
                                           <div class="icon">
                                               <a href="#"><i class="fa fa-arrow-left"></i></a>
                                           </div>
                                           <h3>New products</h3>
                                       </div>

                                       <div class="card__body">
                                           <div class="half">
                                               <div class="featured_text">
                                                   <h1>Nurton</h1>
                                                   <div>
                                                       <p class="sub">Office Chair</p>
                                                       <p class="price">$210.00</p>
                                                   </div>
                                               </div>
                                               <div class="image">
                                                   <img src="https://images-na.ssl-images-amazon.com/images/I/613A7vcgJ4L._SL1500_.jpg"
                                                       alt="">
                                               </div>
                                           </div>
                                           <div class="half">
                                               <div class="description">
                                                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero
                                                       voluptatem nam pariatur voluptate perferendis, asperiores
                                                       aspernatur! Porro similique consequatur, nobis soluta minima,
                                                       quasi laboriosam hic cupiditate perferendis esse numquam magni.
                                                   </p>
                                               </div>
                                               <span class="stock"><i class="fa fa-pen"></i> In stock</span>
                                               <div class="reviews">
                                                   <ul class="stars">
                                                       <li><i class="fa fa-star"></i></li>
                                                       <li><i class="fa fa-star"></i></li>
                                                       <li><i class="fa fa-star"></i></li>
                                                       <li><i class="fa fa-star"></i></li>
                                                       <li><i class="fa fa-star-o"></i></li>
                                                   </ul>
                                                   <span>(sample text!)</span>
                                               </div>
                                           </div>
                                       </div>



                                       <div class="card__footer">
                                           <div class="recommend">
                                               <p class="rating">
                                               <div class="product-rating">
                                                   <span class="star">&#9733;</span>
                                                   <span class="star">&#9733;</span>
                                                   <span class="star">&#9733;</span>
                                                   <span class="star">&#9733;</span>
                                                   <span class="star-half">&#9733;</span>
                                               </div>

                                               </p>
                                           </div>
                                           <div class="action">
                                               <button type="button">view product</button>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="card">
                                       <div class="card__title">
                                           <div class="icon">
                                               <a href="#"><i class="fa fa-arrow-left"></i></a>
                                           </div>
                                           <h3>New products</h3>
                                       </div>

                                       <div class="card__body">
                                           <div class="half">
                                               <div class="featured_text">
                                                   <h1>Nurton</h1>
                                                   <div>
                                                       <p class="sub">Office Chair</p>
                                                       <p class="price">$210.00</p>
                                                   </div>
                                               </div>
                                               <div class="image">
                                                   <img src="https://images-na.ssl-images-amazon.com/images/I/613A7vcgJ4L._SL1500_.jpg"
                                                       alt="">
                                               </div>
                                           </div>
                                           <div class="half">
                                               <div class="description">
                                                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero
                                                       voluptatem nam pariatur voluptate perferendis, asperiores
                                                       aspernatur! Porro similique consequatur, nobis soluta minima,
                                                       quasi laboriosam hic cupiditate perferendis esse numquam magni.
                                                   </p>
                                               </div>
                                               <span class="stock"><i class="fa fa-pen"></i> In stock</span>
                                               <div class="reviews">
                                                   <ul class="stars">
                                                       <li><i class="fa fa-star"></i></li>
                                                       <li><i class="fa fa-star"></i></li>
                                                       <li><i class="fa fa-star"></i></li>
                                                       <li><i class="fa fa-star"></i></li>
                                                       <li><i class="fa fa-star-o"></i></li>
                                                   </ul>
                                                   <span>(sample text!)</span>
                                               </div>
                                           </div>
                                       </div>



                                       <div class="card__footer">
                                           <div class="recommend">
                                               <p class="rating">
                                               <div class="product-rating">
                                                   <span class="star">&#9733;</span>
                                                   <span class="star">&#9733;</span>
                                                   <span class="star">&#9733;</span>
                                                   <span class="star">&#9733;</span>
                                                   <span class="star-half">&#9733;</span>
                                               </div>

                                               </p>
                                           </div>
                                           <div class="action">
                                               <button type="button">view product</button>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="card">
                                       <div class="card__title">
                                           <div class="icon">
                                               <a href="#"><i class="fa fa-arrow-left"></i></a>
                                           </div>
                                           <h3>New products</h3>
                                       </div>

                                       <div class="card__body">
                                           <div class="half">
                                               <div class="featured_text">
                                                   <h1>Nurton</h1>
                                                   <div>
                                                       <p class="sub">Office Chair</p>
                                                       <p class="price">$210.00</p>
                                                   </div>
                                               </div>
                                               <div class="image">
                                                   <img src="https://images-na.ssl-images-amazon.com/images/I/613A7vcgJ4L._SL1500_.jpg"
                                                       alt="">
                                               </div>
                                           </div>
                                           <div class="half">
                                               <div class="description">
                                                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero
                                                       voluptatem nam pariatur voluptate perferendis, asperiores
                                                       aspernatur! Porro similique consequatur, nobis soluta minima,
                                                       quasi laboriosam hic cupiditate perferendis esse numquam magni.
                                                   </p>
                                               </div>
                                               <span class="stock"><i class="fa fa-pen"></i> In stock</span>
                                               <div class="reviews">
                                                   <ul class="stars">
                                                       <li><i class="fa fa-star"></i></li>
                                                       <li><i class="fa fa-star"></i></li>
                                                       <li><i class="fa fa-star"></i></li>
                                                       <li><i class="fa fa-star"></i></li>
                                                       <li><i class="fa fa-star-o"></i></li>
                                                   </ul>
                                                   <span>(sample text!)</span>
                                               </div>
                                           </div>
                                       </div>



                                       <div class="card__footer">
                                           <div class="recommend">
                                               <p class="rating">
                                               <div class="product-rating">
                                                   <span class="star">&#9733;</span>
                                                   <span class="star">&#9733;</span>
                                                   <span class="star">&#9733;</span>
                                                   <span class="star">&#9733;</span>
                                                   <span class="star-half">&#9733;</span>
                                               </div>

                                               </p>
                                           </div>
                                           <div class="action">
                                               <button type="button">view product</button>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="card">
                                       <div class="card__title">
                                           <div class="icon">
                                               <a href="#"><i class="fa fa-arrow-left"></i></a>
                                           </div>
                                           <h3>New products</h3>
                                       </div>

                                       <div class="card__body">
                                           <div class="half">
                                               <div class="featured_text">
                                                   <h1>Nurton</h1>
                                                   <div>
                                                       <p class="sub">Office Chair</p>
                                                       <p class="price">$210.00</p>
                                                   </div>
                                               </div>
                                               <div class="image">
                                                   <img src="https://images-na.ssl-images-amazon.com/images/I/613A7vcgJ4L._SL1500_.jpg"
                                                       alt="">
                                               </div>
                                           </div>
                                           <div class="half">
                                               <div class="description">
                                                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero
                                                       voluptatem nam pariatur voluptate perferendis, asperiores
                                                       aspernatur! Porro similique consequatur, nobis soluta minima,
                                                       quasi laboriosam hic cupiditate perferendis esse numquam magni.
                                                   </p>
                                               </div>
                                               <span class="stock"><i class="fa fa-pen"></i> In stock</span>
                                               <div class="reviews">
                                                   <ul class="stars">
                                                       <li><i class="fa fa-star"></i></li>
                                                       <li><i class="fa fa-star"></i></li>
                                                       <li><i class="fa fa-star"></i></li>
                                                       <li><i class="fa fa-star"></i></li>
                                                       <li><i class="fa fa-star-o"></i></li>
                                                   </ul>
                                                   <span>(sample text!)</span>
                                               </div>
                                           </div>
                                       </div>



                                       <div class="card__footer">
                                           <div class="recommend">
                                               <p class="rating">
                                               <div class="product-rating">
                                                   <span class="star">&#9733;</span>
                                                   <span class="star">&#9733;</span>
                                                   <span class="star">&#9733;</span>
                                                   <span class="star">&#9733;</span>
                                                   <span class="star-half">&#9733;</span>
                                               </div>

                                               </p>
                                           </div>
                                           <div class="action">
                                               <button type="button">view product</button>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="card">
                                       <div class="card__title">
                                           <div class="icon">
                                               <a href="#"><i class="fa fa-arrow-left"></i></a>
                                           </div>
                                           <h3>New products</h3>
                                       </div>

                                       <div class="card__body">
                                           <div class="half">
                                               <div class="featured_text">
                                                   <h1>Nurton</h1>
                                                   <div>
                                                       <p class="sub">Office Chair</p>
                                                       <p class="price">$210.00</p>
                                                   </div>
                                               </div>
                                               <div class="image">
                                                   <img src="https://images-na.ssl-images-amazon.com/images/I/613A7vcgJ4L._SL1500_.jpg"
                                                       alt="">
                                               </div>
                                           </div>
                                           <div class="half">
                                               <div class="description">
                                                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero
                                                       voluptatem nam pariatur voluptate perferendis, asperiores
                                                       aspernatur! Porro similique consequatur, nobis soluta minima,
                                                       quasi laboriosam hic cupiditate perferendis esse numquam magni.
                                                   </p>
                                               </div>
                                               <span class="stock"><i class="fa fa-pen"></i> In stock</span>
                                               <div class="reviews">
                                                   <ul class="stars">
                                                       <li><i class="fa fa-star"></i></li>
                                                       <li><i class="fa fa-star"></i></li>
                                                       <li><i class="fa fa-star"></i></li>
                                                       <li><i class="fa fa-star"></i></li>
                                                       <li><i class="fa fa-star-o"></i></li>
                                                   </ul>
                                                   <span>(sample text!)</span>
                                               </div>
                                           </div>
                                       </div>



                                       <div class="card__footer">
                                           <div class="recommend">
                                               <p class="rating">
                                               <div class="product-rating">
                                                   <span class="star">&#9733;</span>
                                                   <span class="star">&#9733;</span>
                                                   <span class="star">&#9733;</span>
                                                   <span class="star">&#9733;</span>
                                                   <span class="star-half">&#9733;</span>
                                               </div>

                                               </p>
                                           </div>
                                           <div class="action">
                                               <button type="button">view product</button>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="card">
                                       <div class="card__title">
                                           <div class="icon">
                                               <a href="#"><i class="fa fa-arrow-left"></i></a>
                                           </div>
                                           <h3>New products</h3>
                                       </div>

                                       <div class="card__body">
                                           <div class="half">
                                               <div class="featured_text">
                                                   <h1>Nurton</h1>
                                                   <div>
                                                       <p class="sub">Office Chair</p>
                                                       <p class="price">$210.00</p>
                                                   </div>
                                               </div>
                                               <div class="image">
                                                   <img src="https://images-na.ssl-images-amazon.com/images/I/613A7vcgJ4L._SL1500_.jpg"
                                                       alt="">
                                               </div>
                                           </div>
                                           <div class="half">
                                               <div class="description">
                                                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero
                                                       voluptatem nam pariatur voluptate perferendis, asperiores
                                                       aspernatur! Porro similique consequatur, nobis soluta minima,
                                                       quasi laboriosam hic cupiditate perferendis esse numquam magni.
                                                   </p>
                                               </div>
                                               <span class="stock"><i class="fa fa-pen"></i> In stock</span>
                                               <div class="reviews">
                                                   <ul class="stars">
                                                       <li><i class="fa fa-star"></i></li>
                                                       <li><i class="fa fa-star"></i></li>
                                                       <li><i class="fa fa-star"></i></li>
                                                       <li><i class="fa fa-star"></i></li>
                                                       <li><i class="fa fa-star-o"></i></li>
                                                   </ul>
                                                   <span>(sample text!)</span>
                                               </div>
                                           </div>
                                       </div>



                                       <div class="card__footer">
                                           <div class="recommend">
                                               <p class="rating">
                                               <div class="product-rating">
                                                   <span class="star">&#9733;</span>
                                                   <span class="star">&#9733;</span>
                                                   <span class="star">&#9733;</span>
                                                   <span class="star">&#9733;</span>
                                                   <span class="star-half">&#9733;</span>
                                               </div>

                                               </p>
                                           </div>
                                           <div class="action">
                                               <button type="button">view product</button>
                                           </div>
                                       </div>
                                   </div>
                                   



                                   <div class="form-radio-flex">
                                       <div class="form-radio-item">
                                           <input type="radio" name="choose_bank" id="bank_1" value="bank_1"
                                               checked="checked" />
                                           <label for="bank_1"><img
                                                   src="{{ asset('vendor/productfinder/images/bank-1.jpg') }}"
                                                   alt=""></label>
                                       </div>

                                       <div class="form-radio-item">
                                           <input type="radio" name="choose_bank" id="bank_2" value="bank_2" />
                                           <label for="bank_2"><img
                                                   src="{{ asset('vendor/productfinder/images/bank-2.jpg') }}"
                                                   alt=""></label>
                                       </div>

                                       <div class="form-radio-item">
                                           <input type="radio" name="choose_bank" id="bank_3" value="bank_3" />
                                           <label for="bank_3"><img
                                                   src="{{ asset('vendor/productfinder/images/bank-3.jpg') }}"
                                                   alt=""></label>
                                       </div>

                                       <div class="form-radio-item">
                                           <input type="radio" name="choose_bank" id="bank_4" value="bank_4" />
                                           <label for="bank_4"><img
                                                   src="{{ asset('vendor/productfinder/images/bank-4.jpg') }}"
                                                   alt=""></label>
                                       </div>

                                       <div class="form-radio-item">
                                           <input type="radio" name="choose_bank" id="bank_5" value="bank_5" />
                                           <label for="bank_5"><img
                                                   src="{{ asset('vendor/productfinder/images/bank-5.jpg') }}"
                                                   alt=""></label>
                                       </div>

                                       <div class="form-radio-item">
                                           <input type="radio" name="choose_bank" id="bank_6"
                                               value="bank_6" />
                                           <label for="bank_6"><img
                                                   src="{{ asset('vendor/productfinder/images/bank-6.jpg') }}"
                                                   alt=""></label>
                                       </div>

                                       <div class="form-radio-item">
                                           <input type="radio" name="choose_bank" id="bank_7"
                                               value="bank_7" />
                                           <label for="bank_7"><img
                                                   src="{{ asset('vendor/productfinder/images/bank-7.jpg') }}"
                                                   alt=""></label>
                                       </div>

                                       <div class="form-radio-item">
                                           <input type="radio" name="choose_bank" id="bank_8"
                                               value="bank_8" />
                                           <label for="bank_8"><img
                                                   src="{{ asset('vendor/productfinder/images/bank-8.jpg') }}"
                                                   alt=""></label>
                                       </div>
                                   </div>
                               </div>


                           </div>
                       </fieldset>
                       <h3>Your Information</h3>
                       <fieldset>
                           <h3>Your Information</h3>
                           <p class="desc">"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
                           </p>
                           <div class="fieldset-content">
                               <div class="form-row">
                                   <label class="form-label">Name</label>
                                   <div class="form-flex">
                                       <div class="form-group">
                                           <input type="text" name="first_name" id="first_name" />
                                           <span class="text-input">First</span>
                                       </div>
                                       <div class="form-group">
                                           <input type="text" name="last_name" id="last_name" />
                                           <span class="text-input">Last</span>
                                       </div>
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="email" class="form-label">Email</label>
                                   <input type="email" name="email" id="email" />
                                   <span class="text-input">Example  :<span>  Jeff@gmail.com</span></span>
                               </div>
                               <div class="form-group">
                                   <label for="phone" class="form-label">Phone</label>
                                   <input type="text" name="phone" id="phone" />
                               </div>
                               <div class="form-date">
                                   <label for="birth_date" class="form-label">Birth Date</label>
                                   <div class="form-date-group">
                                       <div class="form-date-item">
                                           <select id="birth_month" name="birth_month"></select>
                                           <span class="text-input">MM</span>
                                       </div>
                                       <div class="form-date-item">
                                           <select id="birth_date" name="birth_date"></select>
                                           <span class="text-input">DD</span>
                                       </div>
                                       <div class="form-date-item">
                                           <select id="birth_year" name="birth_year"></select>
                                           <span class="text-input">YYYY</span>
                                       </div>
                                   </div>
                               </div>
   
                           </div>
                       </fieldset>

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