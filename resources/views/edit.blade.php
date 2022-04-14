@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div>
                        {{ __('License Record') }}
                    </div>
                    
                </div>
                </div>
                

                <div class="card-body">
                   <form method="POST" action="../updateLicense">
                       @csrf
                       <div class="form-content">  
                            <div class="row">  
                                <div class="col-md-12">
                                    @foreach($record as $records)
                                    <div class="form-group">  
                                    <input type="hidden" class="form-control" placeholder="Your Applicant Name *" name="id" value="{{$records->id}}" required/>  

                                        <input type="text" class="form-control" placeholder="Your Applicant Name *" name="applicant_name" value="{{$records->applicant_name}}" required/>  
                                    </div>
                                    <div class="form-group">  
                                        <input type="text" class="form-control" placeholder="Your Father Name *" name="father_name" value="{{$records->father_name}}" required/>  
                                    </div>
                                    <div class="form-group">  
                                        <input type="text" class="form-control" placeholder="Your Licence Number *" name="license_no" value="{{$records->license_no}}" required/>  
                                    </div>
                                    <div class="form-group">  
                                        <input type="text" class="form-control" placeholder="Your Weapon Type *" name="weapon_type" value="{{$records->weapon_type}}" required/>  
                                    </div>
                                    <div class="form-group">  
                                        <input type="text" class="form-control" placeholder="Your Calibar *" name="calibar" value="{{$records->calibar}}" required/>  
                                    </div>
                                    <div class="form-group">  
                                        <input type="text" class="form-control" placeholder="Your Weapon Number *" name="weapon_no" value="{{$records->weapon_no}}" required/>  
                                    </div>
                                    <div class="form-group">  
                                        <input type="text" class="form-control" placeholder="Your Cartridges *" name="cartridges" value="{{$records->cartridges}}" required/>  
                                    </div>
                                    <div class="form-group">  
                                        <input type="text" class="form-control" placeholder="Your Status *" name="status" value="{{$records->status}}" required/>  
                                    </div>
                                    <div class="form-group">  
                                        <input type="text" class="form-control" placeholder="Your Issue Date *" name="i_date" value="{{$records->i_date}}" required/>  
                                    </div>
                                    <div class="form-group">  
                                        <input type="text" class="form-control" placeholder="Your Expire Date *" name="e_date" value="{{$records->e_date}}" required/>  
                                    </div>
                                    <div class="form-group">  
                                        <input type="text" class="form-control" placeholder="Your CNIC *" name="cnic" value="{{$records->cnic}}" required/>  
                                    </div>  
                                    @endforeach
                                    <button value= "search" type="submit" class="btn btn-success submit-btn px-2 py-1 rounded-0">Update</button>

                                </div>
                            </div>
                        </div> 
                    </form>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
$(document).ready(function() {
    $('#example').DataTable();
} ); 
</script>
@endsection