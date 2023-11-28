<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter&family=Staatliches&display=swap" rel="stylesheet">
  <title>Page Barang</title>
</head>

<body>

  <div class="sidebar">
    <div class="profile">
        <img src="assets/pp.jpg" alt="Profile Picture">
        <div class="profile-info">
          <h2>Rofa'ul Akrom</h2>
          <p>Admin</p>
        </div>
      </div> 
    <a href="barang" class="menu-item active"><i class="fas fa-home"></i> Home</a>
    <a href="barangnota.list" class="menu-item"><i class="fas fa-database"></i> Barang Nota</a>
    <a href="kasir.list" class="menu-item"><i class="fas fa-users"></i> Kasir</a>
    <a href="nota.list" class="menu-item"><i class="fas fa-users"></i> Nota</a>
    <a href="tenan.list" class="menu-item"><i class="fas fa-users"></i> Tenan</a>
  </div>

  <div class="main-content">
    <div class="logo">
      <h3>Assesment Individu</h3>
    </div>
    <!-- Your content here -->
    <div class="content-title">
      <h1>Info Barang</h1>
    </div>
    <div class="container">
      <a href="barang/add"><button href="add_barang" class="">Add</button></a>
      <section class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>id</th>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>Satuan</th>
                  <th>Harga Satuan</th>
                  <th>Stok</th>
                </tr>
              </thead>
              @foreach ($barangRecord as $value)
                <tr>
                  <td>{{ $value->id }}</td>
                  <td>{{ $value->kodebarang }}</td>
                  <td>{{ $value->namabarang }}</td>
                  <td>{{ $value->satuan }}</td>
                  <td>{{ $value->hargasatuan }}</td>
                  <td>{{ $value->stok }}</td>
                  <td>
                    <a href="{{ url('barang/edit/'.$value->id)}}" class="btn btn-primary">Edit</a>
                    <a onclick="return confirm('Are you sure want to delete?')"  href="{{ url('barang/delete/'.$value->id)}}" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                @endforeach
            </table>
          </div>
        </div>
      </section>
    </div>




