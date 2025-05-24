 <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <label for="image" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" required>

        <label for="image" class="form-label">Content</label>
        <input type="text" class="form-control" id="content" name="content" required>

        <label for="image" class="form-label">Image</label>
        <input type="file" class="form-control" id="image" name="image">

        <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}" readonly>
        
        <button type="submit">Post</button>
</form>