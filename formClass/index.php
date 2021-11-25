<!DOCTYPE html>
<html lang="en">
    <head>
   
        <title>|</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    </head>

    <body>
        <?php include_once 'formClass.php';?>

        <div class="container">
        <?php
error_reporting(0);
$dsn = "mysql:host=localhost;dbname=CRUD";
$user = "root";
$passwd = "";

$pdo = new PDO($dsn, $user, $passwd);

$id = 12;

$stm = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stm->bindValue(1, 1);
$stm->execute();

$row = $stm->fetch(PDO::FETCH_ASSOC);

$form = new FormFields();
$form->text('name', 'name', $row['name'], $req, $desc, $css_class);
$form->text('city', 'city', $row['city'], $req, $desc, $css_class);
$form->countries('country', 'country', $row['country'], $req, $desc, $css_class);
$form->date('dob', 'Date of Bith', $row['dob'], $req, $desc, $css_class);
$form->select('gender', 'gender', $row['gender'], $req, $desc, ['male','female'], $css_class);
$form->upload('img', 'Photo upload', $row['img'], $req, $desc, $css_class);
$form->date('date', 'Date', $row['dob'], $req, $desc, $css_class);
$form->checkbox('boolean', 'boolean', $row['boolean'], $req, '1', $css_class);
$form->multiselect('multi_select', 'multiselect', $row['multi_select'], $req, ['a','b','c','d'], $css_class, $perLine);
//foreach($row['multi_select'] as $one){echo $one.'<br/  >';}
print_r($row['multi_select']);
echo '<br>'.in_array('d', $row['multi_select'])?'selected':'nope';
?>
        </div>



        

    </body>

</html>