@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div>
            <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
                <div class="col-md-12 p-lg-12 mx-auto my-1">
                    <h1 class="display-5 text-primary">PRODUCTS BELOW ARE ON SALE.</h1>
                    <p class="lead fw-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <button type="button" class="btn btn-warning btn-lg" id="liveToastBtn">Explore now</button>
                </div>
                <!-- Toast Message -->
                <div class="toast-container position-fixed bottom-0 end-0 p-3">
                <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                    <img src="..." class="rounded me-2" alt="...">
                    <strong class="me-auto">Bootstrap</strong>
                    <small>11 mins ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                    Below is our product sale. Go check it out!
                    </div>
                </div>
</div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card text-bg-primary">
                <div class="card-header text-center text-light"><h1>PRODUCTS</h1></div>

                <div class="card-body">
                </div>
                <div class="row m-3">
                <div class="col ">
                    <div class="card " style="width: 18rem;">
                    <img src="https://img.freepik.com/free-vector/digital-device-mockup_53876-89354.jpg?w=826&t=st=1674051401~exp=1674052001~hmac=8fe4310ceae646c04ba324de00b39140e7865e6f91fb6fb526051eb5e025a5d5">
                    <div class="card-body">
                        <form action="{{ route('payment') }}" method="post">
                            @csrf
                            <h2 class="card-title text-primary">Smartphone</h2>
                            <p class="card-text text-dark">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                            <input type="hidden" name="amount" value="150">
                            <button type="submit" class="btn btn-warning">Buy Now!</button>
                        </form>
                        
                        
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                    <img src="https://img.freepik.com/free-vector/digital-device-mockup_53876-89360.jpg?size=338&ext=jpg&ga=GA1.1.15173630.1657701193&semt=sph">
                    <div class="card-body">
                        <form action="{{ route('payment') }}" method="post">
                            @csrf
                            <h2 class="card-title text-primary">Laptop</h2>
                            <p class="card-text text-dark">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                            <input type="hidden" name="amount" value="150">
                            <button type="submit" class="btn btn-warning">Buy Now!</button>
                        </form>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                    <img src="https://img.freepik.com/premium-photo/isolated-professional-grade-headphones-djs-musicians_94046-1821.jpg?w=826">
                    <div class="card-body">
                        <form action="{{ route('payment') }}" method="post">
                            @csrf
                            <h2 class="card-title text-primary">Headphone</h2>
                            <p class="card-text text-dark">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                            <input type="hidden" name="amount" value="150">
                            <button type="submit" class="btn btn-warning">Buy Now!</button>
                        </form>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                    <img src="https://img.freepik.com/free-photo/black-usb-flash-drive-mockup-technology-data-storage-device_53876-97317.jpg?w=826&t=st=1674051370~exp=1674051970~hmac=c13f8a15fc338e4badd192e300b8654f17dd6da5583e8d118e65e822d9180a13" class="card-img-top" alt="https://images.unsplash.com/photo-1591337676887-a217a6970a8a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80">
                    <div class="card-body">
                        <form action="{{ route('payment') }}" method="post">
                            @csrf
                            <h2 class="card-title text-primary">Flashdrive</h2>
                            <p class="card-text text-dark">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                            <input type="hidden" name="amount" value="150">
                            <button type="submit" class="btn btn-warning">Buy Now!</button>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
