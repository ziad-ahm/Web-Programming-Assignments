<form method="post">
Name: <input type="text" name="name"><br>
Email: <input type="email" name="email"><br>
Age: <input type="number" name="age"><br>
Color: <input type="color" name="color"><br>
<input type="submit" name="q6" value="Signup">
</form>

<?php
if(isset($_POST['q6'])){
    echo "<div style='background:".$_POST['color'].";padding:20px'>";
    echo "Name: ".$_POST['name']."<br>";
    echo "Email: ".$_POST['email']."<br>";
    echo "Age: ".$_POST['age'];
    echo "</div>";
}
?>