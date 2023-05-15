$("#makeplaylist-btn").on('click',function() {
  var newplaylist = "";
  $("#makeplaylist").each(function() {
      var name = $(this).find("#newplaylistName").val();
      newplaylist = name;
  });
  if(newplaylist == "")
  {
      alert("Vui lòng đặt tên cho playlist của mình");
  }
  else{
      $(function(){
      $.ajax({
      url: 'api/createnewplaylist.php',
      data: {"playlistName": newplaylist},
      type: 'post',
      success: function()
      {
          $("#playlistModal").modal('toggle');     
          alert("Tạo thành công");
          location.reload();
      }
      })
      })
  }
  });