<!-- The Delete Confirmation Modal -->
<div id="deleteModal_1" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close" onclick="closeDeleteModal_1()">&times;</span>
    <h2>Delete User</h2>
    <form id="deleteForm" method="post" action="Scripts/Users/DeleteUser.php">
        <input type="hidden" name="deleteID" id="deleteID">
        <p>Are you sure you want to delete this user?</p>
        <input type="submit" value="Yes">
        <button type="button" onclick="closeDeleteModal_1()">No</button>
    </form>
  </div>
</div>

<script>
    // Open the delete confirmation modal
    function openDeleteModal_1(id) {
        document.getElementById('deleteID').value = id;
        document.getElementById('deleteModal_1').style.display = 'block';
    }

    // Close the delete confirmation modal
    function closeDeleteModal_1() {
        document.getElementById('deleteModal_1').style.display = 'none';
    }
</script>
