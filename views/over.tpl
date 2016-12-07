<section>
{foreach from=$result item=oneItem}

<article>


<hr>
<img src=images/{$oneItem.overimage} id="overimages" width="30%">
<p id="overtitel"> <b>{$oneItem.overbio}</b></p>
<hr>

</article>


{/foreach}



</section>
