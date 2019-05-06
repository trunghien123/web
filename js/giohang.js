$(function(){
    $(".updatecart").click(function(e){
      e.preventDefault();
      $soluong = $(this).parents(".tr").find("#soluong").val();
      $key = $(this).attr("data_key");
      $.get("giohang/update.php",{key:$key,sl:$soluong},function(data){
          alert("Cập nhật thành công");
          window.location.reload();
     })
      
    })
  })