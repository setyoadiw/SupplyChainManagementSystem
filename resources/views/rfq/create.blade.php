@extends('layouts.app') 
@section('js')
<link href="{{asset('/datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
<script type="text/javascript" src="{{asset('/datepicker/js/bootstrap-datepicker.min.js')}}"></script>

<script>

     $(document).ready(function () {
                $('.tanggal').datepicker({
                    format: "dd-mm-yyyy",
                    autoclose:true
                });
    });

</script>

<script>
      var biaya =0;
     $('#jumlah').bind('input', function() { 
       
       var jumlah= $(this).val() // get the current value of the input field.
       var total = jumlah*biaya;

      document.getElementById('biaya').value= total; 
    });
    </script>

<script>
    function myFunction(val) {
        
        var explode = val.split('|');
        var qty = document.getElementById("qty").value;
        biaya = explode[1] * qty;
        console.log('biaya');

        document.getElementById('total').value=biaya ; 
        document.getElementById('stok').value=explode[2] ; 

    }
</script>
@endsection
@section('bar')
<div class="nav-scroller bg-white shadow-sm">
    <nav class="nav nav-underline">
        <a class="nav-link" href="{{route('rfq')}}">RFQ</a>
        <a class="nav-link" href="#">Create</a>
        {{--
        <a class="nav-link" href="#">
            Friends
            <span class="badge badge-pill bg-light align-text-bottom">27</span>
        </a>
        <a class="nav-link" href="#">Explore</a>
        <a class="nav-link" href="#">Suggestions</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a> --}}
    </nav>
</div>
@endsection @section('nav')
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <a class="navbar-brand mr-auto mr-lg-2" href="#">Supply Chain</a>
    <button
        class="navbar-toggler p-0 border-0"
        type="button"
        data-toggle="offcanvas"
    >
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link " href="{{route('vendors')}}">Vendor</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{route('rfq')}}">Request for Quotation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('rfq')}}">Purchase Order</a>
            </li>
        </ul>

        @guest
        <div class="navbar-nav form-inline nav-item my-2 my-lg-0">
            <li>
                <a class="nav-link" href="{{ route('login') }}">{{
                    __("Login")
                }}</a>
            </li>
            <li>
                <a class="nav-link disabled">{{ __("Register") }}</a>
            </li>
        </div>
        @else
        <li class="navbar-nav form-inline nav-item dropdown my-2 my-lg-0">
            <a
                id="navbarDropdown"
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                v-pre
            >
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a
                    class="dropdown-item"
                    href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"
                >
                    {{ __("Logout") }}
                </a>

                <form
                    id="logout-form"
                    action="{{ route('logout') }}"
                    method="POST"
                    style="display: none;"
                >
                    @csrf
                </form>
            </div>
        </li>
        @endguest
    </div>
</nav>
@endsection @section('content')

<div class="my-3 p-3 bg-white rounded shadow-sm">
    <div class="container">
        
        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                
            </div>


            <!-- line break -->
            <div class="col-md-8 order-md-1 ">
                <h4 class="mb-3">Request for Quotation</h4>
                <form method="POST" action="{{ route('postrfq') }}" class="needs-validation" enctype="multipart/form-data" >
                 @csrf
                    <div class="mb-3">
                        <label for="username">Vendor</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                
                            </div>
                            <select class="custom-select d-block w-100" id="vendors" name="vendors" required>
                            <option name="vendors" value="">vendors</option>
                                @foreach($vendors as $data)
                                    <option value="{{$data->name}}">{{$data->name}}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback" style="width: 100%;">
                                Vendors is required.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email"
                            >Vendor Reference
                            </label
                        >
                        <input
                            type="text"
                            name="vendorreference"
                            class="form-control"
                            id="vendorreference"
                            
                        />
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping
                            updates.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">Schedule Date</label>
                        <input type="text" name="orderdate" class="form-control tanggal" required/>
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>

                    <hr class="mb-4" />
                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="country">Product</label>
                            
                            <select
                                onchange="myFunction(this.value)"
                                class="custom-select d-block w-100"
                                id="country"
                                name="country"
                            >
                                <option value="">Choose...</option>
                                @foreach ($produk as $data)
                                <option value="{{$data->id}}|{{$data->harga}}">{{$data->name}}</option>
                                    
                                @endforeach
                                
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>
                        
                        <div class="col-md-3 mb-3">
                            <label for="zip">Qty</label>
                            <input
                                type="number"
                                class="form-control"
                                name="qty"
                                id="qty"                                
                                placeholder=""
                                
                            />
                            <div class="invalid-feedback">
                                qty required.
                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="zip">Total</label>
                            <input
                                type="number"
                                id="total"
                                class="form-control"
                                name="total"
                                placeholder=""
                                
                            />
                            <div class="invalid-feedback">
                                qty required.
                            </div>
                        </div>
                    </div>
                    

                    
                   
                    <hr class="mb-4" />
                    <button
                        class="btn btn-primary btn-lg btn-block"
                        type="submit"
                    >
                        Save
                    </button>
                </form>
            </div>
        </div>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2017-2019 Company Name</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>
</div>

@endsection
