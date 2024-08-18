<link rel="stylesheet" href="{{ asset('backend//css/bootstrap.min.css') }}">

<section id="login" style="background-image: linear-gradient(to bottom right, #D4BA18, #C33E30);">
<div class="container py-5">
      <div class="class1 mx-auto d-flex align-items-center" style="height: 200px; width: 200px; clip-path: circle(50% at 50% 50%); background: white;">
        <h1 class="text-uppercase text-black text-center">User Login</h1>  
      </div>

       

   

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form class="row" method="POST" action="{{ route('login') }}">
            @csrf

          

            
            <div class="col-6 mx-auto">
          <div class="my-3">
          <div class="d-flex justify-content-center">
                <input id="email"  type="email" name="email" :value="old('email')" placeholder="Email">
            </div>
            
          </div>
         
            
            
          <div class="my-3">
          <div class="d-flex justify-content-center">
             <input id="password"  type="password" name="password" placeholder="Password"/>
          </div>
            
          </div>
          
            
            
          <div class="form-check">
          <div class="d-flex justify-content-center">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="remember_check" <?php echo $_COOKIE['remember_check']?? ''?>>
              <label class="form-check-label text-white" for="flexCheckDefault">
                Remember me
              </label>
          </div>
              
          </div>
            
          <div class="d-flex justify-content-center mt-2">
               <button type="submit" class="btn btn-light" style="padding:10px 30px;" name="user_loggedin">Login</button>  
          </div>
            
            <h5 class="text-center mt-5"><a href="{{ route('register') }}" class="text-light">New user? Please sign up...</a></h5>
        </div>
        </form>
  
</div>
</section>
