<?php if(!defined('PLX_ROOT')) exit; ?>
	<aside>
	  <ul>
		<?php $plxShow->catList('','<li id="#cat_id"><a class="#cat_status" href="#cat_url" title="#cat_name">#cat_name (#art_nb)</a></li>
		'); ?>
	  </ul>
	</aside>