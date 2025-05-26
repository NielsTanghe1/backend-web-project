 <div >
        <form method="POST" action="{{ route('contact.store') }}" class="contact-form">
                @csrf
                @method('POST')
                <label for="content" class="form-label">Write your message:</label>
                <textarea rows="10" cols="80" name="content" id="content" required>

                </textarea>
                <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}" readonly>
                <button style="font-weight: bold;" type="submit">Send message</button>
        </form>
 </div>
 
