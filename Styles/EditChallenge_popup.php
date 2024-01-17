<!-- The Edit Modal -->
<div id="editModal_2" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close" onclick="closeEditModal_2()">&times;</span>
    <h2>Edit Challenge</h2>
    <form id="editForm" method='post' action='Scripts/Challenges/EditChallenge.php'>
        <input type='hidden' name='editID_2' id='editID_2'>
        Name: <input type='text' name='editName' id='editName' required><br>
        Description: <input type='text' name='editDescription' id='editDescription' required><br>
        Difficulty: <input type='text' name='editDifficulty' id='editDifficulty' required><br>
        Link: <input type='text' name='editLink' id='editLink' required><br>
        <input type='submit' value='Edit Challenge'>
    </form>
  </div>
</div>

<script>
    function openEditModal_2(id, name, description, difficulty, link) {
        document.getElementById('editID_2').value = id;
        document.getElementById('editName').value = name;
        document.getElementById('editDescription').value = description;
        document.getElementById('editDifficulty').value = difficulty;
        document.getElementById('editLink').value = link;
        document.getElementById('editModal_2').style.display = 'block';
    }

    function closeEditModal_2() {
        document.getElementById('editModal_2').style.display = 'none';
    }
</script>
