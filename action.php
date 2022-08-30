<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
   <?php if ($_SERVER['REQUEST_METHOD']==='POST') : ?>
    <P> I am working in  <?php echo $_POST['name']; ?> now. </p>
    <P> My email is <?php echo $_POST['email']; ?> </p>
    <?php endif; ?>

   <!-- <P> I LOVE PHP <?php echo $_get['name']; ?> </p> -->
    
       
   </form> 
</body>
</html>