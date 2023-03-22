<style>
  .navbar-custom {
max-height: 70px;
}
</style>
<?php $id = $AuthUser->get('id'); ?>                    
<!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-menu float-end mb-0">
                            <li class="dropdown notification-list d-lg-none">
                               <?php if(isset($Dashboard)): ?>
                                <input type="button" class="btn btn-primary" data-bs-toggle="modal" value="Criar Gráfico" data-bs-target="#staticBackdrop" 
style="font-size: 10px; margin-top: 20px; margin-right: 4px;">
                               <?php endif; ?>
                               <?php if(isset($Usuario)): ?>
                                <input type="button" class="btn btn-primary" data-bs-toggle="modal" value="Adicionar Usuário" data-bs-target="#userGeral" 
style="font-size: 10px; margin-top: 20px; margin-right: 4px;">
                               <?php endif; ?>
                            </li>
                            <li class="dropdown notification-list d-lg-none">
                                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-search noti-icon"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                    <form class="p-3">
                                        <input type="text" class="form-control" placeholder="Pesquisar ..." aria-label="Recipient's username">
                                    </form>
                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a onclick="visualizaNotificacao()" class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-bell noti-icon"></i>
                                    <div id="iconL">
                                    
                                  </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title px-3">
                                        <h5 class="m-0">
                                            <span class="float-end">
                                               <div id="limp">
                                                <a href="javascript: void(0);" onclick="limpUnicNot(0)" class="text-dark">
                                                    <small>Limpar Todos</small>
                                                </a>
                                              </div>
                                            </span>Notificações
                                        </h5>
                                    </div>

                                    <div class="px-3" style="max-height: 300px;" data-simplebar id="notificacaoDiv">
                                    </div>

                                    <div id="verT">
                                    <a href="javascript:void(0);"  data-bs-toggle="modal" data-bs-target="#notificacaoG" class="dropdown-item text-center text-primary notify-item border-top border-light py-2">
                                        Ver Todas
                                    </a>
                                  </div>

                                </div>
                            </li>

                            <li class="dropdown notification-list d-none d-sm-inline-block">
                                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-view-apps noti-icon"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg p-0">

                                    <div class="p-2">
                                        <div class="row g-0">
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="/assets/images/logo/solar-icon.png" alt="Solar">
                                                    <span>Painel Solar</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="/assets/images/logo/logistica-icon.png" alt="Logística">
                                                    <span>Painel Logística</span>
                                                </a>
                                            </div>                                            
                                        </div>

                                        <div class="row g-0">
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="/assets/images/logo/loja-icon.png" alt="E-Commerce">
                                                    <span>E-Commerce</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="/assets/images/logo/horus-icon.webp" alt="Site">
                                                    <span>Site Institucional</span>
                                                </a>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>

                                </div>
                            </li>

<!--                             <li class="notification-list">
                                <a class="nav-link end-bar-toggle" href="javascript: void(0);">
                                    <i class="dripicons-gear noti-icon"></i>
                                </a>
                            </li> -->
                           
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                    <span class="account-user-avatar"> 
                                    <?php $arquivo = $_SERVER["DOCUMENT_ROOT"] . "/assets/images/usuarios/$id.jpg";   ?>
                                    <?php if(file_exists($arquivo)): ?>  
                                        <img src="<?= APPURL . "/assets/images/usuarios/$id.jpg"?>" alt="user-image" class="rounded-circle">
                                   <?php else: ?>
                                          <img src="<?= APPURL . "/assets/image/avatar/horus.png"?>" alt="user-image" class="rounded-circle">
                                   <?php endif; ?>   
                                  </span>
                                    <span>
                                        <span class="account-user-name text-wrap" ><?= substr($AuthUser->get("firstname"), 0, 15) . ' ...';  ?></span>
                                        <span class="account-position">Brasília</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Menu do Usuário</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="<?= APPURL . "/perfil"?>" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle me-1"></i>
                                        <span>Minha Conta</span>
                                    </a>

                                    <!-- item-->
                                    <a href="https://suporte.storgetec.com.br" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lifebuoy me-1"></i>
                                        <span>Suporte</span>
                                    </a>

                                    <!-- item-->
                                    <a href="<?= APPURL . "/logout"?>" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout me-1"></i>
                                        <span>Sair</span>
                                    </a>
                                </div>
                            </li>

                        </ul>
                        <button class="button-menu-mobile open-left">
                            <i class="mdi mdi-menu"></i>
                        </button>
                        <div class="app-search dropdown d-none d-lg-block">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control dropdown-toggle"  placeholder="Pesquisar..." id="top-search" style="max-width:25%;">
                                    <span class="mdi mdi-magnify search-icon"></span>
                                    <button class="input-group-text btn-primary bs-none" style="height:38px;">Pesquisar</button> 
                                    <?php if(isset($Dashboard)): ?>
                                    <input type="button" class="btn btn-primary" data-bs-toggle="modal" value="Criar gráfico" data-bs-target="#staticBackdrop">
                                    <?php endif; ?>
                                    <?php if(isset($Usuario)): ?>
                                    <input type="button" class="btn btn-primary" data-bs-toggle="modal" value="Adicionar usuário" data-bs-target="#userGeral">
                                    <?php endif; ?>
                                  <div class="header-group ml-auto">
                                    <h4 class="d-inline-block" style="margin-right: 5px; color: orange;"><?= $nomeProcesso ?></h4>
                                    <button type="button" class="btn btn-primary btn-sm ms-3 bs-none" data-bs-toggle="modal" data-bs-target="#modalTask" onclick="edicaoTarefa()">Adicionar tarefa</button>	
                                    <div class="d-inline-block">
																			<button type="button" class="btn btn-dark btnKanban invert bs-none" title="Visualização em kanban"><i class="dripicons-view-list" style="position:relative;top: 0px;right: 4px;"></i> </button>
																			<button type="button" class="btn btn-dark btnLista bs-none" style="height:37px;" title="Visualização em lista"><i class="dripicons-view-list" style="position:relative;top:-1px;"></i> </button>
							                      </div>
                                  </div>
                                </div>
                            </form>
                        
                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h5 class="text-overflow mb-2">Função de pesquisa <span class="text-danger">EM CONSTRUÇÃO</span></h5>
                                </div>
                            </div>                          
                        </div>
                    </div>
                    <!-- end Topbar -->