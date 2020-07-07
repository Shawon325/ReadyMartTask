@extends('Backend.layouts.backend_head')
@section('head_name', 'Dashboard')
@section('content')




    <!-- Info blocks -->
    <ul class="info-blocks">
        <li class="bg-primary">
            <div class="top-info">
                <a href="#">Add new post</a>
                <small>post management</small>
            </div>
            <a href="#"><i class="icon-pencil"></i></a>
            <span class="bottom-info bg-danger">12 drafts in progress</span>
        </li>
        <li class="bg-success">
            <div class="top-info">
                <a href="#">Site parameters</a>
                <small>layout settings</small>
            </div>
            <a href="#"><i class="icon-cogs"></i></a>
            <span class="bottom-info bg-primary">No updates</span>
        </li>
        <li class="bg-danger">
            <div class="top-info">
                <a href="#">Site statistics</a>
                <small>visits, users, orders stats</small>
            </div>
            <a href="#"><i class="icon-stats2"></i></a>
            <span class="bottom-info bg-primary">3 new updates</span>
        </li>
        <li class="bg-info">
            <div class="top-info">
                <a href="#">My messages</a>
                <small>messages history</small>
            </div>
            <a href="#"><i class="icon-bubbles3"></i></a>
            <span class="bottom-info bg-primary">24 new messages</span>
        </li>
        <li class="bg-warning">
            <div class="top-info">
                <a href="#">Orders history</a>
                <small>purchases statistics</small>
            </div>
            <a href="#"><i class="icon-cart2"></i></a>
            <span class="bottom-info bg-primary">17 new orders</span>
        </li>
        <li class="bg-primary">
            <div class="top-info">
                <a href="#">Invoices stats</a>
                <small>invoices archive</small>
            </div>
            <a href="#"><i class="icon-coin"></i></a>
            <span class="bottom-info bg-danger">9 new invoices</span>
        </li>
    </ul>
    <!-- /info blocks -->


    <!-- Alert -->
    <div class="alert alert-warning fade in block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <i class="icon-info"></i> Nullam tincidunt dapibus nisi. Aenean porttitor egestas dolor, ut pretium enim vehicula at. Vivamus vulputate risus felis, eget blandit urna aliquam at
    </div>
    <!-- /alert -->


    <!-- Questions and contact -->
    <div class="row">
        <div class="col-md-6">

            <!-- Questions -->
            <h6><i class="icon-question5"></i> Newest questions</h6>
            <div class="panel-group block">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h6 class="panel-title panel-trigger">
                            <a data-toggle="collapse" href="#question1">1. Morbi a nulla quis enim porttitor hasellus rutrum tincidunt lacus?</a>
                        </h6>
                    </div>
                    <div id="question1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p class="alert alert-success fade in text-center">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                Maecenas imperdiet euismod rutrum. Vivamus at lacus vel nibh ullamcorper aliquam vel nec felis. Duis eu neque dignissim, imperdiet tellus vitae, interdum purus.
                            </p>
                            <hr>
                            <p><strong>Praesent sollicitudin vulputate mauris, sodales auctor neque sollicitudin sed. Vestibulum non aliquet lorem, vel vehicula tellus. Vestibulum ante ipsum primis.</strong></p>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h6 class="panel-title panel-trigger">
                            <a data-toggle="collapse" href="#question2">2. Suspendisse rhoncus vulputate enim erat non euismod fermentum?</a>
                        </h6>
                    </div>
                    <div id="question2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p class="alert alert-success fade in text-center">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                Maecenas imperdiet euismod rutrum. Vivamus at lacus vel nibh ullamcorper aliquam vel nec felis. Duis eu neque dignissim, imperdiet tellus vitae, interdum purus.
                            </p>
                            <hr>
                            <p><strong>Praesent sollicitudin vulputate mauris, sodales auctor neque sollicitudin sed. Vestibulum non aliquet lorem, vel vehicula tellus. Vestibulum ante ipsum primis.</strong></p>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h6 class="panel-title panel-trigger">
                            <a data-toggle="collapse" href="#question3">3. Nullam non massa nec augue pharetra venenatis facilisis viverra?</a>
                        </h6>
                    </div>
                    <div id="question3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p class="alert alert-success fade in text-center">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                Maecenas imperdiet euismod rutrum. Vivamus at lacus vel nibh ullamcorper aliquam vel nec felis. Duis eu neque dignissim, imperdiet tellus vitae, interdum purus.
                            </p>
                            <hr>
                            <p><strong>Praesent sollicitudin vulputate mauris, sodales auctor neque sollicitudin sed. Vestibulum non aliquet lorem, vel vehicula tellus. Vestibulum ante ipsum primis.</strong></p>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h6 class="panel-title panel-trigger">
                            <a data-toggle="collapse" href="#question4">4. Aliquam at nisi eget lacus tincidunt semper?</a>
                        </h6>
                    </div>
                    <div id="question4" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p class="alert alert-success fade in text-center">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                Maecenas imperdiet euismod rutrum. Vivamus at lacus vel nibh ullamcorper aliquam vel nec felis. Duis eu neque dignissim, imperdiet tellus vitae, interdum purus.
                            </p>
                            <hr>
                            <p><strong>Praesent sollicitudin vulputate mauris, sodales auctor neque sollicitudin sed. Vestibulum non aliquet lorem, vel vehicula tellus. Vestibulum ante ipsum primis.</strong></p>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h6 class="panel-title panel-trigger">
                            <a data-toggle="collapse" href="#question5">5. Vivamus sit amet nulla ac nulla iaculis blandit vitae?</a>
                        </h6>
                    </div>
                    <div id="question5" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p class="alert alert-success fade in text-center">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                Maecenas imperdiet euismod rutrum. Vivamus at lacus vel nibh ullamcorper aliquam vel nec felis. Duis eu neque dignissim, imperdiet tellus vitae, interdum purus.
                            </p>
                            <hr>
                            <p><strong>Praesent sollicitudin vulputate mauris, sodales auctor neque sollicitudin sed. Vestibulum non aliquet lorem, vel vehicula tellus. Vestibulum ante ipsum primis.</strong></p>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h6 class="panel-title panel-trigger">
                            <a data-toggle="collapse" href="#question6">6. Nunc vitae eleifend sapien. Vestibulum et?</a>
                        </h6>
                    </div>
                    <div id="question6" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p class="alert alert-success fade in text-center">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                Maecenas imperdiet euismod rutrum. Vivamus at lacus vel nibh ullamcorper aliquam vel nec felis. Duis eu neque dignissim, imperdiet tellus vitae, interdum purus.
                            </p>
                            <hr>
                            <p><strong>Praesent sollicitudin vulputate mauris, sodales auctor neque sollicitudin sed. Vestibulum non aliquet lorem, vel vehicula tellus. Vestibulum ante ipsum primis.</strong></p>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                        </div>
                    </div>
                </div>
            </div>
            <!-- Questions -->

        </div>

        <div class="col-md-6">

            <!-- Contacts -->
            <div class="block">
                <h6><i class="icon-paragraph-justify2"></i> Online contacts</h6>
                <ul class="message-list">

                    <li class="message-list-header">Buddies</li>

                    <li>
                        <div class="clearfix">
                            <div class="chat-member">
                                <a href="#"><img src="images/demo/users/face1.png" alt=""></a>
                                <h6>Eugene Kopyov <span class="status status-success"></span> <small>&nbsp; /&nbsp; Wed developer</small></h6>
                            </div>
                            <div class="chat-actions">
                                <a class="btn btn-link btn-icon btn-xs"><i class="icon-bubble3"></i></a>
                                <a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a>
                                <a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="clearfix">
                            <div class="chat-member">
                                <a href="#"><img src="images/demo/users/face2.png" alt=""></a>
                                <h6>Duncan McMart <span class="status status-default"></span> <small>&nbsp; /&nbsp; Wed designer</small></h6>
                            </div>
                            <div class="chat-actions">
                                <a class="btn btn-link btn-icon btn-xs"><i class="icon-bubble3"></i></a>
                                <a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a>
                                <a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="clearfix">
                            <div class="chat-member">
                                <a href="#"><img src="images/demo/users/face3.png" alt=""></a>
                                <h6>Lucy Smith <span class="status status-warning"></span> <small>&nbsp; /&nbsp; UI expert</small></h6>
                            </div>
                            <div class="chat-actions">
                                <a class="btn btn-link btn-icon btn-xs"><i class="icon-bubble3"></i></a>
                                <a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a>
                                <a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>

        </div>
    </div>
@endsection
