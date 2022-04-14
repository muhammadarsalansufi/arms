@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div>
                        {{ __('License Record') }}
                    </div>
                    
                </div>
                </div>
                

                <div class="card-body">
                   <form method="POST" action="addLicense">
                       @csrf
                       <div class="form-content">  
                            <div class="row">  
                                <div class="col-md-12">
                                    <div class="form-group">  
                                        <input type="text" class="form-control" placeholder="Your Applicant Name *" name="applicant_name" required/>  
                                    </div>
                                    <div class="form-group">  
                                        <input type="text" class="form-control" placeholder="Your Father Name *" name="father_name"  required/>  
                                    </div>
                                    <div class="form-group">  
                                        <input type="text" class="form-control" placeholder="Your Licence Number *" name="license_no"  required/>  
                                    </div>
                                    <div class="form-group">  
                                        <input type="text" class="form-control" placeholder="Your Weapon Type *" name="weapon_type"  required/>  
                                    </div>
                                    <div class="form-group">  
                                        <input type="text" class="form-control" placeholder="Your Calibar *" name="calibar" required/>  
                                    </div>
                                    <div class="form-group">  
                                        <input type="text" class="form-control" placeholder="Your Weapon Number *" name="weapon_no"  required/>  
                                    </div>
                                    <div class="form-group">  
                                        <input type="text" class="form-control" placeholder="Your Cartridges *" name="cartridges"  required/>  
                                    </div>
                                    <div class="form-group">  
                                        <input type="text" class="form-control" placeholder="Your Status *" name="status" required/>  
                                    </div>
                                    <div class="form-group">  
                                        <input type="text" class="form-control" placeholder="Your Issue Date *" name="i_date"  required/>  
                                    </div>
                                    <div class="form-group">  
                                        <input type="text" class="form-control" placeholder="Your Expire Date *" name="e_date" required/>  
                                    </div>
                                    <div class="form-group">  
                                        <input type="text" class="form-control" placeholder="Your CNIC *" name="cnic" required/>  
                                    </div>  
                                    <button value= "search" type="submit" class="btn btn-success submit-btn px-2 py-1 rounded-0">Add</button>

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