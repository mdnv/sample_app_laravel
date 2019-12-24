<form action="{{ route('users_path') }}" accept-charset="UTF-8" method="post">
    @csrf

    @if ($errors->any())
    <div id="error_explanation">
        <h2>
            {{ $errors->count() }} errors prohibited
            this user from being saved:
        </h2>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <p>
        <label for="user_title">Title</label><br>
        <input type="text" value="{{ $user->title }}" name="user[title]" id="user_title" />
    </p>

    <p>
        <label for="">Text</label><br>
        <textarea name="user[text]" id="user_text">{{ $user->text }}</textarea>
    </p>

    <p>
        <input type="submit" name="commit" value="Create/Update Article" data-disable-with="Create Article" />
    </p>

</form>
