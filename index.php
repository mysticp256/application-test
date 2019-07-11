<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head></head>
<body>
    <?php
    $people = array(
       array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
       array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
       array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
       array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
       array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);
    ?>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($people as &$value)
            {?>
            <tr>
                <td>
                    <?php echo($value['first_name'])?>
                </td>
                <td>
                    <?php echo($value['last_name'])?>
                </td>
                <td>
                    <?php echo($value['email'])?>
                </td>
                <td>
                    <button type="button" onclick="javascript:clickMe('<?php echo($value['first_name'])?>','<?php echo($value['last_name'])?>','<?php echo($value['email'])?>');">Click Here</button>
                </td>
            </tr>
            <?php
            }?>
        </tbody>
    </table>
    <script type="text/javascript">
        function clickMe(firstName, lastName, email) {
            var fullName = 'FullName: ' + firstName + ' ' + lastName;
            var eMail = 'Email: ' + email;
            window.alert(fullName + '\n\n' + eMail);
        }
    </script>
</body>
</html>
