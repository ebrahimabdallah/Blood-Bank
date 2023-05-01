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
.footer {

    background-color:rgb(233, 19, 19);
  color: #fff;
  padding: 50px 50px;
}

.box-container {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}

.box {
  flex-basis: 20%;
  margin-bottom: 30px;
}

.box h3 {
  font-size: 17px;
  margin-bottom: 20px;
}

.box a {
  display: block;
  margin-bottom: 10px;
  color: #fff;
  text-decoration: none;
}

.box a i {
  margin-right: 10px;
}

.credit {
  text-align: center;
  margin-top: 50px;
  font-size: 22px;
  color: #fff;
}

.credit i {
  color: #ff2d55;
}

.box a:hover {
  transform: translateY(-5px); /* Move the text 5 pixels up */
  transition: transform 0.2s ease-in-out; /* Add a smooth transition effect */
}
.box a:hover {
  transform: translateY(-5px);
  transition: transform 0.2s ease-in-out;
  color: rgb(68, 6, 241); /* Change the text color to yellow */
}
/* Media query for screens smaller than 480px */
@media (max-width: 479px) {
  .box {
    flex-basis: 100%;
  }

  .box h3 {
    font-size: 14px;
  }

  .box a {
    font-size: 12px;
  }

  .credit {
    font-size: 10px;
  }
}

    </style>
</body>
</html>