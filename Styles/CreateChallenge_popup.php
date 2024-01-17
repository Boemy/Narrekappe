<!-- The Modal -->
<div id="myModal_2" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close" onclick="closeModal_2()">&times;</span>
    <h2>Add New Challenge</h2>
    <form method='post' action='Scripts/Challenges/CreateChallenge.php'>
        Name: <input type='text' name='name' required><br>
        Description: <input type='text' name='description' required><br>
        Difficulty: <input type='text' name='difficulty' required><br>
        Link: <input type='text' name='link' required><br>
        <input type='submit' value='Add challenge'>
    </form>
  </div>

</div>

<script>
    // JavaScript functions for modal handling
    function openModal_2() {
        document.getElementById('myModal_2').style.display = 'block';
    }

    function closeModal_2() {
        document.getElementById('myModal_2').style.display = 'none';
    }
</script>