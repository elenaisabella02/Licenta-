
<link rel="stylesheet" href="https://devmind.io/assets/modules/dashboard/css/fonts.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>

<style>
    body{
  margin: 0;
  padding: 0;
}
.credit-chip{
  width: 42px;
  border-radius: 5px;
  background-color: #fff;
  height: 42px;
}
.credit-card{
  width: 373px;
  padding-top: 47px;
  padding-left: 33px;
  box-sizing: border-box;
  position: relative;
  height: 217px;
  background: rgba(254,187,12,1);
  background: -moz-linear-gradient(45deg, rgba(254,187,12,1) 0%, rgba(255,39,80,1) 51%, rgba(255,4,159,1) 100%);
  background: -webkit-gradient(left bottom, right top, color-stop(0%, rgba(254,187,12,1)), color-stop(51%, rgba(255,39,80,1)), color-stop(100%, rgba(255,4,159,1)));
  background: -webkit-linear-gradient(45deg, rgba(254,187,12,1) 0%, rgba(255,39,80,1) 51%, rgba(255,4,159,1) 100%);
  background: -o-linear-gradient(45deg, rgba(254,187,12,1) 0%, rgba(255,39,80,1) 51%, rgba(255,4,159,1) 100%);
  background: -ms-linear-gradient(45deg, rgba(254,187,12,1) 0%, rgba(255,39,80,1) 51%, rgba(255,4,159,1) 100%);
  background: linear-gradient(45deg, rgba(254,187,12,1) 0%, rgba(255,39,80,1) 51%, rgba(255,4,159,1) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#febb0c', endColorstr='#ff049f', GradientType=1 );  
  border-radius: 10px;
  margin: 0 auto;
  box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.4);
  position: relative;
}
.cardlogo{
  background-image: url(http://www.contisgroup.com/wp-content/uploads/2015/02/vbm_wht01.png);
  position: absolute;
  top: 35px;
  left: 262px;
  height: 25px;
  width: 75px;
  background-size: contain;
  background-repeat: no-repeat;
}
.eae{
  color: rgba(255, 255, 255, 0.87);
  margin-top: 10px;
  font-size: 30px;
  margin-bottom: 15px;
}
.cardtitle{
  font-size: 12px;
  color: #ffffff;
}
.card-holder{
  margin-top: 0;
  text-transform: uppercase;
  color: #ffffff;
  font-size: 16px;
}
.card-expire{
  margin-top: 0;
  color: #ffffff;
  font-size: 16px;
}
.left{
  float: left;
  width: 240px;
}
.right{
  float: left;
  margin-left: 15px;
}
.modal{
  background-color: #fff;
  margin: 0 auto;
  box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.16);
  width: 410px;
}
.modal-header{
  height: 250px;
  box-sizing: border-box;
  padding-top: 15px;
  background-color: #ededed;
}
.nameholder{
  width: 100%;
  border-bottom: 1px solid #efefef;
}
.cardNme{
  text-align: center;
  color: #818181;
  margin-bottom: 2px;
} 
.input-date, .input-cvc{
  height: 22px;
  width: 60%;
  margin: 0 auto 15px;
  display: block;
  border: none;
  color: #777;
  text-align: center;
  font-size: 13px;
  border-bottom: 2px solid #ededed;
}
.input-name, .inpute, .input-mail{
  height: 25px;
  font-size: 13px;
  text-align: center;
  width: 80%;
  margin: 0 auto 15px;
  display: block;
  border: none;
  color: #777;
  border-bottom: 2px solid #ededed;
}
.half{
  width: 50%;
  float: left;
}
.btn{
  width: 80%;
  display: block;
  -webkit-appearance: none;
  margin: 16px auto;
  padding: 13px 0px;
  color: #ffffff;
  background-color: #62badb;
  border: none;
  border-radius: 5px;
  font-size: 20px;
}
.btn{}
.overlay{
  position: fixed;
  width: 100%;
  padding-bottom: 40px;
  background-color: rgba(0, 0, 0, 0.5);
}
</style>
<div class="overlay">
  <div class="modal">
    <div class="modal-header">
  <div class="credit-card">
    <div class="cardlogo"></div>
    <div class="credit-chip"></div>
    <p class="eae font2">xxxx xxxx xxxx xxxx</p>
    <div class="footer">
      <div class="left">
        <div class="cardtitle font2 fw500">CARD HOLDER</div>
        <p class="card-holder font2 fw400">BRAGA ELENA-ISABELLA</p>
      </div>
      <div class="right">
        <div class="cardtitle font2 fw500">EXPIRES</div>
        <p class="card-expire font2 fw400">12/06</p>
      </div>
    </div>
   </div>    
    </div>
    <div class="payment-body">
    <div class="nameholder">
      <p class="cardNme font2 fw500">Card's Holder Name</p>
      <input type="text" placeholder="Ex: Braga Elena-Isabella" class="input-name">
    </div>
    <div class="nameholder">
        <p class="cardNme font2 fw500">Card Number</p>
        <input type="text" placeholder="Ex: XXXXXXXXXXXXXXXX" class="inpute" maxlength="16">
    </div>
    <div class="nameholder">
      <div class="half">
        <p class="cardNme font2 fw500">CVC</p>
        <input type="text" placeholder="Ex: XXX or XX" class="input-cvc" maxlength="3">     
      </div>
      <div class="half">
        <p class="cardNme font2 fw500">Exp. Date</p>
        <input type="text" placeholder="Ex: XX/XX" class="input-date"> 
      </div>    
      <div style="clear: both;"></div>
    </div>
  <div class="nameholder">
        <p class="cardNme font2 fw500">Suma</p>
        <p class="input-mail">©30(©1 = 1 leu)</p>

    </div>
    <div class="nameholder">
      <a href="settings.php"><input class="btn font2 fw500" type="button" value="Plateste"></a>
    </div>
    </div>
  </div>
</div>
<script>
    $(function(){
  
  $('.input-date').mask('99/99');
  $('.input-date').on('keyup', function(){
    var inDate = $('.input-date').val();
    $('.card-expire').html(inDate)
  })
  $('.input-name').on('keyup', function(){
    var inName = $('.input-name').val();
    $('.card-holder').html(inName)
  })
})
$('.inpute').on('keyup', function(){
  var eae = $('.inpute').val();
  var arraycarai = [];
  
  for (var i = 0, charsLength = eae.length; i < charsLength; i += 4) {
    arraycarai.push(eae.substring(i, i + 4));
  }
  
  var stringfy = arraycarai + "",
  finalresult = stringfy.replace(/,/g, "  ");

  console.log(finalresult)
  
  $('.eae').html(finalresult);
})
</script>