<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>dashboard</h1>

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .btn {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .form-group {
            margin-bottom: 15px;
        }

        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
        }

        .btn-save {
            background-color: #28a745;
        }

        .btn-delete {
            background-color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Item List</h1>
        <table>
            <thead>
                <tr>
                    <th>product_id</th>
                    <th>product_name</th>
                    <th>product_des</th>
                    <th>price</th>
                </tr>
            </thead>
            <tbody>
                <!-- Sample data rows will be dynamically added here -->
            </tbody>
        </table>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" placeholder="Item name">
        </div>
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" placeholder="Item quantity">
        </div>
        <button class="btn btn-save">Save</button>
    </div>
</body>
</html>

