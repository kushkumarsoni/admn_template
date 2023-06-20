@extends('layouts.backend')
@section('title','Admin Dashboard')
@section('content')
    <!--Main Body-->
        <!-- main Section -->
        <div class="main-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-25">
                        <div class="status-card bg-grad-1">
                            <div class="status-text">
                                <div class="status-name opacity50">Total</div>
                                <div class="status-name opacity50">Orders</div>
                                <h2 class="status-count">19</h2>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="rgba(255,255,255,0.2)" fill-opacity="1" d="M0,32L34.3,58.7C68.6,85,137,139,206,138.7C274.3,139,343,85,411,53.3C480,21,549,11,617,10.7C685.7,11,754,21,823,42.7C891.4,64,960,96,1029,138.7C1097.1,181,1166,235,1234,218.7C1302.9,203,1371,117,1406,74.7L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-25">
                        <div class="status-card bg-grad-2">
                            <div class="status-text">
                                <div class="status-name opacity50">Orders</div>
                                <div class="status-name opacity50">Awaiting processing</div>
                                <h2 class="status-count">8</h2>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="rgba(255,255,255,0.2)" fill-opacity="1" d="M0,32L34.3,58.7C68.6,85,137,139,206,138.7C274.3,139,343,85,411,53.3C480,21,549,11,617,10.7C685.7,11,754,21,823,42.7C891.4,64,960,96,1029,138.7C1097.1,181,1166,235,1234,218.7C1302.9,203,1371,117,1406,74.7L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-25">
                        <div class="status-card bg-grad-3">
                            <div class="status-text">
                                <div class="status-name opacity50">Orders</div>
                                <div class="status-name opacity50">Processing</div>
                                <h2 class="status-count">0</h2>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="rgba(255,255,255,0.2)" fill-opacity="1" d="M0,32L34.3,58.7C68.6,85,137,139,206,138.7C274.3,139,343,85,411,53.3C480,21,549,11,617,10.7C685.7,11,754,21,823,42.7C891.4,64,960,96,1029,138.7C1097.1,181,1166,235,1234,218.7C1302.9,203,1371,117,1406,74.7L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-25">
                        <div class="status-card bg-grad-4">
                            <div class="status-text">
                                <div class="status-name opacity50">Orders</div>
                                <div class="status-name opacity50">Ready for pickup</div>
                                <h2 class="status-count">0</h2>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="rgba(255,255,255,0.2)" fill-opacity="1" d="M0,32L34.3,58.7C68.6,85,137,139,206,138.7C274.3,139,343,85,411,53.3C480,21,549,11,617,10.7C685.7,11,754,21,823,42.7C891.4,64,960,96,1029,138.7C1097.1,181,1166,235,1234,218.7C1302.9,203,1371,117,1406,74.7L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
                            </svg>
                        </div>
                    </div>
                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-25">
                        <div class="status-card bg-grad-5">
                            <div class="status-text">
                                <div class="status-name opacity50">Orders</div>
                                <div class="status-name opacity50">Completed</div>
                                <h2 class="status-count">11</h2>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="rgba(255,255,255,0.2)" fill-opacity="1" d="M0,32L34.3,58.7C68.6,85,137,139,206,138.7C274.3,139,343,85,411,53.3C480,21,549,11,617,10.7C685.7,11,754,21,823,42.7C891.4,64,960,96,1029,138.7C1097.1,181,1166,235,1234,218.7C1302.9,203,1371,117,1406,74.7L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-25">
                        <div class="status-card bg-grad-6">
                            <div class="status-text">
                                <div class="status-name opacity50">Orders</div>
                                <div class="status-name opacity50">Canceled</div>
                                <h2 class="status-count">0</h2>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="rgba(255,255,255,0.2)" fill-opacity="1" d="M0,32L34.3,58.7C68.6,85,137,139,206,138.7C274.3,139,343,85,411,53.3C480,21,549,11,617,10.7C685.7,11,754,21,823,42.7C891.4,64,960,96,1029,138.7C1097.1,181,1166,235,1234,218.7C1302.9,203,1371,117,1406,74.7L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-25">
                        <div class="status-card bg-grad-7">
                            <div class="status-text">
                                <div class="status-name opacity50">Total</div>
                                <div class="status-name opacity50">Published Products</div>
                                <h2 class="status-count">33</h2>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="rgba(255,255,255,0.2)" fill-opacity="1" d="M0,32L34.3,58.7C68.6,85,137,139,206,138.7C274.3,139,343,85,411,53.3C480,21,549,11,617,10.7C685.7,11,754,21,823,42.7C891.4,64,960,96,1029,138.7C1097.1,181,1166,235,1234,218.7C1302.9,203,1371,117,1406,74.7L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-25">
                        <div class="status-card bg-grad-8">
                            <div class="status-text">
                                <div class="status-name opacity50">Total</div>
                                <div class="status-name opacity50">Published Categories</div>
                                <h2 class="status-count">11</h2>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="rgba(255,255,255,0.2)" fill-opacity="1" d="M0,32L34.3,58.7C68.6,85,137,139,206,138.7C274.3,139,343,85,411,53.3C480,21,549,11,617,10.7C685.7,11,754,21,823,42.7C891.4,64,960,96,1029,138.7C1097.1,181,1166,235,1234,218.7C1302.9,203,1371,117,1406,74.7L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-25">
                        <div class="status-card bg-grad-9">
                            <div class="status-text">
                                <div class="status-name opacity50">Total</div>
                                <div class="status-name opacity50">Published Brands</div>
                                <h2 class="status-count">7</h2>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="rgba(255,255,255,0.2)" fill-opacity="1" d="M0,32L34.3,58.7C68.6,85,137,139,206,138.7C274.3,139,343,85,411,53.3C480,21,549,11,617,10.7C685.7,11,754,21,823,42.7C891.4,64,960,96,1029,138.7C1097.1,181,1166,235,1234,218.7C1302.9,203,1371,117,1406,74.7L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-25">
                        <div class="status-card bg-grad-10">
                            <div class="status-text">
                                <div class="status-name opacity50">Total</div>
                                <div class="status-name opacity50">Review &amp; Ratings</div>
                                <h2 class="status-count">21</h2>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="rgba(255,255,255,0.2)" fill-opacity="1" d="M0,32L34.3,58.7C68.6,85,137,139,206,138.7C274.3,139,343,85,411,53.3C480,21,549,11,617,10.7C685.7,11,754,21,823,42.7C891.4,64,960,96,1029,138.7C1097.1,181,1166,235,1234,218.7C1302.9,203,1371,117,1406,74.7L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-25">
                        <div class="status-card bg-grad-11">
                            <div class="status-text">
                                <div class="status-name opacity50">Total</div>
                                <div class="status-name opacity50">Customers</div>
                                <h2 class="status-count">3</h2>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="rgba(255,255,255,0.2)" fill-opacity="1" d="M0,32L34.3,58.7C68.6,85,137,139,206,138.7C274.3,139,343,85,411,53.3C480,21,549,11,617,10.7C685.7,11,754,21,823,42.7C891.4,64,960,96,1029,138.7C1097.1,181,1166,235,1234,218.7C1302.9,203,1371,117,1406,74.7L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-25">
                        <div class="status-card bg-grad-12">
                            <div class="status-text">
                                <div class="status-name opacity50">Total</div>
                                <div class="status-name opacity50">Out of Stock Products</div>
                                <h2 class="status-count">0</h2>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="rgba(255,255,255,0.2)" fill-opacity="1" d="M0,32L34.3,58.7C68.6,85,137,139,206,138.7C274.3,139,343,85,411,53.3C480,21,549,11,617,10.7C685.7,11,754,21,823,42.7C891.4,64,960,96,1029,138.7C1097.1,181,1166,235,1234,218.7C1302.9,203,1371,117,1406,74.7L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
                            </svg>
                        </div>
                    </div> --}}
                </div>
                
                {{-- <div class="row">
                    <div class="col-lg-6 mt-25">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span>Top 10 Selling Products</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-borderless table-theme" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th class="text-left" style="width:80%">Products</th>
                                                <th class="text-center" style="width:20%">Selling</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                                                                                    <tr>
                                                <td class="text-left"><a href="http://localhost/organis/product/150/snow-crab">Snow Crab</a></td>
                                                <td class="text-center">11</td> 
                                            </tr>
                                                                                <tr>
                                                <td class="text-left"><a href="http://localhost/organis/product/159/lotus-seeds-2">Lotus Seeds</a></td>
                                                <td class="text-center">8</td> 
                                            </tr>
                                                                                <tr>
                                                <td class="text-left"><a href="http://localhost/organis/product/158/pistachio-2">Pistachio</a></td>
                                                <td class="text-center">8</td> 
                                            </tr>
                                                                                <tr>
                                                <td class="text-left"><a href="http://localhost/organis/product/152/pomegranate-juice-2">Pomegranate juice</a></td>
                                                <td class="text-center">7</td> 
                                            </tr>
                                                                                <tr>
                                                <td class="text-left"><a href="http://localhost/organis/product/154/dairy-products">Dairy Products</a></td>
                                                <td class="text-center">6</td> 
                                            </tr>
                                                                                <tr>
                                                <td class="text-left"><a href="http://localhost/organis/product/157/walnuts">Walnuts</a></td>
                                                <td class="text-center">5</td> 
                                            </tr>
                                                                                <tr>
                                                <td class="text-left"><a href="http://localhost/organis/product/153/fruit-juice">Fruit Juice</a></td>
                                                <td class="text-center">5</td> 
                                            </tr>
                                                                                <tr>
                                                <td class="text-left"><a href="http://localhost/organis/product/155/cheese">Cheese</a></td>
                                                <td class="text-center">5</td> 
                                            </tr>
                                                                                <tr>
                                                <td class="text-left"><a href="http://localhost/organis/product/160/potato">Potato</a></td>
                                                <td class="text-center">5</td> 
                                            </tr>
                                                                                <tr>
                                                <td class="text-left"><a href="http://localhost/organis/product/147/chicken">Chicken</a></td>
                                                <td class="text-center">5</td> 
                                            </tr>
                                                                                                                </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-25">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span>Top 10 Rating Products</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-borderless table-theme" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th class="text-left" style="width:70%">Products</th>
                                                <th class="text-center" style="width:15%">Reviews</th>
                                                <th class="text-center" style="width:15%">Ratings</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                                                                                    <tr>
                                                <td class="text-left"><a href="http://localhost/organis/product/157/walnuts">Walnuts</a></td>
                                                <td class="text-center">4</td> 
                                                <td class="text-center">17</td> 
                                            </tr>
                                                                                <tr>
                                                <td class="text-left"><a href="http://localhost/organis/product/160/potato">Potato</a></td>
                                                <td class="text-center">3</td> 
                                                <td class="text-center">15</td> 
                                            </tr>
                                                                                <tr>
                                                <td class="text-left"><a href="http://localhost/organis/product/155/cheese">Cheese</a></td>
                                                <td class="text-center">2</td> 
                                                <td class="text-center">10</td> 
                                            </tr>
                                                                                <tr>
                                                <td class="text-left"><a href="http://localhost/organis/product/154/dairy-products">Dairy Products</a></td>
                                                <td class="text-center">2</td> 
                                                <td class="text-center">10</td> 
                                            </tr>
                                                                                <tr>
                                                <td class="text-left"><a href="http://localhost/organis/product/152/pomegranate-juice-2">Pomegranate juice</a></td>
                                                <td class="text-center">2</td> 
                                                <td class="text-center">10</td> 
                                            </tr>
                                                                                <tr>
                                                <td class="text-left"><a href="http://localhost/organis/product/161/red-pepper-2">Red Pepper</a></td>
                                                <td class="text-center">2</td> 
                                                <td class="text-center">8</td> 
                                            </tr>
                                                                                <tr>
                                                <td class="text-left"><a href="http://localhost/organis/product/159/lotus-seeds-2">Lotus Seeds</a></td>
                                                <td class="text-center">1</td> 
                                                <td class="text-center">5</td> 
                                            </tr>
                                                                                <tr>
                                                <td class="text-left"><a href="http://localhost/organis/product/158/pistachio-2">Pistachio</a></td>
                                                <td class="text-center">1</td> 
                                                <td class="text-center">5</td> 
                                            </tr>
                                                                                <tr>
                                                <td class="text-left"><a href="http://localhost/organis/product/153/fruit-juice">Fruit Juice</a></td>
                                                <td class="text-center">1</td> 
                                                <td class="text-center">5</td> 
                                            </tr>
                                                                                <tr>
                                                <td class="text-left"><a href="http://localhost/organis/product/151/cocktail-soft-drink-juice">Cocktail Soft Drink Juice</a></td>
                                                <td class="text-center">1</td> 
                                                <td class="text-center">5</td> 
                                            </tr>
                                                                                                                </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- /main Section -->
    <!--/Main Body/-->
@endsection

@push('scripts')

@endpush