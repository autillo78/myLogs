@extends('layouts.app')

@section('content')

<div class="card">

    <form action="{{route('exercises.store')}}" method="POST">
    @csrf
        <div class="card-header">
            Add Minoxidil
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
            </div>
        </div>
    </form>
</div>

<div class="card mt-5">
    <div class="card-header">
        Exercise List
    </div>
    <div class="card-body">
        <table class="table table-hover">
            
            <thead>
                <th>Date</th>
            </thead>
            <tbody>
                @foreach ($exercises as $exercise)
                    <tr>
                        <td>{{$exercise->date->format('d-m-Y')}}</td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>
    
@endsection