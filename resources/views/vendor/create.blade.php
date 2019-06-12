@extends('layouts.app') @section('bar')
<div class="nav-scroller bg-white shadow-sm">
    <nav class="nav nav-underline">
        <a class="nav-link" href="#">Vendor</a>
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
                <a class="nav-link active" href="{{route('vendors')}}">Vendor</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Request for Quotation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Purchase Order</a>
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
            <!-- <div class="col-md-4 order-md-2 mb-4">
                <h4
                    class="d-flex justify-content-between align-items-center mb-3"
                >
                    <span class="text-muted">Your cart</span>
                    <span class="badge badge-secondary badge-pill">3</span>
                </h4>
                <ul class="list-group mb-3">
                    <li
                        class="list-group-item d-flex justify-content-between lh-condensed"
                    >
                        <div>
                            <h6 class="my-0">Product name</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">$12</span>
                    </li>
                    <li
                        class="list-group-item d-flex justify-content-between lh-condensed"
                    >
                        <div>
                            <h6 class="my-0">Second product</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">$8</span>
                    </li>
                    <li
                        class="list-group-item d-flex justify-content-between lh-condensed"
                    >
                        <div>
                            <h6 class="my-0">Third item</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">$5</span>
                    </li>
                    <li
                        class="list-group-item d-flex justify-content-between bg-light"
                    >
                        <div class="text-success">
                            <h6 class="my-0">Promo code</h6>
                            <small>EXAMPLECODE</small>
                        </div>
                        <span class="text-success">-$5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (USD)</span>
                        <strong>$20</strong>
                    </li>
                </ul>

                <form class="card p-2">
                    <div class="input-group">
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Promo code"
                        />
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary">
                                Redeem
                            </button>
                        </div>
                    </div>
                </form>
            </div> -->
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Create Vendor</h4>
                <form class="needs-validation" novalidate>
                    <div class="row">
                        
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Name</label>
                            <input
                                type="text"
                                class="form-control"
                                id="firstName"
                                placeholder=""
                                value=""
                                required
                            />
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input
                                type="text"
                                class="form-control"
                                id="lastName"
                                placeholder=""
                                value=""
                                required
                            />
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="username">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input
                                type="text"
                                class="form-control"
                                id="username"
                                placeholder="Username"
                                required
                            />
                            <div class="invalid-feedback" style="width: 100%;">
                                Your username is required.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email"
                            >Email
                            <span class="text-muted">(Optional)</span></label
                        >
                        <input
                            type="email"
                            class="form-control"
                            id="email"
                            placeholder="you@example.com"
                        />
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping
                            updates.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input
                            type="text"
                            class="form-control"
                            id="address"
                            placeholder="1234 Main St"
                            required
                        />
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address2"
                            >Address 2
                            <span class="text-muted">(Optional)</span></label
                        >
                        <input
                            type="text"
                            class="form-control"
                            id="address2"
                            placeholder="Apartment or suite"
                        />
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="country">Country</label>
                            <select
                                class="custom-select d-block w-100"
                                id="country"
                                required
                            >
                                <option value="">Choose...</option>
                                <option>United States</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="state">State</label>
                            <select
                                class="custom-select d-block w-100"
                                id="state"
                                required
                            >
                                <option value="">Choose...</option>
                                <option>California</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="zip">Zip</label>
                            <input
                                type="text"
                                class="form-control"
                                id="zip"
                                placeholder=""
                                required
                            />
                            <div class="invalid-feedback">
                                Zip code required.
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4" />
                    <div class="custom-control custom-checkbox">
                        <input
                            type="checkbox"
                            class="custom-control-input"
                            id="same-address"
                        />
                        <label class="custom-control-label" for="same-address"
                            >Shipping address is the same as my billing
                            address</label
                        >
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input
                            type="checkbox"
                            class="custom-control-input"
                            id="save-info"
                        />
                        <label class="custom-control-label" for="save-info"
                            >Save this information for next time</label
                        >
                    </div>
                    <hr class="mb-4" />

                    <h4 class="mb-3">Payment</h4>

                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input
                                id="credit"
                                name="paymentMethod"
                                type="radio"
                                class="custom-control-input"
                                checked
                                required
                            />
                            <label class="custom-control-label" for="credit"
                                >Credit card</label
                            >
                        </div>
                        <div class="custom-control custom-radio">
                            <input
                                id="debit"
                                name="paymentMethod"
                                type="radio"
                                class="custom-control-input"
                                required
                            />
                            <label class="custom-control-label" for="debit"
                                >Debit card</label
                            >
                        </div>
                        <div class="custom-control custom-radio">
                            <input
                                id="paypal"
                                name="paymentMethod"
                                type="radio"
                                class="custom-control-input"
                                required
                            />
                            <label class="custom-control-label" for="paypal"
                                >PayPal</label
                            >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cc-name">Name on card</label>
                            <input
                                type="text"
                                class="form-control"
                                id="cc-name"
                                placeholder=""
                                required
                            />
                            <small class="text-muted"
                                >Full name as displayed on card</small
                            >
                            <div class="invalid-feedback">
                                Name on card is required
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cc-number">Credit card number</label>
                            <input
                                type="text"
                                class="form-control"
                                id="cc-number"
                                placeholder=""
                                required
                            />
                            <div class="invalid-feedback">
                                Credit card number is required
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="cc-expiration">Expiration</label>
                            <input
                                type="text"
                                class="form-control"
                                id="cc-expiration"
                                placeholder=""
                                required
                            />
                            <div class="invalid-feedback">
                                Expiration date required
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="cc-cvv">CVV</label>
                            <input
                                type="text"
                                class="form-control"
                                id="cc-cvv"
                                placeholder=""
                                required
                            />
                            <div class="invalid-feedback">
                                Security code required
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4" />
                    <button
                        class="btn btn-primary btn-lg btn-block"
                        type="submit"
                    >
                        Continue to checkout
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
