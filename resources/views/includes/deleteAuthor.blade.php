<form action="{{route('admin.authors.destroy', $author->id)}}" method="POST" class="delete-form">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-danger">Delete</button>
</form>