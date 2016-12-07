<section>

  <div class="ron">
{foreach from=$result item=oneItem}

<div class="ron1">
  <img src=images/{$oneItem.pictures} id="ronnie">

<h1 id="ronnietext">{$oneItem.playername}</h1>
<p id="ronniebio">{$oneItem.bio}</p>
<hr>


</div>
{/foreach}

</div>



</section>
