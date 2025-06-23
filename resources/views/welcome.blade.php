<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Volt Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      overflow-x: hidden;
    }
    .sidebar {
      min-height: 100vh;
    }
  </style>
</head>
<body class="d-flex">

<!-- Sidebar -->
<nav class="sidebar bg-dark text-white p-3" style="width: 250px;">
  <a href="#" class="d-flex align-items-center mb-3 text-white text-decoration-none">
    <span class="fs-4">⚡ Volt Overview</span>
  </a>
  <hr class="text-secondary">

  <ul class="nav nav-pills flex-column mb-auto">
    <li class="nav-item">
      <a href="#" class="nav-link active bg-primary text-white">
        <i class="bi bi-speedometer2 me-2"></i> Dashboard
      </a>
    </li>
    <li>
      <a href="#" class="nav-link text-white">
        <i class="bi bi-kanban me-2"></i> Kanban <span class="badge bg-warning text-dark ms-1">Pro</span>
      </a>
    </li>
    <li>
      <a href="#" class="nav-link text-white">
        <i class="bi bi-currency-dollar me-2"></i> Transactions
      </a>
    </li>
    <li>
      <a href="#" class="nav-link text-white">
        <i class="bi bi-gear me-2"></i> Settings
      </a>
    </li>
    <li>
      <a href="#" class="nav-link text-white">
        <i class="bi bi-calendar-week me-2"></i> Calendar <span class="badge bg-warning text-dark ms-1">Pro</span>
      </a>
    </li>
    <li>
      <a href="#" class="nav-link text-white">
        <i class="bi bi-map me-2"></i> Map <span class="badge bg-warning text-dark ms-1">Pro</span>
      </a>
    </li>
    <li>
      <a href="#" class="nav-link text-white">
        <i class="bi bi-table me-2"></i> Tables
      </a>
    </li>
    <li>
      <a href="#" class="nav-link text-white">
        <i class="bi bi-layers me-2"></i> Components
      </a>
    </li>
  </ul>

  <hr class="text-secondary">
  <div>
    <a href="#" class="btn btn-warning w-100 mb-2">Upgrade to Pro</a>
    <a href="#" class="text-white-50 text-decoration-none">Documentation v1.4</a>
  </div>
</nav>

<!-- Main Content -->
<div class="flex-grow-1 p-4">
  <h1 class="mb-4">Dashboard</h1>
  <div class="row">
    <div class="col-md-4">
      <div class="card shadow-sm mb-4">
        <div class="card-body">
          <h5 class="card-title">Customers</h5>
          <p class="fs-4">345k</p>
          <p class="text-success">+22% since last month</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow-sm mb-4">
        <div class="card-body">
          <h5 class="card-title">Revenue</h5>
          <p class="fs-4">$43,594</p>
          <p class="text-danger">-2% since last month</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow-sm mb-4">
        <div class="card-body">
          <h5 class="card-title">Bounce Rate</h5>
          <p class="fs-4">50.88%</p>
          <p class="text-success">-4% since last month</p>
        </div>
      </div>
    </div>
  </div>

  <div class="card shadow-sm">
    <div class="card-header">
      <h5 class="mb-0">Page Visits</h5>
    </div>
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th>Page Name</th>
            <th>Page Views</th>
            <th>Page Value</th>
            <th>Bounce Rate</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>/demo/admin/index.html</td>
            <td>3,225</td>
            <td>$20</td>
            <td class="text-danger">42.55%</td>
          </tr>
          <tr>
            <td>/demo/admin/forms.html</td>
            <td>2,987</td>
            <td>0</td>
            <td class="text-success">43.24%</td>
          </tr>
          <tr>
            <td>/demo/admin/util.html</td>
            <td>2,844</td>
            <td>294</td>
            <td class="text-success">32.35%</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>