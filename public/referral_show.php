<?php ?>
<?php require_once ('../private/initialise.php'); ?>
<?php include('../private/shared/header.php'); ?>
<?php 
    $patient_ID = $_GET['id'] ?? '1';
    $referrals_of_id = find_referrals_by_id($patient_ID);
    $patient_set = find_patient_by_id($patient_ID);
    $patient = mysqli_fetch_assoc($patient_set);
?> 

<?php $page_title= 'Show Referrals'; ?>

<div id="content">
<div class= "Show Referral">
    <h1>Referrals for <?php echo $patient["first_name"] . " ". $patient["last_name"]; ?> </h1>


    <center>
    <br>
    <br>
    <table class= "ReferralsTable">
        <th> Date </th>
        <th> Consultant name</th> 
        <th> Consultant Specialty</th>
        <th> Organisation Hospital Name</th>

        <th> View </th>
 
     
       
       
 
        <?php while ($allReferrals = mysqli_fetch_assoc($referrals_of_id)){ ?>
            <tr>
                <td><?php echo h($allReferrals['date']); ?></td>
                <td><?php echo h($allReferrals['consultant_name']); ?></td>
                <td><?php echo h($allReferrals['consultant_specialty']); ?></td>
                <td><?php echo h($allReferrals['organisation_hospital_name']); ?></td>
                <td><a href=referral_details.php?id=<?php echo h($allReferrals['ID']); ?>>Details</a></td>
            
            </tr> 
        <?php } ?>
    </table>
    <?php if (!$_SESSION['userLevel'] == 1) { ?>
             <br><br><a class="action" href= "<?php echo url_for('referral_page.php?id=' . $patient_ID); ?>"> Add Referral </a>

        <a class="back-link" href="<?php echo url_for('/referral_list.php'); ?>">Back to List</a>
    </center>
<?php } ?>
    <?php if ($_SESSION['userLevel'] == 1) { ?>
        <br><br>
        <a class="back-link" href=patients.php>Go back</a>
    <?php } ?>

    </div>
</div>
