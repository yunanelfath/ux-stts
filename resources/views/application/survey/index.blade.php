@extends('layouts.application')
@section('content')
	<div id="root"></div>
	<script type="text/javascript">
		window.questionDatas = <?php echo $datas;?>
	</script>
@endsection
