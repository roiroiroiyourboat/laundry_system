const hamburger = document.querySelector("#toggle-btn");

hamburger.addEventListener("click", function(){
    document.querySelector("#sidebar").classList.toggle("expand");
})

$(document).ready(function(){
    function showEditUserForm () {
        $('#user_container').hide();
        $('#edit_user').show();
    }

    function showUserContainer () {
        $('#edit_user').hide(); 
        $('#user_container').show();
    }

    $('#btn_edit').click(function(){
        showEditUserForm();
    });

    $('#btnBack').click(function(){
        showUserContainer();
    });

    // Fetch user data when the page loads
    $.ajax({
      type: 'GET',
      url: '/laundry_system/main/my_profile/configs_profile/get_user_data.php',
      dataType: 'json',
      success: function(data) {
          // Display user data
          $('#edit_fname').val(data.first_name);
          $('#edit_lname').val(data.last_name);
          $('#edit_username').val(data.username);
          $('#profile-picture-preview').attr('src', data.profile_picture);
      }
  });

  //Show Password
  $('.toggle-password').click(function() {
        var target = $(this).data('target');
        var input = $(target);
        if (input.attr('type') === 'password') {
            input.attr('type', 'text');
            $(this).removeClass('bx-show').addClass('bx-hide');
        } else {
            input.attr('type', 'password');
            $(this).removeClass('bx-hide').addClass('bx-show');
        }
    });

});

let preview_profile_pic = document.getElementById("preview_profile_pic");
let updateProfilePicture = document.getElementById("updateProfilePicture");

updateProfilePicture.onchange = function(){
    preview_profile_pic.src = URL.createObjectURL(updateProfilePicture.files[0]);
}
