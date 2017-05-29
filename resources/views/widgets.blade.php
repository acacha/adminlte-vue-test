@extends('adminlte::page')

@section('htmlheader_title')
	Box component tests!
@endsection

@section('main-content')

    <adminlte-vue-box id="default_box"></adminlte-vue-box>

    <adminlte-vue-box id="primary_box_with_content" color="primary">Content here!</adminlte-vue-box>

    <adminlte-vue-box id="default_box_with_title">
        <span slot="title">Amazing Title!</span>
    </adminlte-vue-box>

    <adminlte-vue-box id="info_box_with_title_and_footer" color="info">
        <span slot="title">Amazing Title!</span>
        <span slot="footer">This is a footer!</span>
    </adminlte-vue-box>

    <adminlte-vue-box id="success_box_with_title_h3" color="success">
        <h3 slot="title">Here a h3 title!</h3>
    </adminlte-vue-box>

    <adminlte-vue-box id="default_solidbox_with_title" :solid="true">
        <span slot="title">I'm a solid box!</span>
    </adminlte-vue-box>

    <adminlte-vue-box id="default_box_with_custom_box_tools">
        <template slot="box-tools">
            <button type="button" class="btn btn-box-tool" ><i class="fa fa-cog"></i></button>
            <button type="button" class="btn btn-box-tool" ><i class="fa fa-user"></i></button>
        </template>
        <span slot="title">Custom tool box!</span>
        Custom tool box
    </adminlte-vue-box>

    <adminlte-vue-box id="box_danger" color="danger">
        <span slot="title">Danger!</span>
    </adminlte-vue-box>

    <adminlte-vue-box id="default_box_collapsed" :collapsed="true">
        <template slot="title">Collapsed box!</template>
    </adminlte-vue-box>

    <adminlte-vue-box id="warning_box_loading" :loading="true" color="warning">
        <template slot="title">Loading warning box!</template>
    </adminlte-vue-box>

    <adminlte-vue-box id="default_box_not_removable" :removable="false">
    Not removable!
    </adminlte-vue-box>

    <adminlte-vue-box id="default_box_not_collapsable" :collapsable="false">
        Not collapsable!
    </adminlte-vue-box>

    <adminlte-vue-box id="default_box_no_toolbox" :collapsable="false" :removable="false">
        No toolbox!
    </adminlte-vue-box>

    <adminlte-vue-box id="default_box_without_border_header" :border-header="false">
        No border on header!
    </adminlte-vue-box>

@endsection
