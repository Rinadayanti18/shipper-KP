@extends('layouts.Admin.mainAD')
@section('container')

<div>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
       
        
        <h2>Section title</h2>
        <div class="table-responsive col-lg-11">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">No.Tlp</th>
                        <th scope="col">Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        
                    <tr>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->username }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>placeholder</td>
                        <td>text</td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </main>
</div>

@endsection