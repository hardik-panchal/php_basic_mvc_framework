<script type="text/javascript">
    $(document).ready(function(){

             
    });
    
    function doDeleteContact(id){
        $("#myModal").modal("show");
        genericFun = function(){
            _a({
                data:{deleteContent:id},
                url:'<?php print _U ?>importcontacts',
                handler:function(r){
                    $("#myModal").modal("hide");
                    if(r.status){
                        _ns("Import Contact Deleted Successfully."); 
                        $("#contact_"+id).remove();
                    }else{
                        _nf("Error Occured");
                    }
                }
            });
        }
    }
    
</script>