<x-layout>
    <x-slot name='title'>
        Clothes
    </x-slot>
    <div class='container'>
        <div class='row mt-2 mb-2 d-flex justify-content-center'>
            <div class='col-7'>
                <h1>All clothes</h1>
            </div>
            <div class='col-5'>
                <a href="/clothes/create">
                    <button class='btn btn-primary mt-2'>Create</button>
                </a>
            </div>
        </div>
        
        @foreach($clothes as $clothe)
        <div class='row mt-2 d-flex justify-content-center border-top'>
            <div class='col-8'>
                <h3>{{$clothe->name}}</h3>
                <span><b>Price</b>: {{$clothe->price}}</span>
                <br>
                <span><b>Category</b>: {{(isset($clothe->category))?$clothe->category->name:'NA'}}</span>
                <p>
                    {{$clothe->description}}
                </p>
                <a href="/clothes/{{$clothe->id}}">
                    <button class='btn btn-success form-control'>Update</button>
                </a>
            </div>
        </div>
        @endforeach


    </div>
</x-layout>