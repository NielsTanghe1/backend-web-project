 
 <form class="news-form" method="POST" action="{{ route('news.store') }}">
        <h2>Make a new article:</h2>
        @csrf
        @method('POST')
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" required>

        <label for="content" class="form-label">Content</label>
        <textarea rows="5" cols="80" name="content" id="content" required></textarea>
        
        <button type="submit">Post</button>
</form>