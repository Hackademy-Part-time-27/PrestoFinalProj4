<x-layout>
    <div class="row">
        <div class="col-md-9 mx-auto">
            <div class="my-4">
                <h1>Categorie</h1>
                <div class="text-end">
                    <a class="btn-custom text-decoration-none my-3" href="{{ route('category.create') }}">{{__('ui.create_category') }}</a>
                </div>
            </div>
            <div class="mb-3 ">
                <table class="w-50 fs-3">
                    <thead>
                        <th>{{__('ui.category_name_text') }}</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td class="col">{{ $category->name }}</td>
                                <td class="text-start mx-auto col">
                                    <a href="{{ route('category.edit', $category)}}" class="btn btn-secondary btn-sm">modifica</a>
                                    <form class="d-inline ms-2" action="{{ route('category.destroy', $category) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">{{__('ui.category_delete') }}</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>