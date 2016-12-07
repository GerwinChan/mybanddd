<section>

  <div class="paris">
{foreach from=$result item=oneItem}

<div class="mancity">
  <img src=images/{$oneItem.parisimage} id="paris1">
<h1 id="paris2">{$oneItem.parisname}</h1>
<p id="paris3">{$oneItem.parisbio}</p>

<hr>

</div>
{/foreach}

</div>



</section>
