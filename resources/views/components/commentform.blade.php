 <form class="comment-form" method="POST" action="{{ route('comment.store') }}">
        @csrf
        @method('POST')
        <label for="content" class="form-label">Comment:</label>
        <input type="text" class="form-control" id="content" name="content" required>

        <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}" readonly>
        <input type="hidden" id="post_id" name="post_id" value="{{ $post->id }}" readonly>

        <button type="submit">Comment</button>
</form>