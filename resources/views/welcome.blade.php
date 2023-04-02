<html>
    <head>
        <title>

        </title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet" />

        <link rel="stylesheet" href="{{asset('css/custom.css')}}">
        <style>
            body {
           
                background-color: #44562c;
            }
        </style>
    </head>

    <body>
        
    <section class="signup-step-container">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="wizard">
                        <div class="wizard-inner">
                            <div class="connecting-line"></div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"  style="margin-left: -15%"   >
                                    <a href="#step1" data-toggle="tab"  aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab">1 </span> <i>Step 1</i></a>
                                </li>
                                <li role="presentation" class="disabled" style="margin-left: -5%">
                                    <a href="#step2"  style="pointer-events: none; " data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false"><span class="round-tab">2</span> <i>Step 2</i></a>
                                </li>
                                <li role="presentation" class="disabled" style="margin-left: -5%">
                                    <a href="#step3"   style="pointer-events: none; " data-toggle="tab" aria-controls="step3" role="tab"><span class="round-tab">3</span> <i>Step 3</i></a>
                                </li>
                                <li role="presentation" class="disabled"style="margin-left: 45%">
                                    <a href="#step4"   style="pointer-events: none; " data-toggle="tab" aria-controls="step4" role="tab"><span class="round-tab">4</span> <i>Step 4</i></a>
                                </li>

                                <li role="presentation" class="disabled" style="margin-left: 66%">
                                    <a href="#step5"   style="pointer-events: none; "  data-toggle="tab" aria-controls="step5" role="tab"><span class="round-tab">5</span> <i>Step 5</i></a>
                                </li>

                                <li role="presentation" class="disabled" style="margin-left: 98%">
                                    <a href="#step6"   style="pointer-events: none; " data-toggle="tab" aria-controls="step6" role="tab"><span class="round-tab">6</span> <i>Step 6</i></a>
                                </li>

                                <!-- <li role="presentation" class="disabled" style="margin-left: 98%">
                                    <a href="#step7"   style="pointer-events: none; " data-toggle="tab" aria-controls="step7" role="tab"><span class="round-tab">7</span> <i>Step 7</i></a>
                                </li> -->
                                
                            </ul>
                        </div>
        
                        <form 
                            role="form" 
                            action="{{ route('stripe.post') }}"  enctype="multipart/form-data"
                            method="post" 
                            class="require-validation"
                            data-cc-on-file="false"
                            data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                            id="payment-form">
                        @csrf
                            <div class="tab-content" id="main_form">





                                <div class="tab-pane active" role="tabpanel" id="step1">
                                    <h4 class="text-center card-title">Wählen Sie ein oder mehrere Produkte aus</h4>
                                      <div class="row text-center mb-5">


                                            <div class="col-lg-4 mt-2 ">
                                                <div class="card first-step" >
                                                    <img src="img/tshirt.jpeg" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title" id="tshirt">T-Shirt</h5>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-lg-4 mt-2">
                                                <div class="card first-step1">
                                                    <img src="img/pshirt.jpg" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title"  id="pshirt">Polo-Shirt</h5>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-lg-4 mt-2">
                                                <div class="card first-step2">
                                                    <img src="img/shirt.jpeg" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title" id="sshirt">Shirt</h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 mt-3">
                                                <div class="progress"> 
                                                    <div class="progress-bar ml-3" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">0%</div>
                                                </div>
                                            </div>
                                            
                                        </div> 
                                    <!-- <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn next-step">Continue to next step</button></li>
                                    </ul> -->
                                </div>






                                <div class="tab-pane" role="tabpanel" id="step2">
                                    <h4 class="text-center card-title">Wählen Sie die Farbe, die Sie haben wollen</h4>
                                    <div class="row mt-4">

                                    <input type="hidden" id="putshirt" value="">



                                   <!-- t shirt -->
                                   <input type="hidden" id="c1" value="black">
                                   <div class="col-1 m-2 next-stepColor1 tshirtColor" style="background-color:black; height: 50px; border-radius: 50%;">
                                       
                                    </div>
                                    <input type="hidden" id="c2" value="white">
                                    <div class="col-1 m-2 next-stepColor2 tshirtColor" style="background-color:white; height: 50px; border-radius: 50%;">

                                    </div>
                                    <input type="hidden" id="c3" value="gray">
                                    <div class="col-1 m-2 next-stepColor3 tshirtColor" style="background-color:gray; height: 50px; border-radius: 50%;">

                                    </div>
                                    <input type="hidden" id="c4" value="darkgreen">
                                    <div class="col-1 m-2 next-stepColor4 tshirtColor" style="background-color:darkgreen; height: 50px; border-radius: 50%;">

                                    </div>
                                    <input type="hidden" id="c5" value="lightgreen">
                                    <div class="col-1 m-2 next-stepColor5 tshirtColor" style="background-color:lightgreen; height: 50px; border-radius: 50%;">

                                    </div>
                                    <input type="hidden" id="c6" value="darkblue">
                                    <div class="col-1 m-2 next-stepColor6 tshirtColor" style="background-color:darkblue; height: 50px; border-radius: 50%;">

                                    </div>
                                    <input type="hidden" id="c7" value="red">
                                    <div class="col-1 m-2 next-stepColor7 tshirtColor" style="background-color:red; height: 50px; border-radius: 50%;">

                                    </div>
                                    <input type="hidden" id="c8" value="yellow">
                                    <div class="col-1 m-2 next-stepColor8 tshirtColor" style="background-color:yellow; height: 50px; border-radius: 50%;">

                                    </div>
                                    <input type="hidden" id="c9" value="navy">
                                    <div class="col-1 m-2 next-stepColor9 tshirtColor" style="background-color:navy; height: 50px; border-radius: 50%;">

                                    </div>
                                    <input type="hidden" id="c10" value="orange">
                                    <div class="col-1 m-2 next-stepColor10 tshirtColor" style="background-color:orange; height: 50px; border-radius: 50%;">

                                    </div>




                                    <!-- popo shirt -->
                                    <input type="hidden" id="c11" value="black">
                                    <div class="col-1 m-2 next-stepColor11 pshirtColor" style="background-color:black; height: 50px; border-radius: 50%;">

                                    </div>
                                    <input type="hidden" id="c12" value="white">
                                    <div class="col-1 m-2 next-stepColor12 pshirtColor" style="background-color:white; height: 50px; border-radius: 50%;">

                                    </div>
                                    <input type="hidden" id="c13" value="gray">
                                    <div class="col-1 m-2 next-stepColor13 pshirtColor" style="background-color:gray; height: 50px; border-radius: 50%;">

                                    </div>
                                    <input type="hidden" id="c14" value="green">
                                    <div class="col-1 m-2 next-stepColor14 pshirtColor" style="background-color:green; height: 50px; border-radius: 50%;">

                                    </div>
                                    <input type="hidden" id="c15" value="darkblue">
                                    <div class="col-1 m-2 next-stepColor15 pshirtColor" style="background-color:darkblue; height: 50px; border-radius: 50%;">

                                    </div>

                                   
                                    <!-- polo shirt end -->

                                    <!-- shirt -->
                                    <input type="hidden" id="c16" value="white">
                                    <div class="col-1 m-2 next-stepColor16 sshirtColor" style="background-color:white; height: 50px; border-radius: 50%;">

                                    </div>
                                    <!-- shirt end -->

                                            <div class="col-12 mt-3">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 18%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">18%</div>
                                                </div>
                                            </div>


                                   </div>
                                    
                                    
                                   <ul class="list-inline d-flex  justify-content-center">
                                        <li><button type="button" class=" btn-secondary default-btn prev-step1">Back</button></li>
                                        <li><button type="button" class="default-btn next-dsad ml-1 buttonSuccess">Continue</button></li>
                                    </ul>
                                </div>








                                <div class="tab-pane" role="tabpanel" id="step3">
                                    <h4 class="text-center card-title">Wählen Sie die Anzahl der passenden Größen aus</h4>
                                    <input type="hidden" id="putcolor" value="">
                                     <div class="row justify-content-center">
                                        <div class="col-10 " >

                                            <table class="table text-center">
                                                <tbody class=" text-center">
                                                    <tr>
                                                    <th scope="row">XS</th>
                                                    <td>
                                                        <input type="button" value="-" class="decrease" />
                                                        <input type="text"  id="six-max" class="getText text-center getXs" value="5"/>
                                                        <input type="button" value="+" class="increase" />
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">S</th>
                                                    <td>

                                                        <input type="button" value="-" class="decrease" />
                                                        <input type="text"  id="three-max" class="getText text-center getS" value="10"/>
                                                        <input type="button" value="+" class="increase" />

                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">M</th>
                                                    <td>
                                                        <input type="button" value="-" class="decrease" />
                                                        <input type="text"  id="nine-max" class="getText text-center getM" value="40">
                                                        <input type="button" value="+" class="increase" />
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">L</th>
                                                    <td>
                                                
                                                        <input type="button" value="-" class="decrease" />
                                                        <input type="text"  id="one-max" class="getText text-center getL" value="40">
                                                        <input type="button" value="+" class="increase" />
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">XL</th>
                                                    <td>
                                                        <input type="button" value="-" class="decrease" />
                                                        <input type="text"  id="two-max" class="getText text-center getXl" value="5">
                                                        <input type="button" value="+" class="increase" />
                                                    </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            


                                        </div>

                                      

                                     
                                       
                                           
                                          

                                            <div class="col-12 mt-3">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 39%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">39%</div>
                                                </div>
                                            </div>


                                     

                                        </div>

                                 
                                    <ul class="list-inline d-flex  justify-content-center">
                                        <li><button type="button" class="default-btn btn-secondary prev-step">Back</button></li>
                                        <li><button type="button" class=" default-btn ml-1 buttonSuccess next-stepSize">Continue</button></li>
                                    </ul>
                                </div>




                                <div class="tab-pane" role="tabpanel" id="step4">
                                    <h4 class="text-center card-title">Wählen Sie die Anzahl der passenden Größen aus</h4>

                                                

                                                <input type="hidden" value="" id="putXs">
                                                <input type="hidden" value="" id="putS">
                                                <input type="hidden" value="" id="putM">
                                                <input type="hidden" value="" id="putL">
                                                <input type="hidden" value="" id="putXl">
                                                    <input type="hidden" disabled class="form-control" id="totalQuan" value="totall">
                                           
                                               

                                     <div class="row justify-content-center">
                                        <div class="col-6" >
                                            <div class="form-group">
                                                <div class="preview-zone hidden">
                                                <div class="box box-solid">
                                                    <div class="box-header with-border">
                                                        <div class="box-tools pull-right">
                                                         
                                                        </div>
                                                    </div>
                                                    <div class="box-body"></div>
                                                </div>
                                                </div>
                                                <div class="dropzone-wrapper mt-3">
                                                <div class="dropzone-desc">
                                                    <i class="glyphicon glyphicon-download-alt"></i>
                                                    <p>Choose an image file or drag it here.</p>
                                                </div>
                                                <input type="file" name="img_logo" class="dropzone">
                                                </div>
                                            </div>
                                                  
                                        

                                        </div>


                                        <div class="col-6" >
                                           <img src="img/men.png" style="height: 300px; width: 100%;" alt="">
                                        </div>


                                        </div>

                                 
                                    <ul class="list-inline d-flex  justify-content-center">
                                        <li><button type="button" class="default-btn btn-secondary prev-step">Back</button></li>
                                        <li><button type="button" class="default-btn next-stepSize20 ml-1 buttonSuccess">Continue</button></li>
                                    </ul>

                                        <div class="col-12 mt-3">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 57%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">57%</div>
                                                </div>
                                            </div>
                                </div>





                                <div class="tab-pane" role="tabpanel" id="step5">
                                    <h4 class="text-center card-title">Kontaktdaten</h4>
                                     <div class="row justify-content-center">
                                       
                                               
                                                    <input type="hidden"  class="form-control" id="totalPrice"  value="price">
                                               


                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Full Name *</label> 
                                                        <input class="form-control" type="text" name="name" id="name" placeholder=""> 
                                                        <p id="p1" class="text-danger">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Company *</label> 
                                                        <input class="form-control" type="text" name="company" id="company" placeholder=""> 
                                                        <p id="p2" class="text-danger">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Email Address *</label> 
                                                        <input class="form-control" type="email" name="email" id="email" placeholder=""> 
                                                        <p id="p3" class="text-danger">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Phone *</label> 
                                                        <input class="form-control" type="number" name="phone" id="phone" placeholder=""> 
                                                        <p id="p4" class="text-danger">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Address *</label> 
                                                        <input class="form-control" type="text" name="address" id="address" placeholder=""> 
                                                        <p id="p5" class="text-danger">
                                                    </div>
                                                </div>


                                    </div>



                                 
                                    <ul class="list-inline d-flex  justify-content-center">
                                        <li><button type="button" class="default-btn btn-secondary prev-step">Back</button></li>
                                        <li><button type="button" class="default-btn next-stepSize00 ml-1 buttonSuccess">Continue</button></li>
                                    </ul>

                                            <div class="col-12 mt-3">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 83%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">83%</div>
                                                </div>
                                            </div>
                                </div>

                           
                                <div class="tab-pane" role="tabpanel" id="step6">
                                    <h4 class="text-center card-title">Übersicht</h4>
                                     <div class="row justify-content-center">
                                        <div class="col-12" >

                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                    <th scope="row">Full name</th>
                                                    <td><input  disabled type="text" class="form-control putname"></td>
                                                    <th scope="row">Product Color</th>
                                                    <td><input  disabled type="text" class="form-control putSColor" ></td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">Email</th>
                                                    <td><input  disabled type="text" class="form-control putemail"></td>
                                                    <th scope="row">XS</th>
                                                    <td><input  disabled type="number" class="form-control putSXS" ></td>
                                                  
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">Company</th>
                                                    <td><input  disabled type="text" class="form-control putcompany"></td>
                                                    <th scope="row">S</th>
                                                    <td><input  disabled type="number" class="form-control putSS" ></td>
                                                
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">Phone</th>
                                                    <td><input  disabled type="text" class="form-control putphone" ></td>
                                                    <th scope="row">M</th>
                                                    <td><input  disabled type="number" class="form-control putSM" ></td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">Address</th>
                                                    <td><input  disabled type="text" class="form-control putaddres"></td>
                                                    <th scope="row">L</th>
                                                    <td><input  disabled type="number" class="form-control putSL" ></td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">Product</th>
                                                    <td><input  disabled type="text" value="" class="form-control putSType"  ></td>
                                                    <th scope="row">XL</th>
                                                    <td><input  disabled type="number" class="form-control putSXL"  ></td>
                                                    </tr>

                                                    <tr>
                                                    <th scope="row">Quantity</th>
                                                    <td><input  disabled type="text" value="" class="form-control putQuant"  ></td>
                                                    <th scope="row">Price (€)</th>
                                                    <td><input  disabled type="number" class="form-control putPrice"  ></td>
                                                    </tr>
                                                </tbody>
                                                </table>


                                        </div>

                                            <div class="col-12 mt-3">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">100%</div>
                                                </div>
                                            </div>

                                        </div>

                                 
                                    <ul class="list-inline d-flex  justify-content-center">
                                        <button type="button" class="default-btn btn-secondary prev-step">Back</button>
                                            <button type="button" class="default-btn btn-success next-stepSize ml-1" data-toggle="modal" data-target="#exampleModal">
                                            Proceed to checkout (you won’t be charged yet)
                                            </button>


                                           

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Payment Details</h5>

                                                     



                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="container">
    
                                                        <input   type="hidden" class="form-control putname"  name="fullName" >
                                                        <input   type="hidden" class="form-control putemail" name="email">
                                                        <input   type="hidden" class="form-control putSColor" name="shirtColor" >
                                                        <input   type="hidden" class="form-control putSXS"  name="xs">
                                                        <input   type="hidden" class="form-control putcompany" name="company">
                                                        <input   type="hidden" class="form-control putSS" name="s" >
                                                
                                                        <input   type="hidden" class="form-control putphone" name="phone">
                                                        <input   type="hidden" class="form-control putSM" name="m">
                                                        <input   type="hidden" class="form-control putaddres" name="address">
                                                        <input   type="hidden" class="form-control putSL" name="l">
                                                        <input   type="hidden" value="" class="form-control putSType" name="shirtType" >
                                                        <input   type="hidden" class="form-control putSXL" name="xl" >
                                                        <input   type="hidden" value="" class="form-control putQuant" name="quantity" >
                                                        <input   type="hidden" class="form-control putPrice" name="price" >


                                                                <div class="row">
                                                                    <div class="col-12 col-md-offset-3">
                                                                        <div class="panel panel-default credit-card-box">
                                                                            <div class="panel-body">
                                                                
                                                                                @if (Session::has('success'))
                                                                                    <div class="alert alert-success text-center">
                                                                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                                                                        <p>{{ Session::get('success') }}</p>
                                                                                    </div>
                                                                                @endif
                                                                
                                                                             
                                                                                    <div class='form-row row'>
                                                                                        <div class='col-12 form-group  required'>
                                                                                            <label class='control-label'>Amount (€) </label> 
                                                                                            <input   type="text" disabled class="form-control putPrice"   >

                                                                                        </div>
                                                                                    </div>
                                                                
                                                                
                                                                                    <div class='form-row row'>
                                                                                        <div class='col-12 form-group required'>
                                                                                            <label class='control-label'>Recipient Name *</label> <input
                                                                                                class='form-control' id="card_name" size='4' type='text'>
                                                                                                <p id="p1card" class="text-danger">
                                                                                        </div>
                                                                                    </div>
                                                                
                                                                                    <div class='form-row row'>
                                                                                        <div class='col-12 form-group  required'>
                                                                                            <label class='control-label'>IBAN *</label> <input
                                                                                                autocomplete='off' id="cardNi" class='form-control card-number' size='20'
                                                                                                type='text'>
                                                                                                <p id="p2num" class="text-danger">
                                                                                        </div>
                                                                                    </div>
                                                                
                                                                                    <div class='form-row row'>
                                                                                        <div class='col-xs-12 col-md-4 form-group cvc required'>
                                                                                            <label class='control-label'>CVC</label> <input autocomplete='off'
                                                                                                class='form-control card-cvc' id="cvc" placeholder='ex. 311' size='4'
                                                                                                type='text'>
                                                                                                <p id="p3cvv" class="text-danger">
                                                                                        </div>
                                                                                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                                                            <label class='control-label'>Expiration Month</label> <input
                                                                                                class='form-control card-expiry-month' id="nob" placeholder='MM' size='2'
                                                                                                type='text'>
                                                                                                <p id="p4mon" class="text-danger">
                                                                                        </div>
                                                                                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                                                            <label class='control-label'>Expiration Year</label> <input
                                                                                                class='form-control card-expiry-year' id="year" placeholder='YYYY' size='4'
                                                                                                type='text'>
                                                                                                <p id="p5year" class="text-danger">
                                                                                        </div>
                                                                                    </div>
                                                                
                                                                                   
                                                                
                                                                                    <div class="row">
                                                                                        <div class="col-12">

                                                                                            <button class="btn btn-success btn-lg btn-block putPrice" id="newsuibv" type="submit">Pay Now</button>
                                                                                        </div>
                                                                                    </div>
                                                                                        
                                                                                </form>
                                                                            </div>
                                                                        </div>        
                                                                    </div>
                                                                </div>
                                                                    
                                                            </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </ul>
                                </div>
                               </form>






                            





                                <div class="clearfix"></div>
                            </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </section>

<script src="{{asset('js/app.js')}}"></script>

  <!-- toaster js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <!-- toaster script -->
  <script>
    @if(Session::has('message'))
    var type = "{{ Session ::get('alert_type','danger') }}"
    switch(type){
        case 'info':
        toastr.info("{{ Session ::get('message') }}");
        break;
        case 'success':
        toastr.success("{{ Session ::get('message') }}");
        break;
        case 'warning':
        toastr.warning("{{ Session ::get('message') }}");
        break;
        case 'error':
        toastr.error("{{ Session ::get('message') }}");
        break;
    }
    @endif
  </script>
  <!-- toaster script end --> 





  <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    
<script type="text/javascript">
  
$(function() {
  
    /*------------------------------------------
    --------------------------------------------
    Stripe Payment Code
    --------------------------------------------
    --------------------------------------------*/
    
    var $form = $(".require-validation");
     
    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid = true;
        $errorMessage.addClass('hide');
    
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
          var $input = $(el);
          if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });
     
        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
        }
    
    });
      
    /*------------------------------------------
    --------------------------------------------
    Stripe Response Handler
    --------------------------------------------
    --------------------------------------------*/
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
                 
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
     
});
</script>



    </body>
</html>