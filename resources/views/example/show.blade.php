<h2>サンプル詳細ページです。</h2>

<a href="{{route('example.index')}}">一覧へ戻る</a>

<h3>詳細</h3>
{{$example->id}}
{{$example->title}}
{{$example->description}}
{{$example->created_at}}
{{$example->updated_at}}