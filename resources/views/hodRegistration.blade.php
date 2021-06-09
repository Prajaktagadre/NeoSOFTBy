@extends('Admin.layouts.masterNew')

@section('title','HOD Registration')

@section('css')

@endsection
@section('content')

   <!-- Input Validation start -->
    <section class="input-validation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">HOD Registration</h4>
                                    <a class="heading-elements-toggle">
                                        <i class="la la-ellipsis-v font-medium-3"></i>
                                    </a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                      
                                            <li>
                                                <a data-action="reload">
                                                    <i class="ft-rotate-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a data-action="expand">
                                                    <i class="ft-maximize"></i>
                                                </a>
                                            </li>
                                        
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form class="needs-validation"  action="{{route('save')}} " method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom01">Name</label>
                                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="validationCustom01" name="name" placeholder="Name" value="" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Please Enter valid Name.
                                                    </div>
                                                </div>
                                            

                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom01">Username</label>
                                                    <input type="text" class="form-control @error('user_name') is-invalid @enderror" id="validationCustom01" name="user_name" placeholder="Username" value="" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Please Enter valid Name.
                                                    </div>
                                                </div>

                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom01">Email</label>
                                                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="validationCustom01" name="email" placeholder="Email" value="" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Please Enter valid Email.
                                                    </div>
                                                </div>
                                               
                                            </div>
                                           
                                            <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                    <label for="validationCustom02">Contact Number</label>
                                                    <input type="text" class="form-control @error('contact_no') is-invalid @enderror" name="contact_no" id="validationCustom02" placeholder="Contact Number" value="" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Please Enter valid Mobile.
                                                    </div>
                                                </div>
                                           

                                <div class="col-md-4 mb-3">
                                <div class="form-group">
                                <label for="exampleInputEmail1">Department</label>
                                <select name="department_id" class="form-control select2" id="department_id">
                                
                                        <option value="">Select</option>
                                      @foreach($departments as $department)
                                        <option value="{{$department->id}}">{{$department->name}}</option>
                                      @endforeach
                                </select>
                                @if ($errors->has('department_id'))
                                    <span class="error invalid-feedback">{{ $errors->first('department_id') }}</span>
                                @endif
                            </div>
                        </div>



                        <div class="col-md-4 mb-3">
                                                    <label for="validationCustom01">Password</label>
                                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="validationCustom01" name="password" placeholder="Password" value="" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Please Enter valid Password.
                                                    </div>
                                                </div>
                                            </div>


                                    <div class="form-row">
  
                                     <div class="col-md-4 mb-3">
                                         <input type="file" name="image" class="form-control">
                                    </div>
   
                                 <div class="col-md-4 mb-3">
                                    <button type="submit" class="btn btn-success">Upload</button>
                                    </div>
   
                                     </div>
                                            <button class="btn btn-primary" type="submit">Save</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    </section>
  <!-- Input Validation end -->

@endsection
@section('js')
<script src="{{asset('web/admin/app-assets/js/scripts/forms/validation/form-validation.js')}}" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>





@endsection