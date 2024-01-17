<!-- The Modal -->
<div id="myModal_1" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close" onclick="closeModal_1()">&times;</span>
    <h2>Create New User</h2>
    <form method='post' action='Scripts/Users/CreateUser.php'>
        Username: <input type='text' name='username' required><br>
        Password: <input type='password' name='password' required><br>
        <input type='submit' value='Create User'>
    </form>
  </div>

</div>

<script>
    // JavaScript functions for modal handling
    function openModal_1() {
        document.getElementById('myModal_1').style.display = 'block';
    }

    function closeModal_1() {
        document.getElementById('myModal_1').style.display = 'none';
    }
</script>
