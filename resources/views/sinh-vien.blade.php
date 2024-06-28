<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gioi thieu sinh vien</title>

</head>
<body>
<table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Họ và tên</th>
                <th>MSSV</th>
                <th>Chuyên ngành</th>
            </tr>
        </thead>
        <tbody>

                @foreach($sinhVien as $value)
                <tr>
                    <td>{{ $value['id'] }}</td>
                    <td>{{ $value['name'] }}</td>
                    <td>{{ $value['mssv'] }}</td>
                    <td>{{ $value['chuyenNganh'] }}</td>
                </tr>
                @endforeach
        </tbody>
    </table>
</body>
</html>