@extends('admin.admin_master')
@section('mainContent')


        <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Today
                                    <small> Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                   <div class="col-12">
                   
               
                        <div class="card">

                          <h5 class="card-header info-color white-text text-center py-4">
                            <strong>What is your main focus for today?</strong>
                          </h5>

                          <!--Card content-->
                          <div class="card-body px-lg-5 pt-0">

                            <!-- Form -->
                            <form class="text-center" style="color: #757575;" action="#!">

                              <!-- Email -->
                              <div class="md-form">
                                <input type="text" id="" class="form-control">
                                
                              </div>

                              

                            

                              <!-- Sign in button -->
                              <button class="btn btn-success  my-4 waves-effect z-depth-0" type="submit">Submit</button>

                           

                            </form>
                            <!-- Form -->

                          </div>

                        </div>
                  
                     </div>

                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>
<script src="{{asset('public/admin/assets/js/default.js')}}"></script>
@endsection