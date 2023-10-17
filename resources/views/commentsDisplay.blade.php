<div class="comments-container">
    @foreach ($comments->take(5)->reverse() as $comment)
        <div class="comment" data-comment-id="{{ $comment->id }}"
            @if ($comment->parent_id != null) style="margin-left:40px;" @endif>
            <div class="comment-header">
                <img class="avatar user-avatar" style="border-radius: 20%" width="50px" height="50px" src="{{ $comment->avatar }}" alt="{{ $comment->user ? $comment->user->name : 'Anonymous' }}">
                <h4 class="comment-author">{{ $comment->user ? $comment->user->name : 'Anonymous' }}</h4>
            </div>
            <div class="comment-body">
                <p>{{ $comment->body }}</p>
                <a href="#" class="reply-link">Reply</a>
                <form method="post" action="{{ route('comments.store') }}" class="reply-form" style="display: none">
                    @csrf
                    @if (!auth()->check())
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Your name" />
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Your email" />
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="body">Comment</label>
                        <textarea name="body" class="form-control" placeholder="Your comment here..."></textarea>
                        <input type="hidden" name="post_id" value="{{ $post_id }}" />
                        <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Reply</button>
                    </div>
                </form>
                <div class="replies-container">
                    @include('commentsDisplay', ['comments' => $comment->replies])
                </div>
            </div>
        </div>
    @endforeach
    @if ($comments->count() > 5)
      <button class="btn btn-primary load-more-comments">View more comments</button>
    @endif
</div>

<script>
    $(document).ready(function() {
        var comments = {!! json_encode($comments->skip(5)->all()) !!};
        var currentPage = 1;
        var lastCommentId = null;

        $('.load-more-comments').click(function() {
            var html = '';
            var perPage = 5;
            var start = (currentPage * perPage) - perPage;
            var end = start + perPage;
            for (var i = start; i < end; i++) {
                if (comments[i]) {
                    html += '<div class="display-comment" data-comment-id="' + comments[i].id +
                        '" style="margin-left:40px;">' +
                        '<strong>' + comments[i].user.name + '</strong>' +
                        '<p>' + comments[i].body + '</p>' +
                        '</div>';
                    lastCommentId = comments[i].id;
                }
            }

            if (lastCommentId) {
                $('.display-comment[data-comment-id="' + lastCommentId + '"]').after(html);
            } else {
                $('.display-comment').last().after(html);
            }

            currentPage++;

            if (currentPage > (Math.ceil(comments.length / perPage))) {
                $('.load-more-comments').hide();
            }
        });

        $('.reply-link').click(function(e) {
            e.preventDefault();
            $(this).closest('.comment-body').find('.reply-form').show();
        });
    });
</script>

