 <form class="news-form" method="POST" action="{{ route('news.store') }}">
        @csrf
        @method('POST')
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" required>

        <label for="content" class="form-label">Content</label>
        <input type="text" class="form-control" id="content" name="content" required>
        
        <button type="submit">Post</button>
</form>