<!DOCTYPE html>
<html lang="jp">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<style>body{background:yellow;}</style>
</head>
<body>

	@include('parts.header',['sub_title' => 'サブタイトル２'])

	@include('parts.menu')
	<div>
		one
	</div>
	<div>
		現在の日時は、<strong style='color:red;'>{{ $now_date }}</strong>です。
	</div>

	<div>
		@if ( $index === 1 )
			インデックスが１です。
		@elseif ( $index === 2 )
			インデックスが２です。
		@else
			インデックスが１でも２でもありません。
		@endif
	</div>

	<div>
		@foreach($array as $value)
			<li>{{ $value }}</li>
		@endforeach
	</div>

	<div>
		@foreach($object as $key => $value)
			<li>{{ $key }}:{{ $value }}</li>
		@endforeach
	</div>
</body>
</html>