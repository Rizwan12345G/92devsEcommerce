<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <base href="/public">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">
    <title>Famms - Fashion HTML Template</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="frontend/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="frontend/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="frontend/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="frontend/css/responsive.css" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('Frontend.header')
        <!-- end header section -->


    <!-- why section -->

    <div class="container" style="margin-top: 40px">
        <div class="row">
            <div class="col-md-6">
                <div class="product-image">
                    <img src="{{ asset('images/' . $product->img) }}" alt="{{ $product->name }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-details">
                    <h2>{{ $product->name }}</h2>
                    <p>{{ $product->description }}</p>
                    <p><strong>Price:</strong> ${{ $product->price }}</p>
                    <p><strong>Discount:</strong> ${{ $product->discount }}</p>
                    <p><strong>Availability:</strong> {{ $product->quantity > 0 ? 'In Stock' : 'Out of Stock' }}</p>


                    <!-- Add to Cart Form -->
                    {{-- <form action="{{ route('cart.add', $product->id) }}" method="POST"> --}}
                        @csrf
                        <div class="form-group">
                            <label for="quantity">Quantity:</label>
                            <input type="number" name="quantity" id="quantity" class="form-control" value="1" min="1">
                        </div>
                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                    </form>

                    <!-- Additional Options -->
                    <div class="product-options">
                        <!-- You can add more options or features here -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- footer start -->
    @include('Frontend.footer')
    <!-- footer end -->
    <div class="cpy_">
        <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>

            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>

        </p>
    </div>
    <!-- jQery -->
    <script src="frontend/js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="frontend/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="frontend/js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="frontend/js/custom.js"></script>
</body>

</html>
