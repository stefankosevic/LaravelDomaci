<x-layout>
    <x-slot name='title'>
        Update category
    </x-slot>
    <div class='container'>
        <div class='row mt-2'>
            <h1>Update category: {{$category->name}}</h1>
        </div>
        <div class='row mt-2'>
        
            <div class='col-8'>
                <form action="/categories/{{$category->id}}" method="post">
                    @csrf
                    <label>ID</label>
                    <input type="text" readonly class="form-control" value='{{$category->id}}'>
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value='{{$category->name}}'>
                    <button class="form-control btn btn-success mt-2">Save</button>
                    <button name="delete" class="form-control btn btn-danger mt-2">Delete</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>