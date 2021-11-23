
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>webfinals</title>
    <link href="index.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
  </head>
  <body>
    
    <nav class="navbar">
      <div class="container-fluid">
        <h2>WELCOME</h2>
        <h1>Display Page</h1>
        <div class="p-2 me-3 bd-highlight">
      
          <button type="button" class="btn btn-primary" onclick="insertFrame()"><i class="fas fa-plus"></i> Create</button>
          <a href="logout.php" class="btn btn-danger"><i class="fas fa-sign-out-alt"></i> Log Out</a>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="d-flex bd-highlight mb-3">
      
      <form class="container mt-3">
      <button type="button" id="btnAll" class="btn btn-success" onclick="display()"><i class="fas fa-list-ul"></i> Show All Record</button>
      <button type="button" id="btnMale" class="btn btn-warning" onclick="showMale()"><i class="fas fa-mars"></i> Show Male</button>
      <button type="button" id="btnFemale" class="btn btn-light" onclick="showFemale()"><i class="fas fa-venus"></i> Show Female</button>
</form>

      </div>
      
      <div class="table-responsive">
        <table id="records" class="table text-white">
          <thead>
            <tr>
              <th>Name</th>
              <th>Age</th>
              <th>Gender</th>
              <th>Address</th>
              <th>Consultation Status</th>
              <th>Time</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="mytable">
            <tr>
              <td>ad</td>
              <td>asd</td>
              <td>asd</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    
  </body>
</html>