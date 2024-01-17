<!-- The Delete Confirmation Modal -->
<div id="deleteModal_2" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close" onclick="closeDeleteModal_2()">&times;</span>
    <h2>Delete Challenge</h2>
    <form id="deleteForm" method="post" action="Scripts/Challenges/DeleteChallenge.php">
        <input type="hidden" name="deleteID_2" id="deleteID_2">
        <p>Are you sure you want to delete this challenge?</p>
        <input type="submit" value="Yes">
        <button type="button" onclick="closeDeleteModal_2()">No</button>
    </form>
  </div>
</div>

<script>
    // Open the delete confirmation modal
    function openDeleteModal_2(id) {
        document.getElementById('deleteID_2').value = id;
        document.getElementById('deleteModal_2').style.display = 'block';
    }

    // Close the delete confirmation modal
    function closeDeleteModal_2() {
        document.getElementById('deleteModal_2').style.display = 'none';
    }
</script>
