<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Danh sách sinh viên</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <style>
    .btn {
      --bs-btn-line-height: 1;
    }
    .table-hover tbody tr:hover {
      background-color: #f8f9fa;
    }
  </style>
</head>
<body>
  <section class="container my-4">
    <div class="card">
      <div class="card-header text-center">
        <h1>Danh sách sinh viên</h1>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-hover">
          <thead class="table-light">
            <tr>
              <th class="text-center">#</th>
              <th>Mã NCC</th>
              <th>Tên NCC</th>
              <th>Địa chỉ</th>
              <th>Điện thoại</th>
              <th class="text-center">Chức năng</th>
            </tr>
          </thead>
          <tbody>
            @php $stt = 1; @endphp
            @foreach ($NhaCC as $item)
              <tr>
                <th class="text-center" scope="row">{{ $stt++ }}</th>
                <td>{{ $item->nqtMaNCC }}</td>
                <td>{{ $item->nqtTenNCC }}</td>
                <td>{{ $item->nqtDiaChi }}</td>
                <td>{{ $item->nqtDienThoai }}</td>
                <td class="text-center">
                  <a href="/sinhvien/detail/{{ $item->nqtMaNCC }}" class="btn btn-success btn-sm" title="Chi tiết">
                    Chi tiết
                  </a>
                  <a href="/sinhvien/edit/{{ $item->nqtMaNCC }}" class="btn btn-primary btn-sm" title="Sửa">
                    Sửa
                  </a>
                  <a href="/sinhvien/delete/{{ $item->nqtMaNCC }}" class="btn btn-danger btn-sm" title="Xóa"
                     onclick="return confirm('Bạn muốn xóa sinh viên này không? Mã: {{ $item->nqtMaNCC }}');">
                    Xóa
                  </a>
                </td>
              </tr>
              
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="card-footer d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Tổng số sinh viên: {{ $NhaCC->count() }}</h5>
        <a href="/sinhvien/add" class="btn btn-primary">Thêm mới</a>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
