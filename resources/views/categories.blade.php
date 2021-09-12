<x-layout>
    <x-slot name='title'>
        Categories
    </x-slot>

    <div class='container'>
        <div class='row mt-2'>
            <div class='col-7'>
                <table class='table table-dark'>
                    <thead>
                        <tr>
                        
                            <th>ID</th>
                            <th>Name</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Update</th>
                        </tr>
                    </thead>
                  
                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->created_at}}</td>
                            <td>{{$category->updated_at}}</td>
                            <td>
                                <a href="/categories/{{$category->id}}">
                                    <button class='btn btn-light'>Update</button>
                                </a>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class='col-5'>
                <form action="/categories" method="post">
                    @csrf
                    <label>Name</label>
                    <input type="text" name="name" class='form-control'>
                    <button class='btn btn-primary form-control mt-3'>Create</button>
                </form>
            </div>

        </div>
    </div>
</x-layout>