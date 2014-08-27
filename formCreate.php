<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Create</title>
    </head>
    <body>
        <form action="createUser.php" method="get" style="border: solid 1px black;">
            <h4>Create User</h4>
            Pass: <input name="pass" type="text" value="123" /><br>
            Email: <input name="email" type="text" value="aaa@gmail.com" /><br>
            First Name: <input name="first_name" type="text" value="Gustavo" /><br>
            Last Name: <input name="last_name" type="text" value="Braz" /><br>
            Profile Message: <input name="profile_message" type="text" value="Bacana" /><br>
            Picture Message: <input name="picture_message" type="text" value="Legal" /><br>
            <input type="submit" value="Create User" /><br>
        </form>
        <form action="createEvent.php" method="get" style="border: solid 1px black;">
            <h4>Create Event</h4>
            User ID (Administrator): <input name="id_administrator" type="text" value="1" /><br>
            Name: <input name="name" type="text" value="GetUprV0 Event" /><br>
            Description: <input name="description" type="text" value="Vai ficar fino" /><br>
            Start Time: <input name="start_time" type="text" value="2014-08-01 22:30:00" /><br>
            End Time: <input name="end_time" type="text" value="2014-08-12 13:30:00" /><br>
            <input type="submit" value="Create Event" /><br>
        </form>
        <form action="addUser.php" method="get" style="border: solid 1px black;">
            <h4>Add User Event</h4>
            User ID: <input name="id_administrator" type="text" value="1" /><br>
            Event ID: <input name="id_event" type="text" value="1" /><br>
            <input type="submit" value="Add User Event" /><br>
        </form>
    </body>
</html>