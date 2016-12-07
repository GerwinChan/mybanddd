<section>

  <div class="reus">
{foreach from=$result item=oneItem}

<div class="reus1">
  <img src=images/{$oneItem.borussiaimage} id="reussie">
<h1 id="reussietext">{$oneItem.borussianame}</h1>
<p id="reussiebio">{$oneItem.borussiabio}</p>

<hr>

</div>
{/foreach}

</div>



</section>
