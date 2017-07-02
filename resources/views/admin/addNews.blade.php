{{ Form::open(['url'=>route('addNews'),'method'=>'post','enctype'=>'multipart/form-data']) }}
    {{ Form::text('short_text',null,['placeholder'=>'short text']) }}<p></p>
    {{ Form::select('category', ['Culture'=>'Culture','Science'=>'Science','Politics'=>'Politics','Sport'=>'Sport','Other'=>'Other']) }}<p></p>
    {{ Form::text('author',null,['placeholder'=>'author']) }}<p></p>
    {{ Form::file('img') }}<p></p>
    {{ Form::textarea('text',null,['placeholder'=>'text','cols'=>30,'rows'=>10]) }}<p></p>
    {{ Form::submit('Send news') }}
{{ Form::close() }}