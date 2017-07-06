@extends('admin_template')
@section('modules')
    <!-- 加载编辑器的容器 -->

    <form class="form-horizontal" method="post" action="#">
        {{--<input type="hidden" name="_token" value="{{csrf_token()}}"/>--}}
        {{--生成隐藏的input表单里面带一个token字段--}}
        {{csrf_field()}}
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">大标题</label>
            <div class="col-sm-5">
                <input type="text" name="" value="" class="form-control" id="name" placeholder="">
            </div>
            <div class="col-sm-5">
                {{--$errors来自中间键Kernel.php--}}
                <p class="form-control-static text-danger"></p>
            </div>
        </div>
        <div class="form-group">
            <label for="age" class="col-sm-2 control-label">副标题</label>

            <div class="col-sm-5">
                {{--old是表单数据保持--}}
                <input type="text" name="" value="" class="form-control" id="age" placeholder="">
            </div>
            <div class="col-sm-5">
                <p class="form-control-static text-danger"></p>
            </div>
        </div>
        <div class="form-group">
            <label for="age" class="col-sm-2 control-label">小标题</label>

            <div class="col-sm-5">
                {{--old是表单数据保持--}}
                <input type="text" name="" value="" class="form-control" id="age" placeholder="">
            </div>
            <div class="col-sm-5">
                <p class="form-control-static text-danger"></p>
            </div>
        </div>

        <script id="container" name="content" type="text/plain" >
        这里写你的初始化内容
        </script>
        <!-- 实例化编辑器 -->
        <script type="text/javascript" >
            var ue = UE.getEditor('container',{
                theme:"default", //皮肤
                lang:"zh-cn", //语言
                initialFrameWidth:750,  //初始化编辑器宽度,默认800
                initialFrameHeight:320});
        </script>
        <div class="form-group">
            <div class="col-sm-offset-7 col-sm-10">
                <button type="submit" class="btn btn-primary">提交</button>
            </div>
        </div>
    </form>
@endsection