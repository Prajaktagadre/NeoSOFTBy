@extends('Admin.layouts.masterNew')

@section('title','View Leave')

@section('css')

@endsection
@section('content')

   <!-- Input Validation start -->
    <section class="input-validation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">View Leave</h4>
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
                                        <form class="needs-validation"  action="{{url('staffLeaveMagement/edit/')}}/{{$leave->id}}" method="POST">
                                            @csrf
                                           
                                            <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <label>Leave From Date</label>
                                                    <div class='input-group'>
                                                        <input type='date' name="leave_from_date" class="form-control singledate @error('leave_from_date') is-invalid @enderror" value="{{$leave->leave_from_date}}" />
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <span class="ft-calendar"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                 </div>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        You Must Enter Your Start Date.
                                                    </div>
                                                </div>


                                                <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <label>Leave To Date</label>
                                                    <div class='input-group'>
                                                        <input type='date' name="leave_to_date" class="form-control singledate @error('leave_to_date') is-invalid @enderror" value="{{$leave->leave_to_date}}" />
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <span class="ft-calendar"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                 </div>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        You Must Enter Your End Date.
                                                    </div>
                                                </div>


                                                <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control select2"  id="status" name="status" style="width: 100%;">
                                                <option value="0" @if (old('status',$leave->status) == '0')selected="selected" @endif >Pending</option>
                                                <option value="1" @if (old('status',$leave->status) == '1')selected="selected" @endif >Approved</option>
                                                <option value="1" @if (old('status',$leave->status) == '2')selected="selected" @endif >Rejected</option>
                                                </select>
                                            </div>
                                            </div>

                                              
                                            </div>

                                            <div class="form-row">
                                           
                                            <div class="col-md-4 mb-3">
                                                    <label for="validationCustom01">Reason</label>
                                            
                                                    <textarea name="reason" class="form-control @error('reason') is-invalid @enderror" id="reason" cols="30" rows="10" placeholder="Enter Reason">{{$leave->reason}}</textarea>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        You Must Enter Your Reason.
                                                    </div>
                                                    
                                                </div> 
                                             
                                            </div>

                                           
                                     <a class="btn btn-primary" href="{{ route('staffLeaveMagement') }}"> Back</a>
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