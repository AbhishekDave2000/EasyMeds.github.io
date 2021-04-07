<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>

    <style>
        form {
            border: 2px solid black;
            background-color: rgb(70, 70, 231);
            width: 98%;
            height: 300px;
            margin-bottom: 5px;
            box-shadow: 5px 10px black;
            border-radius: 5px;

        }

        fieldset {
            width: 40%;
            margin-left: 28%;
        }

        input {
            border-radius: 4px;
            border-width: 0px;
            box-shadow: 3px 2px rgb(247, 32, 32);
        }

        button {
            border-radius: 4px;
            border: black;
            width: 80px;
        }

        .td {
            text-align: center;
        }

        table {
            margin-left: 40px;
            margin-top: 50px;
        }

        .form_error span {
            width: 80%;
            height: 35px;
            margin: 3px 10%;
            font-size: 1.1em;
            color: #D83D5A;
        }

        .form_error input {
            border: 1px solid #D83D5A;
        }
    </style>


</head>

<body>
    <fieldset>
        <legend>Sign-Up Form</legend>

        <form action="sign.php" method="POST">
            <table id="signupT">
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" placeholder="Name" id="N1"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" id="E1" placeholder="Email"></td>
                </tr>
                <tr>
                    <td>Phone-Number:</td>
                    <td><input type="tel" name="tele" id="T1" placeholder="Phone Number"></td>
                </tr>
                <tr>
                    <td>User-Name:</td>
                    <td><input type="text" name="user1" id="U1" placeholder="User Name"></td>     
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="Pass" id="Pas1"></td>
                </tr>
                <tr>
                    <td class="td" colspan="2"><button type="submit">Submit</button></td>
                </tr>
                <tr>
                    <td class="td" colspan="2"><button type="reset">Reset</button></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>