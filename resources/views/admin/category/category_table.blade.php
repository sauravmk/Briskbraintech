@foreach ($categories as $category)
    <tr>
        <td>{{ $category->name }}</td>
        <td>{{ $category->description }}</td>
        <td>
            @if ($category->image)
                <img src="{{ $category->image }}" alt="category Image" style="max-width: 100px; max-height: 100px;">
            @else
                No Image
            @endif
        </td>
        <td>
            <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('admin.category.destroy', $category->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
            </form>
        </td>
    </tr>
@endforeach
<tr>
    <td colspan="3" align="center">
        {!! $categories->links() !!}
    </td>
</tr>
