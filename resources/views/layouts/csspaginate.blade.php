<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
        .pagination-container {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.pagination {
    display: flex;
    justify-content: center;
    list-style: none;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 10px;
}

.pagination li {
    margin: 0 5px;
}

.pagination a,
.pagination span {
    border: none;
    padding: 5px 10px;
    text-decoration: none;
    color: #333;
}

.pagination a:hover {
    background-color: #eee;
}

.pagination .active span {
    background-color: #007bff;
    color: #fff;
}
    </style>
</body>
</html>