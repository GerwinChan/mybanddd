<section>
{foreach from=$result item=oneItem}

<article>
  <div class="test">
<h1 id="pepetitel">{$oneItem.title}</h1>
<hr>
<img src=images/{$oneItem.image} id="test4">
<hr>
<p id="test2">{$oneItem.content}</p>
<h2 id="test3">{$oneItem.date_created}</h2>
</div>
</article>


{/foreach}



</section>


<ul class="pagenr">
  <li><a href="?action=home&pagenr=1">1</a></li>
  <li><a href="?action=home&pagenr=2">2</a></li>
    <li><a href="?action=home&pagenr=3">3</a></li>
      <li><a href="?action=home&pagenr=4">4</a></li>

</ul>
