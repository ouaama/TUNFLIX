<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./CSS/Style.css" />
    <title>Document</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>

  <?php include './template/nav-bar-user.php'?>

  <body class="edit-profile">
    <div class="container edit-prof-div">
      <div class="row">
        <div class="col-sm-4 side-bar">
          <h2><i class="fas fa-user-edit"></i><span> Edit Profile</span></h2>
          <a class="active-edit" href="#" id="general-infos"><i class="fas fa-edit"></i><span> General Infos</span></a>
          <a class="active-edit" id="Change_Plan" href="#">
            <i class="fas fa-dollar-sign"></i><span> Change Plan</span>
          </a>
          <a class="active-edit" id="Change_Profile_Picture" href="#"
            ><i class="far fa-id-badge"></i><span> Change Profile Picture</span>
          </a>
          <a class="active-edit" id="Change_Email" href="#"
            ><i class="far fa-envelope"></i><span> Change Email</span></a
          >
          <a class="active-edit" href="#" id="password"
            ><i class="fas fa-unlock-alt"></i><span> Change Password</span>
          </a>
          
        </div>
        <div class="col-sm-8 target" >
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="./JS/Edit-profile.js"></script>
  </body>
</html>
