<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        #content .widget h3 {
            text-transform: uppercase;
            font-size: 14px;
            background: #2196f3;
            color: #fff;
            text-align: center;
            font-weight: 400;
            padding: 10px 15px;
            margin-bottom: 0;
            position: relative;
        }
        #content .widget .content-w {
            border: 1px solid #ededed;
            padding: 10px;
        }
        ul, li {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        #content .widget .content-w ul li {
            padding-bottom: 10px;
            margin-bottom: 10px;
        }
        #content .widget .content-w ul li img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border: 1px solid #ededed;
            padding: 1px;
            float: left;
            margin-right: 10px;
        }
        #content .widget .content-w ul li h4 {
            line-height: 18px;
            margin-bottom: 0px;
        }
    </style>
<body>
   
<div class="widget">
    <h3>
        <i class="fa fa-bars"></i>
        Tin tức
    </h3>
    <div class="content-w">
        <ul>
            <?php $args = array( 
                'post_type' => 'post',
                'posts_per_page' => 8,
                'post_status' => 'publish',
                'cat' => 14); 
            ?>
            <?php $getposts = new WP_query( $args);?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');?>
            <?php global $product; ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><img src="<?php echo $featured_img_url; ?>" alt="<?php the_title(); ?>"></a>
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <div class="clear"></div>
                </li>
            <?php endwhile;  wp_reset_postdata(); ?>
        </ul>
    </div>
</div>
</body>
</html>