<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert CheckBox</title>
    <meta name="csrf-often" content="{{csrf_token()}}">

</head>
<style>
    #notifDiv{
        z-index: 10000;
        display: none;
        background: green;
        font-width: 450;
        width: 350px;
        position: fixed;
        top:80%;
        left: 5%;
        color: white;
        padding: 5px 20px;
    }

</style>
<body>
<div id="notifDiv"></div>
<header>
    <h1>Products Lists</h1>
</header>
<form>
    <table>
        <thead>
        <tr>
            <th></th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
        </tr>
        </thead>

        <tbody>
        <tr>
        <td>
            <input type="checkbox" name="prodid[]" class="prod-id" value="Mobile">
        </td>
            <td>
                Moblie:
                <input type="hidden" name="prodname[]" class="prod-name" value="Mobile">
            </td>
        <td>
            <input type="number" name="prod_price[]" class="prod-price">
        </td>
        <td>
            <input type="number" name="prod_qty[]" class="prod-qty">
        </td>
        </tr>
        <tr>
            <td>

                <input type="checkbox" name="prodid[]" class="prod-id" value="LCD">
            </td>
            <td>

                LED:
                <input type="hidden" name="prodname[]" class="prod-name" value="LCD">
            </td>
            <td>
                <input type="number" name="prod_price[]" class="prod-price">
            </td>
            <td>
                <input type="number" name="prod_qty[]" class="prod-qty">
            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" name="prodid[]" class="prod-id" value="Games">
            </td>
            <td>
                Laptops:
                <input type="hidden" name="prodname[]" class="prod-name" value="Games">
            </td>
            <td>
                <input type="number" name="prod_price[]" class="prod-price">
            </td>
            <td>
                <input type="number" name="prod_qty[]" class="prod-qty">
            </td>
        </tr>
        </tbody>
    </table>
<div>
    <br>
    <br>
    <br>
    <input type = "submit" value="submit" class="btn save_btn">
</div>
</form>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function (){
    $('.save_btn').on('click',function (e)

    {
       e.preventDefault();
       const prodid= [];
       const prodname=[];
        const prod_price=[];
        const prod_qty=[];

        $('.prod-id').each(function (){
            if($(this).is(":checked")){
                prodid.push($(this).val());
            }
        });

        $('input[name^="prodname"]').each(function (){
            prodname.push($(this).val());
        });
        $('input[name^="prod_price"]').each(function (){
            prod_price.push($(this).val());
        });
        $('input[name^="prod_qty"]').each(function (){
            prod_qty.push($(this).val());
        });

        $.ajax({
            url: '{{route('save_data')}}',
            type:'POST',
            data:{
                "_token": "{{csrf_token()}}",
                prodid:prodid,
                prodname:prodname,
                prod_price:prod_price,
                prod_qty:prod_qty
            },
success:function (response){
if (response.success){
$('input[type="checkbox"]').prop('checked',false);
$('[name="prod_price[]"]').val('');
    $('[name="prod_qty[]"]').val('');
} else {
    console.log('error');
}
},
   error:function (reponse){
                console.log('error');
   }
        });
    });
    });
</script>
</body>
</html>
