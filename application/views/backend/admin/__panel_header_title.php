 <div class="nk-msg-head">
    <h4 class="title d-none d-lg-block text-center"><?php echo($title) ?></h4>
    <div class="nk-msg-head-meta">
        <div class="d-none d-lg-block">
            <ul class="nk-msg-tags">
                <li><span class="label-tag"><em class="icon ni ni-flag-fill"></em> <span>Effectuez l'opération</span></span></li>
            </ul>
        </div>
        <div class="d-lg-none"><a href="#" class="btn btn-icon btn-trigger nk-msg-hide ml-n1"><em class="icon ni ni-arrow-left"></em></a></div>
        <ul class="nk-msg-actions">
            <li><a href="javascript:void(0);" class="btn btn-dim btn-sm btn-outline-light userModal" id="add_button" data-toggle="modal" data-target="#userModal"><em class="icon ni ni-check"></em><span>Ajouter une action</span></a></li>
            <!-- <li><span class="badge badge-dim badge-success badge-sm"><em class="icon ni ni-check"></em><span>Closed</span></span></li> -->
            <li class="d-lg-none"><a href="javascript:void(0);" class="btn btn-icon btn-sm btn-white btn-light profile-toggle"><em class="icon ni ni-info-i"></em></a></li>
            <li class="dropdown">
                <a href="#" class="btn btn-icon btn-sm btn-white btn-light dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <ul class="link-list-opt no-bdr">
                        <li><a href="javascript:void(0);" class="userModal"><em class="icon ni ni-user-add"></em><span>Faire une action</span></a></li>
                        <li><a href=""><i class="fa fa-refresh"></i><span> &nbsp;&nbsp; Actualisez la page</span></a></li>
                        <li><a href="javascript:history.go(-1);"><em class="icon ni ni-done"></em><span>Retour en arrière</span></a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    <a href="#" class="nk-msg-profile-toggle profile-toggle active"><em class="icon ni ni-arrow-left"></em></a>
</div><!-- .nk-msg-head -->