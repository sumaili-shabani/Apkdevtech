<?php 

$nom_site;
$icone;
$tel1;
$tel2;
$adresse;
$facebook;
$twitter;
$linkedin;
$email_info;
$termes;
$confidentialite;



$this->db->limit(1);
$query = $this->db->get("tbl_info");
if ($query->num_rows() > 0) {
    foreach ($query->result_array() as $key) {
        $nom_site = $key['nom_site'];
        $icone = $key['icone'];
        $tel1 = $key['tel1'];
        $tel2 = $key['tel2'];
        $adresse = $key['adresse'];
        $facebook = $key['facebook'];
        $twitter = $key['twitter'];
        $linkedin = $key['linkedin'];
        $email_info = $key['email'];
        $termes = $key['termes'];
        $confidentialite = $key['confidentialite'];

    }
    # code...
}


 ?>
<div class="nk-msg-profile visible" data-simplebar>
    <div class="card">
        <div class="card-inner-group">
            <div class="card-inner">
                <div class="user-card user-card-s2 mb-2">
                    <div class="user-avatar md bg-primary">
                        <span><img src="<?= base_url('js/images/favicon.png')?>" class="img-responsive img-fluid"></span>
                    </div>
                    <div class="user-info">
                        <h5> <span style="color: rgb(204, 205, 207); font-size: 16px;"><font class="text-warning">Dev</font><font class="text-info">tech</font><font class="text-success">nology</font></span></h5>
                        <span class="sub-text">Informations</span>
                    </div>
                    <div class="user-card-menu dropdown">
                        <a href="#" class="btn btn-icon btn-sm btn-trigger dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="link-list-opt no-bdr">
                                <li><a href="<?php echo(base_url()) ?>admin/role"><em class="icon ni ni-na"></em><span>Parametrage rôle</span></a></li>
                                <li><a href="<?php echo(base_url()) ?>admin/site"><em class="icon ni ni-globe"></em><span>Parametrage site</span></a></li>
                                <div class="dropdown-divider"></div>
                                <li><a href="<?php echo(base_url()) ?>admin/dashbord"><em class="icon ni ni-repeat"></em><span>Plus d'info</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row text-center g-1">
                    <div class="col-4">
                        <div class="profile-stats">
                            <span class="amount"><i class="fa fa-globe"></i></span>
                            <span class="sub-text"><?php echo($nom_site) ?></span>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="profile-stats">
                            <span class="amount"><i class="fa fa-mobile-phone"></i></span>
                            <span class="sub-text"><?php echo($tel1) ?></span>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="profile-stats">
                            <span class="amount"><i class="fa fa-phone"></i></span>
                            <span class="sub-text"><?php echo($tel2) ?></span>
                        </div>
                    </div>
                </div>
            </div><!-- .card-inner -->
            <div class="card-inner">
                <div class="aside-wg">
                    <h6 class="overline-title-alt mb-2">Information de contact</h6>
                    <ul class="user-contacts">
                        <li>
                            <em class="icon ni ni-mail"></em><span><?php echo($email_info) ?></span>
                        </li>
                        <li>
                            <em class="icon ni ni-call"></em><span><?php echo($tel1) ?></span>
                        </li>
                        <li>
                            <em class="icon ni ni-map-pin"></em><span><?php echo($adresse) ?></span>
                        </li>
                    </ul>
                </div>
                <div class="aside-wg">
                    <h6 class="overline-title-alt mb-2">Réseaux sociaux</h6>
                    <div class="row gx-1 gy-3">
                        <div class="col-6">
                            <span class="sub-text">Facebook: </span>
                            <span class="lead-text text-success text-muted"><a target="_blank" href="<?php echo($facebook) ?>"><i class="fa fa-facebook"></i>&nbsp;facebook</a></span>
                        </div>
                        <div class="col-6">
                            <span class="sub-text">Twitter:</span>
                            <span class="lead-text text-success text-muted"><a target="_blank" href="<?php echo($twitter) ?>"><i class="fa fa-twitter"></i>&nbsp;Twitter</a></span>
                        </div>
                        <div class="col-6">
                            <span class="sub-text">Linkedin:</span>
                            <span class="lead-text text-success text-muted"><a target="_blank" href="<?php echo($linkedin) ?>"><i class="fa fa-linkedin"></i>&nbsp;Linkedin</a></span>
                        </div>
                        <div class="col-6">
                            <span class="sub-text">Mail:</span>
                            <span><a href="mailto: <?php echo($email_info) ?>"><?php echo($email_info) ?></a></span>
                        </div>
                    </div>
                </div>
                <div class="aside-wg">
                    <h6 class="overline-title-alt mb-2">Assigned Account</h6>
                    <ul class="align-center g-2">
                        <li>
                            <div class="user-avatar bg-primary">
                                <span><i class="fa fa-facebook"></i></span>
                            </div>
                        </li>
                        <li>
                            <div class="user-avatar bg-info">
                                <span><i class="fa fa-twitter"></i></span>
                            </div>
                        </li>
                        <li>
                            <div class="user-avatar bg-pink">
                                <span><i class="fa fa-google"></i></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- .card-inner -->
        </div>
    </div>
</div><!-- .nk-msg-profile -->