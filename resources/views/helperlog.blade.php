<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helperlog Dashboard</title>
    <link rel="stylesheet" href="/assets_helperlog/helperlog.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="wrapper d-flex">
        <!-- Sidebar -->
        <div class="sidebar">
          <div class="sidebar-header">
              <div class="profile d-flex align-items-center">
                  <img src="/assets_helperlog/materialD/materialD/Frame 40792-5.png" class="rounded-circle profile-img" alt="Admin">
                  <div class="profile-info">
                      <h5 class="mb-0">Admin</h5>
                      <p class="mb-0">admin@mail.com</p>
                  </div>
              </div>
          </div>
          <ul class="nav flex-column mt-3">
              <li class="nav-item">
                  <a href="#" class="nav-link active">Helperlog</a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">Helperfind</a>
              </li>
          </ul>
          <button class="btn btn-primary btn-block logout-btn">Log Out</button>
      </div>

        <!-- Main Content -->
        <div class="content p-4">
            <h2 class="mb-4 title-all">Helperlog Dashboard</h2>

            <!-- Statistik -->
            <h4 class="mt-4 title-content">Statistik Anda</h4>
            <div class="row">
                <div class="col-md-3">
                    <div class="card stat-card">
                        <div class="card-body text-center">
                            <img src="/assets_helperlog/materialD/materialD/Frame 40792-6.png" class="stat-icon" alt="Total Pendaftar">
                            <p class="stat-title">Total Pendaftar</p>
                            <h4 class="stat-value-daftar">105</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card stat-card">
                        <div class="card-body text-center">
                            <img src="/assets_helperlog/materialD/materialD/Frame 40792-7.png" class="stat-icon" alt="Perlu Review">
                            <p class="stat-title">Perlu Review</p>
                            <h4 class="stat-value-review">49</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card stat-card accepted">
                        <div class="card-body text-center">
                            <img src="/assets_helperlog/materialD/materialD/accepted.png" class="stat-icon" alt="Diterima">
                            <p class="stat-title">Diterima</p>
                            <h4 class="stat-value-accept">11</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card stat-card rejected">
                        <div class="card-body text-center">
                            <img src="/assets_helperlog/materialD/materialD/rejected.jpg" class="stat-icon" alt="Ditolak">
                            <p class="stat-title">Ditolak</p>
                            <h4 class="stat-value-reject">3</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- History Kontrak -->
            <h4 class="mt-4 title-content">History Kontrak</h4>
            <div class="table-responsive">
                <table class="table table-striped mt-2">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Pengaju</th>
                            <th>PRT Dibutuhkan</th>
                            <th>Durasi Kontrak</th>
                            <th>Asal Kota</th>
                            <th>Status</th>
                            <th>Total Pembayaran</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Adhitya Pratama</td>
                            <td>Sopir Pribadi</td>
                            <td>12 Bulan</td>
                            <td>Surabaya</td>
                            <td><span class="badge badge-success">Diterima</span></td>
                            <td>Rp 5.500.000</td>
                            <td><button class="btn btn-primary btn-sm">Selengkapnya</button></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Adhitya Pratama</td>
                            <td>Sopir Pribadi</td>
                            <td>12 Bulan</td>
                            <td>Surabaya</td>
                            <td><span class="badge badge-success">Diterima</span></td>
                            <td>Rp 5.500.000</td>
                            <td><button class="btn btn-primary btn-sm">Selengkapnya</button></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Adhitya Pratama</td>
                            <td>Sopir Pribadi</td>
                            <td>12 Bulan</td>
                            <td>Surabaya</td>
                            <td><span class="badge badge-success">Diterima</span></td>
                            <td>Rp 5.500.000</td>
                            <td><button class="btn btn-primary btn-sm">Selengkapnya</button></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Adhitya Pratama</td>
                            <td>Sopir Pribadi</td>
                            <td>12 Bulan</td>
                            <td>Surabaya</td>
                            <td><span class="badge badge-success">Diterima</span></td>
                            <td>Rp 5.500.000</td>
                            <td><button class="btn btn-primary btn-sm">Selengkapnya</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
