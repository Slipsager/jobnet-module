<?php
/**
 * @file
 * Displays jobitems.
 *
 * Available variables:
 
* Id (String) E5506339
* Headline (String) Driftschef
* Body (String) OK Cookie information Dette <span class="med">w...
* WeeklyWorkTime (String) Fuldtid
* ApplicationDeadline (String) 08-05-2015
* PostingCreated (String) 25-04-2015
* PostalCode (String) 2630
* PostalDistrict (String) Taastrup
* InternalJpp (Boolean) FALSE
* DetailsUrl (String) http://www.htf.dk/nyheder/hoeje-taastrup-fjernv...
* Location (Array, 2 elements)
* WorkLocation (String) 2630 Taastrup
* HiringOrgName (String) Høje Taastrup Fjernvarme A.M.B.A.
* DiscoAmsCode (String) 3139001
* DiscoAmsName (String) formand, drift og produktion
* WorkplaceId (Integer) 0
* OrganisationId (Integer) 0
* AnonymousEmployer (Boolean) FALSE
* jobimage (imagetag)
 */
?>
<div class="col-sm-12 col-md-12">
    <div class="thumbnail">
      <?php if(isset($jobimage)){
	 print $jobimage;
	 } ?>
      <div class="caption">
        <h4><?php print $Headline ?></h4>
        <p><?php print $Body ?></p>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Indrykket på Jobnet den: <?php print $PostingCreated ?></small></p>
        <p><small class="text-muted"><i class="glyphicon glyphicon-map-marker"></i> Arbejdssted: <?php print $WorkLocation ?></small></p>
        <p><a href="<?php print $DetailsUrl; ?>" class="btn btn-primary" target="_blank" role="button">Se jobbet</a> </p>
      </div>
    </div>
  </div>
