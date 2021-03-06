<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datatable</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- Datatable CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">

</head>
<body>

    <table class="table table-info" id="tabla">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Juan</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Marco</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Andrés</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Sebastian</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Aurelio</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Felipe</td>
            </tr>
            <td>7</td>
                <td>Leidy</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Hasbleidy</td>
            </tr>
            <tr>
                <td>9</td>
                <td>Laura</td>
            </tr>
            <tr>
                <td>10</td>
                <td>Daniela</td>
            </tr>
            <tr>
                <td>11</td>
                <td>Camila</td>
            </tr>
            <tr>
                <td>12</td>
                <td>Juliana</td>
            </tr>
        </tbody>
    </table>


        <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  


    <!-- Datatables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script src="{{url('js/tabla.js')}}"></script>

</body>
</html>