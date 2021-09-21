@extends('layouts.home')
@section('pagetitle', 'Trang chủ')
@section('custom_css')
<style>

</style>
@endsection
@section('content')
<h2>Cards</h2>
<div class="row">
    <div class="col-lg-12">
        Sử dụng facebook icon trong bootstrap icon
        <b-icon-facebook></b-icon-facebook>
        <hr />
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        Ấn vào nút Alert để gọi hàm canhbao
        <button @click="canhbao">Alert</button>

    </div>
</div>
@endsection
@section('custom_js')
<script>
    var myMixin = {
        data() {
            return {
                style: 'info'
            }
        },
        methods: {
            hello: function() {
                console.log('hello from mixin!')
            },
            canhbao: function() {
                alert("cảnh báo");
            },
        }
    }
</script>
@endsection