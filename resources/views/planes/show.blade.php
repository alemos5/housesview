@extends('layouts.app')
@section('content')
<div class="bg-gray">
  <div class="p-t-20">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <section class="content-header">
              <h1>
                  Planes
              </h1>
          </section>
          <div class="content">
              <div class="box box-primary">
                  <div class="box-body">
                      <div class="row" style="padding-left: 20px">
                          @include('planes.show_fields')
                          <a href="{!! route('planes.index') !!}" class="btn btn-default">Back</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>

</div>

@endsection
