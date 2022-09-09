@extends('layouts.app')

@section('template_title')
    {{ $medicoscita->name ?? 'Show Medicoscita' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Medicoscita</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('medicoscitas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Medicos Id:</strong>
                            {{ $medicoscita->Medicos_id }}
                        </div>
                        <div class="form-group">
                            <strong>Citas Id:</strong>
                            {{ $medicoscita->Citas_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
