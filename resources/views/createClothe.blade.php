<x-layout>
    <x-slot name='title'>
        Create clothe
    </x-slot>
    <div class='container'>
        <div class="row mt-2">
            <h1>Create new clothe</h1>
        </div>
        <div class='row mt-2'>
            <div class="col-12">
                <form action="/clothes" method="post">
                
                    @csrf
                    <label>Name</label>
                    <input type="text" name="name" required class='form-control'>
                    <label>Price</label>
                    <input type="number" min='10' name="price" required class='form-control'>
                    <label>Category</label>
                    <select name="category_id" required class='form-control'>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">
                            {{$category->name}}
                        </option>
                        @endforeach
                    </select>
                    <label>Description</label>
                    <textarea required name="description" class='form-control' cols="30" rows="10"></textarea>
                    <button class='btn btn-primary form-control mt-2'>Save</button>
                </form>
            </div>

        </div>
    </div>
</x-layout>