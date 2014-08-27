<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Read</title>
    </head>
    <body>
        <form action="readUser.php" method="get" style="border: solid 1px black;">
            <h4>Read User</h4>
            User ID: <input name="id_user" type="text" value="1" /><br>
            Email: <input name="email" type="text" value="aaa@gmail.com" /><br>
            First Name: <input name="first_name" type="text" value="Gustavo" /><br>
            Last Name: <input name="last_name" type="text" value="Braz" /><br>
            <input type="submit" value="Read User" /><br>
        </form>
        <form action="readEvent.php" method="get" style="border: solid 1px black;">
            <h4>Read Event</h4>
            Event ID: <input name="id_event" type="text" value="1" /><br>
            Name: <input name="name" type="text" value="GetUprV0 Event" /><br>
            Description: <input name="description" type="text" value="Vai ficar fino" /><br>
            Start Time: <input name="start_time" type="text" value="2014-08-01 22:30:00" /><br>
            End Time: <input name="end_time" type="text" value="2014-08-12 13:30:00" /><br>
            <input type="submit" value="Read Event" /><br>
        </form>
    </body>
</html>