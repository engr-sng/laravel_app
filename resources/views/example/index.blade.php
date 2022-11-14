<h2>サンプルインデックスページです。</h2>

<p><a href="{{route('example.create')}}">新規投稿</a></p>

<h3>一覧</h3>
@foreach ($examples as $example)
{{$example->title}}
{{$example->description}}
<a href="{{ route('example.show' , $example->id)}}">詳細</a>
<a href="{{ route('example.edit', $example->id)}}">編集</a>
<form action="{{ route('example.destroy', $example->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" name="" value="削除">
</form>
@endforeach