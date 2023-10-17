@foreach ($data as $post)
    <tr>
        <td>{{ $post->name }}</td>
        <td>{{ $post->description }}</td>
        <td>{{ $post->status }}</td>
        <td>
            @if ($post->image)
                <img src="{{ $post->image }}" alt="post Image" style="max-width: 100px; max-height: 100px;">
            @else
                No Image
            @endif
        </td>
        <td>          
            @foreach($post->tags as $tag)
            <label class="label label-info">{{ $tag->name }}</label>
            @endforeach
        <td>
        <td>
            <a href="{{ route('edit-post', $post->pid) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('delete-post', $post->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"
                    onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
            </form>
        </td>
    </tr>
@endforeach
<tr>
    <td colspan="3" align="center">
        {!! $data->links() !!}
    </td>
</tr>