$(document).ready(function(){
	$("#loaisp").change(function(){
		var loaisanpham= $("#loaisp").val();
		 $.post("data.php",{id: loaisanpham},function(data){
		 	$("#dulieu").html(data);
		 })
	})
})