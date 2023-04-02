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
           #testDiv {
                width: 400px;
                display: flex;
                overflow-x: auto;
                }

                .testimgdiv {
                width: 120px;
                height: 100px;
                flex: 0 0 auto;
                }
        </style>
    </head>

    <body>
        
        <div class="container-fluid mt-4 ">
            <div class="row">
                <div class="col-12">
                    <h4 class="text-center card-title"><b>Data history</b></h4>
                    <hr>

                </div>
                <div class="col-12" id="testDiv">
                    <table class="table testimgdiv"  >
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">FullName</th>
                            <th scope="col">Email</th>
                            <th scope="col">Company</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Address</th>
                            <th scope="col">Product</th>
                            <th scope="col">Color</th>
                            <th scope="col">Logo</th>
                            <th scope="col">Size(XL)</th>
                            <th scope="col">Size(L)</th>
                            <th scope="col">Size(M)</th>
                            <th scope="col">Size(S)</th>
                            <th scope="col">Size(XS)</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $da)
                        <tr>
                                <th scope="row">{{$da->id}}</th>
                                <td>{{$da->fullName}}</td>
                                <td>{{$da->email}}</td>
                                <td>{{$da->company}}</td>
                                <td>{{$da->phone}}</td>
                                <td>{{$da->address}}</td>
                                <td>{{$da->shirtType}}</td>
                                <td>{{$da->shirtColor}}</td>
                                <td>
                                    <img src="{{ url('img/brand/'.$da->photo) }}"
                                    style="height: 50px; width: 55px;">
                                </td>

                                <td>{{$da->xl}}</td>
                                <td>{{$da->l}}</td>
                                <td>{{$da->m}}</td>
                                <td>{{$da->s}}</td>
                                <td>{{$da->xs}}</td>
                                <td>{{$da->quantity}}</td>
                                <td>{{$da->price}} €</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                  
                </div>

                <div class="col-2  text-center ">

                    {{ $data->links() }}

                </div>
            </div>
        </div>


    </body>
</html>