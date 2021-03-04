@extends('layouts.app')

@section('content')

<div class="card">

    <form action="{{route('sams.store')}}" method="POST">
    @csrf
        <div class="card-header">
            Add new S.A.M
            <input type="submit" value="Add" class="btn btn-sm btn-secondary float-right">
        </div>
        <div class="card-body">

            @include('layouts.errorMessage')

            <div class="form-row">
                <div class="col-2">
                    <label for="date">Date</label>
                    <input type="date" name="date" id="date" value="{{old('date', date('Y-m-d'))}}"
                           class="form-control @error('date') is-invalid @enderror" required>
                </div>
                <div class="col-2">
                    <label for="qty">Number of SAMs</label>
                    <input type="number" name="qty" id="qty" value="{{old('qty')}}"
                        class="form-control @error('qty') is-invalid @enderror" required>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="card mt-5">
    <div class="card-header">
        S.A.M List
    </div>
    <div class="card-body">
        <table class="table table-hover">
            
            <thead>
                <th>Date</th>
                <th>Qty</th>
            </thead>
            <tbody>
                @foreach ($sams as $sam)
                    <tr>
                        <td>{{$sam->date->format('d-m-Y')}}</td>
                        <td>{{$sam->qty}}</td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>
    
@endsection