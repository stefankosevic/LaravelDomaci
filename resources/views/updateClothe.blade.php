<x-layout>
    <x-slot name='title'>
        Update clothe
    </x-slot>
    <div class='container'>
        <div class="row mt-2">
            <h1>Update clothe: {{$clothe->name}}</h1>
        </div>
        <div class='row mt-2'>
            <div class="col-12">
            
                <form action="/clothes/{{$clothe->id}}" method="post">
                    @csrf
                    <label>Name</label>
                    <input type="text" name="name" class='form-control' value='{{$clothe->name}}'>
                    <label>Price</label>
                    <input type="number" name="price" class='form-control' value='{{$clothe->price}}'>
                    <label>Category</label>
                    <select name="category_id" class='form-control'>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}" {{($clothe->category_id==$category->id)?'selected':''}}  >
                            {{$category->name}}
                        </option>
                        @endforeach
                    </select>
                    <label>Description</label>
                    <textarea name="description" class='form-control' cols="30" rows="10">{{$clothe->description}}

                    </textarea>
                    <button class='btn btn-success form-control mt-2'>Save</button>
                    <button name='delete' class='btn btn-danger form-control mt-2'>Delete</button>
                </form>
            </div>

        </div>
    </div>
</x-layout>