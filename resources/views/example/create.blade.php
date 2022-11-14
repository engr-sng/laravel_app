<h2>サンプル新規投稿ページ</h2>

<a href="{{route('example.index')}}">一覧へ戻る</a>

<form action="{{route('example.store')}}" method="POST">
    @csrf
    <p>タイトル：<input type="text" name="title" value="{{old('title')}}"></p>
    <p>説明：<input type="text" name="description" value="{{old('description')}}"></p>
    <input type="submit" value="登録">
</form>