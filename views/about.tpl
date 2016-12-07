<section>

<img src="images/UEFA_Champions_League_logo_2.svg.png" id="champ" alt="error44">
<div class="Speelschema">


{foreach from=$result item=oneItem}
<div class="opmaak">

    <p id="titel">{$oneItem.nummer}</p>

<p id="over">{$oneItem.Land}</p>
<hr id="hr1">
<p id="over">{$oneItem.Clubs}</p>
<hr id="hr1">

<p id="over">{$oneItem.Wedstrijden}</p>
<hr id="hr1">
<p id="over">{$oneItem.date}</p>
<hr id="hr1">
</div>



{/foreach}


</div>



</section>
