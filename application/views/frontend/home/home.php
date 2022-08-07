<?php $this->load->view('frontend/home/slider'); ?>



<section class="testimonial-section bg-dark padding">
    <div class="dots"></div>
    <div class="container">
        <div class="section-heading text-center mb-40">
            <span>Galleries</span>
            <h2>Grand Launching Multi Bizpark</h2>
        </div>
        <!--/.section-heading-->
        <div id="testimonial-carousel" class="testimonial-carousel owl-carousel">
            <div class="d-flex align-items-center">
                <img src="<?= base_url() ?>assets/images/galleries/1.jpeg" alt="img">
            </div>
            <div class="d-flex align-items-center">
                <img src="<?= base_url() ?>assets/images/galleries/2.jpeg" alt="img">
            </div>
            <div class="d-flex align-items-center">
                <img src="<?= base_url() ?>assets/images/galleries/3.jpeg" alt="img">
            </div>
            <div class="d-flex align-items-center">
                <img src="<?= base_url() ?>assets/images/galleries/4.jpeg" alt="img">
            </div>
            <div class="d-flex align-items-center">
                <img src="<?= base_url() ?>assets/images/galleries/5.jpeg" alt="img">
            </div>
            <div class="d-flex align-items-center">
                <img src="<?= base_url() ?>assets/images/galleries/6.jpeg" alt="img">
            </div>
            <div class="d-flex align-items-center">
                <img src="<?= base_url() ?>assets/images/galleries/7.jpeg" alt="img">
            </div>
            <div class="d-flex align-items-center">
                <img src="<?= base_url() ?>assets/images/galleries/8.jpeg" alt="img">
            </div>
            <div class="d-flex align-items-center">
                <img src="<?= base_url() ?>assets/images/galleries/9.jpeg" alt="img">
            </div>
            <div class="d-flex align-items-center">
                <img src="<?= base_url() ?>assets/images/galleries/10.jpeg" alt="img">
            </div>
            <div class="d-flex align-items-center">
                <img src="<?= base_url() ?>assets/images/galleries/11.jpeg" alt="img">
            </div>
            <div class="d-flex align-items-center">
                <img src="<?= base_url() ?>assets/images/galleries/12.jpeg" alt="img">
            </div>
            <div class="d-flex align-items-center">
                <img src="<?= base_url() ?>assets/images/galleries/13.jpeg" alt="img">
            </div>
            <div class="d-flex align-items-center">
                <img src="<?= base_url() ?>assets/images/galleries/14.jpeg" alt="img">
            </div>
            <div class="d-flex align-items-center">
                <img src="<?= base_url() ?>assets/images/galleries/15.jpeg" alt="img">
            </div>
            <div class="d-flex align-items-center">
                <img src="<?= base_url() ?>assets/images/galleries/16.jpeg" alt="img">
            </div>
            <div class="d-flex align-items-center">
                <img src="<?= base_url() ?>assets/images/galleries/17.jpeg" alt="img">
            </div>
            <div class="d-flex align-items-center">
                <img src="<?= base_url() ?>assets/images/galleries/18.jpeg" alt="img">
            </div>
            <div class="d-flex align-items-center">
                <img src="<?= base_url() ?>assets/images/galleries/19.jpeg" alt="img">
            </div>
            <div class="d-flex align-items-center">
                <img src="<?= base_url() ?>assets/images/galleries/20.jpeg" alt="img">
            </div>
            <div class="d-flex align-items-center">
                <img src="<?= base_url() ?>assets/images/galleries/21.jpeg" alt="img">
            </div>
        </div>
    </div>
</section>
<!--/.testimonial-section-->

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
                        <a href="<?= base_url('detail-property/' . $v->property_seo) ?>" class="category"><?= $v->city_name ?></a>
                        <h3><a href="<?= base_url('detail-property/' . $v->property_seo) ?>" class="tittle"><?= $v->property_name ?></a></h3>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!--/.projects-section-->