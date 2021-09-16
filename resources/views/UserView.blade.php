<!DOCTYPE html>
<html>
    <form method="post" action='UserView'>
    @csrf
        <table border ="1">
            <tr>
                <th colspan="2">NHAP THONG TIN</th>
            </tr>   
            <tr>
                <td>HoTen</td>
                <td>
                    <input type="text" name="HoTen">
                </td>
            </tr>
            <tr>
                <td>Mssv</td>
                <td>
                    <input type="test" name="Mssv">
                </td>
            </tr>
            <tr>
                <td>Lop</td>
                <td>
                    <input type="test" name="Lop">
                </td>
            </tr>
       </table>
       <input type="submit" value = "Them" name= "add_student">
    </form>
</html>
