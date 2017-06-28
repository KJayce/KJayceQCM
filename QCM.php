<?php session_start(); ?>

<?php
        $errLog=" ";

        if(isset($_POST['infoSub'])){
                if( isset($_POST['fName']) && !empty($_POST['fName']) && isset($_POST['sName']) && !empty($_POST['sName']) && isset($_POST['bDate']) && !empty($_POST['bDate']) && isset($_POST['email']) && !empty($_POST['email'])){
                

                $_POST['fName'] = trim($_POST['fName']);
                $_POST['fName'] = filter_var($_POST['fName'], FILTER_SANITIZE_STRING);

                $_POST['sName'] = trim($_POST['sName']);
                $_POST['sName'] = filter_var($_POST['sName'], FILTER_SANITIZE_STRING);

                $_POST['bDate'] = preg_replace("([^0-9/])", "([^0-9-])", $_POST['bDate']);
                $_POST['email'] = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
                
                $_SESSION['fName'] = $_POST['fName'];
                $_SESSION['sName'] = $_POST['sName'];
                $_SESSION['bDate'] = $_POST['bDate'];
                $_SESSION['email'] = $_POST['email'];


                }else{
                        $errLog= "Required fields must be filled";
                }
        }
        ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="QCM.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="panel panel-primary text-center">
        <div class="panel-heading">QCM</div>
        <div class="panel-body">
            Choose Wisely!
        </div>
    </div>
    <section class="container-fluid">
        <form class="form-group" form="pInfos"method="POST" action="QCM.php">
            <section class="pi">
                <label for="fName">Name</label>
                <input class="form-control" type="text" name="fName" placeholder="Enter name here...">

                <label for="sName">Surname</label>
                <input class="form-control" type="text" name="sName" placeholder="Enter surname here...">

                <label for="bDate">Birthdate</label>
                <input class="form-control" type="date" name="bDate" value=""><br>

                <label for="email">E-mail Address</label>
                <input class="form-control" type="text" name="email" value="">

                <input class="btn-success" type="submit" name="infoSub" value="Send">
            </section>
    </section>
    </form>

    

    <?php if(isset($_POST['infoSub'])): ?>

    <div class="panel panel-primary text-center">
        <div class="panel-heading">QCM</div>
        <div class="panel-body">
            Choose Wisely!
        </div>
    </div>

    <form class="container-fluid" form="QX" method="POST" action="Ans.php">
        <section class="Questions">
            <label for="Q1"> What's the brand with a mustached plummer?</label><br>
            <input class="" type="radio" name="Q1" value="11">Sega<br>
            <input class="" type="radio" name="Q1" value="12">Nintendo<br>
            <input class="" type="radio" name="Q1" value="13">Sony<br>
            <input class="" type="radio" name="Q1" value="14">SquareSoft<br>

            <label for="Q2"> In wich year was the PS1 released?</label><br>
            <input class="" type="radio" name="Q2" value="21">1994<br>
            <input class="" type="radio" name="Q2" value="22">1986<br>
            <input class="" type="radio" name="Q2" value="23">2000<br>
            <input class="" type="radio" name="Q2" value="24">1998<br>

            <label for="Q3"> What is to this day the most sold console in history?</label><br>
            <input class="" type="radio" name="Q3" value="31">Super Nintendo<br>
            <input class="" type="radio" name="Q3" value="32">Xbox 360<br>
            <input class="" type="radio" name="Q3" value="33">Jaguar<br>
            <input class="" type="radio" name="Q3" value="34">Playstation 2<br>

<!--
            <label for="Q4"> Question 4</label><br>
            <input class="" type="radio" name="41" value=""><br>
            <input class="" type="radio" name="42" value=""><br>
            <input class="" type="radio" name="43" value=""><br>
            <input class="" type="radio" name="44" value=""><br>

            <label for="Q5"> Question 5</label><br>
            <input class="" type="radio" name="51" value=""><br>
            <input class="" type="radio" name="52" value=""><br>
            <input class="" type="radio" name="53" value=""><br>
            <input class="" type="radio" name="54" value=""><br>

            <label for="Q6"> Question 6</label><br>
            <input class="" type="radio" name="61" value=""><br>
            <input class="" type="radio" name="62" value=""><br>
            <input class="" type="radio" name="63" value=""><br>
            <input class="" type="radio" name="64" value=""><br>

            <label for="Q7"> Question 7</label><br>
            <input class="" type="radio" name="71" value=""><br>
            <input class="" type="radio" name="72" value=""><br>
            <input class="" type="radio" name="73" value=""><br>
            <input class="" type="radio" name="74" value=""><br>

            <label for="Q8"> Question 8</label><br>
            <input class="" type="radio" name="81" value=""><br>
            <input class="" type="radio" name="82" value=""><br>
            <input class="" type="radio" name="83" value=""><br>
            <input class="" type="radio" name="84" value=""><br>

            <label for="Q9"> Question 9</label><br>
            <input class="" type="radio" name="91" value=""><br>
            <input class="" type="radio" name="92" value=""><br>
            <input class="" type="radio" name="93" value=""><br>
            <input class="" type="radio" name="94" value=""><br>

            <label for="Q10"> Question 10</label><br>
            <input class="" type="radio" name="01" value=""><br>
            <input class="" type="radio" name="02" value=""><br>
            <input class="" type="radio" name="03" value=""><br>
            <input class="" type="radio" name="04" value=""><br>

-->

        </section>
        <button class="button btn-success btn-lg" type="submit" name="submit"> submit </button>
        </form>
        <?php endif; ?>
</body>

</html>