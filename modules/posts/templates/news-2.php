<?php

/*

type: layout

name: News 3

description: News 3

*/
?>


<div class="row">
    <div class="col-xl-12 mx-auto">
        <div class="row privacy-label-news-2">
            <?php if (!empty($data)): ?>
                <?php foreach ($data as $key => $item): ?>
                    <?php $itemData = content_data($item['id']); ?>
                    <?php if ($key == 0): ?>
                        <div class="col-xl-7 post-big m-b-30" itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
                            <div class="post-holder">
                                <div class="thumbnail justify-content-bottom align-items-end d-flex flex-cloumns" style="background-image: url('<?php print thumbnail($item['image'], 790, 390, true); ?>');">
                                    <div>
                                        <small><?php echo date('d M Y', strtotime($item['posted_at'])); ?></small>

                                        <?php if (!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
                                            <a href="<?php print $item['link'] ?>">
                                                <h3><?php print $item['title'] ?></h3>
                                            </a>
                                        <?php endif; ?>

                                        <a href="<?php print $item['link'] ?>" class="btn btn-primary m-t-10">Read now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>

                <div class="col-xl-5 d-none d-xl-block">
                    <?php foreach ($data as $key => $item): ?>
                        <?php $itemData = content_data($item['id']); ?>
                        <?php if ($key == 1 OR $key == 2): ?>
                            <div class="row m-b-30">
                                <div class="offset-xl-1 col-xl-5">
                                    <div class="post-holder">
                                        <a href="<?php print $item['link'] ?>">
                                            <img src="<?php print thumbnail($item['image'], 226, 165, true); ?>" alt=""/>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="post-holder">
                                        <small><?php echo date('d M Y', strtotime($item['posted_at'])); ?></small>
                                        <?php if (!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
                                            <a href="<?php print $item['link'] ?>">
                                                <h4><?php print $item['title'] ?></h4>
                                            </a>
                                        <?php endif; ?>
                                        <a href="<?php print $item['link'] ?>" itemprop="url" class="button-8 button-red m-t-10"><span>Read more</span></a>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>

                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

