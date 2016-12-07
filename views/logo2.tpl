<section>

  <div class="mannie">
{foreach from=$result item=oneItem}

<div class="mancity">
  <img src=images/{$oneItem.manimage} id="mannie1">
<h1 id="mannie2">{$oneItem.manname}</h1>
<p id="mannie3">{$oneItem.manbio}</p>

<hr>

</div>
{/foreach}

</div>



</section>
