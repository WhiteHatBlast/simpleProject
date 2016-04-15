<select name="cmbitems" id="cmbitems">
  <option value="">Chooose</option>
    <option value="asdasdasdasdasd">blue</option>
    <option value="prasdasdasdsdsadice2">green</option>
    <option value="priasasdasdasdce3">red</option>
</select>
<br/>
<input type="button"  id="txtprice" >
<script>
var select = document.getElementById('cmbitems');
var a = document.getElementById('txtprice');
select.onchange = function() {
    a.value = select.value;
}

</script>