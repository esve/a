function changeProfilePicture() {

    var selectedImg = $('#profilePicture')[0].files[0];

    if (selectedImg) {
        var previewId = document.getElementById('profileImage');
        previewId.src = '';

        var oReader = new FileReader();
        oReader.onload = function (e) {
            previewId.src = e.target.result;
        }
        oReader.readAsDataURL(selectedImg);

        $('#uploadButton').removeClass('disabled');

    }
}