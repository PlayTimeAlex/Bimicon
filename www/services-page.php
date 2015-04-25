<?php
/*
Template Name: Страница клиентам
*/
get_header();
while (have_posts()) : the_post(); 
?>
<section class="clearfix b-content">
    <div class="container">
        <h1 class="b-content__title"><?php the_title(); ?></h1>
    </div>    
    <div class="container b-text">
        <div class="row-fluid">
            <div class="b-wServices__slider clearfix">
				<?php 
					$ploshhadki = get_field('ploshhadki');
					$scenarii = get_field('scenarii');
					$dekor_dizajn = get_field('dekor_dizajn');
					$floristika = get_field('floristika');
					$stilist = get_field('stilist');
					$vedushhij = get_field('vedushhij');
					$shou_programma = get_field('shou_programma');
					$foto_i_video = get_field('foto_i_video');
					$konditer_tort = get_field('konditer_tort');
					$specjeffekty = get_field('specjeffekty');
					$poligrafija = get_field('poligrafija');
					$kortezh_avto = get_field('kortezh_avto');
					$koordinator = get_field('koordinator');
					$horeograf = get_field('horeograf');
					$juvelir_graver = get_field('juvelir_graver');
					$turl = get_bloginfo('template_directory');
				?>
                <ul class="slides">
                    <li class="b-wServices__sliderItem">
						<?php 
						echo $ploshhadki != "" ? "<a style='top:-1.6em;left:0.2em;' href='$ploshhadki' class='b-wServices__link'><img src='$turl/images/content/octo1.png' alt='' class='b-wServices__image' /></a>" : "";
						echo $scenarii != "" ? "<a style='top:1.4em;left:24.9em;' href='$scenarii' class='b-wServices__link'><img src='$turl/images/content/octo16.png' alt='' class='b-wServices__image' /></a>" : "";
						echo $dekor_dizajn != "" ? "<a style='top:-5em;left:55.2em;' href='$dekor_dizajn' class='b-wServices__link'><img src='$turl/images/content/octo3.png' alt='' class='b-wServices__image' /></a>" : "";
						echo $floristika != "" ? "<a style='top:22.4em;left:9.3em;' href='$floristika' class='b-wServices__link'><img src='$turl/images/content/octo18.png' alt='' class='b-wServices__image' /></a>" : "";
						echo $stilist != "" ? "<a style='top:23.2em;left:44.8em;' href='$stilist' class='b-wServices__link'><img src='$turl/images/content/octo17.png' alt='' class='b-wServices__image' /></a>" : ""; 
						?>
                    </li>
                    <li class='b-wServices__sliderItem'>
						<?php 
						echo $vedushhij != "" ? "<a style='top:-1.6em;left:0.2em;' href='$vedushhij' class='b-wServices__link'><img src='$turl/images/content/octo6.png' alt='' class='b-wServices__image' /></a>" : ""; 
						echo $shou_programma != "" ? "<a style='top:-3.4em;left:30.5em;' href='$shou_programma' class='b-wServices__link'><img src='$turl/images/content/octo19.png' alt='' class='b-wServices__image' /></a>" : "";
						echo $foto_i_video != "" ? "<a style='top:-3.6em;left:61.1em;' href='$foto_i_video' class='b-wServices__link'><img src='$turl/images/content/octo22.png' alt='' class='b-wServices__image' /></a>" : "";
						echo $konditer_tort != "" ? "<a style='top:21em;left:10.6em;' href='$konditer_tort' class='b-wServices__link'><img src='$turl/images/content/octo20.png' alt='' class='b-wServices__image' /></a>" : "";
						echo $specjeffekty != "" ? "<a style='top:26.5em;left:38.8em;' href='$specjeffekty' class='b-wServices__link'><img src='$turl/images/content/octo21.png' alt='' class='b-wServices__image' /></a>" : "";
						echo $poligrafija != "" ? "<a style='top:24.1em;left:68em;' href='$poligrafija' class='b-wServices__link'><img src='$turl/images/content/octo11.png' alt='' class='b-wServices__image' /></a>" : "";
						?>
                    </li>
                    <li class='b-wServices__sliderItem'>
						<?php
						echo $kortezh_avto != "" ? "<a style='top:3.3em;left:6.9em;' href='$kortezh_avto' class='b-wServices__link'><img src='$turl/images/content/octo23.png' alt='' class='b-wServices__image' /></a>" : ""; 
						echo $koordinator != "" ? "<a style='top:-3.7em;left:35.3em;' href='$koordinator' class='b-wServices__link'><img src='$turl/images/content/octo24.png' alt='' class='b-wServices__image' /></a>" : ""; 
						echo $horeograf != "" ? "<a style='top:-3.8em;left:60.1em;' href='$horeograf' class='b-wServices__link'><img src='$turl/images/content/octo25.png' alt='' class='b-wServices__image' /></a>" : ""; 
						echo $juvelir_graver != "" ? "<a style='top:22em;left:30.6em;' href='$juvelir_graver' class='b-wServices__link'><img src='$turl/images/content/octo26.png' alt='' class='b-wServices__image' /></a>" : ""; 
						?>   
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php 
	endwhile;
	get_footer(); 
?>