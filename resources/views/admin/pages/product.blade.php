@extends('client.layout.master')
@section('content')
product
@endsection
@section('title')
productlist
@endsection
@section('js-custom')
<script>
    alert(123)
</script>
@endsection

@section('sidebar')
    @parent
    side product
@endsection
