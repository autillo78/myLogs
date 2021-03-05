@extends('layouts.app')

@section('content')

<div class="card">

    <form action="{{route('minoxidils.store')}}" method="POST">
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
                <div class="col-2">
                    <label for="volume">Volumen (10<sup>-1</sup> ml)</label>
                    <input type="number" name="volume" id="volume" value="{{old('volume')}}"
                        class="form-control @error('volumen') is-invalid @enderror" required>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="card mt-5">
    <div class="card-header">
        Minoxidil List
    </div>
    <div class="card-body">
        <table class="table table-hover">
            
            <thead>
                <th>Date</th>
                <th>Volume (ml)</th>
            </thead>
            <tbody>
                @foreach ($minoxidils as $minox)
                    <tr>
                        <td>{{$minox->date->format('d-m-Y')}}</td>
                        <td>{{$minox->volume/10}}</td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>
    
@endsection