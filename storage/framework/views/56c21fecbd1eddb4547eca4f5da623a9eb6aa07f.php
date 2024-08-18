<link rel="stylesheet" href="<?php echo e(asset('backend//css/bootstrap.min.css')); ?>">

<section id="registration" style="background-image: linear-gradient(to bottom right, #D4BA18, #C33E30)">
    <div class="container py-5">
      <div class="class1 mx-auto d-flex align-items-center" style="height: 370px; width: 370px; clip-path: circle(50% at 50% 50%); background: white;">
        <h1 class="text-uppercase text-black text-center">Registration page</h1>  
      </div>

        <form class="row" method="POST" action="<?php echo e(route('register')); ?>">
            <?php echo csrf_field(); ?>

           

          
            <div class="col-6 mx-auto">
          <div class="my-3">
          <div class="d-flex justify-content-center">
          <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Name"/>
          </div>
          </div>
         
            
    
            
            
          <div class="my-3">
          <div class="d-flex justify-content-center">
          <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email"/>
         </div>
          </div>
        
            
            
          <div class="my-3">
          <div class="d-flex justify-content-center">
           <input id="password" type="password" name="password" required autocomplete="new-password" placeholder="New Password"/>
          </div>
          </div>
          
            
            
          <div class="my-3">
          <div class="d-flex justify-content-center">
              <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password"/>
          </div> 
          </div>
      
            
           
            
            
          <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-light" style="padding:10px 30px;" name="Registered">Registration</button>
          </div>
            
           <h5 class="text-center mt-5"><a href="<?php echo e(route('login')); ?>" class="text-light">Old user? Please log in...</a></h5>
        </div>
        </form>
</div>
</section>
 <?php /**PATH C:\xampp\htdocs\Somikoronlaravel\student\resources\views/auth/register.blade.php ENDPATH**/ ?>