<h1>{{ $card->title }}</h1>

    @foreach ($card->notes as $note)
        <li>{{ $note->body }}</li>
    @endforeach

    <h3>Add new note</h3>
    <form method="POST" action="/cards/{{ $card->id }}/notes">

        <div class="form-group">
        <textarea name="body"></textarea>
        <div class="form-group">
            <button type="submit" class="btn">Add note</button>
        </div>
        </div>
    </form>