</body>
<style>
  body,
  html {
    height: 100%;
    margin: 0;
    font-family: 'Inter', sans-serif;
  }

  .sidebar {
    background-color: #FF4D4D;
    color: white;
    padding: 10px;
    width: 250px;
    height: 70vmax;
    float: left;
    display: flex;
    flex-direction: column;
  }

  .profile {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
  }

  .profile img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin-right: 10px;
  }

  .profile-info {
    display: flex;
    flex-direction: column;
  }

  .profile-info h2 {
    font-size: 16px;
    text-transform: uppercase;
    margin: 0;
  }

  .profile-info p {
    font-size: 14px;
    margin: 0;
  }

  .menu-item {
    background-color: #FF4D4D;
    padding: 10px;
    margin-top: 10px;
    text-align: center;
    border: none;
    color: white;
    text-decoration: none;
    display: block;
    transition: 0.3s;
    border-radius: 8px;
  }

  .menu-item:hover {
    background-color: #DA0100;
  }

  .main-content {
    margin-left: 280px;
    margin-right: 50%50%;
    padding: 20px;
    color: #FF4D4D;
  }

  .main-content h1 {
    color: #FF4D4D;
    font-size: 24px;
  }

  .logo {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
    /* Adjust as needed */
  }

  .logo h3 {
    color: #FF4D4D;
    font-size: 20px;
    /* Adjust font size as needed */
  }

  .logo img {
    max-width: 40px;
    /* Adjust size of logo */
    margin-right: 5px;
    /* Space between logo and text */
  }

  .container {
    /* margin-top: 20px; */
    margin-left: 280px;
    margin-right: 10px;
    padding: 2px;
    background-color: #FFEBD7;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  .container .data-profile .data-item h1 {
    color: #FF4D4D;
    font-size: 24px;
  }

  .container h1 {
    color: #FF4D4D;
    font-size: 24px;
  }

  .data-profile {
    /* margin-top: 2px; */
    /* margin-left: 280px; */
    background-color: #FFEBD7;
    border-radius: 8px;
    padding-top: 10px;
    padding-right: 150px;
    padding-left: 50px;
    padding-bottom: 50px;
  }

  .top h1 {
    color: #FF4D4D;
    font-size: 24px;
    margin-bottom: 20px;
  }

  .data-item {
    margin-top: 20px;
  }

  .form-group {
    margin-bottom: 20px;
  }

  .form-group label {
    font-size: 16px;
    color: #FF4D4D;
  }

  .form-group input,
  .form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-top: 5px;
    box-sizing: border-box;
  }

  .form-group img {
    margin-top: 10px;
  }

  .card-footer {
    margin-top: 20px;
  }

  .card-footer button,
  .card-footer a {
    margin-right: 10px;
  }

  .card {
    margin-top: 20px;
  }

  .card-header table {
    width: 100%;
  }

  .card-header table th,
  .card-header table td {
    text-align: center;
  }

  .card-header table thead tr {
    background-color: #f2f2f2;
  }

  .card-header table tbody tr:hover {
    background-color: #e6e6e6;
  }

  .card-header table tbody td {
    vertical-align: middle;
  }

  .card-header table tbody td a {
    margin-right: 5px;
  }

  .profile {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
  }

  .profile img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin-right: 10px;
  }

  .profile-info {
    display: flex;
    flex-direction: column;
  }

  .profile-info h2 {
    font-size: 16px;
    text-transform: uppercase;
    margin: 0;
  }

  .profile-info p {
    font-size: 14px;
    margin: 0;
  }

  .menu-item {
    background-color: #FF4D4D;
    padding: 10px;
    margin-top: 10px;
    margin-right: 8px;
    text-align: left;
    border: none;
    color: white;
    text-decoration: none;
    display: block;
    transition: 0.3s;
    border-radius: 8px;
  }

  .menu-item.active,
  .menu-item-main.active {
    background-color: #DA0100;
    /* Warna lebih gelap untuk item menu yang aktif */
  }

  .menu-item:hover {
    background-color: #DA0100;
  }

  .main-content .container {
    margin-left: 0px;
    padding: 20px;
    color: #FF4D4D;
  }

  .main-content h1 {
    color: #FF4D4D;
    font-size: 24px;
  }

  .logo {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
    /* Adjust as needed */
  }

  .logo h3 {
    color: #FF4D4D;
    font-size: 20px;
    /* Adjust font size as needed */
  }

  .logo img {
    max-width: 40px;
    /* Adjust size of logo */
    margin-right: 5px;
    /* Space between logo and text */
  }

  .content-title h1 {
    background-color: #F4DDC6;
    /* Peach background for title */
    padding: 20px;
    border-radius: 10px;
    color: #FF4D4D;
    /* Matching the sidebar color */
  }


  .get-data {
    margin-bottom: 15px;
  }

  .get-data label {
    display: block;
    margin-bottom: 5px;
    color: #FF4D4D;
    /* or any color you prefer */
    font-family: 'Inter', sans-serif;
  }

  .get-data input::placeholder {
    color: #aaa;
  }

  .get-data input[type="text"],
  .get-data input[type="number"],
  .get-data input[type="date"] {
    width: calc(100% - 22px);
    /* Full width minus padding and border */
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    /* Light grey border */
    margin-bottom: 10px;
    /* Spacing after each input */
  }

  .date-range .date-inputs {
    display: flex;
    justify-content: space-between;
  }

  .get-data .date-inputs input[type="date"] {
    width: 44%;
    /* Mengatur ukuran untuk memenuhi ruang dengan dua input */
  }

  button {
    padding: 10px 20px;
    background-color: #FF4D4D;
    /* Red background */
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  button:hover {
    background-color: #DA0100;
    /* Darker red on hover */
  }
</style>

</html>