@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Send sms to multiple numbers') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card-body">
                        
                            <form action="" method="POST">
                             @csrf
                             @if($errors->any())
                             <div class="alert alert-danger">
                                    @foreach($errors->all() as $error)
                                    <div > {{ $error }} </div>
                                    @endforeach
                                </div>
                            @endif
                                @if( session( 'success' ) )
                                    <div class="alert alert-success">{{ session( 'success' ) }}</div>
                                @endif


                                <div class="form-group mb-3">
                                    <label class="mb-2">Phone numbers (seperate with a comma [,])</label>
                                    <input type="text" name="numbers" placeholder="Enter mobile number" class="form-control" >
                                </div>
                               

                               <div class="form-group mb-3">
                                    <label class="mb-2">Message</label>
                                    <textarea name="message" placeholder="Enter Message" class="form-control" ></textarea>
                               </div>
                                
                               <div >
                                <input class = "btn btn-primary" type="submit" value="Send SMS">
                                </div>
                            </form>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
