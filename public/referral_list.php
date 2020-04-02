<?php require_once ('../private/initialise.php'); ?>
<?php
    $patient_set = get_all_patients();
?>
<?php $page_title = 'Referrals';  ?>
<?php include (SHARED_PATH. '/header.php'); ?> 
<?php
if (isset($_POST['submitbtn'])) {
    $data = $_POST['search'];
    $user_set = search_by_nhs_no($data);
   
}

?> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class= "Referrals listing">
    <h1 id="title-page"> REFERRALS  </h1>
    <form method="post" class="example" id="searchbar" action="referral_list.php" style="margin:auto;max-width:700px">
                    <input type="text" name="search" id="searchinput" placeholder="Enter NHS Number to Search">
                    <button name="submitbtn" id="searchbutton" type="submit"><i class="fa fa-search"></i></button>
   </form>
   <br>
   <br>
   <center>
    <table class= "list">
        <th id = "darkblue"> Name </th>
        <th id = "lightblue"> NHS number </th>
        <th id = "darkblue"> Date of Birth </th>
        <th id = "lightblue"> Email </th>
        <th id = "darkblue"> Referring Doctor Name </th>
    

        <?php while ($patient = mysqli_fetch_assoc($patient_set)){ ?>
            <tr>
                <td> <a class="actions" href = "<?php echo url_for('/referral_show.php?id=' . $patient["ID"]); ?> " ><?php echo h($patient["first_name"]); echo " "; echo h($patient["last_name"]);  ?> </a></td> 
                <td> <?php echo h($patient["nhs_number"]); ?> </td>
                <td> <?php echo h($patient["date_of_birth"]); ?> </td>
                <td> <?php echo h($patient["email"]) ?> </td>
                <td> <?php echo h($patient["referring_doctor_name"]) ?> </td>
            </tr> 
        <?php } ?>
    </table>
    </center>
        <?php mysqli_free_result($patient_set); ?> 

    </div>

    <style>
    a {
                background-color: white;
    box-shadow: -1 1px 0 blue;
    color: rgb(42,103,204);
    padding: 0.3em 1em;
    position: relative;
    text-decoration: none;
    /* text-transform: uppercase; */
} 

a:hover {
  background-color: rgb(19, 26, 102);
  cursor: pointer;
}

a:active {
  box-shadow: none;
  top: 5px;
}

</style>

<?php include(SHARED_PATH . '/footer.php'); ?>
