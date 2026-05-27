<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Danh sách sinh viên'; ?></title>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            padding: 30px;
            margin: 0;
        }

        h1 {
            color: #2c3e50;
            margin-bottom: 20px;
            font-size: 28px;
            font-weight: 600;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
            display: inline-block;
        }

        .table-container {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            border-radius: 8px;
            overflow: hidden;
            background: #fff;
            margin-top: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: white;
            font-weight: 600;
            padding: 14px 16px;
            text-transform: uppercase;
            font-size: 13px;
            letter-spacing: 0.5px;
        }

        td {
            padding: 12px 16px;
            border-bottom: 1px solid #eef2f3;
            color: #4f5d73;
            font-size: 15px;
        }

        tr:nth-child(even) {
            background-color: #fdfdfd;
        }

        tr:nth-child(odd) {
            background-color: #ffffff;
        }

        tr:hover td {
            background-color: #f1f7fc;
            color: #2c3e50;
            cursor: pointer;
        }

        td:first-child, th:first-child {
            text-align: center;
            width: 70px;
        }
    </style>
</head>

<body>
    <?php $sinhviens = $sinhviens ?? []; ?>

    <h1>Danh sách sinh viên</h1>

    <div class="table-container">
        <table>
            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>MSSV</th>
                <th>Giới tính</th>
            </tr>

            <?php foreach ($sinhviens as $index => $sinhvien): ?>
                <tr>
                    <td><?php echo $index + 1; ?></td>
                    <td><?php echo $sinhvien['hoten']; ?></td>
                    <td><?php echo $sinhvien['mssv']; ?></td>
                    <td><?php echo $sinhvien['gioitinh']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>