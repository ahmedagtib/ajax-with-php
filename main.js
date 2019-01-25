$(document).ready(function() {
  vider();
	getcontact();
	$('#btnadd').on('click',function(){
       var nameup=$('#name').val();
        var prenomup=$('#prenom').val();
         var emailup=$('#email').val();
          var telup=$('#tel').val();
        if(nameup=="" || prenomup=="" || emailup=="" || telup=="" )
        {
        	$('.msg').html("<div class='alert alert-danger'>all input requierd</div>");
        }else{
        	$('.msg').html();
        	$.ajax({
              
               url:"http://localhost/ajax/add.php",
               type:"POST",
               data:{
               	name:nameup,
               	prenom:prenomup,
               	email:emailup,
               	tel:telup
               },
               success:function(response){
               	$('.msg').html(response);
                vider();
               },
               error:function(erorr){
               	$('.msg').html("<div class='alert alert-success'>"+erorr+"</div>");
               }

        	});
        }
	});
});
	//get contact
	function getcontact(){
		$.ajax({
			 url:"http://localhost/ajax/getcontact.php",
               type:"get",
               success:function(response){
               	$('#result').html(`
                       <table class="table mt-4">
		                <tr>
			               <td>first name</td>
			               <td>last name</td>
			               <td>email</td>
			               <td>phone</td>
			               <td>action</td>
		                </tr>
		                <tbody>
		                   ${response}
		                </tbody>
	                   </table>
               		`);

               }
		});
	}
  //update
  $('#btnupdate').on('click',function(){
      var id=$('#id').val();
      var nameup=$('#name').val();
      var prenomup=$('#prenom').val();
      var emailup=$('#email').val();
      var telup=$('#tel').val();
       if(nameup=="" || prenomup=="" || emailup=="" || telup=="" )
        {
          $('.msg').html("<div class='alert alert-danger'>all input requierd</div>");
        }else{
              $.ajax({
                url:"http://localhost/ajax/update.php",
               type:"POST",
               data:{
                     id:id,
                     name:nameup,
                     prenom:prenomup,
                     email:emailup,
                     tel:telup
                   },
                    success:function(response){
                             $('.msg').html(response);
                             vider();
                             getcontact();
                            },
                            error:function(erorr){
                             $('.msg').html("<div class='alert alert-success'>"+erorr+"</div>");
                            }


                }); 
            }


});

 function getuser(id){
     $.ajax({
       url:"http://localhost/ajax/contact.php",
       type:"POST",
       data:{id:id},
       success:function(response){
        
       
        var user = JSON.parse(response);
            
        $('#email').val(user[0].email);
        $('#id').val(user[0].id);
        $('#name').val(user[0].name);
        $('#prenom').val(user[0].prenom);
        $('#tel').val(user[0].tel);
        $('#btnadd').css('display','none');
        $('#btnupdate').css('display','block');
       }
     });
    }
          //delete
 function deletuser(id){
     $.ajax({
       url:"http://localhost/ajax/delete.php",
       type:"POST",
       data:{id:id},
       success:function(response){
          $('.msg').html(response);
          vider();
            getcontact();
          }

      });
   }

  function vider(){
  $('#name').val("");
  $('#prenom').val("");
  $('#email').val("");
  $('#tel').val("");
  } 