@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="jumbotron">
        <h2>Playing with laravel 5.6</h2>
        <p>using an interface for a repository</p>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12 col-md-offset-1 ">
            <div class="card">
                <div class="card-header">
                    Planes
                </div>
                <div class="card-block">
                    <p class="card-text">
                        copied from my laravel54 project. <a href="/planes">click here</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 col-md-offset-1 ">
            <div class="card">
                <div class="card-header">
                    andy
                </div>
                <div class="card-block">

                   blah

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

<script type="text/javascript">
    console.log("Jquery Version " + $().jquery );
</script>

@endsection

