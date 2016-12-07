<section>


{foreach from=$result item=oneItem}


<div class="as" id="df">

<h1 id="laliga">{$oneItem.highlightstitel}</h1>
<p id="ligadate">{$oneItem.highlightsdate}</p>
<HR>
  <div id="videoinstelling">
<video width="500" height="200" controls>
    <source src="{$oneItem.video}" type="video/mp4">
</video>

</div>
</div>

</div>
{/foreach}





</section>
