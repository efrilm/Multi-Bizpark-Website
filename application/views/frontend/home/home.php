<?php $this->load->view('frontend/home/slider'); ?>


<?php $this->load->view('frontend/utilities/about'); ?>

<?php $this->load->view('frontend/utilities/services'); ?>

<section class="projects-section bg-dark padding">
    <div class="container-fluid">
        <div class="section-heading text-center mb-40">
            <span><?= plang('Properties') ?></span>
            <h2><?= plang('Our Properties') ?></h2>
        </div>
        <!--/.section-heading-->
        <div id="projects-carousel" class="projects-carousel owl-carousel">
            <?php foreach ($pp as $key => $v) { ?>
                <div class="project-item">
                    <img src="<?= base_url() ?>assets/images/property/<?= $v->property_thumbnail ?>" height="350" alt="<?= $v->property_thumbnail ?>">
                    <div class="overlay"></div>
                    <a href="<?= base_url() ?>assets/images/property/<?= $v->property_thumbnail ?>" class="view-icon img-popup" data-gall="myGallery"> <i class="fas fa-expand"></i></a>
                    <div class="projects-content">
                        <a href="projects.html" class="category"><?= $v->city_name ?></a>
                        <h3><a href="project-single.html" class="tittle"><?= $v->property_name ?></a></h3>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!--/.projects-section-->