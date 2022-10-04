   <div class="col-md-6 offset-md-2">
       <h2 class="mt-5">Add New User</h2>
       <?php if (isset($_SESSION['expire'])) {

            $diff = time() - $_SESSION['expire'];
            if ($diff > 2) {
                unset($_SESSION['status']);
                unset($_SESSION['expire']);
            }
        } ?>

       <?php if (isset($_SESSION['status'])) { ?>

           <div class="alert alert-success alert-dismissible fade show" role="alert">
               <?= $_SESSION['status'] ?>
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
           </div>
       <?php } ?>
       <form class="mt-3" action="../../controller/usercontroller.php" method="POST">

           <div class="form-group">

               <label for="username">User Name</label>
               <input type="text" class="form-control " id="username" aria-describedby="emailHelp" placeholder="Enter Your Name " name="username">
               <?php if (isset($_SESSION["username"])) { ?>

                   <p class="text-danger">
                       <?php echo $_SESSION['username'] ?>
                   </p>
               <?php

                }
                ?>
           </div>
           <div class="form-group">
               <label for="email">Email</label>
               <input type="email" class="form-control" id="email" placeholder="Enter Your Email " name="email">

               <?php if (isset($_SESSION['email'])) { ?>
                   <p class="text-danger">
                       <?= $_SESSION['email'] ?>
                   </p>
               <?php
                }
                ?>
           </div>
           <div class="form-group">
               <label for="password">Password</label>
               <input type="password" class="form-control" id="email" placeholder="*******" name="password">
               <?php if (isset($_SESSION['password'])) { ?>
                   <p class="text-danger">
                       <?= $_SESSION['password'] ?>
                   </p>
               <?php
                }
                ?>
           </div>
           <input type="hidden" name="action" value="add">
           <div class="form-bottom">

               <button type="submit" class="btn btn-primary">Save</button>


           </div>
       </form>
   </div>
   </div>
   </div>
   </div>