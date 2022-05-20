<?php

    include('../partials/faqmenu.php');


    // connect with database
    $connc = new PDO("mysql:host=localhost;dbname=project", "root", "");
 
    // check if insert form is submitted
    if (isset($_POST["submit"]))
    {
        // create table if not already created
        $sql = "CREATE TABLE IF NOT EXISTS faqs (
            id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
            question TEXT NULL,
            answer TEXT NULL,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP
        )";
        $statement = $connc->prepare($sql);
        $statement->execute();
 
        // insert in faqs table
        $sql = "INSERT INTO faqs (question, answer) VALUES (?, ?)";
        $statement = $connc->prepare($sql);
        $statement->execute([
            $_POST["question"],
            $_POST["answer"]
        ]);
    }
 
    // [query to get all FAQs]

    // get all faqs from latest to oldest
$sql = "SELECT * FROM faqs ORDER BY id DESC";
$statement = $connc->prepare($sql);
$statement->execute();
$faqs = $statement->fetchAll();

 
?>

</style>
<!-- include bootstrap, font awesome and rich text library CSS -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="richtext/richtext.min.css" />
 
<!-- include jquer, bootstrap and rich text JS -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="richtext/jquery.richtext.js"></script>





<!-- layout for form to add FAQ -->
<div class="container" style="margin-top: 50px; margin-bottom: 50px;">
    <div class="row">
        <div style="margin-bottom: 50px;">

        <div class="section-title">
        <h2>FAQ</h2>
        <p>Add Faq for query</p></div>
 
            <!-- for to add FAQ -->
            <form method="POST" action="add.php">
 
                <!-- question -->
                <div class="form-group">
                    <label>Enter Question</label>
                    <input type="text" name="question" class="form-control" required />
                </div>
 
                <!-- answer -->
                <div class="form-group">
                    <label>Enter Answer</label>
                    <textarea name="answer" id="answer" class="form-control" required></textarea>
                </div>
 
                <!-- submit button -->
                <input type="submit" name="submit" class="buttondesign" value="Add FAQ" />
            </form>
        </div>
    </div>


 
    <!-- [show all FAQs here] -->

    <!-- show all FAQs added -->
<div class="row">
    <div>
        <table cellspacing="10px" >
            <!-- table heading -->
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Question</th>
                    <th>Answer</th>
                    <th>Actions</th>
                </tr>
            </thead>
 
            <!-- table body -->
            <tbody>
                <?php foreach ($faqs as $faq): ?>
                    <tr>
                        <td><?php echo $faq["id"]; ?></td>
                        <td><?php echo $faq["question"]; ?></td>
                        <td><?php echo $faq["answer"]; ?></td>
                        <td>
                            <!-- edit button -->
                            <a style="margin-bottom: 5px;" href="edit.php?id=<?php echo $faq['id']; ?>" class="btn buttondesign red">Edit</a>
 
                            <!-- delete form -->
                            <form method="POST" action="delete.php" onsubmit="return confirm('Are you sure you want to delete this FAQ ?');">
                                <input type="hidden" name="id" value="<?php echo $faq['id']; ?>" required />
                                <input type="submit" value="Delete" class="btn buttondesign green " />
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

</div>


<script>
// initialize rich text library
window.addEventListener("load", function () {
    $("#answer").richText();
});
</script>










