<!-- START THE FEATURETTES -->
<div class="row center-block text-center" id="servicesTop">
  <h1 class="titleText"><?php the_field('value_proposition'); ?></h1>
  <div class="divider"></div>
  <p class="serviceText"><?php the_field('call_to_action');?></p>

</div>
  <hr>
<div class="row services">
  <div class="work-item col-sm-6 closeServices">
    <h2 class="">For Business</h2>
    <p class="lead">Businesses of all sizes must continuously look to capture and maintain strategic advantage in an increasingly competitive marketplace. Augus partners closely with it clients to bridge the gap between strategy and implementation, offering a range of consulting solutions that help clients capture new growth opportunities, reduce costs, improve efficiencies and manage organizational change.</p>
    <a href="/business-consulting-services" class="btn btn-primary btn-lg" role="button">Learn More.</a>
  </div>
  <div class="work-item col-sm-6 closeServices hidden-xs">
    <div class="business"></div>
  </div>
  <hr class="hidden-sm">


<div class="work-item col-sm-6 closeServices hidden-xs">
  <div class="government"></div>
</div>

<div class="work-item col-sm-6 closeServices">
  <h2 class="featurette-heading">For Government</h2>
  <p class="lead">Government organizations today are facing increasing pressures to deliver improved services while having to comply with tighter spending controls and increased regulation. Augus provides a range of consulting services designed to help government leaders accelerate their strategic agendas through more efficient and effective program operations.</p>
  <a href="/government-consulting-services" class="btn btn-primary btn-lg" role="button">Learn More.</a>
</div>
  <hr class="hidden-sm">



<div class="work-item col-sm-6 closeServices">
  <h2 class="featurette-heading">For Nonprofits</h2>
  <p class="lead">Nonprofits are better able to deliver effective programs and services when they have a strong infrastructure in place, and are driven by a clear vision and mission. Augus consultants work closely with boards and staff, offering management consulting services that are designed to build capacity and help scale impact.</p>
  <a href="nonprofit-consulting-services" class="btn btn-primary btn-lg" role="button">Learn More.</a>
</div>
<div class="work-item col-sm-6 closeServices hidden-xs">
  <div class="nonprofit"></div>
</div>
</div>



<!-- /END THE FEATURETTES -->

<?php the_content(); ?>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
