@extends('adminlte::page')

@section('htmlheader_title')
	Change Title here!
@endsection


@section('main-content')

    <div class="box box-success box-solid">
        <div class="box-header with-border">
            <h1 class="box-title">Example box</h1>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            Put your content here
        </div>
    </div>


    <adminlte-vue-box id="default_box"></adminlte-vue-box>

    <adminlte-vue-box id="default_box_with_content">Content here!</adminlte-vue-box>

    <adminlte-vue-box id="default_box_with_title_h3">
        <span slot="title">Amazing Title!</span>
    </adminlte-vue-box>

    <adminlte-vue-box id="default_box_with_title_h3">
        <h3 slot="title">Here a h3 title!</h3>
    </adminlte-vue-box>


@endsection
