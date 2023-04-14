$(document).ready(function(){
    // task 7 uppercase btn click
    $(document).on('click','#uppercase',function(){
        let text=$("#changecase").val();
        if(text=="")
        {
            alert("enter value to see result");
            return;
        }
        $.ajax({
            url:'action.php',
            type:'post',
            data:{text:text,action:"upper"},
            success: function(res){
                $("#reschange").val(res);
            }
        });
    });
    // task 7 lowercase btn click
    $(document).on('click','#lowercase',function(){
        let text=$("#changecase").val();
        if(text=="")
        {
            alert("enter value to see result");
            return;
        }
        $.ajax({
            url:'action.php',
            type:'post',
            data:{text:text,action:"lower"},
            success: function(res){
                $("#reschange").val(res);
            }
        });
    });
    // task 8 btn click
    $(document).on('click','#task8btn',function(){
        let text=$("#task8input").val();
        if(text=="")
        {
            alert("enter value to see result");
            return;
        }
        $.ajax({
            url:'action.php',
            type:'post',
            data:{text:text,action:"filter"},
            success: function(res){
                $("#task8res").text(res);
            }
        });
    });
    // task 9 reversible click
    $(document).on('click','.reverse',function(){
      let from=$("#from").val();
      let to=$("#to").val();
      $("#to").val(from);
      $("#from").val(to);
      let amt=$("#task9input").val();
        let from1=$("#from").val();
        let to1=$("#to").val();
        if(amt=="" || amt==0)
        {
            alert("enter value to see result");
            return;
        }
        $.ajax({
            url:'action.php',
            type:'post',
            data:{from:from1,to:to1,action:"currency_convert",amount:amt},
            success: function(res){
                $("#task9res").val(res);
            }
        });

    });
    // task 9 button click
    $(document).on('click','#to',function(){
        let amt=$("#task9input").val();
        let from=$("#from").val();
        let to=$("#to").val();
        if(amt=="" || amt==0)
        {
            alert("enter value to see result");
            return;
        }
        $.ajax({
            url:'action.php',
            type:'post',
            data:{from:from,to:to,action:"currency_convert",amount:amt},
            success: function(res){
                $("#task9res").val(res);
            }
        });
        
    });
    // task 10 on selecting category
    $(document).on('click','#category',function(){
        let category=$("#category").val();
        if(category=="")
        {
            alert("please select !!");
            return;
        }
        $.ajax({
            url:'action.php',
            type:'post',
            data:{category:category,action:"select_category"},
            success: function(res){
                $("#items").html(res);
               
            }
        });

    })
//    task 10 on selecting items
$(document).on('click','#items',function(){
    let category=$("#category").val();
    let item=$("#items").val();
    console.log(item);
    if(item=="")
    {
        alert("please select !!");
        return;
    }
    $.ajax({
        url:'action.php',
        type:'post',
        data:{item:item,action:"select_item",category:category},
        success: function(res){
            $("#ids").html(res);
           
        }
    });

});
//    task 10 on selecting product id
$(document).on('click','#ids',function(){
    let category=$("#category").val();
    let item=$("#items").val();
    let id=$("#ids").val()
    console.log(id);
    if(id=="")
    {
        alert("please select !!");
        return;
    }
    $.ajax({
        url:'action.php',
        type:'post',
        data:{item:item,action:"select_id",category:category,id:id},
        success: function(res){
            $("#desc").html(res);
        }
    });

});
})