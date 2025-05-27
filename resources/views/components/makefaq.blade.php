 
 <form class="news-form" method="POST" action="{{ route('faq.store') }}">
        <h2>Make a new FAQ:</h2>
        @csrf
        @method('POST')
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" required>

        <label for="content" class="form-label">Content</label>
        <textarea rows="3" cols="80" name="content" id="content" required></textarea>

        <label for="anwser" class="form-label">Anwser</label>
        <textarea rows="5" cols="80" name="anwser" id="anwser" required></textarea>
        
        <label for="type" class="form-label">Type</label>
        <div>
            <input type="radio" id="type1" name="type" value="1" />
            <label for="type1">General question</label>

            <input type="radio" id="type2" name="type" value="2" />
            <label for="type2">Technical question</label>
        </div>

        <button type="submit">Post</button>
</form>