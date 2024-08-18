

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>My</title>
      <link rel="stylesheet" href="<?php echo e(asset('backend/css/all.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('backend/css/bootstrap-icons.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('backend/css/bootstrap.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('backend/css/bootstrap-extensions.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('backend/css/style.css')); ?>">
      <style>
        a{
            text-decoration: none;
        }
         section{
         padding-top: 115px;
         padding-bottom: 50px;
         } 
         .carousel-control-prev-icon, .carousel-control-next-icon {
         height: 50px;
         width: 50px;
         outline: #01275a;
         background-color: #01275a;
         background-size: 100%, 100%;
         border-radius: 10%;
         border: 1px solid black;
         }
         .nav-link:hover{
         background-color: #f7f723;
         transition: all linear 1s;
         border-radius: 10%;
         }
         .nav-Link button:hover{
         background-color: #b80101;
         transition: all linear 1s;
         }
      </style>
   </head>
   <body>
      <header>
        
      </header>

      <!-- ============================== Banner part ========================= -->
<main>    
<section id="Student">
     <div class="container">
       <div class="row">
        <div class="col-3 ms-auto mb-5">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                 Add Student
              </button>
        </div>
        <div class="col-12">
        <table class="table table-secondary table-hover">
                <tr>
                   <th>SL</th>
                   <th>Name</th>
                   <th>Email</th>
                   <th>Phone No</th>
                   <th>Age</th>
                   <th>Address</th>
                   <th></th>
                </tr>
                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                   <td><?php echo e($student->id); ?></td>
                   <td><?php echo e($student->name); ?></td>
                   <td><?php echo e($student->email); ?></td>
                   <td><?php echo e($student->phone); ?></td>
                   <td><?php echo e($student->age); ?></td>
                   <td><?php echo e($student->address); ?></td>
                   <td>
                   <a class="px-3 py-2">
                   <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#studenModal_$student->id">
                      Update Student
                   </button>
                   </a> 
                   <a class="btn btn-warning px-3 py-2" href="<?php echo e(route('student.delete',$student->id)); ?>">Delete Student</a> 
                   </td>
                </tr>
                
                <!-- Student Modal -->
<div class="modal fade" id="studenModal_$student->id" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="<?php echo e(route('student.update',$student->id)); ?>">
					<?php echo csrf_field(); ?>
					  <div class="row">
                
                     
                      <div class="col-6">
                      <div class="form-group py-2">
								    
								    <div class="controls">
									    <input type="text" name="name" id="name" class="form-control bg-white" required="" data-validation-required-message="This field is required" value="<?php echo e($student->name); ?>"> 
                                        <label class="text-dark" for="name" value="">Name</label>
                                        <div class="help-block"></div>
                                    </div>
						   </div>
                     <div class="form-group py-2">
								    
								    <div class="controls">
									    <input type="email" name="email" id="email" class="form-control bg-white" required="" data-validation-required-message="This field is required" value="<?php echo e($student->email); ?>"> 
                                        <label class="text-dark" for="email" value="">Email</label>
                                        <div class="help-block"></div>
                                    </div>
						   </div>
                     <div class="form-group py-2">
								    
                     <div class="controls">
									    <input type="text" name="age" id="age" class="form-control bg-white" required="" data-validation-required-message="This field is required" value="<?php echo e($student->age); ?>"> 
                                        <label class="text-dark" for="age" value="">Age</label>
                                        <div class="help-block"></div>
                                    </div>
						   </div>
                      </div>

                      <div class="col-6">
                         	    
                      <div class="form-group py-2">
								    <div class="controls">
									    <input type="text" name="phone_no" id="phone_no" class="form-control bg-white" required="" data-validation-required-message="This field is required" value="<?php echo e($student->phone); ?>"> 
                                        <label class="text-dark" for="phone_no" value="">Phone No</label>
                                        <div class="help-block"></div>
                                    </div>
						        </div>

                        
                          <div class="form-group py-2">    
								    <div class="controls">
									    <textarea type="text" name="address" id="address" class="form-control bg-white" required="" data-validation-required-message="This field is required" style="height:150px;"><?php echo e($student->address); ?></textarea>
                                        <label class="text-dark" for="address" value="">Address</label>
                                        <div class="help-block"></div>
                                    </div>
						        </div>
                      </div>
                     
					  </div>
						<div class="text-xs-center d-flex justify-content-center mt-5">
							<input type="submit" class="btn btn-rounded btn-secondary mb-5" value="Submit">
						</div>
					</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
                
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
             </table>


             <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="<?php echo e(route('student.store')); ?>">
					<?php echo csrf_field(); ?>
					  <div class="row">
                
                     
                      <div class="col-6">
                      <div class="form-group py-2">
								    
								    <div class="controls">
									    <input type="text" name="name" id="name" class="form-control bg-white" required="" data-validation-required-message="This field is required"> 
                                        <label class="text-dark" for="name" value="">Name</label>
                                        <div class="help-block"></div>
                                    </div>
						   </div>
                     <div class="form-group py-2">
								    
								    <div class="controls">
									    <input type="email" name="email" id="email" class="form-control bg-white" required="" data-validation-required-message="This field is required"> 
                                        <label class="text-dark" for="email" value="">Email</label>
                                        <div class="help-block"></div>
                                    </div>
						   </div>
                     <div class="form-group py-2">
								    
                     <div class="controls">
									    <input type="text" name="age" id="age" class="form-control bg-white" required="" data-validation-required-message="This field is required"> 
                                        <label class="text-dark" for="age" value="">Age</label>
                                        <div class="help-block"></div>
                                    </div>
						   </div>
                      </div>

                      <div class="col-6">
                         	    
                      <div class="form-group py-2">
								    <div class="controls">
									    <input type="text" name="phone_no" id="phone_no" class="form-control bg-white" required="" data-validation-required-message="This field is required"> 
                                        <label class="text-dark" for="phone_no" value="">Phone No</label>
                                        <div class="help-block"></div>
                                    </div>
						        </div>

                        
                          <div class="form-group py-2">    
								    <div class="controls">
									    <textarea type="text" name="address" id="address" class="form-control bg-white" required="" data-validation-required-message="This field is required" style="height:150px;"> </textarea>
                                        <label class="text-dark" for="address" value="">Address</label>
                                        <div class="help-block"></div>
                                    </div>
						        </div>
                      </div>
                     
					  </div>
						<div class="text-xs-center d-flex justify-content-center mt-5">
							<input type="submit" class="btn btn-rounded btn-secondary mb-5" value="Submit">
						</div>
					</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>






         </div>
        </div>       
      </div>  
</section>    
</main>

<footer>  

</footer>    

</body>
    <script src="<?php echo e(asset('backend/js/bootstrap.bundle.min.js')); ?>"></script>
</html>
<?php /**PATH C:\xampp\htdocs\Somikoronlaravel\student\resources\views/student/index.blade.php ENDPATH**/ ?>