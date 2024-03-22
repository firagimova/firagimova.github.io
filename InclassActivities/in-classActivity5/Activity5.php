<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Form</title>

    <style>
        td{
            padding: 10px;
        }
    </style>

</head>

<body>
    <form action="Activity5-preview.php" method="post">
        <table>
            <tr>
                <td>
                    <td>Name: </td>
                    <td><input type="text" name="name"></td>
                    
                    
                </td>
                
                
            </tr>
            <tr>
                <td>
                     
                    <td>Username:</td>
                    <td><input type="text" name="uname"></td>
                </td>
            </tr>
            <tr>
                <td>
                    
                     
                    <td>Password:</td>
                    <td><input type="password" name="pass"></td>
                </td>
            </tr>
            <tr>
                <td>
                     
                    <td>Address:</td>
                    <td><input type="text" name="adres"></td>
                </td>
            </tr>
            <tr>
                <td>
                    
                    
                    <td>Country:</td>
                    <td><select name="countries">
                        <option value="(Please select a country)" selected >(Please select a country)</option>
                        <option value="USA">USA</option>
                        <option value="Canada">Canada</option>
                        <option value="Turkiye">Turkiye</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                    </select></td>
                </td>
            </tr>
            <tr>
                <td>
                     
                    <td>ZIP Code:</td>
                    <td><input type="text" name="zip"></td>
                </td>
            </tr>
            <tr>
                <td>
                     
                    <td>Email:</td>
                    <td><input type="text" name="email"></td>
                </td>
            </tr>
            <tr>
                <td>
                     
                    
                    <td>Sex:</td>
                    <td><input type="radio" name="sex" value="Male">Male
                    <input type="radio" name="sex" value="Female">Female</td>
                </td>
            </tr>
            <tr>
                <td>
                    
                    
                    <td>Language:</td>
                    <td><input type="checkbox" name="lang[]" value="English">English
                    <input type="checkbox" name="lang[]" value="French">French
                    <input type="checkbox" name="lang[]" value="German">German</td>
                </td>
            </tr>
            <tr>
                <td>
                    
                    
                    <td>About: <br></td>
                    <td><textarea name="about" placeholder="Hello, World!"></textarea></td>
                </td>

            </tr>
            <tr>
                <td>
                    
                    <td></td>
                    <td><input type="submit" value="Submit"></td>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>