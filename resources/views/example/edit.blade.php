<h2>編集ページです。</h2>
<a href="{{route('example.index')}}">一覧へ戻る</a>

<h3>編集</h3>

<form action="{{ route('example.update',$example->id)}}" method="POST">
    @csrf
    @method('PUT')
    <p>タイトル：<input type="text" name="title" value="{{$example->title}}"></p>
    <p>説明：<input type="text" name="description" value="{{$example->description}}"></p>
    <input type="submit" value="編集">
</form>