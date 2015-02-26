// Delete Member
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

// Delete Event
function delete_event(event_id){

    if(!event_id){
        alert('No event ID found');
        return false;
    }

    $.ajax({

        'url'       : 'delete_event',
        'action'    : 'POST',
        'data'      : {event_id:event_id},
        'success'   : function(result){
            $('#msg').html(result);
            location.reload();
        },
        'error'     : function(){
            console.log('Some error occurred');
        }

    });

}

// Delete Hostel
function delete_hostel(hostel_id){

    if(!hostel_id){
        alert('No Hostel ID found');
        return false;
    }

    $.ajax({

        'url'       : 'delete_hostel',
        'action'    : 'POST',
        'data'      : {id:hostel_id},
        'success'   : function(result){
            $('#msg').html(result);
            location.reload();
        },
        'error'     : function(){
            console.log('Some error occurred');
        }

    });

}
