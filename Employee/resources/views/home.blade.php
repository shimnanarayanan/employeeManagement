@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-striped text-center">
                        <tr>
                           <th>slno</th>
                           <th>id</th>
                           <th>name</th>
                           <th>email</th>
                           <th>mobile</th>
                          
                           <th>gender</th>
                           <th>dob</th>
                           <th>address</th>
                           </tr>
                   
                            @foreach($employee as $key=>$e)
                            
                            
                   
                               <tr>
                               <td>{{ $key+1}}</td>
                               <td>{{ $e->id}}</td>
                               <td>{{ $e->name}}</td>
                               <td>{{ $e->email}}</td>
                               <td>{{ $e->mobile}}</td>
                               
                               <td>{{ $e->gender}}</td>
                               <td>{{ $e->dob}}</td>
                               <td>{{ $e->address}}</td>
                               </tr>
                               @endforeach 
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
