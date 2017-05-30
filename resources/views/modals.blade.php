@extends('adminlte::page')

@section('htmlheader_title')
	Change Title here!
@endsection

@section('main-content')
	<div class="callout callout-info">
		<h4>Reminder!</h4>
		Instructions for how to use modals are available on the
		<a href="http://getbootstrap.com/javascript/#modals">Bootstrap documentation</a>
	</div>

	<div class="row">
		<div class="col-xs-12">
			<div class="box box-default">
				<div class="box-header with-border">
					<h3 class="box-title">Modal Examples</h3>
				</div>
				<div class="box-body">
					<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
						Launch Default Modal
					</button>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">
						Launch Primary Modal
					</button>
					<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
						Launch Info Modal
					</button>
					<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger">
						Launch Danger Modal
					</button>
					<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-warning">
						Launch Warning Modal
					</button>
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-success">
						Launch Success Modal
					</button>
				</div>
			</div>
		</div>
	</div>

	<div class="example-modal">
		<adminlte-vue-modal ok-text="Save changes" cancel-text="Close" id="modal-default">
			<h4 slot="title">Default Modal</h4>
			<p>One fine body&hellip;</p>
		</adminlte-vue-modal>
	</div>

	<div class="example-modal">
		<adminlte-vue-modal ok-text="Save changes" cancel-text="Close" id="modal-primary" color="primary">
			<h4 slot="title">Primary Modal</h4>
			<p>One fine body&hellip;</p>
		</adminlte-vue-modal>
	</div>

	<div class="example-modal">
		<adminlte-vue-modal ok-text="Save changes" cancel-text="Close" id="modal-info" color="info">
			<h4 slot="title">Info Modal</h4>
			<p>One fine body&hellip;</p>
		</adminlte-vue-modal>
	</div>

	<div class="example-modal">
		<adminlte-vue-modal ok-text="Save changes" cancel-text="Close" id="modal-danger" color="danger">
			<h4 slot="title">Danger Modal</h4>
			<p>One fine body&hellip;</p>
		</adminlte-vue-modal>
	</div>

	<div class="example-modal">
		<adminlte-vue-modal ok-text="Save changes" cancel-text="Close" id="modal-warning" color="warning">
			<h4 slot="title">Warning Modal</h4>
			<p>One fine body&hellip;</p>
		</adminlte-vue-modal>
	</div>

	<div class="example-modal">
		<adminlte-vue-modal ok-text="Save changes" cancel-text="Close" id="modal-success" color="success">
			<h4 slot="title">Success Modal</h4>
			<p>One fine body&hellip;</p>
		</adminlte-vue-modal>
	</div>

@endsection
