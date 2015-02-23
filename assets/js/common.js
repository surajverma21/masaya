function delete_member(member_id){

    if(!member_id){
        alert('No member ID found');
        return false;
    }

    $.ajax({

        'url'       : 'delete',
        'action'    : 'POST',
        'data'      : {member_id:member_id},
        'success'   : function(result){
          $('#msg').html(result);
            location.reload();
            },
        'error'     : function(){
            console.log('Some error occurred');
        }

    });

}
