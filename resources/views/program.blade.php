@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <h2>Program <?php echo $url?></h2>
                    <script type="text/javascript">
                        location.href = 'https://www.educastudio.com/program/<?php echo $url?>';
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection