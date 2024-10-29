@extends('admin.layouts.app')
@section('content')



    <div class="page-content">

        <!-- start page title -->
        <div class="page-title-box">
            <div class="container-fluid">
             <div class="row align-items-center">
                 <div class="col-sm-6">
                     <div class="page-title">
                         <h4>Products</h4>
                             <ol class="breadcrumb m-0">
                                 <li class="breadcrumb-item"><a href="javascript: void(0);">Morvin</a></li>
                                 <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                 <li class="breadcrumb-item active">Products</li>
                             </ol>
                     </div>
                 </div>
                 <div class="col-sm-6">
                    <div class="float-end d-none d-sm-block">
                        <a href="#" class="btn btn-success">Add Widget</a>
                    </div>
                 </div>
             </div>
            </div>
         </div>
         <!-- end page title -->    


        <div class="container-fluid">

            <div class="page-content-wrapper">

            


                <div class="row">
                    <div class="col-xl-3 col-lg-4">
                       
                        

                           <div class="card">

                            <div class="card-body">

                            


                                <div class="border p-3 rounded mt-4">
                                        <h5 class="font-size-16">Categories</h5>


                                    <div id="accordion" class="custom-accordion categories-accordion">
                                        <div class="categories-group-card">
                                            <a href="#collapseOne" class="categories-group-list collapsed" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseOne">
                                                <i class="ti-desktop font-size-16 align-middle me-2"></i> About Me
                                            </a>
                    
                                        
                                        </div>

                                        <div class="categories-group-card">
                                            <a href="#collapseTwo" class="categories-group-list" data-bs-toggle="collapse" aria-expanded="true" aria-controls="collapseTwo">
                                                <i class="ti-archive font-size-16 align-middle me-2"></i> Finances
                                                <i class=" float-end accor-plus-icon"></i>
                                            </a>
                                            
                                        </div>

                                        <div class="categories-group-card">
                                            <a href="#collapseThree" class="categories-group-list collapsed" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
                                                <i class="mdi mdi-pinwheel-outline font-size-16 align-middle me-2"></i> Qualifications
                                            </a>
                                        
                                        </div>

                                        <div class="categories-group-card">
                                            <a href="#collapseFour" class="categories-group-list collapsed" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseFour">
                                                <i class="mdi mdi-dumbbell font-size-16 align-middle me-2"></i> Specialties
                                            </a>
                                          
                                        </div>
                                    </div>
                                </div>

                           

                              



                             
                                   
                            </div>
                        </div>
                    </div>


                        <div class="col-lg-9">
                                    <div class="row">
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="card">
                                               <div class="card-body">
                                                <div class="product-img">
                                                    <div class="product-ribbon  bg-primary">
                                                        25% Off
                                                    </div>
                                                   
                                                    <img src="assets/images/product/img-7.png" alt="" class="img-fluid mx-auto d-block">
                                                </div>

                                              
                                                
                                                <div class="text-center">

                                                    <a href="#" class="text-dark">
                                                        <h5 class="font-size-18">Home & Office Chair Green</h5>
                                                    </a>

                                                    <h4 class="mt-3 mb-0">$200 <span class="font-size-14 text-muted me-2"><del>$240</del></span></h4>

                                                    <div class="mt-3">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <i class="mdi mdi-star text-warning"></i>
                                                                <i class="mdi mdi-star text-warning"></i>
                                                                <i class="mdi mdi-star text-warning"></i>
                                                                <i class="mdi mdi-star text-warning"></i>
                                                                <i class="mdi mdi-star-half text-warning"></i>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                               </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-sm-6">
                                            <div class="card">
                                               <div class="card-body">
                                                <div class="product-img">

                                                  
                                                    <img src="assets/images/product/img-8.png" alt="" class="img-fluid mx-auto d-block">
                                                </div>
                                                
                                                <div class="text-center">
                                                    <a href="#" class="text-dark">
                                                        <h5 class="font-size-18">Home & Office Chair Crime</h5>
                                                    </a>

                                                    <h4 class="mt-3 mb-0">$280</h4>

                                                    <div class="mt-3">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <i class="mdi mdi-star text-warning"></i>
                                                                <i class="mdi mdi-star text-warning"></i>
                                                                <i class="mdi mdi-star text-warning"></i>
                                                                <i class="mdi mdi-star text-warning"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                               </div>
                                            </div>
                                        </div>


                                                                        </div>

                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card">
                                       
                                            </div>

                                        </div>
                                        
                                    </div>

                                    
                                </div>

                                
                </div>
                <!-- end row -->

            </div>

            
        </div> <!-- container-fluid -->
    </div>

    <!-- End Page-content -->

@endsection