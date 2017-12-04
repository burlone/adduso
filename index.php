<?
include "config.php";

$sql = $mysqli->query("SELECT * FROM `check_geo` ORDER BY id DESC");

while($list_check = mysqli_fetch_assoc($sql)){
?>
    <table>
        <tr>
            <td>
                <strong><?echo $list_check['date']?></strong> we were in:
            </td>
        </tr>
        <tr>
            <td>
                <?echo 'Route : ' . $list_check['route'] . ','. $list_check['street_number'];?>
            </td>
        </tr>
        <tr>
            <td>
                <?echo 'Locality; : ' . $list_check['locality'];?>
            </td>
        </tr>
        <tr>
            <td>
                <?echo 'Administrative area : ' . $list_check['administrative_area_level_1'];?>
            </td>
        </tr>
        <tr>
            <td>
                <?echo 'Country : ' . $list_check['country'];?>
            </td>
        </tr>
    </table>
    <hr>
<?
}
?>