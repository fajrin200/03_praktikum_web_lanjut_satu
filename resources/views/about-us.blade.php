@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <p>Anda akan diarahkan ke halaman <b>About</b> dalam <span id="counter">5</span> detik.</p>
                    <script type="text/javascript">
                        function countdown() {
                            var i = document.getElementById('counter');
                            if (parseInt(i.innerHTML) <= 0) {
                                location.href = 'https://www.educastudio.com/about-us';
                            }
                            if (parseInt(i.innerHTML) != 0) {
                                i.innerHTML = parseInt(i.innerHTML) - 1;
                            }
                        }
                        setInterval(function () {
                            countdown();
                        }, 1000);
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection