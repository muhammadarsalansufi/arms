@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div>
                        {{ __('License Record') }}
                    </div>
                    <div>
                    <a href="addLicense">Add Record</a>
                    </div>
                </div>
                </div>
                

                <div class="card-body">
                   
                        <div class="alert alert-success" role="alert">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Applicant Name</th>
                                    <th>Father Name</th>
                                    <th>Licence Number</th>
                                    <th>Weapon Type</th>
                                    <th>Calibar</th>
                                    <th>Weapon Number</th>
                                    <th>Cartridges</th>
                                    <th>Status</th>
                                    <th>Issue Date</th>
                                    <th>Expire Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($record as $single)
                                <tr>
                                    <td>{{$single->applicant_name}}</td>
                                    <td>{{$single->father_name}}</td>
                                    <td>{{$single->license_no}}</td>
                                    <td>{{$single->weapon_type}}</td>
                                    <td>{{$single->calibar}}</td>
                                    <td>{{$single->weapon_no}}</td>
                                    <td>{{$single->cartridges}}</td>
                                    <td>{{$single->status}}</td>
                                    <td>{{$single->i_date}}</td>
                                    <td>{{$single->e_date}}</td>
                                    <td>
                                    <a href="edit/{{$single->id}}">Edit </a>
                                    <br>
                                    <a href="delete/{{$single->id}}">Delete </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                         </table>
                        </div>
                
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