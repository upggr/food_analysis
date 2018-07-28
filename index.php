<input id="userphoto" type="file" accept="image/*;capture=camera">

<script>

var myInput = document.getElementById('userphoto');

function sendPic() {
    var file = myInput.files[0];
console.log(file);


    // Send file here either by adding it to a `FormData` object
    // and sending that via XHR, or by simply passing the file into
    // the `send` method of an XHR instance.
}

myInput.addEventListener('change', sendPic, false);
</script>
