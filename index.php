<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" id="name" placeholder="Name"><br><br>
        <input type="text" name="regnum" id="regnum" placeholder="Registration number"><br><br>
        <input type="submit" value="Submit"><br><br>
    

    </form>
    <?php
        class StudentParent{
            public $stdName;
            public $stdRegNum;

            function __construct($name, $regnum) {
                $this->name = $stdName;
                $this->regnum = $stdRegNum;

              }
        }
        class StudentChild extends StudentParent{
            public function display(){
                $stdName = $_POST["name"];
                $stdRegNum = $_POST["regnum"];

                echo "The sudent name is " .$stdName; 
                echo "and the Registration number is" .$stdRegNum;
            }
        }
        $studentChild = new StudentChild();
        $studentChild->display();

    ?>
</body>
</html>