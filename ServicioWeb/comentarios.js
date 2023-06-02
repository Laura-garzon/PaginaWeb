var deleteIcons = document.querySelectorAll('.delete-icon');
deleteIcons.forEach(function(deleteIcon) {
  deleteIcon.addEventListener('click', function() {
    var documentBox = deleteIcon.parentNode;
    var commentInput = documentBox.querySelector('.comment-input');
    var commentButton = documentBox.querySelector('.comment-button');
    commentInput.style.display = 'inline-block';
    commentButton.style.display = 'inline-block';
  });
});

var downloadIcons = document.querySelectorAll('.download-icon');
downloadIcons.forEach(function(downloadIcon) {
  var downloadLink = downloadIcon.previousElementSibling;
  downloadIcon.addEventListener('click', function() {
    var downloadUrl = downloadLink.getAttribute('href');
    window.location.href = downloadUrl;
  });
});

var commentButtons = document.querySelectorAll('.comment-button');
commentButtons.forEach(function(button) {
  button.addEventListener('click', function() {
    var documentBox = button.parentNode;
    var commentInput = documentBox.querySelector('.comment-input');
    var comment = commentInput.value.trim(); // Elimina los espacios en blanco al inicio y al final del comentario
    if (comment !== '') {
      // Aquí puedes agregar la lógica para guardar el comentario en tu sistema o hacer lo que necesites
      commentInput.value = '';
      commentInput.style.display = 'none';
      button.style.display = 'none';
    }
  });
});