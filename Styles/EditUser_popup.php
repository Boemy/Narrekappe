<!-- The Edit Modal -->
<div id="editModal_1" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close" onclick="closeEditModal_1()">&times;</span>
    <h2>Edit User</h2>
    <form id="editForm" method='post' action='Scripts/Users/EditUser.php'>
        <input type='hidden' name='editID' id='editID'>
        Username: <input type='text' name='editUsername' id='editUsername' required><br>
        Password: <input type='password' name='editPassword' id='editPassword' required><br>
        <input type='submit' value='Edit User'>
    </form>
  </div>
</div>

<script>
    function openEditModal_1(id, username, password) {
        document.getElementById('editID').value = id;
        document.getElementById('editUsername').value = username;
        document.getElementById('editPassword').value = password;
        document.getElementById('editModal_1').style.display = 'block';
    }

    function closeEditModal_1() {
        document.getElementById('editModal_1').style.display = 'none';
    }
</script>
