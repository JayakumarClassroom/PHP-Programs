<html>

<body>
    <h4> With Static Function </h4>
    <?php
//Using STATIC Keyword


function static_track()
{
    STATIC $count = 0;
    $count++;
    print $count;
    print "<br>";
}
static_track();
static_track();
static_track();
?>
    <br>
    <hr>
    <h4> Without Static Function </h4>
    <?php
//Without STATIC Keyword


function withoutstatic_track()
{
    $count = 0;
    $count++;
    print $count;
    print "<br>";
}
withoutstatic_track();
withoutstatic_track();
withoutstatic_track();
?>
</body>

</html>