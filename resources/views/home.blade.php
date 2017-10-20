@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard - kWh / Price Calculator</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif                    
                    
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('calc') }}">
                         {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('number') ? ' has-error' : '' }}">
                                <label for="calc" class="col-md-3 control-label">Enter kWh</label>
    
                                <div class="col-md-2">
                                    <input id="calc" type="number" class="form-control" name="calc" required>
    
                                    @if ($errors->has('number'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('number') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                    
                                <button type="submit" class="btn btn-primary">
                                    Calculate
                                </button>
                            </div>
                        </form>
                    </div>
                            
                    </div>                            
                </div>  
            </div>
        </div>
    </div>
</div>
@endsection
