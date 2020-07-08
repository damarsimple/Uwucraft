@extends('layouts.app')

@section('content')
<div class="container-fluid mt-5 vh-100 vw-100">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
function login(username, password) {
    axios.post('/api/login', {
        username: username,
        password: password,
    }).then(response => {
        localStorage.setItem('uwu-token', 'Bearer ' + response.data.token)
    })
  }
  function test()
  {
    console.log('test');
  }
</script>
@endsection