@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
      <h1>TODOS OS DESTAQUES</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Painel</a></div>
        
        <div class="breadcrumb-item">Criar</div>
      </div>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Criar Destaque</h4>

              <div class="card-header-action">
                <a href="{{ route('slider.create') }}" class="btn btn-primary">Criar</a>
              </div>

            </div>
            <div class="card-body">
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
