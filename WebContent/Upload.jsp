<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <h2>Add Player</h2>
        <form id="form1" enctype="multipart/form-data" action="addplayer" method="post">
            <table>
                <tr>
                    <td>Enter Player Name :</td>
                    <td><input  type="text"  name="playername"/></td>
                </tr>
                <tr>
                    <td>Select Photo  </td>
                    <td><input type="file"  name="playerphoto" />
                </tr>
            </table>
            <p/>
            <input type="submit" value="Add Photo"/>
        </form>
        <p/>
        <a href="listplayers">List Players</a>
    </body>
</html>