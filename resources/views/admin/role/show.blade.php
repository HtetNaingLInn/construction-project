@extends('admin.layouts.master')

@section('title','Role Doc')
@section('content')
<div class="container-fluid">

    
    <div class="card col-md-12">
        <div class="card-header bg-info">
            <h2 class="card-title ">Role Permission Documentantion</h2>
        </div>
        
        <div class="card-body">
        <table class="table table-condensed">
            <thead>
              <tr>
                <th class="text-warning">No</th>
                <th class="text-warning">Role Name</th>
                <th class="text-warning">Description</th>
              </tr>
            </thead>
            <tbody>

                <tr>
                    <td>1</td>
                    <td>Admin</td>
                    <td>Admin can control all permission on dashboard</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Content Writer</td>
                    <td>Content Writer can control project  permission & category permission  on dashboard</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Guest</td>
                    <td>Non permission on dashboard</td>
                </tr>
              
             
            </tbody>

            
          </table>
        </div>
    
</div>  
</div>

@endsection