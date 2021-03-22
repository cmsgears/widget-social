<ul class="nav">
    <?php if( array_key_exists( 'reddit', $widget->links ) ) { ?>
       <li>
		   <a title="Share on Reddit" class="share-reddit <?= $widget->iconSet ?>reddit color color-reddit" href="https://reddit.com/submit?url=<?= $widget->url ?>" target="_blank"></a>
	   </li>
    <?php } ?>
	<?php if( array_key_exists( 'facebook', $widget->links ) ) { ?>
       <li>
		   <a title="Share on Facebook" class="share-facebook <?= $widget->iconSet ?>facebook color color-facebook" href="http://www.facebook.com/sharer.php?u=<?= $widget->url ?>" target="_blank"></a>
	   </li>
    <?php } ?>
    <?php if( array_key_exists( 'pinterest', $widget->links ) ) { ?>
       <li>
		   <a title="Share on Pinterest" class="share-pinterest <?= $widget->iconSet ?>pinterest color color-pinterest" href="http://pinterest.com/pin/create/link/?url=<?= $widget->url ?>" target="_blank"></a>
	   </li>
    <?php } ?>

    <?php if( array_key_exists( 'twitter', $widget->links ) ) { ?>
       <li>
		<a title="Share on Twitter" class="share-twitter <?= $widget->iconSet ?>twitter color color-twitter" href="https://twitter.com/share?url=<?= $widget->url ?>" target="_blank"></a>
	   </li>
    <?php } ?>

    <?php if( array_key_exists( 'linkedin', $widget->links ) ) { ?>
       <li>
		   <a title="Share on LinkedIn" class="share-linkedin <?= $widget->iconSet ?>linkedin color color-linkedin" href="http://www.linkedin.com/shareArticle?url=<?= $widget->url ?>" target="_blank"></a>
	   </li>
    <?php } ?>
    <?php if( array_key_exists( 'tumblr', $widget->links ) ) { ?>
       <li>
		   <a title="Share on Tumblr" class="share-tumblr <?= $widget->iconSet ?>tumblr color color-tumblr" href="https://www.tumblr.com/widgets/share/tool?canonicalUrl=<?= $widget->url ?>" target="_blank"></a>
	   </li>
    <?php } ?>
    <?php if( array_key_exists( 'mix', $widget->links ) ) { ?>
       <li>
		   <a title="Share on Mix" class="share-mix <?= $widget->iconSet ?>mix color color-mix" href="http://mix.com/submit?url=<?= $widget->url ?>" target="_blank"></a>
	   </li>
    <?php } ?>
</ul>
