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
        
                            <div class="tab-content" id="main_form">





                                <div class="tab-pane active" role="tabpanel" id="step1">
                                    <!-- <h4 class="text-center card-title">Thanku !</h4> -->
                                      <div class="row text-center mb-5">


                                            <div class="col-12 mt-2 ">
                                                <div class="card first-step" >
                                                    <div class="card-body">
                                                        <h5 class="card-title my-3" id="tshirt">
                                                            Your order has been placed successfully!
                                                            <br>

                                                           <a href="{{url('/')}}">
                                                            <button class="btn btn-secondary mt-5">Return back!</button>
                                                           </a>

                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>


                                </div>






                    </div>
                </div>
            </div>
        </div>
    </section>


    </body>
</html>