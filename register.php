<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="/CSS/Style.css"/>
    <title>Register</title>
</head>
<body>
    <header>
        <div class="fluid-container">
          <div class="row">
            <div class="logo col-md-7">
              <h3><span class="TUN">TUN</span>FLIX</h3>
            </div>
            <div class="col-md-5 cnt-in-div">
              <ul class="nav-links nav">
                <li><a class="nav-link" href="#">Upcoming</a></li>
                <li><a class="nav-link" href="#">Trending</a></li>
                <li>
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                      </a>
                      <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </header>

    <div class="infos-container">
    
        <form action="" >
             <h2 class="regist">Register</h2>
            <div class="name-container">
               
            <div class="form">
            <input type="text" name="First-Name" autocomplete="off" required>
            <label for="First-Name" class="label-an">
                <span class="content">First Name</span>
            </label>
        </div>
  
        <div class="form">
            <input type="text" name="Last-Name" autocomplete="off" required>
            <label for="Last-Name" class="label-an">
                <span class="content">Last Name</span>
            </label>
        </div>
        <div class="form">
            <input type="email" name="Email" autocomplete="off" required>
            <label for="Email" class="label-an">
                <span class="content">Email</span>
            </label>
        </div>
        <div class="form">
            <input type="Password" name="Password" autocomplete="off" required>
            <label for="Password" class="label-an">
                <span class="content">Password</span>
            </label>
        </div>
        <div class="form">
            <input type="date" name="Birth-Date" autocomplete="off" placeholder="none" required>
            <label for="Birth-Date" class="label-an">
                <span class="content">Birth Date</span>
            </label>
        </div>
      
        </form>

    </div>
</body>
</html>

